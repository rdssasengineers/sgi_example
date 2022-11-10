<!-- Login de la aplicación SGI -->
<style>
  .footer-login {
    text-align: right !important;
  }

  /* break point: ≥1400px */
  @media (min-width: 760px) {
    .footer-login {
      position: absolute;
      top: 37rem;
      right: 2rem;
    }
  }
</style>
<div class="main-wrapper">
  <div class="row auth-wrapper gx-0">
    <div class="col-lg-4 col-xl-3 bg-dark auth-box-2 on-sidebar">
      <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="row justify-content-center text-center">
          <div class="col-md-7 col-lg-12 col-xl-9">
            <div>
              <span class="db"><img src="./views/assets/images/logo-light-icon.png" alt="logo" /></span>
              <span class="db"><img src="./views/assets/images/logo-light-text.png" alt="logo" /></span>
            </div>
            <h2 class="text-white mt-4 fw-light">
              <span class="font-weight-medium">SGI</span> <small class="fs-6">Sistema de Gestión de Inventario</small>
            </h2>
            <!-- <p class="op-5 text-white fs-4 mt-4">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
              do eiusmod tempor incididunt.
            </p> -->
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-8 col-xl-9 d-flex align-items-center justify-content-center">
      <div class="row justify-content-center w-100 mt-4 mt-lg-0">
        <div class="col-lg-6 col-xl-3 col-md-7">
          <div class="card" id="loginform">
            <div class="card-body">
              <h2>Bienvenido a SGI</h2>
              <form class="form-horizontal mt-4 pt-4 needs-validation" novalidate action="index.html">
                <div class="form-floating mb-3">
                  <input type="email" class="form-control form-input-bg" id="tb-email" placeholder="name@example.com" required />
                  <label for="tb-email">Ingrese su correo electrónico</label>
                  <div class="invalid-feedback">Debe ingresar su correo electrónico</div>
                </div>

                <div class="form-floating mb-3">
                  <input type="password" class="form-control form-input-bg" id="text-password" placeholder="*****" required />
                  <label for="text-password">Contraseña</label>
                  <div class="invalid-feedback">Debe ingresar un contraseña</div>
                </div>
                <div class="d-flex align-items-stretch button-group mt-4 pt-2">
                  <button type="submit" class="btn btn-info btn-lg px-4">
                    Ingrear
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class="card" id="recoverform">
            <div class="card-body">
              <div class="logo">
                <h3>Recover Password</h3>
                <p class="text-muted fs-4">
                  Enter your Email and instructions will be sent to you!
                </p>
              </div>
              <div class="mt-4 pt-4">
                <!-- Form -->
                <form action="index.html">
                  <!-- email -->
                  <div class="mb-4 pb-2">
                    <div class="form-floating">
                      <input class="form-control form-input-bg" type="email" required="" placeholder="Email address" />
                      <label for="tb-email">Email</label>
                    </div>
                  </div>
                  <div class="d-flex align-items-stretch button-group">
                    <button type="submit" class="btn btn-info btn-lg px-4">
                      Submit
                    </button>
                    <a href="javascript:void(0)" id="to-login" class="
                            btn btn-lg btn-light-secondary
                            text-secondary
                            font-weight-medium
                          ">Cancel</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="text-right">
          <p class="footer-login"><?php echo date('Y') . ' © Todos los derechos reservados.'; ?></p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- fin del login -->