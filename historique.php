<?php
/*
Template Name: historique
*/?>
<!-- j'appel la page header -->

<?php get_header(); ?>
<h2>Historique</h2>
<?php
// fonction de selection et affichage des données de la table
  global$wpdb;  
$reponse =$wpdb->get_results('SELECT D2 FROM wp_tests ORDER BY D2 ASC');
foreach($reponse as $rep){    
        echo $rep->D2;    
    } 
?>
<!-- lien vers la page et la fonction de supression  -->
<button type="button" class="btn btn-danger">
<a href="http://localhost/wordpress/resultat/">Effacer l'historique</a>
</button>
