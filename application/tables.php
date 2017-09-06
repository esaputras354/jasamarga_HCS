<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jasamarga - HCS</title>

    <!-- Bootstrap Core CSS -->
    <link href="../assessment/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../assessment/assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../assessment/assets/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../assessment/assets/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../assessment/assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../assessment/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h2 class="navbar-brand" style="color:red; font-size: 50px;">Text</h2>
            </div>
            <!-- /.navbar-header -->

            
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    
                </div>
                <!-- /.sidebar-collapse -->
            </div>           
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-18">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Assessment HCS
                        </div>
                        <div class="panel-heading">
                            <form action="<?php echo base_url(); ?>index.php/admin/upload_db" method="post" enctype="multipart/form-data">
                                    <div class="form-group has-feedback">
                                      <label for="file">Upload File</label>
                                      <input type="file" name="file">
                                      
                                    </div>
                                    <div class="row">
                                      <div class="col-xs-4">
                                        <button type="submit" class="btn btn-success">Upload</button>
                                      </div><!-- /.col -->
                                    </div>
                                </form>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th >No</th>
                                        <th >NPP</th>
                                        <th >Nama</th>
                                        <th >Proyeksi</th>
                                        <th >Tanggal Tes</th>

                                        <th >Integrity</th>
                                        <th >Enthusiastic</th>
                                        <th >Innovation and Creativity</th>
                                        <th >Building Business Partnership</th>
                                        <th >Business Acumen</th>

                                        <th >Customer Focus</th>
                                        <th >Strategic Orientation</th>
                                        <th >Driving Execution</th>
                                        <th >Visionary Leadership</th>
                                        <th >Aligning Performance For Success</th>

                                        <th >Change Leadership</th>
                                        <th >Enpowering</th>
                                        <th >Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $i = 0;
                                        foreach ($result as $res) { ?>
                                            <?php $i = $i+1; ?>    
                                            <tr>
                                                <td><?= $i ?></td>
                                                <td><?= $res->npp;?></td>
                                                <td><?= $res->nama;?></td>
                                                <td><?= $res->proyeksi;?></td>
                                                <td><?= $res->tanggal;?></td>
                                                <td><?= $res->integrity;?></td>
                                                <td><?= $res->enthusiastic;?></td>
                                                <td><?= $res->innovation;?></td>
                                                <td><?= $res->building;?></td>
                                                <td><?= $res->business;?></td>
                                                <td><?= $res->customer;?></td>
                                                <td><?= $res->strategic;?></td>
                                                <td><?= $res->driving;?></td>
                                                <td><?= $res->visionary;?></td>
                                                <td><?= $res->aligning;?></td>
                                                <td><?= $res->leadership;?></td>
                                                <td><?= $res->enpowering;?></td>
                                                <td><?= $res->jumlah;?></td>
                                                <td></td>
                                            </tr>
                                        <?php }; ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../assessment/assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../assessment/assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../assessment/assets/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../assessment/assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../assessment/assets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../assessment/assets/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../assessment/assets/dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            
            responsive: true,
            "sScrollX": "100%",
            "sScrollXInner": "200%",

        });
    });
    </script>

</body>

</html>
