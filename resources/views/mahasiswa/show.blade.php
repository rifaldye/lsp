<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div class="">
        <h3>Data Mahasiswa</h3>
        <table>
            @foreach($column as $val)
                @if($mahasiswa->$val)
                <tr>
                    <td>{{$val}}</td>
                    <td>:</td>
                    <td>{{$mahasiswa->$val}}</td>
                </tr>
                @endif
            @endforeach
        </table>

    </div>
    
</body>
</html>