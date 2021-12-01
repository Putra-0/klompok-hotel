<?php

$db = mysqli_connect("localhost", "root", "", "db_hotel_mercure");


function query($query)
{
	global $db;
	$result = mysqli_query($db, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function registrasi($data)
{
	global $db;


	//tangkap data
	$email = $data['email'];
	$password = mysqli_real_escape_string($db, $data["password"]);
	$password2 = mysqli_real_escape_string($db, $data["password2"]);

	//cek username
	$cek = mysqli_query($db, "SELECT * FROM tb_customer WHERE email = '$email'");

	if (mysqli_fetch_assoc($cek)) {
		echo "<script>
					alert('Email Sudah Terdaftar!!')
				</script>
				";
		return false;
	}


	//cek password
	if ($password !== $password2) {
		echo "<script>
					alert('Password yang anda masukkan berbeda!')
				</script>
				";
		return false;
	}

	//enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);
	// var_dump($password); die;

	//tambah data ke database
	mysqli_query($db, "INSERT INTO tb_customer (id_customer,email,pass) VALUES
						('','$email','$password')
					");
	return mysqli_affected_rows($db);
}

function tambah($data)
{
	global $db;

	$nama_barang = $data["nama_barang"];
	$harga_barang = $data["harga_barang"];
	$stok_barang = $data["stok_barang"];
	$satuan = $data["satuan"];
	$deskripsi = $data["deskripsi"];


	//query insert data
	$query = "INSERT INTO produk  VALUES 
		('','$nama_barang','$harga_barang','$stok_barang','$satuan','$deskripsi'";

	mysqli_query($db, $query);

	return mysqli_affected_rows($db);
}

function cari($search)
{
	$query = "SELECT * FROM produk
				WHERE
					nama_barang LIKE '%$search%' OR
					harga_barang LIKE '%$search%' OR
					stok_barang LIKE '%$search%' OR
					satuan LIKE '%$search%' OR
					deskripsi LIKE '%$search%'
					";
	return query($query);
}
