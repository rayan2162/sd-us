<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Shopping list</h1>
    <form action="{{ route('shopping.list.store')}}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Ki laghbe?">
        <input type="text" name="quantity" placeholder="Koddur laghbe?">
        <button type="submit">Add item</button>
    </form>


    {{-- Read --}}

    <ul>
        @foreach($items as $item)
            <li>
                {{$item -> name}} - {{$item -> quantity}}
            </li>

            <form action="{{ route('shopping.list.destroy', $item->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>

            <a href="{{route('shopping.list.edit', $item->id)}}">Edit</a>
        @endforeach
    </ul>



</body>
</html>