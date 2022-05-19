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
	
	
?>

        <div class="row">
          <div class="col-lg-6">
            <div class="card card-success card-outline">
              <div class="card-header with-border">
                <h5 class="card-title">Input Calon Penerima Manfaat</h5>
			  </div>
              <div class="card-body">

<form method="post" action="insert.php">
	<p>
	<label>Nama Pemilik</label>
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
	<label>NIK KTP Pemilik</label>
	<input type="number" class="form-control" name="nik" max="9999999999999999" required>
	</p>


	<p>
	<label>Tempat Lahir</label>
	<input type="text" class="form-control" name="place_tl" placeholder="silakan diisi..." required>
	</p>

	<p>
	<label>Tanggal Lahir</label>
	<input type="date" class="form-control" name="tl" required>
	</p>



	<p>
	<label>RT</label>
	<input type="number" class="form-control" name="rt" maxlength="2" required>
	</p>

	<p>
	<label>RW</label>
	<input type="number" class="form-control" name="rw" maxlength="2" required>
	</p>
	
	<p>
	<label>Dusun</label>
	<input type="text" class="form-control" name="dusun" required>
	</p>

	<p>
	<label>Nomor Kontak</label>
	<input type="text" class="form-control" name="kontak" required>
	</p>

	<p>
	<label>Pekerjaan</label>
	<select name="pekerjaan" class="form-control"required>
		<option value="">--Silakan Pilih--</option>
		<option value="1">Buruh Harian Lepas</option>
		<option value="2">Buruh</option>
		<option value="2">Honorer</option>
		<option value="2">Ibu Rumah Tangga</option>
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

	<p>
	<label>Penghasilan</label>
	<input type="number" class="form-control" name="rw" maxlength="2" required>
	</p>
	
	
	
	<p>
	<label>Luas Rumah (Meter Persegi)</label>
	<input type="text" class="form-control" name="luas" placeholder="silakan diisi..." required>
	</p>
	
	<p>
	<label>Kondisi Struktur Rumah</label>
	<select name="komponen_struktural" class="form-control" required>
		<option value="">--Silakan Pilih--</option>
		<option value="Y">Layak</option>
		<option value="N">Tidak Layak</option>
	</select>
	</p>


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

	<p>
	<label>Bukti Kepemilikan Tanah</label>
	<input type="file" class="form-control" name="fupload" required>
	</p>


	<input type="submit" value="Input" class="btn btn-success">
</form>

					
					
					
					
              </div>
            </div><!-- /.card -->
          </div>
		  
          <div class="col-lg-6">
			  <div class="row">
			  <div class="col-md-12">
				<div class="card card-success card-outline">
				  <div class="card-header with-border">
					<h5 class="card-title">Foto Kondisi Awal Rumah</h5>
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