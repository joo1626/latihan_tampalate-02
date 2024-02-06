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

<h1>Perulangan For</h1>
<!-- Perulangan For adalah perulangan yang termasuk dalam counted loop, karena kita bisa menentukan jumlah perulangannya. -->
<?php

for($i = 1; $i < 13; $i++){
    echo "<h2>Ini perulangan ke-$i</h2>";
}

?>

<br>

<h1>Perulangan While</h1>
<!-- Perulangan while adalah perulangan yang termasuk dalam uncounted loop. Karena biasanya digunakan untuk mengulang sesuatu yang belum jelas jumlah pengulangannya. -->
<?php 

$ulangi = 0;

while($ulangi < 10){
    echo "<p>Ini adalah perulangan ke-$ulangi</p>";
    $ulangi++;
}

?>

<br>

<h1>Perulangan Do/while</h1>
<!-- Perulangan Do/While sama seperti perulangan while. Ia juga tergolong dalam uncounted loop.
Perbedaan Do/While dengan while terletak pada cara iya memulai pengulangan. -->
<?php 

$ulangi = 10;

do {
    echo "<p>ini adalah perulangan ke-$ulangi</p>";
    $ulangi--;
} while ($ulangi > 0);

?>

<br>

<h1>Perulangan Foreach</h1>
<!-- Perulangan foreach sama seperti perulangan for. Namun, ia lebih khusus digunakan untuk mecetak array. -->
<?php
$books = [
    "Hallo duniaa tipu-tipu",
    "Hari ini memang berat namun ingat esok lebih berat",
    "Jangan pernah menyesali kegagalan",
    "Bangkitlah untuk kesekian kalinya"
];

echo "<h5>kata-kata hari ini:</h5>";
echo "<ul>";
foreach($books as $buku){
    echo "<li>$buku</li>";
}
echo "</ul>";

?>