<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('Style/bootstrap.min.css')}}">
    <title>Document</title>
</head>
<body>
<h1>List</h1>
<table class="table table-bordered">
    <thead>
    <tr>
        <th>bookid</th>
        <th>authorid</th>
        <th>title</th>
        <th>ISBN</th>
        <th>pub_year</th>
        <th>available</th>
        <th></th>

    </tr>
    </thead>
    <tbody>
    @foreach($books as $book)
        <tr>
            <td>{{$book->bookid}}</td>
            <td>{{$book->authorid}}</td>
            <td>{{$book->title}}</td>
            <td>{{$book->ISBN}}</td>
            <td>{{$book->pub_year}}</td>
            <td>{{$book->available}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
<script src="Scripi/bootstrap.min.js"></script>
<script src="Scripi/jquery.min.js"></script>
</body>
</html>

