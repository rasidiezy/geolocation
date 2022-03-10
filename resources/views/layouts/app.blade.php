<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcNfPU5Xhy2zxtoZKfkLUnpJvtWLLozbY&callback=initialize"
        async defer></script>
</head>

<body>
    @yield('content')
</body>
<script>
    var x = document.getElementById("demo");
    var lat;

    function getLocation() {

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    function showPosition(position) {
        x.innerHTML = "lat: " + position.coords.latitude + ", lng: " + position.coords.longitude;
        lat = position.coords.latitude;
        lng = position.coords.longitude;

        var latlng = {
            lat: (position.coords.latitude),
            lng: (position.coords.longitude)
        };
        var geocoder = new google.maps.Geocoder;
        geocoder.geocode({
            'location': latlng
        }, function (results, status) {
            if (status === 'OK') {
                if (results[0]) {
                    rs = results[0].formatted_address;
                } else {
                    rs = 'No results found';
                }
            } else {
                rs = 'Geocoder failed due to: ' + status;
            }
            document.getElementById("adress").innerHTML = rs;

        });

        var propertiPeta = {
            center: new google.maps.LatLng((position.coords.latitude), (position.coords.longitude)),
            zoom: 15,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);

        // membuat Marker
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng((position.coords.latitude), (position.coords.longitude)),
            map: peta
        });
    }

</script>

</html>
