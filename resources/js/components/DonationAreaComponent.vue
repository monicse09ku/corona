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
                    lat: '',
                    long: '',
                },
                donation_area_id: '',
                pagination:{},
                edit:false,
                showDonationAreaForm:false,
            }

        },
        methods: {
            getAddressData: function (addressData, placeResultData, id) {
                this.donationArea.area_name = addressData.route + ', ' + addressData.locality
                this.donationArea.lat = addressData.latitude
                this.donationArea.long = addressData.longitude
            },
            fetchDonationAreas(page=1){
                axios.get('api/donation-areas?page='+page)
                .then( res => {
                    this.donationAreas = res.data
                })
            },
            saveDonationArea(){
                let formData = {
                    area_name : this.donationArea.area_name,
                    status : this.donationArea.status,
                    lat : this.donationArea.lat,
                    long : this.donationArea.long,
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
                        this.donationArea.lat = ''
                        this.donationArea.long = ''
                        this.donation_area_id = ''
                    }else{
                        alert('Something Went Wrong!!')
                    }
                });

            },

            EditDonationArea(data){
                this.showDonationAreaForm = true
                this.donation_area_id = data.id
                this.donationArea.area_name = data.area_name
                this.donationArea.status = data.status
                this.donationArea.lat = data.lat
                this.donationArea.long = data.long
                document.getElementById('map').value = data.area_name
            },

            deleteDonationArea(id) {
                if (confirm('Are You Sure?')) {
                    axios['delete'](`api/donation-areas/${id}`)
                    .then(response => {
                        alert('Donation Areas Removed')
                        this.fetchDonationAreas()
                    })
                    .catch(err => console.log(err))
                }
            },
            toggoleDonationAreaForm(){
                this.showDonationAreaForm = !this.showDonationAreaForm
            },
            closeDonationAreaForm(){
                this.donation_area_id = ''
                this.showDonationAreaForm = false
                this.donationArea.area_name = ''
                this.donationArea.status = ''
                this.donationArea.lat = ''
                this.donationArea.long = ''
            }
        },
    }
</script>
