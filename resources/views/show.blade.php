<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List All</title>
</head>
<body>
               
        <label for="">Name </label>
        <input type="text" placeholder="Type of Beer" name="name_beer" value="{{$locker->name}}">
        <br><br>
        <label for="">Alcohol By Volume</label>
        <input type="number" placeholder="Alcohol By Volume" name="alcoholbyvolume_beer" value="{{$locker->alcoholbyvolume}}">
        <br><br>
        <label for="">Price</label>
        <input type="number" placeholder="Price" name="price_beer" value="{{$locker->price}}">
        <br><br>
        <label for="">Type</label>
        <input type="text" placeholder="Type of the Beer" name="type_beer" value="{{$locker->type}}">
        <br><br><br>
        
    </form>

</body>
</html>
