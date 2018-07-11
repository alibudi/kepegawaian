
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
          <form method="POST" action="#">
          <div class="box-body">
          <div class="form-group">
                <label for="kategori" class="col-sm-3 control-label">NIP</label>
                <div class="col-sm-9">
                  <input type="text" id="id_jabatan" name="id_jabatan" class="form-control" placeholder="">
                </div> 
              </div>
            <br>
            <br>
              <div class="form-group">
                <label for="kategori" class="col-sm-3 control-label">Nama Pegawai</label>
                <div class="col-sm-9">
                  <input type="text" id="jabatan" name="jabatan" class="form-control" placeholder="">
                </div>
              </div>
            <br>
            <br>
            <div class="form-group">
                <label for="kategori" class="col-sm-3 control-label">NO Sk</label>
                <div class="col-sm-9">
                  <input type="text" id="jabatan" name="jabatan" class="form-control" placeholder="">
                </div>
              </div>
            <br>
            <br>
            <div class="form-group">
                <label for="kategori" class="col-sm-3 control-label">Tanggal SK</label>
                <div class="col-sm-9">
                  <input type="text" id="jabatan" name="jabatan" class="form-control" placeholder="">
                </div>
              </div>
            <br>
            <br>
            <div class="form-group">
                <label for="kategori" class="col-sm-3 control-label">Unit Kerja</label>
                <div class="col-sm-9">
                  <input type="text" id="jabatan" name="jabatan" class="form-control" placeholder="">
                </div>
              </div>
            <br>
            <br>
            <div class="form-group">
                <label for="kategori" class="col-sm-3 control-label">Jabatan / Gaji</label>
                <div class="col-sm-9">
                  <input type="text" id="jabatan" name="jabatan" class="form-control" placeholder="">
                </div>
              </div>
            <br>
            <br>
            <div class="form-group">
                <label for="kategori" class="col-sm-3 control-label">Lokasi Kerja</label>
                <div class="col-sm-9">
                  <input type="text" id="jabatan" name="jabatan" class="form-control" placeholder="">
                </div>
              </div>
            <br>
            <br>
           <div class="col-md-6">
          <div class="box box-solid box-primary">
           <div class="box-header">
             <h3 class="btn btn disabled box-title">
               <i class="glyphicon glyphicon-briefcase"></i> SK Kerja Baru </h3>
                <a class="btn btn-default btn-sm pull-right" data-widget='collapse' data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                 <i class="fa fa-minus"></i></a>
          </div>
<?php
  $hasil = mysql_query("SELECT max(no_sk) as terakhir from sk_krj"); $data = mysql_fetch_array($hasil);
  $lastID = $data['terakhir']; $lastNoUrut = substr($lastID,13, 20); $nextNoUrut = $lastNoUrut + 1;
  $nextID = "SK/ZT/".date('m/y')."/".sprintf("%05s",$nextNoUrut);
?>
            <div class="box-body">
          <div class="form-group">
              <label class="col-sm-4 control-label">Nomor SK Pegawai</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" data-toggle="tooltip" title="Nomor SK Baru" value="<?php echo $nextID; ?>"required="required" name="no_sk">
              </div></div>
          <div class="form-group">
              <label class="col-sm-4 control-label">Tgl. SK</label>
              <div>
            <div class="col-sm-7">
              <div class="input-group">
            <div class="input-group-addon">
                      <i class="fa fa-calendar"> </i>
              </div>
                <input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" required="required" name="tgl_sk">
            </div></div></div></div>  
              <div class="form-group">
              <label class="col-sm-4 control-label">Unit Kerja</label>
              <div class="col-sm-7">
        <select name="unit_krj" class="form-control">
        <option value=" "> -- Pilih Unit Kerja -- </option>
        <?php $q = mysql_query ("select * from unit_krj");
        while ($k = mysql_fetch_array($q)){ ?>
        <option value="<?php echo $k['id_unit_krj']; ?>" 
        <?php (@$h['unit_krj']==$k['unit_krj'])?print(" "):print(""); ?>  > <?php echo $k['id_unit_krj']; echo " / ".$k['nm_unit_krj']; ?>
        </option> <?php } ?>
        </select>
          </div></div>  
          <div class="form-group">
            <label class="col-sm-4 control-label">Jabatan</label>
            <div class="col-sm-7">  
        <select name="jabatan" class="form-control">
        <option value=" "> -- Pilih Jabatan -- </option>
        <?php $q = mysql_query ("select * from jabatan");
        while ($k = mysql_fetch_array($q)){ ?>
        <option value="<?php echo $k['id_jabatan']; ?>" 
        <?php (@$h['jabatan']==$k['jabatan'])?print(" "):print(""); ?>  > <?php echo $k['id_jabatan']; echo " / ".$k['nm_jabatan']; ?>
        </option> <?php } ?>
        </select>
            </div></div>  
          <div class="form-group">
            <label class="col-sm-4 control-label">Pangkat</label>
            <div class="col-sm-7">
        <select name="pangkat" class="form-control">
        <option value=" "> -- Pilih pangkat -- </option>
        <?php $q = mysql_query ("select * from pangkat");
        while ($k = mysql_fetch_array($q)){ ?>
        <option value="<?php echo $k['id_pangkat']; ?>" 
        <?php (@$h['pangkat']==$k['pangkat'])?print(" "):print(""); ?>  > <?php echo $k['nm_pangkat']." / Rp ".format_angka($k['gaji']); ?>
        </option> <?php } ?>
        </select>
          </div></div>  
          <div class="form-group">
            <label class="col-sm-4 control-label">Lokasi</label>
            <div class="col-sm-7">
        <select name="lokasi" class="form-control">
        <option value=" "> -- Pilih lokasi -- </option>
        <?php $q = mysql_query ("select * from lokasi_krj");
        while ($k = mysql_fetch_array($q)){ ?>
        <option value="<?php echo $k['id_lokasi']; ?>" 
        <?php (@$h['lokasi']==$k['lokasi'])?print(" "):print(""); ?>  > <?php echo $k['id_lokasi']; echo " / ".$k['nm_lokasi']; ?>
        </option> <?php } ?>
        </select>
            </div></div>    
        </div></div>  
        <div class="form-group">
            <label class="col-sm-4"></label>
            <div class="col-sm-5">
          <hr/>
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-2">
                  <button type="submit" name="submit" value="submit" class="btn btn-success">Simpan</button>
                </div>
              </div>
            </form>    
          </div>
   <!-- /.box-body -->
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>