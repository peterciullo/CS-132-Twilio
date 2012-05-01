<script type="text/javascript" src="/assets/javascript/home.js"></script>
<div class="hero-unit span8 offset1 welcome_container">
  <div class="row">
    <div class="span5">
      <h1 class="span5">Twexter</h1>
      <div class="span5">
        <div id="myCarousel" class="carousel slide">
          <div class="carousel-inner">
            <div class="item active">
            <img src="/assets/images/phone.jpg" alt="">
            <div class="carousel-caption">
              <h4>First Thumbnail label</h4>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            </div>
            </div>
            <div class="item">
            <img src="/assets/images/students.jpg" alt="">
            <div class="carousel-caption">
              <h4>Second Thumbnail label</h4>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            </div>
            </div>
            <div class="item">
            <img src="/assets/images/phone.jpg" alt="">
            <div class="carousel-caption">
              <h4>Third Thumbnail label</h4>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            </div>
            </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
        </div>
      </div>
    </div>
    <div class="span3">			
      <h1 class="span3">Try Now</h1>
      <?= $user_id?'':'<div class="span3" id="registration"></div>' ?>
    </div>
  </div>
</div>

<!-- Example row of columns -->
<div class="row">
  <div class="span4 offset2">
    <h2>About</h2>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. </p>
    <p><a class="btn" href="#">View details &raquo;</a></p>
  </div>
  <div class="span4">
    <h2>Why Twexter</h2>
    <p>In recent years, the use of alternative methods in education has become extremely popular. However, although 87% of public school students have an SMS capable device, the full potential of SMS as an educational tool has not yet been exploited.</p>
    <p>The aim of this project is to create a series of educational tools for secondary school teachers that allow them to connect with students through SMS in constructive ways.</p>
    <p><a class="btn" href="#">View details &raquo;</a></p>
  </div>


</div>