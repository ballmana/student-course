<template>
<div>
    <router-link to="/employee/create">+ Create Employee</router-link>
    <hr>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Age</th>
                <th scope="col">Gender</th>
                <th scope="col">Contry</th>
            </tr>
        </thead>
        <tbody>
           <tr v-for="(item, index) in employees" :key="item.id">
               <td>{{ (index+1) }}</td>
               <td>
                   <router-link :to="'/employee/edit/'+item.id">{{ item.name }}</router-link>
                </td>
               <td>{{ item.email }}</td>
               <td>{{ item.age }}</td>
               <td>{{ item.gender }}</td>
               <td>{{ item.country }}</td>
           </tr> 
        </tbody>
    </table>
</div>
</template>
<script>
    export default{
        data() {
            return {
                employees: []
            }
        },
        created() {
            axios.get(APP_URL + '/api/employees').then((response) => {                
                this.employees = response.data
            }).catch((error) => {
                // alert(error);
            });
        }
    }
</script>