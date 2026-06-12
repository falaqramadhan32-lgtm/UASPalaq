<?php

include 'koneksi.php';

if(isset($_POST['kirim'])){

$nama=$_POST['nama'];
$email=$_POST['email'];
$pesan=$_POST['pesan'];

mysqli_query(
$conn,

"INSERT INTO kontak
(nama,email,pesan)

VALUES

(
'$nama',
'$email',
'$pesan'
)"

);

echo "<script>alert('Pesan berhasil dikirim')</script>";

}

?>
<!DOCTYPE html>

<html>

<head>

<title>Kontak</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

<link rel="stylesheet"
href="style.css">

</head>

<body>

<div class="container py-5">

<h1 class="text-center mb-5">

Hubungi Kami

</h1>

<div class="card shadow">

<div class="card-body">

<form method="POST">

<div class="mb-3">

<label>

Nama

</label>

<input

type="text"

name="nama"

class="form-control"

required>

</div>

<div class="mb-3">

<label>

Email

</label>

<input

type="email"

name="email"

class="form-control"

required>

</div>

<div class="mb-3">

<label>

Pesan

</label>

<textarea

name="pesan"

class="form-control"

rows="5"

required>

</textarea>

</div>

<button

name="kirim"

class="btn btn-warning">

Kirim

</button>

</form>

</div>

</div>

</div>

</body>

</html>