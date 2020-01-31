<?php
    $link= mysqli_connect('localhost', 'u240741497_mau', 'mauadmin', 'u240741497_booklab');

    if(!$link){
        echo 'Connection error: ' . mysqli_connect_error(); 
    }

    $sql = 'SELECT * FROM posts';
    $result = mysqli_query($link, $sql);
    if (!$result) {
        printf("Error: %s\n", mysqli_error($link));
    }
    $postsArr = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($link);

    function getIcon($tipoDeObra) {
        switch ($tipoDeObra) {
            case "documental":
                return "local_movies";
            break;
            case "pelicula":
                echo "movie_creation";
            break;
            case "serie":
                echo "emoji_people";
            break;
            case "video":
                echo "personal_video";
            break;
            case "album":
                return "library_music";
            break;
            case "cancion":
                echo "music_note";
            break;
            case "libro":
                echo "menu_book";
            break;
            case "article":
                echo "accessibility_new";
            break;
            default:
                echo "sentiment_satisfied";
        }
    } 
?>

<!DOCTYPE html>
<html lang="es">

    <?php include('templates/header.php'); ?>
    <ul class="collapsible">
    <?php foreach($postsArr as $post){ ?>
        <li>
        <div class="collapsible-header">
            <div class="container">
                <div class="row">
                    <div class="col s2 m1 collIcon"><span class=""><i class="material-icons"><?php echo(getIcon($post['tipoDeObra'])) ?></i></span></div>
                    <div class="col s4 m2 collTitle"><span class="right-align grey-text text-darken-4"><?php echo($post['obra'])?></span></div>
                    <div class="col s3 m2 collArtist">De: <span class="grey-text text-lighten-1"><?php echo($post['artista'])?></span></div>
                    <div class="col s3 offset-m5 collUser">Por: <span class="right-align grey-text text-darken-2"><?php echo($post['usuario'])?></span></div>
                </div>
            </div>
        </div>
        <div class="collapsible-body">
            <div class="container">
                <div class="row">
                    <div class="col m6 offset-m2 collUser"><p><?php echo($post['subject'])?></p></div>
                </div>
                <div class="row">
                    <div class="col m3 collUser"><p><?php echo($post['link'])?></p></div>
                    <div class="col m3 offset-m4 collTime"><p><?php echo($post['created_at'])?></p></div>
                </div>
            </div>
        </div>
        </li>
    <?php }?>
    </ul>
    
    <script>
        $(document).ready(function(){
            $('.collapsible').collapsible();
        });
    </script>
    </body>
</html>