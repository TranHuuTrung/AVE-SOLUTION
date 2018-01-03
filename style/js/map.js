var map;
function initialize(){
    var myLatlng = new google.maps.LatLng(10.843928, 106.717672);
    var myOptions = {
        zoom: 16,
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    map = google.maps.Map(document.getElementById("maps"), myOptions);
    var text;
    text ="<b style='color: #00F' "+"style='text-align: center'> LonDon<br/>"+"<img src='LonDon_City.png'/></b>";
    var infowindow = new google.maps.InfoWindow({
         content: text,
         size: new google.maps.size(100,50),
         position: myLatlng
    });
    infowindow.open(map);
    var marker = new google.maps.Marker({
       position: myLatlng,
       map: map,
       title:"LonDon"
    });
}