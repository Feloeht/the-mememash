<?php
include('mysql.php');
include('functions.php');

// update db apres vote
if(isset($_GET['winner']) && isset($_GET['loser'])) {

	// Get winner
	$result = mysqli_query($con,"SELECT * FROM images WHERE image_id = ".$_GET['winner']." ");
	$winner = mysqli_fetch_object($result);

	// Get loser
	$result = mysqli_query($con,"SELECT * FROM images WHERE image_id = ".$_GET['loser']." ");
	$loser = mysqli_fetch_object($result);

	// Update winner score
	$winner_expected = expected($loser->score, $winner->score);
	$winner_new_score = win($winner->score, $winner_expected);
	mysqli_query($con,"UPDATE images SET score = ".$winner_new_score.", wins = wins+1 WHERE image_id = ".$_GET['winner']);

	// Update loser score
	$loser_expected = expected($winner->score, $loser->score);
	$loser_new_score = loss($loser->score, $loser_expected);
	mysqli_query($con,"UPDATE images SET score = ".$loser_new_score.", losses = losses+1  WHERE image_id = ".$_GET['loser']);

	// Insert battle log dans la db
	mysqli_query($con,"INSERT INTO battles SET winner = ".$_GET['winner'].", loser = ".$_GET['loser']." ");

	// Retour mememash
	header('location: /mememash.php');
}
?>