<html>
    <head>
        <title>login</title>
        <link rel="stylesheet" type="text/css" href="public/css/login.css">
        <link rel="stylesheet" type="text/css" href="public/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="public/css/animate.css">
        <link rel="stylesheet" type="text/css" href="public/css/materialize.min.css">
        <script  type="text/javascript" src="public/JS/jquery-2.1.1.min.js"></script>
         <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="public/JS/jquery-migrate.js"></script>
    </head>
    <body>
        <div class="background-wrap">
            <video id="video-bg-elem" preload="auto" autoplay="true" muted="muted" loop="true">
                <source src="public/files/1.mp4" type="video/mp4">
                Video Not Supported
            </video>
        </div>
        <div class="content">
            <form  class="login" method="post" action="controller/adMinController.php">
                <div id="log">
                    <fieldset>
                        <legend class="legend">Connexion</legend>
                        <div class="input-field">
                            <i class="material-icons prefix"></i>
                            <input type="text" id="username" name="username" ><br>
                            <label for="username">Login</label>
                        </div>
                        <div class="input-field">
                             <i class="material-icons prefix"></i>
                            <input type="password" id="password" name="password"  ><br>
                            <label for="password">Mot de Passe</label>
                        </div>
                    </fieldset>
                    <button class="submit1" type="submit">Se Connecter</button>
                </div>
            </form>
            <?php if(isset($_GET['erreur'])){
                echo "<div class='alert alert-danger'>Erreur!Login ou Mot de Passe Incorrect</div>";
            }
            ?>
          
                 <button id="btn" class="submit">Consulat du Tchad au Sénégal</button>
                
        </div>
        <script src="public/JS/materialize.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#btn').click(function(){
                    $('#log').toggle(500);
                    $('#btn').fadeOut(1000);
                });
            });

        </script>


    </body>
</html>