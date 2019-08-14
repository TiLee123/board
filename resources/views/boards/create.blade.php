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

<form method="post" action="/boards" class="form-horizontal">
@csrf
<fieldset>

<!-- Form Name -->
<legend>新增公告</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="boardTitle">公告標題:</label>  
  <div class="col-md-4">
  <input id="boardTitle" name="boardTitle" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>
<div class="form-group">
    <label class="col-md-4 control-label" for="content">公告內容:</label>  
    <div class="col-md-4">
    <textarea id="content" name="content" cols="50" rows="5" required></textarea>
    </div>
</div>
<div class="form-group">
    <label class="col-md-4 control-label" for="boardName">公告人員:</label>  
    <div class="col-md-4">
    <input id="boardName" name="boardName" type="text" placeholder="" class="form-control input-md" required> 
    </div>
</div>
<div class="form-group">
    <label class="col-md-4 control-label" for="itemId">公告類別:</label>  
    <div class="col-md-4">
        <select name="itemId" id="itemId">
            @foreach ($itemList as $item)
            <option value="{{$item->itemId}}">{{$item->itemName}}</option>
            @endforeach
        </select>
    </div>
</div>
    
<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="okOrCancel"></label>
  <div class="col-md-8">
    <button type="submit" id="okOrCancel" name="okOrCancel" class="btn btn-success">OK</button>
    <button type="submit" id="okOrCancel" name="okOrCancel" class="btn btn-danger" value="Cancel">Cancel</button>
  </div>
</div>

</fieldset>
</form>


</div>

</body>
</html>