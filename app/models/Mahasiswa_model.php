<?php


class Mahasiswa_model{

private $table ='mahasiswa';
private $db;



public function __construct()
{
$this->db=new Database;
}


public function getAllMahasiswa()
{

   $this->db->query('SELECT * FROM '.$this->table);
   return $this->db->resultSet();

}

public function getMahasiswabyid($id)
{
   $this->db->query('SELECT * FROM '.$this->table.' WHERE id=:id');
$this->db->bind('id',$id);
   return $this->db->single();

}




public function tambahdatamahasiswa($data)
{
$query ="INSERT INTO mahasiswa
Values

('',:nama,:kelas)
";

$this->db->query($query);
$this->db->bind('nama', $data['nama']);
$this->db->bind('kelas', $data['kelas']);

$this->db->execute();

return $this->db->rowCount();


}


public function hapusdatamahasiswa($id){

$query ="DELETE FROM mahasiswa WHERE id=:id";
$this->db->query($query);
$this->db->bind('id',$id);

$this->db->execute();
return $this->db->rowCount();

}


public function ubahdatamahasiswa($data)
{
$query ="UPDATE mahasiswa set 
nama =:nama,
kelas=:kelas where id =:id
";

$this->db->query($query);
$this->db->bind('nama', $data['nama']);
$this->db->bind('kelas', $data['kelas']);
$this->db->bind('id', $data['id']);
$this->db->execute();

return $this->db->rowCount();


}


public function cariMahasiswa(){

$key =$_POST['key'];
$query = "select * from mahasiswa where nama LIKE :key";
$this->db->query($query);

$this->db->bind('key',"%$key%");
return $this->db->resultSet();

}


}