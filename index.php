<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>KitabWala</title>
  <script>
    popup()
    {
      window.alert("First Search");
    }
  </script>

  <style>
    #searchbox
    {

        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        background: #6c5ce7;
        height: 100px;
        border-radius: 60px;
        margin-top: 5px;
        padding-top: 30px;
        padding-left: 40px;
        width: 400px;
    }
    #services-box
    {
      margin-top: 300px;
    }
    #about
    {
         margin-top: 50px;
    }
  </style>

</head>
<body>
  <!--header -->
  <header class="text-gray-600 body-font" >
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
      <img src="logo.jpg" style="height: 80px; width: 80px;">
      <span class="ml-3 text-xl">KitabWala</span>
    </a>
    <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
      <a class="mr-5 hover:text-gray-900" href="#searchbox">Home</a>
      <a class="mr-5 hover:text-gray-900" href="#services-box">Servies</a>
      <a class="mr-5 hover:text-gray-900" href="#about">About</a>
      
    </nav>
    <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Log Out
      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
        <path d="M5 12h14M12 5l7 7-7 7"></path>
      </svg>
    </button>
  </div>
</header>

   <!--header -->

<!--Search Box -->

<div id="searchbox" style="background-color: #a29bfe;">
  <form action="searchaction.php" method="post">

 <img src="searchlogo.png" style="height:30px;width: 30px;display: inline;">
 <input class="search-box" type="text" placeholder="Which Book...?" name="search" style="border-radius: 4px;">
  <button type="submit" name="search">Search</button>
</div>
</form>

<!--Search Box -->

<!--services -->
<div id="services-box">

  <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col">
      <div class="h-1 bg-gray-200 rounded overflow-hidden">
        <div class="w-24 h-full bg-indigo-500"></div>
      </div>
      <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
        <h1 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">SERVICES</h1>
        <p class="sm:w-3/5 leading-relaxed text-base sm:pl-10 pl-0">,<b>Kar Ke Dekho, Acha Lagta Hai!!</b></p>
      </div>
    </div>
    <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
      <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
        <div class="rounded-lg h-64 overflow-hidden">
          <img alt="content" class="object-cover object-center h-full w-full" src="searchimg.jpg">
        </div>
        <h2 class="text-xl font-medium title-font text-gray-900 mt-5">Search Books</h2>
        <p class="text-base leading-relaxed mt-2">One Click Away</p>
        <a class="text-indigo-500 inline-flex items-center mt-3" href="#searchbox">Search
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
      <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
        <div class="rounded-lg h-64 overflow-hidden">
          <img alt="content" class="object-cover object-center h-full w-full" src="upload.jpg">
        </div>
        <h2 class="text-xl font-medium title-font text-gray-900 mt-5">Upload Books</h2>
        <p class="text-base leading-relaxed mt-2">Help Others...!</p>
        <a class="text-indigo-500 inline-flex items-center mt-3" href="uploadbook.html">Upload
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
      <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
        <div class="rounded-lg h-64 overflow-hidden">
          <img alt="content" class="object-cover object-center h-full w-full" src="download.jpg">
        </div>
        <h2 class="text-xl font-medium title-font text-gray-900 mt-5">Download Books</h2>
        <p class="text-base leading-relaxed mt-2">All of them for free.</p>
        <a class="text-indigo-500 inline-flex items-center mt-3" href=downloadmessg.html>Download
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
    </div>
  </div>
</section>
  
</div>


<!--services -->

<!--About The Developer -->
<div id="about">
  <h1 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">About The Developer</h1>
  <section class="text-gray-600 body-font">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
      <img class="object-cover object-center rounded" alt="hero" src="dev.jpg">
    </div>
    <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Arpit Kumar Yadav
        <br class="hidden lg:inline-block">
      </h1>
      <p class="mb-8 leading-relaxed">Very Good Boy</p>
      <div class="flex justify-center">
        <a href="https://www.linkedin.com/in/im-arpit-yadav-/"><button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg"
         >Connect</a></button>
        
      </div>
    </div>
  </div>
</section>
  
</div>

<!--About The Developer -->

<!--Footer -->
<div class="footer">
  <footer class="text-gray-600 body-font">
  <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
    <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
      
        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
      </svg>
      <span class="ml-3 text-xl">KitabWala</span>
    </a>
    <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© Arpit Kumar yadav
      <a href="https://twitter.com/knyttneve" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank"></a>
    </p>
    
      </a>
    </span>
  </div>
</footer>
  
</div>

<!--Footer -->







</body>
</html>