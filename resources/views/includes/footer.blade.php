<script>
      $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
      });
   </script>
   <script src="{{ asset('js/aos.js') }}"></script> 
   <script>
      AOS.init();
   </script>
   <script src="{{ asset('js/shrink.js') }}"></script> 
   <script>
      var btn = $('#button');
      
      $(window).scroll(function() {
       if ($(window).scrollTop() > 300) {
         btn.addClass('show');
       } else {
         btn.removeClass('show');
       }
      });
      
      btn.on('click', function(e) {
       e.preventDefault();
       $('html, body').animate({scrollTop:0}, '300');
      });
      
      
        
   </script>
