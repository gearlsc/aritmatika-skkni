<!DOCTYPE html>
<html>
<head>
	<title>Result</title>

	<script src="https://code.jquery.com/jquery-1.12.4.js"
			  integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
			  crossorigin="anonymous"></script>
	<script src="http://code.responsivevoice.org/responsivevoice.js"></script>
</head>
<body>
	<?php 
		include"function/aritmatika.php";
		include"function/terbilang.php";

		$angka1 = 0;
		$angka2 = 0;
		$hasil  = 0;
		$terbilang = "";

		if (isset($_POST['submit'])) {
			$angka1 = @$_POST['angka1'];
			$angka2 = @$_POST['angka2'];
			$aritmatika = @$_POST['aritmatika'];

			if ($aritmatika == 1) {
				$hasil = penjumlahan($angka1, $angka2);
				echo "Hasil Penjumlahan : " . $hasil; 
			} elseif ($aritmatika == 2) {
				$hasil = pengurangan($angka1, $angka2);
				echo "Hasil Pengurangan : " . $hasil;
			} elseif ($aritmatika == 3) {
				$hasil = perkalian($angka1, $angka2);
				echo "Hasil Perkalian : " . $hasil;
			} elseif ($aritmatika == 4) {
				$hasil = pembagian($angka1, $angka2);
				echo "Hasil Pembagian : " . $hasil;
			} else {
				$hasil = 0;
				echo "Gagal...";
			}
			$terbilang = terbilang($hasil);
			echo "<br>Terbilang : ".$terbilang;
			echo "<p>
				<a href='index.php'>Kembali</a>
			</p>";

		}
	?>

	<script type="text/javascript">
		$(function(){
			responsiveVoice.speak("<?php echo $terbilang; ?>", 'Indonesian Male');	
		})
		
	</script>
</body>
</html>



	