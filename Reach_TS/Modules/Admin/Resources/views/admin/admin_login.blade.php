@extends('admin::layouts.master')

@section('content')
    <div class="animated bounceInDown">
        <div class="container">
            <span class="error animated tada" id="msg"></span>
            <form name="" me="form1" class="box" onsubmit="return checkStuff()" action="" method="POST" enctype="multipart/form-data">
            	@csrf
              <h4>Admin<span>Reach</span></h4>
              <h5>Sign in to your account.</h5>
                <input type="email" name="email" placeholder="Email" autocomplete="off">
                <i class="typcn typcn-eye" id="eye"></i>
                <input type="password" name="password" placeholder="Passsword" id="pwd" autocomplete="off">
                <label>
                  <input type="checkbox">
                  <small class="rmb">Remember me</small>
                </label>
                <a href="#" class="forgetpass">Forget Password?</a>
                <input type="submit" value="Sign in" class="btn1">
              </form>
                <a href="#" class="dnthave">Don’t have an account? Sign up</a>
        </div> 
        <div class="footer">
            <span>Made with <i class="fa fa-heart pulse"></i> <a href="https://www.google.de/maps/place/Augsburger+Puppenkiste/@48.360357,10.903245,17z/data=!3m1!4b1!4m2!3m1!1s0x479e98006610a511:0x73ac6b9f80c4048f"><a href="https://codepen.io/lordgamer2354">By Nguyễn Thị Là</a></span>
        </div>
    </div>
@stop
