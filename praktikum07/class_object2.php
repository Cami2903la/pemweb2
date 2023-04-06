<?php
class Kendaraan
{
    public $nama, $warna, $jenis, $jumlahRoda;

    public function ngebut()
    {
        return"$this->nama adalah kendaraan yang bisa ngebut";
    }
    public function ngerem()
    {
        return "$this-> nama adalah kendaraan yang bisa ngerem";
    }

    public function getKendaraan()
    {
        echo "nama : $this->nama <br>
             warna : $this->warna <br>
             jenis : $this->jenis <br>
             jumlah roda : $this->jumlahRoda ";
    }
}
$objek = new Kendaraan;
$objek->nama = "modil corona";
$objek->warna = "merah";
$objek->jenis = "sedan";
$objek->jumlahRoda = 4;
echo $objek->ngebut();
echo "<br>";
$objek->getKendaraan();