const { createApp } = Vue;

createApp({
    data() {
        return {
            dischiList : [],
            selectedAlbum : {},
        }
    }, 
   
    mounted() {
        //
    console.log(axios);
        axios.get('./server.php').then( res => {
            console.log(res.data);
            this.dischiList = res.data;
        })
    },
    // devo aggiungere il parametro discIndex
    // per sapere qual è l'indice cliccato devo passarlo come parametro della funzione
    methods: {
        viewAlbum(index) {
            //console.log(index);
            //console.log('./server.php?disckIndex=' + index )
           axios.get('./server.php?disckIndex=' + index ).then(res => {
            console.log(res.data);
            this.selectedAlbum = res.data;
           })

        },

       
    },

    /* methods: {
        viewDischi(index){
            axios.post('./server/server.php?discIndex=' + index).then( res => {
                console.log(res.data);
                this.selectedAlbum = res.data;
                
            });
        }
    }, */
}).mount('#app');