<?php
	$conn = new mysqli("172.20.0.2", "root", "pass123", "Trucorp");
	if($conn->connect_error){
		echo "Tidak bisa connect mysql, silahkan coba lagi";
		exit;
	}
	echo "Suksess membuat koneksi!!";
	echo "<br>";
	$sql = "SELECT * FROM users";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
  	while($row = $result->fetch_assoc()) {
    	echo "ID: " . $row["ID"]. " Nama: " . $row["Nama"]. " Alamat: " . $row["Alamat"] . " 	Jabatan: " . $row["Jabatan"]. "<br>";
  	}
	} else {
  	echo "0 results";
	}
	$conn->close();
?>
