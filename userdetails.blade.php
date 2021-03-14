<!DOCTYPE html>
<html lang="en">
<head>
  <title>Emergency Contacts</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Users Details</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>PhoneNumber</th>
        <th>Email</th>
        <th>Emergency Contacts</th>
      </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->fname}}</td>
                <td>{{$user->lname}}</td>
                <td>{{$user->phn}}</td>
                <td>{{$user->email}}</td>
                @foreach(explode(',', $user->EContacts) as $info) 
                 <td>{{$info}}</td>
                @endforeach
                
            </tr>
    @endforeach
    </tbody>
  </table>
</div>
</body>
</html>
