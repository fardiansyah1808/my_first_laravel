<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dosen</title>
</head>

<body>
    <h1>Dosen</h1>
    <p>Nama Dosen : {{ $name }} </p>
    <br>
    <p>Mata Kuliah</p>
    <ul>
        @foreach ($pelajaran as $matkul)
            <li>{{ $matkul }}</li>
        @endforeach
    </ul>
</body>

</html>
