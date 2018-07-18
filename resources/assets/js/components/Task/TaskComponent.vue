<template>
<div>
    <router-link to="/task/create">+ Create Task</router-link>
    <hr>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
            </tr>
        </thead>
        <tbody>
           <tr v-for="(item, index) in tasks" :key="item.id">
               <td>{{ (index+1) }}</td>
               <td>
                   <router-link :to="'/task/edit/'+item.id">{{ item.name }}</router-link>
                </td>
           </tr> 
        </tbody>
    </table>
</div>
</template>
<script>
    export default{
        data() {
            return {
                tasks: []
            }
        },
        created() {
            axios.get(APP_URL + '/api/tasks').then((response) => {                
                this.tasks = response.data
            }).catch((error) => {
                // alert(error);
            });
        }
    }
</script>