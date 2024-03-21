
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Dischi-json</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- vue 3 -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
        
    <div id="app">
        <div class="header">
        <div class="container">
            <div class="logo">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Spotify_logo_without_text.svg/2048px-Spotify_logo_without_text.svg.png" alt="">
            </div>
            
        </div>
    </div>
      
        
    <div class="container p-5">
            <ul>
                <li
                v-for=" (dischi, index) in dischiList "
                @click="viewAlbum(index)"
                >
                <img :src="dischi['poster']" alt="">
                <span class="title">{{ dischi['title'] }}</span>
                <span class="author">{{ dischi['author'] }}</span>
                <span class="year">{{ dischi['year'] }}</span>
                </li>
            </ul>
    </div>
<!--     v-if si visualizza soltanto se selectedAlbum è diverso da undefined, quindi è definito
 --><div id="album-details" v-if=" selectedAlbum.title != undefined" >

    <div class="album">
        <img :src="selectedAlbum.poster" alt="">
        <span class="title">{{selectedAlbum.title }}</span>
        <span class="author">{{selectedAlbum.author }}</span>
        <span class="year">{{selectedAlbum.year }}</span>
        
    </div>
   <button id="close-button">
        X 
   </button>
    </div>

    </div>







    <script src="./js/main.js"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
