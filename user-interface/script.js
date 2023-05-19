    var apiKey = '9367cf6c18fc36aafc40c31b6109d2a8'; 
    function displayCityStatus(weatherStatus, weatherSt, cityAbbreviation) {
      var statusElement = $('#weather-status');
      var cityElement = $('#weatherSt');
      var weatherStElement = $('#city-name');
      var cityAbbreviationElement = $('#city-abbreviation');

      var weatherIcon = '';

      switch (weatherStatus) {
        case 'Clear':
          weatherIcon = 'sunny';
          break;
        case 'Rain':
          weatherIcon = 'rainy';
          break;
        case 'Snow':
          weatherIcon = 'weather_snowy'; 
          break;
        case 'Storm': 
          weatherIcon = 'thunderstorm'; 
          break;
        case 'Drizzle': 
          weatherIcon = 'rainy_light'; 
          break;
        default:
          weatherIcon = 'cloud'; 
          break;
      }
      statusElement.html('<span class="weather-icon material-symbols-outlined">'+ weatherIcon + '</span>');
      cityElement.text(weatherStatus);
      weatherStElement.text(weatherSt);
      cityAbbreviationElement.text(cityAbbreviation);

      console.log('Hava Durumu:', weatherStatus);
      console.log('Şehir Adı:', weatherSt);
      console.log('Şehir Kısaltması:', cityAbbreviation);
    }

    function getWeatherByLocation() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
          var latitude = position.coords.latitude;
          var longitude = position.coords.longitude;
          var apiUrl = 'https://api.openweathermap.org/data/2.5/weather?lat=' + latitude + '&lon=' + longitude + '&appid=' + apiKey;

          $.getJSON(apiUrl, function (data) {
            var weatherStatus = data.weather[0].main;
            var weatherSt = data.name;
            var cityAbbreviation = data.sys.country;
            displayCityStatus(weatherStatus, weatherSt, cityAbbreviation);
          });
        });
      } else {
        console.log('Tarayıcınız konum hizmetlerini desteklemiyor.');
      }
    }

    getWeatherByLocation();

