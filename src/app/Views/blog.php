<h1><?= $title ?></h1>

<div>
    <?php foreach($posts as $post): ?>
        <h3> <?= $post ?></h3>
        <img src="/assets/images/image1.png" style="width: 300px; height: auto;" alt="">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia id aut, deleniti natus eveniet itaque iste magnam repellendus dolor quaerat similique atque at, maiores earum qui pariatur dolore odio vitae?</p>
    <?php endforeach; ?>
</div>