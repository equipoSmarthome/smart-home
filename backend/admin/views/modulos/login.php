



  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-form-title" style="background-image: url(././img/logo-pequeo.png);">
          
        </div>

        <form class="login100-form validate-form" method="post">
          <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
            <span class="label-input100">Correo</span>
            <input class="input100" type="email" name="user" placeholder="Correo Electronico">
            <span class="focus-input100"></span>
          </div>
          <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
            <span class="label-input100">Password</span>
            <input class="input100" type="password" name="password" placeholder="Password">
            <span class="focus-input100"></span>
          </div>

          <div class="container-login100-form-btn">
            <button type="submit"class="login100-form-btn">
              Login
            </button>
          </div>
        </form>

      <?php 

        $iniciarSesion = new ControllerSesionp();
        $iniciarSesion -> iniciarSesionCtr();

      ?>
      </div>
    </div>
  </div>

     
