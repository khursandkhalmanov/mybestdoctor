<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>groceries</title>
</head>
<body>
<div>
    <form method="post" action="modify">
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
        </tr>
        <tr>
            <td>ID</td>
            <td><input required="required" type="text"></td>
            <td><input required="required" type="text"></td>
            <td><input required="required" type="text"></td>
            <td>Create</td>
        </tr>
        @foreach ($groceries as $grocerie)
            <tr>
            <td>{{$grocerie->id}}</td>
            <td>{{$grocerie->product_name}}</td>
            <td>{{$grocerie->price}}</td>
            <td>{{$grocerie->quantity}}</td>
                <td><span><a data-id="{{$grocerie->id}}" href="update" data-id="{{$grocerie->id}}" class="btn-block">Update</a> <a href="delete" class="btn-block">Delete</a></span></td>
            </tr>
            @endforeach
    </table>
    </form>
</div>
</body>
</html>
