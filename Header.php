<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <style>
        header {
            background: transparent;
            padding: 15px;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            transition: background 0.3s ease;
            overflow: visible;
        }

        header.scrolled {
            background: transparent;
            backdrop-filter: blur(20px);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: fixed;
        }

        header a {
            text-decoration: none;
            font-size: 18px;
            transition: color 0.3s ease; /* Smooth transition for color change */
        }
    </style>
    <title>Document</title>
</head>

<body style="overflow-x: hidden; background-color: #c9f8c8">
    <header class="navbar navbar-expand-lg ">
        <div class="container">
            <a href="#" class="header-topics text-light">Brand Name/Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link header-topics active" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php" class="nav-link header-topics active">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php" class="nav-link header-topics active">Packages</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php" class="nav-link header-topics active">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        window.addEventListener("scroll", function() {
            var header = document.querySelector("header");
            var topics = document.querySelectorAll(".header-topics");

            if (window.scrollY > 0) {
                header.classList.add("scrolled");
                topics.forEach(function(topic) {
                    topic.style.color = "white"; // Change to your desired scrolled color
                });
            } else {
                header.classList.remove("scrolled");
                topics.forEach(function(topic) {
                    topic.style.color = "white"; // Change to your desired initial color
                });
            }
        });
    </script>
</body>

</html>
