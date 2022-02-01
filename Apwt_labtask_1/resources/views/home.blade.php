<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @extends('layouts.app')
    @section('content')
    <h1> this is home 2</h1>
    <div class="container d-flex justify-content-between m-5">

        <div class="card" style="width: 18rem;">
           
            <div class="card-body">
                <h5 class="card-title">Hello</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
                <a href="#" class="btn btn-primary">Go </a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
          
            <div class="card-body">
                <h5 class="card-title">Hi</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
                <a href="#" class="btn btn-primary">Go </a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
          
            <div class="card-body">
                <h5 class="card-title">Goodbye</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
                <a href="#" class="btn btn-primary">Go</a>
            </div>
        </div>
    </div>

    @endsection
</body>

</html>