<?php

class About extends Controller
{
  public function page()
  {
    $data['judul'] = 'About Page';
    $this->view('templates/header', $data);
    $this->view('about/page');
    $this->view('templates/footer');
  }

  public function index($nama = 'No name', $profesi = 'No profesi', $umur = 23)
  {
    $data["nama"] = $nama;
    $data["profesi"] = $profesi;
    $data["umur"] = $umur;
    $data["judul"] = 'About Me';

    $this->view('templates/header');
    $this->view('about/index', $data);
    $this->view('templates/footer');
  }
}
