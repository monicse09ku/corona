<script>
    import VueGoogleAutocomplete from 'vue-google-autocomplete'
    export default {
        components: { VueGoogleAutocomplete },
        mounted() {
            this.loading = true
            setTimeout(() => this.fetchDonationAreas(), 1000)  
        },
        data(){
            return {
                donationAreas: [],
                donationArea: {
                    area_name: '',
                    status: '',
                },
                donation_area_id: '',
                pagination:{},
                edit:false,
                showDonationAreaForm:false,
            }

        },
        methods: {
            getAddressData: function (addressData, placeResultData, id) {
                //this.address = addressData;
                console.log('addressData')
                console.log(addressData)
            },
            fetchDonationAreas(){
                axios.get('api/donation-areas')
                .then( res => {
                    this.donationAreas = res.data.data
                })
            },
            saveDonationArea(){
                let formData = {
                    area_name : this.donationArea.area_name,
                    status : this.donationArea.status,
                    user_id : document.getElementById("user_id").value
                }

                let method = !this.donation_area_id ? 'post' : 'put'
                let url = !this.donation_area_id ? `api/donation-areas` : `api/donation-areas/${this.donation_area_id}`

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
                        this.fetchDonationAreas()

                        this.showDonationAreaForm = false
                        this.donationArea.area_name = ''
                        this.donationArea.status = ''
                    }else{
                        alert(response.data.error.message)
                    }
                });  
                
            },

            EditDonationArea(data){
                this.showDonationAreaForm = true
                this.donation_area_id = data.id
                this.donationArea.area_name = data.area_name
                this.donationArea.status = data.status
            },

            deleteDonationArea(id) {
                if (confirm('Are You Sure?')) {
                    fetch(`api/donation-areas/${id}`, {
                        method: 'delete'
                    })
                    .then(res => res.json())
                    .then(data => {
                        alert('Donation Areas Removed');
                        this.fetchDonationAreas();
                    })
                    .catch(err => console.log(err));
                }
            },
            toggoleDonationAreaFormForm(){
                this.showDonationAreaForm = !this.showDonationAreaForm
            },
            closeDonationAreaForm(){
                this.donation_area_id = ''
                this.showDonationAreaForm = false
            }
        },
    }
</script>