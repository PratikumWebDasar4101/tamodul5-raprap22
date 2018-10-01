<?php  

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$jenkel = $_POST['jenkel'];
$prodi = $_POST['prodi'];
$fak = $_POST['fak'];
$hobi = $_POST['hobi'];
$name = $_FILES['pict']['name'];
$tmp = $_FILES['pict']['tmp_name'];
$dir = "foto/";

if (strlen($_POST['nim'])>10) {
	?>			
	<script>
	    alert("Karakter NIM terlalu panjang");
	    location = "registrasi.html";
	</script>
	<?php 
	}
else echo "Nim: $nim<br>"; {
}
if (strlen($_POST['nama'])>25) {
	?>			
	<script>
	    alert("Karakter NAMA terlalu panjang");
	    location = "registrasi.html";
	</script>
	<?php 
	}
	else echo "Nama: $nama<br>"; {
}
echo "Email: $email <br>";
echo "Jenis Kelamin:$jenkel<br>";
echo "Program Studi: $prodi<br>";
echo "Fakultas: $fak<br>";
foreach ((array)$hobi as $value ) {
	echo "Hobi: $value<br>";
};

$uploadedStatus = move_uploaded_file($tmp, $dir.$name);
	if ($uploadedStatus) {
		
		echo "<img src='$dir$name'>";	
	}else{
		echo "Upload gagal";
	 }
?>