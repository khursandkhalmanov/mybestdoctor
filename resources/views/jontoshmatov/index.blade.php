@extends('master')
@section('title', 'Contact Us')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
@section('content')
    <!-- navigation -->
    @include('navigation')
    <!-- end navigation -->
    <!-- slider -->
    <!-- contact section -->
    <section id="contact" class="wow fadeIn border-top border-bottom border-transperent-white-light animated"
             style="visibility: visible; animation-name: fadeIn;">


 <h1 class="header animated bounceInUp">Welcome to Jon's Web Page!</h1>
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
                <li class=""><a href="/airports" class="inner-link">Airports</a></li>
            </ul>
        </div>
        <div class="col-lg-3 col-md-2 pull-right header-right text-right sm-display-none">
            <div class="clock">
            <div class="hand hour" data-hour-hand><img  id="img1" src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/89694f71-9e7d-42ed-8687-efa52e7f6e9e/d95p14v-3fdbdac8-3323-4f7b-a40c-1b860b7335a5.png/v1/fill/w_600,h_600,strp/clock_hand_hour_by_mspjessicahamster_d95p14v-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9NjAwIiwicGF0aCI6IlwvZlwvODk2OTRmNzEtOWU3ZC00MmVkLTg2ODctZWZhNTJlN2Y2ZTllXC9kOTVwMTR2LTNmZGJkYWM4LTMzMjMtNGY3Yi1hNDBjLTFiODYwYjczMzVhNS5wbmciLCJ3aWR0aCI6Ijw9NjAwIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.VCdTdAbmIsvD6YAdRGqXsr_rd6-QgK1rHyZHWMTAanU"></div>
            <div class="hand minute" data-minute-hand></div>
            <div class="hand second" data-second-hand></div>
            <div class="number number1"><b>I</b></div>
            <div class="number number2"><b>II</b></div>
            <div class="number number3"><b>III</b></div>
            <div class="number number4"><b>IV</b></div>
            <div class="number number5"><b>V</b></div>
            <div class="number number6"><b>VI</b></div>
            <div class="number number7"><b>VII</b></div>
            <div class="number number8"><b>VIII</b></div>
            <div class="number number9"><b>IX</b></div>
            <div class="number number10"><b>X</b></div>
            <div class="number number11"><b>XI</b></div>
            <div class="number number12"><b>XII</b></div>
            </div>
        </div>
        <img id="office" src="http://maintainwithfresh.com/images/office/office.jpg">

<style>
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
<script>
    setInterval(setClock, 1000);
    const hourHand = document.querySelector('[data-hour-hand]')
    const minuteHand = document.querySelector('[data-minute-hand]')
    const secondHand = document.querySelector('[data-second-hand]')
    function setClock() {
        const currentData = new Date();
        const secondsRatio = currentData.getSeconds()/60;
        const minutesRatio = (secondsRatio + currentData.getMinutes())/60;
        const hoursRatio = (minutesRatio + currentData.getHours())/12;

        setRotation(secondHand,secondsRatio)
        setRotation(minuteHand,minutesRatio)
        setRotation(hourHand,hoursRatio)

    }
    function setRotation(element, rotationRatio) {
        element.style.setProperty('--rotation',rotationRatio * 360)
    }
    setClock();
    $(function () {
        $("#office").animate({
            width:'100%',
            opacity: '1'
        },1000);
    });
    $(function () {
        $(".header").animate({
            fontSize:'50'

        },1000);
    });
</script>

    </section>
    <!-- end contact section -->
    @include('footer')
@endsection
