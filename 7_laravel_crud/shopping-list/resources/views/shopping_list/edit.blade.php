<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit Page</h1>

        <form action="{{route('shopping.list.update', $item->id)}}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="name" value="{{$item-> name}}">
            <input type="text" name="quantity" value="{{$item-> quantity}}">

            <button type="submit">Update</button>
        </form>
</body>
</html>