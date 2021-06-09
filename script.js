const app = new Vue({

    el: "#app",

    data:{
        canzoni:[],
        genere:[],
        genereSearch: 'all',
        apiURL: 'http://localhost:8888/php-ajax-dischi/api.php'
    },

    methods:{

        getApi(){
            axios.get(this.apiURL,{
                params:{
                    genre: this.genereSearch
                }
            }
            )
            .then(res => {

                this.canzoni = res.data.album;
                this.genere = res.data.genres;
                console.log(this.canzoni);
                console.log(this.genere);

            })
            .catch(err => {

                console.log("error");
                
            })
        }

    },

    created(){
        
        this.getApi();

    }

    

})