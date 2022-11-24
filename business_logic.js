function validateForm() {
    // Here is the custom logic of validation
}

// Initialize and add the map
function initMap() {
  // The location of Uluru
  const uluru = { lat: 46.347114, lng: -72.57851 };
  // The map, centered at Uluru
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 4,
    center: uluru,
  });
  // The marker, positioned at Uluru
  const marker = new google.maps.Marker({
    position: uluru,
    map: map,
  });
}

window.initMap = initMap;

$(document).ready(function () {
  // By default the Acceuil page is shown at the beginning
  $(".acceuil").show();
  $(".menu-row:first").css({
    "background-color": "grey",
    color: "white",
    "font-weight": "bold",
  });
  $(".inscription").hide();
  $(".carte").hide();

  // Navigation logic:

  // first button of the menu --> acceuil
  $(".menu-item:first").click(function () {
    // Show/Hide the right content

    $(".inscription").hide();
    $(".carte").hide();
    $(".acceuil").show();
    // Restyiling the buttons
    $(".menu-row:first").css({
      "background-color": "grey",
      color: "white",
      "font-weight": "bold",
    });
    $(".menu-item")
      .eq(1)
      .css({
        "background-color": "white",
        color: "black",
        "font-weight": "normal",
      });
    $(".menu-item")
      .eq(2)
      .css({
        "background-color": "white",
        color: "black",
        "font-weight": "normal",
      });
  });
  // second button of the menu --> acceuil
  $(".menu-item")
    .eq(1)
    .click(function () {
      // Show/Hide the right content

      $(".acceuil").hide();
      $(".carte").hide();
      $(".inscription").show();
      // Restyiling the buttons
      $(".menu-item")
        .eq(1)
        .css({
          "background-color": "grey",
          color: "white",
          "font-weight": "bold",
        });
      $(".menu-row:first").css({
        "background-color": "white",
        color: "black",
        "font-weight": "normal",
      });
      $(".menu-item")
        .eq(2)
        .css({
          "background-color": "white",
          color: "black",
          "font-weight": "normal",
        });
    });
  // third button of the menu --> acceuil
  $(".menu-item")
    .eq(2)
    .click(function () {
      // Show/Hide the right content
      $(".acceuil").hide();
      $(".inscription").hide();
      $(".carte").show();
      // Restyiling the buttons
      $(".menu-item")
        .eq(2)
        .css({
          "background-color": "grey",
          color: "white",
          "font-weight": "bold",
        });
      $(".menu-row:first").css({
        "background-color": "white",
        color: "black",
        "font-weight": "normal",
      });
      $(".menu-item")
        .eq(1)
        .css({
          "background-color": "white",
          color: "black",
          "font-weight": "normal",
        });
    });
});
