<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Warehouse</title>
    <style>
        background: rgb(27,226,197);
        background: linear-gradient(90deg, rgba(27,226,197,1) 0%, rgba(27,226,197,1) 35%, rgba(27,226,197,1) 100%);
    </style>
</head>
<body>
    <form action="newbeer" method="POST">
        @csrf
        <label for="">Name </label>
        <input type="text" placeholder="Type of Beer" name="name_beer">
        <br><br>
        <label for="">Alcohol By Volume</label>
        <input type="text" placeholder="Alcohol By Volume" name="abv_beer" >
        <br><br>
        <label for="">Price</label>
        <input type="number" placeholder="Price" name="price_beer">
        <br><br>
        <label for="">Type</label>
        <input type="text" placeholder="Type of the Beer" name="type_beer">
        <br><br><br>
        
    </form>

</body>
</html>
