<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Masuk Aplikasi Daftar Buku</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style type="text/css">
        .container{
            width: 30%;
            padding: 20px;
            background-color: #FFFFFF;
        }
        h1{
            margin-top: 40px;
            text-align: center;
            font-family: Barlow;
            font-size: 48px;
            font-weight: bold;
            color: black;
        }
        .form-label {
            font-family: Barlow;
            font-weight: 600;  
        }
        .input-control {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            font-family: Barlow;
            font-weight: 200;
            background-color: #EEEEEE;
            box-sizing: border-box;
            border-radius: 5px;
            border: 0px;
        }
        .btn {
            width: 100%;
            padding: 10px;
            font-family: Barlow;
            font-weight: 600;
            background-color: #00ADB5;
            color: #FFFFFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn:hover{
          background-color: #0C7B93;
          color: white;      
      }
    </style>
</head>
<body>   
	<div class="container">
        <h1>Welcome! Silahkan Login</h1>
		<!-- login -->
        <br></br>
        <form action="" method="POST">
        <img src="images/logowbooks.png" class="img-fluid" alt="logo" style="width: 220px; height: 90px; margin-left: 55px;">
        <div class ="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="user" placeholder="Username" class="input-control">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="pass" placeholder="Password" class="input-control">
        </div>    
            <center><input type="submit" name="submit" value="Login" class="btn"><center>
        </form>
        <?php 	
			if(isset($_POST['submit'])){ 
				session_start();
				include 'koneksi.php';

				$user = mysqli_real_escape_string($koneksi, $_POST['user']);
				$pass = mysqli_real_escape_string($koneksi, $_POST['pass']);

				$cek = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username = '".$user."' AND password = '".md5($pass)."'");
				if(mysqli_num_rows($cek) > 0){
					$d = mysqli_fetch_object($cek);
					$_SESSION['status_login'] = true;
					$_SESSION['a_global'] = $d;
					$_SESSION['id'] = $d->admin_id;
					echo '<script>window.location="index.php"</script>';
				}else{
					echo '<script>alert("Username atau password Anda salah!")</script>';
				}

			}
        ?>
	</div>
		<!-- jQuery -->
		<script src="plugins/jquery/jquery.min.js"></script>
		<!-- Bootstrap -->
		<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- Alert -->
		<script src="plugins/alert.js"></script>
</body>
</html>