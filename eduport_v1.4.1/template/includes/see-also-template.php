<div class="see-also">
    <h3>See Also</h3>
    <ul class="list-unstyled">
        <?php foreach ($see_also_links as $link) : ?>
            <li><a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>

