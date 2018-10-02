<!DOCTYPE html>
<html lang="en">
<head>
  <title>MyEMR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.min.css" rel="stylesheet" />
</head>
<body>
  
  <form method="post" action="view.php">
    <div class="container col-md-offset-3 col-md-6">
      <h1>Create New Patient</h1>
      <p>This part is inside a .container class.</p>    
      <label class="control-label"> First Name </label>
      <input type="text" class="form-control" name="firstname" />
      <label class="control-label"> Birthdate </label>
      <div class='input-group date' id='datepicker'>
        <input type='text' class="form-control" name="birthdate" />
        <span class="input-group-addon">
          <span class="glyphicon glyphicon-calendar"></span>
        </span>
      </div>
      <label for="optradio" class="control-label"> Sex </label> 
      <div class="form-group">
        <label class="radio-inline"><input type="radio" name="optradio" checked>Male</label>
        <label class="radio-inline" name="optradio"><input type="radio" name="optradio">Female</label>
      </div>
      <label for="optcheck" class="control-label"> Label </label> 
      <div class="form-group">
        <label class="checkbox-inline"><input type="checkbox" name="optcheck[]" checked>Option 1</label>
        <label class="checkbox-inline"><input type="checkbox" name="optcheck[]">Option 2</label>
      </div>
      <input type="submit" class="btn btn-primary" name="submit" value="Submit">
    </div>
  </form>

</body>

<footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
  <script type="text/javascript">
    $(function () {
      $('#datepicker').datepicker();
      });
  </script>
</footer>

</html>
