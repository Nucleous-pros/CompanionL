@extends('home')

@section('content')
<nav>
    <div class="logo">
  YOUR COMPANION
    </div>
    <input type="checkbox" id="click">
    <label for="click" class="menu-btn">
    <i class="fas fa-bars"></i>
    </label>
    <ul>
       <li><a class="active" href="#">HOME</a></li>
        <li><a href="signup.html">SIGN UP</a></li>
        <li><a href="task.html">TASKS</a></li>
       <li><a href="dashboard1.html">DASHBOARD</a></li>
       <li><a href="login1.html">LOGIN</a></li>
        <li><a href="logout.html">LOGOUT</a></li>
        @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
       
    </ul>
 </nav>
 <br>
 <br>

  <center>
   <div class="card" style="width: 45rem;">
     <div class="card-body">
       <h2 class="card-title">CAMPANION</h2>
       <h3 class="card-subtitle mb-2 text-muted">The Mental Health Campanion</h3>
       <p class="card-text">What Is Mental Health?<br>
         
         Mental health includes our emotional, psychological, and social well-being. It affects how we think, feel, and act. It also helps determine how we handle stress, relate to others, and make choices. Mental health is important at every stage of life, from childhood and adolescence through adulthood.<br><br>
         
         Over the course of your life, if you experience mental health problems, your thinking, mood, and behavior could be affected. Many factors contribute to mental health problems, including:<br>
         
         Biological factors, such as genes or brain chemistry<br>
         Life experiences, such as trauma or abuse<br>
         Family history of mental health problems<br>
         Mental health problems are common but help is available. People with mental health problems can get better and many recover completely.
         
         Early Warning Signs
         Not sure if you or someone you know is living with mental health problems? Experiencing one or more of the following feelings or behaviors can be an early warning sign of a problem:
         
         Eating or sleeping too much or too little<br>
         Pulling away from people and usual activities<br>
         Having low or no energy<br>
         Feeling numb or like nothing matters<br>
         Having unexplained aches and pains<br>
         Feeling helpless or hopeless<br>
         Smoking, drinking, or using drugs more than usual<br>
         Feeling unusually confused, forgetful, on edge, angry, upset, worried, or scared<br>
         Yelling or fighting with family and friends<br>
         Experiencing severe mood swings that cause problems in relationships<br>
         Having persistent thoughts and memories you can't get out of your head<br>
         Hearing voices or believing things that are not true<br>
         Thinking of harming yourself or others<br>
         Inability to perform daily tasks like taking care of your kids or getting to work or school</p>
       <a href="#" class="card-link">Card link</a>
       <a href="#" class="card-link">Another link</a>
     </div>
   </div>
  

 </center>
@endsection