<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>San Juan</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">

       
        <link rel="stylesheet" href="{{asset('plugins/morris/morris.css')}}">

        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/metismenu.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">

        <link href="https://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.min.css" rel="stylesheet"></link>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.10.2/jquery-ui.min.js"></script>



    </head>

    <body style="background-image: url('{{ asset('images/osci.png') }}')">

        <!-- Begin page -->

                <!-- Start content -->

                            @yield('contenido')
		                    
                


            


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        <!-- END wrapper -->
            

        <!-- jQuery  -->
        <!-- <script src="{{asset('js/jquery.min.js')}}"></script> -->
        <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('js/metisMenu.min.js')}}"></script>
        <script src="{{asset('js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('js/waves.min.js')}}"></script>

        <script src="{{asset('plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

        <!-- Peity JS -->
        <script src="{{asset('plugins/peity/jquery.peity.min.js')}}"></script>

        <script src="{{asset('plugins/morris/morris.min.js')}}"></script>
        <script src="{{asset('plugins/raphael/raphael-min.js')}}"></script>

        <script src="{{asset('pages/dashboard.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('js/app.js')}}"></script>
       
        <!-- <script>
  document.write(
    '<script src="http://' +
      (location.host || '${1:localhost}').split(':')[0] +
      ':${2:35729}/livereload.js?snipver=1"></' +
      'script>'
  );
</script> -->

    </body>

</html>