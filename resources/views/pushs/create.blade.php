@extends('layout.master')
@section('content')

<form method="post" action="/pushs" class="form-horizontal">
@csrf
<fieldset>

<!-- Form Name -->
<legend>推播公告</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">推播手機:</label>  
  <div class="col-md-4">
  <input id="tel" name="tel" type="text" placeholder="" class="form-control input-md" required pattern="[a-zA-Z0-9]{10,}" value="{{ ($push == 'n') ? '' : $push->tel }}">
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
@endsection