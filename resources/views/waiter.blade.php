<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>waiter</title>
    <script src="js/jquery-3.4.1.js"></script>
</head>
<body>
<h1>Welcome to our Restaurant!</h1>

<h2>To see our menu, click the menu button below</h2>
<button class="btn" type="button">Menu</button><br>
<img class="img" src="https://media.daysoftheyear.com/20171223131119/waiters-day.jpg"><br>
<p id="demo"></p>

<div id="mydata">
    <table>
        <th>
            <td>ID</td>
            <td>Section</td>
            <td>Name</td>
            <td>Price</td>
        </th>
    @foreach($dishes as $dish)
        <tr>
            <td>{{$dish->id}}</td>
            <td>{{$dish->section_name}}</td>
            <td>{{$dish->dish_name}}</td>
            <td>{{$dish->price}}</td>
        </tr>
    @endforeach
    </table>
</div>

<style>
    .img{
        width: 70%;
        --rot: 0;
        transform:rotate(calc(var(--rot)*1deg));
    }

    #mydata{
        display: none;
        width: 200px;
        background-color: #4f0000;
        color: #ffe649;
        position: absolute;
        left: 751px;
        top: 145px;
        z-index: 1000;
        opacity: 0.6;
    }
    .btn{
        width: 100px;
        background-color: blue;
        color:white;
        border-radius: 5px 5px 5px 5px;
        float: left;
    }
</style>
<script>
$(function () {
$('.btn').click(function () {

    function start() {
        var setCl = new Date();
        var setSec = setCl.getSeconds();
    $(".img").css('--rot', setSec / 60 * 360)};
      $("#mydata").fadeIn('slow');
    setInterval(start,1000);
});
});

</script>

</body>
</html>
