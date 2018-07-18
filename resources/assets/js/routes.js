import Employee from './components/Employee/EmployeeComponent.vue';
import EmployeeForm from './components/Employee/EmployeeFormComponent.vue';
import Task from './components/Task/TaskComponent.vue';
import TaskForm from './components/Task/TaskFormComponent.vue';
import AssignForm from './components/Task/AssignFormComponent.vue';

export const routes = [
    {
        path: '/employee',
        component: Employee
    },
    {
        path: '/employee/edit/:id',
        component: EmployeeForm
    },
    {
        path: '/employee/create',
        component: EmployeeForm
    },
    {
        path: '/task',
        component: Task
    },
    {
        path: '/task/edit/:id',
        component: TaskForm
    },
    {
        path: '/task/create',
        component: TaskForm
    },
    {
        path: '/assign',
        component: AssignForm
    },
    {path: '*', redirect: '/employee' }
];
