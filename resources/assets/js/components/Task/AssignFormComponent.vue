<template>
<div>
    <form>
        <div class="form-group">
            <label>Employee</label>
            <select class="form-control" v-model="item.employee_id">
                <option v-for="employee in employees" :key="employee.id" :value="employee.id">{{ employee.name }}</option>
            </select>
        </div>
        <div class="form-group">
            <label>Task</label>
            <select class="form-control" v-model="item.task_id">
                <option v-for="task in tasks" :key="task.id" :value="task.id">{{ task.name }}</option>
            </select>
        </div> 
        <button type="button" v-on:click.prevent="saveAction('employees/assigns', item, 'employee/edit/'+item.employee_id)" class="btn btn-primary">Submit</button>
        <router-link to="/task" role="button" class="btn btn-danger">Cancel</router-link>
    </form>
</div>
</template>
<script>
    import saveActionMixin from './../../mixins/saveActionMixin';
    export default{
        data() {
            return {
                employees: [],
                tasks: [],
                item: {                    
                    employee_id: null,
                    task_id: null
                }                
            }
        },
        created() {
            axios.get(APP_URL + '/api/employees').then((response) => {                
                this.employees = response.data
            }).catch((error) => {
                // alert(error);
            });

            axios.get(APP_URL + '/api/tasks').then((response) => {                
                this.tasks = response.data
            }).catch((error) => {
                // alert(error);
            });
        },
        mixins: [saveActionMixin]
    }
</script>