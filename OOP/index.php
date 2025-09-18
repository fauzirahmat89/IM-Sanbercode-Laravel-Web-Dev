<?php
    // contoh class
    class Mobil {
        public $roda = 4; // property
        protected $rodaProtected = 8;
        private $rodaPrivate = 6;
        public $merek = "";

        public function __construct($merek){
            $this->merek= $merek;
        }
        
        public function jalan(){ // method
            echo "Mobil berjalan <br>";
        }
        private function jalanPrivate(){ // method
            echo "Mobil berjalan <br>";
        }
        public function jumlah_roda(){
            echo "jumlah roda : " . $this->roda . "<br>"; // gunakan $this jika ingin memanggil property didalam class atau method
        }

    }

    $avanza = new Mobil("avanza"); // membuat objek (instansiasi)

    $avanza->jalan(); // memanggil method
    echo "rodanya : " . $avanza->roda . "<br>"; // memanggil property
    echo $avanza -> jumlah_roda(); // memanggil method jumlah_roda

    // visibilitas ada private protected public dan default
    $avanzaPrivate = new Mobil("avanzaPrivate");
    // echo $avanzaPrivate->jalanPrivate(); // akan error karna private methodnya
    // echo $avanzaPrivate->rodaPrivate; // property atau method private hannya dapat diakses didalam classnya tidak bisa diluar class

    // Protected
    // property atau method portected hannya dapat diakses
    // jika class tersebut turunannya tetapi akses diluar
    // classnya tidak bisa
    class MobilSport extends Mobil {
        protected $maxSpeed;
        public function tampil(){
            echo $this->rodaProtected;
        }
        // public function tampil(){
        //     echo $this->rodaPrivate; // error tidak bisa karena private
        // }
    }

    $ferrari = new MobilSport("ferari");
    echo $ferrari->tampil();

    // CONTRUKTOR
    // contruktor adalah method atau function yang akan dijalankan
    // pertama kali
    $xenia = new Mobil("Xenia");
    echo "<br>" . $xenia->merek;
?>