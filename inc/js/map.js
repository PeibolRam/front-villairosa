// Initialize and add the map
function initMap() {
  // The location of Uluru  20.097868323906127, -98.77867373367062
  const uluru = { lat: 20.097868323906127, lng: -98.77867373367062 };
  // The map, centered at Uluru
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 15,
    center: uluru,
  });
  // The marker, positioned at Uluru
  const marker = new google.maps.Marker({
    position: uluru,
    map: map,
  });
}