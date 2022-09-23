<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../style/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="../style/style-custom.css" />
    <title>Tabel-harga RBus</title>
  </head>
  <body>
    <div class="container">
      <h3>Daftar Harga RBus</h3>
      <br />
      <a class="btn btn-primary" href="../index.php" role="button">Beranda</a>
      <a class="btn btn-warning ms-3" href="form-pemesanan.php" role="button">Pesan Tiket</a>
      <br />
      <br />
      <table
        class="table table-striped table-hover border border-1 rounded tabel-harga shadow-sm"
      >
        <tr>
          <th>No.</th>
          <th>Nama Bus</th>
          <th>Kelas Bus</th>
          <th>Harga Tiket</th>
        </tr>

        <!-- mengakses database untuk menampilkan daftar bus -->
        <?php require('../function.php'); ?>
        <?php $buses = query("SELECT * FROM daftar_bus ORDER BY id DESC"); ?>
        <?php $i = 1; ?>
        <?php foreach($buses as $bus): ?>

        <tr>
          <th><?= $i; ?></th>
          <td><?= $bus['Nama Bus']; ?></td>
          <td><?= $bus['Kelas Bus']; ?></td>
          <td><?= "Rp. " . number_format($bus['Harga Tiket'], 0, ',' , '.'); ?></td>
        </tr>
        
        <?php $i++; ?>
        <?php endforeach; ?>

      </table>
      <br>
      <br>
      <p class="text-center">Copyright © 2022 Noprizal</p>
    </div>
    <script src="../style/bootstrap/js/bootstrap.js"></script>
  </body>
</html>
