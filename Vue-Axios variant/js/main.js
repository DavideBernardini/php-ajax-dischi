const app = new Vue({
    el: '#root',
    data: {
        albums: null,
        genres: null,
        genreSelected: '',
    },
    created() {
        axios.get('http://localhost/php-ajax-dischi/Vue-Axios%20variant/api/')
            .then((response) => {
                this.albums = response.data[0];
                this.genres = response.data[1];
            })
            .catch((error) => {
                console.log(error);
            });
    },
    methods: {
        onSelectGenre() {
            
            axios.get('http://localhost/php-ajax-dischi/Vue-Axios%20variant/api/', {
                    params: {
                        genre: this.genreSelected
                    }
                })
                .then((response) => {
                    if (this.genreSelected != '' ) {
                    this.albums = response.data;
                } else {
                        this.albums = response.data[0];
                    }
                })
                .catch((error) => {
                    console.log(error);
                });
            
        }
    }
})