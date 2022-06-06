@extends('home')

@section('content')
@include('layouts.navigation')
<a href="https://www.instagram.com/?hl=en"><div class="container">
    <center> <img src="{{asset('images/meetpeople.jpg')}}" alt="Notebook" width="500px" height="400px"></center>
     <div class="content">
       <h1>Go Out!!</h1>
       <p>Meet a few people</p>
     </div>
   </div></a>
   <a href="https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwi65-K81O33AhWMqZYKHQouAe8YABAAGgJ0bA&ohost=www.google.com&cid=CAESa-D29ANQR4SqD1v59fzQsyBsAjMXC7z7jU2dWg5nIgXEF6e-UveR4gWvzMu5d3I7D3If3FMNSEtJacYiLlSkq-hkHk3E9DKb9LM5uLRyUL2S4Y5DvqjsUpJ3fqgC_pmMfwIVMaepqDXgALCc&sig=AOD64_3aIWyZnEOKLF-WY2_nWqTBXH1zOQ&q&adurl&ved=2ahUKEwjx79q81O33AhVbwYsBHSKHCA0Q0Qx6BAgDEAE"> <div class="container">
    <center> <img src="{{asset('images/favtrack.jpg')}}" alt="Notebook" width="500px" height="375px"></center>
     <div class="content">
       <h1>MUSIC</h1>
       <p>Listen to your favourite track.</p>
     </div>
   </div></a>
    <a href="https://www.menshealth.com/uk/building-muscle/a754099/the-15-best-beginners-exercises-to-do-at-home/"><div class="container">
     <center><img src="{{asset('images/exercise.jpg')}}" alt="Notebook" style="width:50% ;"></center>
     <div class="content">
       <h1>GYM & YOGA</h1>
       <p>Do some Excersices.</p>
     </div>
   </div></a>
   <a href="https://bookhub.online/"><div class="container">
     <center><img src="{{asset('images/book.jpg')}}" alt="Notebook" width="500px" height="400px"></center>
    <div class="content">
       <h1>BOOKS</h1>
       <p>Read some Books.</p>
     </div>
   </div></a>
@endsection
    
