<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>AddUser</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
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
        <h2>Them User</h2>
        <table>
            <form action="" method="post">
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
                    <td><input name="name" type="text"></td>
                    <td><input name="email" type="text"></td>
                    <td><input name="sdt" type="text"></td>
                </tr>
                <h2><input type="submit" value="Them"></h2>
                </from>
        </table>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>