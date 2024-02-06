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

<h3>Fungsi</h3>
<?php

// Fungsi adalah sekumpulan intruksi yang dibungkus dalam sebuah blok. Fungsi dapat digunakan ulang tanpa harus menulis ulang instruksi di dalamnya.

// mmbuat fungsi
function perkenalan(){
  echo "Assalamulaikmu, ";
  echo "Perkenalkan, nama saya Ardianta<br/>";
  echo "Senang berkenalan dengan anda<br/>";
}

// memanggil fungsi yang sudah dibuat
perkenalan();

echo "<hr>";

// memanggilnya lagi
perkenalan();
?>

<br>

<h3>Fungsi dengan Parameter</h3>
<?php
// membuat fungsi
function TTL($tempat, $salam){
  echo $salam.", ";
  echo "Subang, 16 November 2006".$tempat."<br/>";
}

// memanggil fungsi yang sudah dibuat
TTL("subang", "Hi");

  echo "<hr>";

  $saya = "Liya";
  $ucapanSalam = "Selamat pagi";
  // memanggilnya lagi
  TTL($saya, $ucapanSalam);
?>

<br>

<h3>Memanggil Fungsi Didalam Fungsi</h3>
<?php
// membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
  $umur = $thn_sekarang - $thn_lahir;
  return $umur;
}

function Nama($nama, $salam="Assalamualaikum"){
  echo $salam.", ";
  echo "Perkenalkan, nama saya ".$nama."<br/>";
  // memanggil fungsi lain
  echo "Saya berusia ". hitungUmur(1994, 2015) ." tahun<br/>";
  echo "Senang berkenalan dengan anda<br/>";
}


// memanggil fungsi perkenalan
Nama("Ardianta");

?>