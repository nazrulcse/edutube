<div class="modal fade" id="registration-modal" tabindex="-1" role="dialog" aria-labelledby="modalLoginForm">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header auth-modal-header">
        <h4 class="modal-title">Signup to create your Edutube account</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="edutube-register-form" class="form-wrapper sign-in-wrap">
            {!! Form::open(['route' => 'register', 'class' => 'edutube-auth-form form-horizontal', 'role' => 'form', 'method' => 'POST'] ) !!}

                {{ csrf_field() }}

                <div class="form-group">
                 <label class="input-label"> Full Name: </label>
                 <div class="group-input">
                  <span class='input-icon'> <i class='fa fa-user-o'></i></span>
                  <input type="text" class="input-inner" name="name">
                  </div>
                </div>

                <div class="form-group">
                 <label class="input-label"> Email: </label>
                 <div class="group-input">
                  <span class='input-icon'> <i class='fa fa-envelope-o'></i></span>
                  <input type="text" class="input-inner" name="email">
                  </div>
                </div>

                <div class="form-group">
                 <label class="input-label"> Password: </label>
                 <div class="group-input">
                  <span class='input-icon'> <i class='fa fa-lock'></i></span>
                  <input type="password" class="input-inner" name="password">
                  </div>
                </div>

                <div class="form-group">
                 <label class="input-label"> Confirm Password: </label>
                 <div class="group-input">
                  <span class='input-icon'> <i class='fa fa-lock'></i></span>
                  <input type="password" class="input-inner" name="password_confirmation">
                  </div>
                </div>                

                <div>
                  <label for="parent">
                    <input type="checkbox" id='parent' name='parent' value='1'> 
                    <span class='hints'> Click here if you are parent </span> 
                  </label>
                </div>

                <input type="submit" class="btn btn-block primary-btn btn-size-2x" name="submit" value="Sign up">

                <span class='hints'> 
                  By signing up you are agree to our 
                  <a href='#'> Terms & Conditions </a>
                </span> 
            {!! Form::close() !!}
          </div>
      </div>
      <div class="modal-footer auth-modal-footer">
        Have an account? <a href='#' data-target="#login-modal" data-toggle="modal"> Sign in </a>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    $(function () {
      $('#registration-modal').on('show.bs.modal', function (e) {
         $('#login-modal').modal('hide');
       });
    });
</script>
