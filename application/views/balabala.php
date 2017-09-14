<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jasamarga - HCS</title>

    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fonts.googleapis.com.css" />
    
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/datatables/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ace-skins.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ace-rtl.min.css" />
    <link rel="icon" href="<?php echo base_url(); ?>assets/logo.png" >
    
    <style>
        .table-striped>tbody>tr:nth-child(odd)>td, 
        .table-striped>tbody>tr:nth-child(odd)>th {
            background-color: #c6dcff; 
        }
    </style>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/jquery/jquery.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/datatables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/datatables/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/dataTables.select.min.js"></script>

    <script src="<?php echo base_url(); ?>assets//js/ace-elements.min.js"></script>
    <script src="<?php echo base_url(); ?>assets//js/ace.min.js"></script>

  </head>
  <body>

    <nav class="navbar navbar-inverse" >
  <div class="container-fluid" >
    <div class="navbar-header">
      <div class="navbar-brand" >Jasamarga</div>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">admin
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url();?>index.php/login/logout">log out</a></li>
        </ul>
      </li>      

    </ul>
  </div>
</nav>
	<div id="page-wrapper">
      <div class="row">
          <div class="col-lg-12" style="padding-right: 0" >
              <div class="panel panel-default">
                  <div class="panel-heading">
                      Data Assessment HCS
                  </div>
                  <div class="panel-heading">
                      <a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>index.php/admin">kembali</a>
                  </div>

                  <!-- <div class="panel-heading">
                        <form action="<?php echo base_url(); ?>index.php/admin/upload_jabatan" method="post" enctype="multipart/form-data">
                            <div class="form-group has-feedback">
                                <label style = "margin-left :20px" for="file">Upload File</label>
                                <input style = "margin-left :20px" type="file" name="file">                             
                            </div>
                            <div class="row">
                                <div class="col-xs-4">
                                   <button style="margin-left :20px" type="submit" class="btn btn-primary btn-sm">Upload</button>
                                </div>
                            </div>
                        </form>
                    </div> -->

                  <div class="page-content">
                    <div class="row">
                      <div class="col-xs-12">                                               
                        <table >
                          <thead>
                          <tr>
                              <th width="4%">NPP</th>
                              <th width="10%">Nama</th>
                              <th width="5%">Proyeksi</th>
                              <th width="7%">Tanggal Tes</th>

                              <th width="4%">ACH</th>
                              <th width="4%">ING</th>
                              <th width="4%">CSO</th>
                              <th width="4%">CLN</th>
                              <th width="4%">BP</th>

                              <th width="4%">BAC</th>
                              <th width="4%">DEC</th>
                              <th width="4%">TL</th>
                              <th width="4%">AT</th>
                              <th width="4%">CO</th>

                              <th width="4%">IMP</th>
                              <th width="4%">INT</th>
                              <th width="4%">CT</th>
                              <th width="4%">INF</th>
                              <th width="4%">OC</th>

                              <th width="4%">OA</th>
                              <th width="4%">IU</th>
                              <th width="4%">TW</th>
                              <th width="4%">Jumlah</th>
                          </tr>
                          </thead>
                          <tr>
                            <?php foreach($data as $res){?>
                              <td><?= $res->npp;?></td>
                              <td><?= $res->nama;?></td>
                              <td><?= $res->proyeksi;?></td>
                              <td><?= $res->tanggal;?></td>

                              <td><?= $res->ach;?></td>
                              <td><?= $res->ing;?></td>
                              <td><?= $res->cso;?></td>
                              <td><?= $res->cln;?></td>
                              <td><?= $res->bp;?></td>

                              <td><?= $res->bac;?></td>
                              <td><?= $res->deci;?></td>
                              <td><?= $res->tl;?></td>
                              <td><?= $res->at;?></td>
                              <td><?= $res->co;?></td>

                              <td><?= $res->imp;?></td>
                              <td><?= $res->init;?></td>
                              <td><?= $res->ct;?></td>
                              <td><?= $res->inf;?></td>
                              <td><?= $res->oc;?></td>

                              <td><?= $res->oa;?></td>
                              <td><?= $res->iu;?></td>
                              <td><?= $res->tw;?></td>
                              <td><?= $res->ach + $res->ing + $res->cso + $res->cln + $res->bp + 
                                      $res->bac + $res->deci + $res->tl + $res->at + $res->co + 
                                      $res->imp + $res->init + $res->ct + $res->inf + $res->oc + 
                                      $res->oa + $res->iu + $res->tw ;?></td>
                            <?php }?>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                  
                  <div class="page-content">
                    <div class="row">
                      <div class="col-xs-12">                                               
                        <table id="table_jabatan" class="table table-striped table-hover">
                          <thead>
                            <tr>
                                <th >No</th>
                                <th >Grade</th>
                                <th >Kel Jabatan</th>
                                <th >Jabatan/Kandidat</th>
                                <th >Kel Kompetensi</th>

                                <th >ACH</th>
                                <th >ING</th>
                                <th >CSO</th>
                                <th >CLN</th>
                                <th >BP</th>

                                <th >BAC</th>
                                <th >DEC</th>
                                <th >TL</th>
                                <th >AT</th>
                                <th >CO</th>

                                <th >IMP</th>
                                <th >INT</th> 
                                <th >CT</th>
                                <th >INF</th>
                                <th >OC</th>

                                <th >OA</th>
                                <th >IU</th>
                                <th >TW</th>
                                <!-- <th >Jumlah</th>
                                <th >jum</th> -->

                                <th >% </th>
                                <th >Ket</th>
                                <!-- <th >Hapus</th> -->
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($data as $res2){?>
                              <?php 
                                  $i = 0;
                                  foreach ($jabatan as $res) {?>
                                      <?php $i = $i+1; ?>    
                                      <tr>
                                          <td><?= $i ?></td>
                                          <td><?= $res->grade;?></td>
                                          <td><?= $res->cluster;?></td>
                                          <td><?= $res->jabatan;?></td>
                                          <td><?= $res->kelompok;?></td>

                                          <td><?= $res->ach;?></td>
                                          <td><?= $res->ing;?></td>
                                          <td><?= $res->cso;?></td>
                                          <td><?= $res->cln;?></td>
                                          <td><?= $res->bp;?></td>

                                          <td><?= $res->bac;?></td>
                                          <td><?= $res->deci;?></td>
                                          <td><?= $res->tl;?></td>
                                          <td><?= $res->at;?></td>
                                          <td><?= $res->co;?></td>

                                          <td><?= $res->imp;?></td>
                                          <td><?= $res->init;?></td>
                                          <td><?= $res->ct;?></td>
                                          <td><?= $res->inf;?></td>
                                          <td><?= $res->oc;?></td>

                                          <td><?= $res->oa;?></td>
                                          <td><?= $res->iu;?></td>
                                          <td><?= $res->tw;?></td>
                                          <!-- <td><?= $jumlah = $res->ach + $res->ing + $res->cso + $res->cln + $res->bp + 
                                                  $res->bac + $res->deci + $res->tl + $res->at + $res->co + 
                                                  $res->imp + $res->init + $res->ct + $res->inf + $res->oc + 
                                                  $res->oa + $res->iu + $res->tw ;?>
                                          </td> -->
                                          <?php 
                                          if($res->ach == '0'){
                                            $ach = 0;
                                          }else{
                                            $ach = $res2->ach;
                                          } 

                                          if($res->ing == '0'){
                                            $ing = 0;
                                          }else{
                                            $ing = $res2->ing;
                                          } 

                                          if($res->cso == '0'){
                                            $cso = 0;
                                          }else{
                                            $cso = $res2->cso;
                                          } 

                                          if($res->cln == '0'){
                                            $cln = 0;
                                          }else{
                                            $cln = $res2->cln;
                                          } 

                                          if($res->bp == '0'){
                                            $bp = 0;
                                          }else{
                                            $bp = $res2->bp;
                                          }

                                          if($res->bac == '0'){
                                            $bac = 0;
                                          }else{
                                            $bac = $res2->bac;
                                          } 

                                          if($res->deci == '0'){
                                            $deci = 0;
                                          }else{
                                            $deci = $res2->deci;
                                          } 

                                          if($res->tl == '0'){
                                            $tl = 0;
                                          }else{
                                            $tl = $res2->tl;
                                          }  

                                          if($res->at == '0'){
                                            $at = 0;
                                          }else{
                                            $at = $res2->at;
                                          } 

                                          if($res->co == '0'){
                                            $co = 0;
                                          }else{
                                            $co = $res2->co;
                                          } 

                                          if($res->imp == '0'){
                                            $imp = 0;
                                          }else{
                                            $imp = $res2->imp;
                                          } 

                                          if($res->init == '0'){
                                            $init = 0;
                                          }else{
                                            $init = $res2->init;
                                          } 

                                          if($res->ct == '0'){
                                            $ct = 0;
                                          }else{
                                            $ct = $res2->ct;
                                          } 

                                          if($res->inf == '0'){
                                            $inf = 0;
                                          }else{
                                            $inf = $res2->inf;
                                          } 

                                          if($res->oc == '0'){
                                            $oc = 0;
                                          }else{
                                            $oc = $res2->oc;
                                          } 

                                          if($res->oa == '0'){
                                            $oa = 0;
                                          }else{
                                            $oa = $res2->oa;
                                          } 

                                          if($res->iu == '0'){
                                            $iu = 0;
                                          }else{
                                            $iu = $res2->iu;
                                          } 

                                          if($res->tw== '0'){
                                            $tw = 0;
                                          }else{
                                            $tw = $res2->tw;
                                          } 

                                          $jml= $ach + $ing + $cso + $cln + $bp + 
                                                  $bac + $deci + $tl + $at + $co + 
                                                  $imp + $init + $ct + $inf + $oc + 
                                                  $oa + $iu + $tw;

                                          $persen= ($jml/$jumlah)*100;         

                                            ?>
                                          <!-- <td><?= $jml ;?></td> -->
                                          <td><?= number_format($persen, 2);?> %</td>

                                          <td><?php 
                                              if($persen>=100){
                                                echo"SD";
                                              }elseif($persen>=70 && $persen<100){
                                                echo "SD";
                                              }elseif ($persen>=60 && $persen<70) {
                                                echo "SDC";
                                              }elseif ($persen>=50 && $persen<60) {
                                                echo "BSD";
                                              }else{
                                                echo "TSD";
                                              }
                                          ?></td>
                                          <!-- <td>
                                             <a class="btn btn-danger btn-sm" href="<?php echo base_url(); ?>index.php/admin/hapus_karyawan/<?php echo $res->id;?>" onclick="return confirm('hapus?');">
                                             <span class="glyphicon glyphicon-trash"></span>        
                                          </a> 
                                          </td> -->                                                
                                      </tr>
                                <?php }; ?>
                              <?php }?>
                          </tbody>
                          </table>
                      </div>
                    </div>
                  </div>
                  <div class="page-content">
                    <div class="row">
                      <div class="col-xs-12">
                          <table border="1" style="width: 30%">
                              <thead>
                                <tr>
                                    <th> &nbsp Persentase</th>
                                    <th> &nbsp Keterangan</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                    <th> &nbsp 100 %</th>
                                    <th> &nbsp SD (Siap Ditempatkan)</th>
                                </tr>
                                <tr>
                                    <th> &nbsp 70 % - 99%</th>
                                    <th> &nbsp SD (Siap Ditempatkan)</th>
                                </tr>
                                <tr>
                                    <th> &nbsp 60 % - 69%</th>
                                    <th> &nbsp SDC (Siap Ditempatkan dengan Catatan)</th>
                                </tr>
                                <tr>
                                    <th> &nbsp 50 % - 59%</th>
                                    <th> &nbsp BSD (Belum Siap Ditempatkan)</th>
                                </tr>
                                <tr>
                                    <th> &nbsp kurang 50 %</th>
                                    <th> &nbsp TSD (Tidak Siap Ditempatkan)</th>
                                </tr>
                              </tbody>
                          </table>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  </body>

  <script type="text/javascript">
      $(document).ready(function() {
          $('#table_jabatan').dataTable({
              "sScrollX": "100%",
              "sScrollXInner": "200%",  
           });
      } );
  </script>
</html>