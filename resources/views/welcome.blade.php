@extends('upper')

@section('content')

<!-- backround image -->
<section class="page-header text-center position-relative banner-section">

  <div class="container">
    <h1 class="title" style="font-weight:bolder;text-shadow: 2px 2px #ff0000;font-size:60px;">WHY SCOTLAND NEEDS YOU</h1>
    <a href="https://youtube/h9bQwcndGfo" class="btn btn-primary btn-lg">Watch video Now</a>
  </div>
</section>

<div class="container">
 <div class="row">
 <div class="col">
  <div class="image" style="float:right">
    <img src="{{ asset('image/map.jpg') }}" alt="map"> 
  </div>
     <div class="text">
      <h2 style="font-weight:bolder; margin-top:0;text-shadow: 2px 2px #ff0000; ">WELCOME TO SCOTLAND</h2>
      <p style="font-weight:bold;margin-top:2%">Scotland. The country you love needs you.</p>
      <p style="font-weight:bold;">Travelling a little can make a big difference. Explore our countryside, hills and landscapes, awe-inspiring landmarks and coastal seascapes for the perfect break.</p>
      <p>Take some time out in one of our seven cultural cities, with their iconic attractions, contemporary bars and restaurants, and a full range of accommodation offerings eager to welcome you back.</p>
      <p>What about a coastal seaside retreat with miles of sandy beaches on your doorstep during <strong style="color:purple">Scotland's Year of Coasts & Waters?</strong> Or a glamping escape deep in the countryside with acres of space and time to reconnect with loved ones?</p>
        <div class="newpara">
          <h2>CURRENT CORONAVIRUS ADVICE</h2>
          <p>Search our site for businesses with 'We're Open' and <a href="https://www.visitscotland.com/about/practical-information/good-to-go-scheme/" target="_self">'Good to Go'</a>, to see who has carried out a COVID-19 risk assessment.</p>
          <p>Please check if you need to book ahead - many attractions now need you to book a time slot so they can meet capacity restrictions.</p>
        </div>
     </div>
  </div>
 </div>
</div>

<!---carousel slider from bootstrap --->
<h1 style="font-weight:boldest;text-shadow: 2px 2px #ff0000;margin-left:3vw;">WE'RE OPEN AND GOOD TO GO................</h1>
  <div class="container-fluid">
    <div id="carouselExampleFade" class="carousel slide" data-ride="carousel" style="margin-top:3%">
      <div class="carousel-inner">
        <div class="carousel-item active">
         <img class="d-block w-100" src="{{ asset('image/food.jpg') }}" alt="First slide">
          <div class="carousel-caption">
            <h1 style="font-weight:bolder;font-size:30px;">Food And Drink</h1>
          </div>
        </div>  
      
        <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('image/accomodation.jpg') }}" alt="Second slide">
          <div class="carousel-caption">
            <h1 style="font-weight:bolder;font-size:30px;">ACCOMODATION</h1>
          </div>

       </div>

        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('image/attraction.jpg') }}" alt="Third slide">
           <div class="carousel-caption">
             <h1 style="font-weight:bolder;font-size:30px;">ATTRACTION</h1>
           </div>
        </div>


        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('image/good to go scheme.jpg') }}" alt="fourth slide">
            <div class="carousel-caption">
              <h1 style="font-weight:bolder;font-size:30px">Good To Go Scheme</h1>
            </div>

        </div>
      </div>

  
      <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

<!-- container for content -->
<div class="container">
  <div class="row">
    <div class="col-sm-5">
      <p>
     <img class="img-responsive" src="{{ asset('image/sco.jpg') }}" alt="image1" style="width:50vw;height:80vh;margin-left:-5vw;">
      </p>
    </div>
    <div class="col-sm-2 sep">
      <span class="sepText">
     </span>
    </div>
   <div class="col-sm-5" style="background-color:grey; margin-left:-1vw; height:67% width:-40vh;padding-right:0">
     <h1 style="text-align:center">Tour Tale guides</h1>
     <h3 style= "text-align:center">TUNE IN AND LEARN A THING OR TWO ABOUT SCOTTISH HISTORY</h3>
     <P style="text-align:center">Welcome to our new exciting new products where you will hear expert guides and born sotrytellers
        recount their enthralling tales and personal experiences. In each podcast, a tour guid from different region will share their stories,bringing out their eclectic and often incredibly rich history found only in scotland from those who know and tell it best.
     <p style="text-align:center">
     <a href= "scotland.com/see-do/attractions/tour-guide-tales/">
      <button type="button" class="btn btn-primary" >Find out more</button>
     </a>
     </p>
   </div>
  </div>
</div>

<h1 style="text-shadow:2px 2px black;margin-top:2%;margin-left:3vw;">IDEAS FOR YOUR TRIP TO SCTOLAND</h1>
<!---Bootstrap cards-->
<div class="container">
 <div class="row">
  <div class="col-sm-6">
   <div class="card" >
    <img src="{{ asset('image/beautiful.jpg') }}" alt="image1" style="width:100%;">
      <div class="card-body">
        <h5 class="card-title" style="color:purple;text-align:center;text-shadow:2px,2px;font-weight:bolder">HOLIDAYS AND BREAKS</h5>
        <p class="card-text" style="text-align:center">Plan your trip to SCOTLAND NOW</p>
      </div>
    </div>
  </div>

   <div class="col-sm-6">
    <div class="card" style="align-item:center; height:100%;color:purple;text=align:center;text-shadow:2px,2px;" >
      <img src="{{ asset('image/image2.jpg') }}" alt="image2" style="width:100%" >
        <div class="card-body">
          <h5 class="card-title" style="color:purple;text-align:center;text-shadow:2px,2px;font-weight:bolder">UNIQUE EXPERIENCE</h5>
          <p class="card-text" style="text-align:center">Find once chance in lift time to visit scotland.</p>
        </div>
    </div>
   </div>
 </div>
</div>

<!--- Cards -->
<div class="container" style='margin-top:6%'>
  <div class="row">
    <div class="column">
      <div class="card-deck">
        <div class="card">
         <img class="card-img-top" src="{{ asset('image/image3.jpg') }}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title" style="color:purple;text-align:center;text-shadow:2px,2px;font-weight:bolder">OUTLANDER</h5>
            <p class="card-text" style="text-align:center">Follow the hit tv series to know about the location scotland</p>
          </div>
        </div>


        <div class="card">
          <img class="card-img-top" src="{{ asset('image/image4.jpg') }}" alt="Card image cap">
            <div class="card-body">
          <h5 class="card-title"style="color:purple;text-align:center;text-shadow:2px,2px;font-weight:bolder">SCOTLAND HIDDEN GEMS</h5>
          <p class="card-text" style="text-align:center">Over 20 routes in scotland to route from.</p>
           </div>
       </div>

       <div class="card">
        <img class="card-img-top" src="{{ asset('image/image5.jpg') }}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title" style="color:purple;text-align:center;text-shadow:2px,2px;font-weight:bolder">ROAD TRIPS</h5>
            <p class="card-text" style="text-align:center">27 attractions and experiences  that desrve a day out.</p>
          </div>
      </div>
    </div>
   </div>
 </div>
</div>
        

<div class="jumbotron jumbotron-fluid" style="margin-top:8%;padding-left;background-color:purple;">
  <div class="container">
    <h1 class="display-4" style="color:white;text-shadow:2px,2px,black;font-wieght:boldest;">NEWS LETTER SIGNUP</h1>
    <p class="lead" style="color:white;font-wight:bolder">Subscribe now for inspiration,travel tips,news and visitor offers.
    <a href="https://www.visitscotland.com/newsletter/">
    <button type="button" class="btn btn-success btn-lg" style="float:right">Sign up</button></p>
    </a>
  </div>
  
</div>

<h1 style=" text-shadow: 2px 2px 5px red;padding:-10vw;margin-left:2vw;margin-top:5%">BEATUIFUL SCENARY IN SCOTLAND</h1>

  <div class="container gallery-container-fluid"> 
   <div class="tz-gallery">
     <div class="row">

          <div class="col-sm-12 col-md-4">
            <a class="lightbox" href="">
              <img src="{{ asset('image/image15.jpg') }}" alt="Bridge">
            </a>
          </div>

          <div class="col-sm-6 col-md-4">
            <a class="lightbox" href="">
              <img src="{{ asset('image/image13.jpg') }}" alt="Park">
            </a>
          </div>

          <div class="col-sm-6 col-md-4">
            <a class="lightbox" href="">
              <img src="{{ asset('image/image14.jpg') }}" alt="Tunnel">
            </a>
          </div>

          <div class="col-sm-12 col-md-8">
            <a class="lightbox" href="">
              <img src="{{ asset('image/good to go scheme.jpg') }}" style="height:78vh;" alt="Traffic">
            </a>
          </div>

          <div class="col-sm-6 col-md-4">
            <a class="lightbox" href="">
              <img src="{{ asset('image/image16.jpg') }} " alt="Coast">
            </a>
          </div> 
        </div>

    </div>

</div>

<h1 style="text-shadow: 2px 2px 5px red;padding:-10vw;margin-left:2vw;">GREAT IDEAS FOR YOUR HOLIDAY</h1>

  <div class="container-fluid">
    <div id="carouselExampleFade" class="carousel slide" data-ride="carousel" style="margin-top:3%">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="{{ asset('image/image22.jpg') }}" alt="First slide">
            <div class="carousel-caption">
            <h1 style="font-weight:bolder;font-size:30px;">ONE OF THE PEACEFUL COUNTRY SCOTLAND</h1>
            </div>
        </div>

   
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('image/itenaries.jpg') }}" alt="Second slide">
            <div class="carousel-caption">
              <h1 style="font-weight:bolder;font-size:30px;">ITENARIES</h1>
            </div>
        </div>

        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('image/scotland.jpg') }}" alt="Third slide">
            <div class="carousel-caption">
              <h1 style="font-weight:bolder;font-size:30px;">BEAUTIFUL SCENARY</h1>
            </div>

        </div>


        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('image/image29.jpg') }}" alt="fourth slide">
            <div class="carousel-caption">
              <h1 style="font-weight:bolder;font-size:30px">WILD LIFE SERIES OF SCOTLAND</h1>
            </div>

         </div>
      </div>
  
  
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
  </div>

<h1 style="text-shadow: 2px 2px 5px red;padding:5vw;margin-left:-3vw;margin-top:3%">MORE INFORMATION OF SCOTLAND</h1>
  <div class="container-fluid px-0" style="margin-top:1%;">
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <img src="{{ asset('image/iknow.jpg') }}" alt="image1" style="width:100%;">
            <div class="card-body">
              <h5 class="card-title" style="color:purple;text-align:center;text-shadow:2px,2px;font-weight:bolder">IKNOW COMMUNITY</h5>
              <p class="card-text" style="text-align:center">Wonderful place to visit</p>
            </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="card" style="align-item:center; height:100%;color:purple;text=align:center;text-shadow:2px,2px;" >
          <img src="{{ asset('image/portalar.jpg') }}" alt="image2" style="width:100%" >
            <div class="card-body">
              <h5 class="card-title" style="color:purple;text-align:center;text-shadow:2px,2px;font-weight:bolder">DOWNLOAD PORTAL NEW PORTAL AR APP</h5>
                <p class="card-text" style="text-align:center">Step into scotland.</p>
            </div>
        </div>
    </div>
 </div>

 <section class="page-header text-center position-relative banner-section" style="
   background-image: url('image/deer.jpg');padding-top: 75px;
    padding-bottom: 50px;
    text-align: center;
    margin-bottom:-3vw;
    color: #f8f8f8;background-size:cover;min-height:80vh;margin-top:3%;opacity:0.2;">
</section>

@endsection