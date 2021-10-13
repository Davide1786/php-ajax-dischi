const app = new Vue({
    el: '#root',
    data: {
     elencoAlbum : [],
     selected : '',
    },
    methods: {
        filterArray() {
            // console.log(this.selected);
            axios
                    .get('api/server.php')
                    .then ((res) => {
                        if (this.selected == '') {
                            this.elencoAlbum = res.data;
                        }else {
                            this.elencoAlbum = res.data.filter(tipo => tipo.genre == this.selected);
                        }  
                    })
        },

    },
    created() {
        axios
            .get('api/server.php')
            .then ((res) => {
                this.elencoAlbum = res.data;
                // console.log(this.elencoAlbum);
                // console.log(res);
                // this.elencoAlbum.forEach(X => {
                //     console.log(X.genre);
                // });
            }) 
    }
})