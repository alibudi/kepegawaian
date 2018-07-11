<?php 
$link_list='?hal=user';
$link_update='?hal=update_user';
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
                <label for="username" class="col-sm-3 control-label">Id User</label>
                <div class="col-sm-9">
                  <input type="text" name="id_produk" value="" class="form-control" placeholder="Id User">
        
                </div>
                
              </div>
              <br><br>
              <div class="form-group">
                <label for="firstname" class="col-sm-3 control-label">Nama </label>
                <div class="col-sm-9">
                  <input type="text" name="nama_produk" value="" class="form-control" placeholder="Nama">
                 
                </div>
                
              </div>
              <br><br>
              <div class="form-group">
                <label for="lastname" class="col-sm-3 control-label">Nomer HP</label>
                <div class="col-sm-9">
                  <input type="text" name="gambar" value="" class="form-control" placeholder="No hp">
          
                </div>
                
              </div>
              <br><br>
              <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Level</label>
                <div class="col-sm-9">
                    <select name="level" class="form-control">
                      <option value=" "> -- Pilih Level -- </option>
                      <option value="admin">Admin</option>
                      <option value="hrd">HRD</option>
                      <option value="gm">Pimpinan</option>
                    </select>
               
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