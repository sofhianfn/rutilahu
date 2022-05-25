        <div class="alert alert-danger">
          <h5><i class="icon fas fa-ban"></i> Perhatian!</h5>
          Halaman ini hanya sebatas tampilan, belum bisa dilakukan proses CRUD<br>
          tetapi project aplikasi yang anda buat wajib sampai fitur2nya berfungsi tidak hanya sekedar tampilan atau dengan kata lain bisa sampai CRUD.
        </div>


		<div class="row">
			<div class="col-md-6">
        		<div class="callout callout-info">
        			<h5>Petunjuk!</h5>
                    <p>Berikut data rutilahu yang telah lengkap dan belum dilakukan penyelesaian</p>
                </div>
            </div>
            
			<div class="col-md-6">
        		<div class="callout callout-info">
        			<h5>Periode Pengisian 2022 (15 April - 15 Mei)</h5>
					<button type="button" class="btn btn-xs btn-warning mb-2" data-toggle="modal" data-target="#periode">
					<i class="fas fa-cogs"></i> Set Periode</button>
                </div>
            </div>
        </div>
        
					<div class="modal fade" id="periode">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Set Periode</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<p>
									<label>Tanggal Mulai</label>
									<input type="date" class="form-control" name="nama" value="2022-04-15" required>
									</p>
									<p>
									<label>Tanggal Selesai</label>
									<input type="date" class="form-control" name="nama" value="2022-05-15" required>
									</p>


								</div>
								<div class="modal-footer justify-content-between">
									<input type="submit" class="btn btn-primary" value="Set">
								</div>
							</div>
						</div>
			  	    </div>
            
            
        
			<div class='row'>
				<div class='col-md-12'>
					<div class='card card-success'>
						<div class='card-body'>
	    	              <select name="desa" class="form-control select2bs4" onchange="window.document.location.href=this.options[this.selectedIndex].value;" required>
    					  <option vaule="admin.php?page=data&aksi=rekap">--Pilih Desa untuk Detail Data--</option>
<?php
	$qk = mysqli_query($con,"SELECT * FROM kec ORDER BY id");
	while($rk=mysqli_fetch_array($qk)) {
		echo"<optgroup label='$rk[kecamatan]'>";
			$q = mysqli_query($con,"SELECT * FROM desa WHERE id_kec='$rk[id]' ORDER BY jenis");
			while($r=mysqli_fetch_array($q)) {
			    if(@$_GET['id']==$r[id]) {
					echo"
							  <option value='admin.php?page=data&aksi=desa&id=$r[id]' selected='selected'>$r[desa]</option>
					";
			    }
			    else {
					echo"
							  <option value='admin.php?page=data&aksi=desa&id=$r[id]'>$r[desa]</option>
					";
				}
			}
		echo"</optgroup>";
	}
?>
					  </select>
        
						</div>
					</div>
				</div>
			</div>


<?php
	switch(@$_GET['aksi']) {
	    
	    case 'rekap':
?>

        <div class="row">

          <div class="col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info"><i class="fa fa-home"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Total Rutilahu Tersisa</span>
                <span class="info-box-number">9.100</span>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-success"><i class="fa fa-home"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Kondisi Rusak Ringan</span>
                <span class="info-box-number">3.000</span>
              </div>
            </div>
          </div>
		  
          <div class="col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-warning"><i class="fa fa-home"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Kondisi Rusak Sedang</span>
                <span class="info-box-number">2.100</span>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-danger"><i class="fa fa-home"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Kondisi Rusak Berat</span>
                <span class="info-box-number">4.000</span>
              </div>
            </div>
          </div>

		  
		</div>

        <div class="row">

          <div class="col-lg-12">
            <div class="card card-success card-outline">
              <div class="card-header with-border">
                <h5 class="card-title">Rekap Pengisian</h5>
				<div class="card-tools">
					<a href="#" class="btn btn-xs btn-success"><i class="fa fa-file-word"></i> Export Word</a>
					<a href="#" class="btn btn-xs btn-success"><i class="fa fa-file-excel"></i> Export Excell</a>
				</div>

			  </div>
              <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-striped text-sm">
                        <thead>
                    	<tr class="bg-info text-center">
                    		<th>No<br>&nbsp;</th>
                    		<th>Kecamatan<br>&nbsp;</th>
                    		<th>Nama<br>Desa<br></th>
                    		<th>Riwayat<br>Penyelesaian</th>
                    		<th>Total<br>Rutilahu</th>
                    		<th>%<br>&nbsp;</th>
                    		<th class="bg-success">Rusak<br>Ringan</th>
                    		<th class="bg-warning">Rusak<br>Sedang</th>
                    		<th class="bg-danger">Rusak<br>Berat</th>
                    		<th>Surat<br>Pernyataan</th>
                    		<th>Berita<br>Acara</th>
                    	</tr>
                        </thead>
                        <tbody>
                    <?php
                    	$nomor = 1;
                    	$qdesa = mysqli_query($con,"SELECT * FROM kec,desa WHERE kec.id=desa.id_kec ORDER BY kec.kecamatan");
                    	while($desa=mysqli_fetch_array($qdesa)) {
                    	    $akun = mysqli_fetch_array(mysqli_query($con,"SELECT * FROM akun WHERE id_desa='$desa[id]' "));
                    	    if($akun['username']!='') {
                    	        $adaakun = "<span class='badge badge-success'>Sudah</span>";
                    	    }
                    	    else {
                    	        $adaakun = '';
                    	    }
                        	echo "	
                        		<tr>
                        			<td>$nomor</td>
                        			<td>$desa[kecamatan]</td>
                        			<td>$desa[desa]</td>
                        			<td></td>
                        			<td></td>
                        			<td></td>
                        			<td></td>
                        			<td></td>
                        			<td></td>
                        			<td></td>
                        			<td></td>
                        		</tr>
                        	";
                    	$nomor++;
                    		
                    	}
                    
                    ?>
                        </tbody>
                    </table>
                </div>

              </div>
            </div>
          </div>


		  
		  
        </div>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
      "lengthChange": false,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "searching": false,
      "ordering": true,
      "info": true,
      "responsive": true,
    });
  });
</script>


<?php	        
	    break;
	    
		default:
?>

        <div class="row">

          <div class="col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info"><i class="fa fa-home"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Total Rutilahu Tersisa</span>
                <span class="info-box-number">110</span>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-success"><i class="fa fa-home"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Kondisi Rusak Ringan</span>
                <span class="info-box-number">20</span>
              </div>
            </div>
          </div>
		  
          <div class="col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-warning"><i class="fa fa-home"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Kondisi Rusak Sedang</span>
                <span class="info-box-number">65</span>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-danger"><i class="fa fa-home"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Kondisi Rusak Berat</span>
                <span class="info-box-number">35</span>
              </div>
            </div>
          </div>

		  
		</div>
		
		
        <div class="row">
          <div class="col-lg-12">
            <div class="card card-success card-outline">
              <div class="card-header with-border">
                <h5 class="card-title">Data Rutilahu</h5>
				<div class="card-tools">
					<a href="#" class="btn btn-xs btn-success"><i class="fa fa-file-word"></i> Export Word</a>
					<a href="#" class="btn btn-xs btn-success"><i class="fa fa-file-excel"></i> Export Excell</a>
				</div>
			  </div>
              <div class="card-body">
            <div class="table-responsive">
			<table class="table table-striped">
				<tr class="bg-info">
					<th rowspan="2">No</th>
					<th rowspan="2">Nama</th>
					<th rowspan="2">Pekerjaan</th>
					<th rowspan="2">Penghasilan</th>
					<th colspan="5" class="text-center">Penilaian Rumah</th>
					<th rowspan="2">Swadaya</th>
					<th rowspan="2">Tahun<br>Data</th>
					<th rowspan="2">Aksi</th>
				</tr>
				<tr class="bg-info disabled">
					<th>A</th>
					<th>B</th>
					<th>C</th>
					<th>D</th>
					<th>Kategori</th>
				</tr>

				
				<tr>
					<td>1</td>
					<td>Fulan</td>
					<td>Buruh</td>
					<td>Rp. 300.000,-</td>
					<td>50%</td>
					<td>25%</td>
					<td>100%</td>
					<td>66%</td>
					<td><span class="badge bg-danger">Rusak Berat</span></td>
					<td>Ada</td>
					<td>2021</td>
					<td>
					  <a href="index.php?page=data&aksi=detail" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> Detail</a>
					  <a href="#" class="btn btn-xs btn-success"><i class="fa fa-check-circle"></i> Pilih</a>
					</td>
				</tr>

				<tr>
					<td>2</td>
					<td>Fulanah</td>
					<td>Ibu Rumah Tangga</td>
					<td>Rp. 450.000,-</td>
					<td>70%</td>
					<td>55%</td>
					<td>100%</td>
					<td>33%</td>
					<td><span class="badge bg-warning">Rusak Sedang</span></td>
					<td>Ada</td>
					<td>2022</td>
					<td>
					  <a href="index.php?page=data&aksi=detail" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> Detail</a>
					  <a href="#" class="btn btn-xs btn-success"><i class="fa fa-check-circle"></i> Pilih</a>
					</td>
				</tr>

				<tr>
					<td>110</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td>
					  <a href="index.php?page=data&aksi=detail" class="btn btn-xs btn-primary"><i class="fa fa-eye"></i> Detail</a>
					  <a href="#" class="btn btn-xs btn-success"><i class="fa fa-check-circle"></i> Pilih</a>
					</td>
				</tr>

				
				</table>
				</div>
				
              </div>
			  <div class="card-footer text-sm">
				  <strong>(A)</strong> komponen struktural
				  <strong>(B)</strong> komponen non struktural
				  <strong>(C)</strong> kecukupan ruang
				  <strong>(D)</strong> kesehatan
			  </div>
            </div>
          </div>
        </div>
		
<?php
	break;
	
	case 'detail':
?>
		<div class="row mt-0 mb-4">
			<div class="col-md-12">
				<button class="btn btn-info btn-block btn-sm">Pendataan pada 20 April 2022</button>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
			  <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="dist/img/avatar2.png"
                       alt="Kepala Desa">
                </div>

                <h3 class="profile-username text-center">Fulanah</h3>

                <p class="text-muted text-center">3208071112700003</p>

                <ul class="list-group list-group-unbordered mb-3">
                 <li class="list-group-item">
                    <b>Jenis Kelamin</b> <a class="float-right">Perempuan</a>
				 </li>
                 <li class="list-group-item">
                    <b>Foto KTP</b> <a href="1" class="float-right"><i class="fa fa-file"></i> Unduh</a>
				 </li>
                 <li class="list-group-item">
                    <b>Foto KK</b> <a href="2" class="float-right"><i class="fa fa-file"></i> Unduh</a>
				 </li>
                </ul>

                <a href="https://wa.me/6281221473049" class="btn btn-primary btn-block"><b>081221473049</b></a>
				
				<hr>
				
                <strong><i class="far fa-calendar-alt mr-1"></i> Tempat Tanggal Lahir</strong>
                <p class="text-muted">
					Kuningan, 11 Desember 1970
                </p>
                <hr>
                <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>
                <p class="text-muted">
					RT/RW 17/04 Dusun Pahing
                </p>
                <hr>
                <strong><i class="far fa-circle mr-1"></i> Pekerjaan</strong>
                <p class="text-muted">
					Ibu Rumah Tangga (IRT)
                </p>
                <hr>
                <strong><i class="far fa-circle mr-1"></i> Penghasilan</strong>
                <p class="text-muted">
					Rp.450.000,-
                </p>
                <hr>
				
              </div>
			  </div>
			</div>
			
			<div class="col-md-8">
				<div class="card card-primary card-outline card-outline-tabs">
					<div class="card-header border-0 card-primary-outline">
			                <ul class="nav nav-tabs" id="tab" role="tablist">
			                  <li class="nav-item">
			                    <a class="nav-link active" id="satu-tab" data-toggle="pill" href="#satu" role="tab" aria-controls="satu" aria-selected="true">Eksisting Rumah</a>
			                  </li>
			                  <li class="nav-item">
			                    <a class="nav-link" id="dua-tab" data-toggle="pill" href="#dua" role="tab" aria-controls="dua" aria-selected="true">Spesifikasi Teknis</a>
			                  </li>
			                  <li class="nav-item">
			                    <a class="nav-link" id="tiga-tab" data-toggle="pill" href="#tiga" role="tab" aria-controls="tiga" aria-selected="true">Penilaian Kondisi</a>
			                  </li>
			                </ul>
					</div>

					<div class="card-body">
			                <div class="tab-content" id="tab">
			                  <div class="tab-pane fade show active" id="satu" role="tabpanel" aria-labelledby="satu-tab">
							  
								<ul class="list-group list-group-unbordered mb-3">
								 <li class="list-group-item">
									<b>Luas Bangunan/Lahan</b> <span class="float-right">36/72 M</span>
								 </li>

								 <li class="list-group-item">
									<b>Kepemilikan</b> <span class="float-right">Milik Pribadi</span>
								 </li>

								 <li class="list-group-item">
									<b>Legalitas Lahan</b> <span class="float-right">Surat Keterangan Tanah</span>
								 </li>
								 
								 <li class="list-group-item">
									<b>Bukti Legalitas Lahan</b> <span class="float-right"><i class="far fa-file"></i> Unduh</span>
								 </li>

								 <li class="list-group-item">
									<b>Nomor Legalitas Lahan</b> <span class="float-right">A1/274686</span>
								 </li>

								 <li class="list-group-item">
									<b>Batas Utara</b> <span class="float-right">Hj. Titin</span>
								 </li>
								 <li class="list-group-item">
									<b>Batas Timur</b> <span class="float-right">Gang</span>
								 </li>
								 <li class="list-group-item">
									<b>Batas Selatan</b> <span class="float-right">Kebun</span>
								 </li>
								 <li class="list-group-item">
									<b>Batas Barat</b> <span class="float-right">Mamat</span>
								 </li>

								</ul>
							  
							  </div>
			                  <div class="tab-pane fade" id="dua" role="tabpanel" aria-labelledby="dua-tab">

								<div class="row">

								  <div class="col-sm-2">
									<a href="https://via.placeholder.com/1200/FFFFFF.png?text=45 Derajat" data-toggle="lightbox" data-title="Perspektif 45 derajat" data-gallery="gallery">
									  <img src="https://via.placeholder.com/300/FFFFFF?text=45 Derajat" class="img-fluid mb-2" alt="Perspektif 45 derajat"/>
									</a>
								  </div>
								  <div class="col-sm-2">
									<a href="https://via.placeholder.com/1200/000000.png?text=Depan" data-toggle="lightbox" data-title="Tampak Depan" data-gallery="gallery">
									  <img src="https://via.placeholder.com/300/000000?text=Depan" class="img-fluid mb-2" alt="Tampak Depan"/>
									</a>
								  </div>
								  <div class="col-sm-2">
									<a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=Samping" data-toggle="lightbox" data-title="Tampak Samping" data-gallery="gallery">
									  <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=Samping" class="img-fluid mb-2" alt=" Tampak Samping "/>
									</a>
								  </div>
								  <div class="col-sm-2">
									<a href="https://via.placeholder.com/1200/FFFFFF.png?text=Belakang" data-toggle="lightbox" data-title=" Tampak Belakang " data-gallery="gallery">
									  <img src="https://via.placeholder.com/300/FFFFFF?text=Belakang" class="img-fluid mb-2" alt=" Tampak Belakang "/>
									</a>
								  </div>
								  <div class="col-sm-2">
									<a href="https://via.placeholder.com/1200/FFFFFF.png?text=Keluarga" data-toggle="lightbox" data-title=" Ruang Keluarga " data-gallery="gallery">
									  <img src="https://via.placeholder.com/300/FFFFFF?text=Keluarga" class="img-fluid mb-2" alt=" Ruang Keluarga "/>
									</a>
								  </div>
								  <div class="col-sm-2">
									<a href="https://via.placeholder.com/1200/000000.png?text=MCK" data-toggle="lightbox" data-title=" MCK/Jamban/Kamar Mandi " data-gallery="gallery">
									  <img src="https://via.placeholder.com/300/000000?text=MCK" class="img-fluid mb-2" alt=" MCK/Jamban/Kamar Mandi "/>
									</a>
								  </div>
								</div>
								
								<div class="row mt-5">
									<div class="col-md-7">
										<b>Materi Kondisi Awal</b>
										<ul class="list-group list-group-unbordered mb-3">
										 <li class="list-group-item">
											Jenis Atap <span class="float-right">...</span>
										 </li>

										 <li class="list-group-item">
											Jenis Lantai <span class="float-right">...</span>
										 </li>

										 <li class="list-group-item">
											Jenis Dinding <span class="float-right">...</span>
										 </li>
										</ul>
									</div>
									<div class="col-md-5">
										<b>Usulan</b>
										<ul class="list-group list-group-unbordered mb-3">
										 <li class="list-group-item">
											... <span class="float-right">...</span>
										 </li>

										 <li class="list-group-item">
											... <span class="float-right">...</span>
										 </li>

										 <li class="list-group-item">
											... <span class="float-right">...</span>
										 </li>
										</ul>
									</div>
								</div>

							  </div>
			                  <div class="tab-pane fade" id="tiga" role="tabpanel" aria-labelledby="tiga-tab">
								<ul class="list-group list-group-unbordered mb-3">
									<li class="list-group-item">
										<b>Komponen Struktural</b> <span class="float-right">50%</span>
									</li>
									<li class="list-group-item">
										Pondasi <span class="float-right">Rusak atau Tidak Ada</span>
									</li>
									<li class="list-group-item">
										Tiang/Kolom <span class="float-right">Tidak Rusak</span>
									</li>
									<li class="list-group-item">
										Balok <span class="float-right">Rusak atau Tidak Ada</span>
									</li>
									<li class="list-group-item">
										Rangka Atap <span class="float-right">Tidak Rusak</span>
									</li>
								</ul>


								<ul class="list-group list-group-unbordered mb-3">
									<li class="list-group-item">
										 <b>Komponen Non Struktural</b> <span class="float-right">50%</span>
									</li>
									<li class="list-group-item">
										 Dinding Pengisi <span class="float-right">Rusak atau Tidak Ada</span>
									</li>
									<li class="list-group-item">
										Kusen <span class="float-right">Tidak Rusak</span>
									</li>
									<li class="list-group-item">
										 Penutup Atap <span class="float-right">Rusak atau Tidak Ada</span>
									</li>
									<li class="list-group-item">
										 Lantai <span class="float-right">Tidak Rusak</span>
									</li>
								</ul>


								<ul class="list-group list-group-unbordered mb-3">
									<li class="list-group-item">
										<b>Kecukupan Ruang</b> <span class="float-right">0%</span>
									</li>	<li class="list-group-item">
										Minimum 9m2/jiwa  <span class="float-right">Cukup</span>
									</li>
								</ul>


								<ul class="list-group list-group-unbordered mb-3">
									<li class="list-group-item">
										 <b>Penghawaan</b> <span class="float-right">100%</span>
									</li>
									<li class="list-group-item">
										 Penghawaan minimal 5% dari luas dinding dan ada sirkulasi <span class="float-right">Tidak Memenuhi</span>
									</li>
									<li class="list-group-item">
										  Pencahayaan minimal 10% dari luas dinding  <span class="float-right">Tidak Memenuhi</span>
									</li>
									<li class="list-group-item">
										 MCK <span class="float-right">Tidak Memenuhi</span>
									</li>
								</ul>
								
								<ul class="list-group list-group-unbordered mb-3">
									<li class="list-group-item">
										 <b>Kesanggupan Swadaya</b> <span class="float-right">Ada</span>
									</li>
									<li class="list-group-item">
										 Jenis Swadaya <span class="float-right">Ongkos Tukang</span>
									</li>
								</ul>
								
							  </div>
							  
							</div>
					</div>
			</div>
		</div>
		
	</div>
<?php
	break;
	}
?>
	