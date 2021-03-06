@extends('master')
@section('title', 'ZCE Real Test')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
@section('content')
    <section id="contact" class="wow fadeIn border-top border-bottom border-transperent-white-light animated"
             style="visibility: visible; animation-name: fadeIn;">

        <h1 class="header animated bounceInUp">Zend Certificate Questions</h1>
        <hr>

        <div class="col-lg-6 col-md-6 col-sm-9 collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class=""><a  href="khursand">Home</a>
                </li>
                <li class=""><a href="aboutus" class="inner-link">About Us</a>
                </li>
                <li class=""><a href="" class="inner-link">Galleries</a>
                </li>
                <li class=""><a id="test" href="test" class="inner-link">Test</a></li>
                <li class=""><a  href="" class="inner-link">Contacts</a></li>
                <li class=""><a  href="search" class="inner-link">Search</a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
        <div class="div1">
            <form method="post" action="test">
                {{csrf_field()}}
                <button id="btn" type="submit">Search</button>
                <span id="myspan">
                    <input id="input1" type="text" name="question" placeholder="">
                </span>

            </form>
            <button id="btn6">Finish</button>
            <button id="btn3">Next >></button>
            <button id="btn5">Start Test</button>
            <button id="btn4">Start Lern</button>
        </div>
        <div class="clearfix"></div>
        <p id="pt">25 : 00</p>
        <div class="mysections">
            <p class="result" id="tquest">Total Questions: 25</p></p><p class="result" id="count"></p><p class="result" id="right"></p><p class="result" id="persent" ></p>
            @foreach($questions as $question)
                @if(isset($question->id))
                <div class="myquestions_answers" id="my_section_{{$question->id}}">

                <p class="ph" id="phn{{$question->id}}">Question No:{{$question->id}}</p>
                    <p class="ph" id="ph{{$question->id}}">{{$question->question}}</p>
                <div class="div2" id="div2{{$question->id}}">
                    <div class="myquestions_only">
                        @if ($question->content != ''){{$question->content}}<br>@else @endif
                        @if ($question->content_2 != ''){{$question->content_2}}<br>@else @endif
                        @if ($question->content_3 != ''){{$question->content_3}}<br>@else @endif
                        @if ($question->content_4 != ''){{$question->content_4}}<br>@else @endif
                        @if ($question->content_5 != ''){{$question->content_5}}<br>@else @endif
                        @if ($question->content_6 != ''){{$question->content_6}}<br>@else @endif
                        @if ($question->content_7 != ''){{$question->content_7}}<br>@else @endif
                        @if ($question->content_8 != ''){{$question->content_8}}<br>@else @endif
                        @if ($question->content_9 != ''){{$question->content_9}}<br>@else @endif
                        @if ($question->content_10 != ''){{$question->content_10}}<br>@else @endif
                    </div>


                        <div class="myinputoptions">
                            <p class="pickanswers">Pick the following answer(s) : </p>
                            @if ($question->a != '') <input class="input2 a" id="a{{$question->id}}" type="checkbox"><p> A:{{$question->a}}</p><br>@else @endif
                            @if ($question->b != '') <input class="input2 b" id="b{{$question->id}}" type="checkbox"><p> B:{{$question->b}}</p><br>@else @endif
                            @if ($question->c != '') <input class="input2 c" id="c{{$question->id}}" type="checkbox"><p> C:{{$question->c}}</p><br>@else @endif
                            @if ($question->d != '') <input class="input2 d" id="d{{$question->id}}" type="checkbox"><p> D:{{$question->d}}</p><br>@else @endif
                            @if ($question->e != '') <input class="input2 e" id="e{{$question->id}}" type="checkbox"><p> E:{{$question->e}}</p><br>@else @endif
                        </div>


                    <button class="btn btn-success btn2" data-id="{{$question->id}}" type="submit">Submit</button>
                        <p class="result1" id="p{{$question->id}}"></p><br>
                </div>
                </div>
                @endif
            @endforeach
        </div>
        <style>
            .pickanswers{
                color:blue !important;
            }
            .myquestions_only{
                color: blue;
                font-weight: bolder;
                font-family: Verdana;
                font-size: 20px;
                padding-left: 30px;
                border: 1px dotted black;
                padding: 20px;
            }
            .myinputoptions{
                background-color: #f5f5f5;
                border: 1px solid #eaeaea;
                padding:5px;
            }
            .ph:first-child{
                background-color: #4e0505;
                color: #ffe366 !important;
                padding:5px;
                border-radius: 5px;

            }
            .ph:nth-child(2){
                padding:5px;
                font-size: 12px;

            }
            .myquestions_answers{
                margin-bottom: 20px;
                border: 5px solid black;
                padding:10px;
                background-color: #f5efef66;
                border-radius: 10px;
                display: none;

            }
            .myquestions_answers p{
                font-size: 20px  !important;
            }
            .mysections{
                background-color: #fff;
                border:1px solid black;

                padding:10px;
            }
            #tquest{
                display: none;
            }
            #btn6{
                background-color: blue;
                color: white;
                border-radius:3px;
                margin-left: 20px;
                float: right;
                transform:translate(-50);
                width: 80px;
                display: none;
            }
            #btn5{
                float: right;
                background-color: blue;
                margin-bottom: 30px;
                margin-left: 20px;
                border-radius: 3px;
                color: white;
                width: 80px;
            }
            #pt{
                font-size: 30px;
                float: right;
                display: none;
            }
            #btn4{
                float: right;
                background-color: blue;
                margin-bottom: 30px;
                border-radius: 3px;
                color:white;
                width: 80px;
            }
            #btn3{
                float: right;
                background-color: blue;
                margin-bottom: 30px;
                margin-left: 20px;
                border-radius: 3px;
                color: white;
                display: none;
                width: 80px;
            }
            .result{
                font-size: 20px;
            }
            .false{
                /*
                color: red;
                font-size: 20px;
                float:right;
                */
                background-color: red !important;
                display: block !important;

            }
            .correct{
                /*
                color: green;
                font-size: 20px;
                float:right;

                 */
                background-color: green !important;
                display: block !important;
            }
            .btn2{
                background-color: #005685;
                margin-bottom: 30px;
                color: white;
            }
            .input2{
                width: 20px;
                height: 15px;
                float:left;
                border-radius: 10px;
            }
            .div1{
                color:black;
                height: auto;
            }
            .div2{
                color:white;
                height: auto;

            }
            .ph{
                color: white;
                font-size: 15px;
            }
            p{
                color:white;
            }
            #select1{
                height: 28px;
                width: 200px;
                float: left;
            }
            #input1{
                color: black;
                margin-left: 10px;
                width: 200px;
                float:left;
                height: 28px;
                border-radius:3px;
                position: relative;
            }
            #btn{
                z-index: 7;
                background-color: blue;
                color: white;
                border-radius:3px;
                margin-left: 20px;
                float: left;
                position: absolute;
                width: 80px;
            }
            #myspan{
                width: 500px;!important;
            }
            #search{
                background-color: #0000ff;
                box-shadow: 1px 1px 1px 1px white;
            }
            .collapse{
                z-index: 5;
            }
            .header{
                color: #1a137b;
                text-shadow: 3px 3px white ;
                text-align: left;
            }

            #test{
                background-color: #0000ff;
                box-shadow: 1px 1px 1px 1px white;
            }


            .result1 {
                background-color: red;
                display: flex;
                position: relative;
                top: -92px;
                width: 40%;
                left: 0%;
                height: 93px;
                line-height: 100px;
                padding-left: 30px;
                font-size: 26px;
                border-radius: 10px;
            }

            body, p, a, div, h1, h2, span{
                color: black !important;
            }
            body{
                background-color: #7c9ae8;
            }

            .navbar-nav a {
                color: #000 !important;
            }

            .result1{
                background-color: red;
                display: none !important;



            }

        </style>
        <script>
            var num4 = [];
            $(function () {
                var test_type = 'practice';
                var num5;
                $(".btn2").click(function () {
                    var id = $(this).data('id');
                    var ansver1 = '';
                    var ansver2 = '';
                    var ansver3 = '';
                    var ansver4 = '';
                    var ansver5 = '';
                    if($("#a" + id).prop("checked")){ansver1 = 'A'};
                    if($("#b" + id).prop("checked")){ansver2 = 'B'};
                    if($("#c" + id).prop("checked")){ansver3 = 'C'};
                    if($("#d" + id).prop("checked")){ansver4 = 'D'};
                    if($("#e" + id).is(":checked")){ansver5 = 'E'};
                    var ansver = ansver1 + ansver2 + ansver3 + ansver4 + ansver5;

                    if (ansver.length==0) {
                        alert("The question requires an answer");
                        $("#btn3").hide();
                        return false;
                    }else{
                        $("#btn3").show();
                    }


                    callHttp("api/test", {id: id, ansver: ansver});
                    if(num5 === 25){
                        $("#tquest").css("display","block");
                        $("#count").css("display","block");
                        $("#right").css("display","block");
                        $("#persent").css("display","block");
                        $("#btn5").css("display","block");
                        $("#btn3").css("display","none");
                        $(".ph").css("display","none");
                        $(".div2").css("display","none");
                        $("#btn6").css("display","none");
                        clearInterval(timeM);
                        clearInterval(timeS);
                    }
                    trigger_btn3();
                    //$(this).fadeOut("slow");
                });
                $("#btn3").click(function () {
                    trigger_btn3();
                });
                function trigger_btn3(){
                    if (test_type!='exam'){
                        return false;
                    }

                    if (num4.length<1){
                        generate_random_numbers();
                    }

                    var num3 = Math.floor(Math.random() * num4.length);



                    console.log(num4);

                    num3 = num4[num3];


                    $(".ph").css("display","none");
                    $(".div2").css("display","none");
                    num5 ++;
                    $("#phn"+num3).css("display","block").html("Question No:"+num5);
                    $("#ph"+num3).css("display","block");
                    $("#div2"+num3).css("display","block");
                    num4.splice($.inArray(num3, num4), 1);

                    if(num5 >= 26){
                        $("#tquest").css("display","block");
                        $("#count").css("display","block");
                        $("#right").css("display","block");
                        $("#persent").css("display","block");
                        $("#btn5").css("display","block");
                        $("#btn3").css("display","none");
                        $(".ph").css("display","none");
                        $(".div2").css("display","none");
                        $("#btn6").css("display","none");
                        clearInterval(timeM);
                        clearInterval(timeS);
                    }
                }
                $("#btn5").click(function () {
                    num  = 0;
                    num2 = 0;
                    num5 = 1;
                    test_type = 'exam';

                    $(this).css("display","none");
                    $("#btn3").css("display","block");

                    var num3 = Math.floor(Math.random() * num4.length);
                    num3 = num4[num3];

                    $("#count").css("display","none");
                    $("#right").css("display","none");
                    $("#persent").css("display","none");
                    $(".result1").css("display","none");
                    $(".ph").css("display","none");
                    $(".myquestions_answers").css("display","block");
                    $(".div2").css("display","none");
                    $("#btn6").css("display","block");

                    $("#phn"+num3).css("display","block").html("Question No: 1");
                    $("#ph"+num3).css("display","block");
                    $("#div2"+num3).css("display","block");
                    $("#pt").css("display","block");
                    num4.splice($.inArray(num3, num4), 1);

                    minute = 24;
                    second = 60;

                    timeS = setInterval(sec,1000);
                    timeM = setInterval(min,60000);
                });
                $("#btn6").click(function () {
                    $("#tquest").css("display","block");
                    $("#count").css("display","block");
                    $("#right").css("display","block");
                    $("#persent").css("display","block");
                    $("#btn5").css("display","block");
                    $("#btn3").css("display","none");
                    $(".ph").css("display","none");
                    $(".div2").css("display","none");
                    clearInterval(timeM);
                    clearInterval(timeS);
                    $("#btn6").css("display","none");
                })

                $("#btn4").click(function () {
                    num  = 0;
                    num2 = 0;
                    test_type = 'practice';

                    $("#tquest").css("display","none");
                    $(".ph").css("display","block");
                    $(".myquestions_answers").css("display","block");
                    $(".div2").css("display","block");
                    $("#count").css("display","block");
                    $("#right").css("display","block");
                    $("#persent").css("display","block");
                    $("#btn5").css("display","block");
                    $("#btn3").css("display","none");
                    $(".result1").css("display","block");
                    clearInterval(timeM);
                    clearInterval(timeS);

                });
                generate_random_numbers();
                $("#office").animate({
                    width:'100%',
                    opacity: '1'
                },1000);
                $(".header").animate({
                    fontSize:'50'
                },1000);
                $("button").click(function () {
                    $(".mysections").fadeIn('slow');
                })
            });
            function generate_random_numbers() {
                for(i=1;i<224;i++){
                    num4.push(i);
                }
            }
            var num;
            var num2;
            var timeS;
            var timeM;
            var second;
            var minute;


            function sec(){
                if(minute >= 0){
                    second = second - 1;
                    $("#pt").html(minute+" : "+second);}
                if(second === 0){second = 60;}
                if(minute < 0){clearInterval(timeS);}
            }

            function min() {
                minute = minute - 1;
                if(minute < 0){
                    $("#tquest").css("display","block");
                    $("#count").css("display","block");
                    $("#right").css("display","block");
                    $("#persent").css("display","block");
                    $("#btn5").css("display","block");
                    $("#btn3").css("display","none");
                    $(".ph").css("display","none");
                    $(".div2").css("display","none");
                    $("#pt").css("display","none");
                    clearInterval(timeM);
                }
            }
            function callHttp(url, data){
                $.post(url, data, function(result){
                    num = eval(num+1);
                    $("#p"+result[0]).html(result[1]).removeClass("correct");
                    $("#p"+result[0]).html(result[1]).removeClass("false");
                    if(result[1] === 'correct'){
                        num2 = eval(num2+1);
                        $("#right").html("Right Answers:  " + num2);
                        $("#p"+result[0]).attr('style','display:block !important');
                        $("#p"+result[0]).html(result[1]).addClass("correct");
                    }else{
                        num2 = eval(num2+0);
                        $("#right").html("Right Answers:  " + num2);
                        $("#p"+result[0]).attr('style','display:block !important');
                        $("#p"+result[0]).html(result[1]).addClass("false");
                    }
                    $("#count").html("Total Answers:  " + num);
                    var per = (num2 / num)*100;
                    per = per.toFixed(0);
                    $("#persent").html("Persentage:  " + per+"%");
                    return false;
                });
            }
        </script>

    </section>
    @include('footer')
@endsection

