<?php
include "atas.php";
?>
   
   
   
   
   
   
   
  
   <div class="page-content">
        <!-- inner page banner -->
        <div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.8178754152505!2d109.36768131426942!3d-0.027058635555045233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d582f70e7a6d7%3A0x6443980ff59a03df!2sKlinik%20Pesona%20Bunda!5e0!3m2!1sid!2sid!4v1567341045508!5m2!1sid!2sid" style="border:0; width:100%; height:300px;" allowfullscreen></iframe>
		</div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li>Kontak Klinik</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
         <!-- contact area -->
        <div class="section-full content-inner bg-white contact-style-1">
			<div class="container">
                <div class="row">
					<!-- right part start -->
                    <div class="col-lg-4 d-flex">
                        <div class="p-a30 m-b30 border contact-area border-1  align-self-stretch">
							<h2 class="m-b10">Alamat</h2>
							
                            <ul class="no-margin">
                                <li class="icon-bx-wraper left m-b30">
                                    <div class="icon-bx-xs border-1"> <a href="#" class="icon-cell"><i class="fa fa-map-marker"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dez-tilte">Alamat:</h6>
                                        <p>JLN. SUNGAI LANDAK TIMUR RT.001 RW.002

KOMP. PESONA KEL. TANJUNG HULU KEC. PONTIANAK TIMUR

PONTIANAK, KALIMANTAN BARAT</p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left  m-b30">
                                    <div class="icon-bx-xs border-1"> <a href="#" class="icon-cell"><i class="fa fa-envelope"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dez-tilte">Email:</h6>
                                        <p>kupesona@gmail.com</p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left">
                                    <div class="icon-bx-xs border-1"> <a href="#" class="icon-cell"><i class="fa fa-phone"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dez-tilte">Telepon</h6>
                                        <p>0561 659 3703 (24/7)</p>
                                    </div>
                                </li>
                            </ul>
							
                        </div>
                    </div>
                    <!-- right part END -->
                    <!-- Left part start -->
                    <div class="col-lg-8">
                        <div class="p-a30 bg-gray clearfix m-b30 ">
							<h2>Kritik, Saran dan Pertanyaan</h2>
							<div class="dzFormMsg"></div>
							<form method="post" class="dzForm" action="#">
							<input type="hidden" value="Contact" name="dzToDo" >
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="dzName" type="text" required class="form-control" placeholder="Nama">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group"> 
											    <input name="dzEmail" type="email" class="form-control" required  placeholder="Email" >
                                            </div>
                                        </div>
                                    </div>
									<div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="dzOther[Phone]" type="text" required class="form-control" placeholder="Telepon">
                                            </div>
                                        </div>
                                    </div>
									
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <textarea name="dzMessage" rows="4" class="form-control" required placeholder="Pesan..."></textarea>
                                            </div>
                                        </div>
                                    </div>
								
                                    <div class="col-md-12">
                                        <button name="submit" type="submit" value="Submit" class="site-button "> <span>Kirim</span> </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Left part END -->
                    
                </div>
            </div>
        </div>
        <!-- contact area  END -->
    </div>








  



  <?php
  
  include "bawah.php";
  
  ?>
