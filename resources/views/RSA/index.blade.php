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
<form method="post"  action="{{route('RSA_shifr')}}">
    @method('POST')
    @csrf
    <input type="number" name="q" id="q" value="">
    <input type="number" name="p" id="p" value="">

    <input type="number" name="e" id="e" onclick="nn()">

    <textarea name="matn" id="" cols="30" rows="10"></textarea>

    <input type="submit" id="b" value="yuborish">
    <script>
        function nn(){
                let e=document.getElementById('e').value;
                let q=document.getElementById('q').value;
                let p=document.getElementById('p').value;
                let f=(q-1)*(p-1);
                if(1>e || e<f){
                    alert(
                        "e tub soni 1 kichik bolmagan "+f+" dan katta bolmagan son bolishi kerak"
                    )

            }
        }


    </script>

</form>
</body>
</html>
