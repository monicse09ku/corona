<script>
    export default {
        mounted() {
            this.loading = true
            setTimeout(() => this.fetchOrganisations(), 1000)  
        },
        data(){
            return {
                organisations: [],
                organisation: {
                    name: '',
                    status: '',
                    user_id: '',
                },
                org_id: '',
                pagination:{},
                edit:false,
                showOrganisationForm:false,
            }

        },
        methods: {
            fetchOrganisations(){
                axios.get('api/organisations')
                .then( res => {
                    this.organisations = res.data.data
                    console.log(res.data.data)
                })
            },
            saveOrganisation(){
                let formData = {
                    name : this.organisation.name,
                    status : this.organisation.status,
                    user_id : this.organisation.user_id
                }

                let method = !this.organisation_id ? 'post' : 'put'
                let url = !this.organisation_id ? `api/organisations` : `api/organisations/${this.organisation_id}`

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
                        this.fetchOrganisations()

                        this.showOrganisationForm = false
                        this.organisation.area_name = ''
                        this.organisation.status = ''
                    }else{
                        alert(response.data.error.message)
                    }
                });  
                
            },

            EditOrganisation(data){
                this.showOrganisationForm = true
                this.organisation_id = data.id
                this.organisation.name = data.name
                this.organisation.status = data.status
                this.organisation.user_id = data.user_id
            },

            deleteOrganisation(id) {
                if (confirm('Are You Sure?')) {

                    axios['delete'](`api/organisations/${id}`)
                    .then(response => {
                        alert('Organisation Removed')
                        this.fetchOrganisations()
                    })
                    .catch(err => console.log(err));
                }
            },
            toggoleOrganisationForm(){
                this.showOrganisationForm = !this.showOrganisationForm
            },
            closeOrganisationForm(){
                this.organisation_id = ''
                this.showOrganisationForm = false
            }
        },
    }
</script>