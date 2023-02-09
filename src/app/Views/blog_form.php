<?= $this->extend('layouts/main') ?>
<?= $this->section('content')?>

<form action="/admin/blog/new" method="POST">
    <input type="text" name="title" />
    <textarea name="content" id="" cols="30" rows="10"></textarea>
    <input type="submit" value="Create">
</form>

<?= $this->endSection() ?>