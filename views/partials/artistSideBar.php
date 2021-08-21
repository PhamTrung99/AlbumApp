<ul class="list-group" style="width: 300px; padding-top: 16px;">
    <li class="list-group-item active">CÁC CA SĨ/NHÓM NHẠC</li>
    <?php forEach ($artistList as $artist) { ?>
    <li class="list-group-item"><?php echo ($artist->Name) ?></li>
    <?php } ?>
</ul>