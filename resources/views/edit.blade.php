<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<table>
<h2>Edit User</h2>
<div class='col-sm-6'> 

@foreach($reg as $val)
<form method="post" action="{{URL('/users/update',$val->id)}}">
@csrf
@method('PUT')
  <div class="form-group">
    <label for="exampleInputEmail1">Name:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value='{{$val->name}}'>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email:</label>
    <input type="email" class="form-control" id="exampleInputPassword1" name="email" value='{{$val->email}}'>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password:</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" value='{{$val->password}}'>
  </div>

  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endforeach
</div>
</table>
</body>
</html>

                  