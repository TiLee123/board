
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employee</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<form method="post" action="/boards/{{ $board->boardId }}" class="form-horizontal">
@csrf
@method('PUT')
<fieldset>

<!-- Form Name -->
<legend>修改公告</legend>

<div class="form-group">
        <label class="col-md-4 control-label" for="boardTitle">公告標題:</label>  
        <div class="col-md-4">
        <input id="boardTitle"  value="{{ $board->boardTitle }}" name="boardTitle" type="text" placeholder="" class="form-control input-md" required>
          
        </div>
      </div>
      <div class="form-group">
          <label class="col-md-4 control-label" for="content">公告內容:</label>  
          <div class="col-md-4">
          <textarea id="content" name="content" cols="50" rows="5" required>{{ $board->content }}</textarea>
          </div>
      </div>
      <div class="form-group">
          <label class="col-md-4 control-label" for="boardName">公告人員:</label>  
          <div class="col-md-4">
          <input id="boardName" value="{{ $board->boardName }}" name="boardName" type="text" placeholder="" class="form-control input-md" required> 
          </div>
      </div>
      <div class="form-group">
          <label class="col-md-4 control-label" for="itemId">公告類別:</label>  
          <div class="col-md-4">
              <select name="itemId" id="itemId">
                @foreach ($itemList as $item)
                <option value="{{$item->itemId}}" {{ ($board->itemId == $item->itemId) ? 'selected' : '' }}>{{$item->itemName}}</option>
                @endforeach
              </select>
          </div>
      </div>
          

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="okOrCancel"></label>
  <div class="col-md-8">
    <button id="okOrCancel" name="okOrCancel" class="btn btn-success">OK</button>
    <button id="okOrCancel" name="okOrCancel" class="btn btn-danger" value="Cancel">Cancel</button>
  </div>
</div>

</fieldset>
</form>


</div>

</body>
</html>