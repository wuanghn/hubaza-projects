<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">IZquote</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse pull-right navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                @if(Session::has('info_user'))
                <li>
                    <a href="{{url('logout')}}">Hi {{Session::get('info_user')->fullname}}!</a>
                </li>
                <li>
                    <a href="{{url('create')}}">
                        <span class="btn btn-primary">Submit</span></a>
                </li>
                @else
                <li>
                    <a data-toggle="modal" data-target="#myModal" href="#">Login</a>
                </li>
                <li>
                    <a data-toggle="modal" data-target="#myModal" href="#">
                        <span class="btn btn-primary">Submit</span></a>
                </li>
                @endif
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>


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