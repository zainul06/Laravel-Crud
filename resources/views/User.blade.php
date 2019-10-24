<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
      <form action="{{ url('User') }}" method="post">
      {{csrf_field()}}
      <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter name">
            <label for="name">Email</label>
            <input type="text" name="email" class="form-control" placeholder="Enter email">
            <label for="name">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter password">
      </div>
      </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
<table class="table">
  <thead>
        <tr>
           <th scope="col" class="bg-info text-white">No</th>
           <th scope="col" class="bg-info text-white">Name</th>
           <th scope="col" class="bg-info text-white">Email</th>
           <th scope="col" class="bg-info text-white">Password</th>
           <th scope="col" class="bg-info text-white">Action</th>
        </tr>
  </thead>
  <tbody>
    @foreach($data as $key => $datas)
    <tr>
       <th scope="row">{{ $key+1 }}</th>
       <td>{{ $datas->name }}</td>
       <td>{{ $datas->email }}</td>
       <td>{{ $datas->password }}</td>
       <td>
           <button type="edit" class="btn btn-primary btn-sm">edit</button>
           <form action="{{ url('User', $datas->id)}}" method="post">
           {{ csrf_field()}}
           <input type="hidden" name="_method" value="delete"><br>
           <button type="submit" value="delete" class="btn btn-danger btn-sm">hapus</button>
           </form>
       </td>
    </tr>
    @endforeach
  <tbody>
</table>
</form>
</div>
</body>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>