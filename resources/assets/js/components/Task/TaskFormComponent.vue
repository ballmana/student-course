<template>
<div>
    <h3 class="card-title">Task Form</h3>
    <form>
        <div class="form-group">
            <label>Name</label>
            <input type="text" v-model="item.name" class="form-control">
        </div>    
        <div class="form-group">
            <label>Detail</label>
            <textarea v-model="item.detail" class="form-control"></textarea>
        </div> 
        <button type="button" v-on:click.prevent="saveAction('tasks', item, 'task')" class="btn btn-primary">Submit</button>
        <router-link to="/task" role="button" class="btn btn-danger">Cancel</router-link>
    </form>
        <hr>
    <template v-if="employees.length > 0 && employees && id>0">
        <h5 class="card-title">Employees of <strong>{{ item.name }}</strong></h5>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Country</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(employee, index) in employees" :key="employee.id">
                <td>{{ (index+1) }}</td>                
                <td>{{ employee.name }}</td>
                <td>{{ employee.email }}</td>
               <td>{{ employee.age }}</td>
               <td>{{ employee.gender }}</td>
               <td>{{ employee.country }}</td>
            </tr>
        </tbody>
    </table>
    </template>
    <template v-else>
        <h4 class="text-muted">Empty Employees</h4>
    </template>
</div>
</template>
<script>
    import saveActionMixin from './../../mixins/saveActionMixin';
    export default{
        data() {
            return {
                employees: [],
                item: {},
                id: this.$route.params.id ? this.$route.params.id : 0,
            }
        },
        created() {
            axios.get(APP_URL + '/api/tasks/'+this.id).then((response) => {                
                this.item = response.data.task
                this.employees = response.data.employees
            }).catch((error) => {
                // alert(error);
            });
        },
        mixins: [saveActionMixin]
    }
</script>