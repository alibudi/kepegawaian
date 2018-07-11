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
                <label for="username" class="col-sm-3 control-label">NIP</label>
                <div class="col-sm-9">
                  <input type="text" name="id_lokasi" value="" class="form-control" placeholder="Id Lokasi">
                </div>
              </div>
              <br>  
              <div class="form-group">
                <label for="firstname" class="col-sm-3 control-label">Nama pegawai</label>
                <div class="col-sm-9">
                  <input type="text" name="nama_lokasi" value="" class="form-control" placeholder="Nama Lokasi">
                </div>
              </div>
              <br>
              <div class="form-group">
                <label for="lastname" class="col-sm-3 control-label">Tempat & tanggal Lahir</label>
                <div class="col-sm-9">
                  <input type="text" name="no_hp" value="" class="form-control" placeholder="No hp">        
                </div>
              </div>
              <br>
              <div class="form-group">
                  <label class="col-sm-3 control-label">Jenis Kelamin</label>
                  <div class="col-sm-5">
                  <input name="jk" class="minimal" type="radio" value="Laki-laki" checked> Laki-laki &nbsp;&nbsp;
                  <input name="jk" class="minimal" type="radio" value="Perempuan"> Perempuan
                  </div>
                </div>
                <br><br>
                   <div class="form-group">
                    <label class="col-sm-3 control-label">Agama</label>
                    <div class="col-sm-5">  
                    <select name="agama" class="form-control"><option> Pilih Agama</option>
                  <option name="agama" value="Islam"> Islam </option><option name="agama" value="Kristen Protestan"> Kristen Protestan </option>
                  <option name="agama" value="Kristen Katolik"> Kristen Katolik </option><option name="agama" value="Hindu"> Hindu </option>
                  <option name="agama" value="Budha"> Budha </option>
                  </select>
                    </div>
                  </div>
                <br><br>
              <div class="form-group">
                <label for="lastname" class="col-sm-3 control-label">Alamat</label>
                <div class="col-sm-9">
                  <input type="text" name="alamat" value="" class="form-control" placeholder="Alamat">
                </div>
              </div>
              <br>
              <div class="form-group">
                <label class="col-sm-3 control-label">Nomor HP</label>
                <div class="col-sm-5">
                  <input type="number" class="form-control"  name="no_hp" placeholder="08xx xxx xxxx">
                </div>
              </div>
              <br><br>
            <div class="form-group">
              <label class="col-sm-3 control-label">Email</label>
              <div class="col-sm-5">
                <input type="email" class="form-control"  name="email" placeholder="">
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