<!DOCTYPE html>
<html>
<head>
  <style>
    .hidden {
      display: none;
    }
  </style>
  <script>
    window.addEventListener('DOMContentLoaded', function() {
      var mediaQuery1 = window.matchMedia('(max-width: 1866px)');
      var mediaQuery2 = window.matchMedia('(max-width: 1500px)');
      var mediaQuery3 = window.matchMedia('(max-width: 1124px)');
      var mediaQuery4 = window.matchMedia('(max-width: 753px)');

      function handleMediaQueries() {
        var div1 = document.getElementById('id1');
        var div2 = document.getElementById('id2');
        var div3 = document.getElementById('id3');
        var div4 = document.getElementById('id4');
        var div5 = document.getElementById('id5');

        // Ekran boyutuna göre div elementlerinin görünürlüğünü ayarla
        if (mediaQuery1.matches) {
          div1.classList.add('hidden');
          div2.classList.remove('hidden');
          div3.classList.remove('hidden');
          div4.classList.remove('hidden');
          div5.classList.remove('hidden');
        } else if (mediaQuery2.matches) {
          div1.classList.remove('hidden');
          div2.classList.add('hidden');
          div3.classList.remove('hidden');
          div4.classList.remove('hidden');
          div5.classList.remove('hidden');
        } else if (mediaQuery3.matches) {
          div1.classList.remove('hidden');
          div2.classList.remove('hidden');
          div3.classList.add('hidden');
          div4.classList.remove('hidden');
          div5.classList.remove('hidden');
        } else if (mediaQuery4.matches) {
          div1.classList.remove('hidden');
          div2.classList.remove('hidden');
          div3.classList.remove('hidden');
          div4.classList.add('hidden');
          div5.classList.remove('hidden');
        } else {
          div1.classList.remove('hidden');
          div2.classList.remove('hidden');
          div3.classList.remove('hidden');
          div4.classList.remove('hidden');
          div5.classList.add('hidden');
        }
      }

      // Başlangıçta medya sorgularını kontrol et
      handleMediaQueries();

      // Medya sorguları değiştiğinde tekrar kontrol et
      mediaQuery1.addEventListener('change', handleMediaQueries);
      mediaQuery2.addEventListener('change', handleMediaQueries);
      mediaQuery3.addEventListener('change', handleMediaQueries);
      mediaQuery4.addEventListener('change', handleMediaQueries);
    });
  </script>
</head>
<body>
  <div id="id1">
    Bu içerik id1 ile ilişkilendirilmiştir. Ekran boyutu 1866 pikselden büyük olduğunda görünecektir.
  </div>

  <div id="id2" class="hidden">
    Bu içerik id2 ile ilişkilendirilmiştir. Ekran boyutu 1500 pikselden büyük olduğunda ve 1866 pikselden küçük olduğunda görünecektir.
  </div>

  <div id="id3" class="hidden">
    Bu içerik id3 ile ilişkilendirilmiştir. Ekran boyutu 1124 pikselden büyük olduğunda ve 1500 pikselden küçük olduğunda görünecektir.
  </div>

  <div id="id4" class="hidden">
    Bu içerik id4 ile ilişkilendirilmiştir. Ekran boyutu 753 pikselden büyük olduğunda ve 1124 pikselden küçük olduğunda görünecektir.
  </div>

  <div id="id5" class="hidden">
    Bu içerik id5 ile ilişkilendirilmiştir. Ekran boyutu 753 pikselden küçük olduğunda görünecektir.
  </div>
</body>
</html>
