<?php
    $konek = mysqli_connect("localhost", "root", "", "register")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <style>
        * {box-sizing: border-box}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
    </style>
</head>
<body>
<form action="" method="post">
  <div class="container">
    <h1>Pendaftaran</h1>
    <p>Silahkan isi formulir dibawah ini untuk membuat akun</p>
    <hr>

    <label for="email"><b>username</b></label>
    <input type="text" placeholder="username" name="username" id="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" name= "submit" class="registerbtn">Daftar</button>
  </div>

  <div class="container signin">
    <p>Sudah memiliki akun? <a href="login.php">Sign in</a>.</p>
  </div>
</form>
<?php
    if(isset($_POST['submit'])){

        // proses insert data
        $query_insert = 'insert into login (username, password) value
        ("'.addslashes($_POST['username']).'", "'.md5($_POST['psw']).'")';

        $run_query_insert = mysqli_query($konek, $query_insert);

        if($run_query_insert){
            echo 'simpan data berhasil';
        }else{
            echo 'simpan data gagal';
        }

    }
?>
</body>
</html>