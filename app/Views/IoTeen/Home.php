<?= $this->extend('IoTeen/layout/template'); ?>
<?= $this->section('content'); ?>

<h1>Selamat datang di IoTeen!</h1>
<p>Di sini, kamu bisa beli peralatan untuk merakit teknologi IoT di rumah kamu!</p>
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/img/1.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>IoT Facts #1</h5>
        <p>IoT Is a Vital Component of Industry 4.0</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/img/2.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>IoT Facts #2</h5>
        <p>The First-Ever Connected Device Was the ATM</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/img/3.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>IoT Facts #3</h5>
        <p>The Concept of IoT Goes Back to the Mid-1800s</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>

<?= $this->endSection(); ?>