<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="en-in" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Greater Patna Housing</title>
<link href="bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="layout1.css" />
<style type="text/css">
.auto-style1 {
	font-size: x-large;
	font-family: "AR BERKLEY";
	color: red;
}
body{
  background: #f2f2f2;
  font-family: 'Open Sans', sans-serif;
}

</style>
</head>
<body>
<?php include 'header.php';?>
<br />
<div class="container">
    <h2>Create a New Account</h2>
    <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
    <div class="regisFrm">
        <form action="userAccount.php" method="post">
            <input type="text" name="first_name" placeholder="FIRST NAME" required="" />
            <input type="text" name="last_name" placeholder="LAST NAME" required="" />
            <input type="email" name="email" placeholder="EMAIL" required="" />
            <input type="text" name="phone" placeholder="PHONE NUMBER" required="" />
            <input type="password" name="password" placeholder="PASSWORD" required="" />
            <input type="password" name="confirm_password" placeholder="CONFIRM PASSWORD" required="" />
            <div class="send-button">
                <input type="submit" name="signupSubmit" value="CREATE ACCOUNT" />
            </div>
        </form>
    </div>
</div>
</body>
</html>