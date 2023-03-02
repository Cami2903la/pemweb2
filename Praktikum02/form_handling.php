<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>
<body>
    <h1>Form Pendaftaran Mahasiswa</h1>
    <form action="belajar_post.php" method="POST">
        <!-- tipe text -->
        <label for="">Nama Mahasiswa :</label><br><br>
        <input type="text" name="nama" ><br><br>
        <!-- tipe radio -->
        <label for="">Jenis Kelamin</label><br>
        <input type="radio" name="jenis_kelamin" value="laki-laki">
            <label for="">laki-laki</label>
        <input type="radio" name="jenis_kelamin" value="perempuan">
            <label for="">perempuan</label><br><br>
        <!-- tipe checkbox -->
        <label for="">Hobi</label><br>
        <input type="checkbox" name="hobi" value="Futsal">
            <label for="">Futsal</label><br>
        <input type="checkbox" name="hobi" value="Badminton">
            <label for="">Badminton</label><br>
        <input type="checkbox" name="hobi" value="Berenang">
            <label for="">Berenang</label><br>
        <input type="checkbox" name="hobi" value="Lari">
            <label for="">Lari</label><br><br>
        <!-- number -->
        <label for="">NIM</label><br>
        <input type="number" name="nim"><br><br>
        <!-- select -->
        <label for="">Prodi</label><br>
        <select name="prodi" >
            <option value="teknik informatika">teknik informatika</option>
            <option value="sistem informasi">sistem informasi</option>
            <option value="bisnis digital">bisnis digital</option>
        </select><br><br>
        <!-- button -->
        <button type="submit">kirim</button>
        <button type="reset">reset</button>

        
    </form>
</body>
</html>