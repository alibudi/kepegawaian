<!-- <?php 

if (isset($_POST['simpan'])) {
  // $nim = $_POST['nim'];
  $id_jabatan = $_POST['id_jabatan'];
  $nm_jabatan = $_POST['nm_jabatan'];
  $result = mysqli_query($connect, "insert into jabatan(id_jabatan,nm_jabatan) values('$id_jabatan',$nm_jabatan')");
  if ($result) {
    echo "<script>
    window.location = './admin/index.php?hal=jabatan';
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
            <h3 class="box-title">Jabatan</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div> 
          <!-- /.box-header -->
          <form  action="actionn/jabatan_add.php" method="POST">
          <div class="box-body">
          <div class="form-group">
                <label for="kategori" class="col-sm-3 control-label">Id Jabatan</label>
                <div class="col-sm-9">
                  <input type="text" id="id_jabatan" name="id_jabatan" class="form-control" placeholder="">
                </div>
              </div>
            <br>
            <br>
              <div class="form-group">
                <label for="kategori" class="col-sm-3 control-label">Nama Jabatan</label>
                <div class="col-sm-9">
                  <input type="text" id="nm_jabatan" name="nm_jabatan" class="form-control" placeholder="">
                </div>
              </div>
            <br>
            <br>
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-2">
                  <button type="submit" name="submit" value="submit" class="btn btn-success">Tambah</button>
                </div>
              </div>
            </form>    
          </div>
          <!-- /.box-body -->
      </div>
      <!-- /.col -->
    </div>


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
      <!-- Default box -->
    <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Id Jabatan</th>
                  <th>Nama Jabatan</th>
                  <th style="text-align: center;">Aksi</th>
                </tr>
                </thead>
                     <?php 
    include 'koneksi.php';
    $no = 1;
    $data = mysqli_query($koneksi,"select * from jabatan");
    while($d = mysqli_fetch_array($data)){
      ?>            
          <tbody>
                <tr>
                    <td><?php echo $no++?></td>
                    <td><?php echo $d['id_jabatan'];?></td>
                    <td><?php echo $d['nm_jabatan'];?></td>
                    <td style="text-align: center;">    
                  <a class='btn btn-info btn-xs' href="?hal=jabatan_update" class=""><i class="glyphicon glyphicon-edit"></i> </a>
                   <a class='btn btn-danger btn-xs' href="?hal=jabatan_remove.php" onclick="return confirm('Anda yakin ingin menghapus siswa <?php echo $d['id_jabatan']; ?>?');"><i class="glyphicon glyphicon-trash"></i> </a> </td>
                </tr>
                <?php
                  }?>
                </tbody>
              </table>
            </div>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
    </section>