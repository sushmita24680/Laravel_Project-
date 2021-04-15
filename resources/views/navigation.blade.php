
<div id = "container">
            
    <ul>
        <a href="/show-booking"><li>Bookings</li></a>
        <a href="/"><li>Home</li></a>
        <li>Custom Packages
            <ul>
                <li>Adventure
                <ul>
                    <a href="/manali"><li>Manali</li></a>
                    <a href="/goa"><li>Goa beach</li></a>
                </ul>
                </li>
                <li> Piligrams
                    <ul>
                        <li>KedarDham</li>
                        <li>Buddha</li>
                    </ul>
                <li>Heritage
                    <ul>
                        <li>Rajasthan</li>
                        <li>Jabalpur</li>
                        
                    </ul>
                </li>
                
                 
            </ul>
        </li>
       
        <a href="/aboutus"><li>About us</li></a>
        <a href="/contactus"><li>Contact us</li></a>
       <a href="/feedback"><li >Feedback</li></a>
     
       @if(Session::has('user'))
      <a href="/logout"><span class="hidden-xs"><li >Logout</li></span></a>
      
       @else
      <a href="/login"><span class="hidden-xs"><li >Login</li></span></a>
       
       @endif
    </ul>
</div>
        
      
   