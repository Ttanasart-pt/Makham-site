<?php
	$con = mysqli_connect("localhost", "id1718216_user", "Bloater123", "id1718216_data");
	$post = mysqli_prepare($con, "SELECT title FROM Makham posts");
	mysqli_stmt_execute($post);
	mysqli_stmt_store_result()

?>