<?= $this->extend('layouts/main') ?>
<?= $this->section('content')?>

<h1><?= $title ?></h1>
<div class="card col-12 col-sm-6 col-md-4" style="width: 18rem;">
  <img src="/assets/images/image1.png"  class="card-img-top" alt="">
  <div class="card-body">
      <h5 class="card-title"><?= $title ?></h5>
      <p class="card-text"><?= $content ?></p>
      <a href="#" class="btn btn-primary">Read more</a>  
  </div>
</div>

<?= $this->endSection() ?>