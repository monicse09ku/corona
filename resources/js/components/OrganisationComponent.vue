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
                        this.organisation.name = ''
                        this.organisation.status = ''
                        this.org_id = ''
                    }else{
                        alert('Something Went Wrong!!')
                    }
                });  
                
            },

            EditOrganisation(data){
                this.showOrganisationForm = true
                this.organisation_id = data.id
                this.organisation.name = data.name
                this.organisation.status = data.status
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