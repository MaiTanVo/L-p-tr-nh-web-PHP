<head>
  <title>Đổi mật khẩu</title>
</head>
<?php
$check3 = 0;
if (isset($_POST['change']) && isset($_POST['change'])) {
  $username = $_POST['username'];
  $oldpassword = $_POST['oldpassword'];
  $newpassword =$_POST['newpassword'];
  $newpassword1= md5($newpassword);
  // $conn = new mysqli('localhost', 'root', '', 'ct428_ltweb');
  $sql_pwd = "SELECT * FROM account WHERE Username='" . $username . "' AND Password='" . md5($oldpassword) . "' LIMIT 1 ";
  $row = mysqli_query($conn, $sql_pwd);
  $count = mysqli_num_rows($row);
  if (strlen($newpassword) < 8) {
    $fail3 = '<script>alert("Mật khẩu không hợp lệ ( ít hơn 8 ký tự) !!!")</script>';
    $check3 = 1;
  } elseif ($count > 0) {
    $sql_doipass = "UPDATE account SET Password = '$newpassword1' WHERE Username = '$username'";
    $sql_update_pass = mysqli_query($conn,$sql_doipass);
    if ($sql_update_pass) {
    echo '<script>alert("Thay đổi mật khẩu thành công")</script>';}
  } else {
    echo '<script>alert("Tài khoản không tồn tại hoặc sai mật khẩu hay username")</script>';
  }
}

?>
<style>
  .content1 {
    width: 1280px;
    max-width: 100%;
    margin: -50px 0 0 0;
  }

  @media (max-width: 62em) {
    .content1 {
      margin: 30px 0 0 0;
    }
  }

  .shadow-box {
    background: white;
  }

  .form p {
    padding: 0;
    margin: 0;
  }

  @media (min-width: 700px) {
    .shadow-box {
      box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.3);
    }
  }

  .signup-wrapper .company-details {
    background: url(./pages/log/sign/WonWoo.jpg);
    background-size: cover;
    position: relative;
  }

  .signup-wrapper .company-details:before {
    content: "";
    position: absolute;
    display: block;
    left: 0;
    right: 0;
    bottom: 0;
    height: 100%;
    background: linear-gradient(to top,
        rgba(0, 0, 0, 0.75) 0%,
        rgba(0, 0, 0, 0) 100%);
  }

  .signup-wrapper .company-details .wrapper-1 {
    position: relative;
    padding-bottom: 10px;
    padding-top: 22px;
  }

  .signup-wrapper .company-details .logo {
    padding: 0 20px;
    width: 20%;
    margin: 0 auto;
  }

  .signup-wrapper .company-details .logo .icon-food {
    background-size: contain;
    background-repeat: no-repeat;
    width: 38px;
    height: 38px;
    margin: 0 auto;
  }

  .signup-wrapper .company-details .title {
    padding: 20px;
    width: 74%;
    margin: 0 auto;
    text-transform: uppercase;
    color: #fff;
    font-weight: 600;
    font-size: 2em;
    text-shadow: 1px 1px #4b4a4a;
    text-align: center;
  }

  .signup-wrapper .company-details .slogan {
    display: none;
  }

  .signup-wrapper .signup-form .wrapper-2 {
    padding: 14px 20px;
    margin: 30px 80px;
  }

  .signup-wrapper .signup-form .form-title {
    font-size: 1.5em;
    color: #007700;
    padding: 5px;
    text-align: center;
  }

  .signup-wrapper .signup-form .form .content-item {
    text-transform: uppercase;
    color: #a19f9c;
    font-size: 0.7em;
    letter-spacing: 1px;
    /* margin-top: 5px; */
    text-align: center;
  }

  .signup-wrapper .signup-form .form input[type="text"],
  .signup-wrapper .signup-form .form input[type="password"] {
    border: none;
    border-bottom: 1px solid #e4e4e4;
    padding-top: 10px;
    padding-bottom: 10px;
    display: block;

    text-align: center;
    width: 100%;
  }

  .signup-wrapper .signup-form .signup {
    background-color: #007700;
    border: none;
    color: white;
    padding: 15px 25px;
    font-size: 1em;
    text-transform: capitalize;
    margin-top: 49px;
    border-radius: 5px;
  }

  .signup1 {
    background-color: #007700;
    width: 180px;
    height: 45px;
    border: none;
    color: white;
    padding: 5px 5px;
    font-size: 1em;
    text-transform: capitalize;
    border-radius: 5px;
  }

  .signup-wrapper .signup-form .login {
    color: #007700;
    padding: 20px;
    font-weight: 600;
    text-decoration: none;
    font-size: 0.9em;
    width: 95%;
    margin: 0 auto;
    display: inline-block;
    text-align: center;
  }

  input::placeholder {
    color: #575757;
  }

  @media (min-width: 200px) {
    .signup-wrapper .signup-form .wrapper-2 {
      margin: 30px 23px;
    }

    .signup-wrapper .company-details .title {
      width: 90%;
      font-size: 1.5em;
    }
  }

  @media (min-width: 300px) {
    .signup-wrapper .signup-form .login {
      display: inline-block;
    }

    .signup-wrapper .signup-form .wrapper-2 {
      margin: 30px 60px;
    }

    .signup-wrapper .company-details .title {
      width: 80%;
      font-size: 2em;
    }
  }

  @media (min-width: 500px) {
    .signup-wrapper .signup-form .login {
      display: inline;
    }
  }

  @media (min-width: 700px) {

    .signup-wrapper .company-details,
    .signup-wrapper .signup-form {
      width: 50%;
    }

    .signup-wrapper {
      display: flex;
      max-width: 700px;
      margin: 0 auto;
      margin-top: 5%;
    }

    .signup-wrapper .company-details .wrapper-1 {
      padding-bottom: 150px;
      padding-top: 160px;
    }

    .signup-wrapper .company-details .slogan {
      padding: 0 20px;
      width: 70%;
      margin: 0 auto;
      color: #fff;
      font-size: 1.2em;
      text-align: center;
      text-shadow: 1px 1px #4b4a4a;
      display: block;
    }

    .signup-wrapper .company-details .title {
      width: 76%;
    }

    .signup-wrapper .signup-form .wrapper-2 {
      padding: 50px 40px;
      margin: 0;
    }

    .signup-wrapper .signup-form .login {
      display: inline;
    }

    .signup-wrapper .signup-form .form .content-item {
      text-align: initial;
    }

    .signup-wrapper .signup-form .form input[type="text"],
    .signup-wrapper .signup-form .form input[type="password"] {
      text-align: initial;
    }

    .signup-wrapper .signup-form .form-title {
      text-align: initial;
      padding: 0;
    }
  }

  .lbs {
    font-weight: bolder;
    text-decoration: none;
    color: #4b4a4a;
  }
</style>
<main>
  <div class="content-wrapper">
    <div class="content1">
      <div class="signup-wrapper shadow-box">
        <div class="company-details ">
          <div class="shadow"> </div>
          <div class="wrapper-1">
            <div class="logo"></div>
            <div class="slogan"></div>
          </div>
        </div>
        <div class="signup-form">
          <div class="wrapper-2">
            <div style="text-align:center;">
              <a href="/CT428_LTWeb/index.php">
                <img src="./img/logo.png" style="width:50px; border-radius: 30px;"></img>
              </a>
            </div>
            <div class="form-title" style="text-align:center;">
              CHANGE PASSWORD NOW !
            </div>
            <div class="form" style="padding-top: 20px;">
              <form name="change" action="" method="POST">
                <p class="content-item">
                  <label><a class="form-label lbs">Username:</a>
                    <input type="text" id="username" name="username" placeholder="Enter username" required>
                  </label>
                </p>

                <p class="content-item" style="padding-top: 10px;">
                  <label> <a class="form-label lbs">Old Password:</a>
                    <input type="password" id="oldpassword" placeholder="*****" name="oldpassword" required>
                  </label>
                </p>

                <p class="content-item" style="padding-top: 10px;">
                  <label> <a class="form-label lbs">New Password:</a>
                    <input type="password" id="newpassword" placeholder="*****" name="newpassword" required>
                  </label>
                  <?php
                  if (isset($_POST['change']) && $check3 == 1) {
                    echo $fail3;
                  }
                  ?>
                </p>

                <p class="content-item" style="padding-top: 10px;">
                  <button type="submit" name="change" class="signup" style="margin-top: 10px;">CHANGE</button>
                  <button type="reset" class="signup" style="margin-top: 10px;">RESET</a></button>
                </p>

              </form>
              <p class="content-item">
                <a href="index.php?quanly=dangnhap"><button type="button" style="margin-top: 5px;" class="signup1">SIGN IN</button></a>
                <a href="index.php?quanly=thongtin"><button type="button" style="margin-top: 5px;" class="signup1">SIGN UP</button></a>
              </p>

              <!--  -->
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</main>