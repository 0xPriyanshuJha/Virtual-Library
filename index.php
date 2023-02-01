<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="images/logo.ico">
  <title>Virtual Library</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

</head>

<body>

<div class="isolate bg-white">
  <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]">
    <svg class="relative left-[calc(50%-11rem)] -z-10 h-[21.1875rem] max-w-none -translate-x-1/2 rotate-[30deg] sm:left-[calc(50%-30rem)] sm:h-[42.375rem]" viewBox="0 0 1155 678" xmlns="http://www.w3.org/2000/svg">
      <path fill="url(#45de2b6b-92d5-4d68-a6a0-9b9b2abad533)" fill-opacity=".3" d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z" />
      <defs>
        <linearGradient id="45de2b6b-92d5-4d68-a6a0-9b9b2abad533" x1="1155.49" x2="-78.208" y1=".177" y2="474.645" gradientUnits="userSpaceOnUse">
          <stop stop-color="#9089FC"></stop>
          <stop offset="1" stop-color="#FF80B5"></stop>
        </linearGradient>
      </defs>
    </svg>
  </div>

  <header class="text-gray-600 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
      <span class="ml-3 text-xl">Hello!</span>
    </a>
    <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
      <a class="mr-5 hover:text-gray-900" href="#">Home</a>
      <a class="mr-5 hover:text-gray-900"href="logout.php">Register</a>
    </nav>
   <a href="logout.php"><button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Log Out
    </button></a>
  </div>
</header>
    <!-- Mobile menu, show/hide based on menu open state. -->
  <main>
    <div class="relative px-6 lg:px-8">
      <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
        <div class="hidden sm:mb-8 sm:flex sm:justify-center">
          
        </div>
        <div class="text-center">
         
          <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">"Turn the page to a new adventure every <span class="type"></span></h1>
        
          
        </div>
      </div>
      <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]">
        <svg class="relative left-[calc(50%+3rem)] h-[21.1875rem] max-w-none -translate-x-1/2 sm:left-[calc(50%+36rem)] sm:h-[42.375rem]" viewBox="0 0 1155 678" xmlns="http://www.w3.org/2000/svg">
          <path fill="url(#ecb5b0c9-546c-4772-8c71-4d3f06d544bc)" fill-opacity=".3" d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z" />
          <defs>
            <linearGradient id="ecb5b0c9-546c-4772-8c71-4d3f06d544bc" x1="1155.49" x2="-78.208" y1=".177" y2="474.645" gradientUnits="userSpaceOnUse">
              <stop stop-color="#9089FC"></stop>
              <stop offset="1" stop-color="#FF80B5"></stop>
            </linearGradient>
          </defs>
        </svg>
      </div>
    </div>
  </main>
</div>



  <!-- Topic Cards -->
  <div id="cards_landscape_wrap-2">
    <div class="container">
      <div class="row">
        <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
          <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Colleen Hoover
          </h1>
          <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Colleen Hoover is an American author who primarily writes novels in the romance and young adult fiction genres. She is best known for her 2016 romance novel It Ends with Us. Many of her works were self-published before being picked up by a publishing house.</p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
          <a onclick="location.href='assets/colleen_hoover/confess.pdf';">
            <div class="card-flyer">
              <div class="text-box">
                <div class="image-box">
                  <img src="confess.jpg" alt="" />
                </div>
                <div class="text-container">
                  <h6>CONFESS</h6>
                  <p>It is the story of Auburn Reed and Owen Gentry. It reveals how their lives intersect and the upheavals they experience in their first interaction.</p>
                </div>

              </div>
            </div>
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
          <a onclick="location.href='iswu.pdf';">
            <div class="card-flyer">
              <div class="text-box">
                <div class="image-box">
                  <img src="book1.jpg" alt="" />
                </div>
                <div class="text-container">
                  <h6>IT STARTS WITH US</h6>
                  <p>Before It Ends with Us, it started with Atlas. Colleen Hoover tells fan favourite Atlas' side of the story and shares what comes next in this novel.</p>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
          <a onclick="location.href='november_9.pdf';">
            <div class="card-flyer">
              <div class="text-box">
                <div class="image-box">
                  <img src="nov.jpg" alt="" />
                </div>

                <div class="text-container">
                  <h6>NOVEMBER 9</h6>
                  <p>Crave presents the ultimate book November 9, the unforgettable love story between a writer and his unexpected muse.</p>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
          <a onclick="location.href='slammed.pdf';">
            <div class="card-flyer">
              <div class="text-box">
                <div class="image-box">
                  <img src="slammed.jpg" alt="" />
                </div>
                <div class="text-container">
                  <h6>SLAMMED</h6>
                  <p>Colleen Hoover's romantic, emotion-packed debut novel unforgettably captures all the magic and confusion of first love.</p>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
          <a onclick="location.href='ugly_love.pdf';">
            <div class="card-flyer">
              <div class="text-box">
                <div class="image-box">
                  <img src="ugly.jpg" alt="" />
                </div>
                <div class="text-container">
                  <h6>UGLY LOVE</h6>
                  <p>Ugly Love is one of Colleen Hoover's most noteworthy releases. This story follows Tate, a woman who falls for a distraught and reticent man.</p>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
          <a onclick="location.href='verity.pdf';">
            <div class="card-flyer">
              <div class="text-box">
                <div class="image-box">
                  <img src="verity.jpg" alt="" />
                </div>
                <div class="text-container">
                  <h6>VERITY</h6>
                  <p>Are you ready to stay up all night? Rebecca meets Gone Girl in this shocking, unpredictable thriller with a twist that will leave you reeling.</p>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>

      <div id="cards_landscape_wrap-2">
        <div class="container">
          <div class="row">
            <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
              <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">John Green
              </h1>
              <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">John Michael Green is an American author, YouTube content creator, podcaster, and philanthropist. His books have more than 50 million copies in print worldwide, including The Fault in Our Stars, which is one of the best-selling books of all time.</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
              <a onclick="location.href='fault_star.pdf';">
                <div class="card-flyer">
                  <div class="text-box">
                    <div class="image-box">
                      <img src="star.jpg" alt="" />
                    </div>
                    <div class="text-container">
                      <h6>The fault in our stars</h6>
                      <p>According to author John Green, The Fault In Our Stars was inspired by his friendship with Esther Earl, who "redefined the process of dying young for me."</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
              <a onclick="location.href='turtle.pdf';">
                <div class="card-flyer">
                  <div class="text-box">
                    <div class="image-box">
                      <img src="turtle.jpg" alt="" />
                    </div>
                    <div class="text-container">
                      <h6>Turtles all the way down</h6>
                      <p>It is a young adult novel written by American author John Green. The novel was published on October 10, 2017 by Dutton Books.</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
              <a onclick="location.href='paper_town.pdf';">
                <div class="card-flyer">
                  <div class="text-box">
                    <div class="image-box">
                      <img src="paper.jpg" alt="" />
                    </div>

                    <div class="text-container">
                      <h6>Paper Towns</h6>
                      <p> The novel is about the coming-of-age of the protagonist, Quentin "Q" Jacobsen and his search for Margo Roth Spiegelman, his neighbor and childhood sweetheart.</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
              <a onclick="location.href='looking_alaska.pdf';">
                <div class="card-flyer">
                  <div class="text-box">
                    <div class="image-box">
                      <img src="alaska.jpg" alt="" />
                    </div>
                    <div class="text-container">
                      <h6>Looking for Alaska</h6>
                      <p>Looking for Alaska is American author John Green's debut novel, published in March 2005 by Dutton Juvenile. Based on his time at Indian Springs School.</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <hr>
          <div id="cards_landscape_wrap-2">
            <div class="container">
              <div class="row">
                <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
                  <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Nicholas Sparks</h1>
                  <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Nicholas Charles Sparks is an American novelist, screenwriter, and film producer. He has published twenty-three novels, all New York Times bestsellers, and two works of non-fiction, with over 115 million copies sold worldwide in more than 50 languages.</p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <a onclick="location.href='ride.pdf';">
                    <div class="card-flyer">
                      <div class="text-box">
                        <div class="image-box">
                          <img src="ride.jpg" alt="" />
                        </div>
                        <div class="text-container">
                          <h6>The Longest Ride</h6>
                          <p>It is compelling real-life story of Herb and Dorothy Vogel. The New York couple used Herb's modest worker salary to amass a modern art collection of incredible value.</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <a onclick="location.href='twobytwo.pdf';">
                    <div class="card-flyer">
                      <div class="text-box">
                        <div class="image-box">
                          <img src="two.jpg" alt="" />
                        </div>
                        <div class="text-container">
                          <h6>Two by Two</h6>
                          <p>In this New York Times bestseller, a single father discovers the true nature of unconditional love when a new chance at happiness turns his world upside down.</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <a onclick="location.href='walk.pdf';">
                    <div class="card-flyer">
                      <div class="text-box">
                        <div class="image-box">
                          <img src="walk.jpg" alt="" />
                        </div>
                        <div class="text-container">
                          <h6>A walk to remember</h6>
                          <p>is a story of two teenagers who fall in love with each other despite the disparity of their personalities. A Walk to Remember is adapted in the film of the same name..</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
               
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <a onclick="location.href='msg_bottle.pdf';">
                    <div class="card-flyer">
                      <div class="text-box">
                        <div class="image-box">
                          <img src="bottle.jpg" alt="" />
                        </div>
                        <div class="text-container">
                          <h6>Message in a bottle</h6>
                          <p>Message in a Bottle is the second romance novel written by American author Nicholas Sparks. The story, which explores the romance theme of love after grief.</p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
</div>
</div>
<footer class="text-gray-600 body-font">
  <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
    <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
    
      <span class="ml-3 text-xl">Book reader</span>
    </a>
    <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2023 All right reserved —
      <a href="https://twitter.com/knyttneve" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank"></a>
    </p>
    <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
      <a class="text-gray-500">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-500">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-500">
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
          <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-500">
        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
          <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
          <circle cx="4" cy="4" r="2" stroke="none"></circle>
        </svg>
      </a>
    </span>
  </div>
</footer>

              <script>document.addEventListener('DOMContentLoaded', () => {

                  // Get all "navbar-burger" elements
                  const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

                  // Add a click event on each of them
                  $navbarBurgers.forEach(el => {
                    el.addEventListener('click', () => {

                      // Get the target from the "data-target" attribute
                      const target = el.dataset.target;
                      const $target = document.getElementById(target);

                      // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                      el.classList.toggle('is-active');
                      $target.classList.toggle('is-active');

                    });
                  });

                });
              </script>
        <script src="typed.min.js"></script>
        <script>
          var typed = new Typed('.type', {
            strings: ['day."', 'Week."', 'Moment."'],
            typeSpeed: 90,
            BackSpeed: 10,
            loop: true,
          });
    
        </script>

        <script>//Get the button
          let mybutton = document.getElementById("btn-back-to-top");
          
          // When the user scrolls down 20px from the top of the document, show the button
          window.onscroll = function () {
            scrollFunction();
          };
          
          function scrollFunction() {
            if (
              document.body.scrollTop > 20 ||
              document.documentElement.scrollTop > 20
            ) {
              mybutton.style.display = "block";
            } else {
              mybutton.style.display = "none";
            }
          }
          // When the user clicks on the button, scroll to the top of the document
          mybutton.addEventListener("click", backToTop);
          
          function backToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
          }</script>
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
                crossorigin="anonymous"></script>
</body>

</html>