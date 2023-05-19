<!DOCTYPE html>
<?php session_start();
    include('connectDatabase.php');
?>
<html lang='en'>
<head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />   
 <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <script src='https://cdn.tailwindcss.com'></script>
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
    
    /* Yazı tipi ayarları */
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

    
    
  </style>
    <div class='z-10 bg-white fixed drop-shadow-[0_5px_15px_rgba(29,13,202,0.25)] w-full h-16'>
        <div class=" h-[77px] -mt-3 m-auto w-[791px]">
          <div class="font-medium p-4 pl-12 pr-12 cursor-pointer hover:bg-opacity-25 hover:bg-slate-400 text-[28px] font-inter mt-[8px] pb-[10px] inline-block"><a href="user-main-page.php">Home</a></div> 
          <div class="font-medium p-4 pl-12 pr-12 cursor-pointer hover:bg-opacity-25 hover:bg-slate-400 text-[28px] font-inter mt-[8px] pb-[10px] inline-block"><a href="About.php">About Us</a></div> 
          <div class="font-medium p-4 pl-12 pr-12 cursor-pointer hover:bg-opacity-25 hover:bg-slate-400 text-[28px] font-inter mt-[8px] pb-[10px] inline-block"><a href="Contact.php">Contact</a></div> 
          <div class="font-medium p-4 pl-12 pr-12 cursor-pointer hover:bg-opacity-25 hover:bg-slate-400 text-[28px] font-inter mt-[8px] pb-[10px] inline-block"><a href="/admin-interface/index.php">Sign Up</a></div> 

          

        </div>



    <div><img href='index.php' class='w-20 -mt-[72px] ml-5 mb-4 fixed' src='/images/HaberUpLogo.png'></div>
        <div class="fixed    -mt-14   right-28" id="weather-status"></div>
        <div class="text-2xl -mt-[45px] font-inter  font-semibold fixed right-7" id="weatherSt"></div>
        <div class="text-2xl -mt-[45px] font-inter  font-regular fixed right-[165px]" id="city-name"></div>
    </div>
    

    <script>
   window.addEventListener('DOMContentLoaded', function() {
      var mediaQuery = window.matchMedia('(max-width: 600px)');

      function handleMediaQuery(mediaQuery) {
        var div1 = document.getElementById('id1');
        var div2 = document.getElementById('id2');

        if (mediaQuery.matches) {
          // Ekran boyutu 1866 pikselden küçükse id2 çalışsın, id1 gizlensin
          div1.style.display = 'none';
          div2.style.display = 'block';
        } else {
          // Ekran boyutu 1866 pikselden büyükse id1 çalışsın, id2 gizlensin
          div1.style.display = 'block';
          div2.style.display = 'none';
        }
      }

      // Başlangıçta medya sorgusunu kontrol et
      handleMediaQuery(mediaQuery);

      // Medya sorgusu değiştiğinde tekrar kontrol et
      mediaQuery.addEventListener('change', handleMediaQuery);
    });
  </script>













<div id="id1">

    
    <div class=' p-0 relative z-0 w-11/12 h-[567px] bg-white m-auto drop-shadow-[0_5px_15px_rgba(29,13,202,0.25)] pt-4 rounded-2xl' >
    <div class=" inline-block w-3 "></div>
    <?php 
            $query = $connetion->prepare('SELECT * FROM haberbilgileri order by topTick desc LIMIT 5');
            $query->execute();
            while ($user = $query->fetch(PDO::FETCH_ASSOC)) {
                echo "<a href='views.php?id=".$user["id"]."' class='transition-all parent w-[219px] cursor-pointer'> <div class= 'transition-all change-div bg-[#F4F4FD] inline-block ml-4 w-[319px] h-[535px] rounded-2xl '>
                <div class='w-[275px] h-[275px] m-auto mt-16 rounded-3xl relative' >
                    <img src='".$user["image"]."' class='w-full m-auto -translate-x-1/2 -translate-y-1/2 top-1/2  left-1/2 absolute h-full object-cover rounded-3xl'> 
                    <div class='top-[280px] text-[20px] font-semibold font-inter text-[#828282] absolute' >".str_replace("-", "/",substr($user['eklenme_tarihi'], 5, 6))."</div>
                    <div class='top-[280px] text-[20px] font-semibold font-inter text-[#828282] absolute right-0' >".$user['topTick']." views</div>
                    <div class='top-[317px] text-[20px] font-bold font-inter text-[#353535] absolute ' >".substr($user['haber'],0,90)."</div>
                </div>
            </div> </a>" ;

            }
        ?>
<div class=" inline-block mt-10 w-10/12 m-0">
<?php 
            $query = $connetion->prepare('SELECT * FROM haberbilgileri order by topTick desc LIMIT 5, 18446744073709551615');
            $query->execute();
            while ($user = $query->fetch(PDO::FETCH_ASSOC)) {
                echo "<a href='views.php?id=".$user["id"]."' class='transition-all parent w-[219px] cursor-pointer'> <div class= ' mb-4 relative transition-all change-div bg-[#F4F4FD] inline-block ml-4 w-[420px] h-[255px] rounded-2xl '>
                <div class='w-[150px] ml-6 mt-6 h-[150px]  rounded-3xl bg-slate-600 relative' >
                    <img src='".$user["image"]."' class='w-full m-auto -translate-x-1/2 -translate-y-1/2 top-1/2  left-1/2 absolute h-full object-cover rounded-3xl'> 
                    <div class='top-[175px] text-[20px] font-semibold text-xl font-inter text-[#828282] absolute' >".str_replace("-", "/",substr($user['eklenme_tarihi'], 5, 6))."</div>
                    <div class='top-[175px] text-[20px] -right-52 font-semibold text-xl font-inter text-[#828282] absolute' >".$user['topTick']." views</div>
                    
                </div>
                <div class='top-5 right-1 text-[18px] absolute font-bold font-inter text-[#353535] w-52 ' >".substr($user['haber'],0,120)."</div>
               
            </div> </a>" ;

            }
        ?>
        
      
        </div>
      <div class="inline-block absolute top-[595px] bg-[#F4F4FD] rounded-3xl h-[800px] right-0 m-0 w-[360px]">
            <img src="https://r.resimlink.com/KOkm0g6-.png"  class="rounded-2xl m-auto mt-7"/>
      </div>
        
      </div>
      </div>
        
      





      <div id="id2">

    
         <div class=' p-0 relative z-0 w-11/12 h-[567px] bg-white m-auto drop-shadow-[0_5px_15px_rgba(29,13,202,0.25)] pt-4 rounded-2xl' >
   
      </div>
        
      







    
    
    
    
    
   
</body>
</html>

