  <?php 
include "../koneksi/koneksi.php";

    $id = $_GET['ID_BOOKING'];

$result = mysqli_query($kon, "SELECT * FROM booking WHERE ID_BOOKING='$id'");

while($user_data = mysqli_fetch_array($result))
{
    $id = $user_data['ID_BOOKING'];
    $bayar = $user_data['DP'];
    $sisa = $user_data['SISA'];

}

  ?>
<head>
  <script type="text/javascript">

       var h_b1 = "<?php echo $sisa ?>"
       var h_b2 = "<?php echo $bayar ?>"

// perbaikan
function hitung()
      {
        var b1 = (document.getElementById('sisa').value == '' ? 0:document.getElementById('sisa').value);
        var b2 = (document.getElementById('bayar').value == '' ? 0:document.getElementById('bayar').value);


        var result = (parseInt(b1)) - (parseInt(b2));
        if (!isNaN(result)) {
           document.getElementById('harga').value = result;
        }
      }

      </script>
</head>
 <h3><i class="fas fa-book mr-2"></i>  DATA BOOKING </h3><hr>
        <a href="index.php?halaman=booking" class="btn btn-primary mb-3"><i class="fas fa-arrow-left mr-2"></i>Kembali</a>
        <h5 class="alert alert-warning p-2 rounded text-center">Pembayaran</h5>
        <form class="p-2 mt-4" action="proses_bayar.php" method="post">
          <div class="form-group">
            <label for="id">Id Booking</label>
            <input id="id" type="text" name="id" class="form-control" value="<?php echo $id; ?>" readonly style="background-color: #ccc">
          </div>
          <div class="form-group">
            <label for="bayar">Bayar</label>
            <input id="bayar" type="text" name="bayar" class="form-control" onKeyup="hitung();" value="<?php echo $bayar; ?>">
          </div>
          <div class="form-group">
            <label for="sisa">Total</label>
            <input id="sisa" type="text" name="sisa" class="form-control" onKeyup="hitung();" value="<?php echo $sisa; ?>" readonly style="background-color: #ccc">
          </div>
          <div class="form-group">
            <label for="harga">Sisa</label>
            <input id="harga" type="text" name="harga" class="form-control" value="" readonly style="background-color: #ccc">
          </div>
          <button type="submit" name="update" class="btn btn-primary">UPDATE</button>
        </div>
        </form>
      </div>
