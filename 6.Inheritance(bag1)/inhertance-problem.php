<?php 

class produk {
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga,
		   $jmlHalaman,
		   $waktumain,
		   $tipe;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktumain = 0, $tipe ) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktumain = $waktumain;
		$this->tipe = $tipe;
	}

	public function getlabel() {
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoLengkap() {
		// Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp.30000) - 100 Halaman.
	 $str = "{$this->tipe} : {$this->judul} | {$this->getlabel()}(Rp. {$this->harga})";
	 if ( $this->tipe == "komik" ) {
	 	$str .= " - {$this->jmlHalaman} Halaman.";
	}else if ( $this->tipe == "Game" ) {
		$str .= " ~ {$this->waktumain} Jam.";
	}

	 return $str;
	}

}

class CetakinfoProduk {
	public function cetak ( produk $produk ) {
		$str = "{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})";
		return $str;
	}
}




$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000,100,0, "Komik");
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 250000, 0, 50, "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();







 ?>