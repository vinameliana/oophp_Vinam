<?php 

class Produk {
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga;


	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktumain = 0 ) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;

	}

	public function getlabel() {
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoProduk() {
		$str = "{$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";
		
		return $str;
	}


}


class Komik extends Produk {
	public $jmlHalaman;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ) {


		parent::__construct( $judul, $penulis, $penerbit, $harga );
	
		$this->jmlHalaman = $jmlHalaman;

	}


	public function getInfoProduk() {
		$str = "Komik : " . parent::
			getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
		return $str; 
	}
}


class Game extends Produk {
	public $waktumain;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktumain = 0 ) {
		parent::__construct( $judul, $penulis, $penerbit, $harga );

		$this->waktumain = $waktumain;
	
	}

	public function getInfoProduk() {
		$str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktumain} jam.";
	}

}

class CetakinfoProduk {
	public function cetak( Produk $Produk ) {
		$str = "{$Produk->judul} | {$Produk->getlabel() }, Cahaya Nusantara (Rp. {$Produk->harga})";
		return $str;
	}
}






$Produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0);
$Produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50, 0);

echo $Produk1->getInfoProduk();
echo "<br>";
echo $Produk2->getInfoProduk();







 ?>