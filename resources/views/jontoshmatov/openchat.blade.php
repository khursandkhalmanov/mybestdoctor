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


 <h1 class="header">Customer Service Center</h1>
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
            <p class="chatheadertext">Welcome to Alfar Romeo Chat Line!</p>
            <div id="chat_transcripts"></div>
            <br>

                <table>
                    <tr>
                        <td colspan="2">
                            <input id="customer_message">
                            <input type="hidden" id="user_id" value="{{$user->id}}">
                        </td>
                    </tr>

                    <tr>
                        <td class="mylabels">&nbsp;</td>
                        <td class="mybuttons">
                            <button class="btn btn-dark" type="reset">Reset</button>
                            <button id="btn_send" class="btn btn-info">Send</button>
                        </td>
                    </tr>
                </table>


        </div>

        <script>
            $(function () {
                //char_transcripts
                    //customer_message
                    //btn_send

                    var text_length = $('#customer_message').val().length;

                    $('#customer_message').keypress(function(event){
                        text_length = $('#customer_message').val().length;
                        if (text_length>2) {
                            var message = $(this).val();
                            var keycode = (event.keyCode ? event.keyCode : event.which);
                            if (keycode == '13') {
                                callHttp2();
                                $('#customer_message').val('');
                                return false;
                            }
                        }
                    event.stopPropagation();
                });



               $("#btn_send").click(function () {
                   alert("SEND button is clicked");
                   return false;
               });

            });
            var num = 0;
            callHttp();
            setInterval(function(){ callHttp(); }, 3000);


            function copyText() {
                num++;
                var msg = $("#customer_message").val();
                var char_transcripts = $("#char_transcripts table");
                char_transcripts.append("<tr><td class='customer_chat_text'>Max: "+ msg+"</td></tr>");
                char_transcripts.append("<tr><td class='technican_chat_text'>Alex: "+msg+"</td></tr>");
                $("#customer_message").val('');
                $("#customer_message").scrollTop(1E10);
                return false;
            }

            function sendText() {
                var msg = $("#customer_message").val();
            }


            var num = 0;
            function callHttp() {
                var parms = {};
                $.post("api/getLiveChatTranscripts", parms, function(messages){
                    num++;
                    char_transcripts = $("#chat_transcripts");
                    char_transcripts.empty();

                    char_transcripts.append("<ul>");
                    $.each(messages, function( index, value ) {

                        console.log(value.avatar);
                        if (value.technician_id>0) {
                            char_transcripts.append("<li class='technician'><img src='" + value.avatar + "'> " + value.message + "<hr> "+value.created_at+" </li> ");
                        }else{
                            char_transcripts.append("<li class='customer'><img class='customer_img' src='" + value.avatar + "'> " + value.message + "<hr> "+value.created_at+" </li> ");
                        }
                    });
                    char_transcripts.append("</ul>");

                    return false;
                });
                scrollMyChatWindow();
            }

            function callHttp2() {
               var msg = $("#customer_message").val();
                var user_id = $("#user_id").val();
                var parms = {'message':msg,'technician_id':null,'chat_id':1,'user_id':user_id};
                $.post("api/saveLiveChatTranscripts", parms, function(messages){
                    console.log(messages);
                    callHttp();
                    scrollMyChatWindow();
                    return false;
                });
            }


            function scrollMyChatWindow() {
                var height = 10000;
                $('#chat_transcripts li').each(function(i, value){
                    height += parseInt($(this).height());
                });
                height += '';
                $('#chat_transcripts').animate({scrollTop: height});
                console.log(height);
            }

        </script>

<style>
    #chat_transcripts li {
        list-style: none;
    }

    .customer_img{
        width:40px !important;
    }

    .technician{
        left:0px !important;
        background-color: #700007 !important;
    }

    #chat_transcripts img{
        width:60px;
    }

    #chat_transcripts li{
        padding:10px;
        border-radius: 15px;
        background-color: #343434;
        margin: 20px;
        position: relative;
        left:40px;
    }
    .chattable td{
        width:50%;
    }
    .chattable{
        width: 100%;
    }
    .chatheadertext{
        background-color: #1d1d1d;
        color: #ffde30;
        margin:10px;
    }

    .technican_chat_text{
        color: #ffea4a;
        text-align: left;
    }

.customer_chat_text{
    color: orangered;
    text-align: left;
}
    #chat_transcripts{
        width: 100%;
        height: 300px;
        max-height: 300px;
        overflow: auto;
        background-color: grey;
        color: #ffdc30;
        margin: auto;
        border: 1px solid black;
        box-shadow: #000000 0px 5px 5px 5px;
        border-radius: 10px;
        background-color: black;
        margin: 5px;
    }

    .mybuttons{
        padding-bottom: 10px;
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


</style>


    </section>
    <!-- end contact section -->
    @include('footer')
@endsection
