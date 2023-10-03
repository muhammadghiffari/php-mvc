$(function () {
  // Tambah dan ubah siswa
  $(".tombolTambahData").on("click", function () {
    $("#formModalLabel").html("Tambah Data Siswa");
    $(".modal-footer button[type=submit]").html("Tambah Data");
    $("#nama").val("");
    $("#absen").val("");
    $("#kelas").val("");
    $("#jurusan").val("");
  });

  $(".tampilModalUbah").on("click", function () {
    $("#formModalLabel").html("Ubah Data Siswa");
    $(".modal-footer button[type=submit]").html("Ubah Data");
    $(".modal-body form").attr(
      "action",
      "http://localhost/php-mvc/public/siswa/ubah"
    );

    const id = $(this).data("id");

    $.ajax({
      url: "http://localhost/php-mvc/public/siswa/getubah",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#nama").val(data.nama);
        $("#absen").val(data.absen);
        $("#kelas").val(data.kelas);
        $("#jurusan").val(data.jurusan);
        $("#id").val(data.id);
      },
    });
  });

  //Tambah dan ubah jurusan
  $(".tombolTambahDataJurusan").on("click", function () {
    $("#formModalLabelJurusan").html("Tambah Data Jurusan");
    $(".modal-footer button[type=submit]").html("Tambah Data");
    $("#namaJurusan").val("");
    $("#deskripsiJurusan").val("");
  });

  $(".tampilModalUbahJurusan").on("click", function () {
    $("#formModalLabelJurusan").html("Ubah Data Jurusan");
    $(".modal-footer button[type=submit]").html("Ubah Data");
    $(".modal-body form").attr(
      "action",
      "http://localhost/php-mvc/public/jurusan/ubah"
    );

    const id = $(this).data("id");

    $.ajax({
      url: "http://localhost/php-mvc/public/jurusan/getubah",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#namaJurusan").val(data.namaJurusan);
        $("#deskripsiJurusan").val(data.deskripsiJurusan);
        $("#id").val(data.id);
      },
    });
  });

  //Tambah dan ubah kelas
  $(".tombolTambahDataKelas").on("click", function () {
    $("#formModalLabelKelas").html("Tambah Data Kelas");
    $(".modal-footer button[type=submit]").html("Tambah Data");
  });

  $(".tampilModalUbahKelas").on("click", function () {
    $("#formModalLabelKelas").html("Ubah Data Kelas");
    $(".modal-footer button[type=submit]").html("Ubah Data");
    $(".modal-body form").attr(
      "action",
      "http://localhost/php-mvc/public/kelas/ubah"
    );

    const id = $(this).data("id");

    $.ajax({
      url: "http://localhost/php-mvc/public/kelas/getubah",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#namaKelas").val(data.namaKelas);
        $("#id").val(data.id);
      },
    });
  });

  // Tambah dan ubah guru
  $(".tombolTambahDataGuru").on("click", function () {
    $("#formModalLabelGuru").html("Tambah Data Guru");
    $(".modal-footer button[type=submit]").html("Tambah Data");
    $("#namaGuru").val("");
    $("#deskripsiGuru").val("");
  });

  $(".tampilModalUbahGuru").on("click", function () {
    $("#formModalLabelGuru").html("Ubah Data Guru");
    $(".modal-footer button[type=submit]").html("Ubah Data");
    $(".modal-body form").attr(
      "action",
      "http://localhost/php-mvc/public/guru/ubah"
    );

    const id = $(this).data("id");

    $.ajax({
      url: "http://localhost/php-mvc/public/guru/getubah",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#namaGuru").val(data.namaGuru);
        $("#deskripsiGuru").val(data.deskripsiGuru);
        $("#id").val(data.id);
      },
    });
  });
});
