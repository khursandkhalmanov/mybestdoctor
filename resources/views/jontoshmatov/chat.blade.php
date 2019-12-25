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


 <h1 class="header animated bounceInUp">Customer Service Center</h1>
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

            <form id="mychatform" action="openchat" method="post">
                <table>
                    <tr>
                        <td colspan="2" class="mytable_header">Live Chat with technician</td>
                    </tr>
                    <tr>
                        <td class="mylabels">Your Full Name: </td>
                        <td class="myinputs"><input name="full_name"></td>
                    </tr>
                    <tr>
                        <td class="mylabels">Your Email Address: </td>
                        <td class="myinputs"><input name="email_address" type="email"></td>
                    </tr>

                    <tr>
                        <td class="mylabels">Technician</td>
                        <td class="myinputs2" ><input name="technician" value="1" type="checkbox"></td>
                    </tr>

                    <tr>
                        <td class="mylabels">&nbsp;</td>
                        <td class="mybuttons">
                            <button class="btn btn-dark" type="reset">Reset</button>
                            <button class="btn btn-info" type="submit">Send</button>
                        </td>
                    </tr>
                </table>
                <input type="hidden" name="form_submitted" value="1">
                {{csrf_field()}}
            </form>

            <div id="chatwindow">
                dfsdkfsdfsdf
            </div>

        </div>

        <script>
            $(function () {

               $("#mychatform").submit(function () {
                   var inputs = $(this).serializeArray();
                   jQuery.each(inputs, function (i, input){
                      console.log(input.name +' : '+input.value);
                   });

               });
            });
        </script>

<style>

    .myinputs2 input{
        width: 20% !important;
    }

    #chatwindow{
        display: none;
    }

    .mybuttons{
        padding-bottom: 10px;
    }
    textarea{
        width: 50%;
        height: 200px;
        margin: auto;
    }

    input, textarea{
        margin-bottom: 20px !important;
    }

    .mylabels{
        text-align: right;
        padding-right: 10px;
        color: white;
        width: 340px;
    }
    .mytable_header{
        text-align: center;
        color:lightcoral;
        font-size: 20px;
        font-family: Verdana;
        padding-bottom: 20px;
    }



    .myinputs input{
        border: 1px solid #dfdfdf;
        letter-spacing: 1px;
        font-size: 11px;
        padding: 8px 15px;
        width: 50%;
        margin: 0;
        max-width: 50%;
        resize: none;
    }

    .mycontainer table{
        width: 100%;
        margin: auto;
    }
.mycontainer{
    width: 80%;
    color: #dcf1ff;
    margin: auto;
    border: 1px solid black;
    box-shadow: #4a0000 5px 5px 5px 5px;
    border-radius: 15px;
    background-color: black;
}

    .collapse{
        z-index: 5;
    }
    #office{
        opacity: 0;
        width: 50%;
    }
    .header{
        color: #ef56ab;
        text-shadow: 3px 3px white ;
        text-align: left;
    }
    .container{
        width: 100%;
    }
    .clock{
        width: 200px;
        height: 200px;
        background-color: rgba(255,255,255, .5);
        border-radius: 50%;
        border: 2px solid black;
        position: absolute;
        z-index: 8;
        margin-top: 50px;
        margin-left: 85px;
    }
    .clock .number{
        --rotation: 0;
        position: absolute;
        width: 100%;
        height: 100%;
        text-align: center;
        transform: rotate(var(--rotation));
        font-size: 25px;
        color: black;
    }
    .clock .number1{--rotation: 30deg;}
    .clock .number2{--rotation: 60deg;}
    .clock .number3{--rotation: 90deg;}
    .clock .number4{--rotation: 120deg;}
    .clock .number5{--rotation: 150deg;}
    .clock .number6{--rotation: 180deg;}
    .clock .number7{--rotation: 210deg;}
    .clock .number8{--rotation: 240deg;}
    .clock .number9{--rotation: 270deg;}
    .clock .number10{--rotation: 300deg;}
    .clock .number11{--rotation: 330deg;}

    .clock .hand{
        --rotation: 0;
        position: absolute;
        bottom: 50%;
        left: 50%;
        width: 200px;
        height: 200px;
        border-top-left-radius:2px;
        border-top-right-radius:2px;
        transform-origin: bottom;
        z-index: 10;
        transform:translate(-50%) rotate(calc(var(--rotation)*1deg));
    }
    .clock::after{
        content: '';
        position: absolute;
        background-color: black;
        z-index: 10;
        bottom: 50%;
        left:50%;
        width: 15px;
        height: 15px;
        border-radius: 50%;
        transform: translate(-50%,50%);
    }
    .clock .hand.second {
        width: 2px;
        height: 45%;
        background-color: red;
    }
    .clock .hand.minute{
      width: 4px;
        height: 43%;
        background-color: black;
        z-index: 10;
    }

    #img1{
        position: absolute;
        transform-origin: bottom;
        z-index: 10;
        height: 200px;
        width: 200px;
        transform:translate(-100%,50%);
    }

</style>


    </section>
    <!-- end contact section -->
    @include('footer')
@endsection
