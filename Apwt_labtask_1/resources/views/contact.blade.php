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
    
    <section style="height: 250px;" class="container panda-bg-info d-flex justify-content-center align-items-center m-5" id="subscribe">
        <div>
            <h1>let's stay in touch</h1>
            <p>Get updates on sales, specials and more</p>
            <input class="form-control" type="text" name="" id="" placeholder="Email">
            <br>
            <button class="btn btn-success">Submit</button>
        </div>
    </section>
    @endsection
</body>

</html>