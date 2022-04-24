
<div id = "container">

    <ul>
        @if(Session::has('booking'))
        <a href="/show-booking"><li>Bookings</li></a>
      @endif
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
                </li>
                <li>Heritage
                    <ul>
                        <li>Rajasthan</li>
                        <li>Jabalpur</li>

                    </ul>
                </li>


            </ul>
        </li>

        <li> <a href="/aboutus">About us</a></li>
        <a href="/contactus"><li>Contact us</a></li>
       <li><a href="/feedback">Feedback</a></li>

       @if(Session::has('user'))
     <li > <a href="/logout"><span class="hidden-xs">Logout</span></a></li>

       @else
        <li><a href="/login"><span class="hidden-xs">Login</span></a></li>

       @endif
    </ul>
</div>


