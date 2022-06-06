<nav>
    <div class="logo">
      <a href="{{route('home')}}">YOUR COMPANION</a>
    </div>
    <input type="checkbox" id="click">
    <label for="click" class="menu-btn">
    <i class="fas fa-bars"></i>
    </label>
    <ul>
       <li><a href="{{route('home')}}">HOME</a></li>
        <li><a href="task.html">TASKS</a></li>
        @if (Route::has('login'))
        @auth
                        <li><a href="{{ url('/dashboard') }}" >DASHBOARD</a></li>
                        <li><form action="{{route('logout')}}" method="post">
                          @csrf
                          <a href=""><input type="submit" value="LOGOUT"></a>
                      </form></li>
                    @else
                        <li><a href="{{ route('login') }}" >Log in</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" >Register</a></li>
                        @endif
                  @endauth
       @endif
       
        
        
       
    </ul>
 </nav>
