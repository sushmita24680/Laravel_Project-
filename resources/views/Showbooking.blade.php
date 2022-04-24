@extends('mainlayout');
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body style=" background: linear-gradient(15deg,rgba(138, 135, 135, 0.882) 0%,rgba(138, 135, 135, 0.507)100%),url('/images/torismcover.jpg') center no-repeat;
    background-size: cover;
    background-position: fixed;">
    <section id='showbooking'>
    <nav id="background2">  <img src="/images/logo1.png"/>
    <div id = "container">

    <ul style="margin-left:48rem;margin-top:3rem">
        <a href="/"><li><- back</li></a>
        </ul>
        </div>
       <h3>Booked Slots</h3>


</nav>
<table class="table table-bordered table-dark">
  <thead>
  <tr>
        <th scope="col">Id</th>
        <th scope="col">First name</th>
        <th scope="col">Last name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Country</th>
        <th scope="col">Package</th>
        <th scope="col">Current_destination</th>
        <th scope="col">Date</th>
        <th scope="col">Medium</th>
        <th scope="col">People</th>
        <th scope="col">Remarks</th>
        <th scope="col">Cancellation</th>
</tr>
  </thead>
  <tbody>
  @foreach($bookings as $booking )
<tr>

        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$booking->fname}}</td>
        <td>{{$booking->lname}}</td>
        <td>{{$booking->email}}</td>
        <td>{{$booking->phone}}</td>
        <td>{{$booking->country}}</td>
        <td>{{$booking->package}}</td>
        <td>{{$booking->current_destination}}</td>
        <td>{{$booking->date}}</td>
        <td>{{$booking->travelling_mode}}</td>
        <td>{{$booking->people}}</td>
        <td>{{$booking->remarks}}</td>
        <td ><a href={{ "delete/" }}><button type="button" class="btn btn-dark"  style="inline-padding:20px !important; background-color:red">Cancel</button></a></td>
</tr>
@endforeach
  </tbody>
</table>






</section>
</body>
</html>
