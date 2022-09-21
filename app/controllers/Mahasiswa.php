<?php

class Mahasiswa extends Controller{

public function index(){
    $data['judul']='Daftar Mahasiswa';
    $data['mhs']=$this->model('Mahasiswa_model')->getAllMahasiswa();
    $this->view('templates/header',$data);
$this->view ('mahasiswa/index',$data);
$this->view('templates/footer');

}


public function detail($id){
    $data['judul']='Detail Mahasiswa';
    $data['mhs']=$this->model('Mahasiswa_model')->getMahasiswabyid($id);
    $this->view('templates/header',$data);
$this->view ('mahasiswa/detail',$data);
$this->view('templates/footer');

}


public function tambah(){

    if($this->model('Mahasiswa_model')->tambahdatamahasiswa($_POST)>0){
        Flasher::setFlash('Berhasil','ditambah','success');
    header('Location:'. BASEURL.'/mahasiswa');
    exit;
    } else{
    
        Flasher::setFlash('gaagal','ditambah','danger');
        header('Location:'. BASEURL.'/mahasiswa');
        exit;
    }

}


public function hapus($id){

    if($this->model('Mahasiswa_model')->hapusdatamahasiswa($id)>0){
        Flasher::setFlash('Berhasil','di HAPUS','success');
    header('Location:'. BASEURL.'/mahasiswa');
    exit;
    } else{
    
        Flasher::setFlash('gaagal','dihapus','danger');
        header('Location:'. BASEURL.'/mahasiswa');
        exit;
    }

}



public function getubah()
{

echo json_encode($this->model('Mahasiswa_model')->getMahasiswabyid($_POST['id']));
    
}


public function ubah()
{
    if($this->model('Mahasiswa_model')->ubahdatamahasiswa($_POST)>0){
        Flasher::setFlash('Berhasil','diubah','success');
    header('Location:'. BASEURL.'/mahasiswa');
    exit;
    } else{
    
        Flasher::setFlash('gaagal','diubah','danger');
        header('Location:'. BASEURL.'/mahasiswa');
        exit;
    }

}

public function cari()

{
    $data['judul']='Daftar Mahasiswa';
    $data['mhs']=$this->model('Mahasiswa_model')->cariMahasiswa();
    $this->view('templates/header',$data);
$this->view ('mahasiswa/index',$data);
$this->view('templates/footer');


}



}