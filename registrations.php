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
  .
</head>


<body class="container-fluid">


  <? include 'hadder.php' ?>

  <div class="row">

    <div class="col-lg-6 col-md-12 col-12 d-flex justify-content-center align-items-center" style="background-color: #2f682e;">
      <div class="content col-lg-6 col-11">

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


    <div class="col-lg-6 col-md-12 col-12 d-flex justify-content-center align-items-center logo-home" style="background-color: #c9f8c8;">


      <section>
        <header>Send Registration</header>
        <form action="#" class="form">
          <div class="input-box">
            <label>Patient' Name:</label>
            <input type="text" placeholder="Enter full name" required />
          </div>
          <div class="input-box">
            <label>Email Address</label>
            <input type="text" placeholder="Enter email address" required />
          </div>
          <div class="column">
            <div class="input-box">
              <label>Phone Number</label>
              <input type="number" placeholder="Enter phone number" required />
            </div>
            <div class="input-box">
              <label>WhatsApp Number</label>
              <input type="text" placeholder="Enter your WhatsApp Number" required />
            </div>
          </div>






          <div class="column">
            <div class="input-box">
              <label>Gender</label>
              <div class="select-box">

                <select>
                  <option hidden>Gender</option>
                  <option>Male</option>
                  <option>Female</option>
                  <option>Custom</option>
                </select>
              </div>
            </div>
            <div class="input-box">
              <label>Date Of Birth</label>
              <input type="date" placeholder="Enter birth date" required />
            </div>
          </div>




          <div class="input-box address">




            <div class="column">
              <div class="input-box">
                <label>Country</label>
                <div class="select-box">

                  <select>
                    <option hidden>Select Your Country</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Custom</option>
                  </select>
                </div>
              </div>
              <div class="input-box">
                <label>City</label>
                <input type="text" placeholder="Enter your City" required />
              </div>
            </div>












            <div style="margin-top: 20px;">
              <label>Address</label>
              <input type="text" placeholder="Enter street address" required />

            </div>




          </div>
          <button class="More-Services btn2">More Services</button>

        </form>


      </section>






    </div>









  </div>
  </div>
  </div>

  <? include 'footer.php' ?>
</body>

</html>