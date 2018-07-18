<template>
<div>
    <h3 class="card-title">Employee Form</h3>
    <form>
        <div class="form-group">
            <label>Name</label>
            <input type="text" v-model="item.name" class="form-control">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" v-model="item.email" class="form-control">
        </div>
        <div class="form-group">
            <label>Age</label>
            <input type="text" v-model="item.age" class="form-control">
        </div>
        <div class="form-group">
            <label>Gender</label>
            <select class="form-control" v-model="item.gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>
        <div class="form-group">
            <label>Country</label>
            <input type="text" v-model="item.country" class="form-control">
        </div>       
        <button type="button" v-on:click.prevent="saveAction('employees', item, 'employee')" class="btn btn-primary">Submit</button>
        <router-link to="/employee" role="button" class="btn btn-danger">Cancel</router-link>
    </form>
    <hr>
    <template v-if="tasks.length > 0 && tasks && id>0">
        <h5 class="card-title">Tasks of <strong>{{ item.name }}</strong></h5>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>ID</th>
                <th>Task Name</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(task, index) in tasks" :key="task.id">
                <td>{{ (index+1) }}</td>
                <td>{{ task.id }}</td>
                <td>{{ task.name }}</td>
            </tr>
        </tbody>
    </table>
    <router-link to="/assign">+ Assign</router-link>
    </template>
    <template v-else>
        <h4 class="text-muted">Empty tasks</h4>
    </template>
    
</div>
</template>
<script>
    import saveActionMixin from './../../mixins/saveActionMixin';
    export default{
        data() {
            return {
                item: {},
                tasks: [],
                id: this.$route.params.id ? this.$route.params.id : 0,
            }
        },
        created() {
            axios.get(APP_URL + '/api/employees/'+this.id).then((response) => {                                
                this.item = response.data.employee
                this.tasks = response.data.tasks
            }).catch((error) => {
                // alert(error);
            });
        },
        mixins: [saveActionMixin]
    }
</script>