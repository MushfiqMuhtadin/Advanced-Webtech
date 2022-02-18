<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <button type="button" class="btn btn-light ms-5"> <a class="nav-link active" aria-current="page" href="{{route('profile')}}">Profile</a></button>

            <button type="button" class="btn btn-light ms-5"> <a class="nav-link active" aria-current="page" href="">Signup</a></button>

            <div class="collapse navbar-collapse " id="navbarTogglerDemo02">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0  ">
                    <li class="nav-item me-2">
                        <button type="button" class="btn btn-primary"> <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a></button>
                    </li>

                    <li class="nav-item me-2">
                        <button type="button" class="btn btn-danger"> <a class="nav-link active" aria-current="page" href="{{route('product')}}">Products</a></button>
                    </li>

                    <li class="nav-item me-2">
                        <button type="button" class="btn btn-warning"> <a class="nav-link active" aria-current="page" href="{{route('team')}}">Out Team</a></button>
                    </li>

                    <li class="nav-item me-2">
                        <button type="button" class="btn btn-success"> <a class="nav-link active" aria-current="page" href="{{route('about')}}">About Us</a></button>
                    </li>

                    <li class="nav-item me-2">
                        <button type="button" class="btn btn-info"> <a class="nav-link active" aria-current="page" href="{{route('contact')}}">Contact Us</a></button>
                    </li>


                </ul>

            </div>
        </div>
    </nav>

</body>

</html>