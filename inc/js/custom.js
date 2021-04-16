(function ($) {
  // misc adjustments
  let bgki = document.getElementsByClassName("backbg");

  // backbg
  $(".backbg").each(function () {
    let backbgPath = $(this).attr("src");
    $(this)
      .parent(".backbgbox")
      .css("background-image", "url(" + backbgPath + ")");
  });

  $(".counter").each(function () {
    $(this)
      .prop("Counter", 0)
      .animate(
        {
          Counter: $(this).text(),
        },
        {
          duration: 8000,
          easing: "swing",
          step: function (now) {
            $(this).text(Math.ceil(now));
          },
        }
      );
  });

  // touch detection
  function isTouchDevice() {
    return "ontouchstart" in document.documentElement;
  }

  if (isTouchDevice()) {
    // on Mobile
    $("body").addClass("touch");
  } else {
    // on Desktop
    $("body").addClass("no-touch");
  }

  // Sticky header
  $(window).scroll(function () {
    if ($(this).scrollTop() > 40) {
      $("body").addClass("stickyH");
    } else {
      $("body").removeClass("stickyH");
    }
  });

  // scroll to
  $(".scroll").on("click", function (event) {
    event.preventDefault();
    $("html,body")
      .stop()
      .animate({ scrollTop: $(this.hash).offset().top }, 1500, "easeOutExpo");
  });

  // Dropdown menu
  $(".mainnav > ul > li:has(>ul) > a").addClass("listarrow");

  if ($(window).width() < 960) {
    $(".mainnav > ul > li:has(>ul)").on("click", function () {
      $(this).find(">ul").slideToggle();
      $(this).siblings("li:has(>ul)").find(">ul").hide();
    });
  }

  // mobile menu
  $(".mobile_menubtn").on("click", function () {
    $(this).toggleClass("open");
    $("body").toggleClass("menuopen");
  });
})(jQuery); // end document ready


/*-------SLIDER-------*/

let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides((slideIndex += n));
}

function currentSlide(n) {
  showSlides((slideIndex = n));
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[slideIndex - 1].style.display = "block";
}

let slideIndex1 = 1;
showSlides1(slideIndex1);

function plusSlides1(n) {
  showSlides1((slideIndex1 += n));
}

function currentSlide1(n) {
  showSlides1((slideIndex1 = n));
}

function showSlides1(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides1");
  if (n > slides.length) {
    slideIndex1 = 1;
  }
  if (n < 1) {
    slideIndex1 = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[slideIndex1 - 1].style.display = "block";
}
