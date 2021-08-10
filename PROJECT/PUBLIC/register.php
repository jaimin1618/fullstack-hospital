<html>
    <head>
    <link href="stylesheets/register.css" rel="stylesheet">
    <meta charset="utf-8">
    <title>REGISTER YOURSELF</title>
    <script type="text/javascript" src="scripts/register.js" async></script>
    </head>
<body>
 <header>
 </header>
 
    <div id="container" class="form_inputs">
       <header>REGISTER</header>
       <form method="POST" action="../PRIVATE/register.php" id="register_form" >
          <fieldset>
             <br/>
             <input class="inputs" value="<?php $_POST['username']??''; ?>" type="text" name="username" id="username" placeholder="Username" autofocus>
             <br/><br/>
             <input class="inputs" value="<?php $_POST['email']??''; ?>" type="text" name="email" id="email" placeholder="Email-id"  autofocus>
             <br/><br/>
             <input class="inputs" type="password" name="password" id="password" placeholder="Password"  autofocus value="">
             <br/><br/>
             <input class="inputs" type="password" name="password2" id="password2" placeholder="Retype-Password"   value="">
             <br/><br/>
             <label for="submit" ></label>
             <input class="inputs" type="submit" name="submit" id="submit" value="Sign up">
             <p class="lastSentence">Already have an account? <a href="login.php" class = "login" >Log in</a></p>
            </fieldset>
         </form>
      </div>

   <footer>

   </footer>
 </body>
 </html>