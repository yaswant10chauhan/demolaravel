
@extends('layouts.home')

@section('content')
	<div class="lms-navigation-bar">
		<div class="container">
			<div><img src="https://www.deal4loans.com/images/deal4loans-logo.png"></div>
		</div>
		<div style="float:right;color:#FFF !important;"><a href="https://www.deal4loans.com/callinglms/lmslogin_wfh.php" style="float:right;color:#FFF !important;">Login for Work From Home</a></div>
	</div>
	<section>
		<div class="lms-form">
        <form method="POST" action="{{ route('register') }}">
        @csrf
			<h2>Registration</h2>
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
			<div class="form-group" style="color: red;text-align: center;"></div>
			<div class="form-group"><input placeholder="Enter Your Name" type="text" name="name" size="20" maxlength="50" autocomplete="off"></div>
			<div class="form-group"><input placeholder="Enter Email" type="text" name="email" size="20" maxlength="50"  autocomplete="off"></div>
            <div class="form-group"><input placeholder="Enter Mobile" type="text" name="mobile"  autocomplete="off"></div>
			<div class="form-group"><input placeholder="Enter password" type="password" name="password" size="20" maxlength="50" autocomplete="off"></div>
			
			<div class="form-group"><button name="submit" type="submit">Submit</button><!---<input name="submit" type="image"  src="../images/login-form-lgn-sbtn.gif" style="width:111px; height:35px; border:none;">--></div>
			</form>
		</div>
	</section>
@endsection