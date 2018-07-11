
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
              <a href="?hal=sk_add" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah Data</a>
              <br><br>
         
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No. SK</th>
                  <th>NIP</th>
                  <th>Nama Pegawai</th> 
                  <th>Tgl. SK</th>  
                  <th>Unit Kerja</th> 
                  <th>Jabatan</th>
                  <th>Gaji (Rp)</th>
                  <th style="text-align: center;">Aksi</th>
                </tr>
                </thead>
                <?php
      include 'koneksi.php';
    $no = 1;
    $data = mysqli_query($koneksi,"select * from sk_krj a, pegawai b, jabatan c, pangkat d, unit_krj e, lokasi_krj f where a.nip=b.nip and a.id_jabatan=c.id_jabatan and a.id_pangkat=d.id_pangkat and a.id_unit_krj=e.id_unit_krj and a.id_lokasi=f.id_lokasi and a.status_sk='aktif'");
    while($d = mysqli_fetch_array($data)){
      ?>
                <tbody>
                <tr>
                    <td><?php echo $d['no_sk']; ?></a></td>
                    <td><a target="blank"href="?module=pegawai&aksi=detail_pegawai&nip=<?php echo $d['nip'];?>"><?php echo $d['nip']; ?></a></td>
                    <td><?php echo $d['nm_pegawai']; ?></td>
                    <td><?php echo $d['tgl_sk']; ?></td>  
                    <td><?php echo $d['nm_unit_krj']; ?></td>
                    <td><?php echo $d['nm_jabatan']; ?></td>
                    <td><?php echo $d['gaji']; ?></td>
                    <td style="text-align: center;">    
                  <a class='btn btn-info btn-xs' href="?hal=unit_update" class=""><i class="glyphicon glyphicon-edit"></i> </a>
                   <a class='btn btn-danger btn-xs' href="#" onclick="#"><i class="glyphicon glyphicon-trash"></i> </a> </td>
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
