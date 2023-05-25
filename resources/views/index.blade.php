<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Project</title>
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
</head>

<body>
    <div>
        <style>
        table,
        td,
        th {
            border: 1px solid;
            text-align: center;
            padding: 8px;
        }

        table {
            width: 50%;
            border-collapse: collapse;
        }
        </style>
        <!-- <div class="col-2">
                <button type="submit" class="btn btn-primary btn-block">Tim Kiem</button>
            </div> -->
        <br>
        <form action="" method="get" class="mb-3">
            <div class="row">
                <div class="col-3">
                    <input type="search" name="keywords" id="" class="form-control" placeholder="Tu khoa" value="{{request()->keywords}}" >
                </div>
                <div class="col-2">
                        <button type="submit" class="btn btn-primary btn-block">Tim Kiem</button>
                </div>
            </div>
        </form>

        <table>
            <tr>
                <th>STT</th>
                <th>Ten</th>
                <th>Email</th>
                <th>Sdt</th>
                <th>Tuy chinh</th>
            </tr>
            @foreach($list as $key => $item)
            <tr>
                <td>{{$key = $key + 1}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->sdt}}</td>
                <td> <a href="{{route('project.index_update_user',['id' => $item->id])}}">Sua</a> | <a
                        href="{{route('project.delete_user',['id' => $item->id])}}">Xoa</a></td>
            </tr>
            @endforeach
        </table>
        {{$list->links()}}
        <h2> <a href="{{route('project.add_user')}}">Add user</a></h2>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>

</html>