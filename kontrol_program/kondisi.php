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

<h3>Percabangan if</h3>
<?php

$total_belanja = 150000;

if($total_belanja > 100000){
    echo "Anda dapat hadiah!";
}

?>

<h3>Percabangan if/Else</h3>
<?php
echo "<h5>Hasil Pertama:</h5>";

$umur = 13;

if ($umur < 18 ){
    echo "Kamu tidak boleh membuka situs ini!";
} else {
    echo "Selamat datang di website kami!";
}
?>

<?php
echo "<h5>Diubah:</h5>";
$umur = 19;

if ($umur < 18 ){
    echo "Kamu tidak boleh membuka situs ini!";
} else {
    echo "Selamat datang di website kami!";
}
?>

<h3>if/Elseif/Else</h3>
<?php

$nilai = 88;

if ($nilai > 90) {
    $grade = "A+";
} elseif($nilai > 80){
    $grade = "A";
} elseif($nilai > 70){
    $grade = "B+";
} elseif($nilai > 60){
    $grade = "B";
} elseif($nilai > 50){
    $grade = "C+";
} elseif($nilai > 40){
    $grade = "C";
} elseif($nilai > 30){
    $grade = "D";
} elseif($nilai > 20){
    $grade = "E";
} else {
    $grade = "F";
}

echo "Nilai anda: $nilai<br>";
echo "Grade: $grade";

?>

<h3>switch/case</h3>
<?php 

$level = 2;

switch($level){
    case 1:
        echo "Pelajari HTML";
        break;
    case 2:
        echo "Pelajari CSS";
        break;
    case 3:
        echo "Pelajari Javascript";
        break;
    case 4:
        echo "Pelajari PHP";
        break;
    default:
        echo "Kamu bukan programmer!";
}
?>