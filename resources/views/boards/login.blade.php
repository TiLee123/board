<!DOCTYPE html>
<html lang="en">
<head>
  <title>公告</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<form method="post" action="/login" class="form-horizontal">
@csrf
<fieldset>

<!-- Form Name -->
<legend>登入</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="boardTitle">帳號:</label>  
  <div class="col-md-4">
        <input type="account" class="form-control" id="account" name="account" placeholder="請輸入4-10位英數字" required pattern="[A-Za-z0-9]{4,10}">
    
  </div>
</div>
<div class="form-group">
    <label class="col-md-4 control-label" for="content">密碼:</label>  
    <div class="col-md-4">
            <input type="password" class="form-control" id="password" name="password" placeholder="請輸入6-10位英數字" required pattern="[A-Za-z0-9]{6,10}">
    </div>
</div>
@if ($fail == "y")
<div class="form-group">
    <div class="col-md-4">
    </div>
    <div class="col-md-4"><p class="text-danger">帳號密碼錯誤</p>
    </div>
</div>
@endif
<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="okOrCancel"></label>
  <div class="col-md-8">
    <button type="submit" id="okOrCancel" name="okOrCancel" class="btn btn-success">OK</button>
    <button type="button" id="okOrCancel" name="okOrCancel" class="btn btn-danger" onclick="location.href='/boards'">Cancel</button>
  </div>
</div>

</fieldset>
</form>


</div>

</body>
</html>