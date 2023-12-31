"use strict";

// $(document).ready(function() {
//     $('.dropdown').hover(function() {
//       $(this).addClass('show');
//       $(this).find('.dropdown-menu').addClass('show');
//     }, function() {
//       $(this).removeClass('show');
//       $(this).find('.dropdown-menu').removeClass('show');
//     });
// });


// Add Slider functionality to the #testimonials section in the home page.
var testimonialsSlider = $("#testimonials-slider","#testimonials");
testimonialsSlider.slick({
    dots: false,
    arrows: true,
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1
});


// Add Slider functionality to the testimonials in the "Sign in" and "Sign out" pages.
var miniTestimonialsSlider = $(".mini-testimonials-slider","#form-section");
miniTestimonialsSlider.slick({
    dots: true,
    arrows: false,
    infinite: false,
    autoplay: true,
    speed: 200
});


// Add Slider functionality to the info-slider in the about page.
var infoSlider = $(".info-slider","#page-head");
infoSlider.slick({
    dots: true,
    arrows: false,
    infinite: false,
    autoplay: true,
    speed: 200
});
$(window).on("load", function() {
    // Adding animation to the #main-slider
    $('.slick-active > div:nth-child(1)','#main-slider').addClass("animated");
    $('.slick-active > div:nth-child(2)','#main-slider').addClass("animated animation-delay1");
    // Counter slider functions in "CUSTOM HOSTING PLAN" section on the homepage
    var cPlan = $('#c-plan');
    cPlan.slider({
        tooltip: 'always'
    });
    cPlan.on("slide", function(e) {
        $('.slider .tooltip-up','#custom-plan').text(e.value/20);
        $('.price','#custom-plan').text($(this).data("currency") + e.value/20);
        $('.feature1 span','#custom-plan').text(e.value);
        $('.feature2 span','#custom-plan').text(e.value*98);
    });
    cPlan.value = cPlan.data("slider-value");
    $('.slider .tooltip','#custom-plan').append('<div class="tooltip-up"></div>');
    $('.slider .tooltip-up','#custom-plan').text(cPlan.value/20);
    $('.slider .tooltip-inner','#custom-plan').attr("data-unit",cPlan.data("unit"));
    $('.slider .tooltip-up','#custom-plan').attr("data-currency",cPlan.data("currency"));
    
    $('.price','#custom-plan').text(cPlan.data("currency") + cPlan.value/20);
    $('.feature1 span','#custom-plan').text(cPlan.value);
    $('.feature2 span','#custom-plan').text(cPlan.value*98);

    // Features Section click function
    var featureIconHolder = $(".feature-icon-holder", "#features-links-holder");
    
    featureIconHolder.on("click",function(){
        featureIconHolder.removeClass("opened");
        $(this).addClass("opened");
        $(".show-details","#features-holder").removeClass("show-details");
        $(".feature-d"+$(this).data("id"), "#features-holder").addClass("show-details");
    });
    
    // Fix #features-holder height in features section
    var featuresHolder = $("#features-holder");
    var featuresLinksHolder = $("#features-links-holder");
    var featureBox = $(".show-details","#features-holder");
    
    featuresHolder.css("height",featureBox.height()+120);
    // featuresLinksHolder.css("height",featureBox.height()+120);

    // Fix #features-holder height in features section
    $(window).on("resize",function() {
        featuresHolder.css("height",featureBox.height()+150);
        // featuresLinksHolder.css("height",featureBox.height()+120);
        return false;
    });
    
    // Apps Section hover function
    var appHolder = $(".app-icon-holder", "#apps");
    
    appHolder.on("mouseover",function(){
        appHolder.removeClass("opened");
        $(this).addClass("opened");
        $(".show-details", "#apps").removeClass("show-details");
        $(".app-details"+$(this).data("id"), "#apps").addClass("show-details");
    });
    
    // More Info Section hover function
    var infoLink = $(".info-link", "#more-info");
    
    infoLink.on("mouseover",function(){
        infoLink.removeClass("opened");
        $(this).addClass("opened");
        $(".show-details", "#more-info").removeClass("show-details");
        $(".info-d"+$(this).data("id"), "#more-info").addClass("show-details");
    });
    
    // Servers Marker Location in our servers page
    var locationsList = [["California",97,48,"r"],["Costa Rika",212,31,"l"],["Vancouver",136,161,"r"],["Brazil",303,233,"r"],["Alexandria",149,349,"l"],["Dubai",174,469,"l"],["Delhi",204,605,"r"],["Munech",91,417,"r"],["Barcelona",112,279,"l"],["Moscow",41,554,"r"],["Hong Kong",151,663,"r"],["Melborne",356,688,"l"],["Pulau Ujong",265,578,"l"]];
    
    var serversLocationHolder = $('.servers-location-holder','#serversmap.st');
    for(var i=0;i<=locationsList.length-1;i++){
        var sMarkerDir = locationsList[i][3];
        var leftText = "";
        var rightText = "";
        if(sMarkerDir=="r"){
            leftText = "";
            rightText = locationsList[i][0];
        }else if(sMarkerDir=="l"){
            leftText = locationsList[i][0];
            rightText = "";
        }
        serversLocationHolder.append('<div class="server-marker" style="top:'+locationsList[i][1]+'px;left:'+locationsList[i][2]+'px;"><span class="left-text">'+leftText+'</span><span class="marker-icon"></span><span class="right-text">'+rightText+'</span></div>');
    }
    
    // var winWidth = $(window).width(); 
    // if (winWidth <= 768) {
    //     $('.dropdown > a, .support-dropdown > a').on('click', function(e){
    //         e.preventDefault();
    //         $(this).siblings('.dropdown-menu').toggleClass('active');
    //     })
    // }
    // let sliderWrap =document.querySelector('.slider-wrap');
    // let slider =document.querySelector('.slider');
    // let cloneswidth;
    // let sliderwidth;
    // let clones=[];
    // let disableScroll =false;
    // let scrollPos;
    // let items = [...document.querySelectorforAll('.slider-item')];
    // let images = [...document.querySelectorforAll('.img-div')];
    // images.forEach((image,flow)=>{
    //     image.style.backgroundImage = `url(../model/img/${flow+1}.jpeg)`
    // })

});

//form js
function validateform() {
    var returnval = true;
    var number = document.forms['myform']["number"].value;
    if ((number.length <script ) || (number.length > 20) || (number.contain == " ")) {
        document.getElementById("error").innerHTML = " PHONE NUMBER IS INVALID    "
        returnval = false;

    }
    return returnval;
}
$(document).ready(function () {
    $('#Message').bind("paste", function (e) {
        e.preventDefault();
    });
});



//faq js
    let question = document.querySelectorAll(".question");

    question.forEach(question => {
        question.addEventListener("click", event => {
            const active = document.querySelector(".question.active");
            if(active && active !== question ) {
            active.classList.toggle("active");
            active.nextElementSibling.style.maxHeight = 0;
            }
            question.classList.toggle("active");
            const answer = question.nextElementSibling;
            if(question.classList.contains("active")){
            answer.style.maxHeight = answer.scrollHeight + "px";
            } else {
            answer.style.maxHeight = 0;
            }
        })
    })
//end of faq js