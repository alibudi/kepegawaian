
     <!-- Main content -->
     <section class="content container-fluid">

    <div class="col-md-12">
      <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Pangkat</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div> 
          <!-- /.box-header -->
          <div class="box-body">
          <div class="form-group">
                <label for="kategori" class="col-sm-3 control-label">Id Pangkat</label>
                <div class="col-sm-9">
                  <input type="text" id="id_pangkat" name="id_pangkat" class="form-control" placeholder="">
               
                </div>
                
              </div>
            <br>
            <br>
              <div class="form-group">
                <label for="kategori" class="col-sm-3 control-label">Nama Pangkat</label>
                <div class="col-sm-9">
                  <input type="text" id="nama_pangkat" name="nama_pangkat" class="form-control" placeholder="">
               
                </div>
                
              </div>
            <br>
            <br>
            <div class="form-group">
                <label for="kategori" class="col-sm-3 control-label">Gaji</label>
                <div class="col-sm-9">
                  <input type="text" id="gaji" name="gaji" class="form-control" placeholder="">
               
                </div>
                
              </div>
            <br>
            <br>
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-2">
                  <button type="submit" name="submit" value="submit" class="btn btn-success">Tambah</button>
                </div>
              </div>

 
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
                          <th>ID Pangkat</th>
                          <th>Nama Pangkat</th>
                          <th>Gaji</th>
                          <th style="text-align: center;">Aksi</th>
                      </tr>
                  </thead>
             <?php 
    include 'koneksi.php';
    $no = 1;
    $data = mysqli_query($koneksi,"select * from pangkat");
    while($d = mysqli_fetch_array($data)){
      ?>    
                <tbody>
                <tr>
                    <td><?php echo $no++?></td>
                    <td><?php echo $d['id_pangkat']?></td>
                    <td><?php echo $d['nm_pangkat']?></td>
                    <td><?php echo $d['gaji']?></td>
                      <td style="text-align: center;">
                          <a class='btn btn-info btn-xs' href="?hal=pangkat_update" class=""><i class="glyphicon glyphicon-edit"></i> </a>
                         <a class='btn btn-danger btn-xs' href="#" onclick="return confirm('Apakah anda yakin mau di hapus')['id_pangkat']"><i class="glyphicon glyphicon-trash"></i> </a> 
              
                      </td>
                  </tr>
                   <?php
                   }?>
            </tbody>
              </table>

              </div>
        <!-- /.box-body -->
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>