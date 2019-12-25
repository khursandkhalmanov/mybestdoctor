<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cars</title>
    <meta id="token" name="csrf-token" content="{{ csrf_token() }}">
    <script src="js/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container-fluid">
    <h2>WOHOOO FORM</h2>
    @if(isset($_GET['msg']))
        <div class="alert alert-success">
            {{$_GET['msg']??NULL}}
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <td>ID</td>
            <td>Code</td>
            <td>Title</td>
            <td>Price</td>
            <td>Action</td>
        </tr>
        <form method="post">
            <tr>
                <td>ID</td>
                <td><input required="required" name="code" type="text"></td>
                <td><input required="required" name="title" type="text"></td>
                <td><input required="required" name="price" type="text"></td>
                {{csrf_field()}}
                <td>
                    <button>Create</button>
                </td>
            </tr>
        </form>
        <form method="post" action="deletecars">
            @foreach($cars as $car)
                <tr class="editable">
                    <td>{{$car->id}}</td>
                    <td class="clickabletd" contenteditable="false" id="code{{$car->id}}">{{$car->code}}</td>
                    <td class="clickabletd" contenteditable="false" id="title{{$car->id}}">{{$car->title}}</td>
                    <td class="clickabletd" contenteditable="false" id="price{{$car->id}}">{{$car->price}}</td>

                    <td>
                        <input value="{{$car->id}}" type="checkbox" name="cars[]">
                        <span data-id="{{$car->id}}" class="myupdate myspan btn btn-success">Update</span>
                        <a href="deletecar?id={{$car->id}}" class="myspan btn btn-danger">Delete</a>
                    </td>

                </tr>
            @endforeach
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                {{csrf_field()}}
                <td>
                    <button type="submit">Delete</button>
                </td>

            </tr>
        </form>
    </table>
</div>
<style>
    .myspan {
        cursor: pointer;
    }

    tr:first-child {
        background-color: #4f0000;
        color: #ffde30;
    }

    .editableinput {
        color: red !important;
        background-color: #ffffff;
        padding: 5px;

    }

    tr:nth-child(even) {
        background-color: #dcf1ff;
    }

</style>
<script>
    $(function () {
        $(".clickabletd").dblclick(function () {
            $(this).addClass('editableinput').attr('contenteditable', true);
        });
        $(".myupdate").click(function () {
            var id = $(this).data('id');
      /*      var code = $("#code" + id).addClass('editableinput').attr('contenteditable', true);
            var title = $("#title" + id).addClass('editableinput').attr('contenteditable', true);
            var price = $("#price" + id).addClass('editableinput').attr('contenteditable', true);*/
            var code = $("#code" + id).text();
            var title = $("#title" + id).text();
            var price = $("#price" + id).text();
            callHttp('updateCars',{id:id, code:code, title:title,price:price});
        });
    });

    function callHttp(url, data){
        $.ajaxSetup({
            headers:
                { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        });
        $.post(url, data, function(result){
            console.log(result);
        });
    }
</script>

</body>
</html>
