<?php 
$titre='Ajout Nouvelle Plaque ';

include "header.php";
if($_SESSION['userid'] == '2'){
	echo '<script type="text/javascript">window.location = "recherche-plaque"; </script>';
}

?>
<!-- create mask for plate number-->
<script>
jQuery(function($){
   $("#plate_number").mask("aa999aa");
});
</script>
<div id="main">
  <div class="container">
    <div class="row main-row">
      <div class="12u">
        <section>
          <h2>Ajout de nouvelle plaque</h2>
          <h3> * champs obligatoires </h3>
          <form class="pure-form pure-form-aligned" method="POST" action="fin-ajout" enctype="multipart/form-data">
            <fieldset>
              <div class="pure-control-group">
                <label for="immat">Immatriculation *</label>
                <input id="plate_number" name="plate_number" type="text" placeholder="Plaque d'immatriculation" required>(Exemple : AA999AA)
              </div>
              <div class="pure-control-group">
                <label for="marque">Marque</label>
                <input name="mark" type="text" placeholder="Marque du véhicule">
              </div>
              <div class="pure-control-group">
                <label for="moteur">Moteur *</label>
                <input name="motor_number" type="text" placeholder="Référence moteur" required>
              </div>
              <div class="pure-control-group">
                <label for="name">Client</label>
                <input name="firstname" type="text" placeholder="Prénom">
                <input name="lastname" type="text" placeholder="Nom">
              </div>
              <div class="pure-control-group">
                <label for="file" class="pure-checkbox">Carte grise *</label>
                <input type="file" name="image" class="pure-button pure-button-primary"/>
              </div>
              <div class="pure-controls">
                <button type="submit" name="submit" class="pure-button pure-button-primary">Enregistrer</button>
              </div>
            </fieldset>
          </form>
        </section>
      </div>
    </div>
  </div>
</div>
<?php 
include "footer.php";

?>
