$(".cta a").click(function() {
	$("html,body").animate({
		scrollTop: $("#senesteBlog").offset().top-87
	}, 500);
	return false;
});

$( "#aabnTeaser" ).click(function() {
  $( ".teaserBoks" ).fadeIn( "slow", function() {
  });
});

$( "#bogTeaserLuk" ).click(function() {
  $( ".teaserBoks" ).fadeOut( "slow", function() {
  });
});

$( "#responsiveMenu" ).click(function() {
  $( "#responsiveMenuContainer" ).fadeIn( "slow", function() {
  });
});

$( "#responsiveMenuExit" ).click(function() {
  $( "#responsiveMenuContainer" ).fadeOut( "slow", function() {
  });
});

$("#currentLanguage").click(function() {
    $("#flagDropDown").slideToggle("slow", function() { 
    });
});