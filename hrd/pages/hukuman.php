
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
              <a href="?hal=hukuman_add" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah Data</a>
              <br><br>
         
          <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>NIP</th>
                  <th>Unit Kerja</th>
                  <th>Jabatan/pangkat</th>
                  <th>Lokasi Kerja</th>
                  <th style="text-align: center;">Aksi</th>
                </tr>
                </thead>
             <?php 
    include 'koneksi.php';
    $no = 1;
    $data = mysqli_query($koneksi,"select * from hukuman  z, sk_krj s, unit_krj u, lokasi_krj l, pangkat x, jabatan j where s.id_jabatan=j.id_jabatan and s.id_lokasi=l.id_lokasi and s.id_pangkat=x.id_pangkat and s.id_unit_krj=u.id_unit_krj and z.nip=s.nip and s.status_sk='aktif'");
    while($d = mysqli_fetch_array($data)){
      ?>

                <tbody>
                <tr>
                 <td><a href="?module=pegawai&aksi=detail_pegawai&nip=<?php echo $d['nip'];?>"><?php echo $d['nip']; ?></a></td>
                  <td><?php echo $d['nm_unit_krj']; ?></td>
                  <td><?php echo $d['nm_jabatan']; echo " / ".$d['nm_pangkat'];  ?></td>
                  <td><?php echo $d['nm_lokasi']; ?></td>

                    <td style="text-align: center;">    
                  <a class='btn btn-info btn-xs' href="?hal=jabatan_update" class=""><i class="glyphicon glyphicon-edit"></i> </a>
                   <a class='btn btn-danger btn-xs' href="#" onclick=""><i class="glyphicon glyphicon-trash"></i> </a> </td>
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
