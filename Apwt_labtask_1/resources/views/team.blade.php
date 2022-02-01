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
    <h1> this is team</h1>
    <section class="container m-5">

        <div class="container my-5">

            <div class="row g-4">

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="p-3 border bg-warning d-flex align-items-center justify-content-between rounded-3">
                        <h1 class="text-white">Bangladesh</h1>
                        <img src="images/categories/watch.png" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="p-3 border bg-success d-flex align-items-center justify-content-between rounded-3">
                        <h1 class="text-white">Saudi Arabia</h1>
                        <img src="images/categories/bag.png" alt="">
                    </div>

                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="p-3 border bg-primary d-flex align-items-center justify-content-between rounded-3">
                        <h1 class="text-white">Pakistan</h1>
                        <img src="images/categories/shoes.png" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>
    @endsection
</body>

</html>