<?php 
session_start();
if (isset($_SESSION["loginuser"])) {
 ?>
				                
				                        <ul class='tm-nav-ul'>
										<li class='tm-nav-li'><a href='index.php?halaman=home' class='tm-nav-link'>Home</a></li>
										<li class='tm-nav-li'><a href='index.php?halaman=lapangan' class='tm-nav-link'>Lapangan</a></li>
										<li class='tm-nav-li'><a href='index.php?halaman=jadwal' class='tm-nav-link'>Jadwal</a></li>
										<li class='tm-nav-li'><a href='index.php?halaman=booking' class='tm-nav-link'>Booking</a></li>
										<li class='tm-nav-li'><a href='index.php?halaman=contact' class='tm-nav-link'>Contact</a></li>
										<div class='drop-down'>
											<ul>
												<li><a><i class='fas fa-user-circle' style='margin-right: 5px;'></i><b><?php echo $_SESSION['loginuser']?></b></a>
													<ul>
														<li><a href='edituser.php'>Edit Profil</a></li>
														<li><a href='logout.php'>Logout</a></li>
													</ul>
												</li>
											</ul>
										</div>
									</ul>
									<?php  
				                }else {
				                	?>
				                    <ul class='tm-nav-ul'>
									<li class='tm-nav-li'><a href='index.php?halaman=home' class='tm-nav-link'>Home</a></li>
									<li class='tm-nav-li'><a href='index.php?halaman=lapangan' class='tm-nav-link'>Lapangan</a></li>
									<li class='tm-nav-li'><a href='index.php?halaman=jadwal' class='tm-nav-link'>Jadwal</a></li>
									<li class='tm-nav-li'><a href='index.php?halaman=contact' class='tm-nav-link'>Contact</a></li>
									<li class='tm-nav-li'><a href='login.php' class='tm-nav-link'><i class='fas fa-info' style='margin-right: 5px;'></i>Login</a></li>
								</ul>
							<?php } ?>
