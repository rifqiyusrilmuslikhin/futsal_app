<?php 
include "../koneksi/koneksi.php";
 ?>
<ul class="nav flex-column ml-3 mb-5">
          <li class="nav-item">
            <a class="nav-link active text-white" href="index.php?halaman=dashboard"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a><hr class="bg-secondary">
          </li>
          <li class="nav-item ">
            <a class="nav-link text-white" href="index.php?halaman=pelanggan"><i class="fas fa-user mr-2"></i>Data Pelanggan</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="index.php?halaman=lapangan"><i class="fas fa-home mr-2"></i>Data Lapangan</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="index.php?halaman=booking"><i class="fas fa-book mr-2"></i>Data Booking</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="index.php?halaman=admin"><i class="fas fa-user-cog mr-2"></i>Data Admin</a><hr class="bg-secondary">
          </li>
        </ul>