<?php
session_start();

if (isset($_POST['admin'])) {
    $_SESSION['user_type'] = 'admin';
}

if (isset($_POST['voter'])) {
    $_SESSION['user_type'] = 'voter';
}

if (isset($_SESSION['user_type'])) {
    if ($_SESSION['user_type'] === 'admin') {
        // Redirect to the admin page or perform other admin-specific actions.
        header("Location: admin/home.php");
        exit();
    } elseif ($_SESSION['user_type'] === 'voter') {
        // Redirect to the voter page or perform other voter-specific actions.
        header("Location: home.php");
        exit();
    }
}
?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition login-page">
<div class="login-box">
  	<div class="login-logo">
  		<b> Welcome to Online Voting System<b>
  	</div>
    <div class="login-box-body">
    	<p class="login-box-msg">Log In as</p>
        <form method="post">
            <div class="row">
    			<div class="col-xs-6">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="admin"> Admin </button>
        		</div>
                <div class="col-xs-6">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="voter"> Voter </button>
        		</div>
      		</div>
        </form>
    </div>
</div>
<?php include 'includes/scripts.php' ?>
</body>
</html>
