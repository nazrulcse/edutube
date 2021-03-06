<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="modalLoginForm">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header auth-modal-header">
        <h4 class="modal-title">Signin to your Edutube account</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="edutube-register-form" class="form-wrapper sign-in-wrap">
            {!! Form::open(['route' => 'login', 'class' => 'form-horizontal edutube-auth-form', 'role' => 'form', 'method' => 'POST'] ) !!}

                {{ csrf_field() }}

                <div class="form-group">
                 <label class="input-label"> Email: </label>
                 <div class="group-input">
                  <span class='input-icon'> <i class='fa fa-user-o'></i></span>
                  <input type="email" class="input-inner" name="email">
                  </div>
                </div>

                <div class="form-group">
                 <label class="input-label"> 
                   Password: 
                   <span style='font-weight: normal;' class='hints pull-right'> 
                     <a href='#' data-target="#forgot-password-modal" data-toggle="modal" style="color: #666666;">
                       Forgot password? 
                     </a>
                   </span>
                 </label>
                 <div class="group-input">
                  <span class='input-icon'> <i class='fa fa-lock'></i></span>
                  <input type="password" class="input-inner" name="password">
                  </div>
                </div>             

                <input type="submit" class="btn btn-block primary-btn btn-size-2x" name="submit" value="Sign in">

                <div style="margin-top: 5px;">
                  <label for="remember-me">
                    <input type="checkbox" id='remember-me' name='remember_me' value='1'> 
                    <span class='hints'> Keep me signed in. </span> 
                  </label>
                </div>

                <div class='or-text'>
                </div>

                <div class="form-group">
                  <a href="#" class="btn btn-block facebook-btn">
                    <i class="fa fa-facebook-f icon"></i> Sign in with Facebook
                  </a>
                </div>

                <div class="form-groupx">
                  <a href="#" class="btn btn-block google-btn">
                    <i class="fa fa-google icon"></i> Sign in with Google
                  </a>
                </div>

            {!! Form::close() !!}
          </div>
      </div>
      <div class="modal-footer auth-modal-footer">
        Don not have an account? <a href='#' data-target="#registration-modal" data-toggle="modal"> Sign up </a>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    $(function () {
       $('#login-modal').on('show.bs.modal', function (e) {
         $('#registration-modal').modal('hide');
       });
    });
</script>
