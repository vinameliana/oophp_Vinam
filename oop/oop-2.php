<?php 

Class OrangTua {
	public $nama = 'Alek';
	public $JenisKelamin = "Laki-laki";

	public function makan() {
		return "{$this->nama} sedang makan <br>";
	}
} 

Class AnakOrang extends OrangTua {

	public function biodata() {
		return "Nama : {$this->nama} <br>". 
			   "JenisKelamin : {$this->JenisKelamin} <br>".
				"=========================================<p>";
	}
}

$anak = new AnakOrang;
$anak->nama = "Reni";
$anak->JenisKelamin = "Perempuan";
echo $anak->biodata();
echo $anak->makan();