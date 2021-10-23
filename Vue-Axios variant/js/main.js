const app = new Vue({
    el: '#root',
    data: {
        albums: null
    },
    created() {
        axios.get('http://localhost/php-ajax-dischi/Vue-Axios%20variant/api/')
        .then((response) => {
            this.albums = response.data;
        })
        .catch((error) => {
            console.log(error);
        });
    },
    methods: {

    }
})