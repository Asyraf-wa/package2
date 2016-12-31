<style>
#myCarousel .nav a small
{
    display: block;
}
#myCarousel .nav
{
    background: #eee;
}
.nav-justified > li > a
{
    border-radius: 0px;
}
.nav-pills>li[data-slide-to="0"].active a { background-color: #2780e3; }
.nav-pills>li[data-slide-to="1"].active a { background-color: #e67e22; }
.nav-pills>li[data-slide-to="2"].active a { background-color: #16a085; }
.nav-pills>li[data-slide-to="3"].active a { background-color: #8e44ad; }
</style>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <?php echo $this->Html->image('banner_a.jpg', array('alt' => 'Banner A')); ?>
                <div class="carousel-caption">
                   
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem
                        ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                </div>
            </div>
            <!-- End Item -->
            <div class="item">
                <img src="http://placehold.it/1200x400/e67e22/ffffff&text=Projects">
                <div class="carousel-caption">
                    <h3>
                        Headline</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem
                        ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                </div>
            </div>
            <!-- End Item -->
            <div class="item">
                <img src="http://placehold.it/1200x400/2980b9/ffffff&text=Portfolio">
                <div class="carousel-caption">
                    <h3>
                        Headline</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem
                        ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                </div>
            </div>
            <!-- End Item -->
            <div class="item">
                <img src="http://placehold.it/1200x400/8e44ad/ffffff&text=Services">
                <div class="carousel-caption">
                    <h3>
                        Headline</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem
                        ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                </div>
            </div>
            <!-- End Item -->
        </div>
        <!-- End Carousel Inner -->
        <ul class="nav nav-pills nav-justified">
            <li data-target="#myCarousel" data-slide-to="0" class="active"><a href="#">About<small>Lorem
                ipsum dolor sit</small></a></li>
            <li data-target="#myCarousel" data-slide-to="1"><a href="#">Projects<small>Lorem ipsum
                dolor sit</small></a></li>
            <li data-target="#myCarousel" data-slide-to="2"><a href="#">Portfolio<small>Lorem ipsum
                dolor sit</small></a></li>
            <li data-target="#myCarousel" data-slide-to="3"><a href="#">Services<small>Lorem ipsum
                dolor sit</small></a></li>
        </ul>
    </div>
    <!-- End Carousel -->

<script>
$(document).ready( function() {
    $('#myCarousel').carousel({
    	interval:   4000
	});
	
	var clickEvent = false;
	$('#myCarousel').on('click', '.nav a', function() {
			clickEvent = true;
			$('.nav li').removeClass('active');
			$(this).parent().addClass('active');		
	}).on('slid.bs.carousel', function(e) {
		if(!clickEvent) {
			var count = $('.nav').children().length -1;
			var current = $('.nav li.active');
			current.removeClass('active').next().addClass('active');
			var id = parseInt(current.data('slide-to'));
			if(count == id) {
				$('.nav li').first().addClass('active');	
			}
		}
		clickEvent = false;
	});
});
</script>



<br>
<div class="row">
  <div class="col-md-8">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <?php echo $this->Html->image('banner1.jpg', array('alt' => 'Banner1', 'width'=>'750px')); ?>
      <div class="carousel-caption">
        A Product of Code The Pixel by Infomatic Troopers
      </div>
    </div>
    <div class="item">
      <?php echo $this->Html->image('b2.jpg', array('alt' => 'Banner2', 'width'=>'750px')); ?>
      <div class="carousel-caption">
        Banner 2
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>  
  </div>
  <div class="col-md-4">
  <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">PACKAGE II by CODE THE PIXEL</h3><br>
	<p style="text-align:justify">
	Based on CakePHP framework, Package II has been introduced by Informatic Trooper || Code The Pixel with few integration of useful plugins, Jquery script and Bootstrap theme to assist rapid development for web-based application. Taking the advantages of Cosmo Bootstrap theme, Package II are responsive-ready. This package is released under MIT license 2016.</p>
  </div>
</div>
  </div>
</div>

<div class="well well-sm">
  Look, I'm in a small well!
</div>

<div class="row">
  <div class="col-md-8">
<div class="row">
    <div class="col-sm-3 col-md-3"><?php echo $this->Html->image('sub1.jpg', array('alt' => 'Sub1', 'class'=>'img-thumbnail img-responsive')); ?></div>
    <div class="col-sm-3 col-md-3"><?php echo $this->Html->image('sub1.jpg', array('alt' => 'Sub1', 'class'=>'img-thumbnail img-responsive')); ?></div>
    <div class="col-sm-3 col-md-3"><?php echo $this->Html->image('sub1.jpg', array('alt' => 'Sub1', 'class'=>'img-thumbnail img-responsive')); ?></div>
    <div class="col-sm-3 col-md-3"><?php echo $this->Html->image('sub1.jpg', array('alt' => 'Sub1', 'class'=>'img-thumbnail img-responsive')); ?></div>
</div>
  </div>
  <div class="col-md-4">
<div class="panel panel-default">
  <div class="panel-heading">Panel heading without title</div>
  <div class="panel-body">
    Panel content
  </div>
</div>  
  </div>
</div>



