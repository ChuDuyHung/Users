<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Update</title>
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
        <h2>Cap Nhat</h2>
        <table>
            <form action="" method="post" class="mb-3">
                @if($errors->any())
                @foreach($errors->all() as $errors)
                <p>{{$errors}}</p>
                @endforeach

                @endif
                @csrf
                <tr>
                    <th>Ten</th>
                    <th>Email</th>
                    <th>Sdt</th>
                </tr>
                <tr>
                    <td><input name="name" type="text" value="{{$infomation->name}}"></td>
                    <td><input name="email" type="text" value="{{$infomation->email}}"></td>
                    <td><input name="sdt" type="text" value="{{$infomation->sdt}}"></td>
                </tr>
                <div class="col-2">
                    <button type="submit" class="btn btn-primary btn-block">Cap Nhat</button>
                </div>
                </from>
        </table>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>

</html>