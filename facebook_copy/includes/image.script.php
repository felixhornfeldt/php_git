<?php

include_once '../database/dbh.php';

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$id = $row['id'];
		$sqlImg = "SELECT * FROM profileimg WHERE userid='$id'";
		$resultImg = mysqli_query($conn, $sqlImg);
		while ($rowImg = mysqli_fetch_assoc($resultImg)) {
			echo '<div>';
			if ($rowImg['status'] == 0) {
				echo '<img src="uploads/profile'.$id.'.jpg?"'.mt_rand().'>';
			} else {
				echo '<img src="uploads/default_profile.jpg">';
			}
			echo '</div>';
		}
	}
} else {
	echo 'Error loading image';
}