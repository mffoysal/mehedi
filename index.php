<?php
    include(db/database/data.php);
    include(db/db.php);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creative Mehedi Art By <?php echo "Raisa"?></title>
     <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.css"  rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <link rel="stylesheet" href="page.css">
    <script src="script.js" defer></script>


</head>
<body>

    <?php
    

    ?>

<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
        <a style="font-size: 20px; font-weight: 600;" href="#" class="md:hidden logo">CMAByRaisa</a>
        <a style="font-size: 20px; font-weight: 600;" href="#" class="hidden md:block logo">Creative Mehedi Art By Raisa</a>

    </a>
    <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">

        <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search" aria-expanded="false" class="md:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 me-1">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
            <span class="sr-only">Search</span>
        </button>

        <div style="margin-right: 10px;" class="relative hidden md:block">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
              <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
              </svg>
              <span class="sr-only">Search icon</span>
            </div>
            <input type="text" id="search-navbar" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
          </div>

        <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
          <span class="sr-only">Open user menu</span>
          <img class="w-8 h-8 rounded-full" src="https://images.unsplash.com/profile-1695058559381-08958c381f32image?dpr=2&auto=format&fit=crop&w=150&h=150&q=60&crop=faces&bg=fff" alt="user photo">
        </button>

        <div class="items-center justify-between z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
          
            <div class="profile">
                <img src="https://images.unsplash.com/profile-1695058559381-08958c381f32image?dpr=2&auto=format&fit=crop&w=150&h=150&q=60&crop=faces&bg=fff" alt="">
                <span>@Tasnim Islam Raisa</span>
                <i class='bx bx-caret-down'></i>
            </div>
          
            <div class="px-4 py-3">
            <span class="block text-sm text-gray-900 dark:text-white">Bonnie Green</span>
            <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">name@flowbite.com</span>
          </div>


          <ul class="py-2" aria-labelledby="user-menu-button">

            <li>
              <a href="#home" class="home-active block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Home</a>
            </li>
            <li>
              <a href="#about" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">About</a>
            </li>
            <li>
              <a href="#packages" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Packages</a>
            </li>
            <li>
              <a href="#details" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Details</a>
            </li>
            <li>
                <a href="#review" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Review</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign In</a>
              </li>
          </ul>
        </div>
        <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
    </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
        <div class="relative mt-3 md:hidden">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
              <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
              </svg>
            </div>
            <input type="text" id="search-navbar" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
          </div>

      <ul class=" flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
       

        <li>
          <a href="#home" class="home-active block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Home</a>
        </li>
        <li>
          <a href="#about" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
        </li>
        <li>
            <a href="#packages" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
            


            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Packages<svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg></button>
                            <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                </li>
                                <li aria-labelledby="dropdownNavbarLink">
                                    <button id="doubleDropdownButton" data-dropdown-toggle="doubleDropdown" data-dropdown-placement="right-start" type="button" class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dropdown<svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
            </button>
                    <div id="doubleDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="doubleDropdownButton">
                          <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Overview</a>
                          </li>
                          <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">My downloads</a>
                          </li>
                          <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Billing</a>
                          </li>
                          <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Rewards</a>
                          </li>
                        </ul>
                    </div>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                  </li>
                </ul>
                <div class="py-1">
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Sign out</a>
                </div>
            </div>



            </a>
        </li>
        <li>
          <a href="#details" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Details</a>
        </li>
        <li>
          <a href="#review" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Review</a>
        </li>
      </ul>
    </div>
    </div>
</nav>
  

    <!-- <header>
        <a href="#" class="logo">Creative Mehedi Art By Raisa</a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="navbar navbar-nav ms-auto">
            <li class="nav-item"><a href="#home" class="home-active">Home</a></li>
            <li class="nav-item"><a href="#about">About</a></li>
            <li class="nav-item"><a href="#packages">Packages</a></li>
            <li class="nav-item"><a href="#details">Details</a></li>
            <li class="nav-item"><a href="#review">Review</a></li>


        </ul>
        <div class="profile">
            <img src="https://images.unsplash.com/profile-1695058559381-08958c381f32image?dpr=2&auto=format&fit=crop&w=150&h=150&q=60&crop=faces&bg=fff" alt="">
            <span>@Tasnim Islam Raisa</span>
            <i class='bx bx-caret-down'></i>
        </div>

    </header> -->



 <!-- home -->
    <section class="home" id="home" >
        <div class="swiper-wrapper">
             <!-- slide 1 -->
            <div class="swiper-slide container">
                <div class="home-text">
                    <span>Spread Happiness</span>
                    <h1>Choose The Best<br>Henna Design<br>For You</h1>
                    <a href="#" class="btn">Book Now<i class='bx bx-right-arrow-alt'></i></a>
                </div>
                <img src="https://scontent.fcgp7-1.fna.fbcdn.net/v/t39.30808-6/345326292_159918743710634_713008634911527586_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGd7nA9QmNP-9HRoJqb41esZrXnz26sXgVmtefPbqxeBQwTVLH5BP53Tn6mxx3mPSFURO3qU4dgnrXqVOAVQXt5&_nc_ohc=BFUJPn0DohoAX_psHdV&_nc_ht=scontent.fcgp7-1.fna&oh=00_AfBvk8rxxONk_DOG_jyHKD16-RIsU_oE8RJPcZeCunlsew&oe=6545FB81" alt="">

            </div>
            <!-- slide 2 -->
            <div class="swiper-slide container">
                <div class="home-text">
                    <span>Spread Happiness</span>
                    <h1>Choose The Best<br>Henna Design<br>For You</h1>
                    <a href="#" class="btn">Book Now<i class='bx bx-right-arrow-alt'></i></a>
                </div>
                <img src="https://scontent.fcgp7-1.fna.fbcdn.net/v/t39.30808-6/262116739_101779572363208_803259062128933498_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFgaWzHoZrMGKW52Wd-yqtfowvgv_EGtPWjC-C_8Qa09Vjb7a0H8sjIfZwAQwGhqOLRHmoVLpJMNdiYB-m0rEVK&_nc_ohc=rVXkny54WF0AX8Is6Jo&_nc_ht=scontent.fcgp7-1.fna&oh=00_AfAi6QVKrEATZIie0E_zeA74o--lWf4uwsbtxYWYJ3OBCg&oe=65459EFE" alt="">

            </div>
            <!-- slide 3 -->
            <div class="swiper-slide container">
                <div class="home-text">
                    <span>Spread Happiness</span>
                    <h1>Choose The Best<br>Henna Design<br>For You</h1>
                    <a href="#" class="btn">Book Now<i class='bx bx-right-arrow-alt'></i></a>
                </div>
                <img src="https://scontent.fcgp7-1.fna.fbcdn.net/v/t39.30808-6/272046111_121356507072181_7365458321280483888_n.jpg?stp=c0.168.1538.1538a_dst-jpg_s851x315&_nc_cat=108&ccb=1-7&_nc_sid=5f2048&_nc_ohc=9y0wPt812nwAX97Q3wc&_nc_ht=scontent.fcgp7-1.fna&oh=00_AfDJ6A4HBG7PDkC99TwybWU9fqS2F8pzcKA6jbktVj2bcg&oe=654585A9" alt="">

            </div>     

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>     
         
    </section>
    <!-- packages -->
    <section class="packages" id="packages">
        <div class="heading">
            <h1>Browse Our Hottest <br><span>Packages</span></h1>
            <a href="#" class="btn">See All<i class='bx bx-right-arrow-alt'></i></a>
            
        </div>
        <!-- container -->
        <div class="packages-container">
            <!-- box 1 -->
            <div class="box box1">
                <img src="https://scontent.fcgp7-1.fna.fbcdn.net/v/t39.30808-6/387157835_336316975579631_2239034539631206761_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=5f2048&_nc_ohc=FfYOnBAj2LcAX-M6ezE&_nc_ht=scontent.fcgp7-1.fna&oh=00_AfCP-J9t8-LCcX4Lv69dj7zoUv-PIiq_VWlaB69VWfWhHw&oe=6546C017" alt="">
                <h2>Non Bridal Henna Design</h2>
                <span>Multiple types</span>
                <i class='bx bx-right-arrow-alt'></i>

            </div>
            <!-- box 2 -->
            <div class="box box2">
                <img src="https://scontent.fcgp7-1.fna.fbcdn.net/v/t39.30808-6/322723982_670009237950697_2905543374317797598_n.jpg?stp=c0.105.641.641a_dst-jpg_s851x315&_nc_cat=109&ccb=1-7&_nc_sid=5f2048&_nc_ohc=A3nUjLlgmMkAX9NFAqS&_nc_ht=scontent.fcgp7-1.fna&oh=00_AfBk3gFDmdPU1RKwuJskqfAHpvjNnUcWQxNX8MQ0R4Xqlg&oe=65450F7E" alt="">
                <h2>Semi Bridal Henna Design</h2>
                <span>2 types</span>
                <i class='bx bx-right-arrow-alt'></i>

            </div>
            <!-- box 3 -->
            <div class="box box3">
                <img src="https://scontent.fcgp7-1.fna.fbcdn.net/v/t39.30808-6/265655639_102284962312669_608108835019162989_n.jpg?stp=c0.157.1573.1573a_dst-jpg_s851x315&_nc_cat=103&ccb=1-7&_nc_sid=5f2048&_nc_ohc=CsQo1TS3F9YAX_wse7j&_nc_ht=scontent.fcgp7-1.fna&oh=00_AfAb2Eb_yOPt33AMHv3239Mnn4CCoUjjH2vbFUzTvDO9OQ&oe=6546D993" alt="">
                <h2>Bridal Henna Design</h2>
                <span>4 types</span>
                <i class='bx bx-right-arrow-alt'></i>
            </div>
        </div>
    </section>
    <!-- Details -->
    <section class="details" id="details">
        <div class="heading">
            <h1>Our Packages Details </h1>
            <a href="#" class="btn">Book Now<i class='bx bx-right-arrow-alt'></i></a>
        </div> 
        <!-- price -->
        <div class="details-container">
            <!-- box1 -->
            <div class="box">
                <img src="https://scontent.fcgp7-1.fna.fbcdn.net/v/t39.30808-6/387176596_336316922246303_7785728387409454287_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeEpsZ4T-fz_5fSpcf0stsK-OqkHrNpkKGs6qQes2mQoa96QfK5NOPcCPCbu2NdpnTPvNNEU2oJh-iG-5pZV7fHI&_nc_ohc=yBC20U5PpFkAX8K_U4p&_nc_ht=scontent.fcgp7-1.fna&oh=00_AfCVWsOHn1CqZEZltc-F6GWGWPGyQwYKq_o1YxgJ0tZgpQ&oe=65472594" alt="">
                <h2>Non-Bridal Henna Design</h2>
                <span>Per Side</span>
                <h3 class="price">150TK</h3>
                <i class='bx bxs-message-square-check'></i>
                <i class='bx bx-heart'></i>
            </div>

            <!-- box2 -->
            <div class="box">
                <img src="https://scontent.fcgp7-1.fna.fbcdn.net/v/t39.30808-6/305975223_175236538354343_7755819856223607081_n.jpg?stp=c0.67.960.960a_dst-jpg_s851x315&_nc_cat=106&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHJPix2bnSk5UMoqEmt5qyYCXVIhgnsl_AJdUiGCeyX8BTww7gk2oJpnGHbkdVDT0_rL5EtjC55uNKNAIgMIUoe&_nc_ohc=m7Gfv8D_czQAX-QwPqo&_nc_ht=scontent.fcgp7-1.fna&oh=00_AfCJO5-VQJG8FAgD16JtXg92sKf8Ym8tfRcA--IJv1o-Aw&oe=65464F0A" alt="">
                <h2>Non-Bridal Henna Design</h2>
                <span>Per Side</span>
                <h3 class="price">200TK</h3>
                <i class='bx bxs-message-square-check'></i>
                <i class='bx bx-heart'></i>
            </div>

            <!-- box3 -->
            <div class="box">
                <img src="https://scontent.fcgp7-1.fna.fbcdn.net/v/t39.30808-6/268345688_110911681449997_1989552157626476601_n.jpg?stp=c0.168.1538.1538a_dst-jpg_s851x315&_nc_cat=111&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGEUVtgMWkMBwkckipst-yunKJFykUlejOcokXKRSV6M32-fQIWRjVq4YQE4tKkYoQCv5So1-mhA3KVsX9Yx9Hb&_nc_ohc=Zvd_Gf-jHH0AX9Cx2NM&_nc_ht=scontent.fcgp7-1.fna&oh=00_AfANZVJth7yTAsNPreCsq8CH-mn-2xvZrsbgHTfv1yG82Q&oe=65454705" alt="">
                <h2>Non-Bridal Henna Design</h2>
                <span>Per Side</span>
                <h3 class="price">250TK</h3>
                <i class='bx bxs-message-square-check'></i>
                <i class='bx bx-heart'></i>
            </div>

            <!-- box4 -->
            <div class="box">
                <img src="https://scontent.fcgp7-1.fna.fbcdn.net/v/t39.30808-6/345182806_765398791853760_8933830384336602884_n.jpg?stp=c0.174.1520.1520a_dst-jpg_s851x315&_nc_cat=103&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGdNSjVWPavxvVe0QHE3C8FF5_fAeDW9pAXn98B4Nb2kCT55nOT4dY_nOj1Ufnn0UmQb0yably_jOFeBTUVHKuK&_nc_ohc=qO8blEq66UUAX_hwIy9&_nc_ht=scontent.fcgp7-1.fna&oh=00_AfAGB-cmom0LLvcKmJ0KeGCyQhKsXNj42VqKfev6hdvmMg&oe=65458477" alt="">
                
                <h2>Semi-Bridal Henna Design</h2>
                <span>Per Side</span>
                <h3 class="price">450TK</h3>
                <i class='bx bxs-message-square-check'></i>
                <i class='bx bx-heart'></i>
            </div>

            <!-- box5 -->
            <div class="box">
                <img src="https://scontent.fcgp7-1.fna.fbcdn.net/v/t39.30808-6/278387149_144815434726288_6195508071813877757_n.jpg?stp=c144.0.1760.1760a_dst-jpg_s851x315&_nc_cat=103&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeFoTgVrYdYgpjo-87XC6IjSqE4AMcKw6xOoTgAxwrDrE8AswDfmvfZhyrVLmtjebJi7a5PnzfcWeVt60rwcarJX&_nc_ohc=z44wg9ChbW8AX_PMY0o&_nc_ht=scontent.fcgp7-1.fna&oh=00_AfDUuH4RXN5AAE9jxBWIR_kPGdfFvwBpi7m6Vo-DmyVldg&oe=6545696F" alt="">
                <h2>Semi-Bridal Henna Design</h2>
                <span>Both-Hand Both-Side</span>
                <h3 class="price">Simple Design <br>1600TK</h3>
                <i class='bx bxs-message-square-check'></i>
                <i class='bx bx-heart'></i>
            </div>

            <!-- box6 -->
            <div class="box">
                <img src="https://scontent.fcgp7-1.fna.fbcdn.net/v/t39.30808-6/342562647_641247864496619_7856330520666561455_n.jpg?stp=c0.173.1525.1525a_dst-jpg_s851x315&_nc_cat=104&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeED0KXtc9QSHyM1smpFds0ryVXky6qblfjJVeTLqpuV-EKnRNhXoxCeDhKb2cb7es8n_-RFySO3Oxlxcr-k55FH&_nc_ohc=f-rUbU8ODQ4AX_qweS6&_nc_ht=scontent.fcgp7-1.fna&oh=00_AfD8gmRkSWEBQcIFr5MT9L1014U8LH5mSJ5a20vldeeK0w&oe=6546D13A" alt="">
                <h2>Semi-Bridal Henna Design</h2>
                <span>Both-Hand Both-Side</span>
                <h3 class="price">Gorgeous Design <br>2000TK</h3>
                <i class='bx bxs-message-square-check'></i>
                <i class='bx bx-heart'></i>
            </div>

            <!-- box7 -->
            <div class="box">
                <img src="https://scontent.fcgp7-1.fna.fbcdn.net/v/t39.30808-6/272856286_123757886832043_2236630308028798467_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeEpmO_g4AC8RJPcrH3S25PYLkFrbdavnRIuQWtt1q-dEk94lUs4ca_QLIGJXctLmkvJVeubyuVn5Tazmg3EQNyo&_nc_ohc=KX1QfUcgkJoAX9VI_Zx&_nc_ht=scontent.fcgp7-1.fna&oh=00_AfCYLdOM5RrRx6grnGo7ff46Jm0VpWapc6SWH_sECT_sXA&oe=6546D630" alt="">
                <h2>Bridal Henna Design</h2>
                <span>Both-Hand Both-Side</span>
                <h3 class="price">Till elbow with-gap<br>2500TK</h3>
                <i class='bx bxs-message-square-check'></i>
                <i class='bx bx-heart'></i>
            </div>

            <!-- box8 -->
            <div class="box">
                <img src="https://scontent.fcgp7-1.fna.fbcdn.net/v/t39.30808-6/346649205_206099511741590_5012580755534572707_n.jpg?stp=c0.79.720.720a_dst-jpg_s851x315&_nc_cat=110&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeG4s0ijT4aJ2TdL7ui8moaw0Tkmnv4PVIvROSae_g9UiwecMAs2gWjYPeiS98Y87UPxNDYSZTBpwWMsF-Y1d4o1&_nc_ohc=tTY6W2n-1xsAX9SbZoR&_nc_ht=scontent.fcgp7-1.fna&oh=00_AfATAaks4DoMSztS-L_GrCf5NuMgCkKBG3ecParR7ORMnw&oe=65469A38" alt="">
                <h2>Bridal Henna Design</h2>
                <span>Both-Hand Both-Side</span>
                <h3 class="price">Till elbow without-gap<br>3500TK</h3>
                <i class='bx bxs-message-square-check'></i>
                <i class='bx bx-heart'></i>
            </div>

            <!-- box9 -->
            <div class="box">
                <img src="https://scontent.fcgp7-1.fna.fbcdn.net/v/t39.30808-6/264426883_102284992312666_8068556412498976810_n.jpg?stp=c0.111.1712.1712a_dst-jpg_s851x315&_nc_cat=100&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGsl1M1RG3aVRT6jMjnCHfNALl2FgqhwfkAuXYWCqHB-SxkhMssGNnisrvqBBdGVU2YEke32WG6hwAifdYGYtEe&_nc_ohc=EFqkbANTHTsAX98Nr7G&_nc_oc=AQnO1AuCzDKZGxeXZd42jtLjJscomP6DzJPpt5XUAxRyGXkeakBOO0Uu_pNrircBZ1E&_nc_ht=scontent.fcgp7-1.fna&oh=00_AfAUWOTo_rEE35ubvuUtuaTnIVV58ga2WfOod5r01wm_pQ&oe=6546532D" alt="">
                <h2>Bridal Henna Design</h2>
                <span>Both-Hand Both-Side</span>
                <h3 class="price">Upto elbow Gorgeous<br>5000TK</h3>
                <i class='bx bxs-message-square-check'></i>
                <i class='bx bx-heart'></i>
            </div>           

        </div>
    </section>

    <!-- About -->
    <section class="about" id="about">
        <img src="https://scontent.fcgp7-1.fna.fbcdn.net/v/t39.30808-6/265267077_101779855696513_1761739230786580597_n.jpg?stp=c438.0.1173.1173a_dst-jpg_s851x315&_nc_cat=103&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGDUshTWcFCNfkJlWcQN10DjckzmklLdQ2NyTOaSUt1Dd_meBzEAw3TWHNMOqJTFd6j1xbK7-OcQzIqvzOymNOi&_nc_ohc=uCm5MuXXf3EAX-v2zkM&_nc_ht=scontent.fcgp7-1.fna&oh=00_AfDsew3iGL3TWy3KCgH9UJvdVLNuOhm5m0t9V7mUo32Viw&oe=6545752B" alt="">
        <div class="about-text">
            <span>About Us</span>
            <p>Assalamualaikum Everyone.I'm Tasnim Islam Raisa. I'm a henna artist.<br>We all love henna. I will be really happy if I can make you happy with my henna works. To beautify your hands with the color of henna for your special moments you are requested to check my designs and to contact me at my website.<br>I am not giving any home service. You have to come to my house for applying henna (Chittagong) . I hope you guys will love my work. THANK YOU. For any kind of information you can mail me.</p>
            <a href="#" class="btn">Learn More<i class='bx bx-right-arrow-alt'></i></a>
        </div>
    </section>
    <!-- Reviwes -->
    <section class="review" id="review">
        <h2>Why Customer's Love Us?</h2>
        <div class="review-container">
            <!-- Reviwes  1-->
            <div class="box">
                <i class="bx bxs-quote-alt-left"></i>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>The one & only preferable henna artist. </p>
                <div class="review-profile">
                    <img src="https://scontent.fcgp7-1.fna.fbcdn.net/v/t39.30808-6/302484332_172280538649943_8850847120387297848_n.jpg?stp=dst-jpg_s851x315&_nc_cat=106&ccb=1-7&_nc_sid=5f2048&_nc_ohc=mptsMg3Qi3YAX-wggRg&_nc_ht=scontent.fcgp7-1.fna&oh=00_AfANEmP-GvRAVJ4ziznRwE-M4e7_SpmwfHTc-T6VnXwa0g&oe=654608C2" alt="">
                    <h3>Fatema Bristy</h3>
                </div>
            </div>

             <!-- Reviwes  2-->
             <div class="box">
                <i class="bx bxs-quote-alt-left"></i>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>The one & only preferable henna artist. </p>
                <div class="review-profile">
                    <img src="https://scontent.fcgp7-1.fna.fbcdn.net/v/t39.30808-6/268654528_108394741701691_7456874045540881616_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=5f2048&_nc_ohc=FaBpq_58pTYAX8DLn2b&_nc_ht=scontent.fcgp7-1.fna&oh=00_AfDxMlWIgbeHwPq8YPOL3RMxWnaIF560j1_jupqK-6xegg&oe=6546364F" alt="">
                    <h3>Umme Salma</h3>
                </div>
            </div>

             <!-- Reviwes  3-->
             <div class="box">
                <i class="bx bxs-quote-alt-left"></i>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>The one & only preferable henna artist. </p>
                <div class="review-profile">
                    <img src="https://scontent.fcgp7-1.fna.fbcdn.net/v/t39.30808-6/271026258_119025000638665_7378988048525943007_n.jpg?stp=c0.118.1080.1080a_dst-jpg_s851x315&_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_ohc=3VerKQRwd6EAX8QLCH3&_nc_ht=scontent.fcgp7-1.fna&oh=00_AfBhOZ46OXFNJtKwS0x6HhWVuFnA_yGt9O5yxT1prgREbw&oe=6545609E" alt="">
                    <h3>Fabiha Islam</h3>
                </div>
            </div>

             <!-- Reviwes  4-->
             <div class="box">
                <i class="bx bxs-quote-alt-left"></i>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>The one & only preferable henna artist. </p>
                <div class="review-profile">
                    <img src="https://scontent.fcgp7-1.fna.fbcdn.net/v/t39.30808-6/265393594_104197315454767_5730425408365978206_n.jpg?stp=c255.0.1538.1538a_dst-jpg_s851x315&_nc_cat=100&ccb=1-7&_nc_sid=5f2048&_nc_ohc=XrEdqY_uH1cAX9zSCiy&_nc_ht=scontent.fcgp7-1.fna&oh=00_AfBIGw18HpeBpX5rnA3814PbA1-pmQIDHW-j3VyM59x1OQ&oe=6546A142" alt="">
                    <h3>Nisa</h3>
                </div>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <section class="footer" id="footer">
        <div class="footer-box">
            <a href="#" class="logo">Creative Mehedi Art By Raisa</a>
            <p>Chandgaon ,Chittagong</p>
            <div class="social" >
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-instagram'></i></a>
                <a href="#"><i class='bx bxl-youtube'></i></a>

            </div>
        </div> 
        <div class="footer-box">
            <h2>Packages</h2>
            <a href="#">Non-Bridal Design</a>
            <a href="#">Semi-Bridal Design</a>
            <a href="#">Bridal Design</a>
            <a href="#">Arabic Design</a>
        </div> 
        <div class="footer-box">
            <h2>Useful Links</h2>
            <a href="#">Payment & Tax</a>
            <a href="#">Terms Of Use </a>
            <a href="#">My Blog</a>
            <a href="#">Return Policy</a>
        </div>
        <div class="footer-box">
            <h2>Newsletter</h2>
            <p>Get 10% Discount with <br>Email Newsletter</p>
            <form action="" >
            <i class='bx bxs-envelope'></i>
            <input type="email" name="" id="" placeholder="Enter Your Email">
            <i class='bx bx-arrow-back bx-rotate-180'></i>
            </form>
        </div>
    </section >

    <section style="margin: 0 auto" class="text-center">
    
    <div style="margin: 0 auto" class="wrapper">
      <div class="icon"><i id="left" class="fa-solid fa-angle-left"></i></div>
      <ul class="tabs-box">
        <li class="tab">Coding</li>
        <li class="tab active">JavaScript</li>
        <li class="tab">Podcasts</li>
        <li class="tab">Databases</li>
        <li class="tab">Web Development</li>
        <li class="tab">Unboxing</li>
        <li class="tab">History</li>
        <li class="tab">Programming</li>
        <li class="tab">Gadgets</li>
        <li class="tab">Algorithms</li>
        <li class="tab">Comedy</li>
        <li class="tab">Gaming</li>
        <li class="tab">Share Market</li>
        <li class="tab">Smartphones</li>
        <li class="tab">Data Structure</li>
      </ul>
      <div class="icon"><i id="right" class="fa-solid fa-angle-right"></i></div>
    </div>


    <div style="margin: 0 auto" class="wrapperr">
         <nav style="margin 0 auto">
         
                    

         </nav>
      </div>


    </section>

    <!-- copyright --> 
    <section>
        <div class="copyright">
            <p>&#169; <?=date("Y")?> Creative Mehedi Art By Raisa. All Rights Reserved.</p>

        </div>
    </section>

    <!-- Swiper JS -->
    

    <!-- Swiper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  
    <!-- Link to js --> 
    <script src="page.js"></script>
</body>
</html>
