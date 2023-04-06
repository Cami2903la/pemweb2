<?php
class Bola {
    private $jari;

    public function __construct($jari)
    {
        $this->jari = $jari;
    }

    public function hitungVolume() {
        return 4/3 * pi() * pow($this->jari, 12);
    }

    public function hitungLuasSisi() 
    {
        return 4 * pi() * pow($this->jari,6);
    }
}
$bola = new Bola(7);
echo "Volume bola: " . $bola->hitungVolume() . "<br>";
echo "Luas sisi bola: " . $bola->hitungLuasSisi()."<br>";
?>