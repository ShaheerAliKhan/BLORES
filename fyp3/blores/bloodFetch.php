<?php
	$url = 'http://localhost/website/dataFetch.php';
	$json = file_get_contents($url);
	$data = json_encode($json);

	// echo $data;
?>