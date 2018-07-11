
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
              <a href="?hal=prestasi_add" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah Data</a>
              <br><br>
         
             <table id="example1" class="table table-bordered table-hover">
                <thead>
                      <tr>
                          <th>NIP</th>
                          <th>Nama pegawai</th>
                          <th>Kelamin</th>  
                          <th>Alamat</th>
                          <th style="text-align: center;">Aksi</th>
                      </tr>
                  </thead>
                    <?php 
    include 'koneksi.php';
    $no = 1;
    $data = mysqli_query($koneksi,"select * from prestasi a, pegawai b where a.nip=b.nip");
    while($d = mysqli_fetch_array($data)){
      ?>
                  <tbody>
                  <tr>
                      <td><a href="?module=pegawai&aksi=detail_pegawai&nip=<?php echo $d['nip'];?>"><?php echo $d['nip']; ?></a></td>
                      <td><?php echo $d['nm_pegawai']; ?></td>
                      <td><?php echo $d['jk']; ?></td>
                      <td><?php echo $d['alamat']; ?></td>
                      <td style="text-align: center;">
                          <a class='btn btn-info btn-xs' href="?hal=pangkat_update" class=""><i class="glyphicon glyphicon-edit"></i> </a>
                         <a class='btn btn-danger btn-xs' href="#" onclick="#"><i class="glyphicon glyphicon-trash"></i> </a> 
              
                      </td>
                  </tr>
                   <?php
                   }?>
            </tbody>
              </table>
            </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
