<?php 
    include "FzAKoNwiXc.php";
    include "header.php";

    if (isset($_POST['iLFKcdqajR'])) {
        
        $nis = htmlspecialchars($_POST['nis']);
        $nisn = htmlspecialchars($_POST['nisn']);
        $q = mysqli_query($conn, "SELECT * FROM siswa WHERE nis = '$nis' AND nisn = '$nisn' ");
        $data = mysqli_fetch_array($q);
        
        if (mysqli_num_rows($q) == 0 ) {
            header("location:index?gagal");
        } 
    }
        else {
            header("location:index");
        }
?>

<style>
	.az .container {
    margin-top: 50px !important;
}

.az .cd {
	margin-top: 70px;
}

.az .cd .cd-hd {
    background-color: #1441f1;
}

.az .cd .cb .text-small {
    font-size: 14px;
    color: #64BCFF;
}

.az .cd .cb .keterangan {
    margin-top: 10px !important;
}

.az .cd .cb .keterangan a {
    background-color: #3e60e9;
}

.az .cd .cb .keterangan a:hover {
    background-color: #2A53FB;
    -webkit-transition: background 2s;
    transition: 1s;
}

.az .cd .cb .keterangan a:focus, 
.az .cd .cb .keterangan a:active {
    outline: 0;
    -webkit-appearance: none !important;
    box-shadow: none !important;
}
</style>

<div class="az">
    <!-- <div class="gambar">
	    <img src="logo.png" class="tels" alt="INI LOGO TELS"  >
	    <img src="smkbisa-.png" alt="logo smk bisa" class="smkbisa">
	</div> -->
		<div class="spacer"></div>
	    <div class="container">
    		<div class="row justify-content-center">
    			<div class="col col-md-8">
                    <?php 
                        if ($data['kenaikan'] == 'Naik') {
                        ?>
					<div class="card bg-dark text-white cd">
					    <div class="card-header cd-hd">
							<h3 class="mt-3 text-center">SELAMAT !</h3>
							<h3 class="text-center">ANDA DINYATAKAN NAIK KE KELAS </h3>
							<h3 class="text-center"><?= strtoupper($data['ke_kelas']) ?></h3>
                        </div>
						<div class="card-body cb">
							<div class="row">
							    <div class="col col-md-7">
							        <span class="text-small">NISN</span>
							        <h4><?= strtoupper($data['nisn']) ?></h4>
							        <br>
							        
									<span class="text-small">NIS</span>
							        <h4><?= strtoupper($data['nis']) ?></h4>
							        <br>
							        
							        <span class="text-small">Nama</span>
							        <h4><?= strtoupper($data['nama']) ?></h4>
							        <br>
							        
							    </div>
							    <div class="col col-md-5 keterangan">
        							<!--<img src="Lulus.jpg" class="img">-->
                                    <span class="text-small">Kelas</span>
                                    <h4><?= strtoupper($data['kelas']) ?></h4>
                                    <br>

							        <span class="text-small">Keterangan</span>
							        <h4><?= strtoupper($data['kenaikan']) ?></h4>
							        <br>

                                    <span></span>
                                    <a href="/kenaikan" class="btn btn-primary">Kembali</a>
                                </div>
                            </div>
        				</div>
			</div>
		</div>
</div>

    <?php 
        }
            else {
    ?>
                <div class="card bg-dark text-white">
					    <div class="card-header">
							<h3 class="mt-3 text-center">MAAF</h3>
							<h3 class="text-center">ANDA DINYATAKAN <span>TIDAK NAIK</span> KE KELAS </h3>
							<h3 class="text-center"><?= strtoupper($data['kelas']) ?></h3>
                        </div>
						<div class="card-body">
							<div class="row">
							    <div class="col col-md-7">
							        <span class="text-small">NISN</span>
							        <h4><?= strtoupper($data['nisn']) ?></h4>
							        <br>

							        <span class="text-small">NIS</span>
							        <h4><?= strtoupper($data['nis']) ?></h4>
							        <br>
							        
							        <span class="text-small">Nama</span>
							        <h4><?= strtoupper($data['nama']) ?></h4>
							        <br>
							        
							    </div>
							    <div class="col col-md-5 keterangan">
        							<!--<img src="Lulus.jpg" class="img">-->
                                    <span class="text-small">Kelas</span>
                                    <h4><?= strtoupper($data['kelas']) ?></h4>
                                    <br>

							        <span class="text-small">Keterangan</span>
							        <h4><?= strtoupper($data['kenaikan']) ?></h4>
							        <br>

                                    <span></span>
                                    <a href="/kenaikan" class="btn btn-primary">Kembali</a>
                                </div>
                            </div>
        				</div>

        <?php } ?>

<?php
    include "footer.php";
?>