/* JS File */

// Start Ready
$j(document).ready(function() {  

	// Icon Click Focus
	$j('div.icon').click(function(){
		$j('input#search').focus();
	});

	// Live Search
	// On Search Submit and Get Results
	function search() {
		var query_value = $j('input#search').val();
		$j('b#search-string').html(query_value);
		if(query_value !== ''){
			$j.ajax({
				type: "POST",
				url: "/assets/pages/search_module.php",
				data: { query: query_value },
				cache: false,
				success: function(html){
					$j("ul#results").html(html);
				}
			});
		}return false;    
	}

	$j("input#search").live("keyup", function(e) {
		// Set Timeout
		clearTimeout($j.data(this, 'timer'));

		// Set Search String
		var search_string = $j(this).val();

		// Do Search
		if (search_string == '') {
			$j("ul#results").fadeOut();
			$j('h4#results-text').fadeOut();
		}else{
			$j("ul#results").fadeIn();
			$j('h4#results-text').fadeIn();
			$j(this).data('timer', setTimeout(search, 100));
		};
	});

});