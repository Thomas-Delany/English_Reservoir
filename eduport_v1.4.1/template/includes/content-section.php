<?php
// Default image details
$image_src = '../../assets/images/courses/cursos-de-ingles.png';
$image_alt = 'cursos de ingles';
$image_url = 'https://cursos.englishreservoir.com/';
?>

<div class="col-md-12 my-5">
    <?php foreach ($sections as $section): ?>
        <h2 id="<?php echo $section['id']; ?>" class="my-custom-class mt-5"><?php echo $section['title']; ?></h2>
        <p><?php echo $section['content']; ?></p>
        <?php if (isset($section['image']) && $section['image']): ?>
            <div class="col-12 text-center">
                <a href="<?php echo $image_url; ?>">
                    <img src="<?php echo $image_src; ?>" class="img-fluid rounded-3 my-5 d-block mx-auto" alt="<?php echo $image_alt; ?>">
                </a>
            </div>
        <?php endif; ?>
        <?php if (isset($section['youtube'])): ?>
            <div class="ratio ratio-16x9 my-5">
                <?php echo $section['youtube']; ?>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
</div>

