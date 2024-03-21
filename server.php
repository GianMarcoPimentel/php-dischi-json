<?php
// trasfromo l'array in un elemento json

    // la lista dei dischi viene letta da un file esterno (disc-list-json)
    $discPage = file_get_contents("./disc-list.json");
    //     $discPage = file_get_contents(__DIR__"./disc-list.json");
    //var_dump($discPage);
    //header("");
    $dischiList = json_decode( $discPage );

    //gestiamo il nuovo parametro
    if( isset($_GET['disckIndex']) && $_GET['disckIndex'] != '' ) {

        // mi salvo l'indice della variabile
        $disc_index =  $_GET['disckIndex'];
       // var_dump($dischiList[$disc_index]);

       // predno solo l'album dall'array corrispondetnte all'indice ricevuto 
       $selected_album = $dischiList[$disc_index];
       //converto alubm in json

       $album_json = json_encode($selected_album);
       //var_dump( $album_json );

       header("Content-Type: application/json");

       echo $album_json;
    } else {
        //var_dump($dischiList);
        $disc_page = json_encode( $dischiList );

        header("Content-Type: application/json");
        echo  $disc_page ;

    }


    // per eliminare un componente :
        // array_splice($dischiList,5,1);


/* var_dump( $_POST["index"] ); */


// in qualcosa che posso inviare al nostro main.js
// che possiamo leggere con axios (che legge dei file json)
// json_encode( $dischi );

// dobbiamo anche dire che server.php quando il server lo renderizza 
// indichi che siano informazione json
//header("Content-Type: application/json");
//echo  $disc_page ;