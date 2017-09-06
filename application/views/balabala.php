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
          <div class="col-lg-12">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      Data Assessment HCS
                  </div>
                  <div class="panel-heading">
                      <a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>index.php/admin">kembali</a>
                  </div>
                  <div class="page-content">
                    <div class="row">
                      <div class="col-xs-12">                                               
                        <table style="width:100%">
                          <thead>
                          <tr>
                              <th >NPP</th>
                              <th >Nama</th>
                              <th >Proyeksi</th>
                              <th >Tanggal Tes</th>

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
                              <th >Jumlah</th>
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
                                <th >Jumlah</th>
                                <th >% </th>
                                
                                <th >Ket</th>
                                <th >Hapus</th>
                            </tr>
                            </thead>
                            <tbody>
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
                                        <td><?= $res->ach + $res->ing + $res->cso + $res->cln + $res->bp + 
                                                $res->bac + $res->deci + $res->tl + $res->at + $res->co + 
                                                $res->imp + $res->init + $res->ct + $res->inf + $res->oc + 
                                                $res->oa + $res->iu + $res->tw ;?></td>
                                        <td>%</td>

                                        <td>
                                            <?=
                                                $res->grade
                                            ;?>
                                        </td>
                                        <td>
                                           <a class="btn btn-danger btn-sm" href="<?php echo base_url(); ?>index.php/admin/hapus_karyawan/<?php echo $res->id;?>" onclick="return confirm('hapus?');">
                                           <span class="glyphicon glyphicon-trash"></span>        
                                        </a> 
                                        </td>                                                
                                    </tr>
                              <?php }; ?>
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