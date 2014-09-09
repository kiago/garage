<?php 

include '../db/library.php';
$oldplate=$_SESSION[oldplate];
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


/*
$statement = "UPDATE clients SET plate_number = " . $platetomodify . " WHERE plate_number = " . $platetomodify . "";


if(mysqli_query($conn,$statement)===true){
$message.="Nouvelle entrée avec succès !\n";
$message.="<a href='ajout-nouvelle-plaque'>Encore une?</a>";

}
else{
	echo(mysqli_error($conn));
}
*/



 $type = (isset($_GET['type'])) ? $_GET['type'] : "";
  $value = (isset($_POST['value'])) ? $_POST['value'] : ""; //value posted
  $id = (isset($_POST['id'])) ? $_POST['id'] : ""; //id of the element

  if($type == "plate") {
    mysqli_query($conn,"UPDATE clients SET plate_number='$value' WHERE plate_number='$oldplate'");
  } elseif ($type == "motor") {
    mysqli_query($conn,"UPDATE clients SET plate_number='$value' WHERE plate_number='$oldplate'");
  } elseif ($type == "mark") {
    mysqli_query($conn,"UPDATE clients SET plate_number='$value' WHERE plate_number='$oldplate'");
  };

   print $value; 
?>