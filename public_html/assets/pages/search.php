<?php
$titre='Recherche de plaque';

include "header.php";
    if(isset($_GET['id'])){

           $platetComm=$_GET[id];
           }
?>

<div id="main">
  <div class="container">
    <div class="row main-row">
      <div class="12u">
        <section>
          <h2>Recherche</h2>
          <!-- Main Title -->
          <div class="icon"></div>
          <h1 class="title">
            <?php $sql="SELECT id FROM clients";

						if ($result=mysqli_query($conn,$sql))
						{
  // Return the number of rows in result set
							$rowcount=mysqli_num_rows($result);
							echo "Total :\n".$rowcount."";
  // Free result set
							mysqli_free_result($result);
						}?>
          </h1>
          
          <!-- Main Input -->
          <input type="text" class="deletable"id="search" placeholder="insérez début nom ou plaque..." autocomplete="off">
          
          <!-- Show Results -->
          <h4 id="results-text">Résultats pour : <b id="search-string">Array</b></h4>
          <ul id="results">
          </ul>
        </section>
      </div>
    </div>
  </div>
</div>
<!-- popus for portfolio and services -->
    <div class="portfolio-modal modal fade" id="displayPopup1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Zone de commentaires</h2>
                            <hr class="star-primary">
                            <p>ici s'afficheront les commentaires associés a la plaque numéro :</p>
                            <ul class="list-inline item-details">
                                <div id="plate">test</div>
                                <li>bla
                                </li>
                                <li>blabla
                                </li>
                                <li>blabla
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Fermer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
<?php
	include 'footer.php';
	?>