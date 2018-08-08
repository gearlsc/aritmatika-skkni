<!DOCTYPE html>
<html>
<head>
	<title>Soal 1</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"
			  integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
			  crossorigin="anonymous"></script>
	<script src="http://code.responsivevoice.org/responsivevoice.js"></script>
</head>
<body>
<div class="kalkulator">
		<h2 class="judul">ARITMATIKA-SKKNI</h2>
		
		<?php 
	if(isset($_POST['submit'])){
		include"function/aritmatika.php";
		include"function/terbilang_ku.php";

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
				
			} elseif ($aritmatika == 2) {
				$hasil = pengurangan($angka1, $angka2);
				
			} elseif ($aritmatika == 3) {
				$hasil = perkalian($angka1, $angka2);
				
			} elseif ($aritmatika == 4) {
				$hasilx= pembagian($angka1, $angka2);
				$hasil=round($hasilx,2);
				
				
			} else {
				$hasil = 0;
				echo "Gagal...";
			}
			$terbilang = terbilang($hasil);
			

		}
	}
	?>
	
	
		<form action="form-aritmatika.php" method="POST">			
			<input type="text" name="angka1" class="bil" value="<?php if (isset($angka1)) { echo $angka1; }?>" autocomplete="off" placeholder="Masukkan Angka 1">
			<input type="text" name="angka2" class="bil" value="<?php if (isset($angka2)) { echo $angka2; }?>" autocomplete="off" placeholder="Masukkan Angka 2">
			<?php
			if(isset($aritmatika))
			{
			if($aritmatika=="1")
			{
			?>
			<select class="opt" name="aritmatika">
						<option value="1" selected>Penjumlahan</option>	
						<option value="2">Pengurangan</option>
						<option value="3">Perkalian</option>
						<option value="4">Pembagian</option>
			</select>
			<?php
			}
			elseif($aritmatika=="2")
			{
			?>
			<select class="opt" name="aritmatika">
						<option value="1" >Penjumlahan</option>	
						<option value="2" selected>Pengurangan</option>
						<option value="3">Perkalian</option>
						<option value="4">Pembagian</option>
			</select>
			<?php
			}
			elseif($aritmatika=="3")
			{
			?>
			<select class="opt" name="aritmatika">
						<option value="1" >Penjumlahan</option>	
						<option value="2" >Pengurangan</option>
						<option value="3" selected>Perkalian</option>
						<option value="4">Pembagian</option>
			</select>
			<?php
			}
			else{
			?>
			<select class="opt" name="aritmatika">
						<option value="1" >Penjumlahan</option>	
						<option value="2" >Pengurangan</option>
						<option value="3">Perkalian</option>
						<option value="4" selected>Pembagian</option>
			</select>	
			<?php
			}
			}
			else
			{
				?>
				
				<select class="opt" name="aritmatika">
						<option value="1">Penjumlahan</option>	
						<option value="2">Pengurangan</option>
						<option value="3">Perkalian</option>
						<option value="4">Pembagian</option>
			</select> <?php
			}
			?>
			
			<input type="submit" name="submit" value="Proses">											
		</form>
		<?php if(isset($_POST['submit'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="bil" readonly>
			<input type="text" value="<?php echo $terbilang; ?>" class="bill" readonly>
			
		<?php }else{ ?>
			<input type="text" placeholder="Hasil" class="bil" readonly>
			<input type="text" placeholder="Terbilang" class="bill" readonly>
		<?php } ?>			
	</div>
	<script type="text/javascript">
		$(function(){
			responsiveVoice.speak("<?php echo $terbilang; ?>", 'Indonesian Male');	
		})
		
	</script>
	
	
</body>
</html>

		