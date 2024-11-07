<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Room</title>
</head>
<body>
    <form action="{{route ('editdrink')}}" method="POST">
        @csrf
            <label for="">Name </label>
            <input type="text" placeholder="Type of Beer" name="name_beer" {{$locker->id}}>
            <br><br>
            <label for="">Alcohol By Volume</label>
            <input type="text" placeholder="Alcohol By Volume" name="abv_beer" {{$locker-$id}}>
            <br><br>
            <label for="">Price</label>
            <input type="number" placeholder="Price" name="price_beer" {{$locker-$id}}>
            <br><br>
            <label for="">Type</label>
            <input type="number" placeholder="Type of the Beer" name="type_beer" {{$locker-$id}}>

    </form>

</body>
</html>