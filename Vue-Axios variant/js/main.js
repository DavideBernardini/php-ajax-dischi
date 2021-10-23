const app = new Vue({
    el: '#root',
    data: {
        albums: null,
        genres: [],
        genreSelected: '',
    },
    created() {
        axios.get('http://localhost/php-ajax-dischi/Vue-Axios%20variant/api/')
            .then((response) => {
                this.albums = response.data;

                response.data.forEach(album => {

                    if (this.genres.includes(album.genre) == false) {
                        this.genres.push(album.genre);
                    }

                });
            })
            .catch((error) => {
                console.log(error);
            });
    },
    methods: {
        onSelectGenre() {
            axios.get('http://localhost/php-ajax-dischi/Vue-Axios%20variant/api/', {
                params: {
                    'genre': this.genreSelected
                }
            })
            .then((response) => {
                this.albums = response.data;
            })
            .catch((error) => {
                console.log(error);
            });
        }
    }
})