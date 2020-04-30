
    
    
    <!--footer starts...............-->
    <footer>
    	<div class="row">
        	<div class="container-fluid">
            	<div class="col-md-4">
                	 <div class="menu-logo">
                        <a href="#">
                            <p>just-white</p>
                        </a>	
                      </div>
                </div>
                <!--col-md-4 ends....-->
                <div class="col-md-8">
                	<div class="footer-menu">
                        <ul>
                                    <li><a href="#" target="_blank">branding & design</a></li>
                                    <li><a href="#" target="_blank">instagram</a></li>
                                    <li><a href="#" target="_blank">hello@just-white.com.au</a></li>
                        </ul>	        
                    </div>
                </div>
                <!--col-md-8 ends....-->
            </div>
            <!-- container-fluid ends.....-->
        </div>
        <!--row ends....-->	
    </footer>





<!-- **** JS(Java Script) FILES****** --> 
<!-- Lib -->
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-1.10.1.min.js"></script>
<!-- BOOTSTRAP js -->
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.js"></script>
<!-- Menu JS -->
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/menu-responsive.js"></script>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/uikit.js"></script>

<script>
$(window).scroll(function() {
    if ($(this).scrollTop() > 677){  
        $('.menu-area').addClass('sticky');
		$('.menu-logo').addClass('margin-sticky');
    }
	if ($(this).scrollTop() < 677){  
        $('.menu-area').removeClass('sticky');
    }
	
});
</script>








<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/jquery.fittext.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/jquery.lettering.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/http://yandex.st/highlightjs/7.3/highlight.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/jquery.textillate.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
<script>
  $(function (){
    var log = function (msg) {
      return function () {
        if (console) console.log(msg);
      }
    }
    $('code').each(function () {
      var $this = $(this);
      $this.text($this.html());
    })

    var animateClasses = 'flash bounce shake tada swing wobble pulse flip flipInX flipOutX flipInY flipOutY fadeIn fadeInUp fadeInDown fadeInLeft fadeInRight fadeInUpBig fadeInDownBig fadeInLeftBig fadeInRightBig fadeOut fadeOutUp fadeOutDown fadeOutLeft fadeOutRight fadeOutUpBig fadeOutDownBig fadeOutLeftBig fadeOutRightBig bounceIn bounceInDown bounceInUp bounceInLeft bounceInRight bounceOut bounceOutDown bounceOutUp bounceOutLeft bounceOutRight rotateIn rotateInDownLeft rotateInDownRight rotateInUpLeft rotateInUpRight rotateOut rotateOutDownLeft rotateOutDownRight rotateOutUpLeft rotateOutUpRight hinge rollIn rollOut';

    var $form = $('.playground form')
      , $viewport = $('.playground .viewport');

    var getFormData = function () {
      var data = { 
        loop: true, 
        in: { callback: log('in callback called.') }, 
        out: { callback: log('out callback called.') }
      };
      
      $form.find('[data-key="effect"]').each(function () {
        var $this = $(this)
          , key = $this.data('key')
          , type = $this.data('type');

          data[type][key] = $this.val();
      });

      $form.find('[data-key="type"]').each(function () {
        var $this = $(this)
          , key = $this.data('key')
          , type = $this.data('type')
          , val = $this.val();

          data[type].shuffle = (val === 'shuffle');
          data[type].reverse = (val === 'reverse');
          data[type].sync = (val === 'sync');
      });

      return data;
    };

    $.each(animateClasses.split(' '), function (i, value) {
      var type = '[data-type]'
        , option = '<option value="' + value + '">' + value + '</option>';

      if (/Out/.test(value) || value === 'hinge') {
        type = '[data-type="out"]';
      } else if (/In/.test(value)) {
        type = '[data-type="in"]';
      } 

      if (type) {
        $form.find('[data-key="effect"]' + type).append(option);        
      }
    });

    $form.find('[data-key="effect"][data-type="in"]').val('fadeInLeftBig');
    $form.find('[data-key="effect"][data-type="out"]').val('hinge');

    $('.jumbotron h1')
      .fitText(0.5)
      .textillate({ in: { effect: 'flipInY' }});
    
    $('.jumbotron p')
      .fitText(3.2, { maxFontSize: 18 })
      .textillate({ initialDelay: 1000, in: { delay: 3, shuffle: true } });

    setTimeout(function () {
        $('.fade').addClass('in');
    }, 250);

    setTimeout(function () {
      $('h1.glow').removeClass('in');
    }, 2000);

    var $tlt = $viewport.find('.tlt')
      .on('start.tlt', log('start.tlt triggered.'))
      .on('inAnimationBegin.tlt', log('inAnimationBegin.tlt triggered.'))
      .on('inAnimationEnd.tlt', log('inAnimationEnd.tlt triggered.'))
      .on('outAnimationBegin.tlt', log('outAnimationBegin.tlt triggered.'))
      .on('outAnimationEnd.tlt', log('outAnimationEnd.tlt triggered.'))
      .on('end.tlt', log('end.tlt'));
    
    $form.on('change', function () {
      var obj = getFormData();
      $tlt.textillate(obj);
    }).trigger('change');

  });

	</script>
  <script>
    window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return t;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));
  </script>


</body>
</html>