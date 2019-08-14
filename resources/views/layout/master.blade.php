
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Lab</title>
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<body>
<div data-role="page" data-theme="c">

<div class="container">
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
			<a class="navbar-brand" href="/boards">公告訊息管理系統</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
			<li>
				@if (Session::get('name')!="")
				<a href="/logout"><i class="fa fa-user"></i>{{Session::get('name')}}您好 登出</a></li>
				@else
				<a href="/loginPage"><span class="glyphicon glyphicon-log-in"></span> 登入</a></li>
				@endif
			</ul>
		</div>
	</nav>
	@yield('content')
   </div>
</body>

</html>