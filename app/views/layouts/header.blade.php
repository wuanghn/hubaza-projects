<!-- Navigation -->

<?php
    $value = '';
   if(Session::has('info_user') && Session::get('info_user')->email=='kelvin.timsach@gmail.com')
    $value = 'admin';
        
?>
<input type="hidden" id="login_admin" value="{{$value}}"/>





<nav id="myNavmenu" class="navmenu navmenu-default navmenu-fixed-left offcanvas" role="navigation">
  <ul class="nav navmenu-nav">
    @if(Session::has('info_user'))
    <li>
        <a href="">Hi {{Session::get('info_user')->fullname}}!</a>
    </li>

    <li>
        <a href="{{url('profile')}}"><i class="fa fa-user"></i> Trang cá nhân</a>
    </li>

    <li>
        <a href="{{url('collect')}}"><i class="fa fa-skyatlas"></i> Bộ sưu tập</a>
    </li>
    
    <li>
    <a href="{{url('create')}}"><i class="fa fa-plus"></i> Đăng bài</a>
    </li>


    <li>
        <a href="{{url('logout')}}"><i class="fa fa-sign-out"></i> Đăng xuất</a>
    </li>

        @else
        <li>
            <a data-toggle="modal"  href="{{url('login')}}" style="padding-top: 20px;color:white"><i class="fa fa-sign-in"></i> Đăng nhập</a>
        </li>
        <li>
            <a data-toggle="modal"  href="{{url('login')}}">
                <span class="btn btn-primary">Đăng bài</span></a>
            </li>
            @endif
        </ul>
    </nav>




    <div class="navbar navbar-default navbar-fixed-top">
      <a type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".navmenu" data-canvas="body">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </a>
    <div class="container">
        <a class="navbar-brand" href="{{url()}}" id="da_logo">
            <img src="{{asset('public/logo-desktop.png')}}" class="logo_destop">
            <img src="{{asset('public/logo-mobile.png')}}" class="logo_mobile">
        </a>
      <ul class="da_navmenu-nav">
        @if(Session::has('info_user'))
        
        <li>
            <div class="dropdown">
          <a href="#" class=" dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            Hi {{Session::get('info_user')->fullname}}!
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu da_dropdown_menu" aria-labelledby="dropdownMenu1">
            <li><a href="{{url('profile')}}"><i class="fa fa-user"></i> Trang cá nhân</a></li>
            <li><a href="{{url('collect')}}"><i class="fa fa-skyatlas"></i> Bộ sưu tập</a></li>
            <li><a href="{{url('logout')}}"><i class="fa fa-sign-out"></i> Đăng xuất</a></li>
          </ul>
        </div>
        <!-- <a href="{{url('profile')}}" style="padding-top: 20px;">Hi {{Session::get('info_user')->fullname}}!</a> -->
        </li>
        <!-- <li style="margin-top: 5px; margin-right: 20px;">
            <a href="{{url('logout')}}" style="padding-top: 20px;">Logout</a>
        </li> -->
        <li>
        <li>
            <a href="{{url('create')}}">
                <span class="btn btn-primary">Đăng bài</span></a>
            </li>
            @else
            <li>
                <a data-toggle="modal" data-target="#myModal" href="#" style="padding-top: 20px;">Đăng nhập</a>
            </li>
            <li>
                <a data-toggle="modal" data-target="#myModal" href="#">
                    <span class="btn btn-primary">Đăng bài</span></a>
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
            <h4 class="modal-title" id="myModalLabel">Đăng nhập</h4>
        </div>
        <div class="modal-body">
            <a class="btn btn-block btn-social btn-facebook" href="{{url('login-fb')}}">
                <i class="fa fa-facebook"></i> Đăng nhập Facebook
            </a>
            <a class="btn btn-block btn-social btn-google" href="{{url('login-gg')}}">
                <i class="fa fa-google"></i> Đăng nhập Google
            </a>
        </div>
    </div>
</div>
</div>