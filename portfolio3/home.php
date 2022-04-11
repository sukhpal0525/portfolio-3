<?php
include_once('navbar.php');
include_once('dbconnect.php');

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="./css/home.css">
  <title>Home</title>
  <script src="js/register.js"></script>
</head>

<body>

  <table width="1904px" height="500px" align="center" bgcolor="#CCD1D1">
    <tr>
      <td>
        <table id="logintable" align="center">
          <tr>
            <td width="150px" height="500px" align="center" bgcolor="FDFEFE">
            </td>
            <td width="500px" height="500px" align="center" bgcolor="FDFEFE">

              <form class="" action="index.html" method="post">
                <div class="">
                  <fieldset>
                    <legend><b>Login</b></legend>
                    <table cellspacing="0" width="600">
                      <tr>
                        <td><label for="fname">Emails</label></td>
                        <td>
                          <input id="email" name="email" type="text" />
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <label for="password">Password</label>
                        </td>
                        <td>
                          <input name="password" type="date" style="width:100%;max-width: 172px;" />
                        </td>
                      </tr>
                    </table>
                </div><br>


                <fieldset>
                  <legend><b>Register</b></legend>
                  <table id="logintable" cellspacing="0" width="600">
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
                  </table>
                </fieldset>
              </form>



              <!--
                  <table id="testtt" cellpadding="1" cellspacing="1" align="center" width="100%">
                    <tbody>
                      <tr align="center">
                        <th id="text1" style="text-align:center">
                          <font size="3"><strong>ID</strong></font>
                        </th>

                        <th>
                          <font size="3"><strong>&nbsp;Contact Details</strong></font>
                        </th>
                        <th style="text-align:right">
                          <font size="3"><strong>Date Created&nbsp;</strong></font>
                        </th>
                                  	<th width="24">&nbsp;</th>
                        <th><font size="3"><strong>Test</strong></font></th>
                      </tr>
                      <tr>
                        <td bgcolor="#CCD1D1"></td>
                        <td colspan="4" bgcolor="#CCD1D1"><strong>
                            <font color="#FFFFFF" size="3px">.</font>
                          </strong>
                        </td>
                      </tr>
                      <tr bgcolor="#f2f2f2" align="center">
                        <td><a href="https:register/#1">#1</a>&nbsp;</td>

                        <td align="left">&nbsp;&nbsp;</td>
                        <td class="kt" align="right">22/03/22&nbsp;</a></td>
                      </tr>
                      <tr>
                        <td colspan="5">&nbsp;</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
-->
              <table></table>
          <tr>
            <td bgcolor="#333">
            </td>
            <td colspan="4" bgcolor="#333"><strong>
                <font style="margin-left: 0.2em;" color="#FFFFFF" size="4px">Summary</font>
              </strong>
              <em>
                <font align="right" color="#FFFFFF" size="3px"></font>
              </em>
            </td>
          </tr>


          <tr bgcolor="#f2f2f2" align="center">
            <td><a href="https://www.google.com">#1</a>&nbsp;</td>
            <td align="left">&nbspHello example info&nbsp;</td>
          </tr>

          <tr bgcolor="#f2f2f2" align="center">
            <td><a href="https://www.google.com">#2</a>&nbsp;</td>
            <td align="left">&nbspHello example info&nbsp;</td>
          </tr>
          </div>
      </td>
    </tr>
  </table>
  </td>
  </tr>
  </table>
</body>

</html>
