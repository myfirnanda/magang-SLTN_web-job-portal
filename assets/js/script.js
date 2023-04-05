jQuery(document).ready(function ($) {
  //Default Action
  $(".tab_content").hide(); //Hide all content
  $("ul.tabs li:first").addClass("active").show(); //Activate first tab
  $(".tab_content:first").show(); //Show first tab content

  //On Click Event
  $("ul.tabs li").click(function () {
    $("ul.tabs li").removeClass("active"); //Remove any "active" class
    $(this).addClass("active"); //Add "active" class to selected tab
    $(".tab_content").hide(); //Hide all tab content
    var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
    $(activeTab).fadeIn(); //Fade in the active content
    return false;
  });
});

var swiper = new Swiper(".feedback-container", {
  slidesPerView: 1,
  spaceBetween: 30,
  slidesPerGroup: 1,
  loop: true,
  loopFillGroupWithBlank: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

ScrollReveal({
  distance: "60px",
  duration: 2500,
  delay: 400,
});

/*--- INDEX ---*/

// Jumbotron
ScrollReveal().reveal(".jumbotron", { delay: 500, origin: "left" });
ScrollReveal().reveal(".jumbotron img", { delay: 600, origin: "right" });

// Categories
ScrollReveal().reveal("#categories-title", { delay: 500, origin: "top" });
ScrollReveal().reveal(".categories-item", {
  delay: 600,
  origin: "bottom",
  duration: 1500,
  interval: 200,
});

// About
ScrollReveal().reveal("#about-title", { delay: 500, origin: "right" });
ScrollReveal().reveal("#about-img", { delay: 600 });
ScrollReveal().reveal("#about-desc", { delay: 600, origin: "right" });
ScrollReveal().reveal("#about-text", {
  delay: 700,
  origin: "right",
  interval: 200,
});
ScrollReveal().reveal("#about-button", { delay: 800, origin: "right" });

// Step Guide
ScrollReveal().reveal("#step-guide-title", { delay: 500, origin: "left" });
ScrollReveal().reveal("#step-guide-desc", { delay: 600, origin: "left" });
ScrollReveal().reveal("#step-guide-img", { delay: 600, origin: "right" });
ScrollReveal().reveal(".steps li", {
  delay: 700,
  origin: "left",
  interval: 400,
});

// Job List
ScrollReveal().reveal("#job-list-title", { delay: 500, origin: "top" });
ScrollReveal().reveal("#job-list-desc", { delay: 600, origin: "top" });
ScrollReveal().reveal("#job-list", { delay: 700, origin: "bottom" });

// Feedback
ScrollReveal().reveal("#feedback", { delay: 500, origin: "top" });
ScrollReveal().reveal("#swiper", { delay: 700, origin: "bottom" });

/*--- ARCHIVE JOB ---*/

ScrollReveal().reveal(".job-banner-text", { delay: 500, origin: "top" });
ScrollReveal().reveal(".tabs li", { delay: 600, interval: 200 });
ScrollReveal().reveal("#full-time, #part-time, #magang, #freelance", {
  delay: 600,
});
ScrollReveal().reveal(".job-item", {
  delay: 700,
  origin: "bottom",
});

/*--- SINGLE JOB ---*/

ScrollReveal().reveal("#job-detail", { delay: 500 });
ScrollReveal().reveal("#aside-job-detail", { delay: 600, origin: "right" });
