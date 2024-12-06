<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All of the beer</title>
</head>
<body>
<table>
    
    @foreach($locker as $item)
    <tr>
        <td>{{ $item->name }}</td>
        <td>{{ $item->alcoholbyvolume }}</td>
        <td>{{ $item->price }}</td>
        <td>{{ $item->type }}</td>
        
    </tr>
    @endforeach   
</table>
    
</body>
</html>