<?php    include"header.php" ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header" width="12px">
      <h1>
        <a href="http://upj.id/aipt">DASHBOARD DOKUMEN PERGURUAN TINGGI
        <small></small></a>
      </h1>
      <ol class="breadcrumb">
        <li><a href="http://upj.ac.id"><i class=""></i>UPJ</a></li>
        <li><a href="http://lpmu.upj.ac.id">LPMU</a></li>
        <li class="active"><a href="index.php">Dokumen</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">


 <div class="box box-default">
 <!-- /.col -->
                <div class="col-md-12">
                  <p class="text-center">
                    <strong>Ketercapaian</strong>
                  </p>

                
                 <div class="col-md-12">
          <!-- Info Boxes Style 2 -->

          <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>
          <div class="info-box-content">
              <span class="info-box-text">Dokumen Wajib</span>
              <?php
              $prst_w="select count(a.id) as prst
                     from tdokumen a join mbutir b on a.butir=b.id
                     where a.tipe_dokumen = 'Dokumen Wajib'
                     AND status = 'OK' 
                     AND a.deleted_at IS NULL
                     ";
              $sel_prst_w=mysqli_query($koneksi,$prst_w);
              $data_prst_w = mysqli_fetch_array($sel_prst_w);
                   $dokwajib="select count(a.id) as jml
                          from tdokumen a join mbutir b on a.butir=b.id
                          where a.tipe_dokumen = 'Dokumen Wajib'
                          AND status = 'OK' 
                          AND a.deleted_at IS NULL
                          ";
              $sel_dok_wajib=mysqli_query($koneksi,$dokwajib);
              $data_dok_wajib = mysqli_fetch_array($sel_dok_wajib);
              $prst_wajib="select count(a.id) as jml
                          from tdokumen a join mbutir b on a.butir=b.id
                          where a.tipe_dokumen = 'Dokumen Wajib'
                          AND a.status = 'Ok' 
                          AND a.deleted_at IS NULL
                          ";
              $sel_prst_wajib=mysqli_query($koneksi,$prst_wajib);
              $data_prst_wajib = mysqli_fetch_array($sel_prst_wajib);
              ?>
              <span class="info-box-number"><?php echo $data_dok_wajib['jml'];?></span>

              <div class="progress">
                <div class="progress-bar" style="width: <?php echo $data_dok_wajib['jml']/$data_prst_w['prst']*100;?>%"></div>
              </div>
              <span class="progress-description">
              <?php echo $data_dok_wajib['jml']/$data_prst_w['prst']*100;?>% Dokumen Tersedia
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          <div class="info-box bg-green">
            <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>
            <?php
              $prst_p="select count(a.id) as prst
                     from tdokumen a join mbutir b on a.butir=b.id
                     where a.tipe_dokumen = 'Dokumen Pendukung'
                     AND status = 'OK' 
                     AND a.deleted_at IS NULL
                     ";
              $sel_prst_p=mysqli_query($koneksi,$prst_p);
              $data_prst_p = mysqli_fetch_array($sel_prst_p);
              $dokpendukung="select count(a.id) as jml
                          from tdokumen a join mbutir b on a.butir=b.id
                          where a.tipe_dokumen = 'Dokumen Pendukung'
                          AND status = 'OK' 
                          AND a.deleted_at IS NULL
                          ";
              $sel_dok_pendukung=mysqli_query($koneksi,$dokpendukung);
              $data_dok_pendukung = mysqli_fetch_array($sel_dok_pendukung);
              $prst_pendukung="select count(a.id) as jml
                          from tdokumen a join mbutir b on a.butir=b.id
                          where a.tipe_dokumen = 'Dokumen Pendukung'
                          AND a.status = 'Ok' 
                          AND a.deleted_at IS NULL
                          ";
              $sel_prst_pendukung=mysqli_query($koneksi,$prst_pendukung);
              $data_prst_pendukung = mysqli_fetch_array($sel_prst_pendukung);
              ?>
            <div class="info-box-content">
              <span class="info-box-text">Dokumen Pendukung</span>
 
              <span class="info-box-number"><?php echo $data_dok_pendukung['jml'];?></span>

              <div class="progress">
                <div class="progress-bar" style="<?php echo $data_dok_pendukung['jml']/$data_prst_w['prst']*100;?>%"></div>
              </div>
              <span class="progress-description">
              <?php echo $data_dok_pendukung['jml']/$data_prst_p['prst']*100;?>% Dokumen Tersedia
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>

                  </div>
                  <!-- /.progress-group -->


                </div>

                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>

            <!-- /.footer -->
          </div>
          <!-- /.box -->
          </div>
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">List Borang</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th><center>Butir</center></th>
                  <th><center>Elemen Penilaian</center></th>
                  <th><center>Baku Mutu </center></th>
                  <th><center>Persentase</center></th>
                  <th><center>Rincian Dokumen</center></th>
                  
                </tr>
                </thead>
                <tbody>
                <?php
                   $sql= "select id id_butir,
                            butir,
                            elemen_penilaian,
                            baku_mutu
                          from mbutir where deleted_at IS NULL order by butir";
                   $select_borang=mysqli_query($koneksi,$sql);
                   $data_borang = mysqli_fetch_array($select_borang);
                do {
                ?>
                <tr>
                  <td><?php echo $data_borang['butir'];?></td>
                  <td><?php echo $data_borang['elemen_penilaian'];?></td>
                  <td><?php echo $data_borang['baku_mutu'];?></td>
                  <td align="center"><div class="progress sm">
                  <?php
              $prst_="select count(a.id) as prst
                     from tdokumen a join mbutir b on a.butir=b.id
                     where a.butir = '$data_borang[id_butir]'
                      
                     AND a.deleted_at IS NULL
                     ";
              $sel_prst_=mysqli_query($koneksi,$prst_);
              $data_prst_ = mysqli_fetch_array($sel_prst_);
              $dokok="select count(a.id) as jml
                          from tdokumen a join mbutir b on a.butir=b.id
                          where a.butir = '$data_borang[id_butir]'
                          AND status = 'OK' 
                          AND a.deleted_at IS NULL
                          ";
              $sel_dok_ok=mysqli_query($koneksi,$dokok);
              $data_dok_ok = mysqli_fetch_array($sel_dok_ok);
              ?>

                      <div class="progress-bar progress-bar-blue" style="width: 
                      <?php 
                      if ($data_prst_!=0) {
                        $hasil=$data_dok_ok['jml']/$data_prst_['prst']*100;
                      } else {$hasil='0';}
                        echo $hasil;
                      ?>%"></div>
                      </div>
                      <span class="progress-description">
                      <?php echo $hasil;?>%</span>
                  </td>
                  <td><a class="btn btn-app" href="dokumen.php?&q=<?php echo $data_borang['id_butir'];?>">
                        <i class="fa fa-inbox"></i>Detail <?php echo $data_borang['butir'];?> 
                      </a>
                  </td>
                  
                </tr>
                <?php } while($data_borang = mysqli_fetch_array($select_borang)); 
                ?>
                            
                
                </tbody>
                <tfoot>
                <tr>
                <th><center>Butir</center></th>
                  <th><center>Elemen Penilaian</center></th>
                  <th><center>Baku Mutu </center></th>
                  <th><center>Persentase</center></th>
                  <th><center>Rincian Dokumen</center></th>
                  
                </tr>
                </tfoot>
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
  </div>
  <!-- /.content-wrapper -->
  
  <?php    include"footer.php" ?>