<?php 

Class Orang {
	public $nama = 'Alek' ;
	public $jenisKelamin;

	public function makan()
	{
		return $this->nama. ' Sedang makan <br> ';
	}
}

$saya = new Orang;
$saya->nama = "Reni";
echo $saya->makan();

$saya->nama = 'Nina';
echo $saya->makan();