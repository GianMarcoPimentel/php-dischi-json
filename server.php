<?php
$dischi =   [
                [
                    "title" => "New Jersey",
                    "author" => "Bon Jovi",
                    "year" => 1988,
                    "poster" => "https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg",
                    "genre" => "Rock"
                ],
                [
                    "title" => "Live at Wembley 86",
                    "author" => "Queen",
                    "year" => 1992,
                    "poster" => "https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg",
                    "genre" => "Pop"
                ],
                [
                    "title" => "Ten\"s Summoner\"s Tales",
                    "author" => "Sting",
                    "year" => 1993,
                    "poster" => "https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg",
                    "genre" => "Pop"
                ],
                [
                    "title" => "Steve Gadd band",
                    "author" => "Steve Gadd Band",
                    "year" => 2018,
                    "poster" => "https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg",
                    "genre" => "Jazz"
                ],
                [
                    "title" => "Brave new World",
                    "author" => "Iron Maiden",
                    "year" => 2000,
                    "poster" => "https://upload.wikimedia.org/wikipedia/en/0/03/Iron_Maiden_-_Brave_New_World.jpg",
                    "genre" => "Metal"
                ],
                [
                    "title" => "One more car, one more rider",
                    "author" => "Eric Clapton",
                    "year" => 2002,
                    "poster" => "https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg",
                    "genre" => "Rock"
                ]
            ];
                
// trasfromo l'array in un elemento json
// in qualcosa che posso inviare al nostro main.js
// che possiamo leggere con axios (che legge dei file json)
// json_encode( $dischi );

// dobbiamo anche dire che server.php quando il server lo renderizza 
// indichi che siano informazione json
header("Content-Type: application/json");
echo json_encode( $dischi );