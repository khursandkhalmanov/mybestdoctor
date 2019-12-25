@extends('master')
@section('title', 'Contact Us')
<script src="js/jquery.min.js"></script>
@section('content')
    <!-- navigation -->
    @include('navigation')
    <!-- end navigation -->
    <!-- slider -->
    <!-- contact section -->
    <section id="contact" class="wow fadeIn border-top border-bottom border-transperent-white-light animated"
             style="visibility: visible; animation-name: fadeIn;">


 <h4 style="color: white">The World Airports Database</h4>
        <hr>

        <div class="container">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-9 collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class=""><a href="" class="inner-link">Home</a>
                </li>
                <li class=""><a href="" class="inner-link">About Us</a>
                </li>
                <li class=""><a href="" class="inner-link">Galleries</a>
                </li>
                <li class=""><a href="" class="inner-link">Resourses</a></li>
                <li class=""><a href="" class="inner-link">Contacts</a></li>
                <li class=""><a href="/chat" class="inner-link">Chat</a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
        <div class="mycontainer">
            <form method="get">
               <select name="select">
                   <option>ID</option>
                   <option>Name</option>
                   <option>City</option>
                   <option>Country</option>
               </select>
                <input id="keyword" type="text" name="country">
                <div id="suggestion">
                    <ul id="myul">
                    </ul>
                </div>
                <button type="submit">Search</button>
            </form>

                <table class="table table-bordered" style="background-color:white">
                    <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>City</th>
                    <th>Country</th>
                    </tr>

                    @foreach ($airports as $airport)

                    <tr>
                        <td>{{$airport->id}}</td>
                        <td>{{$airport->name}}</td>
                        <td>{{$airport->city}}</td>
                        <td>{{$airport->country}}</td>
                    </tr>
                        @endforeach


                </table>

        </div>

        <script>
            $(function () {

                $("#keyword").keyup(function () {
                        var keyword = $(this).val();

                        if (keyword.length==3) {
                            callHttp('api/keywordsearch', {'keyword': keyword});
                            $("#suggestion").fadeIn('slow');
                            return false;
                        }

                        if (keyword.length<3) {
                            $("#suggestion").fadeOut('fast');
                            return false;
                        }

                });


                $(document).on('click','.mylinks',function(){
                    var keyword = $(this).data('keyword');
                    $("#keyword").val(keyword);
                });



               $("#mychatform").submit(function () {
                   var inputs = $(this).serializeArray();
                   jQuery.each(inputs, function (i, input){
                      console.log(input.name +' : '+input.value);
                   });

               });
            });


            function callHttp(url, parms) {
                $.post(url, parms, function(output, status){
                    $.each( output, function(i, value){
                        $("#myul").append("<li data-keyword=\""+value.country+"\" class=\"mylinks\">"+value.country+"</li>");
                    });
                });
            }


        </script>

<style>

    #suggestion ul{
        width:40%;
    }
#suggestion{
    display: none;
    background-color: #f0f0f0;
    top:-20px;
    position: relative;
    height: auto;
    border: 1px solid black;
    color: black;
    padding-left: 15px;
}

    .mylinks{
        cursor: pointer;
    }

    .mylinks a:hover{
        background-color: #3b0006;
        color: #ffde59;
    }


</style>


    </section>
    <!-- end contact section -->
    @include('footer')
@endsection
