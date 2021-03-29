<?php
date_default_timezone_set("Asia/Bangkok");
session_start();

$trav_or_not = $_POST['trav_or_not'];
$self_organize = $_POST['self_organize'];
$organizer = $_POST['organizer'];
$know_cost = $_POST['know_cost'];
$date_start = $_POST['date_start'];
$date_end = $_POST['date_end'];
$prov0 = $_POST['prov0'];
$country0 = $_POST['country0'];
$state0 = $_POST['state0'];
$city0 = $_POST['city0'];
$n_provs = $_POST['n_provs'];
$prov1 = $_POST['prov1'];
$prov2 = $_POST['prov2'];
$prov3 = $_POST['prov3'];
$prov4 = $_POST['prov4'];
$prov_last = $_POST['prov_last'];
$mode_overall = $_POST['mode_overall'];
$cost_fuel = $_POST['cost_fuel'];
$cost_rent = $_POST['cost_rent'];
$cost_rent_driver = $_POST['cost_rent_driver'];
$reason_overall = $_POST['reason_overall'];
$reason_overall_other = $_POST['reason_overall_other'];


include 'dbconnect.php';

	if ($summax1 = mysqli_query($Conn, "SELECT MAX(tour_id) FROM sm_th_tour1")) {
		$summax2 = mysqli_fetch_array($summax1, MYSQLI_NUM) or die("Max read error");
		if (empty($summax2[0])){
			$tour_id = 1;
		}else {
			$tour_id = $summax2[0]+1; }
	  mysqli_free_result($summax1);
	}
	
	$_SESSION['tour_id']=$tour_id;
	$_SESSION['trav_or_not']=$trav_or_not;
	$_SESSION['organize']=$organizer;
	$_SESSION['know_cost']=$know_cost;
	$_SESSION['n_provs']=$n_provs;
	$_SESSION['prov0'] = $prov0;
	$_SESSION['prov1'] = $prov1;
	$_SESSION['prov2'] = $prov2;
	$_SESSION['prov3'] = $prov3;
	$_SESSION['prov4'] = $prov4;
	$_SESSION['prov_last'] = $prov_last;
	$_SESSION['mode_overall']=$mode_overall;
	
	$SQL = "INSERT INTO sm_th_tour1 (tour_id, trav_or_not, self_organize, organizer, know_cost, date_start, date_end, prov0, country0, state0, city0, n_provs, prov1, prov2, prov3, prov4, prov_last, mode_overall, cost_fuel, cost_rent, cost_rent_driver, reason_overall, reason_overall_other)
			VALUES ('$tour_id', '$trav_or_not', '$self_organize', '$organizer', '$know_cost', '$date_start', '$date_end', '$prov0', '$country0', '$state0', '$city0', '$n_provs', '$prov1', '$prov2', '$prov3', '$prov4', '$prov_last', '$mode_overall', '$cost_fuel', '$cost_rent', '$cost_rent_driver', '$reason_overall', '$reason_overall_other')";
		$into1 = mysqli_query($Conn,$SQL) or die("update user error");

header( "location: section1-2.php" );
		exit(0);
?>

