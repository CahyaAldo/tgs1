<!DOCTYPE html>
<html>
<head>
	<title>TUGAS 1</title>
	<style>
		.tema{ 
			font-size: 32px;
			text-align: center;
			margin-top: 10px;
			margin-bottom: 50px;
			}
		body {
			 margin: 0;
			 font-family: times;
			 font-weight: bold;
			 color: white;
             background-color: red;      
			 } 
		article {
			float: left;
			width: 50%;
            height: 400px;
		}
        section {
			background: rgba(0, 0, 0, 0.5);
			border-radius: 30px;
            margin-left: 300px;
            margin-right: 300px;
            margin-top: 110px;
            padding-bottom:250px;
        }
			
	</style>
</head>
<body background= "aldo.jpg" style = "background-size: cover;">
    <?php
    $nim  = 192520045;
    $nama = "Cahya Aldo Pratama";
    $alamat = "Baledono Plaosan";
    $alamat_email = "cahyaaldo04@gmail.com";
    $bidang_minat = "Desain";

    ?>
	<section>
		<h1 class="tema"><br>BIODATA DIRI</h1>
		<article>
		<img src="1234.png" style = "margin-left: 200px; width: 130px; height: 180px; border-radius: 20px;">
		</article>
		<article >
        <p>Nim  : <?php echo $nim ?></p>
		<p>Nama : <?php echo $nama ?></p>
		<p>Alamat : <?php echo $alamat ?></p>
		<p>Alamat email : <?php echo $alamat_email ?></p>
        <p>Bidang minat : <?php echo $bidang_minat ?></p>
		</article>
	</section>
</body>
</html>