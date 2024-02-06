<!DOCTYPE html>
<html lang="en">
	<head>

		<style>
            body{
                background: url(../foto/4.jpg);
            }
			fieldset{
				border-radius: 25px;
				width: 400px;
				height: 200px;   
				margin-top: 20px;
				background: rgb(34, 193, 195);
				background: linear-gradient(90deg, rgba(34, 193, 195, 1) 0%, rgba(240, 45, 253, 1) 100%);
			 }

             .note{
                margin-left: -300px;
             }
			 .img {
				margin-top: -150px;
				margin-right: 35px;
			 }
			 h4{
				color: black;
				margin-left: 20px;
				margin-bottom: 20px;
				margin-top: 20px;
			}

			 h5{
				color: black;
				margin-left: 50px;
			 }

			p1{
				font-family: 'Times New Roman', Times, serif;
			}

			h4t{
				font-family: 'Times New Roman', Times, serif;

			}

			.name{
				color: black;
			}
		</style>

	</head>

    <body class="main-body bg-light  login-img align-items-center">

		<!-- IDENTITAS -->
		<!-- Nama: Auliya azzahra -->
		<!-- Kelas: XI-RPL -->
		<!-- Nyam-Nyam -->
	
        <center>
            <fieldset>
                <div class="note">
                <h4>Death Note</h4>
			<h5> Nama: Auliya azzahra </h5>
			<h5> Kelas: XI-RPL </h5>
			<h5> Nyanggg </h5>
                </div>
	
			<div class="img">
				<img src="../foto/5.jpg" alt="" width="150px" height="150px" align="right">
			</div>
	
		</fieldset>

        </center>
		
    </body>

<h3>Form</h3>
<!-- Form merupakan sintaks HTML yang berisi kumpulan kolom isian data, misal:
> form login yang berisi isian nama pengguna dan kata sandi.
> form pendaftaran yang berisi isian nama, jenis kelamin, tanggal lahir, alamat, surel, dan lain-lain. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Form Sederhana</title>
</head>
<body>
    <form>
        <div>
            <label>Nama</label> <br>
            <input name="nama" type="text" placeholder="Masukkan nama">
        </div>
        <div>
            <label>Alamat</label> <br>
            <input name="alamat" type="text" placeholder="Masukkan alamat">
        </div>
        <div>
            <button>Submit</button>
        </div>
    </form>
    
</body>
</html>

<?php # membuka tag PHP

$nama = @$_GET['nama'];
$alamat = @$_GET['alamat'];

# di sini nanti kita akan tampilkan variabel $nama dan $alamat

# jangan lupa tutup tag PHP
?>

