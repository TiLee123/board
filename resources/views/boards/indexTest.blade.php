
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

<div data-role="header">
	{{-- <h1>公告訊息管理系統</h1>
	<div style="clear:both; float:none; height:0; overflow:hidden">111</div>
	<div style="float:right">登入</div> --}}

	<div style="">
		<div style="float:left;"><h3>公告訊息管理系統</h3></div>
		<div style="float:right;"><h3><i class="fa fas fa-user">登入</i></h3></div>
		<div style="clear:both;"></div>
	  </div>
</div>

<div class="container">
	<h2>Employee List <a href="/employees/create" class="btn btn-md btn-success pull-right"><span class="glyphicon glyphicon-plus"></span> 新增</a></h2>
	<table class="table table-hover">
	  <thead>
		<tr>
		  <th>Firstname</th>
		  <th>Lastname</th>
		  <th>&nbsp;</th>
		</tr>
	  </thead>
	  <tbody>
		  @foreach ($boardList as $board)
		  <tr>
			  <td><i class="fa fa-bullhorn"></i>{{$board->boardName}}</td>
			  <td>
				<span class="pull-right">
					<form method="post" action="/employees/{{$board->boardId}}"> 
						<a href="/employees/{{$board->boardId}}/edit" class="btn btn-xs btn-info"><span class="glyphicon glyphicon-pencil"></span> 修改</a> | 
						@csrf
						@method('DELETE') <!--接刪除-->
						<button type="submit" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-remove"></span> 刪除</button>
					</form>
				</span>
			  </td>
		  </tr>
		  @endforeach
	  
		  
		  
			  </tbody>
			</table>
		  </div>
{{-- <div data-role="content">
	<ul data-role="listview" data-filter="true">

	@foreach ($boardList as $board)
		<li>
		<a href="boards/{{ $board->boardId }}" data-ajax="false"> 
			<h4><i class="fa fa-bullhorn"></i>{{ $board->boardTitle }}</h4>
		</a>
		<span class="pull-right">
			<form method="post" action="/employees/{{$board->boardId}}"> 
				<a href="/employees/{{$board->boardId}}/edit" class="btn btn-xs btn-info"><span class="glyphicon glyphicon-pencil"></span> 修改</a> | 
				@csrf
				@method('DELETE') <!--接刪除-->
				<button type="submit" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-remove"></span> 刪除</button>
			</form>
		</span>
		</li>
	@endforeach


	</ul>
</div> --}}

</div>
</body>

</html>