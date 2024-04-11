<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* When the user scrolls down, reduce the padding and change the color slightly */
        .navbar.scrolled {
            padding-top: 0px;
            padding-bottom: 0px;
            background-color: #f8f9fa !important;
            /* Slightly different shade to indicate active state */
            transition: background-color 0.4s, padding-top 0.4s, padding-bottom 0.4s;
            /* Smooth transition */
        }

        .card {
            background-color: #333;
            /* Dark gray background for cards */
            color: #fff;
            /* White text color */
        }

        .btn-primary {
            background-color: #2F682E;
            border: none;
        }

        .btn-primary:hover {
            background-color: #245022;
            /* A slightly darker green on hover */
        }

        .card-title,
        .card-text {
            color: #ccc;
            /* Lighter gray text for card titles and text */
        }
        .navbar li a{
            color: #2F682E;
            font-weight: bold;
        }
        .navbar-brand{
            color:#2F682E;
        }
    </style>

</head>

<body style="background-color: #1f3147;">

    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg  bg-dark fixed-top" id="mainNav">
            <a class="navbar-brand" href="#pageTop">Surabe-Acadany</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#section1">Section 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section2">Section 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section3">Section 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section4">Section 4</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>


    <div class="container-fluid mt-5 pt-5">
        <section class="se01" id="sec01" style="width: 100%; height: 100vh;">
            <div class="row">
                <div class="col-12 ">
                    <h1 class="text-light ms-5">Welcome Surabe Academy</h1>

                    <h2 class="mb-4 text-info">Featured Videos</h2>
                    <div class="row">
                        <!-- Video 1 -->
                        <div class="col-md-3 mb-3">
                            <div class="card">
                                <video class="card-img-top" controls>
                                    <source src="img/my02.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <div class="card-body">
                                    <h5 class="card-title">Video Title 1</h5>
                                    <p class="card-text">This is a short description of the first video.</p>
                                    <a href="img/my02.mp4" class="btn btn-primary">Watch</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card">
                                <video class="card-img-top" controls>
                                    <source src="img/my02.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <div class="card-body">
                                    <h5 class="card-title">Video Title 1</h5>
                                    <p class="card-text">This is a short description of the first video.</p>
                                    <a href="img/my02.mp4" class="btn btn-primary">Watch</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card">
                                <video class="card-img-top" controls>
                                    <source src="img/my02.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <div class="card-body">
                                    <h5 class="card-title">Video Title 1</h5>
                                    <p class="card-text">This is a short description of the first video.</p>
                                    <a href="img/my02.mp4" class="btn btn-primary">Watch</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card">
                                <video class="card-img-top" controls>
                                    <source src="img/my02.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <div class="card-body">
                                    <h5 class="card-title">Video Title 1</h5>
                                    <p class="card-text">This is a short description of the first video.</p>
                                    <a href="img/my02.mp4" class="btn btn-primary">Watch</a>
                                </div>
                            </div>
                        </div>
                        <!-- Add more videos as needed -->
                    </div>

                </div>

            </div>



        </section>


    </div>






    <!-- Bootstrap and jQuery libraries -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(document).scrollTop() > 50) {
                    $('#mainNav').addClass('scrolled');
                } else {
                    $('#mainNav').removeClass('scrolled');
                }
            });
        });
    </script>

</body>

</html>