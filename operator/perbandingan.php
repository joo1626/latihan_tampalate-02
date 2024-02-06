<!DOCTYPE html>
<html lang="en">
	<head>

		<style>
            body{
                background: url(../foto/ya.jpg);
            }
			fieldset{
				border-radius: 25px;
				width: 400px;
				height: 200px;   
				margin-top: 20px;
				background: linear-gradient(90deg, rgb(102, 51, 153) 0%, rgb(238, 130, 238) 50%);
			 }

             .note{
                margin-left: -300px;
             }
			 .img {
				margin-top: -150px;
				margin-right: 35px;
			 }
			 h4{
				color: white;
				margin-left: 20px;
				margin-bottom: 20px;
				margin-top: 20px;
			}

			 h5{
				color: white;
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

			.warna{
				color: white;
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

<h3 style="color: white;">Perbandingan</h3>
<div class="warna">
<?php

# membandingkan variabel
$nilai = 90;
$lulus = $nilai > 80;

echo "{$nilai} > 80 = ";
var_dump($lulus);
echo "<br>";

# membandingkan langsung angka
echo "5 >= 5 = ";
var_dump(5 >= 5);
echo "<br>";

echo "5 < 8 = ";
var_dump(5 < 8);
echo "<br>";

echo "9 <= 5 = ";
var_dump(9 <= 5);
echo "<br>";

# membandingkan antar 2 string
echo "'a' < 'b' = ";
var_dump('a' < 'b');
echo '<br>';

echo "'abc' < 'b' = ";
var_dump('abc' < 'b');
echo '<br>';
?>
</div>