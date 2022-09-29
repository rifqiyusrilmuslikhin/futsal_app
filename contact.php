<?php 
include "koneksi/koneksi.php";
$result= mysqli_query($kon,"SELECT * FROM kontak");
$data = mysqli_fetch_array($result);
 ?>
<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">Hubungi Kami</h2>
				<p class="col-12 text-center"><?php echo $data['ISI_KONTAK']; ?></p>
			</header>

			<div class="tm-container-inner-2 tm-contact-section">
				<div class="row">
					<div class="col-md-6">
						<form action="" method="POST" class="tm-contact-form">
					        <div class="form-group">
					          <input type="text" name="name" class="form-control" placeholder="Nama" required="" />
					        </div>
					        
					        <div class="form-group">
					          <input type="email" name="email" class="form-control" placeholder="Email" required="" />
					        </div>
				
					        <div class="form-group">
					          <textarea rows="5" name="message" class="form-control" placeholder="Pesan" required=""></textarea>
					        </div>
					
					        <div class="form-group tm-d-flex">
					          <button type="submit" class="tm-btn tm-btn-success tm-btn-right">
					            Send
					          </button>
					        </div>
						</form>
					</div>
					<div class="col-md-6">
						<div class="tm-address-box">
							<h4 class="tm-info-title tm-text-success">Alamat Kami</h4>
							<address>
								<?php echo $data['ALAMAT']; ?>
							</address>
							<a href="mailto:info@company.co" class="tm-contact-link">
								<i class="fas fa-envelope tm-contact-icon"></i><?php echo $data['EMAIL_KONTAK']; ?>
							</a>
							<a href="tel:080-090-0110" class="tm-contact-link">
								<i class="fas fa-phone tm-contact-icon"></i><?php echo $data['TELP_KONTAK']; ?>
							</a>
							<div class="tm-contact-social">
								<a href="<?php echo $data['FB']; ?>" class="tm-social-link"><i class="fab fa-facebook tm-social-icon"></i></a>
								<a href="<?php echo $data['TW']; ?>" class="tm-social-link"><i class="fab fa-twitter tm-social-icon"></i></a>
								<a href="<?php echo $data['IG']; ?>" class="tm-social-link"><i class="fab fa-instagram tm-social-icon"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
            
			<div class="tm-container-inner-2 tm-map-section">
				<div class="row">
					<div class="col-12">
						<div class="tm-map">
							<iframe src="<?php echo $data['MAP']; ?>" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
						</div>
					</div>
				</div>
			</div>