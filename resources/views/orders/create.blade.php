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

<form method="post" action="/orders" class="form-horizontal">
@csrf
<fieldset>

<!-- Form Name -->
<legend>訂閱公告</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">訂閱Email:</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="text" placeholder="" class="form-control input-md" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" value="{{ ($order == 'n') ? '' : $order->email }}">
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="okOrCancel"></label>
  <div class="col-md-8">

    <button type="submit" id="okOrCancel" name="okOrCancel" class="btn btn-success">OK</button>
    <button type="button" id="okOrCancel" name="okOrCancel" class="btn btn-danger" value="Cancel" onclick="location.href='/boards'">Cancel</button>
  </div>
</div>

</fieldset>
</form>


</div>

</body>
</html>