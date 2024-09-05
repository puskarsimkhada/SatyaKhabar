<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    @vite('resources/css/Navbar.css')
    @vite('resources/css/Popular.css')
    @vite('resources/js/app.js')
    {{-- @vite('resources/js/slide.js') --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
@vite('resources/css/Slide.css')

</head>
<body>
  {{-- Beginning of Navbar --}}
    <div class="navbar">

        <div class="mobile">
            <i id="bar" class="fa fa-bars" aria-hidden="true"></i>
        </div>

        <div class="brand">
            <a href="index.html">SatyaKhabar</a>
        </div>   
        <div class="navigation">
            <ul>
                <li><a class="active" href="index.html">Home</a ></li>
                <li><a href="shop.html">Political</a></li>
                <li><a href="service.html">Health</a></li>
                <li><a href="about.html">Economy</a></li>
                <li><a href="contact.html">Sports</a></li>
                <li><a href="contact.html">Entertainment</a></li>
                <a href="#" id="close"><img src="Images/menu_close.svg" alt=""></a>
            </ul>
        </div>
        
        <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
              <span class="sr-only">Open user menu</span>
              <img class="w-8 h-8 rounded-full" src="Images/mypicture.png" alt="user photo">
            </button>
            <!-- Dropdown menu -->
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600 drop" id="user-dropdown">
              <div class="px-4 py-3">
                <span class="block text-sm text-gray-900 dark:text-white">Welcome,</span>
                <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">Puskar Simkhada</span>
              </div>
              <ul class="py-2" aria-labelledby="user-menu-button">
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">My Profile</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">My Pins</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Log out</a>
                </li>
              </ul>
            </div>
           
        </div>
    </div>

     {{-- Ending of Navbar --}}

{{-- Beginning of Search bar and date --}}
    <div class="searchbar">
      <div class="search">
        <img id="searchbtn" src="Images/search.png" alt="Search-Icon">
        <input type="text" id="searchtext" class="search-text" placeholder="search...">
      </div>
      <div class="date">
        <p>Sunday, Sep 5, 2024</p>
      </div>
    </div>
  
{{-- Ending of Search bar and date --}}

 {{-- Beginning of Slider --}}
    {{-- <section>
      <div class="master-slide">
        <img src="Images/Slide.jpg" alt="Slider">
      </div>
    </section> --}}
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="Images/Slide.jpg" alt="First slide">
          <div class="overlay"></div> 
          <div class="carousel-caption d-none d-md-block">
            <h5>Government Remove Five Year</h5>
            <p>Balen Sir Jindabad Balen Sir Jindabad Balen Sir Jindabad</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="Images/sport3.jpg" alt="Second slide">
          <div class="overlay"></div> 
          <div class="carousel-caption d-none d-md-block">
            <h5>Nepal is Beautiful country</h5>
            <p>Full of cultural heritage Full of cultural heritage</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="Images/political4.jpg" alt="Third slide">
          <div class="overlay"></div> 
          <div class="carousel-caption d-none d-md-block">
            <h5>Best news sharing website</h5>
            <p>You only find Trusted news here You only find Trusted news here</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

 {{-- Ending of Slider --}}


 {{-- Beginnig of Popular News --}}
    <section>
      <div class="master-popular">
        <div class="popular-title">
          <a href="#">Popular News</a>
          <a href="#"><img src="Images/greater.png" alt=""></a>
        </div>
        <div class="popular-box">
          <div class="pop-box">
            <a href="#"><img src="Images/economy1.jpg" alt=""></a>
              <a href="#">Myopic vision led to instability in Nepal's constitution</a>
            <div class="timer">
              <img src="Images/clock.svg" alt="Timer">
              <p>1 day ago</p>
            </div>
          </div>

          <div class="pop-box">
            <a href="#"><img src="Images/economy1.jpg" alt=""></a>
              <a href="#">Myopic vision led to instability in Nepal's constitution</a>
            <div class="timer">
              <img src="Images/clock.svg" alt="Timer">
              <p>1 day ago</p>
            </div>
          </div>
          <div class="pop-box">
            <a href="#"><img src="Images/economy1.jpg" alt=""></a>
              <a href="#">Myopic vision led to instability in Nepal's constitution</a>
            <div class="timer">
              <img src="Images/clock.svg" alt="Timer">
              <p>1 day ago</p>
            </div>
          </div>
          <div class="pop-box">
            <a href="#"><img src="Images/economy1.jpg" alt=""></a>
              <a href="#">Myopic vision led to instability in Nepal's constitution</a>
            <div class="timer">
              <img src="Images/clock.svg" alt="Timer">
              <p>1 day ago</p>
            </div>
          </div>



        </div>
      </div>
    </section>
 {{-- Ending of Popular News --}}

</body>
</html>