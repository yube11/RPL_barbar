<!DOCTYPE html>
<html>
<head>
	<title> Dashboard | TUMAN</title>
</head>
<body>
	<br />
	<h3 align="center">WELCOME!</h3><br />

	@if(isset(Auth::user()->email))
		<div class="alert alert-danger success-block">
			<strong>Welcome {{Auth::user()->first_name}}</strong><br />
			<a href="{{url('/login/logout')}}">Logout</a>
		</div>
	@else
		<script>window.location={{url('/login/successlogin')}};</script>
	@endif

</body>
</html>