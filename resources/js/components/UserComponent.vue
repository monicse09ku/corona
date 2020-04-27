<script>
    export default {
        mounted() {
            this.loading = true
            setTimeout(() => this.fetchUsers(), 1000)
        },
        data(){
            return {
                users: [],
                user: {
                    name: '',
                    email: '',
                    password: '',
                    confirmPassword: '',
                    phone: '',
                    role: '',
                    status: '',
                },
                user_id: '',
                pagination:{},
                edit:false,
                showUserForm:false,
            }

        },
        methods: {
            fetchUsers(){
                axios.get('api/users')
                .then( res => {
                    this.users = res.data.data
                    console.log(res.data.data)
                })
            },
            saveUser(){
                let formData = {
                    name : this.user.name,
                    email : this.user.email,
                    phone : this.user.phone,
                    password : this.user.password,
                    confirmPassword : this.user.confirmPassword,
                    role : this.user.role,
                    status : this.user.status,
                }

                if(!this.user_id){
                    if(this.user.password !== this.user.confirmPassword){
                        alert('Password and Confirm Password mismatch')
                        return
                    }
                }

                let method = !this.user_id ? 'post' : 'put'
                let url = !this.user_id ? `api/users` : `api/users/${this.user_id}`

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
                        this.fetchUsers()

                        this.showUserForm = false
                        this.user.name = ''
                        this.user.email = ''
                        this.user.phone = ''
                        this.user.password = ''
                        this.user.confirmPassword = ''
                        this.user.role = ''
                        this.user.status = ''
                        this.user_id = ''
                    }else{
                        alert('Something Went Wrong!!')
                    }
                });

            },

            EditUser(data){
                this.showUserForm = true
                this.user_id = data.id
                this.user.name = data.name
                this.user.email = data.email
                this.user.phone = data.phone
                this.user.role = data.role
                this.user.status = data.status
            },

            deleteUser(id) {
                if (confirm('Are You Sure?')) {

                    axios['delete'](`api/users/${id}`)
                    .then(response => {
                        alert('User Removed')
                        this.fetchUsers()
                    })
                    .catch(err => console.log(err));
                }
            },
            toggoleUserForm(){
                this.showUserForm = !this.showUserForm
            },
            closeUserForm(){
                this.user_id = ''
                this.showUserForm = false
                this.user.name = ''
                this.user.email = ''
                this.user.phone = ''
                this.user.password = ''
                this.user.confirmPassword = ''
                this.user.role = ''
                this.user.status = ''
            }
        },
    }
</script>
