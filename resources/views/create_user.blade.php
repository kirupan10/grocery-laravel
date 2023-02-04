<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Create form</h1>
    <form action="store" method="post">
        <label for="">Name</label> <input type="text" name="name" id="">
        <label for="">Phone</label> <input type="text" name="phone" id="">
        <label for="">Age</label> <input type="number" name="age" id="">
        <input type="submit" value="Create new user">
        @csrf
    </form>
</body>

</html>
