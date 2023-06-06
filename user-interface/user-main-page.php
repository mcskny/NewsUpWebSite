<!DOCTYPE html>
<?php session_start();
    include('connectDatabase.php');
?>
<html lang='en'>
<head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />   
 <meta charset='UTF-8'>
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <script src='https://cdn.tailwindcss.com'></script>
    <title>News Up - MainPage</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <script src="script.js" ></script>
</head>
<body>
    <style>
     .parent .change-div {
      outline: 6px solid transparent;
      transition: outline-color 0.3s ease;
    }
    .parent:hover .change-div {
      outline: 6px solid #2E226A;
      transition: all 0.3s;
    }
    
    .font-inter {
      font-family: 'Inter', sans-serif;
    }
    
    .material-symbols-outlined {
      font-variation-settings:
      'FILL' 0,
      'wght' 400,
      'GRAD' 0,
      'opsz' 48
    }

    .weather-icon {
      font-size: 48px;

    }
    .hiddemm {
      visibility: hidden;
    }
    #container {
      width: 100%;
      height: 100%;
      overflow-x: scroll;
      white-space: nowrap;
    }

    #content {
      display: flex;
      
    }
    #content * {
      white-space: normal;
      
      
    }
    
    ::-webkit-scrollbar {
      display: none;
    }

 


  </style>
    
    

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
        <article class=" ml-6 h-16 relative w-80 ">
        <div class="text-2xl mt-[14px]  inline-block absolute font-inter  font-regular" id="city-name"></div>
        <div class=" inline-block right-32 mt-1 absolute" id="weather-status"></div>
        <div class="text-2xl inline-block absolute right-10 mt-4 font-inter  font-semibold " id="weatherSt"></div>
        </div>
        </article>
      </div>
    <div class=' p-0 relative z-0 w-11/12 h-[587px] bg-white m-auto drop-shadow-[0_5px_15px_rgba(29,13,202,0.25)] pt-4 rounded-3xl' >
    <div class=" inline-block w-3 "></div>
    <div id="container">
            <div id="content">
    <?php 
            $query = $connetion->prepare('SELECT * FROM haberbilgileri order by topTick desc LIMIT 5');
            $query->execute();
            while ($user = $query->fetch(PDO::FETCH_ASSOC)) {
                echo "<a href='views.php?id=".$user["id"]."' class='transition-all mr-32 parent w-[219px] cursor-pointer'> <div class= 'transition-all change-div bg-[#F4F4FD] inline-block ml-4 w-[319px] h-[535px] rounded-3xl '>
                <div class='w-[275px] h-[275px] m-auto mt-16 rounded-3xl relative' >
                    <img src='".$user["image"]."' class='w-full m-auto -translate-x-1/2 -translate-y-1/2 top-1/2  left-1/2 absolute h-full object-cover rounded-3xl'> 
                    <div class='top-[280px] text-[20px] font-semibold font-inter text-[#828282] absolute' >".str_replace("-", "/",substr($user['eklenme_tarihi'], 5, 6))."</div>
                    <div class='top-[280px] text-[20px] font-semibold font-inter text-[#828282] absolute right-0' >".$user['topTick']." views</div>
                    <div class='top-[317px] text-[20px] font-bold font-inter text-[#353535] absolute ' >".substr($user['haber_baslik'],0,120)."</div>
                </div>
            </div> </a>" ;

            }
        ?>
  </div>
              
  </div>

<div class=" inline-block mt-10 w-10/12 m-0">
<?php 
            $query = $connetion->prepare('SELECT * FROM haberbilgileri order by topTick desc LIMIT 5, 18446744073709551615');
            $query->execute();
            while ($user = $query->fetch(PDO::FETCH_ASSOC)) {
                echo "<a href='views.php?id=".$user["id"]."' class='transition-all parent w-[219px] cursor-pointer'> <div class= ' mb-4 relative transition-all change-div bg-[#F4F4FD] inline-block ml-4 w-[420px] h-[255px] rounded-3xl '>
                <div class='w-[150px] ml-6 mt-6 h-[150px]  rounded-3xl bg-slate-600 relative' >
                    <img src='".$user["image"]."' class='w-full m-auto -translate-x-1/2 -translate-y-1/2 top-1/2  left-1/2 absolute h-full object-cover rounded-3xl'> 
                    <div class='top-[175px] text-[20px] font-semibold text-xl font-inter text-[#828282] absolute' >".str_replace("-", "/",substr($user['eklenme_tarihi'], 5, 6))."</div>
                    <div class='top-[175px] text-[20px] -right-52 font-semibold text-xl font-inter text-[#828282] absolute' >".$user['topTick']." views</div>
                    
                </div>
                <div class='top-5 right-1 text-[18px] absolute font-bold font-inter text-[#353535] w-52 ' >".substr($user['haber_baslik'],0,140)."</div>
               
            </div> </a>" ;

            }
        ?>
        
      
        </div>
      <div class="inline-block absolute top-[625px] bg-[#F4F4FD] rounded-3xl h-[800px] right-0 m-0 w-[360px]">
            <img src="https://r.resimlink.com/KOkm0g6-.png"  class="rounded-2xl m-auto mt-7"/>
      </div>
        
      </div>
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
          <div class=' p-0  top-28 -z-10 w-full h-[427px] bg-white m-auto drop-shadow-[0_5px_15px_rgba(29,13,202,0.25)] pt-4 ' >
          <div id="container">
            <div id="content">
            <?php 
            $query = $connetion->prepare('SELECT * FROM haberbilgileri order by topTick desc LIMIT 5');
            $query->execute();
            while ($user = $query->fetch(PDO::FETCH_ASSOC)) {
                echo "
            <a href='views.php?id=".$user["id"]."' class='transition-all mr-2 parent w-[219px] cursor-pointer'> <div class= 'transition-all change-div  inline-block ml-4 w-[219px] h-[395px] rounded-3xl '>
                <div class='w-[175px] h-[175px] m-auto mt-16 rounded-3xl relative' >
                    <img src='".$user["image"]."' class='w-full m-auto -translate-x-1/2 -translate-y-1/2 top-1/2  left-1/2 absolute h-full object-cover rounded-3xl'> 
                    <div class='top-[180px] text-sm font-semibold font-inter text-[#828282] absolute' >".str_replace("-", "/",substr($user['eklenme_tarihi'], 5, 6))."</div>
                    <div class='top-[180px] text-sm font-semibold font-inter text-[#828282] absolute right-0' >".$user['topTick']." views</div>
                    <div class='top-[227px] text-sm font-bold font-inter text-[#353535] absolute ' >".substr($user['haber_baslik'],0,120)."</div>
                </div>
            </div> </a>" ;

            }
            ?> 
            </div>
              
          </div>
      </div>
      <div class=" inline-block mt-5 m-auto">
      <?php 
            $query = $connetion->prepare('SELECT * FROM haberbilgileri order by topTick desc LIMIT 5, 18446744073709551615');
            $query->execute();
            while ($user = $query->fetch(PDO::FETCH_ASSOC)) {
                echo "
            <a href='views.php?id=".$user["id"]."' class=' transition-all w-[219px] cursor-pointer'> <div class= '  transition-all change-div bg-[#F4F4FD] border-4 hover:border-[#2E226A] inline-block w-[305px] h-[355px] rounded-3xl '>
                <div class='w-[275px] h-[175px] m-auto mt-4 rounded-3xl relative' >
                    <img src='".$user["image"]."' class='w-full m-auto -translate-x-1/2 -translate-y-1/2 top-1/2  left-1/2 absolute h-full object-cover rounded-3xl'> 
                    <div class='top-[180px] text-md font-semibold font-inter text-[#828282] absolute' >".str_replace("-", "/",substr($user['eklenme_tarihi'], 5, 6))."</div>
                    <div class='top-[180px] text-md font-semibold font-inter text-[#828282] absolute right-0' >".$user['topTick']." views</div>
                    <div class='top-[227px] text-md font-bold font-inter text-[#353535] absolute ' >".substr($user['haber_baslik'],0,120)."</div>
                </div>
            </div> </a>" ;

            }
            ?> 
        
      
        </div>


    </div>
        

   
</body>
</html>

