<?php 
if(($data['KETERANGAN']=='Tertunda')){
	echo "<td>
			                      <button style='cursor: not-allowed;' class='btn-pesan tm-btn-primary'>".$data['KETERANGAN']."</button></td>";
			                      echo "<td><a href='hapusbooking.php?ID_BOOKING=".$data['ID_BOOKING']."' type='submit' class='btn-pesan tm-btn tm-btn-danger'>Hapus</a></td>";
			                      echo "</tr>";
}elseif(($data['KETERANGAN']=='Belum Lunas')){
	echo "<td>
			                      <button style='cursor: not-allowed;' class='btn-pesan tm-btn-danger'>".$data['KETERANGAN']."</button></td>";
			                      echo "<td><button type='submit' class='btn-pesan tm-btn-success'>Cetak</button><a href='hapusbooking.php?ID_BOOKING=".$data['ID_BOOKING']."' type='submit' class='btn-pesan tm-btn tm-btn-danger'>Hapus</a></td>";
			                      echo "</tr>";
}elseif(($data['KETERANGAN']=='Lunas')){
	echo "<td>
			                      <button style='cursor: not-allowed;' class='btn-pesan tm-btn-success'>".$data['KETERANGAN']."</button></td>";
			                      echo "<td></td>";
			                      echo "</tr>";
}

 ?>