@extends('layout.master')
@section('content')
	@if (Session::get('name')!="")
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
				@if (Session::get('name')!="")
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
   @endsection

   {{-- <button data-url="/boards/1" data-target="#myModal" data-toggle="modal"></button>
   <div id="myModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Event</h4>
					</div>
					<div class="modal-body">
						<p>Loading...</p>
					</div>
			</div>
		</div>
	</div> --}}