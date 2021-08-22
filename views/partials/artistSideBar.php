<ul class="list-group" style="width: 300px; padding-top: 16px;">
    <li class="list-group-item active" style="background-color: #11ad3a;
    border-color: #11ad3a;
     font-weight: bolder;text-align: center;">CÁC CA SĨ/NHÓM NHẠC</li>
    <?php forEach ($artistList as $artist) { ?>
    <li class="list-group-item" style="font-size: 12px;"><?php echo ($artist->Name) ?></li>
    <?php } ?>
</ul>