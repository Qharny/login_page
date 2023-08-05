<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
   <meta charset="utf-8" />
   <title>Login and Registration Form</title>
   <link rel="stylesheet" href="style.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
   <div class="wrapper">
      <div class="title-text">
         <!-- Titles for login and signup sections -->
         <div class="title login">Login</div>
         <div class="title signup">Signup</div>
      </div>
      <!-- Container for the form -->
      <div class="form-container">
         <div class="slide-controls">
            <!-- Radio inputs to control the sliding -->
            <input type="radio" name="slide" id="login" checked />
            <input type="radio" name="slide" id="signup" />
            <!-- Labels for login and signup buttons -->
            <label for="login" class="slide login">Login</label>
            <label for="signup" class="slide signup">Signup</label>
            <!-- Slider tab -->
            <div class="slider-tab"></div>
         </div>
         <div class="form-inner">
            <!-- Login form -->
            <form action="database.php" class="login" method="post" autocomplete="off">
               <div class="field">
                  <input type="text" name="mail" placeholder="Email or Username" required />
               </div>
               <div class="field">
                  <input type="password" name="password" placeholder="Password" required />
               </div>
               <div class="pass-link">
                  <a href="#">Forgot password?</a>
               </div>
               <div class="field btn">
                  <div class="btn-layer"></div>
                  <input type="submit" name="login" value="Login" />
               </div>
               <div class="signup-link">
                  Not a member? <a href="">Signup now</a>
               </div>
            </form><!-- End of Login form -->

            <!-- Signup form -->
            <form action="signup_database.php" class="signup" method="post" autocomplete="off">
               <div class="field">
                  <input type="text" name="fullname" placeholder="Full Name" min="5" required />
               </div>
               <div class="field">
                  <input type="text" name="username" placeholder="Username" required />
               </div>
               <div class="field">
                  <input type="text" name="email" placeholder="Email Address" required />
               </div>
               <div class="field">
                  <input type="password" name="pass" placeholder="Password" id="password" required />
               </div>
               <div class="field">
                  <input type="password" name="con_password" placeholder="Confirm password" id="confirm-password" required />
               </div>
               <div class="field btn">
                  <div class="btn-layer"></div>
                  <input type="submit" name="signup" value="Signup" id="btn" onclick="matchpassword()">
               </div>
            </form><!-- End of Signup form -->
         </div>
      </div>
   </div>
   <script>
      // JavaScript code for form interaction

      // Sliding effect between login and signup forms
      const loginText = document.querySelector(".title-text .login");
      const loginForm = document.querySelector("form.login");
      const loginBtn = document.querySelector("label.login");
      const signupBtn = document.querySelector("label.signup");
      const signupLink = document.querySelector("form .signup-link a");
      signupBtn.onclick = () => {
         loginForm.style.marginLeft = "-50%";
         loginText.style.marginLeft = "-50%";
      };
      loginBtn.onclick = () => {
         loginForm.style.marginLeft = "0%";
         loginText.style.marginLeft = "0%";
      };
      signupLink.onclick = () => {
         signupBtn.click();
         return false;
      };
   </script>
</body>

</html>
