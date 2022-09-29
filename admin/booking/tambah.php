<?php
function DateToIndo($date) { 
    $BulanIndo = array("Januari", "Februari", "Maret",
               "April", "Mei", "Juni",
               "Juli", "Agustus", "September",
               "Oktober", "November", "Desember");
  
    $tahun = substr($date, 0, 4);
    $bulan = substr($date, 5, 2); 
    $tgl   = substr($date, 8, 2); 
    
    $result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;
    return($result);
}
  ?>
  <?php 
$namlap1 = mysqli_query($kon,"SELECT NAMA_LAPANGAN FROM `lapangan` WHERE ID_LAPANGAN = '1'");
$datlap1 = mysqli_fetch_array($namlap1);

$namlap2 = mysqli_query($kon,"SELECT NAMA_LAPANGAN FROM `lapangan` WHERE ID_LAPANGAN = '2'");
$datlap2 = mysqli_fetch_array($namlap2);

$namlap3 = mysqli_query($kon,"SELECT NAMA_LAPANGAN FROM `lapangan` WHERE ID_LAPANGAN = '3'");
$datlap3 = mysqli_fetch_array($namlap3);
   ?>

        <h3><i class="fas fa-book mr-2"></i> TAMBAH BOOKING </h3><hr>
        <a href="booking.html" class="btn btn-primary mb-3"><i class="fas fa-arrow-left mr-2"></i>Kembali</a>
        <h5 style="text-align: right;"><span id="tanggalwaktu"></span></h5>
            <form action="" method="post">
                <h5>Cari Tanggal : </h5>
                <input class="rounded border form-control" type="date" name="tanggal" style="width: 20%; display: inline-block;">
                <button class="btn btn-primary mb-1" type="submit" name="cari">Cari</button>
                <p style="padding-top: 10px;">Jadwal Lapangan Tanggal <?php 

                if(isset($_POST['cari'])){
                        $tanggal = stripslashes($_POST['tanggal']);
            $tanggal = mysqli_real_escape_string($kon, $tanggal);
                      }else{
                        return 0;
                      }


                if(empty($tanggal)){
                         echo(DateToIndo( date("Y-m-d")));
                        }else{
                         echo(DateToIndo("$_POST[tanggal]"));
                          }?> </p>

            </form>
            <div class="container-jadwal mt-5">
              <div class="jadwal-lapangan">
                <h4 class="col-12 text-center"><?php echo $datlap1['NAMA_LAPANGAN']; ?></h4>
                <table class="mt-4 table table-striped table-bordered text-center">
                  <thead>
                    <tr>
                      <th scope="col">Jam</th>
                      <th scope="col">Harga</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <?php

$lap1 = mysqli_query($kon,"SELECT ID_JADWAL,JAM,ID_HARGA,ID_LAPANGAN,(SELECT HARGA FROM harga WHERE ID_HARGA=jadwal.ID_HARGA) AS HARGA, (SELECT NAMA_LAPANGAN FROM lapangan WHERE ID_LAPANGAN=jadwal.ID_LAPANGAN) AS LAPANGAN FROM jadwal WHERE ID_JADWAL BETWEEN '1' AND '16'");

 while ($data1 = mysqli_fetch_array($lap1)) {

  $ket = mysqli_query($kon,"SELECT booking.ID_JADWAL,TANGGAL,KETERANGAN FROM booking,jadwal WHERE booking.ID_JADWAL=jadwal.ID_JADWAL AND TANGGAL='$tanggal' AND booking.ID_JADWAL='$data1[ID_JADWAL]'");
$dat = mysqli_fetch_array($ket);
                        

                       ?>       
                       <tr>
                        <td><?php echo $data1['JAM']; ?></td>
                        <td><?php echo $data1['HARGA'] ?></td>
                        <td>
                          <?php 
                          if(($dat['KETERANGAN']=='Tertunda')){
                           ?>
                           <form action='index.php?halaman=formbooking' method='post'>
                          <input type='hidden' name='tanggal' value='<?php echo $tanggal; ?>'>
                          <input type='hidden' name='idjadwal' value='<?php echo $data1['ID_JADWAL'];?>'>
                          <input type='hidden' name='idharga' value='<?php echo $data1['ID_HARGA']; ?>'>
                          <input type='hidden' name='idlapangan' value='<?php echo $data1['ID_LAPANGAN']; ?>'>
                          <input type='hidden' name='jam' value='<?php echo $data1['JAM']; ?>'>
                          <input type='hidden' name='harga' value='<?php echo $data1['HARGA'] ?>'>
                          <button type='submit' name='booking' class='btn btn-primary'>Booking</button>
                        </form>
                        <?php 
}else if(($dat['TANGGAL']==$tanggal AND $data1['ID_JADWAL']==$dat['ID_JADWAL'])){
  echo "<button type='submit' name='booking' class='btn btn-danger' style='cursor:not-allowed;'>Booked</button>";
}else{
                         ?>
                         <form action='index.php?halaman=formbooking' method='post'>
                          <input type='hidden' name='tanggal' value='<?php echo $tanggal; ?>'>
                          <input type='hidden' name='idjadwal' value='<?php echo $data1['ID_JADWAL'];?>'>
                          <input type='hidden' name='idharga' value='<?php echo $data1['ID_HARGA']; ?>'>
                          <input type='hidden' name='idlapangan' value='<?php echo $data1['ID_LAPANGAN']; ?>'>
                          <input type='hidden' name='jam' value='<?php echo $data1['JAM']; ?>'>
                          <input type='hidden' name='harga' value='<?php echo $data1['HARGA'] ?>'>
                          <button type='submit' name='booking' class='btn btn-success'>Booking</button>
                        </form>
                    <?php } ?>
                          
                        </td>
                       </tr>  

                        
                         <?php } ?>
                  </tbody>
                </table>
              </div>
              <div class="jadwal-lapangan">
                <h4 class="col-12 text-center"><?php echo $datlap2['NAMA_LAPANGAN']; ?></h4>
                <table class="mt-4 table table-striped table-bordered text-center">
                  <thead>
                    <tr>
                      <th scope="col">Jam</th>
                      <th scope="col">Harga</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <?php

$lap2 = mysqli_query($kon,"SELECT ID_JADWAL,JAM,ID_HARGA,ID_LAPANGAN,(SELECT HARGA FROM harga WHERE ID_HARGA=jadwal.ID_HARGA) AS HARGA, (SELECT NAMA_LAPANGAN FROM lapangan WHERE ID_LAPANGAN=jadwal.ID_LAPANGAN) AS LAPANGAN FROM jadwal WHERE ID_JADWAL BETWEEN '17' AND '32'");

 while ($data2 = mysqli_fetch_array($lap2)) {

  $ket2 = mysqli_query($kon,"SELECT booking.ID_JADWAL,TANGGAL,KETERANGAN FROM booking,jadwal WHERE booking.ID_JADWAL=jadwal.ID_JADWAL AND TANGGAL='$tanggal' AND booking.ID_JADWAL='$data2[ID_JADWAL]'");
$dat2 = mysqli_fetch_array($ket2);
                        

                       ?>       
                       <tr>
                        <td><?php echo $data2['JAM']; ?></td>
                        <td><?php echo $data2['HARGA'] ?></td>
                        <td>
                          <?php 
                          if(($dat2['KETERANGAN']=='Tertunda')){
                           ?>
                           <form action='index.php?halaman=formbooking' method='post'>
                          <input type='hidden' name='tanggal' value='<?php echo $tanggal; ?>'>
                          <input type='hidden' name='idjadwal' value='<?php echo $data2['ID_JADWAL'];?>'>
                          <input type='hidden' name='idharga' value='<?php echo $data2['ID_HARGA']; ?>'>
                          <input type='hidden' name='idlapangan' value='<?php echo $data2['ID_LAPANGAN']; ?>'>
                          <input type='hidden' name='jam' value='<?php echo $data2['JAM']; ?>'>
                          <input type='hidden' name='harga' value='<?php echo $data2['HARGA'] ?>'>
                          <button type='submit' name='booking' class='btn btn-primary'>Booking</button>
                        </form>
                        <?php 
}else if(($dat2['TANGGAL']==$tanggal AND $data2['ID_JADWAL']==$dat2['ID_JADWAL'])){
  echo "<button type='submit' name='booking' class='btn btn-danger' style='cursor:not-allowed;'>Booked</button>";
}else{
                         ?>
                         <form action='index.php?halaman=formbooking' method='post'>
                          <input type='hidden' name='tanggal' value='<?php echo $tanggal; ?>'>
                          <input type='hidden' name='idjadwal' value='<?php echo $data2['ID_JADWAL'];?>'>
                          <input type='hidden' name='idharga' value='<?php echo $data2['ID_HARGA']; ?>'>
                          <input type='hidden' name='idlapangan' value='<?php echo $data2['ID_LAPANGAN']; ?>'>
                          <input type='hidden' name='jam' value='<?php echo $data2['JAM']; ?>'>
                          <input type='hidden' name='harga' value='<?php echo $data2['HARGA'] ?>'>
                          <button type='submit' name='booking' class='btn btn-success'>Booking</button>
                        </form>
                    <?php } ?>
                          
                        </td>
                       </tr>  

                        
                         <?php } ?>
                  </tbody>
                </table>
              </div>
              <div class="jadwal-lapangan">
                <h4 class="col-12 text-center"><?php echo $datlap3['NAMA_LAPANGAN']; ?></h4>
                <table class="mt-4 table table-striped table-bordered text-center">
                  <thead>
                    <tr>
                      <th scope="col">Jam</th>
                      <th scope="col">Harga</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <?php

$lap3 = mysqli_query($kon,"SELECT ID_JADWAL,JAM,ID_HARGA,ID_LAPANGAN,(SELECT HARGA FROM harga WHERE ID_HARGA=jadwal.ID_HARGA) AS HARGA, (SELECT NAMA_LAPANGAN FROM lapangan WHERE ID_LAPANGAN=jadwal.ID_LAPANGAN) AS LAPANGAN FROM jadwal WHERE ID_JADWAL BETWEEN '33' AND '48'");

 while ($data3 = mysqli_fetch_array($lap3)) {

  $ket3 = mysqli_query($kon,"SELECT booking.ID_JADWAL,TANGGAL,KETERANGAN FROM booking,jadwal WHERE booking.ID_JADWAL=jadwal.ID_JADWAL AND TANGGAL='$tanggal' AND booking.ID_JADWAL='$data3[ID_JADWAL]'");
$dat3 = mysqli_fetch_array($ket3);
                        

                       ?>       
                       <tr>
                        <td><?php echo $data3['JAM']; ?></td>
                        <td><?php echo $data3['HARGA'] ?></td>
                        <td>
                          <?php 
                          if(($dat3['KETERANGAN']=='Tertunda')){
                           ?>
                           <form action='index.php?halaman=formbooking' method='post'>
                          <input type='hidden' name='tanggal' value='<?php echo $tanggal; ?>'>
                          <input type='hidden' name='idjadwal' value='<?php echo $data3['ID_JADWAL'];?>'>
                          <input type='hidden' name='idharga' value='<?php echo $data3['ID_HARGA']; ?>'>
                          <input type='hidden' name='idlapangan' value='<?php echo $data3['ID_LAPANGAN']; ?>'>
                          <input type='hidden' name='jam' value='<?php echo $data3['JAM']; ?>'>
                          <input type='hidden' name='harga' value='<?php echo $data3['HARGA'] ?>'>
                          <button type='submit' name='booking' class='btn btn-primary'>Booking</button>
                        </form>
                        <?php 
}else if(($dat3['TANGGAL']==$tanggal AND $data3['ID_JADWAL']==$dat3['ID_JADWAL'])){
  echo "<button type='submit' name='booking' class='btn btn-danger' style='cursor:not-allowed;'>Booked</button>";
}else{
                         ?>
                         <form action='index.php?halaman=formbooking' method='post'>
                          <input type='hidden' name='tanggal' value='<?php echo $tanggal; ?>'>
                          <input type='hidden' name='idjadwal' value='<?php echo $data3['ID_JADWAL'];?>'>
                          <input type='hidden' name='idharga' value='<?php echo $data3['ID_HARGA']; ?>'>
                          <input type='hidden' name='idlapangan' value='<?php echo $data3['ID_LAPANGAN']; ?>'>
                          <input type='hidden' name='jam' value='<?php echo $data3['JAM']; ?>'>
                          <input type='hidden' name='harga' value='<?php echo $data3['HARGA'] ?>'>
                          <button type='submit' name='booking' class='btn btn-success'>Booking</button>
                        </form>
                    <?php } ?>
                          
                        </td>
                       </tr>  

                        
                         <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
              

            </div>
      </div>
<script>
  var tw = new Date();
    if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
    else (a=tw.getTime());
    tw.setTime(a);
    var tahun= tw.getFullYear ();
    var hari= tw.getDay ();
    var bulan= tw.getMonth ();
    var tanggal= tw.getDate ();
    var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
    var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
    document.getElementById("tanggalwaktu").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun;
    $(document).ready(function () {
    var date = new Date();
    var currentMonth = date.getMonth();
    var currentDate = date.getDate();
    var currentYear = date.getFullYear();
$('#datepicker').datepicker({ dateFormat: 'DD' });
   
});

</script>