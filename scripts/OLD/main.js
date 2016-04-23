$(document).ready(function () {

  // ajuda

  if($(".faq").length > 0){

    var textID = 0;

    $(".wrap-accordion a").on("click", function (e) {

      e.preventDefault();

      textID = $(this).data('id');

      $(".wrap-accordion a").removeClass("active");
      $(this).addClass("active");

      $(".wrap-accordion article").slideUp(400);
      $(".wrap-accordion#faq-"+textID+" article").slideDown(400);

    });

  }

	

});
