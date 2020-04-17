<script>
    export default {
        mounted() {
            this.loading = true
            setTimeout(() => this.fetchDonors(), 1000)  
        },
        data(){
            return {
                donors: [],
                donor: {
                    summary: '',
                    medium: '',
                    amount: '',
                    org_id: '',
                },
                image: '',
                donor_id: '',
                pagination:{},
                edit:false,
                showDonorForm:false,
            }

        },
        methods: {
            onImageChange(e){
                this.image = e.target.files[0]
            },
            fetchDonors(){
                axios.get('api/donors')
                .then( res => {
                    this.donors = res.data.data
                })
            },
            saveDonor(){
                let formData = new FormData();
                formData.append('file', this.image);
                formData.append('summary', this.donor.summary);
                formData.append('medium', this.donor.medium);
                formData.append('amount', this.donor.amount);
                formData.append('org_id', this.donor.org_id);

                let url = !this.donor_id ? `api/donors` : `api/donors/${this.donor_id}?_method=PUT`

                axios({
                  method: 'post',
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
                        this.fetchDonors()

                        this.showDonorForm = false
                        this.donor.summary = ''
                        this.donor.medium = ''
                        this.donor.amount = ''
                        this.donor.org_id = ''
                        this.image = ''
                    }else{
                        alert(response.data.error.message)
                    }
                });  
                
            },

            EditDonor(data){
                this.showDonorForm = true
                this.donor_id = data.id
                this.donor.summary = data.summary
                this.donor.medium = data.medium
                this.donor.amount = data.amount
                this.donor.org_id = data.org_id
            },

            deleteDonor(id) {
                if (confirm('Are You Sure?')) {

                    axios['delete'](`api/donors/${id}`)
                    .then(response => {
                        alert('Donor Removed')
                        this.fetchDonors()
                    })
                    .catch(err => console.log(err));
                }
            },
            toggoleDonorForm(){
                this.showDonorForm = !this.showDonorForm
            },
            closeDonorForm(){
                this.donor_id = ''
                this.showDonorForm = false
            }
        },
    }
</script>