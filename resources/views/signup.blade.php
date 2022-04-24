<form action="/login" method="POST">
    @csrf
                <div class="input_field">
                <table>
                  <td> <input  type="text" placeholder="Username"  class="input" name="name"></td><td> <i class="fa fa-user fa-lg"></i></td>
                    </table>
                  <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                </div>
                <div class="input_field">
                    <table>
                  <td><input type="email" name="email" placeholder="E-mail" id="email1" class="input"></td><td><i class="fa fa-envelope"></i></td>
                    </table>

                </div>
                <div class="input_field">
                    <table>
                  <td> <input type="password" placeholder="Password" name="password" class="input"></td><td> <i class="fa fa-key fa-lg"></i></td>
                    </table>


                </div>
                <button type="submit" class="btn">signup</button>

            </form>
