<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <style>
        .active{
            color: red;
        }
    </style>
    {{-- <link rel="stylesheet" href="{{ asset('../../Scss/app.scss') }}"> --}}
</head>
<body>
    {{-- <div class="" style="background-color: aqua; height: 100px;">
       <p> header</p>
    </div> --}}
    @include('layouts.header')
    @yield('content')
    {{-- hiển thị nội dung theo yield được gọi --}}
    @include('layouts.footer')
</body>
</html>
