<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="text-primary mb-3">
                {{$title}}
            </div>
            <form action="{{$action == 'store' ? '/admin/bakery' : '/admin/bakery/'.$bakery->id}}" method="post">
                @csrf
                @if($action == 'update')
                    @method('PUT')
                @endif

                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="{{$action == 'update' ? $bakery->name : ''}}">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input type="text" name="description" class="form-control" value="{{$action == 'update' ? $bakery->description : ''}}">
                </div>
                <div class="form-group">
                    <label>Images</label>
                    <input type="text" name="images" class="form-control" value="{{$action == 'update' ? $bakery->images : ''}}">
                </div>

                @if($action == 'update')
                    <div class="form-group">
                        <div class="card" style="background: url({{$bakery->images}})no-repeat; background-size: cover; width: 100px; height: 100px">

                        </div>
                    </div>
                @endif

                <div class="form-group">
                    <label>Price</label>
                    <input type="number" name="price" class="form-control" value="{{$action == 'update' ? $bakery->price : ''}}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-outline-success">
                        Submit
                    </button>
                    <button type="reset" class="btn btn-outline-dark">
                        Reset
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
