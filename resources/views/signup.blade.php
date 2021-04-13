<form action="register" method="POST">
    @csrf
                <div class="input_field">
                  
                  <input  type="text" placeholder="Username"  class="input" name="name">
                  
                  <i class="fa fa-user fa-lg"></i>
                  <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                </div>
                <div class="input_field">
                  <input type="email" placeholder="E-mail" name="email" class="input"><i class="fa fa-envelope"></i>
               
                </div>
                <div class="input_field">
                  <input type="password" placeholder="Password" name="password" class="input"><i class="fa fa-key fa-lg"></i> 
                  
                </div>
                <button type="submit" class="btn">signup</button>
              </a>
            </form>     