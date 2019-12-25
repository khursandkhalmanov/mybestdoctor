<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form</title>
</head>
<body>
<div>
    <form action="/insert" method="post">
        {{csrf_field()}}
        <table class="table">
        <tr>
            <td>Code:</td>
            <td><input type="text" name="code" placeholder="Insert Code"></td>
        </tr>
        <tr>
            <td>Title:</td>
            <td><input type="text" name="title" placeholder="Insert Title"><br></td>
        </tr>
        <tr>
            <td>Color:</td>
            <td><input type="text" name="color" placeholder="Insert Color"><br></td>
        </tr>
        <tr>
            <td><button type="submit">Insert</button></td>
            <td></td>
        </tr>
        </table>
    </form>
</div>

</body>
<style>
    .table{

        margin: auto;
        border: 1px solid black;
        width: 50%;
        background-color: lightgray;
    }
    table td{
        border: 1px solid black;
        width: 150px;
    }
    input{
        width: 200px;
    }
</style>
</html>
