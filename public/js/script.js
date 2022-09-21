$(function () {
  $(".tambahdata").on("click", function () {
    $("#formmodlabel").html("Tambah Data Mahasiswa");

    $(".modal-footer button[type=submit]").html("Tambah Data");
  });

  $(".tampilModalubah").on("click", function () {
    $("#formmodlabel").html("Ubah Data Mahasiswa");
    $(".modal-footer button[type=submit]").html("Ubah Data");
    $(".modal-body form").attr("action", "http://localhost/PHPMCV/public/mahasiswa/ubah");

    const id = $(this).data("id");

    $.ajax({
      url: "http://localhost/PHPMCV/public/mahasiswa/getubah",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#nama").val(data.nama);
        $("#kelas").val(data.kelas);
        $("#id").val(data.id);
      },
    });
  });
});
