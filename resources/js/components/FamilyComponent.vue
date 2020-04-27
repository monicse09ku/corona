<script>
    import Multiselect from 'vue-multiselect'

    export default {
        components: {
            Multiselect
        },
        mounted() {
            this.loading = true
            setTimeout(() => this.fetchFamilies(), 1000)
        },
        data(){
            return {
                options: [
                    { name: 'শ্বাসতন্ত্', language: 'Respiratory' },
                    { name: 'ডায়াবেটিস', language: 'Diabetes' },
                    { name: 'রক্তচাপ', language: 'Blood Pressure' },
                    { name: 'ধূমপান', language: 'Smoking' }
                ],
                families: [],
                family: {
                    name: '',
                    phone: '',
                    occupation: '',
                    donation_area_id: '',
                    type: '',
                    elderly: '',
                    adult: '',
                    children: '',
                    medications: [],
                    contact_history: 0,
                },
                family_id: '',
                pagination:{},
                edit:false,
                showFamilyForm:false,
            }
        },
        methods: {
            fetchFamilies(page = 1){
                axios.get('api/families?page=' + page)
                .then( res => {
                    this.families = res.data.data
                    this.pagination = res.data.meta
                    // console.log(res)
                })
            },
            saveFamily(){
                let formData = {
                    name : this.family.name,
                    phone : this.family.phone,
                    occupation : this.family.occupation,
                    donation_area_id : this.family.donation_area_id,
                    type : this.family.type,
                    elderly : this.family.elderly,
                    adult : this.family.adult,
                    children : this.family.children,
                    medications : this.family.medications,
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
                        this.family.occupation = ''
                        this.family.donation_area_id = ''
                        this.family.type = ''
                        this.family.elderly = ''
                        this.family.adult = ''
                        this.family.children = ''
                        this.family.medications = []
                        this.family.details = ''
                        this.family.contact_history = ''
                        this.family_id = ''
                    }else{
                        alert('Something Went Wrong!!')
                    }
                });

            },
            EditFamily(data){
                this.showFamilyForm = true
                this.family_id = data.id
                this.family.name = data.name
                this.family.phone = data.phone
                this.family.occupation = data.occupation
                this.family.donation_area_id = data.donation_area_id
                this.family.type = data.type
                this.family.elderly = data.elderly
                this.family.adult = data.adult
                this.family.children = data.children

                if(data.medications){
                    let medications = data.medications.split(', ')
                    this.family.medications = this.getPreviousMedications(medications)
                }else{
                    this.family.medications = []
                }


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
                this.family.name = ''
                this.family.phone = ''
                this.family.occupation = ''
                this.family.donation_area_id = ''
                this.family.type = ''
                this.family.elderly = ''
                this.family.adult = ''
                this.family.children = ''
                this.family.medications = []
                this.family.details = ''
                this.family.contact_history = ''
            },
            getPreviousMedications(medications){
                let medications_array = []
                medications_array['Respiratory'] = "শ্বাসতন্ত্"
                medications_array['Diabetes'] = "ডায়াবেটিস"
                medications_array['Blood Pressure'] = "রক্তচাপ"
                medications_array['Smoking'] = "ধূমপান"

                let selected_medications = []

                medications.forEach(function(entry) {
                    let raw_medications = { name: medications_array[entry], language: entry }
                    selected_medications.push(raw_medications)
                })

                return selected_medications
            }
        },
    }
</script>
