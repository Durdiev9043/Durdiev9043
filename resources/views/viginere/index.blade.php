<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="{{route('vig_shifr')}}">
    @method('POST')
    @csrf
    <input type="text" name="kalit">

    <textarea  id="" name="matn" cols="30" rows="10"></textarea>

    <input type="submit" value="yuborish">
</form>
</body>
</html>
