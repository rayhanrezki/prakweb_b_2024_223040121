<?php 

class About extends Controller  {
    public function index($nama = 'alfa ', $pekerjaan ='pengangguran', $umur = 20)
    {
      $data ['nama'] = $nama;
      $data ['pekerjaan'] = $pekerjaan;
      $data ['Umur'] = $umur;
      $data ['judul'] = 'About me';
      $this->view('templates/header'. $data);
      $this-> view('about/index' , $data);
      $this->view('templates/footer');
    }
    public function page(){
      $data ['judul'] = 'Page';
      $this->view('templates/header', $data);
      $this ->view ('about/index');
      $this->view('templates/footer');
    }
}

?>