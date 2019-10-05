<?php
include "atas.php";
?>
   
   
   
   
   
   
   
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Pendaftaran Online</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li>daftar Online</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="section-full content-inner bg-white contact-style-1">
			<div class="container">
                <div class="row">
                    <!-- Left part start -->
                    <div class="col-lg-8">
                        <div class="p-a30 bg-gray clearfix m-b30 ">
							<h2>Pendaftaran Poliklinik Online</h2>
							<div class="dzFormMsg"></div>
							<form method="post" class="dzForm" action="#">
							<input type="hidden" value="Contact" name="dzToDo" >
                                <div class="row">
                                    
									<div class="row">
                                    <div class="col-md-8 form-group">
                                        <input type="text" placeholder="Nama Anda *" class="form-control" name="nama"
                                            data-error="nama harus diisi" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
									
									<div class="col-md-6 form-group"></div>
									
                                    <div class="col-md-8 form-group">
                                        <input type="text" placeholder="Nomor HP / WA *" class="form-control" name="hp"
                                            data-error="hp/wa harus diisi" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    
                                    
                                         <div class="col-md-8 form-group">
                                        <input type="text" placeholder="Email *" class="form-control" name="email"
                                            data-error="Email harus diisi" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
									
									<div class="col-md-6 form-group"></div>
									
									 <div class="col-md-10 form-group">
                                        <input type="text" placeholder="Nomor KTP (jika ada)" class="form-control" name="ktp" >
                                        <div class="help-block with-errors"></div>
                                    </div>
									
									<div class="col-md-6 form-group"></div>
									
                                    <div class="col-md-10 form-group">
                                        <input type="text" placeholder="Nomor Rekam Medik (jika ada)" class="form-control" name="rm">
                                        
                                    </div>
									
								
									
									
									 <div class="col-md-10 form-group">
                                            <div class="input-group">
                                                <textarea placeholder="Alamat *" class="form-control" name="alamat"
                                            id="form-message" rows="2" cols="20" data-error="Alamat harus diisi"
                                            required></textarea>
                                            </div>
											        <div class="help-block with-errors"></div>
                                        </div>
                                 



										<div class="col-md-2 form-group"></div>
										
										
										
                                    <div class="col-md-6 form-group">
                                    <input type="date"  class="form-control" name="tgl" value="2019-09-01" >
                                    </div>
									
									<div class="col-md-1 form-group"></div>
										<div class="col-md-3 form-group"></div>
										
									   <div class="col-md-10 form-group">
                                        <select class="select2" name="dokter" required>
                                            <option value="">Pilih Dokter *</option>
											
											  
			  <option value='1'>dr. Mohammad Taufik, Sp. OG - Praktek Dokter Kandungan</option>
			
			  <option value='2'>dr. Rina, Sp. OG - Praktek Dokter Kandungan</option>
			
			  <option value='3'>dr. Vidiatma, Sp. OG - Praktek Dokter Kandungan</option>
			
			  <option value='4'>dr. Nevita, Sp.A - Praktek Dokter Anak</option>
			

			    
		  
		  
                                        </select>
                                     
                                    </div>
									
									
									
									
									
									   <div class="col-md-10 form-group">
                                        <select class="select2" name="jam" required>
                                            <option value="">Pilih jam *</option>
                                            <option value="8.00">8.00</option>
                                            <option value="8.30">8.30</option>
                                            <option value="9.00">9.00</option>
                                            <option value="10.00">10.00</option>
											<option value="13.00">13.00 </option>
											<option value="13.30">13.30</option>
											<option value="14.00">14.00 </option>
											<option value="15.30">15.30 </option>
											<option value="16.00">16.00 </option>
											<option value="18.30">18.30 </option>
											<option value="19.00">19.00 </option>
											<option value="20.00">20.00 </option>
										
										
                                        </select>
                                       
                                    </div>
									
									
									  <div class="col-md-10 form-group">
                                        <select class="select2" name="bayar" required>
                                            <option value="0">Pilih Pembayaran *</option>
                                            <option value="umum">Umum</option>
                                            <option value="bpjs">BPJS</option>
                                        </select>
                                      
                                    </div>
									
									
                                    <div class="col-md-12">
                                        <button name="submit" type="submit" value="Submit" class="site-button "> <span>Daftar</span> </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Left part END -->
                    <!-- right part start -->
                    
                    <!-- right part END -->
                </div>
				
				<div class="col-lg-3">
                       <div class="row">
							<div class="col-lg-12 col-md-6 col-sm-6 m-b30">
								<div class="icon-bx-wraper bx-style-1 p-a30 center">
									<div class="icon-bx-sm text-primary bg-white radius border-2 m-b20"> <a href="https://api.whatsapp.com/send?phone=6282251461996" class="icon-cell"><i class="fa fa-whatsapp"></i></a> </div>
									<div class="icon-content">
										<h5 class="dez-tilte text-uppercase">Daftar Melalui Whatsapp</h5>
										
									</div>
								</div>
							</div>
							
						</div>
                    </div>

				
            </div>
        </div>
        <!-- contact area  END -->
    </div>




  



  <?php
  
  include "bawah.php";
  
  ?>
