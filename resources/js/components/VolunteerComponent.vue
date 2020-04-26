<script>
    export default {
        mounted() {
            this.loading = true
            setTimeout(() => this.fetchVolunteers(), 1000)  
        },
        data(){
            return {
                volunteers: [],
                volunteer: {
                    name: '',
                    phone: '',
                    org_id: '',
                    expertise: '',
                },
                volunteer_id: '',
                pagination:{},
                edit:false,
                showVolunteerForm:false,
            }

        },
        methods: {
            fetchVolunteers(){
                axios.get('api/volunteers')
                .then( res => {
                    this.volunteers = res.data.data
                    console.log(res.data.data)
                })
            },
            saveVolunteer(){
                let formData = {
                    name : this.volunteer.name,
                    phone : this.volunteer.phone,
                    org_id : this.volunteer.org_id,
                    expertise : this.volunteer.expertise,
                }

                let method = !this.volunteer_id ? 'post' : 'put'
                let url = !this.volunteer_id ? `api/volunteers` : `api/volunteers/${this.volunteer_id}`

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
                        this.fetchVolunteers()

                        this.showVolunteerForm = false
                        this.volunteer.name = ''
                        this.volunteer.phone = ''
                        this.volunteer.org_id = ''
                        this.volunteer.expertise = ''
                        this.volunteer_id = ''
                    }else{
                        alert('Something Went Wrong!!')
                    }
                });  
                
            },

            EditVolunteer(data){
                this.showVolunteerForm = true
                this.volunteer_id = data.id
                this.volunteer.name = data.name
                this.volunteer.phone = data.phone
                this.volunteer.org_id = data.org_id
                this.volunteer.expertise = data.expertise
            },

            deleteVolunteer(id) {
                if (confirm('Are You Sure?')) {

                    axios['delete'](`api/volunteers/${id}`)
                    .then(response => {
                        alert('Volunteer Removed')
                        this.fetchVolunteers()
                    })
                    .catch(err => console.log(err));
                }
            },
            toggoleVolunteerForm(){
                this.showVolunteerForm = !this.showVolunteerForm
            },
            closeVolunteerForm(){
                this.volunteer_id = ''
                this.showVolunteerForm = false
                this.volunteer.name = ''
                this.volunteer.phone = ''
                this.volunteer.org_id = ''
                this.volunteer.expertise = ''
            }
        },
    }
</script>