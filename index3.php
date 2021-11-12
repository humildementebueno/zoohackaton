<!DOCTYPE html>
<html lang="es">
<head>
<title> Geo Puntos</title>
</head>
<body>
    <div>
        <img id="logo" src="https://th.bing.com/th/id/OIP.CjH5zGWcyx3MC68FTKX6HAHaIq?pid=ImgDet&rs=1" alt="">
    </div>
    <script type="text/javascript">
    var getDistanceFromLatLonInKm = function(lat1,lon1,lat2,lon2){
        var R= 6371;
        var dLat = deg2rad(lat2-lat1);
        var dLon = deg2rad(lon2-lon1);

        var a = Math.sin(dLat/2)* Math.sin(dLat/2) + Math.cos(deg2rad(lat1))*Math.cos(deg2rad(lat2))*Math.sin(dLon/2)*Math.sin(dLon/2);

        var c = 2 * Math.atan2(Math.sqrt(a),Math.sqrt(1-a));
        var d = R*c;
        return d;
    }

    function deg2rad(n){
        return n * ( Math.PI/180)
    }

    var d = getDistanceFromLatLonInKm(19.432758,-99.133210,37.743405,-122.447503);

    console.log(d+ " km");
    </script>
 
</body>
 
</html>