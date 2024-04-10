<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video POrtal Login</title>
    <link rel="stylesheet" href="t_quizlogin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <div class="row pt-5">
            <div class="left col-lg-6 col-md-12 col-sm-12">
                <div class="content">
                    <img src="img/logo.png" alt="" width="15%" style="margin-bottom: 20px;">
                    <h1 style=" font-size: 30px;">Surabe Clinic <span style="color: #e5322d; font-size: 25px; font-weight: 400;">Academy,</span> </h1>
                    <h4 style=" font-size: 23px; font-weight: bold;">Video Portal</h4>
                    <h5 style=" font-size: 31px; font-weight: bold; margin-bottom: 30px;">Students Login</h5>

                </div>


            </div>
            <div class="right col-lg-6 col-md-12 col-sm-12">
                <div class="alert alert-danger align-content-center mt-3 ps-0 pt-0 m-0 d-none " role="alert" style="height: 30px;  display: flex; " id="erroshow">
                    labelA simple danger alert—check it out!
                </div>
                <div class="content-2 d-flex flex-column">
                    <label for="uname" class="lab">User Name:</label>
                    <input type="text" id="uname" class="entry_f uname " placeholder="Enter User Name" onclick="hidealert();">
                    <label for="pw" class="lab">Password:</label>
                    <input type="password" id="pw" class="entry_f pw" placeholder="Enter Password" onclick="hidealert();">
                    <a href="" class="text-decoration-none link-secondary">Forgot Password</a>
                    

                    <button class="btn btn-primary log-btn mb-2" onclick="login();">Login</button>
                    <a href="video_registration.php" class="text-decoration-none link-primary">I haven' t an account</a>
                    <a href="" class="copytag text-decoration-none" >Powerd by @Affinity Software_Solutions.</a>
                </div>


            </div>
        </div>



    </div>


    <script src="js/script.js"></script>
</body>

</html>