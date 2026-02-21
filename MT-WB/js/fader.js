$(window).on("load", function(){
   // The overlay is initially visible, we need to hide it!
   $("#loaderOverlay").addClass("hide"); // CSS3 will animate it nicely
});

// When we click on some link we want our overlay to show up!
// Additionally instead of `"a"` you could make sure it's not an external link,
// a #hash anchor etc...

$(document).on("click", ".menu a", function(evt) {

  evt.preventDefault(); // Don't navigate!

  var href = $(this).attr("href"); // grab the href

  // Animate-In our overlay
  $("#loaderOverlay").removeClass("hide");

  // wait for CSS3 to animate-in the overlay and than navigate to our next page

  setTimeout(function() {
     window.location = href; // Navigate finally
  }, 2100);

});