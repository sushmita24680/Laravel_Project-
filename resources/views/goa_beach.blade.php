<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TraveltoGoa_beach</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/tour.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/goastyle.css')}}" />
    <link rel="stylesheet"  href="{{ asset('css/navigation.css') }}" />

</head>
<body>
    <section id ="background">
        <ul class="cb-slideshow">
            <li><span>Image 01</span></li>
            <li><span>Image 02</span></li>
            <li><span>Image 03</span></li>
            <li><span>Image 04</span></li>
            <li><span>Image 05</span></li>
            <li><span>Image 06</span></li>

        </ul>
        <br/>
        <nav id="background2">  <img src="/images/logo1.png"/>
      @include('navigation');
      </nav>
        <div id="heading">
            <!-- <img src="png-hINDIacover.png"/> -->
            <h3> WELCOME TO | Adventure</h3>
            <h1>GOA</h1>
            <br/>


        </div >
    <a href="/goa-details"><button id="open" >>> OPEN</button></a>
    </section>

</body>
</html>
