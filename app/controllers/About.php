<?php

class About {

    // method default
    public function index($nama = "Raden Ariffudin Rachman", $pekerjaan = "Mahasiswa"){
        echo "Halo, Nama Saya $nama, Saya Adalah Seorang $pekerjaan";
    }

    public function page(){
        echo 'About/page';
    }
}