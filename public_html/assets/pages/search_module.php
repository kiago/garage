<script language="javascript" type="text/javascript">
var linkVar = 'nothing';
function save(thevar){
linkVar = thevar;
document.getElementById('plate').innerHTML = thevar.getAttribute( 'plate' );

}

</script>
<?php
$actual_link = "http://$_SERVER[HTTP_HOST]";
include '../db/library.php';


include 'magnific.php';

$html = '';
$html .= '<div class="section4">';
$html .= '<li class="result">';
$html .= '<a class="image-popup-no-margins" target="_blank" href="urlString" rel="shadowbox">';
$html .= '<img src="urlString" width="50" height="50">';
$html .= '<h3>nameString</h3>';
$html .= '<h3>plateMotor</h3>';
$html .= '</a>';
$html .= '<h3><a href="#displayPopup1" plate="plateOnly" onClick="save(this);" class="portfolio-link" data-toggle="modal">Commentaires</a>&nbsp;&nbsp;&nbsp;<a href="modifier-plaque?id=plateOnly">Modifier</a></h3>';
$html .= '</li>';
$html .= '</div>';


// Get Search
$search_string = preg_replace("/[^A-Za-z0-9]/", " ", $_POST['query']);
$search_string = mysqli_real_escape_string($conn,$search_string);

// Check Length More Than One Character
if (strlen($search_string) >= 1 && $search_string !== ' ') {
	// Build Query
	$query = 'SELECT * FROM clients WHERE firstname LIKE "%'.$search_string.'%" OR lastname LIKE "%'.$search_string.'%" OR plate_number LIKE "%'.$search_string.'%" OR motor_number LIKE "%'.$search_string.'%" OR id LIKE "%'.$search_string.'%"';

	// Do Search
	$result = mysqli_query($conn,$query);
	//exit;
	while($results = mysqli_fetch_array($result)) {
		$result_array[] = $results;
	}
//exit;
	// Check If We Have Results
	if (isset($result_array)) {
		foreach ($result_array as $result) {

			// Format Output Strings And Hightlight Matches
			//
			$display_firstname = preg_replace("/".$search_string."/i", "<b class='highlight'>".$search_string."</b>", $result['firstname']);
			$display_lastname = preg_replace("/".$search_string."/i", "<b class='highlight'>".$search_string."</b>", $result['lastname']);
			$display_plate = preg_replace("/".$search_string."/i", "<b class='highlight'>".$search_string."</b>", $result['plate_number']);
			$display_motor = preg_replace("/".$search_string."/i", "<b class='highlight'>".$search_string."</b>", $result['motor_number']);



			$display_url = $actual_link."/uploads/".$result['url_photo'];
			

			// Insert Name
			$output = str_replace('nameString', $display_firstname." ".$display_lastname, $html);
				// Insert platenumber+motornumber
			$output = str_replace('plateMotor', 'plaque:'.$display_plate.', moteur:'.$display_motor, $output);
			$output = str_replace('plateOnly', $result['plate_number'] , $output);



			// Insert URL
			$output = str_replace('urlString', $display_url, $output);

			// Output
			echo($output);
		}
	}else{
		// Format No Results Output
					$display_url = 'http://images5.fanpop.com/image/photos/31200000/jen-as-my-little-unicorn-my-little-pony-friendship-is-magic-31221889-927-908.jpg';

		$output = str_replace('urlString', $display_url, $html);


		$output = str_replace('nameString', '<b>Pas de résultat </b>', $output);
		$output = str_replace('plateMotor', 'à la recherche', $output);

		// Output
		echo($output);
	}
}

?>