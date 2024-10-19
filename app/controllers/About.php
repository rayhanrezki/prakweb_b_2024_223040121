<?php 

class About {
    public function index($nama = 'alfa ', $pekerjaan ='pengangguran'){
      echo "Halo nama saya $nama, saya adalah seorang $pekerjaan ";
    }
    public function page(){
      echo 'about/page';
    }
}

?>