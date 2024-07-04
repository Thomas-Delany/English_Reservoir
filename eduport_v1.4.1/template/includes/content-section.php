<?php
// Default image details
$image_src = '../assets/images/english-verbs.png';
$image_alt = 'Descriptive Alt Text';
?>

<div class="col-md-12 my-5">
    <?php foreach ($sections as $section): ?>
        <h2 id="<?php echo $section['id']; ?>" class="my-custom-class mt-5"><?php echo $section['title']; ?></h2>
        <p><?php echo $section['content']; ?></p>
        <?php if (isset($section['image']) && $section['image']): ?>
            <div class="col-12">
                <img src="<?php echo $image_src; ?>" class="img-fluid rounded-3 my-5" alt="<?php echo $image_alt; ?>">
            </div>
        <?php endif; ?>
        <?php if (isset($section['youtube'])): ?>
            <div class="ratio ratio-16x9 my-5">
                <?php echo $section['youtube']; ?>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
</div>
