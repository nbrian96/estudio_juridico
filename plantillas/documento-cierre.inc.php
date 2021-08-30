
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

<script>
    (function($) {
        $(document).ready(function() {
          $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
            event.preventDefault();
            event.stopPropagation();
            $(this).parent().siblings().removeClass('open');
            $(this).parent().toggleClass('open');
          });
        });
      })(jQuery);   
</script>

<script>

    $(document).ready(function(){

            $('#myBtn').click(function(){
                    $('body, html').animate({
                            scrollTop: '0px'
                    }, 300);
            });

            $(window).scroll(function(){
                    if( $(this).scrollTop() > 0 ){
                            $('#myBtn').slideDown(350);
                    } else {
                            $('#myBtn').slideUp(350);
                    }
            });

    });
</script>