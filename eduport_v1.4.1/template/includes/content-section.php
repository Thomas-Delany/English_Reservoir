<div class="col-md-12 my-5">
    <?php foreach ($sections as $section): ?>
        <h2 id="<?php echo $section['id']; ?>" class="my-custom-class mt-5"><?php echo $section['title']; ?></h2>
        <p><?php echo $section['content']; ?></p>
        <?php if (isset($section['youtube'])): ?>
            <div class="ratio ratio-16x9 my-5">
                <?php echo $section['youtube']; ?>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
</div>

