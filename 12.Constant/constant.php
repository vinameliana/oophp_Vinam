<?php 

// define('NAMA', 'Vina Meliana');
// echo NAMA;

// echo "<br>";

// const UMUR = 17;
// echo UMUR;

// class Coba {
// const NAMA = 'Vina Meliana';
// }

// echo Coba::NAMA;



// echo __LINE__;


// function coba() {
// return __FUNCTION__;
// }

// echo coba();

class Coba {
	public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;












 ?>