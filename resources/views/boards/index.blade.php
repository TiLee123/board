
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
			<a class="navbar-brand" href="#">公告訊息管理系統</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
			<li>
				@if ($loginName!="")
				<a href="/logout"><i class="fa fa-user"></i>{{$loginName}}您好 登出</a></li>
				@else
				<a href="/loginPage"><span class="glyphicon glyphicon-log-in"></span> 登入</a></li>
				@endif
			</ul>
		</div>
	</nav>
	@if ($loginName!="")
	<h3>
		<a href="/pushs/create" class="btn btn-md btn-primary pull-right">推播</a>
		<a href="/orders/create" class="btn btn-md btn-warning pull-right">訂閱</a>
		<a href="/boards/create" class="btn btn-md btn-success pull-right"><span class="glyphicon glyphicon-plus"></span> 新增</a>
	</h3>
	@endif
	<table class="table table-hover">
	  <thead>
		<tr>
		  <th>公告標題</th>
		  <th>&nbsp;</th>
		</tr>
	  </thead>
	  <tbody>
		  @foreach ($boardList as $board)
		  <tr>
			  <td><i class="fa fa-bullhorn"></i> <a href="boards/{{ $board->boardId }}" data-ajax="false">{{$board->boardTitle}}</a></td>
			  <td>
				@if ($loginName!="")
				<span class="pull-right">
					<form method="post" action="/boards/{{$board->boardId}}"> 
						<a href="/boards/{{$board->boardId}}/edit" class="btn btn-xs btn-info"><span class="glyphicon glyphicon-pencil"></span> 修改</a> | 
						@csrf
						@method('DELETE') <!--接刪除-->
						<button type="submit" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-remove"></span> 刪除</button>
					</form>
				</span>
			  </td>
			  @endif
		  </tr>
		  @endforeach  
		</tbody>
	</table>
   </div>
</body>

</html>