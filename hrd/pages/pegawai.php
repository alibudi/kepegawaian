
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
              <a href="?hal=pegawai_add" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah Data</a>
              <br><br>
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>NIP</th>
                  <th>Nama pegawai</th>
                  <th>JK</th> 
                  <th>Tempat/Tgl. Lahir</th> 
                  <th>No. HP</th> 
                  <th>Email</th>
                  <th>Tgl. Masuk</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                          <?php 
    include 'koneksi.php';
    $no = 1;
    $data = mysqli_query($koneksi,"select * from pegawai");
    while($d = mysqli_fetch_array($data)){
      ?>
                <tbody>
                <tr>
                 <td><a href="?module=pegawai&aksi=detail_pegawai&nip=<?php echo $d['nip'];?>"><?php echo $d['nip']; ?></a></td>
                  <td><?php echo $d['nm_pegawai']; ?></td>
                  <td><?php echo $d['jk']; ?></td>
                  <td><?php echo $d['tpt_lhr'] ; ?></td>
                  <td><?php echo $d['no_hp']; ?></td>
                  <td><?php echo $d['email']; ?></td>  
                  <td><?php echo $d['tgl_msk']; ?></td>
                  <td style="text-align: center;">    
                  <a class='btn btn-info btn-xs' href="?hal=pegawai_update" class=""><i class="glyphicon glyphicon-edit"></i> </a>
                   <a class='btn btn-danger btn-xs' href="#" onclick=""><i class="glyphicon glyphicon-trash"></i> </a> </td>
                </tr>
                <?php }?>
                </tbody>
              </table>
            </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
