
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<div class='col-sm-6'> 
<legend>User List<legend>


<table class="table" border=1>
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  @foreach($reg as $val)
  <form method="post" action="{{URL('/users/delete',$val->id)}}">
  @csrf
  @method('DELETE')
    <tr>
    <td>{{$val->name}}</td>
    <td>{{$val->email}}</td>
    <td>{{$val->password}}</td>
    <td><a href="{{ URL('/users/'.$val->id)}}">Edit</a></td>
    <td><button type="submit" class="btn btn-danger">Delete</button></td>
    </form>
    <form method="post" action="{{URL('/users/forcedelete',$val->id)}}">
  @csrf
  @method('DELETE')
    <td><button type="submit" class="btn btn-warning">ForceDelete</button></td>
    </form>

    
    </tr>
  @endforeach
  </div> 
  </table>
 
  