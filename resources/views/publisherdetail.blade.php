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
                    <h4>{{ $publisher->name }}</h4>
                    <h4>Address - {{ $publisher->address }}</h4>
                    <h4>Phone - {{ $publisher->phone }}</h4>
                    <h4>Email - {{ $publisher->email }}</h4>
                </div>
            </div>
        </div>
        @foreach ($books->chunk(4) as $chunk)
        <div class="card-group">
            @foreach ($chunk as $book)
                <div class="card" style="width: 18rem;">
                    <img src="{{ $book->image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->title }}</h5>
                        <p class="card-text">by</p>
                        <p class="card-text">{{ $book->author }}</p>
                        <a href="/bookdetail/{{ $book->id }}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach

        @include('layouts.footer')
    </div>



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
