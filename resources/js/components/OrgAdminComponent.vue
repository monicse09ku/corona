<script>
    export default {
        mounted() {
            this.loading = true
            setTimeout(() => this.fetchOrgAdmins(), 1000)
        },
        data(){
            return {
                org_admins: [],
                org_admin: {
                    user_id: '',
                    org_id: '',
                },
                org_admin_id: '',
                pagination:{},
                edit:false,
                showOrgAdminForm:false,
            }

        },
        methods: {
            fetchOrgAdmins(page = 1){
                axios.get('api/org-admins?page='+page)
                .then( res => {
                    this.org_admins = res.data.data
                    this.pagination = res.data.meta
                    console.log(res.data)
                })
            },
            saveOrgAdmin(){
                let formData = {
                    user_id : this.org_admin.user_id,
                    org_id : this.org_admin.org_id,
                }

                let method = !this.org_admin_id ? 'post' : 'put'
                let url = !this.org_admin_id ? `api/org-admins` : `api/org-admins/${this.org_admin_id}`

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
                        this.fetchOrgAdmins()

                        this.showOrgAdminForm = false
                        this.org_admin.user_id = ''
                        this.org_admin.org_id = ''
                        this.org_admin_id = ''
                    }else{
                        alert('Something Went Wrong!!')
                    }
                });

            },

            EditOrgAdmin(data){
                this.showOrgAdminForm = true
                this.org_admin_id = data.id
                this.org_admin.user_id = data.user_id
                this.org_admin.org_id = data.org_id
            },

            deleteOrgAdmin(id) {
                if (confirm('Are You Sure?')) {

                    axios['delete'](`api/org-admins/${id}`)
                    .then(response => {
                        alert('Organisation Admin Removed')
                        this.fetchOrgAdmins()
                    })
                    .catch(err => console.log(err));
                }
            },
            toggoleOrgAdminForm(){
                this.showOrgAdminForm = !this.showOrgAdminForm
            },
            closeOrgAdminForm(){
                this.org_admin_id = ''
                this.showOrgAdminForm = false
                this.org_admin.user_id = ''
                this.org_admin.org_id = ''
            }
        },
    }
</script>
