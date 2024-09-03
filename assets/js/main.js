(function ($) {
    "use strict";

    /*:::::::::::::::::::::::::::::::::::
            Navbar Area
    :::::::::::::::::::::::::::::::::::*/

     // Navbar Sticky
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 1) {
            $(".navbar").addClass("bg-primari");
        } else {
            $(".navbar").removeClass("bg-primari");
        }
    });


    //Smoth Scroll
    $(function () {
        $('.nav-link, .smoth-scroll').on('click', function (event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 0
            }, 1000);
            event.preventDefault();
        });
    });

    /*==========================
        Hero Area Slider
    ============================*/

    $('.hero-area-slids').owlCarousel({
        items: 1,
        loop: true,
        nav: false,
        doots: false,
        autoplay: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn'

    });
    $('.hero-cursol').owlCarousel({
        items: 1,
        loop: true,
        nav: false,
        doots: false,
        autoplay: true,
        animateOut: 'fadeOutRight',
        animateIn: 'fadeIn'

    });
    //Wow Animation
    new WOW().init();
    /*==========================
        Hero Title typer
    ============================*/
    var element = $('.typed');

    $(function () {
        element.typed({
            strings: ["People's Struggle Assosiaton vision", "Graphic Designer."],
            typeSpeed: 100,
            loop: true,
            autoplay: true,
        });
    });
    

    /*::::::::::::::::::::::::::::::::::::
       Portfolio Section
    ::::::::::::::::::::::::::::::::::::*/

    lightbox.option({
        'imageFadeDuration': 800,
        'resizeDuration': 500,
        'wrapAround': true
    });

    $('.portfolio-area').mixItUp();


    /*::::::::::::::::::::::::::::::::::::
       Testimonial Section
    ::::::::::::::::::::::::::::::::::::*/

    $('.testimonials').owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        nav: true,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        dots: false
    });


    /*::::::::::::::::::::::::::::::::::::
       Contact Area 
    ::::::::::::::::::::::::::::::::::::*/
    var form = $('#contact-form');

    var formMessages = $('.form-message');
    $(form).submit(function (e) {
        e.preventDefault();
        var formData = $(form).serialize();
        $.ajax({
                type: 'POST',
                url: $(form).attr('action'),
                data: formData
            })
            .done(function (response) {
                $(formMessages).removeClass('error');
                $(formMessages).addClass('success');
                $(formMessages).text(response);

                $('#contact-form input,#contact-form textarea').val('');
            })
            .fail(function (data) {
                $(formMessages).removeClass('success');
                $(formMessages).addClass('error');

                if (data.responseText !== '') {
                    $(formMessages).text(data.responseText);
                } else {
                    $(formMessages).text('Oops! An error occured and your message could not be sent.');
                }
            });
    });
    
    
    /*::::::::::::::::::::::::::::::::::::
    Preloader
    ::::::::::::::::::::::::::::::::::::*/
    $(window).on('load', function () {
        $('#preloader').fadeOut();
    });

}(jQuery));


var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    effect: "fade",
    centeredSlides: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });



// text overflow
//   const truncateElements = document.querySelectorAll('.truncate');

// truncateElements.forEach((element) => {
//   const text = element.textContent;
//   const words = text.split(' ');
//   const maxWords = 50; // Change this to the number of words you want to display

//   if (words.length > maxWords) {
//     const truncatedText = words.slice(0, maxWords).join(' ') + '...';
//     element.textContent = truncatedText;
//   }
// });


  
  $(function() {
    $("#notify-close").on("click", function() {
      $("#notify").toggleClass("d-none");
    });
  
   
  });

  // 1. This code loads the IFrame Player API code asynchronously.
  document.addEventListener('DOMContentLoaded', function() {
    const player = document.getElementById('player');
    const thumbnailContainers = document.querySelectorAll('.thumbnail-container');

    // Function to load video into the player
    function loadVideo(videoID) {
        if (!videoID) return;
        
        const iframe = document.createElement('iframe');
        iframe.src = `https://www.youtube.com/embed/${videoID}?autoplay=1`;
        iframe.width = '100%';
        iframe.height = '315';
        iframe.allow = 'accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture';
        iframe.allowFullscreen = true;
        player.innerHTML = ''; // Clear existing content
        player.appendChild(iframe);
    }

    // Display the first video by default
    if (thumbnailContainers.length > 0) {
        const firstVideoID = thumbnailContainers[0].getAttribute('data-video');
        loadVideo(firstVideoID);
    }

    // Event listener for video thumbnail clicks
    document.querySelectorAll('.ytBtn').forEach(button => {
        button.addEventListener('click', function() {
            const videoID = this.getAttribute('data-video');
            loadVideo(videoID);
        });
    });
});
document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll('.thumbnail-container').forEach(function(container) {
        // Get the video ID from the data-video attribute
        var videoId = container.getAttribute('data-video');
        console.log("Retrieved video ID:", videoId); // Debugging line
        
        if (videoId) {
            // Construct the thumbnail URL
            var thumbnailUrl = `https://img.youtube.com/vi/${videoId}/hqdefault.jpg`;
            console.log("Thumbnail URL:", thumbnailUrl); // Debugging line
            
            // Set the background image style
            container.style.backgroundImage = `url(${thumbnailUrl})`;
            container.style.backgroundSize = 'cover'; // Ensure the image covers the container
            container.style.backgroundPosition = 'center'; // Center the image
            container.style.width = '100%'; // Set width if necessary
            container.style.height = '200'; // Set height if necessary
            container.style.display = 'flex'; // Flexbox to center content
            container.style.alignItems = 'center'; // Center vertically
            container.style.justifyContent = 'center'; // Center horizontally
        } else {
            console.error('Video ID not found in data-video attribute');
        }
    });
});


function loadNews(x) {
    var page = x;
    // alert(x);

    var f = new FormData();
    f.append("n", page);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 & request.status == 200) {
            var response = request.responseText;
            // alert(response);
            document.getElementById("nid").innerHTML = response;
        }
    }

    request.open("POST", "loadNewsProcess.php", true);
    request.send(f);
}
function loadNewsSi(s) {
    var page = s;
    // alert(x);

    var f = new FormData();
    f.append("n", page);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 & request.status == 200) {
            var response = request.responseText;
            // alert(response);
            document.getElementById("snid").innerHTML = response;
        }
    }

    request.open("POST", "loadNewsSiProcess.php", true);
    request.send(f);
}
function loadNewsTa(t) {
    var page = t;
    // alert(x);

    var f = new FormData();
    f.append("n", page);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 & request.status == 200) {
            var response = request.responseText;
            // alert(response);
            document.getElementById("tnid").innerHTML = response;
        }
    }

    request.open("POST", "loadNewsTaProcess.php", true);
    request.send(f);
}

function loadGallery(x) {
    var page = x;
    // alert(x);

    var f = new FormData();
    f.append("g", page);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 & request.status == 200) {
            var response = request.responseText;
            // alert(response);
            document.getElementById("gid").innerHTML = response;
        }
    }

    request.open("POST", "loadGalleryProcess.php", true);
    request.send(f);
}


function loadDocument(x) {
    var page = x;
    // alert(x);

    var f = new FormData();
    f.append("doc", page);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 & request.status == 200) {
            var response = request.responseText;
            // alert(response);
            document.getElementById("docid").innerHTML = response;
        }
    }

    request.open("POST", "loadDocument.php", true);
    request.send(f);
}
function loadDocumentSi(s) {
    var page = s;
    // alert(x);

    var f = new FormData();
    f.append("doc", page);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 & request.status == 200) {
            var response = request.responseText;
            // alert(response);
            document.getElementById("docSid").innerHTML = response;
        }
    }

    request.open("POST", "loadDocumentSi.php", true);
    request.send(f);
}
function loadDocumentTa(t) {
    var page = t;
    // alert(x);

    var f = new FormData();
    f.append("doc", page);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 & request.status == 200) {
            var response = request.responseText;
            // alert(response);
            document.getElementById("docTid").innerHTML = response;
        }
    }

    request.open("POST", "loadDocumentTa.php", true);
    request.send(f);
}
function searchNews(x) {
    var page = x;
    var news = document.getElementById("sNews");
  
    // alert(page);
    // alert(news.value);
  
    var f = new FormData();
    f.append("n", news.value);
    f.append("pg", page);
    f.append("type", "newsSearch");
  
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
      if ((request.readyState == 4) & (request.status == 200)) {
        var response = request.responseText;
        // alert(response);
        document.getElementById("nid").innerHTML = response;
      }
    };
  
    request.open("POST", "searchProcess.php", true);
    request.send(f);
  }
  function searchDoc(x) {
    var page = x;
    var doc = document.getElementById("sdoc");
     // alert(page);
    // alert(doc.value);
  
    var f = new FormData();
    f.append("d", doc.value);
    f.append("pg", page);
    f.append("type", "docSearch");
  
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
      if ((request.readyState == 4) & (request.status == 200)) {
        var response = request.responseText;
        // alert(response);
        document.getElementById("docid").innerHTML = response;
      }
    };
  
    request.open("POST", "searchProcess.php", true);
    request.send(f);
  }
  function searchDocTa(x) {
    var page = x;
    var doc = document.getElementById("Tadoc");
     // alert(page);
    // alert(doc.value);
  
    var f = new FormData();
    f.append("d", doc.value);
    f.append("pg", page);
    f.append("type", "docSearch");
  
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
      if ((request.readyState == 4) & (request.status == 200)) {
        var response = request.responseText;
        // alert(response);
        document.getElementById("docTid").innerHTML = response;
      }
    };
  
    request.open("POST", "searchProcessTa.php", true);
    request.send(f);
  }
  function searchNewsTa(x) {
    var page = x;
    var news = document.getElementById("TaNews");
  
    // alert(page);
    // alert(news.value);
  
    var f = new FormData();
    f.append("n", news.value);
    f.append("pg", page);
    f.append("type", "newsSearch");
  
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
      if ((request.readyState == 4) & (request.status == 200)) {
        var response = request.responseText;
        // alert(response);
        document.getElementById("tnid").innerHTML = response;
      }
    };
  
    request.open("POST", "searchProcessTa.php", true);
    request.send(f);
  }
  function searchNewsSi(x) {
    var page = x;
    var news = document.getElementById("sinnews");
  
    // alert(page);
    // alert(news.value);
  
    var f = new FormData();
    f.append("n", news.value);
    f.append("pg", page);
    f.append("type", "newsSearch");
  
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
      if ((request.readyState == 4) & (request.status == 200)) {
        var response = request.responseText;
        // alert(response);
        document.getElementById("snid").innerHTML = response;
      }
    };
  
    request.open("POST", "searchProcessSi.php", true);
    request.send(f);
  }
  function searchDocTa(x) {
    var page = x;
    var doc = document.getElementById("sindoc");
     // alert(page);
    // alert(doc.value);
  
    var f = new FormData();
    f.append("d", doc.value);
    f.append("pg", page);
    f.append("type", "docSearch");
  
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
      if ((request.readyState == 4) & (request.status == 200)) {
        var response = request.responseText;
        // alert(response);
        document.getElementById("docSid").innerHTML = response;
      }
    };
  
    request.open("POST", "searchProcessSi.php", true);
    request.send(f);
  }

  function sendEmail() {
    var name = document.getElementById("name");
    var email = document.getElementById("email");
    var subject = document.getElementById("subject");
    var message = document.getElementById("message");
    var loading = document.getElementById("loading");
    var sendbtn = document.getElementById("sendbtn");
  
    var form = new FormData();
    form.append("name", name.value);
    form.append("email", email.value);
    form.append("subject", subject.value);
    form.append("message",message.value);
  
    var r = new XMLHttpRequest();
  
    r.onreadystatechange = function () {
      if (r.readyState == 4) {
        loading.style.display = "none"; // Hide loading element
        var t = r.responseText;
        if(t == "success"){
            alert("Email sent successfully");
            sendbtn.style.display = "block"; 
        }else{
            alert(t);
            sendbtn.style.display = "block"; 

        }
        
      }
    };
    loading.style.display = "block"; // Show loading element
    sendbtn.style.display = "none"; // Hide sending element
    r.open("POST", "emailSender.php", true);
    r.send(form);
    
  }
