
<!-- appel de header -->
<?php get_header(); ?>

<!-- mon Formulaire -->

<div class="row mb-4 mx-12 mt-4">

<div class="col-md-12 mb-4">
    <div class="shadow-box-example hoverable flex-center">
  <form method="post" action="">    
    D2 :<img src="http://localhost/wordpress/wp-content/uploads/2020/05/d2.png" alt="d20" width="7%"> <input type="number" name="d2" min="1" max="2" placeholder="Entrez un chiffre" />
    D4 :<img src="http://localhost/wordpress/wp-content/uploads/2020/05/d4.png" alt="d20" width="7%"> <input type="number" name="d4" min="1" max="4" placeholder="Entrez un chiffre" /><br />
    D6 :<img src="http://localhost/wordpress/wp-content/uploads/2020/05/d6.png" alt="d20" width="7%"> <input type="number" name="d6" min="1" max="6" placeholder="Entrez un chiffre" />
    D8 :<img src="http://localhost/wordpress/wp-content/uploads/2020/05/d8.png" alt="d20" width="7%"> <input type="number" name="d8" min="1" max="8" placeholder="Entrez un chiffre" /><br />
    D10 :<img src="http://localhost/wordpress/wp-content/uploads/2020/05/d10.png" alt="d20" width="5%"> <input type="number" name="d10" min="1" max="10" placeholder="Entrez un chiffre" />
    D12 :<img src="http://localhost/wordpress/wp-content/uploads/2020/05/d12.png" alt="d20" width="5%"> <input type="number" name="d12" min="1" max="12" placeholder="Entrez un chiffre" /><br />
    D20 :<img src="http://localhost/wordpress/wp-content/uploads/2020/05/d20.png" alt="d20" width="5%"> <input type="number" name="d20" min="1" max="20" placeholder="Entrez un chiffre" />
    D100 :<img src="http://localhost/wordpress/wp-content/uploads/2020/05/d100.png" alt="d20" width="5%"> <input type="number" name="d100" min="1" max="100" placeholder="Entrez un chiffre" /><br />
    <input type="submit" name="lance" value="Lancer vos dés" id="submit" /></div>
  </form>
  </div>
  </div>
</div>

    <h3>votre resultat:</h3>
    <!-- appel des fonction de generatio de nombre et d'insertion dans la tabel  -->
 <?php $d2= jets($_POST["d2"],1,2);
if(!($_POST['d2'])==null){
bdd($d2);}
 $d4=jets($_POST["d4"],1,4);
if(!($_POST['d4'])==null){
bdd($d4);}
 $d6= jets($_POST["d6"],1,6);
if(!($_POST['d6'])==null){
  bdd($d6);}
 $d8=jets($_POST["d8"],1,8);
 if(!($_POST['d8'])==null){
  bdd($d8);}
 $d10=jets($_POST["d10"],1,10);
 if(!($_POST['d10'])==null){
  bdd($d10);}
 $d12=jets($_POST["d12"],1,12);
 if(!($_POST['d12'])==null){
  bdd($d12);}
 ?></p>
<p><?php $d20= jets($_POST["d20"],1,20);
if(!($_POST['d20'])==null){
  bdd($d20);}
$d100= jets($_POST["d100"],1,100);
if(!($_POST['d100'])==null){
  bdd($d100);}
// regrouper les resultats dans un seul tableau
  $D=array_merge($d2,$d4,$d6,$d8,$d10,$d12,$d20,$d100);
?>
<!-- afficher la somme des resultats -->
<p>Resultat:<?php echo (array_sum( $D)); ?></p>
    <?php
// fonction qui génére les nombres
function jets($j,$min,$max){
   // J'appelle  la bdd
        global $wpdb;    
        // Je créé la table des nombres pour pouvoir les réutiliser plus tard
        $wpdb->query("CREATE TABLE `{$wpdb->prefix}tests` ( `id` INT NOT NULL AUTO_INCREMENT ,  D2 VARCHAR(100) NOT NULL, PRIMARY KEY (`id`));");
      
     // récupérer les chiffre aléatoire  
     $d=[];    
    for ($i=0;$i<$j; $i++){
      $r=mt_rand ($min,$max);
        $d[]= $r;       
     } 
     if(isset($r)){ //condition pour renvoyer les données a stocker    
  echo ($j.'D'.$max.':'."[".implode(".", $d)."]");}  
  return $d; // renvoie le resultat sous forme de tableau
}   
//fonction d'insertion dans la bdd
    function bdd($t){      
    global $wpdb;
     $u= ('D'.sizeof($t).':'."[".implode(".", $t)."]");  //valeur a insert dans la bdd 
     $res=$wpdb->insert( 'wp_tests', array( 'D2' => $u ), array('%s') );   
  //   vérifier si la requête d'insertion a réussi
  // if($res){
  //   echo 'Données insérées';
  // }else{
  //   echo "Échec!!!";
  // }
// }
   }  
   ?>
<!--appel du footer -->
<?php get_footer()?>
