const { createApp } = vue;

createApp({
    data() {
        return {
            dischiList : [],
        }
    }, mounted() {
        axios.get('./server.php').then( res => {
            console.log(res);
        })
    }
}).mount('#app');