<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | TraveltoIndia</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css"  href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet"  href="{{ asset('css/navigation.css') }}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css"  href="{{ asset('css/validation.css') }}"/>
    
    

    
    <script>
        $(document).ready(function(){
  $(".login").hide();
$(".signup_li").addClass("active");

$(".login_li").click(function(){
  $(this).addClass("active");
  $(".signup_li").removeClass("active");
  $(".login").show();
   $(".signup").hide();
   
})

;


$(".signup_li").click(function(){
  $(this).addClass("active");
  $(".login_li").removeClass("active");
  $(".signup").show();
   $(".login").hide();
});
});


</script>
  
</head>


<body><div id="cover" ></div>  
    <section id="body">
   
<section id ="background">
    <marquee class="ad" style = "border:2px deeppink solid ;background-color:deeppink; color:ghostwhite;" behavior ="alternate"><b>welcome to ₹BHARAT@Yatra.com - TourtoIndia</b></marquee>    
  
    <nav id="background2">  <img src="/images/logo1.png"/>
@include('navigation')
</nav>

        <div id="loginScreen">
        
        <div id ="wrapper" >
            <div class="left">
                <h3>Signup/ Login</h3>   
              <img src="/images/logo1.png" >
              <h1>Welcome To</h1>
              <h2>₹BHARAT@Yatra.com</h2>
            </div>
            <div class="right">
              <div class="tabs">
                <ul>
                  <li class="signup_li">signup</li>
                  <li class="login_li">login</li>
                </ul>
              </div>
              
              <div class="signup">
               @include('signup');
            </div>
              
              <div class="login">
                <form  action="login" method="POST">
                  @csrf
                <div class="input_field">
                  <input type="email" name="email" placeholder="E-mail" id="email1" class="input"><i class="fa fa-envelope"></i>
                </div>
                <div class="input_field">
                  <input type="password" name="password" placeholder="Password" id="password1" class="input"><i class="fa fa-key fa-lg"></i> 
                </div>
              
                  <button type="submit" class="btn"> Login</button>
              </a>
            </form>
            </div>
          </div>

        </div>
        </div>

    

    </section>
</section>
    

      

    
</body>
 

</html>