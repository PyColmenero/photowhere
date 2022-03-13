var locations = [];

function setUserPos(position) {

    clearTimeout(geo.timeOut);

    var lat = position.coords.latitude;
    var lng = position.coords.longitude;
    console.log(lat, lng);
    geo.save_pos(lat, lng);

    get_near_locations(lat, lng, 9);

}

var spot_type = $(".spot_type")
spot_type.click(function () {

    var img = $(this).children().eq(0);
    var url = img.attr("alt");
    url = "./places.html?type=" + url;

    window.location.assign(url);

});

var init_geo;

function load_regarding_page() {

    // load GEO
    geo = new Geo();
    geo.load();

    // load PLACE
    place = new Place();
    place.load();

    // load FILTER
    filter = new Filter();

    get_popular_locations(9);
    geo.allowed_geo = localStorage.getItem("allowed_geo");
    if (geo.allowed_geo == "true") {
        navigator.geolocation.getCurrentPosition(setUserPos, geo.showError);
    } else { // si NO tienes permitida la ubicación
        $("#near").html($("#near").html() + "<div class='error_loc'><p>Tienes que permitir la Localización para ver esto.</p><p id='allow_msg' class='accept_pos noselect'>PERMITIR</p></div>");
        $("#near_cont").text("");
        $("#near_cont").attr("class", "near_cont notallowed");
    }

}

