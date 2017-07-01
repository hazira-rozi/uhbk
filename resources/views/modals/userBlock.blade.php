<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UHBK - Ujian Harian Berbasis Komputer</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="../assets/images/icon/favicon.png" >
    <!-- Bootstrap Core CSS -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    

    <!-- Morris Charts CSS -->
    

    <!-- Custom Fonts -->
    <link href="../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/datetime/css/bootstrap-datetimepicker.min.css" rel="stylesheet">

    
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        
        <div class="row">
            <div class="modal fade" id="modalUserBlock" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                            <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Blokir Pengguna</h4>
                            </div>
                            <div class="modal-body">
                            <p>Apakah anda yakin untuk memblokir pengguna {{$user->fullname}}</p>
                            </div>
                            <div class="modal-footer">
                            <a href="{{URL('user/block/'.$user->name)}}" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-lock"></i> Block</a>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        </div>
                        
                        </div>
                    </div>
                </div>
        </div>

        </div>
        
        
        {{--</nav>--}}
        </div>
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    
    
</body>

</html>
