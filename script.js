const app = new Vue({

    el: "#app",

    data:{
        canzoni:[]
    },

    created(){
        axios.get('http://localhost:8888/php-ajax-dischi/api.php')
        .then(res => {
            console.log("ciaone")
            this.canzoni = res.data;
            console.log(this.dischi);
        })
        .catch(err => {
            console.log("error");
        })
    }

    

})