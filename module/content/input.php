        <div class="alert alert-danger">
          <h5><i class="icon fas fa-ban"></i> Perhatian!</h5>
          Halaman ini hanya sebatas tampilan, belum bisa dilakukan proses CRUD<br>
          tetapi project aplikasi yang anda buat wajib sampai fitur2nya berfungsi tidak hanya sekedar tampilan atau dengan kata lain bisa sampai CRUD.
        </div>



<?php
	if(@$_GET[notif]=='sukses') {
?>
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Notif!</h5>
                  Success Input Data
                </div>
<?php
	}
	
	switch(@$_GET['aksi']) {
		default:
?>
		<div class="row">
			<div class="col-md-6">
				<div class="callout callout-info">
					<h5>Petunjuk!</h5>
					<p>Ini draft data. Pastikan Semua kelengkapan data sampai warna hijau.<br>
					   Jika data sudah lengkap (semua warna hijau) otomatis masuk ke dalam Data Rutilahu</p>
				</div>
			</div>
		
			<div class="col-md-6">
				<div class="callout callout-info text-sm">
					<h5>Periode Pengisian 2022 (15 April - 15 Mei)</h5>
					<button type="button" class="btn btn-xs btn-warning mb-2" data-toggle="modal" data-target="#super">
					<i class="fas fa-plus"></i> Upload Surat Pernyataan</button>
					<button type="button" class="btn btn-xs btn-warning mb-2" data-toggle="modal" data-target="#ba">
					<i class="fas fa-plus"></i> Upload Berita Acara</button>
					<p><i class="fa fa-file"></i> Surat Pernyataan</a>
					<i class="fa fa-file"></i> Berita Acara</a></p>
				</div>
			</div>
		</div>

				
        <div class="row">
          <div class="col-lg-12">
            <div class="card card-success card-outline">
              <div class="card-header with-border">
                <h5 class="card-title">Proses Input Rutilahu</h5>
				<div class="card-tools">
					<button type="button" class="btn btn-block btn-sm btn-warning mb-2" data-toggle="modal" data-target="#edit">
					<i class="fas fa-plus"></i> Input CPCL</button>
				</div>
			  </div>
              <div class="card-body">
                <div class="table-responsive">
				<table class="table table-striped">
					<tr class="bg-info">
						<th>No</th>
						<th>Nama</th>
						<th>NIK</th>
						<th>Alamat</th>
						<th>Kontak</th>
						<th>Kelengkapan Data</th>
					</tr>
					<tr>
						<td>1</td>
						<td>Fulanah</td>
						<td>3208071112700003</td>
						<td>RT/RW 17/04 Dusun Pahing</td>
						<td>081422305674</td>
						<td>
							<a href="desa.php?page=input&aksi=cpcl" class="btn btn-xs btn-success btn-block">CPCL</a>
							<a href="desa.php?page=input&aksi=eksisting" class="btn btn-xs btn-warning btn-block">Eksisting Rumah</a>
							<a href="desa.php?page=input&aksi=spesifikasi" class="btn btn-xs btn-danger btn-block">Spesifikasi Teknis</a>
							<a href="desa.php?page=input&aksi=penilaian" class="btn btn-xs btn-danger btn-block">Penilaian Kondisi</a>
						</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Fulan</td>
						<td>3208070512750001</td>
						<td>RT/RW 14/03 Dusun Babakan</td>
						<td>081626305376</td>
						<td>
							<a href="desa.php?page=input&aksi=cpcl" class="btn btn-xs btn-warning btn-block">CPCL</a>
							<a href="desa.php?page=input&aksi=eksisting" class="btn btn-xs btn-warning btn-block">Eksisting Rumah</a>
							<a href="desa.php?page=input&aksi=spesifikasi" class="btn btn-xs btn-danger btn-block">Spesifikasi Teknis</a>
							<a href="desa.php?page=input&aksi=penilaian" class="btn btn-xs btn-danger btn-block">Penilaian Kondisi</a>
						</td>
					</tr>
				</table>
				</div>

              </div>
			  <div class="card-footer">
				<span class="text-xs">Keterangan</span>
				<span class="btn btn-xs btn-success">Lengkap</span>
				<span class="btn btn-xs btn-warning">Belum Lengkap</span>
				<span class="btn btn-xs btn-danger">Belum Diisi</span>
			  </div>
            </div><!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
        </div>

					<div class="modal fade" id="super">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Upload</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<p>
									<label>File PDF</label>
									<input type="file" class="form-control" name="nama" placeholder="" required>
									</p>
									<p><a href="#">Download Template</a></p>

								</div>
								<div class="modal-footer justify-content-between">
									<input type="submit" class="btn btn-primary" value="Upload">
								</div>
							</div>
						</div>
			  	    </div>


					<div class="modal fade" id="ba">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Upload</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<p>
									<label>File PDF</label>
									<input type="file" class="form-control" name="nama" placeholder="" required>
									</p>
									<p><a href="#">Download Template</a></p>
								</div>
								<div class="modal-footer justify-content-between">
									<input type="submit" class="btn btn-primary" value="Upload">
								</div>
							</div>
						</div>
			  	    </div>

				
					<div class="modal fade" id="edit">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Input Data CPCL</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<p>
									<label>Nama CPCL</label>
									<input type="text" class="form-control" name="nama" placeholder="silakan diisi..." required>
									</p>

									<p>
									<label>Jenis Kelamin</label>
									<select name="gender" class="form-control"required>
										<option value="">--Silakan Pilih--</option>
										<option value="L">Laki-laki</option>
										<option value="P">Perempuan</option>
									</select>
									</p>

									<p>
									<label>NIK KTP CPCL</label>
									<input type="number" class="form-control" name="nik" max="9999999999999999" required>
									</p>

									<div class="row">
										<div class="col-md-6">
											<p>
											<label>Tempat Lahir</label>
											<input type="text" class="form-control" name="place_tl" placeholder="silakan diisi..." required>
											</p>
										</div>
										<div class="col-md-6">
											<p>
											<label>Tanggal Lahir</label>
											<input type="date" class="form-control" name="tl" required>
											</p>
										</div>
									</div>


									<div class="row">
										<div class="col-md-3">
											<p>
											<label>RT</label>
											<input type="number" class="form-control" name="rt" maxlength="2" required>
											</p>
										</div>
										<div class="col-md-3">
											<p>
											<label>RW</label>
											<input type="number" class="form-control" name="rw" maxlength="2" required>
											</p>
										</div>
										<div class="col-md-6">
											<p>
											<label>Dusun</label>
											<input type="text" class="form-control" name="dusun" required>
											</p>
										</div>
									</div>

									<p>
									<label>Nomor Kontak</label>
									<input type="text" class="form-control" name="kontak" required>
									</p>



								</div>
								<div class="modal-footer justify-content-between">
									<input type="submit" class="btn btn-primary" value="Simpan">
								</div>
								</form>
							</div>
						</div>
			  	    </div>


<?php
	break;
	
	case 'cpcl':
?>
		<div class="row">
          <div class="col-md-6">
            <div class="card card-success card-outline">
              <div class="card-header with-border">
                <h5 class="card-title">Data CPCL</h5>
			  </div>
              <div class="card-body">
				<form method="post" action="insert.php">
									<p>
									<label>Nama CPCL</label>
									<input type="text" class="form-control" name="nama" placeholder="silakan diisi..." value="Fulanah" required>
									</p>

									
									<p>
									<label>Jenis Kelamin</label>
									<select name="gender" class="form-control"required>
										<option value="">--Silakan Pilih--</option>
										<option value="L">Laki-laki</option>
										<option value="P" selected>Perempuan</option>
									</select>
									</p>

									<p>
									<label>NIK KTP CPCL</label>
									<input type="number" class="form-control" name="nik" max="9999999999999999" value="3208071112700003" required>
									</p>

									<div class="row">
										<div class="col-md-6">
											<p>
											<label>Tempat Lahir</label>
											<input type="text" class="form-control" name="place_tl" placeholder="silakan diisi..." value="Kuningan" required>
											</p>
										</div>
										<div class="col-md-6">
											<p>
											<label>Tanggal Lahir</label>
											<input type="date" class="form-control" name="tl" value="1970-12-11" required>
											</p>
										</div>
									</div>


									<div class="row">
										<div class="col-md-3">
											<p>
											<label>RT</label>
											<input type="number" class="form-control" name="rt" maxlength="2" value="17" required>
											</p>
										</div>
										<div class="col-md-3">
											<p>
											<label>RW</label>
											<input type="number" class="form-control" name="rw" maxlength="2" value="4" required>
											</p>
										</div>
										<div class="col-md-6">
											<p>
											<label>Dusun</label>
											<input type="text" class="form-control" name="dusun" value="Pahing" required>
											</p>
										</div>
									</div>

									<p>
									<label>Nomor Kontak</label>
									<input type="text" class="form-control" name="kontak" value="6281221473049" required>
									</p>

									<div class="row">
										<div class="col-md-6">
											<p>
											<label>Pekerjaan</label>
											<select name="pekerjaan" class="form-control"required>
												<option value="">--Silakan Pilih--</option>
												<option value="1">Buruh Harian Lepas</option>
												<option value="2">Buruh</option>
												<option value="2">Honorer</option>
												<option value="2" selected>Ibu Rumah Tangga</option>
												<option value="2">Nelayan</option>
												<option value="2">Pedagang</option>
												<option value="2">Pensiunan</option>
												<option value="2">Purnawirawan</option>
												<option value="2">Petani</option>
												<option value="2">PNS</option>
												<option value="2">Pegawai Swasta</option>
												<option value="2">Wiraswasta</option>
												<option value="2">Tidak Bekerja</option>
											</select>
											</p>
										</div>
										<div class="col-md-6">
											<p>
											<label>Penghasilan per Bulan (Rp)</label>
											<input type="number" class="form-control" name="rw" maxlength="2" value="450000" required>
											</p>
										</div>
									</div>

					<input type="submit" value="Input" class="btn btn-success">
				</form>


              </div>
            </div>
          </div>
		

          <div class="col-md-6">
            <div class="card card-success card-outline">
              <div class="card-header with-border">
                <h5 class="card-title">Dokumen CPCL</h5>
			  </div>
              <div class="card-body">
				<form method="post" action="insert.php">
									<p>
									<label>Foto Pemilik</label>
									<input type="file" class="form-control" name="fupload" required>
									</p>

									<p>
									<label>Scan KTP</label>
									<input type="file" class="form-control" name="fupload" required>
									</p>

									<p>
									<label>Scan Kartu Keluarga (KK)</label>
									<input type="file" class="form-control" name="fupload" required>
									</p>

					<input type="submit" value="Input" class="btn btn-success">
				</form>


              </div>
            </div>
          </div>
        </div>
<?php
	break;

	case 'eksisting':
?>
		<div class="row">
          <div class="col-md-12">
            <div class="card card-success card-outline">
              <div class="card-header with-border">
                <h5 class="card-title">Kondisi Awal Rumah</h5>
			  </div>
              <div class="card-body">
			  
				<form method="post" action="insert.php">
					<p>
					<label>Luas Lahan (Meter Persegi)</label>
					<input type="text" class="form-control" name="luas" placeholder="silakan diisi..." required>
					</p>

					<p>
					<label>Luas Bangunan (Meter Persegi)</label>
					<input type="text" class="form-control" name="luas" placeholder="silakan diisi..." required>
					</p>

					<p>
					<label>Kepemilikan</label>
					<select name="kepemlikan" class="form-control" required>
						<option value="">--pilih--</option>
						<option value="">Hibah</option>
						<option value="">Milik Keluarga</option>
						<option value="">Milik Orangtua</option>
						<option value="">Milik Pribadi</option>
						<option value="">Waris</option>
					</select>
					</p>

					<p>
					<label>Legalitas Lahan</label>
					<select name="legalitas" class="form-control" required>
						<option value="">--pilih--</option>
						<option value="">Akta Jual Beli</option>
						<option value="">Akta Waris/Hibah</option>
						<option value="">Girik/Letter-C</option>
						<option value="">SHM</option>
						<option value="">Surat Keterangan Tanah</option>
					</select>
					</p>

					<p>
					<label>Bukti Legalitas Lahan</label>
					<input type="file" class="form-control" name="fupload" required>
					</p>

					<p>
					<label>Nomor Legalitas Lahan</label>
					<input type="text" class="form-control" name="nomor" required>
					</p>
					

					<div class="row">
						<div class="col-md-6">
							<p>
							<label>Batas Utara</label>
							<input type="text" class="form-control" name="rt" required>
							</p>
						</div>
						<div class="col-md-6">
							<p>
							<label>Batas Timur</label>
							<input type="text" class="form-control" name="rt" required>
							</p>
						</div>
						<div class="col-md-6">
							<p>
							<label>Batas Selatan</label>
							<input type="text" class="form-control" name="rt" required>
							</p>
						</div>
						<div class="col-md-6">
							<p>
							<label>Batas Barat</label>
							<input type="text" class="form-control" name="rt" required>
							</p>
						</div>
					</div>


					<input type="submit" value="Input" class="btn btn-success">
				</form>
              </div>
            </div>
          </div>
        </div>
<?php
	break;
	
	case 'spesifikasi' :
?>
			<div class="row">
			  <div class="col-md-6">
				<div class="card card-success card-outline">
				  <div class="card-header with-border">
					<h5 class="card-title">Foto Spesifikasi Rumah</h5>
				  </div>
				  <div class="card-body">

					<form method="post" action="insert.php">
						<p>
						<label>Perspektif 45 derajat</label>
						<input type="file" class="form-control" name="fupload" required>
						</p>

						<p>
						<label>Tampak Depan</label>
						<input type="file" class="form-control" name="fupload" required>
						</p>

						<p>
						<label>Tampak Samping</label>
						<input type="file" class="form-control" name="fupload" required>
						</p>

						<p>
						<label>Tampak Belakang</label>
						<input type="file" class="form-control" name="fupload" required>
						</p>

						<p>
						<label>Ruang Keluarga</label>
						<input type="file" class="form-control" name="fupload" required>
						</p>

						<p>
						<label>MCK/Jamban/Kamar Mandi</label>
						<input type="file" class="form-control" name="fupload" required>
						</p>



						<input type="submit" value="Input" class="btn btn-success">
					</form>
				  </div>

					
				</div>
              </div>


			  <div class="col-md-6">
				<div class="row">
				  <div class="col-md-12">
					<div class="card card-success card-outline">
					  <div class="card-header with-border">
						<h5 class="card-title">Material Kondisi Awal</h5>
					  </div>
					  <div class="card-body">
						<form method="post" action="insert.php">
							<p>
							<label>Jenis Atap</label>
							<input type="text" class="form-control" name="atap" required>
							</p>
							<p>
							<label>Jenis Lantai</label>
							<input type="text" class="form-control" name="atap" required>
							</p>
							<p>
							<label>Jenis Dinding</label>
							<input type="text" class="form-control" name="atap" required>
							</p>
							<input type="submit" value="Input" class="btn btn-success">
						</form>
					  </div>
					</div>
				  </div>
			  
				  <div class="col-md-12">
					<div class="card card-success card-outline">
					  <div class="card-header with-border">
						<h5 class="card-title">Material Rencana Usulan</h5>
					  </div>
					  <div class="card-body">
						<form method="post" action="insert.php">
							<p>
							<label>Jenis Atap</label>
							<input type="text" class="form-control" name="atap" required>
							</p>
							<p>
							<label>Jenis Lantai</label>
							<input type="text" class="form-control" name="atap" required>
							</p>
							<p>
							<label>Jenis Dinding</label>
							<input type="text" class="form-control" name="atap" required>
							</p>
							<input type="submit" value="Input" class="btn btn-success">
						</form>
					  </div>
					</div>
				  </div>
				  
				</div>
			  </div>
			</div>
<?php
	break;
	
	case 'penilaian':
?>
		<div class="row">
			  <div class="col-md-6">
				<div class="card card-success card-outline">
				  <div class="card-header with-border">
					<h5 class="card-title">Komponen Struktural</h5>
				  </div>
				  <div class="card-body">
					<form method="post" action="insert.php">
						<p>
						<label>Pondasi</label>
						<select name="" class="form-control" required>
							<option value="">--pilih--</option>
							<option value="">Rusak atau Tidak Ada</option>
							<option value="">Tidak Rusak</option>
						</select>
						</p>

						<p>
						<label>Tiang/Kolom</label>
						<select name="" class="form-control" required>
							<option value="">--pilih--</option>
							<option value="">Rusak atau Tidak Ada</option>
							<option value="">Tidak Rusak</option>
						</select>
						</p>

						<p>
						<label>Balok</label>
						<select name="" class="form-control" required>
							<option value="">--pilih--</option>
							<option value="">Rusak atau Tidak Ada</option>
							<option value="">Tidak Rusak</option>
						</select>
						</p>

						<p>
						<label>Rangka Atap</label>
						<select name="" class="form-control" required>
							<option value="">--pilih--</option>
							<option value="">Rusak atau Tidak Ada</option>
							<option value="">Tidak Rusak</option>
						</select>
						</p>

						<input type="submit" value="Input" class="btn btn-success">
					</form>
				  </div>
				</div>
			  </div>
			  
			  <div class="col-md-6">
				<div class="card card-success card-outline">
				  <div class="card-header with-border">
					<h5 class="card-title">Komponen Non Struktural</h5>
				  </div>
				  <div class="card-body">
					<form method="post" action="insert.php">
						<p>
						<label>Dinding Pengisi</label>
						<select name="" class="form-control" required>
							<option value="">--pilih--</option>
							<option value="">Rusak atau Tidak Ada</option>
							<option value="">Tidak Rusak</option>
						</select>
						</p>

						<p>
						<label>Kusen</label>
						<select name="" class="form-control" required>
							<option value="">--pilih--</option>
							<option value="">Rusak atau Tidak Ada</option>
							<option value="">Tidak Rusak</option>
						</select>
						</p>

						<p>
						<label>Penutup Atap</label>
						<select name="" class="form-control" required>
							<option value="">--pilih--</option>
							<option value="">Rusak atau Tidak Ada</option>
							<option value="">Tidak Rusak</option>
						</select>
						</p>

						<p>
						<label>Lantai</label>
						<select name="" class="form-control" required>
							<option value="">--pilih--</option>
							<option value="">Rusak atau Tidak Ada</option>
							<option value="">Tidak Rusak</option>
						</select>
						</p>

						<input type="submit" value="Input" class="btn btn-success">
					</form>
				  </div>
				</div>
			  </div>
			  
			  <div class="col-md-6">
				<div class="card card-success card-outline">
				  <div class="card-header with-border">
					<h5 class="card-title">Kecukupan Ruang</h5>
				  </div>
				  <div class="card-body">
					<form method="post" action="insert.php">
						<p>
						<label>Minimum 9m2/jiwa</label>
						<select name="" class="form-control" required>
							<option value="">--pilih--</option>
							<option value="">Tidak Cukup</option>
							<option value="">Cukup</option>
						</select>
						</p>
						<input type="submit" value="Input" class="btn btn-success">
					</form>
				  </div>
				</div>
			  </div>

			  <div class="col-md-6">
				<div class="card card-success card-outline">
				  <div class="card-header with-border">
					<h5 class="card-title">Penghawaan</h5>
				  </div>
				  <div class="card-body">
					<form method="post" action="insert.php">
						<p>
						<label>Penghawaan minimal 5% dari luas dinding dan ada sirkulasi</label>
						<select name="" class="form-control" required>
							<option value="">--pilih--</option>
							<option value="">Tidak Memenuhi</option>
							<option value="">Memenuhi</option>
						</select>
						</p>
						<p>
						<label>Pencahayaan minimal 10% dari luas dinding</label>
						<select name="" class="form-control" required>
							<option value="">--pilih--</option>
							<option value="">Tidak Memenuhi</option>
							<option value="">Memenuhi</option>
						</select>
						</p>
						<p>
						<label>MCK</label>
						<select name="" class="form-control" required>
							<option value="">--pilih--</option>
							<option value="">Tidak Memenuhi</option>
							<option value="">Memenuhi</option>
						</select>
						</p>
						<input type="submit" value="Input" class="btn btn-success">
					</form>
				  </div>
				</div>
			  </div>
			  



			  <div class="col-md-6">
				<div class="card card-success card-outline">
				  <div class="card-header with-border">
					<h5 class="card-title">Kesanggupan Swadaya</h5>
				  </div>
				  <div class="card-body">
					<form method="post" action="insert.php">
						<p>
						<label>Kesanggupan Swadaya</label>
						<select name="" class="form-control" required>
							<option value="">--pilih--</option>
							<option value="">Ada</option>
							<option value="">Tidak Ada</option>
						</select>
						</p>
						<p>
						<label>Jenis Swadaya</label>
						<select name="" class="form-control" required>
							<option value="">--pilih--</option>
							<option value="">Bahan Bangunan Baru/Bekas</option>
							<option value="">Ongkos Tukang</option>
							<option value="">Uang dan Bahan Bangunan</option>
						</select>
						</p>

						<input type="submit" value="Input" class="btn btn-success">
					</form>
				  </div>
				</div>
			  </div>

			

        </div>
		
		
<?php
	break;
	}
?>