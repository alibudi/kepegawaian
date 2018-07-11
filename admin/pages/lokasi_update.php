<?php
if(isset($_POST['update'])) {
  $id_lokasi = $_POST['id_lokasi'];
  $nm_lokasi = $_POST['nm_lokasi'];
  $alamat_lokasi = $_POST['alamat_lokasi'];
  $no_hp = $_POST['no_hp'];

  $result = mysqli_query($connect, "update lokasi_krj set nm_lokasi='$nm_lokasi' , alamat_lokasi ='$alamat_lokasi' , ='$no_hp' where id_lokasi = '$id_lokasi' ");

  if ($result) {
    $result3 = mysqli_query($connect, "insert into log(log) values('Admin mengedit data user dengan id_lokasi ".$id_lokasi." ')");
    echo "<script>
    window.location = './admin/index.php?hal=lokasi';
    </script>";
  }else{
    echo '<script>
    window.alert("gagal");
    </script>';
  }
  // echo '<script>window.alert("hao")</script>';
  // echo $nim;
  // redirect(lgo);
} 
elseif (isset($_GET['id_lokasi'])) {
  $id = $_GET['id_lokasi'];
  $result = mysqli_query($connect, "select * from lokasi_krj where id_lokasi = $id_lokasi");
  while($d = mysqli_fetch_array($result,MYSQLI_ASSOC)){
    $hasil[] = $d;
  }
}
elseif (isset($_GET['delete_id'])) {
  $id = $_GET['delete_id'];
  $result = mysqli_query($connect, "update lokasi_krj set deleted = '1' where id = '$id'");
  $result3 = mysqli_query($connect, "insert into log(log) values('Admin menghapus user dengan id ".$id."')");
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

else{
 echo "<script>
 window.location = '.?hal=lokasi';
 </script>";
}

?>
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
                  <input type="text" name="nama_lokasi" value="" class="form-control" placeholder="Nama Lokasi">
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
                  <input type="text" name="alamat" value="" class="form-control" placeholder="Alamat">
                </div>
              </div>
              <br><br>
               <div class="form-group">
                <div class="col-sm-offset-3 col-sm-7">
                  <button type="submit" name="submit" value="submit" class="btn btn-success">Simpan</button>
                    <a href="#" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
                </div>
              </div>
            </form>
 
          </div>
          <!-- /.box-body -->
      </div>
      <!-- /.col -->
    </div>

  </section>
  <!-- /.content -->