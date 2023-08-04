<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
   <meta charset="utf-8" />
   <title>Login and Registration Form in HTML | CodingNepal</title>
   <link rel="stylesheet" href="style.css" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head> 

<body>
   <div class="wrapper">
      <div class="title-text">
         <div class="title login">Login</div>
         <div class="title signup">Signup</div>
      </div>
      <div class="form-container">
         <div class="slide-controls">
            <input type="radio" name="slide" id="login" checked />
            <input type="radio" name="slide" id="signup" />
            <label for="login" class="slide login">Login</label>
            <label for="signup" class="slide signup">Signup</label>
            <div class="slider-tab"></div>
         </div>
         <div class="form-inner">
            <form action="database.php" class="login">
               <div class="field">
                  <input type="text" name="mail" placeholder="Email Address" required />
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
            </form>
            <form action="database.php" class="signup">
               <div class="field">
                  <input type="text" name="firtsname" placeholder="Firstname" required />
               </div>
               <div class="field">
                  <input type="text" name="lastname" placeholder="Lastname" required />
               </div>
               <div class="field">
                  <input type="text" name="email" placeholder="Email Address" required />
               </div>
               <div class="field">
                  <input type="password" name="pass" placeholder="Password" id="password" required />
               </div>
               <div class="field">
                  <input type="password" name="con_password" placeholder="Confirm password" id="confirm password" required />
               </div>
               <div class="field btn">
                  <div class="btn-layer"></div>
                  <input type="submit" name="signup" value="Signup" id="btn" onclick="matchpassword()" />
               </div>
            </form>
         </div>
      </div>
   </div>
   <script>
      function matchpassword() {
         let inputpassword = document.getElementById("password").value;
         console.log("password: ", password);

         let inputconfirmpassword =
            document.getElementById("Confirm password").value;
         if (inputpassword == inputconfirmpassword) {
            alert("password created sucessfully");
         } else {
            alert("password does not match");
            return false;
         }
         document.forms["loginform"].submit();
      }

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