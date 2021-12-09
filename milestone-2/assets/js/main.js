const app = new Vue({
    el: '#app',
    data:{
        musics: null,
    },
    mounted(){
        axios
        .get('./api/apiMusics.php')
        .then(response => {
        console.log(response);
        this.musics = response.data
      }).catch(error => {
        console.log(error);
      })
    }
})