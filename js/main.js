const { createApp } = Vue;

createApp({
    data() {
        return {
            dischiList : [],
            diskIndex : '',
        }
    }, 
    methods: {
        viewDischi(){
            console.log("apripagina");
        }
    },
    mounted() {
        console.log(axios);
        axios.get('./server.php').then( res => {
            console.log(res.data);
            this.dischiList = res.data;
        })
    }
}).mount('#app');