<div id="signUpContainer" class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <form id="signUpForm" class="ajaxForm" action="sign-up.php" method="post">
        <div class="form-group">
          <label for="firstName">First Name</label>
          <input id="firstName" class="form-control" type="text" name="firstName">
          <span></span>
        </div>
        <div class="form-group">
          <label for="lastName">Last Name</label>
          <input id="lastName" class="form-control" type="text" name="lastName">
          <span></span>
        </div>
        <div class="form-group">
          <label for="signUpEmail">Email</label>
          <input id="signUpEmail" class="form-control" type="email" name="email">
          <span></span>
        </div>
        <div class="form-group">
          <label for="signUpPassword">Password</label>
          <input id="signUpPassword" class="form-control" type="password" name="password">
          <span></span>
        </div>
        <div class="form-group">
          <label for="signUpConfirmPassword">Confirm Password</label>
          <input id="signUpConfirmPassword" class="form-control" type="password" name="confirmPassword">
          <span></span>
        </div>
        <button type="submit">Sign Up</button>
      </form>
    </div>
  </div>
</div>
