<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Passion+One:wght@700&family=Spartan:wght@400;600;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" type ="text/css" href="{{ asset('assets/css/style.css')}}">
  <link rel="stylesheet" type ="text/css" href="{{ asset('assets/css/style2.css')}}">
  <link rel="stylesheet" type ="text/css" href="{{ asset('assets/images')}}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
</head>
<body>
    @yield('header')
	<!-- bagian judul halaman blog -->
	  @yield('isi_page')
    @include('templates.footer')

</body>
</html>