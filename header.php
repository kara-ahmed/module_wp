
<!-- la page header des pages -->
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>jeux de rôle</title>
<link rel="stylesheet" href="mon-css/style.css">
<!-- CSS de Bootstrap -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
<!-- Ajout d'une nouvelle feuille de style qui sera spécifique à notre thème -->
<!-- <link href="<?php bloginfo('template_directory');?>/blog.css" rel="stylesheet"> -->
<!-- HTML5 shim et Respond.js pour supporter les éléments HTML5 pour les versions plus anciennes que Internet Explorer 9 -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body>   
<div class="header">
<div class="container-fluid">
<nav id="navigation-principale" role="navigation">
<button type="button" class="btn btn-secondary">Accueil<a class="active" href="http://localhost/wordpress/jeu/"></a></button>
<button type="button" class="btn btn-secondary"><a href="http://localhost/wordpress/mesmerize/historique/">Historique</a></button>
</nav>
</div>
</div>
<!--   -->
<div class="blog-header">
<h1 class="blog-title"><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
<p class="lead blog-description"></p>
</div>
<style>
    form {
    background-color:gray ;
    margin-left: 30%;
    margin-right: 30%;
    height: 300px;
    padding: 20px;
    border: 2px solid black;
    border-radius: 10px;
}
input{
    margin: 8px
}
body{
    margin: 10px;
}
</style>
    
