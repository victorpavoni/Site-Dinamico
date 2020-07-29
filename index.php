<?php 

    include 'config.php';
    $url = isset($_GET['url']) ? $_GET['url'] : 'home';

    Site::updateUsuarioOnline();

 ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/style.css">
	<script src="https://kit.fontawesome.com/84ffe3cdd8.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="<?php echo INCLUDE_PATH; ?>favicon.ico">
    <title>Portifolio / 
        <?php if($url == '' or $url == 'home'){
            echo ucfirst("Home");
        } else{
            echo ucfirst("$url");
        }?>
        
    </title>
</head>
<body>
    <header>
        <div class="center">
            <div class="logo left">
                <a href="<?php echo INCLUDE_PATH; ?>">LOGOMARCA</a>
                <span></span>
            </div>
            <div class="menu-desktop right">
                <ul>
                    <li>
                        <a href="<?php echo INCLUDE_PATH; ?>">HOME</a>
                        <span class="first"></span>
                    </li>
                    <li>
                        <a href="<?php echo INCLUDE_PATH; ?>contato">CONTATO</a>
                        <span class="last"></span>
                    </li>
                    <li>
                        <a href="<?php echo INCLUDE_PATH; ?>painel/">LOGIN</a>
                        <span class="middle"></span>
                    </li>
                </ul>
            </div><!--menu-desktop-->
            
            <div class="menu-mobile right">
                <div class="menu-btn">
                    <i class="fa fa-bars"></i>
                </div><!--menu-btn-->
                <div class="clear"></div>
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">HOME</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">CONTATO</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>painel/">LOGIN</a></li>
                </ul>
            </div><!--menu-mobile-->
        </div><!--center-->
        <div class="clear"></div><!--clear-->
    </header>

    <?php 

        if(file_exists("pages/$url.php")) {
            include "pages/$url.php";
        } else {
            if($url == '' or $url == 'home') {
                include "pages/home.php";
            } else {
                include "pages/404.php";
            }
        }

     ?>
     <div class="sucesso">
         <p><i class="far fa-bell"></i> Campos enviados com sucesso!</p>
     </div>
     <div class="erro">
         <p><i class="far fa-bell"></i> Houve um erro ao enviar os campos!</p>
     </div>
     <div class="overlay-loading">
        <img src="<?php echo INCLUDE_PATH; ?>images/ajax-loader.gif">
     </div><!--overlay-loading-->
    <footer>
        <div class="center">
            <p>EliteXSites - Todos os direitos reservados</p>
        </div><!--center-->
    </footer>
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/formularios.js"></script>
</body>
</html>