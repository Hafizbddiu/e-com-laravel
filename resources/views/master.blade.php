<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Com</title>
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- Optional theme -->

<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    {{View::make('header')}}
@yield('content')
{{View::make('footer')}}
</body>
<style >
    .custom-login{
        height: 500px;
        padding-top: 100px;
    }
    .slider-image{
        height: 400px;


    }
    .custom-product{
        height: 600px;

    }
    .slider-text{
        background-color: #35443585;
    }
    .trending-image{
      height: 100px;
    }
    .trending-item{
    float: left;
    width: 15%;
    margin-left: 30px;
    }
    .detail-img{
   height: 200px;
    }
    .cart-list-devider{
  border: 1px solid #ccc;
  margin-bottom: 20px;
  padding-bottom: 20px;
    }

</style>

</html>
