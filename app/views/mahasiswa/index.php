<div class="container mt-3">


<?php Flasher::flash(); ?>

<div class="row">
    <div class="col-6">
        <h3>Daftra mahasiswa</h3>


<!-- Button trigger modal -->
<button type="button " class="btn btn-primary tambahdata" data-bs-toggle="modal" data-bs-target="#formmodal">
  Tambah Data
</button>

<br>
<br>
<br>
<form action="<?= BASEURL ;?>/mahasiswa/cari" method="post">

<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="cari username" id="key" name="key" aria-label="Recipient's username" aria-describedby="button-addon2">
  <button class="btn btn-outline-secondary" type="submit" id="cari">Cari</button>
</div>

</form>






        
        <ul class="list-group">
        <?php foreach($data['mhs'] as $mhs):?>
        <li class="list-group-item "><?=$mhs['nama']; ?>
    <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="badge rounded-pill text-bg-primary float-right ml-3 ">Details</a>

    <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id'] ?>" class="badge rounded-pill text-bg-warning float-right tampilModalubah" data-bs-toggle="modal" data-bs-target="#formmodal" data-id="<?= $mhs['id']; ?>">Ubah</a>
   
   
    <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id'] ?>" class="badge rounded-pill text-bg-danger float-right" onclick="return confirm('yakin??')">Hapus</a>
  

    </li>
        <?php endforeach;?>
  
</ul>







    </div>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="formmodal" tabindex="-1" aria-labelledby="judulmodal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formmodlabel">TAMBAH DATA MAHASISWA MODAL</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       
      <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post"> 
<input type="hidden" name="id" id="id">
      <div class="mb-3">
    <label for="nama" class="form-label">Nama </label>
    <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" name="nama">
      </div>

      <div class="form-group">
    <label for="kelas">Kelas</label>
    <select class="form-control" id="kelas" name="kelas">
      <option value="TI">TI</option>
      <option value="SI">SI</option>
    
    </select>
  </div>

   

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </div>
    </div>
  </div>

  </form>
</div>
