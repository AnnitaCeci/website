// When the DOM is ready, run this function





$('#quote-carousel').on('slide.bs.carousel', function (e) {

  
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 4;
    var totalItems = $('.carousel-item').length;
    
    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('.carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
                $('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});


/// When the DOM is ready, run this function

  //Set the carousel options


$(function(){
  $("#nav-placeholder").load("assets/navbar.html");
});

   $(function(){
  $("#foot-placeholder").load("assets/footer.html");
});
 function myFunction() {
       var x = document.getElementById("myTopnav");
       if (x.className === "topnav") {
           x.className += " responsive";
       } else {
           x.className = "topnav";
       }
   }

  $(document).ready(function() {
/* show lightbox when clicking a thumbnail */
    $('a.thumb').click(function(event){
      event.preventDefault();
      var content = $('.modal-body');
      content.empty();
        var title = $(this).attr("title");
        $('.modal-title').html(title);        
        content.html($(this).html());
        $(".modal-profile").modal({show:true});
    });
      $('#quote-carousel').carousel({
    pause: true,
    interval: 4000,
  });

  
 
  });