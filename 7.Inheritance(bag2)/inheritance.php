<?php 

class produk {
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga,
		   $jmlHalaman,
		   $waktumain;
		  
	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktumain = 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktumain = $waktumain;
	}


	public function getlabel() {
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoProduk() {
	 $str = "{$this->judul} | {$this->getlabel()}(Rp. {$this->harga})";
	 return $str;
	}
}


class Komik extends Produk {
	public function getinfoProduk() {
		$str = "Komik : {$this->judul} | {$this->getlabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
		return $str;
	}
}



class Game extends Produk {
	public function getInfoProduk() {
		$str = "Game : {$this->judul} | {$this->getlabel()} (Rp.{$this->harga}) ~ {$this->waktumain} Jam.";
		return $str;
	}
}

class CetakinfoProduk {
	public function cetak ( produk $produk ) {
		$str = "{$produk->judul} | {$produk->getlabel() },
			Cahaya Nusantara (Rp. {$produk->harga})";
		return $str;
	}
}





$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000,100,0, "Komik");
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 250000, 0, 50, "Game");

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

