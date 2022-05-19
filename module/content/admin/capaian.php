        <div class="alert alert-danger">
          <h5><i class="icon fas fa-ban"></i> Perhatian!</h5>
          Halaman ini hanya sebatas tampilan, belum bisa dilakukan proses CRUD<br>
          tetapi project aplikasi yang anda buat wajib sampai fitur2nya berfungsi tidak hanya sekedar tampilan atau dengan kata lain bisa sampai CRUD.
        </div>


		<div class="callout callout-info">
			<h5>Petunjuk!</h5>
            <p>Berikut data yang sudah dilakukan penyelesaian</p>
        </div>


			<div class='row'>
				<div class='col-md-12'>
					<div class='card card-success'>
						<div class='card-body'>
	    	              <select name="desa" class="form-control select2bs4" onchange="window.document.location.href=this.options[this.selectedIndex].value;" required>
    					  <option vaule="#">--Pilih Desa untuk Detail Data--</option>
<?php
	$qk = mysqli_query($con,"SELECT * FROM kec ORDER BY id");
	while($rk=mysqli_fetch_array($qk)) {
		echo"<optgroup label='$rk[kecamatan]'>";
			$q = mysqli_query($con,"SELECT * FROM desa WHERE id_kec='$rk[id]' ORDER BY jenis");
			while($r=mysqli_fetch_array($q)) {
			    if(@$_GET['id']==$r[id]) {
					echo"
							  <option value='admin.php?page=capaian&aksi=desa&id=$r[id]' selected='selected'>$r[desa]</option>
					";
			    }
			    else {
					echo"
							  <option value='admin.php?page=capaian&aksi=desa&id=$r[id]'>$r[desa]</option>
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
<!--
			<div class='row'>
				<div class='col-md-12'>
					<div class='card card-success'>
						<div class='card-body'>
							<select onchange="window.document.location.href=this.options[this.selectedIndex].value;" class='form-control' name='ta'>
							<option value=''>-- Pilih Tahun --</option>
							<option value='admin.php?page=capaian&aksi=desa&id=<?php echo @$_GET[id]; ?>&thn=2020'>2020</option>
							<option value='admin.php?page=capaian&aksi=desa&id=<?php echo @$_GET[id]; ?>&thn=2021'>2021</option>
							</select>
						</div>
					</div>
				</div>
			</div>
!-->

<?php
	switch(@$_GET['aksi']) {
	    
	    case 'rekap':
?>

        <div class="row">

          <div class="col-md-6">
            <div class="info-box">
              <span class="info-box-icon bg-secondary"><i class="fa fa-home"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Total Rutilahu Tersisa</span>
                <span class="info-box-number">9.100</span>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="info-box">
              <span class="info-box-icon bg-success"><i class="fa fa-home"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Total Telah Diselesaikan</span>
                <span class="info-box-number">2.400</span>
              </div>
            </div>
          </div>
		  
          <div class="col-md-4">
		    <div class="card">
		    <div class="card-body">
                <div class="progress">
                  <div class="progress-bar bg-primary progress-bar-striped" role="progressbar"
                       aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 26%">
                    26% Penyelesaian
                  </div>
                </div>
			</div>
			</div>
		  </div>
		  
		</div>



        <div class="row">

          <div class="col-lg-12">
            <div class="card card-success card-outline">
              <div class="card-header with-border">
                <h5 class="card-title">Rekap Penyelesaian</h5>
				<div class="card-tools">
					<a href="#" class="btn btn-xs btn-success"><i class="fa fa-file-word"></i> Export Word</a>
					<a href="#" class="btn btn-xs btn-success"><i class="fa fa-file-excel"></i> Export Excell</a>
				</div>
			  </div>
              <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-striped">
                        <thead>
                    	<tr class="bg-info">
                    		<th rowspan="2">No<br>&nbsp;</th>
                    		<th rowspan="2">Kecamatan<br>&nbsp;</th>
                    		<th rowspan="2">Nama<br>Desa</th>
                    		<th colspan="4" class="text-center">Tahun</th>
                    		<th rowspan="2">Sisa<br>Rutilahu</th>
                    	</tr>
                    	<tr class="bg-info">
                    		<th>2020</th>
                    		<th>2021</th>
                    		<th>2022</th>
                    		<th>2013</th>
                    	</tr>
                        </thead>
                        <tbody>
                    <?php
                    	$nomor = 1;
                    	$qdesa = mysqli_query($con,"SELECT * FROM kec,desa WHERE kec.id=desa.id_kec ORDER BY kec.kecamatan");
                    	while($desa=mysqli_fetch_array($qdesa)) {

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
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<?php
        break;
        
        case 'desa':
?>
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
                <div class="card-body text-center bg-info">
                    <h4>10 Rutilahu</h4>
                </div>
                <div class="card-footer text-center">
    					<a href="#" class="btn btn-xs btn-success"><i class="fa fa-file-word"></i> Export Word</a>
    					<a href="#" class="btn btn-xs btn-success"><i class="fa fa-file-excel"></i> Export Excell</a>
                </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">

				  <div class="row d-flex align-items-stretch">

					<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
					  <div class="card bg-light">
						<div class="card-header text-muted border-bottom-0 card-success card-outline">
						  Fulan
						</div>
						<div class="card-body pt-2">
						  <div class="row">
							<div class="col-7">
							  <ul class="ml-4 mb-0 fa-ul text-muted">
								<li class="small mb-2"><span class="fa-li"><i class="fas fa-lg fa-user"></i></span> Pekerjaan: Buruh Pabrik</li>
								<li class="small mb-2"><span class="fa-li"><i class="fa fa-lg fa-circle"></i></span> Penghasilan: Rp. 450.000,-</li>
								<li class="small mb-2"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Alamat: RT/RW 04/17 Dusun Pahing</li>
								<li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> HP #: +6281221473049</li>
							  </ul>
							</div>
							<div class="col-5 text-center">
							  <img src="dist/img/avatar.png" alt="" class="img-circle img-fluid">
							</div>
						  </div>
						</div>
						<div class="card-footer bg-teal p-1">
						  <div class="text-right">
							<a href="#" class="btn btn-xs btn-warning">
							  <i class="fas fa-calendar"></i> 2020
							</a>
						  </div>
						</div>
					  </div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
					  <div class="card bg-light">
						<div class="card-header text-muted border-bottom-0 card-success card-outline">
						  Fulan
						</div>
						<div class="card-body pt-2">
						  <div class="row">
							<div class="col-7">
							  <ul class="ml-4 mb-0 fa-ul text-muted">
								<li class="small mb-2"><span class="fa-li"><i class="fas fa-lg fa-user"></i></span> Pekerjaan: Buruh Pabrik</li>
								<li class="small mb-2"><span class="fa-li"><i class="fa fa-lg fa-circle"></i></span> Penghasilan: Rp. 450.000,-</li>
								<li class="small mb-2"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Alamat: RT/RW 04/17 Dusun Pahing</li>
								<li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> HP #: +6281221473049</li>
							  </ul>
							</div>
							<div class="col-5 text-center">
							  <img src="dist/img/avatar.png" alt="" class="img-circle img-fluid">
							</div>
						  </div>
						</div>
						<div class="card-footer bg-teal p-1">
						  <div class="text-right">
							<a href="#" class="btn btn-xs btn-warning">
							  <i class="fas fa-calendar"></i> 2020
							</a>
						  </div>
						</div>
					  </div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
					  <div class="card bg-light">
						<div class="card-header text-muted border-bottom-0 card-success card-outline">
						  Fulan
						</div>
						<div class="card-body pt-2">
						  <div class="row">
							<div class="col-7">
							  <ul class="ml-4 mb-0 fa-ul text-muted">
								<li class="small mb-2"><span class="fa-li"><i class="fas fa-lg fa-user"></i></span> Pekerjaan: Buruh Pabrik</li>
								<li class="small mb-2"><span class="fa-li"><i class="fa fa-lg fa-circle"></i></span> Penghasilan: Rp. 450.000,-</li>
								<li class="small mb-2"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Alamat: RT/RW 04/17 Dusun Pahing</li>
								<li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> HP #: +6281221473049</li>
							  </ul>
							</div>
							<div class="col-5 text-center">
							  <img src="dist/img/avatar.png" alt="" class="img-circle img-fluid">
							</div>
						  </div>
						</div>
						<div class="card-footer bg-teal p-1">
						  <div class="text-right">
							<a href="#" class="btn btn-xs btn-warning">
							  <i class="fas fa-calendar"></i> 2020
							</a>
						  </div>
						</div>
					  </div>
					</div>

				  </div>


              </div>
			  <div class="card-footer">

			  </div>
            </div><!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
        </div>

<?php
    break;
	}
?>