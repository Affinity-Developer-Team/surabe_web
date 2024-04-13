<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/test.css" />
  <link rel="stylesheet" href="style.css">
  <style>
    #barcontainer {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(255, 255, 255, 0.9);
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .bars {
      width: 50.5px;
      height: 50.5px;
      --c: conic-gradient(from -90deg, #61e85f 90deg, #0000 0);
      background: var(--c), var(--c);
      background-size: 20.2px 20.2px;
      animation: bars-dxe116md 1.2000000000000002s infinite;
    }

    @keyframes bars-dxe116md {

      0%,
      20% {
        background-position: 0 0, 0 10.1px;
      }

      33% {
        background-position: 0 0, 10.1px 10.1px;
      }

      66% {
        background-position: 0 10.1px, 10.1px 0;
      }

      80%,
      100% {
        background-position: 0 10.1px, 0 0;
      }
    }
  </style>
</head>


<body>
  <div id="barcontainer">
    <div class="bars"></div>
  </div>
  <?php include "Header.php"; ?>
  <div class="col-12 container-fluid">
    <div class="row">
      <div class="col-lg-6 col-12 d-flex justify-content-center align-items-center" style="background-color: #2f682e;">
        <div class="col-lg-6 col-12">
          <div class="reg-home">
            <p style="font-size: 70px" class="surabe-reg-1">
              SURABE <span class="surabe-reg">Clinic</span>
            </p>
            <p class="reg-text">Patient</p>
            <p class="reg-text">Registration</p>
            <p class="reg-dis">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi,
              recusandae iste neque eos molestiae impedit animi odit obcaecati
              sed consequuntur, dolores vero tempora possimus. Quae amet nihil
              fa Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Quasi, recusandae iste neque eos molestiae impedit animi odit
              obcaecati sed consequuntur, dolores vero tempora possimus. Quae
              amet nihil facere voluptatem temporecere voluptatem tempore.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 p-5 logo-home" style="background-color: #c9f8c8;">
        <section>
          <h1>Send Registration</h1>
          <div class="col-12">
            <div class="row">
              <div class="col-lg-6">
                <label class="form-label fw-bold mt-3">First Name:</label>
                <input type="text" class="form-control" id="fname" placeholder="First Name">
              </div>
              <div class="col-lg-6">
                <label class="form-label fw-bold mt-3">Last Name:</label>
                <input type="text" class="form-control" id="lname" placeholder="Last Name">
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <label class="form-label fw-bold mt-3">Email:</label>
                <input type="text" class="form-control" id="email" placeholder="First Name">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <label class="form-label fw-bold mt-3">Mobile Number:</label>
                <input type="text" class="form-control" id="mobile" placeholder="First Name">
              </div>
              <div class="col-lg-6">
                <label class="form-label fw-bold mt-3">Whatsapp Number:</label>
                <input type="text" class="form-control" id="whatsapp" placeholder="Last Name">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <label class="form-label fw-bold mt-3">Gender:</label>
                <select name="gender" id="gender" class="form-control form-control-sm">
                  <option value="0">Select Gender</option>
                  <option value="1">Male</option>
                  <option value="2">Female</option>
                </select>
              </div>
              <div class="col-lg-6">
                <label class="form-label fw-bold mt-3">Date Of Birth:</label>
                <input type="date" class="form-control" id="dob" placeholder="Last Name">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <label class="form-label fw-bold mt-3">Country:</label>
                <input type="text" class="form-control" id="country" placeholder="First Name">
              </div>
              <div class="col-lg-6">
                <label class="form-label fw-bold mt-3">City:</label>
                <input type="text" class="form-control" id="city" placeholder="Last Name">
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <label class="form-label fw-bold mt-3">Address:</label>
                <input type="text" class="form-control" id="address" placeholder="First Name">
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <?php include "footer.php"; ?>
  <script>
    window.addEventListener('load', function() {
      var loadingAnimation = document.getElementById('barcontainer');
      loadingAnimation.style.display = 'none';
    });
  </script>
</body>

</html>