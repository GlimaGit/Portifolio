<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gabriel Lima</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
    <!-- https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
      integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


  </head>
  <body class="bg-gray-700 text-white">
      <header class="fixed bg-gray-700 top-0 left-0 right-0 z-50">
        <div class="container mx-auto flex justify-between p-4">
          <h1 class="text-xl font-black color-purple">Glima<span class="text-purple-500 shadow-ls"> Dev.</span></h1>

          <div class="social-media mx-0 d-flex">
                  <ul class="list-social-media text-lg -mx-20">
                      <a class="link-social-media " href="https://github.com/GlimaGit">
                          <li class="item-social-media">
                              <i class="fab fa-github"></i>
                          </li>

                  </ul>
              </div>
                  <div class="social-media d-flex">
                          <ul class="list-social-media text-lg -mx-80 d-flex">
                              <a class="link-social-media " href="https://www.instagram.com/___glima/">
                                  <li class="item-social-media">
                                      <i class="fab fa-instagram mx-10"></i>
                                  </li>

                          </ul>
                      </div>
                      <div class="social-media d-flex">
                              <ul class="list-social-media text-lg -mx-80 d-flex">
                                  <a class="link-social-media " href="https://www.linkedin.com/in/gabriel-lsoares/">
                                      <li class="item-social-media">
                                          <i class="fab fa-linkedin-in -mx-40"></i>
                                      </li>

                              </ul>
                          </div>
          <nav class="-mx-2">
            <a href="{{route('home')}}" class="text-lg mx-2 text-white font-black hover:text-purple-500 transition">Home</a>
            <a href="{{route('about')}}" class="text-lg mx-2 text-white font-black hover:text-purple-500 transition">About me</a>
          </nav>
        </div>
      </header>
      <main>
        @yield('page-content')
      </main>
      <footer>
        <div class="container mx-auto p-4">
          <p>&copy; Gabriel Lima</p>

        </div>
      </footer>
  </body>
</html>

