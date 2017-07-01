<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UHBK - Ujian Harian Berbasis Komputer</title>

    <!-- Bootstrap Core CSS -->
    <link href="../resources/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../resources/assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../resources/assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../resources/assets/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../resources/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body onload="startTime()">

    <div id="wrapper">

        <!-- Navigation -->
        

        
            <div class="row">
            <br/>
            <br/>
            </div>
            <!-- /.row -->
           <div class="row">
                @yield('content')


           
        <!-- /#page-wrapper -->
        {{--<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation" style="margin-top: 0">--}}
            {{--<ul class="nav navbar-top-links navbar-left">--}}
                {{--<li class="navbar-text">--}}
                    {{--Hazira Fakhrurrozi Amir <i class="fa fa-copyright"></i> 2017--}}
                {{--</li>--}}
                {{--<li class="navbar-top-links">--}}
                    {{----}}
                {{--</li>--}}
                {{--<li class="navbar-top-links">--}}
                    {{----}}
                {{--</li>--}}

            {{--</ul>--}}



        {{--</nav>--}}
        </div>
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../resources/assets/vendor/jquery/jquery.min.js"></script>


    <!-- Bootstrap Core JavaScript -->
    <script src="../resources/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Custom Theme JavaScript -->
        <script src="../resources/assets/dist/js/sb-admin-2.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <!-- Metis Menu Plugin JavaScript -->
    <script src="../resources/assets//vendor/metisMenu/metisMenu.min.js"></script>
    <!-- Laravel File manager -->
    <script src="/vendor/unisharp/laravel-filemanager/public/js/lfm.js"></script>
     <script>
        $('#lfm').filemanager('image');
     </script>
    <!-- TinyMCE -->
        <script src="../resources/assets/tinymce/js/tinymce/tinymce.min.js"></script>
        <script>
  var editor_config = {
    path_absolute : "{{ URL('/') }}",
    selector: "textarea.my-editor",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
          var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
          var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

          var cmsURL = editor_config.path_absolute + '/laravel-filemanager?field_name=' + field_name;
          if (type == 'image') {
            cmsURL = cmsURL + "&type=Images";
          } else {
            cmsURL = cmsURL + "&type=Files";
          }

          tinyMCE.activeEditor.windowManager.open({
            file : cmsURL,
            title : 'Filemanager',
            width : x * 0.8,
            height : y * 0.8,
            resizable : "yes",
            close_previous : "no"
          });
        }
  };

  tinymce.init(editor_config);
</script>


    <!-- Morris Charts JavaScript -->
    <script src="../resources/assets/vendor/raphael/raphael.min.js"></script>
    <script src="../resources/assets/vendor/morrisjs/morris.min.js"></script>
    <script src="../resources/assets/data/morris-data.js"></script>


    <!-- Navbar Time -->
    <script src='../resources/assets/js/time.js'></script>

</body>

</html>
