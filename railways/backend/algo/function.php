<?php 

// $apikey = "fvatr8579";//railwayapi1@gmail.com
// $apikey = "dpijp9267";//railwayapi2@gmail.com
// $apikey = "viykd6034";//railwayapi3@gmail.com
// $apikey = "peoac9899";//railwayapi5@gmail.com
// $apikey = "zqdor3834";//12sagskr@gmail.com
// $apikey = "tdxvp5433";//narram96@gmail.com
// $apikey = "hgceh7052";//railwayapi6@gmail.com
// $apikey = "gb489dj5"; //railwayapi7@gmail.com
// $apikey = "wd6onb7i";//railwayapi8@gmail.com
// $apikey = "4xcf77p5";//satendersrathore@gmail.com
// $apikey = "yndr3ycc";//renurjpr@gmail.com
// $apikey = "n4ph2p9v";//narram96@gmail.com

function get_pnr_status($pnr)
{
	// $apikey = "fvatr8579";//railwayapi1@gmail.com
	// $apikey = "uucxi9379";//for check error
	// $apikey = "zqdor3834";//12sagskr@gmail.com

// $apikey = "4xcf77p5";//satendersrathore@gmail.com
	 global $apikey;


	$pnr_status_api = "http://api.railwayapi.com/pnr_status/pnr/" . $pnr . "/apikey/" . $apikey ;
    $pnr_status_api_call = file_get_contents($pnr_status_api);
    $pnr_status_api_data= json_decode($pnr_status_api_call, true);
    return $pnr_status_api_data;
}

function trains_bw_station($source,$destination,$doj)
{
	global $apikey;

	$trains_bw_stations_api = "http://api.railwayapi.com/between/source/" . $source . "/dest/" . $destination . "/date/" . $doj . "/apikey/" . $apikey ;
    $trains_bw_stations_api_call = file_get_contents($trains_bw_stations_api);
    $trains_bw_stations_api_data = json_decode($trains_bw_stations_api_call, true);

    return $trains_bw_stations_api_data;
}

function seat_availability($train_num,$source_code,$dest_code,$doj,$class,$quota)
{
	global $apikey;



	$seat_availability_api = "http://api.railwayapi.com/check_seat/train/" . $train_num . "/source/" . $source_code . "/dest/" . $dest_code . "/date/" . $doj . "/class/" . $class . "/quota/" . $quota . "/apikey/" . $apikey ;
    $seat_availability_api_call = file_get_contents($seat_availability_api);
    $seat_availability_api_data = json_decode($seat_availability_api_call, true);

    return $seat_availability_api_data;

}

function train_live_status($train_num)
{
	 global $apikey;

	 $doj = "20" . date('ymd');
	 $train_live_status_api = 'http://api.railwayapi.com/live/train/' . $train_num . '/doj/' . $doj . '/apikey/' . $apikey;
     $train_live_status_api_call = file_get_contents($train_live_status_api);
     $train_live_status_api_data = json_decode($train_live_status_api_call,true);

     return $train_live_status_api_data;
}

function train_number_to_name($train_num)
{
	global $apikey;

	
	$train_name_api = 'http://api.railwayapi.com/name_number/train/' . $train_num. '/apikey/' . $apikey ;
    $train_name_api_call = file_get_contents($train_name_api);
    $train_name_api_data = json_decode($train_name_api_call, true);	

    return $train_name_api_data;
}


function train_route($train_num)
{
	global $apikey;

	$train_route_api = "http://api.railwayapi.com/route/train/" . $train_num . "/apikey/" . $apikey ;
    $train_route_api_call = file_get_contents($train_route_api);
    $train_route_api_data = json_decode($train_route_api_call,true);

    return $train_route_api_data;

}
// 
?>

<?php
//-----------------------api keys----------------------------
	// $apikey = "uucxi9379";//satenderjpr@gmail.com
	// $apikey = "ttemb6830";//singhpalarashakti@gmail.com
	// $apikey = "ootzm7275";//satendersvnit@gmail.com

	// $apikey = "eumbm2216";//singhrathoresatender@gmail.com

	// $apikey = "wqyoc1399"; //renurathorejpr@gmail.com
	//$apikey = "budyl6423";//yashagarwaljpr@gmail.com
	// $apikey = "zlzou2003";//satendersinghpalara@gmail.com
	// $apikey = "iyihg4653";//jagdishsinghrjpr@gmail.com

	// $apikey = "okogk2695";//theyashagarwal21@gmail.com


    //$apikey = "ccjee6917";//sagarkeshri26@gmail.com
    // $apikey = "dwmbs3983";//sagarkeshri@rocketmail.com
// $apikey = "fvatr8579";//railwayapi1@gmail.com
?>