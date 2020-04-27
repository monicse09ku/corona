<script>
    import Multiselect from 'vue-multiselect'

    export default {
        components: {
            Multiselect
        },
        mounted() {
            this.loading = true
            setTimeout(() => this.fetchDonations(), 1000)
        },
        data(){
            return {
                donated_families: [],
                donations: [],
                families: [],
                donation: {
                    donation_area_id: '',
                    family_ids: [],
                    org_id: ''
                },
                donation_id: '',
                pagination:{},
                edit:false,
                showDonationForm:false,
                showDonatedFamilies:false,
            }

        },
        methods: {
            fetchDonations(page=1){
                axios.get('api/donations?page='+page)
                .then( res => {
                    this.donations = res.data.data
                    this.pagination = res.data.meta
                    console.log(res.data.data)
                })
            },
            getAllFamilies(){
                axios.get('api/donation-area-families/'+this.donation.donation_area_id)
                .then( res => {
                    let all_families = res.data.data
                    let raw_families = []

                    all_families.forEach(function(entry) {
                        let single_families = { name: entry.name, id: entry.id }
                        raw_families.push(single_families)
                    })

                    this.families = raw_families
                    console.log(res.data.data)
                })
            },
            saveDonation(){
                let formData = {
                    donation_area_id : this.donation.donation_area_id,
                    family_ids : this.donation.family_ids,
                    org_id : this.donation.org_id
                }

                let method = !this.donation_id ? 'post' : 'put'
                let url = !this.donation_id ? `api/donations` : `api/donations/${this.donation_id}`

                axios({
                  method: method,
                  url: url,
                  data: formData,
                  validateStatus: (status) => {
                    return true; // I'm always returning true, you may want to do it depending on the status received
                  },
                }).catch(error => {
                    alert('Something Went Wrong')
                }).then(response => {
                    if(response.status === 200){
                        alert('Success')
                        this.fetchDonations()

                        this.showDonationForm = false
                        this.donation.donation_area_id = ''
                        this.donation.family_ids = []
                        this.donation.org_id = ''
                        this.donation_id = ''
                    }else{
                        alert('Something Went Wrong!!')
                    }
                });

            },

            ViewDonation(data){
                this.donated_families = data.family_ids
                this.showDonatedFamilies = true
            },

            EditDonation(data){
                this.showDonationForm = true
                this.donation_id = data.id
                this.donation.donation_area_id = data.donation_area_id
                this.getAllFamilies()
                this.donation.family_ids = data.family_ids
                this.donation.org_id = data.org_id
            },

            deleteDonation(id) {
                if (confirm('Are You Sure?')) {

                    axios['delete'](`api/donations/${id}`)
                    .then(response => {
                        alert('Donation Removed')
                        this.fetchDonations()
                    })
                    .catch(err => console.log(err));
                }
            },
            toggoleDonationForm(){
                this.showDonationForm = !this.showDonationForm
            },
            closeDonationForm(){
                this.donation_id = ''
                this.showDonationForm = false
                this.donation.donation_area_id = ''
                this.donation.family_ids = []
                this.donation.org_id = ''
            },
            closeDonatedFamilies(){
                this.donated_families = []
                this.showDonatedFamilies = false
            }
        },
    }
</script>
