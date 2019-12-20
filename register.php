<!DOCTYPE html>
<html>
<head>
	<title>Register</title>

	<?php include_once(DIRNAME.'view/template/external.php'); ?>
</head>
<body>
<div class="bgded overlay light pb-5" style="background-image:url('https://www.marykay.ua/-/media/images/mk/europe/ukraine/esuite/toolkits/05-18/founders-section/734109-mary-kay-founder-animated-hero.gif?h=529&w=945&la=ru-UA&hash=89779E97CA33BED3567576A2DF816FC85F945945');">
    <div class="wrapper row0">
        <?php include_once(DIRNAME.'view/template/header.php'); ?>
    </div>
    <div class="wrapper row1">
        <?php include_once(DIRNAME.'view/template/sidenav.php'); ?>
    </div>

    <div id="login-overlay" class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
             <h4 class="text-center text-dark">Register</h4>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-md-12">
                      <div class="well">
                          <form id="loginForm" method="POST" action="<?php uri() ?>registration" novalidate="novalidate">
                              <div class="form-group">
                                  <label for="username" class="control-label">Name</label>
                                  <input type="text" class="form-control" id="username" name="name" value="" required="" title="Please enter you username" placeholder="name">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="username" class="control-label">Email</label>
                                  <input type="email" class="form-control" id="username" name="email" value="" required="" title="Please enter you username" placeholder="example@gmail.com">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label">Password</label>
                                  <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password">
                                  <span class="help-block"></span>
                              </div>
                              
                              <button name="register" type="submit" class="btn btn-success btn-block">Sign up</button>
                      
                          </form>
                      </div>
                  </div>
                
              </div>
          </div>
      </div>
  </div>
</div>
<?php include_once(DIRNAME.'view/template/footer.php'); ?>

</body>
</html>