<ul class="list-group" style="width: 300px;">
    <li class="list-group-item active">CÁC THỂ LOẠI</li>
    <?php forEach ($genresList as $genre) { ?>
    <li class="list-group-item"><?php echo ($genre->GenreName) ?></li>
    <?php } ?>
</ul>