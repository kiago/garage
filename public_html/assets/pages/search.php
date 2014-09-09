<?php
$titre='Recherche de plaque';

include "header.php";
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
<?php
	include 'footer.php';
	?>