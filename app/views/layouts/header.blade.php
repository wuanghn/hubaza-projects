<!-- Navigation -->


<nav id="myNavmenu" class="navmenu navmenu-default navmenu-fixed-left offcanvas" role="navigation">
  <ul class="nav navmenu-nav">
    @if(Session::has('info_user'))
    <li>
        <a href="{{url('logout')}}" style="padding-top: 20px;">Hi {{Session::get('info_user')->fullname}}!</a>
    </li>
    <li>
        <a href="{{url('create')}}">
            <span class="btn btn-primary">Submit</span></a>
        </li>
        @else
        <li>
            <a data-toggle="modal"  href="#" style="padding-top: 20px;">Login</a>
        </li>
        <li>
            <a data-toggle="modal"  href="#">
                <span class="btn btn-primary">Submit</span></a>
            </li>
            @endif
        </ul>
    </nav>



    <div class="navbar navbar-default navbar-fixed-top">
      <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".navmenu" data-canvas="body">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <div class="container">
        <a class="navbar-brand" href="http://izquote.com">IZquote</a>
      <ul class="da_navmenu-nav">
        @if(Session::has('info_user'))
        <li>
            <a href="{{url('logout')}}" style="padding-top: 20px;">Hi {{Session::get('info_user')->fullname}}!</a>
        </li>
        <li>
            <a href="{{url('create')}}">
                <span class="btn btn-primary">Submit</span></a>
            </li>
            @else
            <li>
                <a data-toggle="modal" data-target="#myModal" href="#" style="padding-top: 20px;">Login</a>
            </li>
            <li>
                <a data-toggle="modal" data-target="#myModal" href="#">
                    <span class="btn btn-primary">Submit</span></a>
                </li>
                @endif
            </ul>
        </div>

    </div>





    <!-- Modal -->
    <div class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content bs-example-modal-sm">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Login</h4>
        </div>
        <div class="modal-body">
            <a class="btn btn-block btn-social btn-facebook" href="{{url('login-fb')}}">
                <i class="fa fa-facebook"></i> Sign in with Facebook
            </a>
            <a class="btn btn-block btn-social btn-google" href="{{url('login-gg')}}">
                <i class="fa fa-google"></i> Sign in with Google
            </a>
        </div>
    </div>
</div>
</div>