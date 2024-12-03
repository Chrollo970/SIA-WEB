<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Jura:wght@300..700&display=swap"
      rel="stylesheet"
    />
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <style>
      body {
        background: rgb(71, 127, 136);
        background: linear-gradient(
          90deg,
          rgba(71, 127, 136, 1) 12%,
          rgba(125, 223, 238, 1) 76%
        );
      }
      .card {
        background: #17486e;
        border-radius: 15px;
        border-color: aliceblue;
        border-width: 10px;
        max-width: 500px;
        margin: auto;
        color: white;
      }
      button {
        background: rgb(190, 62, 245);
        background: linear-gradient(
          90deg,
          rgba(190, 62, 245, 1) 0%,
          rgba(102, 122, 253, 1) 38%,
          rgba(81, 92, 255, 1) 100%
        );
      }
    </style>
    <title>Register</title>
  </head>
  <body>
    <div class="container mt-5 d-flex justify-content-center">
      <div class="card p-4">
        <form action="inc/register.php" method="POST" id="signUpForm">
          <div class="form-group">
            <label for="name">Full Name</label>
            <input
              type="text"
              class="form-control"
              id="name"
              placeholder="Enter your full name"
              required
              name="fullName"
            />
          </div>
          <div class="form-group">
            <label for="email">Email address</label>
            <input
              type="email"
              class="form-control"
              id="email"
              placeholder="Enter your email"
              required
              name="emailAddress"
            />
          </div>
          <div class="form-group">
            <label for="name">Username</label>
            <input
              type="text"
              class="form-control"
              id="name"
              placeholder="Enter your username"
              required
              name="userName"
            />
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input
              type="password"
              class="form-control"
              id="password"
              placeholder="Enter a password"
              name="password"
            />
          </div>
          <div class="form-group mb-3">
            <label for="grade">Phone Number</label><br />
            <input
              type="tel"
              required
              placeholder="Enter your phone number"
              id="phone"
              maxlength="11"
              name="phoneNumber"
            />
          </div>
          <div class="g-recaptcha" data-sitekey="6Le8TY8qAAAAAMsbiKh4DyQnJg0pbTerAH7qZF51"></div>
         
          <center>
          <button type="submit" class="btn btn-primary btn-block mt-3" name="submit">
              Sign Up
            </button>
          </center>
            

          
        </form>
      </div>
    </div>
  </body>
  <script>
    const phoneInput = document.getElementById("phone");
    phoneInput.addEventListener("input", function (e) {
      phoneInput.value = phoneInput.value.replace(/[^0-9+()-\s]/g, "");
    });
    const loginForm = document.getElementById("signUpForm");
    loginForm.addEventListener("submit", function(e){
      const reCapchaResponse = grecaptcha.getResponse();
      if (reCapchaResponse === ""){
        e.preventDefault(); 
          alert("Please complete the reCAPTCHA to proceed.");
      };
    });
  </script>
</html>
