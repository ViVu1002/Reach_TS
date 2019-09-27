<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reach-Admin</title>
    <link rel="Shortcut Icon" href="{{asset('theme_admin/img/favicon.ico')}}" type="image/x-icon">
    <link href="{{asset('theme_admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="{{asset('theme_admin/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('theme_admin/css/datepicker3.css')}}" rel="stylesheet">
    <link href="{{asset('theme_admin/css/styles.css')}}" rel="stylesheet">
    
    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <script src="{{asset('theme_admin/ckeditor/ckeditor.js')}}"></script>
</head>
<body>
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{route('admin.home')}}"><span>Reach</span>Admin</a>
            </div>
        </div>
    </nav>
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            <div class="profile-userpic">
                <img src="{{asset('theme_admin/img/logo.png')}}" class="img-responsive" alt="">
            </div>
            <div class="profile-usertitle">
                <div class="profile-usertitle-name">Username</div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        <form role="search">
            <div class="input-group stylish-input-group" style="border: 1px solid #dedede ; border-radius: 5px">
                <input type="text" class="form-control" placeholder="Search" name="name" style="border: none; box-shadow: none;" value="{{\Request::get('name')}}">
                <span class="input-group-addon" style="background: transparent; border: none; ">
                    <button type="submit" style="background: transparent; border: none">
                        <span class="glyphicon glyphicon-search" style="font-size: 16px"></span>
                    </button>
                </span>
            </div>
        </form>
        <ul class="nav menu">
            <li class="{{ \Request::route()->getName() == 'admin.home' ? 'active' : '' }}"><a href="{{route('admin.home')}}"><em class="fa fa-home">&nbsp;</em>Trang chủ</a></li>
            <li class="{{ \Request::route()->getName() == 'admin.get.list.category' ? 'active' : '' }}"><a href="{{route('admin.get.list.category')}}"><em class="fa fa-calendar">&nbsp;</em> Thể loại</a></li>
            <li class="{{ \Request::route()->getName() == 'admin.get.list.loaitin' ? 'active' : '' }}"><a href="{{route('admin.get.list.loaitin')}}"><em class="fa fa-bar-chart">&nbsp;</em> Loại tin</a></li>
            <li class="{{ \Request::route()->getName() == 'admin.get.list.tintuc' ? 'active' : '' }}"><a href="{{route('admin.get.list.tintuc')}}"><em class="fa fa-file">&nbsp;</em> Tin tức</a></li>
            <li class="{{ \Request::route()->getName() == 'admin.get.list.introduce' ? 'active' : '' }}"><a href="{{route('admin.get.list.introduce')}}"><em class="fa fa-university">&nbsp;</em> Giới thiệu</a></li>
            <li class="{{ \Request::route()->getName() == 'admin.get.list.contact' ? 'active' : '' }}"><a href="{{route('admin.get.list.contact')}}"><em class="fa fa-phone">&nbsp;</em>Liên hệ</a></li>
            <li class="{{ \Request::route()->getName() == 'admin.get.list.slide' ? 'active' : '' }}"><a href="{{route('admin.get.list.slide')}}"><em class="fa fa-image">&nbsp;</em> Slide</a></li>
            <li class="{{ \Request::route()->getName() == 'admin.get.list.comment' ? 'active' : '' }}"><a href="{{route('admin.get.list.comment')}}"><em class="fa fa-comment">&nbsp;</em> Comment</a></li>
            <li class="{{ \Request::route()->getName() == 'admin.get.list.user' ? 'active' : '' }}"><a href="{{route('admin.get.list.user')}}"><em class="fa fa-user">&nbsp;</em> User</a></li>
            <li><a href="login.html"><em class="fa fa-power-off">&nbsp;</em> Đăng xuất</a></li>
        </ul>
    </div>
        
        @yield('content')
    
    <script src="{{asset('theme_admin/js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('theme_admin/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" language="javascript" src="{{asset('theme_admin/ckeditor/ckeditor.js')}}" ></script>
    <script>
        var pwd = document.getElementById('pwd');
var eye = document.getElementById('eye');

eye.addEventListener('click',togglePass);

function togglePass(){

   eye.classList.toggle('active');

   (pwd.type == 'password') ? pwd.type = 'text' : pwd.type = 'password';
}

// Form Validation

function checkStuff() {
  var email = document.form1.email;
  var password = document.form1.password;
  var msg = document.getElementById('msg');
  
  if (email.value == "") {
    msg.style.display = 'block';
    msg.innerHTML = "Please enter your email";
    email.focus();
    return false;
  } else {
    msg.innerHTML = "";
  }
  
   if (password.value == "") {
    msg.innerHTML = "Please enter your password";
    password.focus();
    return false;
  } else {
    msg.innerHTML = "";
  }
   var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  if (!re.test(email.value)) {
    msg.innerHTML = "Please enter a valid email";
    email.focus();
    return false;
  } else {
    msg.innerHTML = "";
  }
}

        window.onload = function () {
    var chart1 = document.getElementById("line-chart").getContext("2d");
    window.myLine = new Chart(chart1).Line(lineChartData, {
    responsive: true,
    scaleLineColor: "rgba(0,0,0,.2)",
    scaleGridLineColor: "rgba(0,0,0,.05)",
    scaleFontColor: "#c5c7cc"
    });
};
    </script>
        
</body>
</html>