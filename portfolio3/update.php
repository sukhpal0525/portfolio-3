<?php
include_once('navbar.php');
if (!isset($_SESSION['email'])){
  echo '<script> alert("You need to be logged in to view or edit a CV."); window.location.replace("index.php");</script>';
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">

  <link rel="stylesheet" type="text/css" href="./css/update.css">
  <title>Your CV</title>
  <script src="js/register.js"></script>
</head>

<body>

  <!--
    <ul>
      <input type="text" id="email" name="email" placeholder="Email" />
      <input type="text" id="password" name="password" placeholder="Password" />
      <input type="submit" id="signup" value="Log In"><br>
      <li><a href="file:sign-up.html">Register</a></li>
      <input type="text" id="search" placeholder="Search">
    </ul>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-coreui-toggle="collapse" data-coreui-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-coreui-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
-->

  <table width="1904px" height="500px" align="center" bgcolor="#CCD1D1">
    <tr>
      <td>
        <table align="center">
          <tr>
            <td width="150px" height="500px" align="center" bgcolor="FDFEFE">
            </td>
            <td width="700px" height="500px" bgcolor="FDFEFE">

              <div class="contact-me">
                <h1>Personal Details</h1>
                <hr color="#CCD1D1">

                <!--
                <div class="form">
                  <form>
                    <p>First Name:</p>
                    <input type="text" id="name" name="Name" placeholder="First Name" /><br>
                    <p>Last Name:</p>
                    <input type="text" id="lname" name="LName" placeholder="Last Name" /><br>
                    <p id="email-text">Email:</p>

                    <input name="Email" id="email" placeholder="Email" />

                    <p>Mobile:</p>
                    <input type="password" id="mobile" name="mobile" placeholder="Mobile" required>

                    <br><br>
                    <input id="submit" onclick="buttonClick()" id="submit" type="submit" value="Submit">
                    <input type="reset">
-->

                <form class="" action="index.html" method="post">
                  <div class="">
                    <fieldset>
                      <legend><b>Personal Details</b></legend>
                      <table cellspacing="0" width="600">
                        <tr>
                          <td>
                            <label for="fname">Full Name</label>
                          </td>
                          <td>
                            <input id="fname" name="fname" type="text" />
                            <input id="lname" name="lname" type="text" />
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <label for="email">Contact Email:</label>
                          </td>
                          <td>
                            <input id="email" name="email" type="text" style="width:150%;max-width: 350px;" />
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <label for="dateofbirth">Date of Birth:</label>
                          </td>
                          <td>
                            <input name="dateofbirth" type="date" style="width:100%;max-width: 172px;" />
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <label for="Mobile">Mobile</label>
                          </td>
                          <td>
                            <input name="Mobile" type="text" />
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <label for="Mobile">Home Telephone</label>
                          </td>
                          <td>
                            <input name="Mobile" type="text" />
                          </td>
                        </tr>
                      </table><br>


                      <table cellspacing="0" width="564">
                        <tr>
                          <td>
                            <label for="fname">Address, Postcode</label>
                            <label for="address1"></label>
                          </td>
                          <td>
                            <input id="address" name="address" type="text" placeholder="(Use an example address)" />
                            <input id="address" name="address" type="text" />
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <label for="fname">Country, City</label>
                            <label for="address2"></label>
                          </td>
                          <td>
                            <input id="country" name="country" type="text" />
                            <input id="city" name="city" type="text" />
                          </td>
                        </tr>

                      </table>

                      <!--
                      <p>First Name:</p><input type="text" id="fname" name="Name" placeholder="" /><br>
                      <p>Last Name:</p> <input type="text" id="lname" name="Name" placeholder="" /><br>
                      <p>Contact Email:</p> <input name="Email" id="email" placeholder="" />
                      <p>Password:</p> <input type="password" id="password" name="Password" placeholder="Password" required>
                      <p>Mobile:</p><input type="text" id="mobile" name="Mobile" pattern="[0-9]{11}" placeholder="Phone Number">
-->
                      <!--
                      <label for="fname">First Name:</label><br>
                      <input type="text" id="fname" name="fname"><br>

                      <label for="lname">Last Name:</label><br>
                      <input type="text" id="lname" name="lname"><br><br>


                      <label for="lname">Mobile:</label><br>
                      <input type="password" id="mobile" name="mobile" placeholder="" required>
  -->
                    </fieldset>
                  </div>


                  <fieldset>
                    <legend><b>Education</b></legend>
                    <p id="small-text">Please select an option:</p><br><br>
                    <input type="checkbox" name="education" value="GCSE">GCSE<br>
                    <input type="checkbox" name="education" value="A-Level">A-Level<br>
                    <input type="checkbox" name="education" value="Undergraduate">Degree (Undergraduate)<br>
                    <input type="checkbox" name="education" value="Postgraduate">Degree (Postgraduate)<br>
                    <input type="checkbox" name="education" value="Masters">Master's Degree<br>
                    <input type="checkbox" name="education" value="Doctorate">Doctorate (PhD)<br>
                  </fieldset>

                  <fieldset>
                    <legend><b>Programming</b></legend>
                    <p id="small-text">Please define a key programming skill:</p><br><br>
                    <textarea id="enquire" name="enquire" placeholder="Example: Java" rows="5" cols="36"></textarea>
                  </fieldset>

                  <fieldset>
                    <legend><b>URL Links</b></legend>
                    <p id="small-text">Add any links below:</p><br><br>
                    <textarea id="enquire" name="enquire" placeholder="" rows="5" cols="36"></textarea>
                  </fieldset>

                  <div class="submit">
                    <input type="submit" value="Submit">
                    <input type="hidden" name="submitted" value="TRUE" />
                    <input type="reset">
                  </div>
                </form>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>

</html>
