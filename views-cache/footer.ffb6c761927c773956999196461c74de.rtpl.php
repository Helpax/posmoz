<?php if(!class_exists('Rain\Tpl')){exit;}?><footer>
	<div class="container-fluid" id="rodape">
	<div class="row">
	<div class="container">
	<h4 align="center">SITE & TODOS DIREITOS RESERVADOS</h4>
	</div>
	</div>
	</div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="res/site/js/bootstrap.min.js"></script>

 <script>
   
   $('a[href^="#"]').on('click', function(event) {

    var target = $(this.getAttribute('href'));

    if( target.length ) {
        event.preventDefault();
        $('html, body').stop().animate({
            scrollTop: target.offset().top
        }, 1000);
    }

});
   
 </script>

 <script type="text/javascript" src="http://suporte.mozcoach.com/php/app.php?widget-init.js"></script>

</body>

</html>