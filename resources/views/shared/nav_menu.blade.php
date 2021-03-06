<section id="main-menu"><!-- Main menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Brand and toggle get grouped for better mobile display -->
        <a class="edutube-navbar-brand navbar-brand" href="#">EDUTUBE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div  class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item dropdown thumb-dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Categories <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li role="presentation" class="dropdown-header">Head 1</li>
                <li>
                  <a href="#">
                    Preview carousel indicators
                    <div class="thumbnail">
                      <img class="img-responsive" src="http://krowdly.co/snippets/thumbnails/1.jpg">
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#">
                    Simple subscribe form
                    <div class="thumbnail">
                      <img class="img-responsive" src="http://krowdly.co/snippets/thumbnails/2.jpg">
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#">
                    Flat user profile
                    <div class="thumbnail">
                      <img class="img-responsive" src="http://krowdly.co/snippets/thumbnails/3.jpg">
                    </div>
                  </a>
                </li>
                <li class="divider"></li>
                <li role="presentation" class="dropdown-header">Thumbnail with caption</li>
                <li>
                  <a href="#">
                    Discount labels
                    <div class="thumbnail">
                      <img class="img-responsive" src="http://krowdly.co/snippets/thumbnails/4.jpg">
                      <div class="caption">
                        <p>You can add any text for describe thumbnail here.</p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
          <form class="form-inline mr-auto navbar-form">
            <input class="navbar-search-input" placeholder="Search..." name="">
          </form>
          <ul class="navbar-nav navbar-right right-menu-container">
            <li class="nav-item"><a href="#" class='nav-link'>Live Classes</a></li>
            <li class="nav-item"><a href="#" class='nav-link'>Become a Tutor</a></li>
            <li class="nav-item">
              <a href="#" class='nav-link'>
                <img src="{{asset('images/shopping-cart.jpg')}}" class="img-responsive" alt="">
              </a>
            </li>
            @if(Auth::check())
              <li class='nav-item'>
                <a style="margin-top: 5px" href="{{ url('/logout') }}" class="btn primary-btn">
                  Logout
                </a>
              </li>
            @else
              <li class="nav-item">
                <a style="margin-top: 5px" data-target="#login-modal" data-toggle="modal" class="btn default-btn-sm">Sign in</a>
              </li>
              <li class="nav-item">
                <a style="margin-top: 5px" data-target="#registration-modal" data-toggle="modal" class="btn primary-btn-sm">Sign up</a>
              </li>
            @endif
          </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
  </section><!-- Main menu End-->