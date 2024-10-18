<?php

class About {
    public function index($nama = 'Miftahul Huda', $pekerjaan = "Mahasiswa") {
        echo "Halo, $nama saya Miftahul Huda, saya adalah seorang $pekerjaan";
    }
    public function page() {
        echo 'About/page';
    }
}