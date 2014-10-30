<?php
	use yii\helpers\Url;
?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
    <ol class="carousel-indicators">
       	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
       	<li data-target="#myCarousel" data-slide-to="1"></li>
       	<li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    
    <div class="carousel-inner">
        <div class="item active">
          	<img src="<?php echo Url::to('images/carousel/0.jpg'); ?>">
          	<div class="container">
            	<div class="carousel-caption">
              		<h1>it's not just an event.</h1>
              		<p>it's tech revolution that every student should experience at least once.</p>
              		<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            	</div>
          	</div>
        </div>
        <div class="item">
          	<img src="data:image/gif;base64,R0lGODlhAQABAIAAAGZmZgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          	<div class="container">
            	<div class="carousel-caption">
              		<h1>Another example headline.</h1>
              		<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              		<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            	</div>
          	</div>
        </div>
        <div class="item">
          	<img src="data:image/gif;base64,R0lGODlhAQABAIAAAFVVVQAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
          	<div class="container">
            	<div class="carousel-caption">
              		<h1>One more for good measure.</h1>
		            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            	</div>
          	</div>
        </div>
	</div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>