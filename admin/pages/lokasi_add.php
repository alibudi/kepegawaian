<!-- 
 <?php 

if (isset($_POST['simpan'])) {
  // $nim = $_POST['nim'];
  $id_lokasi = $_POST['id_lokasi'];
  $nm_lokasi = $_POST['nm_lokasi'];
  $alamat_lokasi = $_POST['alamat_lokasi'];
  $no_hp = $_POST['no_hp'];
  $result = mysqli_query($connect, "insert into lokasi_krj(id_lokasi,nm_lokasi,alamat_lokasi,no_hp) values('$id_lokasi',$nm_lokasi','$alamat_lokasi' , '$no_hp')");
  if ($result) {
    echo "<script>
    window.location = './admin/index.php?hal=lokasi';
    </script>";
  }else{
    echo '<script>
    window.alert("gagal");
    </script>';
  }

}
?> -->
  <!-- Main content -->
  <section class="content container-fluid">

    <div class="col-md-12">
      <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Data</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
                <!-- <div class="alert alert-warning alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          
                </div> -->
            <form  method="POST" action="actionn/lokasi_add.php">
              <div class="form-group">
                <label for="username" class="col-sm-3 control-label">Id Lokasi</label>
                <div class="col-sm-9">
                  <input type="text" name="id_lokasi" value="" class="form-control" placeholder="Id Lokasi">
                </div>
              </div>
              <br><br>
              <div class="form-group">
                <label for="firstname" class="col-sm-3 control-label">Nama Lokasi</label>
                <div class="col-sm-9">
                  <input type="text" name="nm_lokasi" value="" class="form-control" placeholder="Nama Lokasi">
                </div>                
              </div>
              <br><br>
              <div class="form-group">
                <label for="lastname" class="col-sm-3 control-label">Nomer HP</label>
                <div class="col-sm-9">
                  <input type="text" name="no_hp" value="" class="form-control" placeholder="No hp">
                </div>
              </div>
              <br><br>
              <div class="form-group">
                <label for="lastname" class="col-sm-3 control-label">Alamat</label>
                <div class="col-sm-9">
                  <input type="text" name="alamat_lokasi" value="" class="form-control" placeholder="Alamat">
                </div>
              </div>
              <br><br>
               <div class="form-group">
                <div class="col-sm-offset-3 col-sm-7">
                  <button type="submit" name="submit" value="submit" class="btn btn-success">Simpan</button>
                    <a href="?hal=lokasi" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
                </div>
              </div>
            </form>
          </div>
          <!-- /.box-body -->
      </div>
      <!-- /.col -->
    </div>

  </section>
