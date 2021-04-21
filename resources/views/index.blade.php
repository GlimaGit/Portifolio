@extends('layouts.defaut')

@section('page-content')
  <section class="relative min-h-screen flex items-center">
    <div class="container mx-auto text-center">
      <h2 class="text-4xl font-black sm:text-7xl">My<span class="text-purple-500">Projects</span>
      </h2>
      <h3 class="text-2xl sm:text-2xl italic">
          by Gabriel Lima
      </h3>
      <h3 class="text-2xl sm:text-2xl">
      👨‍💻
      </h3>
      <div class="absolute bottom-0 left-0 right-0 p-10">
        <p class="text-center font-black">Scroll &#128071;</p>
      </div>
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

            <a href={{ route('about') }}
            class="bg-purple-500 text-center py-2 px-4 rounded hover:bg-purple-800 transition">More about me</a>

        </div>
        </div>
    </div>
  </section>

  <section class="py-20">
    <div class="max-w-screen-md mx-auto">
      <h3 class="text-4xl font-bold mb-6">Experiences</h3>
      <div class="flex flex-wrap -mx-2">
        <div class="w-full sm:w-1/2 mb-3 px-4">
          <div class="px-5 bg-gray-600 h-full rounded-lg shadow-lg-200px">
            <h3 class="font-black text-2xl mb-3 bg-gray-500 rounded text-center py-2 px-4 ">Searchit 🔍</h3>
            <p class="text-white mb-30 bg-gray-500 rounded text-center py-2 px-4 ">
            In Searchit you can find your favorite movies and TV series in a simple and easy way.
            The project started with the purpose of facilitating the search for movies by their features (writing some part of the movie or a summary of what happened in it),
            making accessible the most popular movies and series from the most famous streaming platforms. The website was developed using the technologies: JavaScript, CSS, HTML and OMBD as API.
            </p>
          </div>
          <p>
            <a href="https://github.com/GlimaGit/Searchit"
            class="bg-purple-500 font-black text-center py-1.5 px-4 rounded hover:bg-purple-800 transition">Learn more</a>
          </p>
        </div>
        <div class="w-full sm:w-1/2 mb-8 py-20 px-4">
          <div class="px-5 bg-gray-600 h-full rounded-lg shadow-lg-200px">
            <h3 class="font-black text-2xl mb-3 bg-gray-500 rounded text-center py-2 px-4 ">Mars Temp 🔭</h3>
            <p class="text-white mb-30 bg-gray-500 rounded text-center py-2 px-4 ">
            With Mars Temp you can check in real time the temperature of the red planet.
            The website was developed using the technologies: JavaScript, CSS, HTML and NASA API.
          </div>
          <p>
            <a href="https://github.com/GlimaGit/Mars_Temp"
            class="bg-purple-500 font-black text-center py-1.5 px-4 rounded hover:bg-purple-800 transition">Learn more</a>
          </p>
        </div>
  </section>
@endsection
