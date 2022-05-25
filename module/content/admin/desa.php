<?php
  switch(@$_GET[aksi]) {
    default:
?>
        <div class="row">

          <div class="col-lg-12">
            <div class="card card-success card-outline">
              <div class="card-header with-border">
                <h5 class="card-title">Daftar Permohonan Akun</h5>
                <div class="card-tools">
                    <a href="admin.php?page=desa&aksi=insert" class="btn btn-sm btn-warning"><i class="fa fa-plus"></i> Tambah</a>
                </div>
			  </div>
              <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                    	<tr class="bg-info">
                    		<th>No</th>
                    		<th>Username</th>
                    		<th>Nama Operator</th>
                    		<th>Nomor HP</th>
                    		<th>Status</th>
                    		<th>Aksi</th>
                    	</tr>
                    
                    <?php
                    	$no = 1;
                    	$query = mysqli_query($con,"SELECT * FROM akun WHERE level='desa'");
                    	while($data=mysqli_fetch_array($query)) {
                    		
                    		if($data['status']=='Y') {
                    			$status = 'Aktif';
                    		}
                    		else {
                    			$status = '<a href="update.php?page=aktivasi&id='.$data['username'].'">Non Aktif</a>';
                    		}
                    		
                    	echo "	
                    		<tr>
                    			<td>$no</td>
                    			<td>$data[username]</td>
                    			<td>$data[nama]</td>
                    			<td>$data[hp]</td>
                    			<td>$status</td>
                    			<td>
                    			<a href='admin.php?page=desa&aksi=edit&id=$data[username]'>Edit</a>
                    			|
                    			<a href='delete.php?page=akun&id=$data[username]'>Delete</a>
                    			</td>
                    		</tr>
                    	";
                    	$no++;
                    		
                    	}
                    
                    ?>
                    </table>
                </div>

              </div>
            </div>
          </div>

          <div class="col-lg-12">
            <div class="card card-success card-outline">
              <div class="card-header with-border">
                <h5 class="card-title">Data Akun Desa</h5>
			  </div>
              <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-striped">
                        <thead>
                    	<tr class="bg-info">
                    		<th>No</th>
                    		<th>Kecamatan</th>
                    		<th>Nama Desa</th>
                    		<th>Kepala Desa</th>
                    		<th>Nomor HP</th>
                    		<th>Akun</th>
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
                        			<td>$akun[nama]</td>
                        			<td>$akun[hp]</td>
                        			<td>$adaakun</td>
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
    
    
    case 'edit':
        $query = mysqli_query($con,"SELECT * FROM akun WHERE username='$_GET[id]' ");
        $hasil = mysqli_fetch_array($query);
?>
    <div class="card">
      <div class="card-header with-border">
        <h5 class="card-title">Edit Akun</h5>
	  </div>

      <div class="card-body">

        <form method="POST" action="update.php?page=akun">
            <p><label>Username</label>
                <input class="form-control" type="text" name="username" value="<?php echo $hasil['username']; ?>" readonly>
            </p>
            <p><label>Password</label>
                <input class="form-control" type="password" name="password" value="<?php echo $hasil['password']; ?>">
            </p>
            <p><label>Nama Lengkap</label>
            <input class="form-control" type="text" name="nama" value="<?php echo $hasil['nama']; ?>">
            </p>
            <p><label>Nomor HP</label>
            <input class="form-control" type="text" name="hp" value="<?php echo $hasil['hp']; ?>">
            </p>
            <p>
            <input class="btn btn-primary" type="submit" value="Ubah">
            </p>
        </form>

      </div>
    </div>


<?php
        
    break;
    
    case 'insert':
?>
    <div class="card">
      <div class="card-header with-border">
        <h5 class="card-title">Buat Akun</h5>
	  </div>
      <div class="card-body">

        <form method="POST" action="insert.php?page=akun">
            <p><label>Username</label>
                <input class="form-control" type="text" name="username">
            </p>
            <p><label>Password</label>
                <input class="form-control" type="password" name="password">
            </p>
            <p><label>Nama Lengkap</label>
            <input class="form-control" type="text" name="nama">
            </p>
            <p><label>Nomor HP</label>
            <input class="form-control" type="text" name="hp">
            </p>
            
            <p><label>Desa</label>
              <select name="id_desa" class="form-control select2bs4" required>
	    		  <option vaule="">--Pilih Desa--</option>
<?php
	$qk = mysqli_query($con,"SELECT * FROM kec ORDER BY id");
	while($rk=mysqli_fetch_array($qk)) {
		echo"<optgroup label='$rk[kecamatan]'>";
			$q = mysqli_query($con,"SELECT * FROM desa WHERE id_kec='$rk[id]' ORDER BY jenis");
			while($r=mysqli_fetch_array($q)) {
					echo"
					  <option value='$r[id]'>$r[desa]</option>
					";
			}
		echo"</optgroup>";
	}
?>
              </select>
              </p>


            <p>
            <input class="btn btn-primary" type="submit" value="Tambah">
            </p>
        </form>

      </div>
    </div>


<?php
        
    break;

    
}
?>