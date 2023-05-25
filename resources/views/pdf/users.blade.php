<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #6af8cb;}

#customers th {
  padding-top: 8px;
  padding-bottom: 8px;
  text-align: left;
  background-color: #fe9b07;
  color: white;
}
</style>
</head>
<body>

<h1>Users information</h1>

<table id="customers">
  <tr>
    <th>id</th>
    <th>name</th>
    <th>email</th>
    <th>birth_date</th>
    <th>Number</th>
    <th>department</th>
    <th>gender</th>
    <th>address</th>
    <th>Blood</th>
    <th>Role</th>
  </tr>

  @if(count($users))
  @foreach ($users as $e)


    <tr>
        <td>{{$e->id}}</td>
        <td>{{$e->name}}</td>
        <td>{{$e->email}}</td>
        <td>{{$e->birth_date}}</td>
        <td>{{$e->number}}</td>
        <td>{{$e->department}}</td>

        <td>{{$e->gender}}</td>
        <td>{{$e->address}}</td>
        <td>{{$e->blood}}</td>
        <td>{{$e->role}}</td>


    </tr>
    @endforeach
  @else
  <td colspan="3">No user Found</td>

  @endif


</table>

</body>
</html>


