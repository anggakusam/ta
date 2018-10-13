<?php
session_start();
  if(isset($_SESSION['admin'])) {
  header('location:index.php'); 
  }
  require_once("koneksi.php");
  ?>

<html>
<head>
<title>Dinas Pangan Dan Pertanian</title> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="shortcut icon" href="../images/iconrpls.png" />
    <title>BIDAN</title>
    <link rel="icon" type="image/gif" href="../img/icon.png" />

<style>
.masukadmin{
    background-image: url(../images/bg.jpg);
    background-repeat: repeat;
} 
    
body{
    background-color: #fafafa;
}

.bungkuslogin{ width:280px; 
				height:250px; 
				background-color:#f2f2f2; 
				border:5px solid #000; 
				border-radius:5px;
				margin-top:50px;
				padding-top:40px;
			 }
			 
.loginhead{
	min-height: 50px;
	margin-left:0px;
	margin-top:-30px;
	margin-bottom:30px;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:26px;
	font-weight:bold;
	color:#333;
	border-bottom:3px solid #333;
    padding: 5px 0px 5px 0px;
	}


.submitlogin{
		width:250px;
		height:35px;
		border:2px solid #000;
		background-color:#1E824C;
		color:#FFF;
        cursor: pointer;
        border-radius: 5px;
	}
	
.inputloginAwal{ 
    width:250px;
    height:35px;
    border:1px solid #999;
	padding:5px;
    border-radius: 5px 5px 0px 0px ;
}
.inputloginTengah{ 
    width:250px;
    height:35px;
    border:1px solid #999;
    border-top: none;
	padding:5px;
    border-radius: 0px;
}
.inputloginAkhir{ 
    width:250px;
    height:35px;
    border:1px solid #999;
    border-top: none;
	padding:5px;
    border-radius:  0px 0px 5px 5px;
}


    
</style>    
</head>

<body class="masukadmin">
<center>
    
<div class="kepala">
	<div class="isikepala">
    	<div>
        	<h2>&nbsp;</h2>
        </div>
    </div>
</div>
<div class="bawahkepala"></div>

<div class="bungkuslogin">
    <div class="loginhead">
        Masuk Admin <br><br>
    </div>
    <div class='login'>
    <form action="aksi.php?aksi=masuk_admin" method="post">  <center>      
        <input class='inputloginAwal' name='username' placeholder='Username...' type='text' size='25px' autocomplete="off" required autofocus>
        <input class='inputloginAkhir' name='password' placeholder='Password...' type='password' size='25px' autocomplete="off" required/><br><br /></center>
        <input class='submitlogin' type=submit name=submit value='Masuk'>
    </form>
</div>
</div>
    
</center>
</body>
<!-- &copy; copyright SIG Konservasi -->
</html>