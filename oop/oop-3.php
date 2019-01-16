<?php 
Class OrangTua {
	protected $nama = 'Alek' ;
	protected $jenisKelamin = "Laki-laki";

	public function setData($nm = 'Dodo Sidodo', $jk = 'Laki-laki'){
		$this->nama = $nm;
		$this->jenisKelamin = $jk;
	}

	public function makan() {
		return "{$this->nama} sedang makan <br>";
	}
} 

Class AnakOrang extends OrangTua {
	public function biodata() {
		return "Nama : {$this->nama} <br>".
			   "jenisKelamin : {$this->jenisKelamin} <br>".
				"=========================================<p>";
	}
}

$anak = new AnakOrang;
$anak->setData('Reni', 'Perempuan');
echo $anak->biodata();
echo $anak->makan();