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
    var strakonickaPraha = new google.maps.Marker({
        position: {lat: 49.996732, lng: 14.396787},
        map: map,
    });
    var modranskaPraha = new google.maps.Marker({
        position: {lat: 50.022772, lng: 14.404118},
        map: map,
    });
    var modranskaPrahaZpet = new google.maps.Marker({
        position: {lat: 50.024072, lng: 14.404077},
        map: map,
    });
    var jizniSpojkaPraha = new google.maps.Marker({
        position: {lat: 50.032572, lng: 14.422992},
        map: map,
    });
    var jizniSpojkaPrahaZpet = new google.maps.Marker({
        position: {lat: 50.032823, lng: 14.426359},
        map: map,
    });
    var zalesiPraha = new google.maps.Marker({
        position: {lat: 50.024396, lng: 14.442256},
        map: map,
    });
    var zalesiPrahaZpet = new google.maps.Marker({
        position: {lat: 50.024546, lng: 14.442309},
        map: map,
    });
    var patehoKvetnaPraha = new google.maps.Marker({
        position: {lat: 50.042104, lng: 14.464861},
        map: map,
    });
    var jizniSpojkaOkruhPraha = new google.maps.Marker({
        position: {lat: 50.048451, lng: 14.474146},
        map: map,
    });
    var turkovaPraha = new google.maps.Marker({
        position: {lat: 50.041470, lng: 14.488477},
        map: map,
    });
    var hrbitovPraha = new google.maps.Marker({
        position: {lat: 50.062415, lng: 14.469517},
        map: map,
    });
    var prumyslovaPraha = new google.maps.Marker({
        position: {lat: 50.099203, lng: 14.531047},
        map: map,
    });
    var prumyslovaPrahaZpet = new google.maps.Marker({
        position: {lat: 50.101791, lng: 14.533085},
        map: map,
    });
    var podebradskaPraha = new google.maps.Marker({
        position: {lat: 50.106624, lng: 14.542549},
        map: map,
    });
    var vHolesovickachPraha = new google.maps.Marker({
        position: {lat: 50.117477, lng: 14.542549},
        map: map,
    });
    var jeremenkovaPraha = new google.maps.Marker({
        position: {lat: 50.046984, lng: 14.414113},
        map: map,
    });
    var dobrizskaPraha = new google.maps.Marker({
        position: {lat: 50.058039, lng: 14.406759},
        map: map,
    });
    var bieblovaPraha = new google.maps.Marker({
        position: {lat: 50.058039, lng: 14.406759},
        map: map,
    });


}