<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Document</title>
</head>
<body>
      <div class="container">
            <h1>How to Get Current User Location with Laravel - Tutsmake.com</h1>
            <div class="card">
                <div class="card-body">
                    @if($url)
                    <h4>IP: {{ $url->ipAddress }}</h4>
                    <h4>Country Name: {{ $url->countryName }}</h4>
                    <h4>City Name: {{ $url->cityName   }}</h4>
                    <h4>Region Name: {{ $region=$url->regionName }}</h4>
                    <h4>Latitude: {{ $url->latitude }}</h4>
                    <h4>Longitude: {{ $url->longitude }}</h4>
                    @endif
                </div>
            </div>
        </div>
</body>
</html>