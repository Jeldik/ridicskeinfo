var map;

var option = {
    center: {lat: 49.8358244, lng: 15.6913707},
    zoom: 8,
    minZoom: 8,
    scrollwheel: false,

};

function initMap() {
    map = new google.maps.Map(document.getElementById('map'), option);

    var pnovZ = new google.maps.Marker({
        position: {lat: 50.0837202, lng: 15.147418},
        map: map,

    });
    var pnovK = new google.maps.Marker({
        position: {lat: 50.0921478, lng: 15.1467478},
        map: map,
    });
    var predniLhota = new google.maps.Marker({
        position: {lat: 50.1380075, lng: 15.0951164},
        map: map,
    });
    var chroustnikK = new google.maps.Marker({
        position: {lat: 50.4262208, lng: 15.8738439},
        map: map,
    });
    var chroustnikZ = new google.maps.Marker({
        position: {lat: 50.4227108, lng: 15.8793800},
        map: map,
    });
    var kocbere = new google.maps.Marker({
        position: {lat: 50.4626831, lng: 15.8628853},
        map: map,
    });
    var rostoklatyZ = new google.maps.Marker({
        position: {lat: 50.0708631, lng: 14.8045639},
        map: map,
    });
    var rostoklatyK = new google.maps.Marker({
        position: {lat: 50.0709389, lng: 14.7994569},
        map: map,
    });
    var novosibrinska = new google.maps.Marker({
        position: {lat: 50.0727900, lng: 14.6837486},
        map: map,
    });
    var vsechlapy = new google.maps.Marker({
        position: {lat: 50.220255, lng: 15.028903},
        map: map,
    });
    var bilek = new google.maps.Marker({
        position: {lat: 49.706330, lng: 15.734276},
        map: map,
    });
}