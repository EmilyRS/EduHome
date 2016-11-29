
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login Form</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>adminFiles/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>adminFiles/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="https://colorlib.com/polygon/gentelella/css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>adminFiles/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
          <!--	<?php echo'<pre>'.print_r($this->session->userdata,true).'</pre>';?>-->
          	<?php echo validation_errors('<p class="error">'); ?>
            <form role="form" accept-charset="utf-8" method="post" action="<?php echo base_url(); ?>index.php/admin/user/login">
              <h1>Login Form</h1>
              <p>Please log in using your credentials</p>
              <div>
                <input name="email" type="text" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input name="password" type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div class="form-group">
		        <label>
		          <?php echo form_checkbox('remember','1',FALSE);?> Remember me
		        </label>
		      </div>
              <div>
                <button type="submit" class="btn btn-default submit">Log in</button>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

       
            </form>
          </section>
        </div>

      </div>
    </div>
  </body>
</html>