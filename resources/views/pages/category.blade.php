@extends('layouts.app')
@section('content')
<!-- header -->
<header class = "header bg-light-brown flex" id = "home">
    <div class = "container">
        <div style="text-align: center; backgroud-image: url('https://drive.google.com/uc?export=view&id=0B6wwyazyzml-OGQ3VUo0Z2thdmc');">
        <!-- <img src="https://drive.google.com/uc?export=view&id=0B6wwyazyzml-OGQ3VUo0Z2thdmc" alt="" srcset=""> -->
            <h1>{{ $category->name }}</h1>
            <h3>2022</h3>
        </div>
        <!-- <div class = "header-content grid text-center">
            <div class = "header-left">
                <h1>{{ $category->name }}</h1>
                <p class = "text">Caraka Creasindo Furniture is an Indonesian furniture company based in Jepara, Central Java, Indonesia. We are specialized in manufacture and export wooden furniture for more than 10 years. </p>
                <a href = "#" class = "btn-header text-white bg-brown">Read More</a>
            </div>

            <div class = "header-right">
                <img src = "images/header1.png">
            </div>
            <img src = "images/header-shape.png" class = "header-shape">
        </div> -->
    </div>
</header>
<!-- end of header -->
<main>
<style>
    .fcontainer {
        position: relative;
        width: 100%;
        overflow: hidden;
        padding-top: 56.25%; /* 16:9 Aspect Ratio */
    }

    .fresponsive-iframe {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        width: 100%;
        height: 100%;
        border: none;
    }

    .divButton {
        text-align: center;
        margin: 10px 0px;
    }
    .loadingg{
        width: 100%;
        height: 100%;
        z-index: 1000;
        background: #ccc;
        top: 0px;
        left: 0px;
        position: absolute;
        text-align: center;
        padding: 25%;
    }
</style>
<!-- https://drive.google.com/file/d/1HusY0yPhBM6aR6Clzidbgyqe3QY5WZs_/view?usp=sharing -->
    <!-- <div style="text-align: center; margin: 40px 0px 20px 0px";> -->
    <div class="divButton">
        <button class = "btn-header text-white bg-brown" onclick="openFullscreen()">Show Fullscreen</button>
    </div>
    <div class="fcontainer" id="pdff"> 
        <iframe class="fresponsive-iframe" id="iframee" src="{{ $category->pdf }}"></iframe>
        <div id="loadingMessage" class="loadingg">Loading...</div>
        <button class="btn-header text-white bg-brown" style="position:absolute;right:12px;bottom:33px;visibility:hidden;" id="exit" onclick="openFullscreen()">Exit Fullscreen</button>
    </div>
    <!-- <div class="iframe-container"> -->

        <!-- <iframe src="https://heyzine.com/flip-book/abd0a9610f.html" width="640" height="480"></iframe> -->
            <!-- <embed src="{{ asset('pdf/' . $category->pdf) }}" width="600" height="500" alt="pdf" /> -->



       
    <!-- </div> -->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://heyzine.com/release/jquery.pdfflipbook.1.js"></script>
<script>
var elem = document.getElementById("pdff");
var exit  = document.getElementById("exit");
var iframe  = document.getElementById("iframee");

function openFullscreen() {
    if (document.fullscreenElement === null) {
        // this._fullscreen.openFullscreen();
        if (elem.requestFullscreen) {
            elem.requestFullscreen();
            exit.style.visibility = "visible";
        } else if (elem.webkitRequestFullscreen) { /* Safari */
            elem.webkitRequestFullscreen();
            exit.style.visibility = "visible";
        } else if (elem.msRequestFullscreen) { /* IE11 */
            elem.msRequestFullscreen();
            exit.style.visibility = "visible";
        }
    } else {
        // this._fullscreen.closeFullscreen();
        console.log("hiyaa");
        exit.style.visibility = "hidden";
        if (document.exitFullscreen) {
            document.exitFullscreen();
            exit.style.visibility = "hidden";
        } else if (document.webkitExitFullscreen) { /* Safari */
            document.webkitExitFullscreen();
            exit.style.visibility = "hidden";
        } else if (document.msExitFullscreen) { /* IE11 */
            document.msExitFullscreen();
            exit.style.visibility = "hidden";
        }
    }
}
$('#iframee').ready(function () {
    $('#loadingMessage').css('display', 'none');
});
$('#iframee').load(function () {
    $('#loadingMessage').css('display', 'none');
});


</script>

        <!-- <a title="Demo" subtitle="Test" showdownload href="https://heyzine.com/files/uploaded/bf8cb8abcd9f0c6da8680e6bdf1b7bf0cfb7ca51.pdf">example</a>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://heyzine.com/release/jquery.pdfflipbook.1.js"></script>

        <script type="text/javascript">
            $('a').pdfFlipbook();</script>
        </script>
        </div> -->
        <!-- <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('category') }}"> Back</a>
        </div> -->
    
</main>
@stop