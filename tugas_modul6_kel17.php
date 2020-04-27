<html>
<head>
    <title>Tugas_Kelompok17</title>
</head>
<body>

<form action="tugas_modul6_kel17.php" method="POST">
		<h2>Data Mahasiswa1: </h2>
		<label>Nama : </label>
        <input type="text" name="nama1" placeholder="Masukkan Nama" required><br>
        <label>NIM : </label>
        <input type="text" name="nim1" placeholder="Masukkan NIM" required><br>
        <label>Umur : </label>
        <input type="number" name="umur1" placeholder="Masukkan Umur" required><br>
        <label>IPK : </label>
        <input type="number" name="ipk1" placeholder="0.00 - 4.00" step="0.01" min="0" max="4" required><br>
        <label>Golongan Darah : </label>
        <select name="goldar1" required>
			<option disabled selected>--Golongan Darah--</option>
			<option value="a">A</option>
			<option value="b">B</option>
			<option value="ab">AB</option>
            <option value="o">O</option>
		</select>
        <br>
        <h2>Data Mahasiswa2: </h2>
		<label>Nama : </label>
        <input type="text" name="nama2" placeholder="Masukkan Nama" required><br>
        <label>NIM : </label>
        <input type="text" name="nim2" placeholder="Masukkan NIM" required><br>
        <label>Umur : </label>
        <input type="number" name="umur2" placeholder="Masukkan Umur" required><br>
        <label>IPK : </label>
        <input type="number" name="ipk2" placeholder="0.00 - 4.00" step="0.01" min="0" max="4" required><br>
        <label>Golongan Darah : </label>
        <select name="goldar2" required>
			<option disabled selected>--Golongan Darah--</option>
			<option value="A">A</option>
			<option value="B">B</option>
			<option value="AB">AB</option>
            <option value="O">O</option>
		</select>
        <br><br>
        <button type="submit" name="submit_btn">Submit</button>
	</form>

<?php
include('mahasiswa1.php');
include('mahasiswa2.php');

if (isset($_POST['submit_btn'])){
    //membuat objek
    $biodata1 = new mahasiswa1();
    $biodata2 = new mahasiswa2();

    $biodata1->setNama($_POST['nama1']);
    $biodata1->setNIM($_POST['nim1']);
    $biodata1->setUmur($_POST['umur1']);
    $biodata1->setIPK($_POST['ipk1']);
    $biodata1->setGolDar($_POST['goldar1']);

    $biodata2->setNama($_POST['nama2']);
    $biodata2->setNIM($_POST['nim2']);
    $biodata2->setUmur($_POST['umur2']);
    $biodata2->setIPK($_POST['ipk2']);
    $biodata2->setGolDar($_POST['goldar2']);

    echo "<h3>Biodata Mahasiswa1</h3>";
    echo "Nama : ". $biodata1->getNama() ."<br>";
    echo "NIM : ". $biodata1->getNIM() ."<br>";
    echo "Umur : ". $biodata1->getUmur() ."<br>";
    echo "IPK : ". $biodata1->getIPK() ."<br>";
    echo "Gol. Darah : ". $biodata1->getGolDar() ."<br>";
    echo "<br>";
    echo "<h3>Biodata Mahasiswa2</h3>";
    echo "Nama : ". $biodata2->getNama() ."<br>";
    echo "NIM : ". $biodata2->getNIM() ."<br>";
    echo "Umur : ". $biodata2->getUmur() ."<br>";
    echo "IPK : ". $biodata2->getIPK() ."<br>";
    echo "Gol. Darah : ". $biodata2->getGolDar();
}

/*//mengatur nilai
$biodata1->setNama("Moh. Taufik Afandi");
$biodata1->setNIM("21120119130050");
$biodata1->setAsal("Kediri");
$biodata1->setHobi("Rebahan");

//menampilkan data
echo "Nama : ".$biodata_ku->getNama()."<br> NIM : ".$biodata_ku->getNIM();
echo "<br>Asal : ".$biodata_ku->getAsal()."<br>Hobi : ".$biodata_ku->getHobi();*/
		
?>

</body>
</html>