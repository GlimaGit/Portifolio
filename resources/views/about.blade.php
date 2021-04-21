@extends('layouts.defaut')

@section('page-content')
<section class="relative min-h-screen flex items-center">
  <div class="container mx-auto text-center">
    <h2 class="text-4xl font-black sm:text-7xl">About<span class="text-purple-500">Me</span>
    </h2>
</section>
<section class="py-20">
  <div class="max-w-screen-md mx-auto">
    <h3 class="text-4xl font-bold mb-6">About me</h3>

    <p class="text-xl -mb-0 italic">
    Hey!
    </p>
    <p class="text-xl mb-6 italic">
      My name is Gabriel Lima, I'm 19 years old and I'm a Full Stack Developer.
My trajectory at the  programming area started very early. When I was 13 I made my first blog with HTML and, because of it, my passion for technology increased. I started to study some programming languages ​​2 years ago like JavaScript and PHP.
Nowadays, I'm studying System Analysis at Instituto Federal de São Paulo (IFSP) in the 3rd semester.
I am currently unemployed and looking for an opportunity to develop my knowledge.
    </p>

      <a href={{ route('home') }}
      class="bg-purple-500 text-center py-2 px-4 rounded hover:bg-purple-800 transition">Go Home</a>

@endsection
