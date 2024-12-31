<script>
var reviewswiper = new Swiper(".reviewSwiper", {
    slidesPerView: "auto",
    spaceBetween: 30,
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },
});



var banneradsswiper = new Swiper(".banneradsSwiper", {
    slidesPerView: "auto",
    spaceBetween: 30,
    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
    },
    loop: true,
});

var reelswiper = new Swiper(".reelSwiper", {
    slidesPerView: "auto",
    spaceBetween: 30,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
});

var videoswiper = new Swiper(".videoSwiper", {
    slidesPerView: "auto",
    centeredSlides: true,
    spaceBetween: 30,
    loop: true,
    navigation: {
        nextEl: ".videoSwiper-button-next",
        prevEl: ".videoSwiper-button-prev",
    },
});


var influencerswiper = new Swiper(".influencerSwiper", {
    slidesPerView: "auto",
    spaceBetween: 10,
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },
});


reelswiper.on('click', (swiper) => {
    const clickedIndex = swiper.clickedIndex;

    if (clickedIndex !== undefined) {
        // Make Swiper 2 visible and set active slide

        $("#videoSwiper").fadeIn();
        videoswiper.slideTo(clickedIndex);
    }
});

influencerswiper.on('click', (swiper) => {
    const clickedIndex = swiper.clickedIndex;

    if (clickedIndex !== undefined) {
        // Make Swiper 2 visible and set active slide

        $("#videoSwiper").fadeIn();
        videoswiper.slideTo(clickedIndex);
    }
});


var reelswiper = new Swiper(".cartSwiper", {
    slidesPerView: "auto",
    spaceBetween: 20,
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },
});

const singlepSwiper = new Swiper(".singlepSwiper", {
    autoplay: {
        delay: 4000,
    },
    slidesPerView: 1,
    // If we need pagination
    pagination: {
        el: ".singlepPagination",
    },
});
</script>

<script>
$(document).ready(function() {
    // Function to stop all YouTube videos in the popup
    function stopYouTubeVideos() {
        $('#videoSwiper iframe.youtube-video').each(function() {
            const $iframe = $(this);
            const src = $iframe.attr('src'); // Get the current source
            $iframe.attr('src', ''); // Temporarily clear the src to stop the video
            $iframe.attr('src', src); // Reset the src to its original value
        });
    }

    // Event listener to close the popup
    $('#close_reels').on('click', function() {
        $("#videoSwiper").fadeOut();
        stopYouTubeVideos(); // Stop all videos
    });
});
</script>

<!-- for product-->
<script>
$(".options a").click(function(e) {
    e.preventDefault();
    $tab = $(this).attr("href");
    $(this).addClass("active");
    $(this).siblings().removeClass("active");
    $(".item-wrapper").not($tab).hide();
    $($tab).fadeIn();
});
</script>



<script src="js/intlTelInput.js"></script>
<link rel="stylesheet" href="css/intlTelInput.css?version=1.2.1">
<script>
// get the country data from the plugin	
var countryData = window.intlTelInputGlobals.getCountryData(),
    mobileinput = document.querySelector("#mobileno_code"),
    dialcodeinput = $("#dialcode"),
    countrycodeinput = $("#countrycode");

var iti = window.intlTelInput(mobileinput, {
    autoHideDialCode: false,
    initialCountry: "my",
    separateDialCode: true,
    utilsScript: "js/build/utils.js",
    preferredCountries: ["My"],
});
</script>

<script>
$(function() {
    $("#datepicker").datepicker({
        changeMonth: true,
        changeYear: true,
        yearRange: "1920:2030",
        dateFormat: 'mm/dd/yy'
    });
});
</script>


<!-- popup script -->
<script>
$("#selectVoucher").click(function(e) {
    e.preventDefault();
    $("#voucher-popup").addClass("active");
});

$("#addaddress").click(function(e) {
    e.preventDefault();
    $("#address-popup").addClass("active");
});

$(".default-popup .closethis").click(function(e) {
    e.preventDefault();
    $(".default-popup").removeClass("active");
});


$(".closepopup").click(function(e) {
    $(".popup-module").fadeOut();
});
</script>
<!-- popup script -->

<!-- mobile-->
<script>
$(".sidemenu-mobile").click(function(e) {
    $(".sidemenu-cover").slideToggle(200);
});

$("#mobile-menu").click(function(e) {
    $(".mobile-nav").toggleClass("slide");
});
</script>