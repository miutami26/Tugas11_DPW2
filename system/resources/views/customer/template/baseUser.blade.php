<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Toko sTORE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/350ae57961.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{url('public')}}/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('public')}}/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


  </head>
  <body class="goto-here">
    @include('customer.template.section.header')



    <section class="ftco-section">
      <div class="container">
                @yield('content')
      </div>
    </section>

    @include('customer.template.section.footer')   
  </body>
</html>