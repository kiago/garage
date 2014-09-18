<?php 
$titre='Ajout Nouvelle Plaque ';
$message='';
$file_ext='';
include "header.php";
if($_SESSION['userid'] == '2'){
	echo '<script type="text/javascript">window.location = "recherche-plaque"; </script>';
}


if(isset($_FILES['image'])){
	$errors= array();
	$titre="fatal";
	$file_name = $_FILES['image']['name'];
	$file_size =$_FILES['image']['size'];
	$file_tmp =$_FILES['image']['tmp_name'];
	$file_type=$_FILES['image']['type'];   
	$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
	$expensions= array("jpeg","jpg","png"); 		
	if(in_array($file_ext,$expensions)=== false){
		$errors[]="extension not allowed, please choose a JPEG or PNG file.";
	}
	if($file_size > 2097152){
		$errors[]='File size must be excately 2 MB';
	}				
	if(empty($errors)==true){


		$url="";

			// gerer les inputs text
			//////
			//verifier unicité du code moteur et de la plaque sinon afficher erreur
			/////
		if (isset($_POST['submit'])){

			if(isset($_POST['plate_number']) && isset($_POST['motor_number']) && isset($_POST['motor_number'])){
				if($_POST['plate_number']!=='' && $_POST['motor_number']!=='' && $_POST['motor_number']!=='')
				{

//traitement des champs requis

					$plate=mysqli_real_escape_string($conn,$_POST['plate_number']);
					$motor=mysqli_real_escape_string($conn,$_POST['motor_number']);
					$mark=mysqli_real_escape_string($conn,$_POST['mark']);
					$url=$motor.".".$file_ext;
					$first='';
					$last='';
//traitement des NON obligatoire
					if(isset($_POST['firstname'])){

						$first=mysqli_real_escape_string($conn,$_POST['firstname']);

					}
					else{
						$first="N/A";
					}
					if(isset($_POST['lastname'])){

						$last=mysqli_real_escape_string($conn,$_POST['lastname']);

					}
					else{
						$last="N/A";
					}




//$url=mysqli_real_escape_string($conn,$_POST['lastname']);


// Check connection
					if (mysqli_connect_errno())
					{
						echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}


					$statement = "INSERT INTO `clients` (`plate_number`, `motor_number`, `mark`, `firstname`, `lastname`, `url_photo`) VALUES ('" . $plate . "', '" . $motor . "','" . $mark . "', '" . $first . "', '" . $last . "', '" . $url . "');";


					if(mysqli_query($conn,$statement)===true){
						$message.="Nouvelle entrée avec succès !\n";
						$message.="<a href='ajout-nouvelle-plaque'>Encore une?</a>";

					}
					else{
						echo(mysqli_error($conn));
					}


				}else{
					$message="empty";
				}
			}
			else{
				$message="not set";

			}



		}
		else{
			$message="fuck";	}




			// fin gestion input text


			move_uploaded_file($file_tmp,"../../uploads/".$url);



			

			echo "Success";
		}else{
			print_r($errors);
		}
	}




	?>

	<div id="main">
		<div class="container">
			<div class="row main-row">
				<div class="12u">
					<section>
						<h2>Resultat ajout plaque</h2>
						<h3> </h3>
						<?php echo $message; ?> </section>
					</div>
				</div>
			</div>
		</div>
		<?php 
		include "footer.php";

		?>
