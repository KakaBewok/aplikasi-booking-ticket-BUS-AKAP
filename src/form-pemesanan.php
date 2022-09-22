<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="./style/style-custom.css" />
    <title>Form-Pemesanan</title>
  </head>
  <body>
    <div
      class="container mt-5 mb-5 border rounded-3 p-4 shadow-lg container-mobile"
      style="width: 50%"
    >
      <h3>Form Pemesanan Tiket</h3></br>
      <a class="btn btn-primary" href="index.php" role="button">Beranda</a>
      <a class="btn btn-warning ms-3" href="tabel-harga.php" role="button">Daftar Harga</a>
      <form class="mt-4" method="post" action="form-pemesanan.php">
        <!-- nama -->
        <div class="mb-4">
          <label for="nama" class="form-label">Nama Lengkap</label>
          <input
            type="text"
            class="form-control"
            id="nama"
            name="nama-lengkap"
            placeholder="Noprizal"
            required
          />
        </div>
        <!-- nik -->
        <div class="mb-4">
          <label for="noid" class="form-label">Nomor Identitas (KTP)</label>
          <input
            type="int"
            class="form-control"
            id="noid"
            name="nomor-identitas"
            placeholder="3201234567891011"
            required
            maxlength="16"
          />
          <div id="emailHelp" class="form-text">
            Pastikan NIK berjumlah 16 digit
          </div>
        </div>
        <!-- no. hp -->
        <div class="mb-4">
          <label for="nohp" class="form-label">No. HP</label>
          <input
            type="number"
            class="form-control"
            id="nohp"
            name="no-hp"
            placeholder="085156497401"
            required
          />
        </div>
        <!-- kelas penumpang -->
        <div class="mb-4">
          <label for="kelas" class="form-label">Kelas Penumpang</label><br />
          <select id="kelas" class="form-select form-select-sm" aria-label=".form-select-sm example" name="kelas-penumpang">
            <option selected>--Pilih kelas penumpang--</option>
            <option value="Ekonomi">Ekonomi</option>
            <option value="Bisnis">Bisnis</option>
            <option value="Eksekutif">Eksekutif</option>
          </select>
        </div>
        <!-- tanggal keberangkatan -->
        <div class="mb-4">
          <label for="tanggalberangkat" class="form-label"
            >Tanggal Keberangkatan</label
          >
          <input
            type="date"
            class="form-control"
            id="tanggalberangkat"
            name="tanggal-keberangkatan"
            style="width: 18%"
            required
          />
        </div>
        <!-- jumlah penummpang -->
        <div class="mb-4">
          <label for="jpenumpang" class="form-label">Jumlah Penumpang</label>
          <input
            type="number"
            class="form-control"
            id="jpenumpang"
            placeholder="Jumlah penumpang non lansia (kurang dari 60 tahun)"
            name="jumlah-penumpang"
            required
          />
        </div>
        <!-- jumlah penummpang lansia -->
        <div class="mb-4">
          <label for="jpenumpang-lansia" class="form-label"
            >Jumlah Penumpang Lansia</label
          >
          <input
            type="number"
            class="form-control"
            id="jpenumpang-lansia"
            placeholder="Jumlah penumpang lansia (lebih dari 60 tahun)"
            name="jumlah-penumpang-lansia"
            required
          />
          <div id="emailHelp" class="form-text">
            Khusus penumpang lansia akan diberikan diskon 10%
          </div>
        </div>
        <hr size="6" width="100%" align="left" color="darkblue">
        
<?php
    // import fungsi dari file function
    require('function.php');
    //memeriksa apakah tombol hitung sudah ditekan
    if(isset($_POST['hitung-total-bayar'])){
      // inisialisasi variabel
      $nama_lengkap = $_POST['nama-lengkap'];
      $nomor_identitas = $_POST['nomor-identitas'];
      $no_hp = $_POST['no-hp'];
      $kelas_penumpang = $_POST['kelas-penumpang'];
      $tanggal_keberangkatan = $_POST['tanggal-keberangkatan'];
      $total_non_lansia = $_POST['jumlah-penumpang'];
      $total_lansia = $_POST['jumlah-penumpang-lansia'];
      
      //menentukan harga tiket berdasarkan kelas penumpang
      if($kelas_penumpang === 'Ekonomi'){
        $harga_tiket = 200000;
        $harga_tiket_str = 'Rp. ' . number_format($harga_tiket,0,',','.');
      } elseif($kelas_penumpang === 'Bisnis'){
        $harga_tiket = 300000;
        $harga_tiket_str = 'Rp. ' . number_format($harga_tiket,0,',','.');
      } elseif($kelas_penumpang === 'Eksekutif'){
        $harga_tiket = 400000;
        $harga_tiket_str = 'Rp. ' . number_format($harga_tiket,0,',','.');
      } else {
          $harga_tiket = 000000;
      }
      //menampilkan harga tiket sesuai dengan kelas penumpang
      echo "<label class='form-label'>Harga Tiket Kelas ". $kelas_penumpang ." : <span name='harga-tiket'>". $harga_tiket_str . "</span></label>";
      //menginisialisasi variabel hasil dari perhitungan
      $hasil_total_pembayaran = 'Rp. ' . number_format(hitungTotalBayar($total_non_lansia, $total_lansia, $harga_tiket, 0.9),0,',','.');
      echo "<br/><br/>";
      //menampilkan total bayar sesuai dengan kelas penumpang
      echo "<label class='form-label'>Total Pembayaran : <span name='total-bayar'>". $hasil_total_pembayaran . "</span></label>";
    } //memeriksa apakah tombol pesan-tiket sudah ditekan
    elseif(isset($_POST['pesan-tiket'])){
      // inisialisasi variabel
      $nama_lengkap = $_POST['nama-lengkap'];
      $nomor_identitas = $_POST['nomor-identitas'];
      $no_hp = $_POST['no-hp'];
      $kelas_penumpang = $_POST['kelas-penumpang'];
      $tanggal_keberangkatan = $_POST['tanggal-keberangkatan'];
      $total_non_lansia = $_POST['jumlah-penumpang'];
      $total_lansia = $_POST['jumlah-penumpang-lansia'];
      
      //menentukan harga tiket berdasarkan kelas penumpang
      if($kelas_penumpang === 'Ekonomi'){
        $harga_tiket = 200000;
        $harga_tiket_str = 'Rp. ' . number_format($harga_tiket,0,',','.');
      } elseif($kelas_penumpang === 'Bisnis'){
        $harga_tiket = 300000;
        $harga_tiket_str = 'Rp. ' . number_format($harga_tiket,0,',','.');
      } elseif($kelas_penumpang === 'Eksekutif'){
        $harga_tiket = 400000;
        $harga_tiket_str = 'Rp. ' . number_format($harga_tiket,0,',','.');
      } else {
          $harga_tiket = 000000;
      }
      //menampilkan harga tiket sesuai dengan kelas penumpang
      echo "<label class='form-label'>Harga Tiket Kelas ". $kelas_penumpang ." : <span name='harga-tiket'>". $harga_tiket_str . "</span></label>";
      //menginisialisasi variabel hasil dari perhitungan
      $hasil_total_pembayaran = 'Rp. ' . number_format(hitungTotalBayar($total_non_lansia, $total_lansia, $harga_tiket, 0.9),0,',','.');
      echo "<br/><br/>";
      //menampilkan total bayar sesuai dengan kelas penumpang
      echo "<label class='form-label'>Total Pembayaran : <span name='total-bayar'>". $hasil_total_pembayaran . "</span></label>";

      // cek apakah data berhasil ditambahkan atau tidak
      if(tambah($_POST, $harga_tiket_str, $hasil_total_pembayaran) > 0){
        echo " <script>
                alert('Data berhasil disimpan.');
              </script>";
      } else {
        echo "<script>
                alert('Data GAGAL disimpan.');
              </script>";
              // document.location.href = 'index.php';
              // window.location.reload();
              // window.location.href = window.location.href;
      }
    
    
    } 
    else {
      $harga_tiket_str = 0;
      $hasil_total_pembayaran = 0;

      echo "<label for='hargatiket' class='form-label'>Harga Tiket : ". $harga_tiket_str . "</label>";
      echo "<br/><br/>";
      echo "<label class='form-label'>Total Pembayaran : <span name='total-bayar'>". $hasil_total_pembayaran . "</span></label>";
    }
?>
        <br/>
        <!-- checkbox persetujuan -->
        <hr size="6" width="100%" align="left" color="darkblue">
        <div class="mb-4 form-check">
          <input
            type="checkbox"
            class="form-check-input"
            id="persetujuan"
            name="persetujuan"
            required
          />
          <label class="form-check-label" for="persetujuan"
            >Saya dan/atau rombongan telah membaca, memahami, dan setuju
            berdasarkan syarat dan ketentuan yang telah ditetapkan</label
          >
        </div>

        <!-- tombol-tombol -->
        <button
          type="submit"
          class="btn btn-primary mb-3 ms-1 btn-bawah"
          name="hitung-total-bayar"
        >
          Hitung Total Bayar
        </button>
        <button
          type="submit"
          class="btn btn-primary mb-3 ms-4 btn-bawah"
          name="pesan-tiket"
        >
          Pesan Tiket
        </button>
        <a class="btn btn-warning mb-3 ms-4 btn-bawah" href="<?php $_SERVER['PHP_SELF']; ?>" role="button" name="batal">Batal</a>
      </form>
      <br>
    </div>
    <p class="text-center">Copyright © 2022 Noprizal</p>
    <script src="./style/bootstrap/js/bootstrap.js"></script>
  </body>
</html>
