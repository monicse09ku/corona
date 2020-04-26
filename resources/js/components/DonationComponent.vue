<script>
    export default {
        mounted() {
            this.loading = true
            setTimeout(() => this.fetchDonations(), 1000)  
        },
        data(){
            return {
                donations: [],
                families: [],
                donation: {
                    donation_area_id: '',
                    family_id: '',
                    org_id: ''
                },
                donation_id: '',
                pagination:{},
                edit:false,
                showDonationForm:false,
            }

        },
        methods: {
            fetchDonations(){
                axios.get('api/donations')
                .then( res => {
                    this.donations = res.data.data
                    console.log(res.data.data)
                })
            },
            getAllFamilies(){
                axios.get('api/donation-area-families/'+this.donation.donation_area_id)
                .then( res => {
                    this.families = res.data.data
                    console.log(res.data.data)
                })
            },
            saveDonation(){
                let formData = {
                    donation_area_id : this.donation.donation_area_id,
                    family_id : this.donation.family_id,
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
                        this.donation.family_id = ''
                        this.donation.org_id = ''
                    }else{
                        alert(response.data.error.message)
                    }
                });  
                
            },

            EditDonation(data){
                this.showDonationForm = true
                this.donation_id = data.id
                this.donation.donation_area_id = data.donation_area_id
                this.donation.family_id = data.family_id
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
            }
        },
    }
</script>