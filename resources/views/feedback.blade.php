<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{ asset('css/feedback.css') }}" />
<link rel="stylesheet"  href="{{ asset('css/navigation.css') }}" />
</head>
<body>       
    
        <section>            
        <nav id="background2">  <img src="/images/logo1.png"/>
   
        @include('navigation');

<h3 id="heading">Feedback Form</h3></nav>

<div class="contained"> 
<form action="/feedbacks" method="POST">
        @csrf
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>

    <label for="Email"> Email</label>
    <input type="email" id="lname" name="Email" placeholder="Your email.." required>

    <label for="country">Country</label>
    <select id="country" name="country" required>
      <option value="australia">India</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
      <option value="usa">Australia</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea>

    <button value="submit"   >Submit</button>
  </form>
</div>
</section>
<script>
    function submitted(){
     return alert('Thank you for your feedback');
    }
</script>
</body>
</html>
