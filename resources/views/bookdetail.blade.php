<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    @include('layouts.navbar')

    <div class="container">
        <div class="container">
            <div class="row bg-secondary">
                <div class="col-12 text-white">
                    <h1>Book Detail</h1>
                </div>
            </div>
        </div>
        <div class="container m-3">
            <img src={{$book->image}} alt="">
            <h1>Title: {{$book->title}}</h1>
            <h3>Author: {{$book->author}}</h3>
            <h4>year: {{$book->year}}</h4>
            <span>synopsis:</span>
            <p>{{$book->synopsis}}</p>

        </div>
            @include('layouts.footer')
        </div>



        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>
</body>

</html>
