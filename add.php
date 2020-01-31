<?php
    $conn= mysqli_connect('localhost', 'u240741497_mau', 'mauadmin', 'u240741497_booklab');

    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error(); 
    }


    $sql = 'SELECT * FROM autoresForma';
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
    }
    $autoresForma = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($conn);
    
    $randAutor = $autoresForma[rand(0,count($autoresForma)-1)];

    $conn= mysqli_connect('localhost', 'u240741497_mau', 'mauadmin', 'u240741497_booklab');

    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error(); 
    }
    $workName;
    $workSelect;
    $artistName;
    $username;
    $subject;
    $workLink;
    $formError;

        
    if(isset($_POST['submit'])){
        $formError = false;
        if(empty($_POST['workName'])){
			echo('Se necesita el titulo');
            $formError = true;
		} else{
			$workName = $_POST['workName'];
		}
        
        if($_POST['workSelect'] == "0"){
            if(empty($_POST['otherWorkSelect'])){
                echo('Se necesita el tipo');
                $formError = true;
            } else{
                $workSelect = $_POST['otherWorkSelect'];
            }
        } else{
            $workSelect = $_POST['workSelect'];
        }
        
        if(empty($_POST['artistName'])){
			echo('Se necesita el artista');
            $formError = true;
		} else{
			$artistName = $_POST['artistName'];
		}
        
        if(empty($_POST['heroName'])){
			echo('Agrega tu nombre');
            $formError = true;
		} else{
			$userName = $_POST['heroName'];
		}
        
        if(empty($_POST['subject'])){
			echo('Agrega la descripción');
            $formError = true;
		} else{
			$subject = $_POST['subject'];
		}
        
        $workLink = $_POST['link'];
        
        if(!$formError){
            $sql = "insert into posts (obra,artista,usuario,subject,link,tipoDeObra) values ('$workName','$artistName','$userName','$subject','$workLink','$workSelect')";
            
            if(mysqli_query($conn, $sql)){
				// success
				header('Location: index.php');
			} else {
				echo 'query error: '. mysqli_error($conn);
			}
        }
    }
?>

<!DOCTYPE html>
<html lang="es">

    <?php include('templates/header.php'); ?>
    
    <section class="container">
        <h4 class="center">Añade Material</h4>
        <form class="" action="add.php" method="POST">
            <div class="input-field col s12">
                <select class="workSelect" name="workSelect">
                    <optgroup label="Audiovisual">
                        <option value="documental">Documental</option>
                        <option value="pelicula">Pelicula</option>
                        <option value="serie">Serie</option>
                        <option value="video">Video</option>
                    </optgroup>
                    <optgroup label="Música">
                        <option value="album">Álbum</option>
                        <option value="cancion">Canción</option>
                    </optgroup>
                    <optgroup label="Literatura">
                        <option value="libro">Libro</option>
                        <option value="articulo">Articulo</option>
                    </optgroup>
                    <optgroup label="Otro">
                        <option value="0">Otro</option>
                    </optgroup>
                </select>
            </div>
            <input type="text" name="otherWorkSelect"  placeholder="Escribe el tipo de obra" class="other">
            <label>Tipo de Obra</label>
            <br><br>
            <input type="text" name="workName" class="workName" placeholder="12 Reglas para vivir" required>
            <label>Nombre de la Obra</label>
            <br><br>
            <input type="text" name="artistName" class="artistName" placeholder="Jordan Peterson">
            <label>Nombre del Autor/Artista/Director (Si es necesario)</label>
            <br><br>
            <input type="text" name="heroName" placeholder="Fred Kofman" required>
            <label>Tu Nombre</label>
            <br><br>
            <textarea id="subject" name="subject" placeholder="Esta obra la elegí por..." style="height:200px" required></textarea>
            <label>¿Porqué esta obra?</label>
            <br><br>
            <input type="text" name="link" placeholder="Spotify, Amazon, Youtube...">
            <label>Donde se puede encontrar</label>
            <br><br>
            <div class="center" style="padding-top: 2vw">
                <input type="submit" name="submit" value="submit" class="btn grey darken-3">
            </div>
        </form>
    </section>
    
    <script>
    $(document).ready(function(){
        $('select').formSelect();
        $('.workName').attr("placeholder", "<?php echo $randAutor['libro'] ?>");
        $('.artistName').attr("placeholder", "<?php echo $randAutor['autor'] ?>");
    });
    
    formComplete = false;
        
    $( ".workSelect" ).change(function() {
        var selected = $( ".workSelect" ).val();
        if(selected == 0){
            $( ".other" ).css("display", "block");
        }else{
            $( ".other" ).css("display", "none");
        }
    });
    
    
        
    </script>
    
    </body>
</html>