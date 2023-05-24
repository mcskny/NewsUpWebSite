<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src='https://cdn.tailwindcss.com'></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

</head>
<body>
<style>
    
    
    .font-inter {
      font-family: 'Inter', sans-serif;
    }
    </style>
<div id="id1">

<div class='z-10 bg-white fixed drop-shadow-[0_5px_15px_rgba(29,13,202,0.25)] w-full h-16'>
        <div class=" h-[77px] -mt-3 m-auto w-[861px]">
          <div class="font-bold text-[#2B2B2B] p-4 pl-12 pr-12 cursor-pointer hover:bg-opacity-25 hover:bg-slate-400 text-[28px] font-inter mt-[8px] pb-[10px] inline-block"><a href="user-main-page.php">Home</a></div> 
          <div class="font-bold text-[#2B2B2B] p-4 pl-12 pr-12 cursor-pointer hover:bg-opacity-25 hover:bg-slate-400 text-[28px] font-inter mt-[8px] pb-[10px] inline-block"><a href="About.php">About Us</a></div> 
          <div class="font-bold text-[#2B2B2B] p-4 pl-12 pr-12 cursor-pointer hover:bg-opacity-25 hover:bg-slate-400 text-[28px] font-inter mt-[8px] pb-[10px] inline-block"><a href="Contact.php">Contact</a></div> 
          <div class="font-bold text-[#2B2B2B] p-4 pl-12 pr-12 cursor-pointer hover:bg-opacity-25 hover:bg-slate-400 text-[28px] font-inter mt-[8px] pb-[10px] inline-block"><a href="/admin-interface/index.php">Sign Up</a></div> 

          

        </div>



    <div><img href='index.php' class='w-20 -mt-[72px] ml-5 mb-4 fixed' src='/images/HaberUpLogo.png'></div>
        <div class="fixed right-0 top-0">
        <article class=" ml-6 h-16 relative w-72 ">
        <div class="text-2xl top-1/2 translate-x-1/2 -left-[75px] -translate-y-1/2 inline-block absolute font-inter  font-regular" id="city-name"></div>
        <div class=" inline-block top-1/2 -translate-x-1/2 -translate-y-1/2 left-1/2 absolute" id="weather-status"></div>
        <div class="text-2xl top-1/2 -translate-x-1/2 -translate-y-1/2 inline-block absolute right-0 font-inter  font-semibold " id="weatherSt"></div>
        </div>
        </article>
      </div>
   
      </div>








      <div id="id2">
      <div class='z-20 bg-white  justify-between items-center fixed drop-shadow-[0_5px_15px_rgba(29,13,202,0.25)] w-full h-16'>
        <img id="im" href='index.php' class=' w-20 -mt-2 m-auto' src='/images/HaberUpLogo.png'>
        <div class="cursor-pointer fixed right-4 top-[19px]  justify-between w-[35px] h-[20px]" onclick="toggleMenu()">
          <div class="w-full bg-indigo-950 rounded-full h-[5px]"></div>
          <div class="w-full bg-transparent  h-1.5"></div>
          <div class="w-full bg-indigo-950 rounded-full  h-[5px]"></div>
          <div class="w-full bg-transparent  h-1.5"></div>
          <div class="w-full bg-indigo-950 rounded-full h-[5px]"></div>
        </div>
        <div class=" transition-all hidden pt-24  font-inter list-none rounded-r-2xl bg-white m-0" id="menu">
        <img id="im" href='index.php' class=' transition-all w-36 ml-24 top-8 fixed' src='/images/HaberUpLogo.png'>
          <ul>
            <li onclick="MainPage()" class="mt-28 p-[10px] pl-10 pr-40 cursor-pointer transition-all font-semibold hover:font-bold bg-slate-100 w-full">      <a class="text-[#353535] text-3xl cursor-pointer no-underline" href="#">Home</a></li>
            <li onclick="AboutUs()"  class="p-[10px] pl-10 pr-40 cursor-pointer transition-all font-semibold hover:font-bold hover:bg-slate-200 w-full"><a class="text-[#353535] text-3xl cursor-pointer no-underline">About Us</a></li>
            <li onclick="Contact()"  class="p-[10px] pl-10 pr-40 cursor-pointer transition-all font-semibold hover:font-bold hover:bg-slate-200 w-full"><a class="text-[#353535] text-3xl cursor-pointer no-underline">Contact</a></li>
          </ul>
          <div class="h-12"></div>
          
        </div>

    </div>
         

    <div class="h-32 w-12 "></div>
    </div>





    <section class="bg-white ">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-gray-500 sm:text-lg ">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 ">We didn't reinvent the wheel</h2>
                <p class="mb-4">We are strategists, designers and developers. Innovators and problem solvers. Small enough to be simple and quick, but big enough to deliver the scope you want at the pace you need. Small enough to be simple and quick, but big enough to deliver the scope you want at the pace you need.</p>
                <p>We are strategists, designers and developers. Innovators and problem solvers. Small enough to be simple and quick.</p>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-8">
                <img class=" drop-shadow-[0_0px_15px_rgba(29,13,202,0.4)] w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-2.png" alt="office content 1">
                <img class="drop-shadow-[0_0px_15px_rgba(29,13,202,0.4)] mt-4 w-full lg:mt-10 rounded-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-1.png" alt="office content 2">
            </div>
        </div>
    </section>











    <script>
        function toggleMenu() {
          var menu = document.getElementById("menu");
          var im = document.getElementById("im");
          menu.style.display = (menu.style.display === "block") ? "none" : "block";
          im.style.display = (im.style.display === "none") ? "block" : "none";
        }

      function MainPage() {
        var url = "user-main-page.php";
        window.location.href = url;
      }
      function AboutUs() {
        var url = "About.php";
        window.location.href = url;
      }
      function Contact() {
        var url = "Contact.php";
        window.location.href = url;
      }
   window.addEventListener('DOMContentLoaded', function() {
      var mediaQuery = window.matchMedia('(max-width: 700px)');

      function handleMediaQuery(mediaQuery) {
        var div1 = document.getElementById('id1');
        var div2 = document.getElementById('id2');

        if (mediaQuery.matches) {
          div1.style.display = 'none';
          div2.style.display = 'block';
        } else {
          div1.style.display = 'block';
          div2.style.display = 'none';
        }
      }

      handleMediaQuery(mediaQuery);

      mediaQuery.addEventListener('change', handleMediaQuery);
    });
      </script>
</body>
</html>