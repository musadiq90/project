<?php 
	
	$db = mysqli_connect('localhost', 'root', '', 'Project01');

	// initialize variables
	$name = "";
	$address = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$address = $_POST['address'];

		mysqli_query($db, "INSERT INTO crudd (name, address) VALUES ('$name', '$address')"); 
		
		header('location: index.php');
	}


    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $address = $_POST['address'];
    
        mysqli_query($db, "UPDATE crudd SET name='$name', address='$address' WHERE id=$id");
    
        header('location: index.php');
    }
// ...
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM crudd WHERE id=$id");
	
	header('location: index.php');
}