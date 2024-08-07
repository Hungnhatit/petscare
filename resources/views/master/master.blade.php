<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PetsCare</title>
   <!-- Favicon -->
   <link href="img/favicon.ico" rel="icon">

   <!-- Google Web Fonts -->
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap" rel="stylesheet">

   <!-- Icon Font Stylesheet -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
   <link href="{{asset('lib/flaticon/font/flaticon.css')}}" rel="stylesheet">


   <!-- Libraries Stylesheet -->
   <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

   <!-- Customized Bootstrap Stylesheet -->
   <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

   <!-- Template Stylesheet -->
   <link href="{{asset('css/style.css')}}" rel="stylesheet">



   <!-- Dashboard Asset -->
   <link href="{{asset('dashboard_asset/css/custom.css')}}" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
   <style>
   </style>
</head>

<body>
   @include('master.header')

   @yield('content')


   <!-- JavaScript Libraries -->
   <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
   <script src="{{asset('lib/easing/easing.min.js')}}"></script>
   <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
   <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>

   <!-- Template Javascript -->
   <script src="{{asset('js/main.js')}}"></script>

   <script src="{{asset('dashboard_asset/js/jquery-3.3.1.slim.min.js')}}"></script>
   <script src="{{asset('dashboard_asset/js/popper.min.js')}}"></script>
   <script src="{{asset('dashboard_asset/js/bootstrap.min.js')}}"></script>
   <script src="{{asset('dashboard_asset/js/jquery-3.3.1.min.js')}}"></script>
   <script type="text/javascript">
      $(document).ready(function() {
         $(".xp-menubar").on('click', function() {
            $('#sidebar').toggleClass('active');
            $('#content').toggleClass('active');
         });

         $(".xp-menubar,.body-overlay").on('click', function() {
            $('#sidebar,.body-overlay').toggleClass('show-nav');
         });

      });
   </script>

</body>

</html>