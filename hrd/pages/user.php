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
              <a href="?hal=user_add" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah Data</a>
              <br><br>
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Id user</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Nama</th>
                  <th>No HP</th>
                  <th>Level</th>
                  <th>Blokir</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                 <?php
                $no = 1;
                $getUser = $jbtn->getUser();
              while($data = $getUser->fetch_object()){
      ?>
                <tbody>
                <tr>
                 <td><?php echo $no++?></td>
                  <td><?php echo $data->id_user?></td>
                  <td><?php echo $data->user?></td>
                  <td><?php echo $data->pass?></td>
                  <td><?php echo $data->nama?></td>
                  <td><?php echo $data->no_hp?></td>
                  <td><?php echo $data->level?></td>
                  <td><?php echo $data->blokir?></td>
                  <td style="text-align: center;">    
                  <a class='btn btn-info btn-xs' href="?hal=update_user" class=""><i class="glyphicon glyphicon-edit"></i> </a>
                   <a class='btn btn-danger btn-xs' href="#" onclick="#"><i class="glyphicon glyphicon-trash"></i> </a> </td>
                </tr>
                   <?php
                  }?>
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
