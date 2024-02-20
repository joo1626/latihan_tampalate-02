<!-- (Document type declaration) DOCTYPE html
 Sebuah kode yang mengindifikasikan bahwa dokumen tersebut adalah halaman HTML,
yang berfungsi memberitahukan peramban (browser) bahwa kode yang akan dijalankan adalah kode
bahasa markup (Markup sendiri adalah bahasa pemograman) -->
<!DOCTYPE html>

<!-- (Hypertext Markup Language) html
 Suatu bahasa yang dirancang untuk ditampilkan di peramban internet 
yang di bantu oleh teknologi salah satu contohnya adalah Cascading style, visual code dll 
 Sedangakan atribut (lang) 
Adalah suatu atribuat untuk menyatakan bahasa halaman Web yang kita buat,
yang bertujuan untuk membantu mesin telusur (search engine) 
dan untuk mendefinisikan sigkatan-singkatan kode bahasa -->
<html lang="en">

<!-- (Head) 
 Digunakan untuk menyediakan informasi meta tentang halaman web kepada browser
atau juga head sendiri mengartikan kepala, yang mendefinisikan awalan dari suatu program -->
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

<h3>Array</h3>
<!-- Array adalah salah satu struktur data yang berisi sekumpulan data dan memiliki indeks. Indeks digunakan untuk mengakses nilai array. -->
<?php

// membuat array kosong
$buah = array();
$hobi = [];

// membuat array sekaligus mengisinya
$minuman = array("Kopi", "Teh", "Jus Jeruk");
$makanan = ["Nasi Goreng", "Soto", "Bubur"];

// membuat array dengan mengisi indeks tertentu
$anggota[1] = "Dian";
$anggota[2] = "Muhar";
$anggota[0] = "Petani Kode";

?>

<h3>menampilkan Isi Array</h3>
<?php

// membuat array
$barang = ["Buku Tulis", "Penghapus", "Spidol"];

// menampilkan isi array
echo $barang[0]."<br>";
echo $barang[1]."<br>";
echo $barang[2]."<br>";

?>

<h3>Menghapus Isi Array</h3>
<?php

// membuat array
$hewan = [
    "Burung",
    "Kucing",
    "Ikan"
];

// menghapus kucing
unset($hewan[1]);

echo $hewan[0]."<br>";
echo $hewan[1]."<br>";
echo $hewan[2]."<br>";

echo "<hr>";

echo "<pre>";
print_r($hewan);
echo "</pre>";

?>
