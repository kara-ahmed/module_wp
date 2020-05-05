<?php
/*
Template Name: effacer
*/?>
<!-- j'appel la page header -->
<?php get_header(); ?> 
<!-- lien a la page d'acceil -->

<a href="http://localhost/wordpress/jeu/" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Rejoué</a>
<?php
// fonction pour effacer ma table
global $wpdb;

// requete de supression des données de la table 
$req = $wpdb->query("DELETE FROM `{$wpdb->prefix}tests`");
// message de controle
if($req){
echo 'Données supprimées';}
else{
    echo 'Données non supprimées';}