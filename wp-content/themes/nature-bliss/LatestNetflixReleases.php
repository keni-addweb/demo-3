<?php
/*
Template Name: Latest Netflix Releases
Description: this is a custom page template which will use a third party API
  to pull a list of up to 100 items released on Netflix within the last 7 days.
*/
//This is used to tell the API what we want to retrieve
$lastWeek = date("Y-m-d",time()-(24*3600*60));

//Show the header of your WordPress site so the page does not look out of place
get_header();
?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main">
    <?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://unogsng.p.rapidapi.com/genres",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: unogsng.p.rapidapi.com",
		"x-rapidapi-key: 5bf38eb09dmshc0e9f85bdc94a76p134ce3jsn5c803829b430"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}
      ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
//Show the footer of the WordPress site to keep the page in context
get_footer();