export default {
    methods: {
        saveAction(actionName, data, routeName) {

            let url = APP_URL + '/api/' + actionName;
            url = (data.id) ? url + '/' + data.id : url;
            let typeMethod = (data.id) ? 'patch' : 'post';
            axios({
                method: typeMethod,
                url: url,
                data: data
            }).then((response) => {
                this.$router.push('/' + routeName);
            }).catch((error) => {

            });
        }
    }
}
