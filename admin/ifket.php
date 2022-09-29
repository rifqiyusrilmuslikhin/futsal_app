
<?php 
if(($data['SISA']=='0')){
	echo "<td><p class='bg-primary p-1 text-white rounded btn-sm m-auto'>".$data['KETERANGAN']."</p></td>";
	echo "<td></td>";
                      echo "<td><button class='btn bg-success' style='width:30px;height:30px; display: flex;align-items:center;justify-content: center;'><i class='fas fa-print text-white' data-toggle='tooltip' title='print'></i></button></td>";
                      echo "<td><a href='booking/hapus.php?ID_BOOKING=".$data['ID_BOOKING']."' Onclick=\"return confirm('Anda Yakin Menghapus ?')\" class='bg-danger' style='width:30px;height:30px; display: flex;align-items:center;justify-content: center;''><i class='fas fa-trash text-white' data-toggle='tooltip' title='delete'></i></a></td>";
                      echo "</tr>";
 }elseif(($data['SISA']!='0')){
 	echo "<td><p class='bg-danger p-1 text-white rounded btn-sm m-auto'>".$data['KETERANGAN']."</p</td>";
 	echo "<td><a href='index.php?halaman=editbooking&ID_BOOKING=".$data['ID_BOOKING']."' class='btn bg-warning' style='width:30px;height:30px; display: flex;align-items:center;justify-content: center;'><i class='fas fa-edit text-white' data-toggle='tooltip' title='bayar'></i></a></td>";
                      echo "<td><button class='btn bg-success' style='width:30px;height:30px; display: flex;align-items:center;justify-content: center;'><i class='fas fa-print text-white' data-toggle='tooltip' title='print'></i></button></td>";
                      echo "<td><a href='booking/hapus.php?ID_BOOKING=".$data['ID_BOOKING']."' Onclick=\"return confirm('Anda Yakin Menghapus ?')\" class='bg-danger' style='width:30px;height:30px; display: flex;align-items:center;justify-content: center;''><i class='fas fa-trash text-white' data-toggle='tooltip' title='delete'></i></a></td>";
                      echo "</tr>";
 }
 ?>
