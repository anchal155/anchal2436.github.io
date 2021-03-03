<!Doctype html>
<html lang="en-us">
   <head>
    <meta charset="utf-8">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
               
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}" type="text/css">  
     
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Anchal Mantri">
    <meta name="description" content="Visit to scotlaand is beautiful plan your trip now">

    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    
    <title>Scotland</title>
   
</head>

<body>

@include('common/heade')

@yield('content')

<script>
    baguetteBox.run('.tz-gallery');
</script>

@include('common/footer')

</body>
</html>