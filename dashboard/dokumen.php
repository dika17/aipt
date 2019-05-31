<?php    include"header.php" 

?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->
    <?php
          $id_butir = $_GET['q'];
                   $sql="select 
                            b.butir,
                            b.elemen_penilaian,
                            a.pemilik,
                            a.nama_dokumen,
                            a.status,
                            a.id id_dokumen,
							a.tipe_dokumen tipe_dokumen,
							a.deleted_at

                          from tdokumen a join mbutir b on a.butir=b.id
                          where a.butir = '$id_butir' AND a.deleted_at IS NULL order by id_dokumen ASC
                          ";
                   $select_borang=mysqli_query($koneksi,$sql);
                   $data_borang = mysqli_fetch_array($select_borang);
    ?>
    
    <section class="content-header" width="12px">
      <h1>
        DASHBOARD DOKUMEN PERGURUAN TINGGI
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="http://upj.ac.id"><i class=""></i>UPJ</a></li>
        <li><a href="http://lpmu.upj.ac.id">LPMU</a></li>
        <li class="active"><a href="index.php">Borang</a></li>
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
                     where a.butir = '$id_butir'
                     AND a.tipe_dokumen = 'Dokumen Wajib'
                     AND status = 'OK' 
                     AND a.deleted_at IS NULL
                     ";
              $sel_prst_w=mysqli_query($koneksi,$prst_w);
              $data_prst_w = mysqli_fetch_array($sel_prst_w);
                   $dokwajib="select count(a.id) as jml
                          from tdokumen a join mbutir b on a.butir=b.id
                          where a.butir = '$id_butir'
                          AND a.tipe_dokumen = 'Dokumen Wajib'
                          AND status = 'OK' 
                          AND a.deleted_at IS NULL
                          ";
              $sel_dok_wajib=mysqli_query($koneksi,$dokwajib);
              $data_dok_wajib = mysqli_fetch_array($sel_dok_wajib);
              $prst_wajib="select count(a.id) as jml
                          from tdokumen a join mbutir b on a.butir=b.id
                          where a.butir = '$id_butir'
                          AND a.tipe_dokumen = 'Dokumen Wajib'
                          AND a.status = 'Ok' 
                          AND a.deleted_at IS NULL
                          ";
              $sel_prst_wajib=mysqli_query($koneksi,$prst_wajib);
              $data_prst_wajib = mysqli_fetch_array($sel_prst_wajib);
              ?>
              <span class="info-box-number"><?php echo $data_dok_wajib['jml'];?></span>

              <div class="progress">
                <div class="progress-bar" style="width: <?php echo $data_dok_wajib['jml']/$data_prst_w['prst']*100;?>%%"></div>
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

            <div class="info-box-content">
              <span class="info-box-text">Dokumen Pendukung</span>
              <?php
              $prst_p="select count(a.id) as prst
                     from tdokumen a join mbutir b on a.butir=b.id
                     where a.butir = '$id_butir'
                     AND a.tipe_dokumen = 'Dokumen Pendukung'
                     AND status = 'OK' 
                     AND a.deleted_at IS NULL
                     ";
              $sel_prst_p=mysqli_query($koneksi,$prst_p);
              $data_prst_p = mysqli_fetch_array($sel_prst_p);
              $dokpendukung="select count(a.id) as jml
                          from tdokumen a join mbutir b on a.butir=b.id
                          where a.butir = '$id_butir'
                          AND a.tipe_dokumen = 'Dokumen Pendukung'
                          AND status = 'OK' 
                          AND a.deleted_at IS NULL
                          ";
              $sel_dok_pendukung=mysqli_query($koneksi,$dokpendukung);
              $data_dok_pendukung = mysqli_fetch_array($sel_dok_pendukung);
              $prst_pendukung="select count(a.id) as jml
                          from tdokumen a join mbutir b on a.butir=b.id
                          where a.butir = '$id_butir'
                          AND a.tipe_dokumen = 'Dokumen Pendukung'
                          AND a.status = 'Ok' 
                          AND a.deleted_at IS NULL
                          ";
              $sel_prst_pendukung=mysqli_query($koneksi,$prst_pendukung);
              $data_prst_pendukung = mysqli_fetch_array($sel_prst_pendukung);
              ?>
              <span class="info-box-number"><?php echo $data_dok_pendukung['jml'];?></span>

              <div class="progress">
                <div class="progress-bar" style="width:<?php echo $data_dok_pendukung['jml']/$data_prst_w['prst']*100;?>%"></div>
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

              <h3 class="box-title"><strong>Dokumen <?php echo $data_borang['butir'];?></strong> </h3><br>
              <h4 class="box-title">Dokumen <?php echo $data_borang['elemen_penilaian'];?> </h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th><center>No</center></th>
                  <th><center>Pemilik Dokumen</center></th>
                  <th><center>Nama Dokumen</center></th>
                  <th><center>Jenis Dokumen</center></th>
                  <th><center>Status Dokumen</center></th>
                  <th><center>Download Dokumen</center></th>
                  
                </tr>
                </thead>
                <tbody>
                <?php
                $no =1;
                do {
                ?>
                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $data_borang['pemilik'];?></td>
                  <td><?php echo $data_borang['nama_dokumen'];?></td>
                  <td><?php echo $data_borang['tipe_dokumen'];?></td>
                  <td align="center"><?php echo $data_borang['status'];?></td>
                  <td><a class="btn btn-app" target = '_blank' href="http://upj.id:100/admin/tdokumen15/detail/<?php echo $data_borang['id_dokumen'];?>?return_url=http%3A%2F%2Fupj.id%3A100%2Fadmin%2Ftdokumen">
                  <i class="fa fa-download"> </i>
                  
              </a></td>
                  
                </tr>
                <?php $no++;} while($data_borang = mysqli_fetch_array($select_borang));

                  ?> 
                
                            
                
                </tbody>
                <tfoot>
                <tr>
                <th><center>No</center></th>
                  <th><center>Pemilik Dokumen</center></th>
                  <th><center>Nama Dokumen</center></th>
                  <th><center>Jenis Dokumen</center></th>
                  <th><center>Status Dokumen</center></th>
                  <th><center>Download Dokumen</center></th
                  
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