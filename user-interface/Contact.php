<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src='https://cdn.tailwindcss.com'></script>
    <script src="script.js" ></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

</head>
<script>
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

<body>
    <style>
      .font-inter {
      font-family: 'Inter', sans-serif;
    }
    </style>


<div id="id1">
<div class='bg-white fixed drop-shadow-[0_5px_15px_rgba(29,13,202,0.25)] w-full -mt-24 '>
        <div class=" h-[77px] font-inter -mt-3 m-auto w-[871px]">
          <div class="font-bold text-[#2B2B2B] p-4 pl-12 pr-12 cursor-pointer hover:bg-opacity-25 hover:bg-slate-400 text-[28px] font-inter mt-[8px] pb-[10px] inline-block"><a href="user-main-page.php">Home</a></div> 
          <div class="font-bold text-[#2B2B2B] p-4 pl-12 pr-12 cursor-pointer hover:bg-opacity-25 hover:bg-slate-400 text-[28px] font-inter mt-[8px] pb-[10px] inline-block"><a href="About.php">About Us</a></div> 
          <div class="font-bold text-[#2B2B2B] p-4 pl-12 pr-12 cursor-pointer hover:bg-opacity-25 hover:bg-slate-400 text-[28px] font-inter mt-[8px] pb-[10px] inline-block"><a href="Contact.php">Contact</a></div> 
          <div class="font-bold text-[#2B2B2B] p-4 pl-12 pr-12 cursor-pointer hover:bg-opacity-25 hover:bg-slate-400 text-[28px] font-inter mt-[8px] pb-[10px] inline-block"><a href="/admin-interface/index.php">Sign Up</a></div> 

          

        </div>



    <div><img href='index.php' class='w-20 -mt-[72px] ml-5 mb-4 fixed' src='/images/HaberUpLogo.png'></div>
        
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
            <li onclick="MainPage()" class="mt-28 p-[10px] pl-10 pr-40 cursor-pointer transition-all font-semibold hover:font-bold hover:bg-slate-200 w-full">      <a class="text-[#353535] text-3xl cursor-pointer no-underline" href="#">Home</a></li>
            <li onclick="AboutUs()"  class="p-[10px] pl-10 pr-40 cursor-pointer transition-all font-semibold hover:font-bold hover:bg-slate-200 w-full"><a class="text-[#353535] text-3xl cursor-pointer no-underline">About Us</a></li>
            <li onclick="Contact()"  class="p-[10px] pl-10 pr-40 cursor-pointer transition-all font-semibold hover:font-bold bg-slate-100 w-full"><a class="text-[#353535] text-3xl cursor-pointer no-underline">Contact</a></li>
          </ul>
          <div class="h-12"></div>
          
        </div>

    </div>
          <div class=' p-0  top-28 -z-10 w-full m-auto drop-shadow-[0_5px_15px_rgba(29,13,202,0.25)] pt-4 ' >
          
      </div>
      


    </div>




<div class="container my-24 px-6 mx-auto">

  <section class="mb-32 text-gray-800">
    <div class="flex justify-center">
      <div class="text-center lg:max-w-3xl md:max-w-xl">
        <h2 class="text-3xl font-bold mb-12 px-6">Contact us</h2>
      </div>
    </div>

    <div class="flex flex-wrap">
      <div class="grow-0 shrink-0 basis-auto mb-12 lg:mb-0 w-full lg:w-5/12 px-3 lg:px-6">
        <form>
          <div class="form-group mb-6">
            <input type="text" class="form-control block
            w-full
            px-3
            py-1.5
            text-base
            font-normal
            text-gray-700
            bg-white bg-clip-padding
            border border-solid border-gray-300
            rounded-2xl
            transition
            ease-in-out
            m-0
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput7"
              placeholder="Name">
          </div>
          <div class="form-group mb-6">
            <input type="email" class="form-control block
            w-full
            px-3
            py-1.5
            text-base
            font-normal
            text-gray-700
            bg-white bg-clip-padding
            border border-solid border-gray-300
            rounded-2xl
            transition
            ease-in-out
            m-0
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput8"
              placeholder="Email address">
          </div>
          <div class="form-group mb-6">
            <textarea class="
            form-control
            block
            w-full
            px-3
            py-1.5
            text-base
            font-normal
            text-gray-700
            bg-white bg-clip-padding
            border border-solid border-gray-300
            rounded-2xl
            transition
            ease-in-out
            m-0
            focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none
          " id="exampleFormControlTextarea13" rows="3" placeholder="Message"></textarea>
          </div>
          <div class="form-group form-check text-center mb-6">
            <input type="checkbox"
              class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-[#2C2166] checked:indigo-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer"
              id="exampleCheck87" checked>
            <label class="form-check-label inline-block text-gray-800" for="exampleCheck87">Send me a copy of this
              message</label>
          </div>
          <button type="submit" class="
          w-full
          px-6
          py-2.5
          bg-[#2C2166]
          text-white
          font-medium
          text-lg
          
          leading-tight
          uppercase
          rounded-2xl
          shadow-md
          hover:bg-indigo-700 hover:shadow-lg
          focus:bg-indigo-700 focus:shadow-lg focus:outline-none focus:ring-0
          active:bg-indigo-800 active:shadow-lg
          transition
          duration-150
          ease-in-out">Send</button>
        </form>
      </div>
      <div class="grow-0 shrink-0 basis-auto w-full lg:w-7/12">
        <div class="flex flex-wrap">
          
          <div class="mb-12 inline-block grow-0 shrink-0 basis-auto w-full lg:w-6/12 px-3 lg:px-6">
            <div class="flex align-start">
              <div class="shrink-0">
                <div class="p-4 bg-[#2C2166] rounded-2xl shadow-md w-14 h-14 flex items-center justify-center">
                  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="newspaper"
                    class="w-5 text-white" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                    <path fill="currentColor"
                      d="M552 64H88c-13.255 0-24 10.745-24 24v8H24c-13.255 0-24 10.745-24 24v272c0 30.928 25.072 56 56 56h472c26.51 0 48-21.49 48-48V88c0-13.255-10.745-24-24-24zM56 400a8 8 0 0 1-8-8V144h16v248a8 8 0 0 1-8 8zm236-16H140c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h152c6.627 0 12 5.373 12 12v8c0 6.627-5.373 12-12 12zm208 0H348c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h152c6.627 0 12 5.373 12 12v8c0 6.627-5.373 12-12 12zm-208-96H140c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h152c6.627 0 12 5.373 12 12v8c0 6.627-5.373 12-12 12zm208 0H348c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h152c6.627 0 12 5.373 12 12v8c0 6.627-5.373 12-12 12zm0-96H140c-6.627 0-12-5.373-12-12v-40c0-6.627 5.373-12 12-12h360c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12z">
                    </path>
                  </svg>
                </div>
              </div>
              <div class="grow ml-6">
                <p class="font-bold mb-1">Press</p>
                <p class="text-gray-500">mcsknyy@press.com</p>
                <p class="text-gray-500">+90 555 555 5555</p>
              </div>
            </div>
          </div>
          <div class="mb-12 display inline-block grow-0 shrink-0 basis-auto w-full lg:w-6/12 px-3 lg:px-6">
            <div class="flex align-start">
              <div class="shrink-0">
                <div class="p-4 bg-[#2C2166] rounded-2xl shadow-md w-14 h-14 flex items-center justify-center">
                  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bug" class="w-5 text-white"
                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="currentColor"
                      d="M511.988 288.9c-.478 17.43-15.217 31.1-32.653 31.1H424v16c0 21.864-4.882 42.584-13.6 61.145l60.228 60.228c12.496 12.497 12.496 32.758 0 45.255-12.498 12.497-32.759 12.496-45.256 0l-54.736-54.736C345.886 467.965 314.351 480 280 480V236c0-6.627-5.373-12-12-12h-24c-6.627 0-12 5.373-12 12v244c-34.351 0-65.886-12.035-90.636-32.108l-54.736 54.736c-12.498 12.497-32.759 12.496-45.256 0-12.496-12.497-12.496-32.758 0-45.255l60.228-60.228C92.882 378.584 88 357.864 88 336v-16H32.666C15.23 320 .491 306.33.013 288.9-.484 270.816 14.028 256 32 256h56v-58.745l-46.628-46.628c-12.496-12.497-12.496-32.758 0-45.255 12.498-12.497 32.758-12.497 45.256 0L141.255 160h229.489l54.627-54.627c12.498-12.497 32.758-12.497 45.256 0 12.496 12.497 12.496 32.758 0 45.255L424 197.255V256h56c17.972 0 32.484 14.816 31.988 32.9zM257 0c-61.856 0-112 50.144-112 112h224C369 50.144 318.856 0 257 0z">
                    </path>
                  </svg>
                </div>
              </div>
              <div class="grow ml-6">
                <p class="font-bold mb-1">Bug report</p>
                <p class="text-gray-500">mcsknyy@bugs.com</p>
                <p class="text-gray-500">+90 555 555 5555</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>
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
      
      </script>
</body>
</html>