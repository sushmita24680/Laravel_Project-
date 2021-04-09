<form action="{{ route('create') }}" method="post">
    @csrf
                <div class="input_field">
                  
                  <input  type="text" placeholder="Username"  class="input" name="Username">
                  
                  <i class="fa fa-user fa-lg"></i>
                  <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                </div>
                <div class="input_field">
                  <input type="text" placeholder="E-mail" name="email" class="input"><i class="fa fa-envelope"></i>
                  <span class="text-danger">@error('email'){{ $message }}@enderror</span>

                </div>
                <div class="input_field">
                  <input type="password" placeholder="Password" name="password" class="input"><i class="fa fa-key fa-lg"></i> 
                  <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                </div>
                <button type="submit" class="btn">signup</button>
              </a>
            </form>     