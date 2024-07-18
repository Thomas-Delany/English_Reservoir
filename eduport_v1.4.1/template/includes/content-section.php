<?php
// Course images
$images = [
    'cursos-de-ingles' => [
        'src' => '../../assets/images/courses/cursos-de-ingles.png',
        'alt' => 'cursos de ingles',
        'url' => 'https://cursos.englishreservoir.com/'
    ],
    'b2-cambridge-first' => [
        'src' => '../../assets/images/courses/b2_first.png',
        'alt' => 'B2 Cambridge First',
        'url' => 'https://cursos.englishreservoir.com/p/b2-cambridge-first'
    ],
    'c1-cambridge-advanced' => [
        'src' => '../../assets/images/courses/c1_advanced.png',
        'alt' => 'C1 Cambridge Advanced',
        'url' => 'https://cursos.englishreservoir.com/p/c1-cambridge-advanced'
    ],
    'c2-cambridge-proficiency' => [
        'src' => '../../assets/images/courses/c2_pro.png',
        'alt' => 'C2 Cambridge Proficiency',
        'url' => 'https://cursos.englishreservoir.com/p/c2-cambridge-proficiency'
    ],
    'gramatica-esencial' => [
        'src' => '../../assets/images/courses/Gramatica-esencial.png',
        'alt' => 'Gramatica Esencial',
        'url' => 'https://cursos.englishreservoir.com/p/gramatica-esencial-metodo-divertido'
    ],
    'verbos-en-ingles' => [
        'src' => '../../assets/images/courses/verbos-en-ingles.png',
        'alt' => 'Verbos en inglés',
        'url' => 'https://cursos.englishreservoir.com/p/verbos-en-ingles-metodo-divertido'
    ],
    'pronunciacion-en-ingles' => [
        'src' => '../../assets/images/courses/pronunciacion-en-ingles.png',
        'alt' => 'Pronunciacion en ingles',
        'url' => 'https://cursos.englishreservoir.com/p/pronunciacion-en-ingles'
    ],
];
?>

<div class="col-md-12 my-5">
    <?php foreach ($sections as $section): ?>
        <h2 id="<?php echo $section['id']; ?>" class="my-custom-class mt-5"><?php echo $section['title']; ?></h2>
        <p><?php echo $section['content']; ?></p>
        
        <?php if (isset($section['youtube'])): ?>
            <div class="ratio ratio-16x9 my-5">
                <?php echo $section['youtube']; ?>
            </div>
        <?php endif; ?>
        
        <?php foreach ($images as $key => $image): ?>
            <?php if (isset($section[$key]) && $section[$key]): ?>
                <div class="col-12 text-center">
                    <a href="<?php echo $image['url']; ?>">
                        <img src="<?php echo $image['src']; ?>" class="img-fluid rounded-3 my-5 d-block mx-auto" alt="<?php echo $image['alt']; ?>">
                    </a>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endforeach; ?>
</div>


