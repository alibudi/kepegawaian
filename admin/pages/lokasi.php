

 <!-- Content Wrapper. Contains page content -->
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pegawai</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="?hal=lokasi_add" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah Data</a>
              <br><br>
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Id Lokasi</th>
                  <th>Nama Lokasi</th>
                  <th>Alamat</th>
                  <th>No HP</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                 <?php 
    include 'koneksi.php';
    $no = 1;
    $data = mysqli_query($koneksi,"select * from lokasi_krj");
    while($d = mysqli_fetch_array($data)){
      ?>    
                <tbody>
                <tr>
                    <td><?php echo $no++?></td>
                    <td><?php echo $d['id_lokasi']?></td>
                    <td><?php echo $d['nm_lokasi']?></td>
                    <td><?php echo $d['alamat_lokasi']?></td>
                    <td><?php echo $d['no_hp']?></td>
                  <td style="text-align: center;">    
                  <a class='btn btn-info btn-xs' href="?hal=lokasi_update" class=""><i class="glyphicon glyphicon-edit"></i> </a>
                   <a class='btn btn-danger btn-xs' href="?hal=lokasi_remove.php" onclick="return confirm('Apakah anda yakin mau di hapus')['id_lokasi']"><i class="glyphicon glyphicon-trash"></i> </a> </td>
                </tr>
                <?php }?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
