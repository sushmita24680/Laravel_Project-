<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bookings</title>
<link rel="stylesheet" type="text/css"  href="{{ asset('css/bookings.css') }}" />
</head>

<body>

        <section>
        <nav id="background2">  <img src="/images/logo1.png"/>



<h1 id="heading">Advance booking</h1></nav>
</nav>


<div class="contained">
    <form action="booking" method="post" >

    @csrf
  <table>
      <tr>
          <td>
              <label for="fname">First Name</label>
                 <input type="text" id="fname" name="fname" placeholder="Your name.." required>

          </td>
          <td>
               <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lname" placeholder="Your last name.." required>

          </td>
      </tr>
      <tr>
        <td>
           <label for="Email"> Email</label>
    <input type="email" id="lname" name="email" placeholder="Your email.." required>
        </td>
        <td>
            <label for="Phone no."> Phone number</label>
            <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="ex- 123-456-7890" id="phone" name="phone" required>
        </td>
      </tr>
      <tr>
          <td>
            <label for="country">Country</label>
            <select id="country" name="country" required>
                <option >Select</option>
              <option >India</option>
              <option >Canada</option>
              <option >USA</option>
              <option >Australia</option>
            </select>
          </td>
          <td>
            <label for="country">Tour Package</label>
            <select id="country" name="package" placeholder="Select" required>
                <option>Select</option>
                <option value="Manali">Manali</option>
              <option value="Goa-beach">Goa beach</option>
            </select>
          </td>
      </tr>
      <tr>
        <td>
            <label for="fname">Current Destination</label>
               <input type="text" id="fname" name="current_destination" placeholder="Your name.." required>

        </td>
        <td>
             <label for="lname">Date for booking tour </label>
             <input type="date" id="date" name="date" min="<?= date('Y-m-d', time()+86400+86400); ?>"  required>

        </td>
    </tr>
    <tr >
            <td>Travelling Mode: </td>
            <tr><td ><input type="radio" name="travelling_mode" value="driving" class="mode"> Driving
                <input type="radio" name="travelling_mode" value="biking" class="mode" > Biking <br/>
                <span style="color:red;">@error('travelling_mode'){{$message}}@enderror</span>
                </td>

                <td >No. of people: <input type="number" min="0" max="15" id="age" name="people" required maxlength="3">

            </td>
    </tr>
</tr>
    <tr>
         </table>
    <ul style="list-style:none;">
   <li> <label for="subject">Remarks</label></li>
   <li> <textarea id="subject" name="remarks" name="remarks" placeholder="If any .." style="height:200px" ></textarea></li>
</ul>
</tr>

    <button value="submit"   >Submit</button>
  </form>
</div>
</section>
<script>


</body>
</html>
