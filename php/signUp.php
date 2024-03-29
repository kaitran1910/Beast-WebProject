<!--Sign up page-->

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Kaushan+Script&display=swap" rel="stylesheet">
  <meta charset="utf-8">
  <title>Sign Up Page</title>
  <style>
    <?php include '../css/signUp.css'; ?>
  </style>
  <!-- <link rel="stylesheet" href="../css/signUp.css"> -->
</head>

<body>
  <nav>
    <ul class="navbar">
      <li><a href="home.php"> HOME</a></li>
      <li><a href=" about.html">ABOUT</a></li>
      <li><a href="ProductPage.html">PRODUCTS</a></li>
      <li><a href="about.html#fname">CONTACT</a></li>
      <li><a href="trainer1.html">TRAINERS</a></li>
    </ul>
  </nav>
  <div class="container" id="signup"> <br> <br>

    <h1>Sign Up!</h1>
    <form class="" action="index.html" method="post">
      <input type="text" placeholder="Email" name="email" required><br>

      <input type="password" placeholder="Choose Password" name="password" required><br>

      <input type="password" placeholder="Confirm Password" name="password-confirm" required><br>

      <p>By creating an account I hereby agree to the
        <a class="terms" href="#">Terms and Conditions</a>
      </p>
      <p>Already a member? <a class="signin" href="#signin"> Sign In here!</a> </p>
      </p>
      <button type="submit" name="signUpButton">Let's go!</button>
    </form>
  </div>

  <img src="https://images.unsplash.com/photo-1526506118085-60ce8714f8c5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2734&q=80" alt="pullUp">
  <div class="" id="signin">
    <h1></h1>
    <h1></h1>
    <h1>Sign In!</h1>
    <form class="" action="index.html" method="post">
      <div class="container">
        <input type="text" placeholder="Email" name="email" required><br>

        <input type="password" placeholder="Password" name="password" required><br>
        <p>
          Dont have an account? <a class="signup" href="#signup"> Sign Up here!</a>
        </p>


        <button type="submit" name="signInButton">Let me in!</button>

    </form>
  </div>
  <footer>
    <table class="footerTable">
      <tr>
        <td id="footerHead">
          <h3>Visit Us:</h3>
        </td>
        <td id="footerHead">
          <h3>Find Us:</h3>
        </td>
        <td id="footerHead">
          <h3>Developed By:</h3>
        </td>
        <td id="footerHead">
          <h3>Group Members:</h3>
        </td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>EV S2, 1515 Rue Sainte-Catherine</td>
        <td><a href="mailto:genericemail.com">Email</a></td>
        <td>SOEN 287 Chads</td>
        <td>Michael Djabauri (40158792)</td>
        <td>Vaansh Lakhwara (40114764)</td>
        <td>Tran Nhu Tran (40086678)</td>
        <td></td>
      </tr>
      <tr>
        <td>O#206, Montréal, QC H3G 2W1, Canada</td>
        <td><a href="https://github.com/SOEN287Chads/beast">GitHub</a></td>
        <td>This is a fictional site.</td>
        <td>Gabriel Martinica (40120255)</td>
        <td>Vatsa Shah <br> (40125107)</td>
        <td>Thong Minh Tran <br>(40072745)</td>
        <td></td>
      </tr>
    </table>
  </footer>
</body>

</html>