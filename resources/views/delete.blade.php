<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trash</title>
</head>
<body>
    <form action="{{ route('deleted-drink', $locker->id) }}" method="POST">
        @csrf
            <label for="">Name </label>
            <input type="text" placeholder="Type of Beer" name="name_beer" value="{{$locker->name}}">
            <br><br>
            <label for="">Alcohol By Volume</label>
            <input type="text" placeholder="Alcohol By Volume" name="description_beer" value="{{$locker->type}}">
            <br><br>
            <label for="">Price</label>
            <input type="number" placeholder="Price" name="price_beer" value="{{$locker->description}}">
            <br><br>
            <label for="">Type</label>
            <input type="number" placeholder="Type of the Beer" name="type_beer" value="{{$locker->price}}">

    </form>

</body>
</html>
