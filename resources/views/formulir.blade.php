<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir</title>
</head>

<body>
    <h1>Formulir</h1>
    <form action="formulir/proses" method="post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        Name :
        <input type="text" name="name"><br><br>
        Address :
        <input type="text" name="address"><br><br>
        Phone Number :
        <input type="tel" name="phone_number"><br><br>
        <input type="submit" value="save">
    </form>
</body>

</html>
