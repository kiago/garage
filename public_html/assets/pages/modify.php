<?php
$titre='Modification de plaque';
$platetomodify='';
$result='';
$message='';
$plate='';
$motor="";
$last='';
$first='';
$mark='';
include "header.php";
$_SESSION[oldplate]='';
$_SESSION[newplate]='';


?>
<script type="text/javascript" charset="utf-8">
// <![CDATA[
$(document).ready(function() {

  $(".autogrow").editable("<?php print $actual_link ?>/saving?type=plate", { 
    indicator : "<img src='<?php print $actual_link ?>/assets/images/indicator.gif'>",
    type      : "autogrow",
    submit    : 'OK',
    cancel    : 'cancel',
    tooltip   : "Click to editttt...",
    onblur    : "ignore",
    autogrow : {
     lineHeight : 16,
     minHeight  : 32
   }
 });

});
// ]]>
</script>

          <?php 
          if(isset($_GET['id'])){

           $platetomodify=$_GET[id];
// Check connection
           if (mysqli_connect_errno())
           {
             $message='error';
             echo "Failed to connect to MySQL: " . mysqli_connect_error();
           }

           $query = "SELECT * FROM `clients` WHERE `plate_number` = '" . $platetomodify . "';";
	// Do Search
           if ($result = mysqli_query($conn, $query)) {

             //printf("Select a retourné %d lignes.\n", mysqli_num_rows($result));
             while($results = mysqli_fetch_array($result)) {
              $result_array[] = $results;
            }
                            $message='test1';

//exit;
	// set the results in result
            if (isset($result_array)) {
                              $message='test2';

              foreach ($result_array as $result) {
  $plate=$result[plate_number];
$motor=$result[motor_number];
$last=$result[lastname];
$first=$result[firstname];
$mark=$result[mark];
$_SESSION[oldplate]=$result[plate_number];
             }

           }
           
         }

       }
       ?>
      
          <?php /*
<p class="ajaxupload" id="custom_6"><?php print file_get_contents($url . 'load.php?id=custom_6') ?>Click here to update some</p>
*/ ?>
<?php
// une variable de session contenant le code moteur par exemple, si elle est nulle alors acces a cette page impossible

//requete pour recuperer les données d'une entrée 

//les afficher dans un formulaire ( le meme que l'entrée de données )

//si ya un upload photo alors on change la photo, sinon rien

//requete pour inserer les nouvelles données dans la bdd


//bouton supprimer

?>

<div id="main">
  <div class="container">
    <div class="row main-row">
      <div class="12u">
        <section>
          <h2><?php echo $titre; ?></h2>
          <h3> <?php  ?>
          <?php print $actual_link."/saving" ?> </h3>
                   <?php 
        //  if(isset($_GET['id'])){
            ?>
          <form class="pure-form pure-form-aligned" method="POST" action="fin-ajout" enctype="multipart/form-data">
            <fieldset>
              <div class="pure-control-group">
                <label for="immat">Immatriculation :</label>
                <p class="autogrow" id="plate" style="width: 200px;color:black;padding-left:20%"><?php echo $plate; ?></p>
              </div>
              <div class="pure-control-group">
                <label for="marque">Marque :</label>
                <p class="autogrow" style="width: 200px;color:black;padding-left:20%"><?php echo $mark; ?></p>
              </div>
              <div class="pure-control-group">
                <label for="moteur">Moteur  :</label>
                <p class="autogrow" style="width: 200px;color:black;padding-left:20%"><?php echo $motor; ?></p>
              </div>
              <div class="pure-control-group">
                <label for="name">Client :</label>
                <p class="autogrow" style="width: 200px;color:black;padding-left:20%"><?php echo $last; ?></p>
                <p class="autogrow" style="width: 200px;color:black;padding-left:20%"><?php echo $first; ?></p>
              </div>
              <div class="pure-control-group">
                <label for="file" class="pure-checkbox">Carte grise :</label>
                <input type="file" name="image" class="pure-button pure-button-primary"/>
              </div>
             
            </fieldset>
          </form>
          <?php /*} else {

            echo '<a href="recherche-plaque">Retour en arrière</a>';
          }*/
          ?>
        </section>
      </div>
    </div>
  </div>
</div>
<?php
include 'footer.php';
?>