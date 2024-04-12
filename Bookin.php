<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SURABE Clinic Booking</title>
  <link rel="stylesheet" href="css/test.css">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Istok+Web:ital,wght@0,400;0,700;1,400;1,700&display=swap');

    .fthadder {
      font-family: 'Istok Web', sans-serif;
      letter-spacing: 0.5px;
      font-weight: bold;
    }
  </style>
</head>

<body>

  <!-- Header -->
  <div>
    <?php include 'Header.php' ?>
  </div>

  <!-- Left side: SURABE Clinic info -->
  <div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-12 d-flex justify-content-center align-items-center" style="background-color: #2f682e;">
          <div class="content col-lg-6 col-11">
            <div class="reg-home">
              <p style="font-size: 70px" class="surabe-reg-1">
                SURABE <span class="surabe-reg">Clinic</span>
              </p>
              <p class="reg-text">Patient</p>
              <p class="reg-text">Booking</p>
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
        <!-- Right side: Booking form -->
        <div class="col-lg-6 col-md-12 col-12 d-flex justify-content-center align-items-center logo-home" style="background-color: #c9f8c8;">
          <div>
            <center>
              <h2 class="mb-4 bookin" style=" margin-bottom: 35px; margin-top: 100px;">Set Your Booking</h2>
            </center>
            <br> <br>
            <form id="bookingForm">
              <div class="row">
                <div class="col-md-6 mt-4">
                  <div class="mb-4">
                    <label for="idNumber" class="book-text">ID Number:</label>
                    <input type="text" class="form-control rounded" id="idNumber" placeholder="ex: XXXXXXXXX">
                  </div>
                </div>
                <div class="col-md-6 mt-4">
                  <div class="mb-4">
                    <label for="bookingDate" class="book-text">Booking Date:</label>
                    <input type="date" class="form-control rounded " id="bookingDate" placeholder="ex: 11/03/2024">
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <label for="patientName" class="book-text">Patient's Name:</label>
                <input type="text" class="form-control rounded" id="patientName" placeholder="ex: Jhona">
              </div>
              <button type="submit" class="btn btn-lg mt-4 mx-auto d-block " style="background-color: #2f682e; color: white; border-radius: 15px; width: 110px; font-size: 17px; font-family: jua; margin-bottom: 100px;">Confirm</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php include 'footer.php' ?>

  <!-- Bootstrap JS -->



 

  <!-- Bootstrap modal for registration form -->
  <div class="modal fade" id="registrationModal" tabindex="-1" aria-labelledby="registrationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h5 class="modal-title" id="registrationModalLabel">Register</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <!-- Modal Body -->
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="email" class="form-label">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Enter your email">
            </div>
            <div class="mb-3">
              <label for="phone" class="form-label">Phone Number:</label>
              <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number">
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Message:</label>
              <textarea class="form-control" id="message" rows="3" placeholder="Enter your message"></textarea>
            </div>
          </form>
        </div>

        <!-- Modal Footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="sendButton">Send</button>
        </div>
      </div>
    </div>
  </div>








  <div class="modal fade" id="emailVerificationModal" tabindex="-1" aria-labelledby="emailVerificationModalLabel" aria-hidden="true">
    <!-- Modal content -->
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h5 class="modal-title" id="emailVerificationModalLabel">Email Verification</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <!-- Modal Body -->
        <div class="modal-body">
          <p>Please enter the verification code sent to your email:</p>
          <div class="mb-3">
            <label for="verificationCode" class="form-label">Verification Code:</label>
            <input type="text" class="form-control" id="verificationCode" placeholder="Enter verification code">
          </div>
        </div>

        <!-- Modal Footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="verifyButton">Verify</button>
        </div>
      </div>
    </div>
  </div>

  < <script>
    document.addEventListener('DOMContentLoaded', function() {

    var verifyButton = document.getElementById('verifyButton');
    verifyButton.addEventListener('click', function() {

    alert('Verification successful! Your email has been verified.');

    });
    });


    document.addEventListener('DOMContentLoaded', function() {
    var confirmBtn = document.querySelector('#bookingForm button[type="submit"]');
    confirmBtn.addEventListener('click', function(event) {
    event.preventDefault(); // Prevent form submission

    // Show the registration modal
    var modal = new bootstrap.Modal(document.getElementById('registrationModal'));
    modal.show();
    });

    var sendBtn = document.querySelector('#sendButton');
    sendBtn.addEventListener('click', function() {
    // Close the registration modal
    var registrationModal = document.getElementById('registrationModal');
    var modal = bootstrap.Modal.getInstance(registrationModal);
    modal.hide();

    // Show the email verification modal
    var emailModal = new bootstrap.Modal(document.getElementById('emailVerificationModal'));
    emailModal.show();
    });
    });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>