<ul class="list-group" style="width: 300px;">
    <li class="list-group-item active" style="background-color: #11ad3a;border-color: #11ad3a; 
    font-weight: bolder;text-align: center;">CÁC THỂ LOẠI</li>
    <?php forEach ($genresList as $genre) { ?>
    <li class="list-group-item" style="font-size: 12px;"><?php echo ($genre->GenreName) ?></li>
    <?php } ?>
</ul>