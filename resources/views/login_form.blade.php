
@extends('layouts.home')

@section('content')
{{view('layouts.inc.header')}}
	<div class="lms-navigation-bar">
		<div class="container">
			<div><img src="https://www.deal4loans.com/images/deal4loans-logo.png"></div>
		</div>
		<div style="float:right;color:#FFF !important;"><a href="https://www.deal4loans.com/callinglms/lmslogin_wfh.php" style="float:right;color:#FFF !important;">Login for Work From Home</a></div>
	</div>
	<section>
		<div class="lms-form">
			<form method="post" action="{{ route('login') }}">
			@csrf
			<span><img src="../images/lms-login-icon.png"></span>
			<div class="form-group" style="color: red;text-align: center;"></div>
			<div class="form-group"><input placeholder="Enter Your Name" type="text" name="callerName" size="20" maxlength="50" autocomplete="off"></div>
			<div class="form-group"><input placeholder="Enter Email" type="text" name="email" size="20" maxlength="50"  autocomplete="off"></div>
			@if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
			<div class="form-group"><input placeholder="Enter Password" type="password" name="password" size="20" maxlength="50" autocomplete="off"></div>
			@if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif
			<div class="form-group"><button name="submit" type="submit">Submit</button><!---<input name="submit" type="image"  src="../images/login-form-lgn-sbtn.gif" style="width:111px; height:35px; border:none;">--></div>
			</form>
		</div>
	</section>
@endsection