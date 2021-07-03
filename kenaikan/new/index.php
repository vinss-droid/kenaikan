<?php 
    include "FzAKoNwiXc.php";
    include "header.php";
?>

<style>
    .gambar .tels{
    width:120px;
    position:absolute;
    top:25px;
    left:40px; 
    }
    
    .gambar .smkbisa{
    width:200px;
    position:absolute;
    top:45px;
    right:40px;
   
}

.spacer{
    width: 100%;
    height: 70px;
}
.img{
    width: 150px;
    height: auto;
    display:none;
}
.card{ 
    margin-top: 40px;
    padding:50px 0;
    box-sizing:border-box;
    background-color: #2e51db;
    width:auto;
    opacity:1;
}

form{
    color:white;
}

.form-group input,
.container .card .card-body form button {
    border-radius: 30px;
}

.container .card .card-body form button,
.container .card .card-body form a {
    margin-bottom: -20px;
}

.container .card .card-body form a,
.container .card .card-body form button{
    margin-top: 50px;
    background-color: #0616a7;
}

.container .card .card-body form a:focus,
.container .card .card-body form a:active,
.container .card .card-body form button:focus,
.container .card .card-body form button:active,
.form-group input:focus,
.form-group input:active {
    outline: 0 !important;
    -webkit-appearance: none;
    box-shadow: none !important;
}

.container .card .card-body form label {
    margin-top: 10px;
    margin-left: 15px;
    margin-bottom: 5px;
}

.card-body h3{
    margin-top: -25px;
    font-size:43px;
    text-align:center;
}
@media only screen and (max-width: 768px){
    .gambar img{
        display:none;
    }
    .img{
        margin-top: -30px;
        margin-bottom: 50px;
        width: 150px;
        height: auto;
        display:block;
    }

    .spacer {
        height: 10px;
    }

    .card-body h3{
        font-size:20px;
        text-align:center;
    }
    .card-body h4{
        font-size:18px;
    }
}
@media only screen and (max-width: 992px){
    .gambar img{
        display:none;
    }

    .spacer {
        height: 50px;
    }

    .img{
        margin-top: -30px;
        margin-bottom: 45px;
        width: 150px;
        height: auto;
        display:block;
    }
    .card-body h3{
        font-size:20px;
        text-align:center;
    }
    .card-body h4{
        font-size:18px;
    }
}
</style>

<div class="bg">
	    <div class="gambar">
	        <img src="img/logo.png" class="tels" alt="INI LOGO TELS"  >
	        <img src="img/smkbisa-.png" alt="logo smk bisa" class="smkbisa">
	    </div>
	    <div class="spacer"></div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<?php 
					if(isset($_GET['pesan'])){
						echo'<div class="alert alert-danger text-center">
						NIS ATAU NISN ANDA SALAH
						</div>';
					}
					?>
					<div class="card ">
						<div class="card-body">
							<form method="post" action="hasil">	
								<center>
									<img src="img/logo.png" class="img">
								</center>
								<h3 class="text-center ">PENGUMUMAN  KENAIKAN KELAS </h3>
								<h4 class="text-center ">TAHUN AJARAN 2020/2021</h4>
								
                                <!--SELAMAT DATANG DI KEHIDUPAN SESUNGGUHNYA-->
								
								<div class="form-group mt-4">
								    
									<label for="nis">Nomor Induk Siswa</label>
									<input type="text" class="form-control" id="nis" name="nis" aria-describedby="nis" placeholder="Masukkan NIS Anda" required
									>
								</div>
								<div class="form-group mt-4">
									<label for="nisn">Nomor Induk Siswa Nasional</label>
									<input type="text" class="form-control" id="nisn" name="nisn" aria-describedby="nisn" required placeholder="Masukkan NISN Anda">
								</div>

                                <div class="d-grid gap-2">
								
							    <?php
								date_default_timezone_set("Asia/Jakarta");
								   
								    $now = date("d:m:Y H:i:s") ;
								    
								    $start  = "21:06:2021 11:04:00";
								    
								    if($now <= $start){?>
								        <a href="javascript:void(0)" class="btn btn-primary disabled">BELUM TERSEDIA</a>
								    <?php   
								    }else{
								       ?>
								       
								       <button type="submit" name="iLFKcdqajR" class="btn btn-primary ">Lihat Hasil Kenaikan Kelas</button>
								       
								       <?php
								    }
								?>

                                </div>
								
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php 
    include "footer.php";
?>