<?php
include ('inc/pdo.php');
include ('inc/fonction.php');
include ('inc/header.php');
?>
<?php
if(!empty($_SESSION['user']['taille']) && !empty($_SESSION['user']['poids'])){
  $taille = $_SESSION['user']['taille']/100;
  $poids = $_SESSION['user']['poids'];
  $imc = $taille*$taille;
  $imc = $poids/$imc;

  if ($imc<=20){
    $resultimc = 'insuffisance';
  }
  else if ($imc>20 && $imc<=25){
    $resultimc = 'bon';
  }
  else if ($imc>=25 && $imc<=27){
    $resultimc = 'exces';
  }
  else{
    $resultimc = 'risque';
  }
}?>

<div class="profil">
  <aside class="aside">
    <div class="pp"><img class="bonhomme" src="img/avatar.jpg" alt=""></div>
      <div class="clear"></div>
      <h3>Infos du profil</h3>
        <p> <?php echo $_SESSION['user']['prenom'] ?> </p>
        <p> <?php echo $_SESSION['user']['nom'] ?> </p>
        <p> IMC =<?php echo $imc ?></p>
  </aside>
  <div class="carnet">
    <span>Votre Carnet</span>

  </div>
</div>

<div class="clear"></div>
<?php include 'inc/footer.php';
