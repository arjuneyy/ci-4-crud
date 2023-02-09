<?= $this->extend('layouts/main') ?>
<?= $this->section('content')?>

<h1><?= $title ?></h1>
<div class="row">
    <div class="col-12 col-md-8 offset-md-2">
        <form method="POST" action="/blog/new">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" name="content" id="" cols="30" rows="3"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-success btn-sm">Create</button>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>