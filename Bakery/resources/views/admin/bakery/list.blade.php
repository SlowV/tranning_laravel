<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List bakery</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        th, td{
            vertical-align: middle !important;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-primary mt-3">
                List Bakery
            </h3>
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($bakeries_in_view as $item)
                    <tr>
                        <th scope="row">
                            <div class="form-check">
                                <input class="form-check-input " type="checkbox" value="" style="position: static">
                            </div>
                        </th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->description}}</td>
                        <td>{{number_format($item->price,0,',','.')}} <b>vnd</b></td>
                        <td>
                            <div class="card" style="background: url({{$item->images}})no-repeat center center; width: 100px; height: 100px;background-size: cover;">

                            </div>
                        </td>
                        <td>
                            <a href="/admin/bakery/{{$item->id}}/edit" class="mr-2 ml-1">
                                <i class="fa fa-pencil-square-o"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-trash-o"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
