<script>
    export default {
        mounted() {
            this.loading = true
            setTimeout(() => this.fetchFamilies(), 1000)  
        },
        data(){
            return {
                families: [],
                family: {
                    name: '',
                    phone: '',
                    donation_area_id: '',
                    type: '',
                    elderly: '',
                    adult: '',
                    children: '',
                    smoker: '',
                    respiratory: '',
                    diabetes: '',
                    heart: '',
                    details: '',
                    contact_history: 0,
                },
                family_id: '',
                pagination:{},
                edit:false,
                showFamilyForm:false,
            }

        },
        methods: {
            fetchFamilies(){
                axios.get('api/families')
                .then( res => {
                    this.families = res.data.data
                    console.log(res.data.data)
                })
            },
            saveFamily(){
                let formData = {
                    name : this.family.name,
                    phone : this.family.phone,
                    donation_area_id : this.family.donation_area_id,
                    type : this.family.type,
                    elderly : this.family.elderly,
                    adult : this.family.adult,
                    children : this.family.children,
                    smoker : this.family.smoker,
                    respiratory : this.family.respiratory,
                    diabetes : this.family.diabetes,
                    heart : this.family.heart,
                    details : this.family.details,
                    contact_history : this.family.contact_history
                }

                let method = !this.family_id ? 'post' : 'put'
                let url = !this.family_id ? `api/families` : `api/families/${this.family_id}`

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
                        this.fetchFamilies()

                        this.showFamilyForm = false
                        this.family.name = ''
                        this.family.phone = ''
                        this.family.donation_area_id = ''
                        this.family.type = ''
                        this.family.elderly = ''
                        this.family.adult = ''
                        this.family.children = ''
                        this.family.smoker = ''
                        this.family.respiratory = ''
                        this.family.diabetes = ''
                        this.family.heart = ''
                        this.family.details = ''
                        this.family.contact_history = ''
                    }else{
                        alert(response.data.error.message)
                    }
                });  
                
            },

            EditFamily(data){
                this.showFamilyForm = true
                this.family_id = data.id
                this.family.name = data.name
                this.family.phone = data.phone
                this.family.donation_area_id = data.donation_area_id
                this.family.type = data.type
                this.family.elderly = data.elderly
                this.family.adult = data.adult
                this.family.children = data.children
                this.family.smoker = data.smoker
                this.family.respiratory = data.respiratory
                this.family.diabetes = data.diabetes
                this.family.heart = data.heart
                this.family.details = data.details
                this.family.contact_history = data.contact_history
            },

            deleteFamily(id) {
                if (confirm('Are You Sure?')) {

                    axios['delete'](`api/families/${id}`)
                    .then(response => {
                        alert('Family Removed')
                        this.fetchFamilies()
                    })
                    .catch(err => console.log(err));
                }
            },
            toggoleFamilyForm(){
                this.showFamilyForm = !this.showFamilyForm
            },
            closeFamilyForm(){
                this.family_id = ''
                this.showFamilyForm = false
            }
        },
    }
</script>