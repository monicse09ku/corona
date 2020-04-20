<script>
    export default {
        mounted() {
            this.loading = true
            setTimeout(() => this.fetchExpenses(), 1000)  
        },
        data(){
            return {
                expenses: [],
                expense: {
                    summary: '',
                    medium: '',
                    account: '',
                    amount: '',
                    org_id: '',
                },
                image: '',
                expense_id: '',
                pagination:{},
                edit:false,
                showExpenseForm:false,
            }

        },
        methods: {
            onImageChange(e){
                this.image = e.target.files[0]
            },
            fetchExpenses(){
                axios.get('api/expenses')
                .then( res => {
                    this.expenses = res.data.data
                })
            },
            saveExpense(){
                let formData = new FormData();
                formData.append('file', this.image);
                formData.append('summary', this.expense.summary);
                formData.append('medium', this.expense.medium);
                formData.append('account', this.expense.account);
                formData.append('amount', this.expense.amount);
                formData.append('org_id', this.expense.org_id);

                let url = !this.expense_id ? `api/expenses` : `api/expenses/${this.expense_id}?_method=PUT`

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
                        this.fetchExpenses()

                        this.showExpenseForm = false
                        this.expense.summary = ''
                        this.expense.medium = ''
                        this.expense.account = ''
                        this.expense.amount = ''
                        this.expense.org_id = ''
                        this.image = ''
                        this.expense_id = ''
                    }else{
                        alert('Something Went Wrong!!')
                    }
                });  
                
            },

            EditExpense(data){
                this.showExpenseForm = true
                this.expense_id = data.id
                this.expense.summary = data.summary
                this.expense.medium = data.medium
                this.expense.account = data.account
                this.expense.amount = data.amount
                this.expense.org_id = data.org_id
            },

            deleteExpense(id) {
                if (confirm('Are You Sure?')) {

                    axios['delete'](`api/expenses/${id}`)
                    .then(response => {
                        alert('Expense Removed')
                        this.fetchExpenses()
                    })
                    .catch(err => console.log(err));
                }
            },
            toggoleExpenseForm(){
                this.showExpenseForm = !this.showExpenseForm
            },
            closeExpenseForm(){
                this.expense_id = ''
                this.showExpenseForm = false
            }
        },
    }
</script>