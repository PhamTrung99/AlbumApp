<ul class="list-group" style="width: 300px; padding-top: 16px;">
    <li class="list-group-item active">ALBUM MỚI</li>
    <?php forEach ($albumList as $album) { ?>
    <li class="list-group-item"><?php echo ($album->Title) ?></li>
    <?php } ?>
</ul>