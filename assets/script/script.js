$(document).ready(function () {
  const OFFSET = -1000; // Adjust to match your scroll-margin-top or navbar height

  const sections = $("div[id]"); // all your content sections
  const menuLinks = $(".sideMenuLink");

  function activateMenuItem() {
    let currentSectionId = "";

    sections.each(function () {
      const sectionTop = $(this).offset().top;
      if ($(window).scrollTop() + OFFSET >= sectionTop) {
        currentSectionId = $(this).attr("id");
      }
    });

    if (currentSectionId) {
      menuLinks.removeClass("sideMenuActive");
      menuLinks.each(function () {
        if ($(this).attr("href") === "#" + currentSectionId) {
          $(this).addClass("sideMenuActive");
        }
      });
    }
  }

  // Initial call and on scroll
  activateMenuItem();
  $(window).on("scroll", activateMenuItem);

  // Optional: keep the manual click handler for style switching
  $(".sideMenuLink").on("click", function () {
    $(".sideMenuLink").removeClass("sideMenuActive");
    $(this).addClass("sideMenuActive");
  });
});









$(document).ready(function () {

$("#mobileMenu").on('click', function(){
  if ($(this).hasClass("mobile-menu-closed")) {


    $("body").addClass("body-stop");
    $("#navbar").fadeIn();
    $(this).addClass("mobile-menu-open");
    $(this).removeClass("mobile-menu-closed");
    $("#mobile-menu-img").attr("src", "../assets/img/icons/mobileMenu-close.svg");

  } else {
    $("body").removeClass("body-stop");
    $("#navbar").fadeOut();
    $(this).removeClass("mobile-menu-open");
    $(this).addClass("mobile-menu-closed");
    $("#mobile-menu-img").attr("src", "../assets/img/icons/mobileMenu.svg");
  }




})

  // alterar Grids com media Queries
  function applyGridFix() {

    if (window.matchMedia("(max-width: 599px)").matches) {
      $("#mobileMenu").show();
    } else {
      $("#mobileMenu").hide();
      

      let prevScrollPos = window.pageYOffset;
let lastShowScrollPos = prevScrollPos;
let hasUserScrolled = false;
let scrollTimeout; // inactivity timer

window.addEventListener("scroll", () => {
  const currentScrollPos = window.pageYOffset;

  if (!hasUserScrolled) {
    hasUserScrolled = true;
    lastShowScrollPos = currentScrollPos;
    prevScrollPos = currentScrollPos;
    return;
  }

  // Clear previous inactivity timer
  clearTimeout(scrollTimeout);

  if (currentScrollPos < prevScrollPos) {
    // Scrolling up → show navbar
    $("#navbar").removeClass("navbarScrollTop").addClass("navbarScrollDown");
    $(".menuItemCoat").removeClass("menuItemCoatScrollTop").addClass("menuItemCoatScrollDown");
    $(".menuItem").removeClass("menuItemTop").addClass("menuItemDown");
    $(".page-button-group").removeClass("button-group-up").addClass("button-group-down");
    $(".stickyTitle").removeClass("button-group-up").addClass("button-group-down");

    lastShowScrollPos = currentScrollPos;

  } else if (currentScrollPos - lastShowScrollPos > 100) {
    // Scrolling down fast → hide navbar
    $("#navbar").addClass("navbarScrollTop").removeClass("navbarScrollDown");
    $(".menuItemCoat").removeClass("menuItemCoatScrollDown").addClass("menuItemCoatScrollTop");
    $(".menuItem").removeClass("menuItemDown").addClass("menuItemTop");
    $(".page-button-group").removeClass("button-group-down").addClass("button-group-up");
    $(".stickyTitle").removeClass("button-group-down").addClass("button-group-up");


    // Start inactivity timer → revert after 3 seconds
    scrollTimeout = setTimeout(() => {
      $("#navbar").removeClass("navbarScrollTop").addClass("navbarScrollDown");
      $(".menuItemCoat").removeClass("menuItemCoatScrollTop").addClass("menuItemCoatScrollDown");
      $(".menuItem").removeClass("menuItemTop").addClass("menuItemDown");
      lastShowScrollPos = window.pageYOffset; // reset tracking
      $(".page-button-group").removeClass("button-group-up").addClass("button-group-down");
      $(".stickyTitle").removeClass("button-group-up").addClass("button-group-down");
    }, 1400);
  }

  prevScrollPos = currentScrollPos;
});


    }


    document.querySelectorAll('.project-image-grid').forEach((gridContainer) => {
      const images = gridContainer.querySelectorAll('.gridImage');

      if (images.length % 2 === 1) {
        images.forEach((img, i) => {
          if (i >= images.length - 3) {
            // Default width
            let width = "calc((100% - (30px * 2)) / 3)";

            // Check media query
            if (window.matchMedia("(max-width: 1074px) and (min-width: 819px)").matches || window.matchMedia("(max-width: 1279px) and (min-width: 1075px)").matches) {
              width = "calc((100% - (15px * 2)) / 3)";
            }

            img.style.width = width;
          }
        });
      }
    });
  }

  // Run once on load
  applyGridFix();

  // Re-run on resize
  window.addEventListener("resize", applyGridFix);





  // Side Menu visual and function

  const OFFSET = 100;
  const BALL_SPACING = 34.25;
  const SCROLL_LOCK_DURATION = 100;

  const menuLinks = $(".sideMenuLink");
  const ball = $("#sideMenuBarBall");

  // Select sections that are actually linked in the menu
  const sections = menuLinks.map(function () {
    return $($(this).attr("href"))[0];
  }).get();

  let scrollLock = false;

  function moveBallTo(index) {
    const topOffset = index * BALL_SPACING;
    ball.css("top", topOffset + "px");
  }

  function updateActiveSection() {
    if (scrollLock) return;

    let currentIndex = 0;
    $(sections).each(function (i, section) {
      if ($(window).scrollTop() + OFFSET >= $(section).offset().top) {
        currentIndex = i;
      }
    });

    menuLinks.removeClass("sideMenuActive");
    menuLinks.eq(currentIndex).addClass("sideMenuActive");
    moveBallTo(currentIndex);
  }

  menuLinks.on("click", function (e) {
    e.preventDefault();
    scrollLock = true;
    const target = $($(this).attr("href"));
    $("html, body").animate({
      scrollTop: target.offset().top - OFFSET
    }, SCROLL_LOCK_DURATION, function () {
      scrollLock = false;
    });
  });

  $(window).on("scroll", updateActiveSection);
  updateActiveSection();







  //SHOW / HIDE content and images on Section Buttons
  $(".sectionButton").on("click", function () {

    const btnId = $(this).attr("id");
    const [section, btn] = btnId.split("-btn");

    $(`[id^='${section}-btn'][id$='-desc']`).hide();
    $(`[id^='${section}-btn'][id$='-img']`).hide();
    $(`[id^='${section}-btn'][id$='-vid']`).hide();

    $(`#${section}-btn${btn}-desc`).show();
    $(`#${section}-btn${btn}-img`).show();
    $(`#${section}-btn${btn}-vid`).show();
    console.log(`#${section}-btn${btn}-desc`);
  });







  $(".sectionButton").on("click", function () {
    // Toggle active class and aria-selected
    $(this).siblings(".sectionButton").removeClass("sectionButtonActive").attr("aria-selected", "false");
    $(this).addClass("sectionButtonActive").attr("aria-selected", "true");

    if ($(this).hasClass("page-buttons")) {
      $(window).scrollTop(0);
    }


    // Show/hide panels
    const target = $(this).attr("aria-controls");
    if (target === "allArtwork") {
      $(".artwork-image-grid").fadeIn();

    } else {
      $(".artwork-image-grid").fadeOut();
      $("#" + target).fadeIn();

    }


    // Update URL dynamically
    const baseUrl = window.location.origin + window.location.pathname; // "/artwork"
    if (target === "allArtwork") {
      history.pushState({}, "", baseUrl); // no query string for "All"
    } else {
      history.pushState({}, "", baseUrl + "?selected=" + target); // add query for specific filter
    }
  });



  //ACTIVE to Botões de secções
  $("[id$='-btn1']").addClass("sectionButtonActive");
  $("[id$='artwork-tab-all']").addClass("sectionButtonActive");
  $("[id$='design-tab-all']").addClass("sectionButtonActive");


  $(".sectionButtonDescription").hide();
  $("#UserResearch-btn1-desc").show();


  $(".sectionImage").hide();
  $(".sectionVideo").hide();
  $("#Questionnaire-btn1-img").show();
  $("#Questionnaire-btn1-desc").show();



  $("[id$='1-img']").show();
  $("[id$='1-vid']").show();
  $("[id$='1-desc']").show();


  $(".user-scenario-description").hide();




  $("#design-tab-all").on("click", function () {
    $(".projectCard").show();
  })

  $("#design-tab-interaction").on("click", function () {
    $(".projectCard").hide();
    $(".interactionCard").show();
  })

  $("#design-tab-branding").on("click", function () {
    $(".projectCard").hide();
    $(".brandingCard").show();
  })



  //   USER SCENARIOS ————————— BUTTONS
  $(".user-scenario-title").on("click", function () {
    const id = $(this).attr("id").match(/\d+/)[0];
    const $description = $("#user-scenario-" + id + "-description");
    const $button = $(this);
    const $arrow = $button.find(".user-scenario-arrow");
    const $line = $button.find(".user-scenario-line");
    const isExpanded = $description.is(":visible");

    // Collapse all
    $(".user-scenario-description").slideUp();
    $(".user-scenario-title").attr("aria-expanded", "false").removeClass("sectionButtonActive");
    $(".user-scenario-arrow").removeClass("rotate").attr("src", "../assets/img/icons/arrowDown.svg");
    $(".user-scenario-line").css("background-color", "white").css("height", "1px");

    // Expand selected
    if (!isExpanded) {
      $description.slideDown();
      $button.attr("aria-expanded", "true").addClass("sectionButtonActive");
      $arrow.addClass("rotate").attr("src", "../assets/img/icons/arrowDownActive.svg");
      $line.css("background-color", "black").css("height", "2px");
    }
  });



  // BRANDING e INTERACTION no footer
	var urlParams = new URLSearchParams(window.location.search);
	var selectedButton = urlParams.get('selected');
	// $(".categoryButton").removeClass("categoryActive");
	$(".ecosystemContent").hide();

	if (selectedButton === "interactionDesign") {
    $("#design-tab-all").removeClass("sectionButtonActive");
		$("#design-tab-interaction").addClass("sectionButtonActive");
		$(".projectCard").hide();
    $(".interactionCard").show();
    
	} else if (selectedButton === "brandingDesign") {
    $("#design-tab-all").removeClass("sectionButtonActive");
		$("#design-tab-branding").addClass("sectionButtonActive");
		$(".projectCard").hide();
    $(".brandingCard").show();
	}

  

});






if (window.matchMedia("(min-width: 600px)").matches) {

}







document.addEventListener("DOMContentLoaded", function () {
  const tabs = document.querySelectorAll(".sectionButton");
  const panels = document.querySelectorAll("[role='tabpanel']");

  // Function to show the correct panel
  function showPanel(filter) {
    tabs.forEach(tab => {
      const isActive = tab.dataset.filter === filter;
      tab.setAttribute("aria-selected", isActive);
    });

    panels.forEach(panel => {
      if (filter === "all") {
        panel.hidden = false;
      } else {
        panel.hidden = panel.id !== filter;
      }
    });
  }

  // Add dataset.filter attributes based on the aria-controls
  tabs.forEach(tab => {
    tab.dataset.filter = tab.getAttribute("aria-controls");
  });

  // Handle click on tabs
  tabs.forEach(tab => {
    tab.addEventListener("click", () => {
      const filter = tab.dataset.filter;
      const newUrl = new URL(window.location);
      newUrl.searchParams.set("selected", filter);
      history.pushState({}, "", newUrl); // update URL without reload
      showPanel(filter);
    });
  });

  // On page load: read query parameter
  const params = new URLSearchParams(window.location.search);
  const selected = params.get("selected") || "all";
  showPanel(selected);
});