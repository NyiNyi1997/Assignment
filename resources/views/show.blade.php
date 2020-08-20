
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
    <tr>
    <td>{{$val->name}}</td>
    <td>{{$val->email}}</td>
    <td>{{$val->password}}</td>
    <td><a href="{{ URL('/users/{id}'.$val->id )}}">Edit</a></td>
    <td><a href="{{ URL('/users/{id}'.$val->id )}}">Delete</a></td>
    <td><a href="{{ URL('/users/{id}'.$val->id )}}">ForceDelete</a></td>
    </tr>
  @endforeach
  </div> 
  </table>
  