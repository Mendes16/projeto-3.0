<?php
//  *include 'controlador/conexao.php';
session_start();


include('controlador/verifica_session.php');
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Acessibilidade</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" />

</head>
<body>
<header id="header">
    <nav class="navbar navbar-default navbar-static-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand">
                    <a href="index.html"><h1>Acessibility</h1></a>
                </div>
            </div>
            <div class="navbar-collapse collapse">
                <div class="menu">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation"><a href="index.html">Home</a></li>
                        <li role="presentation"><a href="sobre.html">Sobre</a></li>
                        <li role="presentation"><a href="tipos.html">Tipos</a></li>
                        <li role="presentation"><a href="login.phtml"  class="active">Login</a></li>
                        <li role="presentation"><a href="cadastro.phtml">Cadastre-se</a></li>
                    </ul>
                </div>
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->
</header><!--/header-->


<footer>

</footer>

<div class="sub-footer">
    <div class="container">
        <div class="social-icon">
            <div class="col-md-4">
                <ul class="social-network">
                    <li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- jQuery  -->
<script src="js/jquery.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
<script>
    wow = new WOW(
        {

        }	)
        .init();
</script>
</body>
</html>