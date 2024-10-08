<!-- English Grammar.php -->
<?php
$page_title = "English Grammar";
$page_heading = "English Grammar";
$image_url = BASE_URL . "assets/images/english-grammar.png"; // Set the image URL
$image_alt = "English Grammar"; // Set the image alt text
$show_toc = true; // Set to true to show the Table of Contents

// Page specific content with HTML and Bootstrap elements
$page_content = <<<HTML
<p class="lead mb-4">This is some additional content that is specific to this child page. It might include introductory text, images, or other elements that don't fit into the structured sections.</p>
HTML;

// Table of Contents sections
$toc_sections = [
    // Anchor links
    ['url' => '#section1', 'title' => 'What are the six parts of speech?'],
    ['url' => '#section2', 'title' => 'Knowing the six parts of speech'],
    ['url' => '#section3', 'title' => 'Using the six parts of speech in English grammar'],
    // External links ['url' => '#', 'title' => 'External Link']
    // Internal links
    ['url' => BASE_URL . 'english-verbs', 'title' => 'Verbs'],
    ['url' => BASE_URL . 'nouns', 'title' => 'Nouns'],
    ['url' => BASE_URL . 'adjectives', 'title' => 'Adjectives'],
    ['url' => BASE_URL . 'adverbs', 'title' => 'Adverbs'],
    ['url' => BASE_URL . 'prepositions', 'title' => 'Prepositions'],
    ['url' => BASE_URL . 'conjunctions', 'title' => 'Conjunctions'],
    ['url' => BASE_URL . 'english-grammar/interjections', 'title' => 'Interjections*'],
    ['url' => BASE_URL . 'english-grammar/articles-a-an-the-and-zero-article
', 'title' => 'Articles: A/an, The, and Zero Article
'],
    ['url' => BASE_URL . 'english-grammar/affixes-an-introduction
', 'title' => 'Affixes: An Introduction
'],
    ['url' => BASE_URL . 'english-grammar/prefixes-and-suffixes-a-complete-list
', 'title' => 'Prefixes and Suffixes: A Complete List
'],
    ['url' => BASE_URL . 'english-grammar/pronouns-subject-object-and-possessive-pronouns
', 'title' => 'Pronouns: Subject, Object and Possessive Pronouns
'],
    ['url' => BASE_URL . 'english-grammar/question-tags
', 'title' => 'Question Tags
'],
    ['url' => BASE_URL . 'english-grammar/english-conditionals
', 'title' => 'English Conditionals
'],
    ['url' => BASE_URL . 'english-grammar/interrogative-words
', 'title' => 'Interrogative Words
'],
    ['url' => BASE_URL . 'english-grammar/determiners', 'title' => 'Determiners'],
    ['url' => BASE_URL . 'english-grammar/reported-speech
', 'title' => 'Reported Speech
'],
    ['url' => BASE_URL . 'english-grammar/numbers', 'title' => 'Numbers'],
    ['url' => BASE_URL . 'english-grammar/cleft-sentences
', 'title' => 'Cleft Sentences
'],
    ['url' => BASE_URL . 'english-grammar/subjunctive-in-english
', 'title' => 'Subjunctive in English
'],
    ['url' => BASE_URL . 'english-grammar/jargon-and-taboo
', 'title' => 'Jargon and Taboo
'],
    ['url' => BASE_URL . 'english-grammar/ellpsis', 'title' => 'Ellpsis'],
    ['url' => BASE_URL . 'english-grammar/split-infinitive
', 'title' => 'Split Infinitive
'],
    ['url' => BASE_URL . 'english-grammar/emphasis-in-english
', 'title' => 'Emphasis in English
'],
    ['url' => BASE_URL . 'english-grammar/emphasis-with-inversion
', 'title' => 'Emphasis with Inversion
'],
    ['url' => BASE_URL . 'english-grammar/british-and-american-spelling
', 'title' => 'British and American Spelling
'],

    // External links ['url' => '#', 'title' => 'External Link']
]; 

// Define sections
$sections = [
    [
        'id' => 'section1',
        'title' => 'Section 1',
        'content' => [
            'Lorem ipsum dolor amet, consectetur adipisicing elit. Velit odit tempore cum inventore accusamus minima ipsam in praesentium possimus autem!',
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit odit tempore cum inventore accusamus minima ipsam in praesentium possimus autem!',
            // Add more paragraphs as needed
        ],
        // Add a table if needed
        /*'table' => [
            'headers' => ['Column 1', 'Column 2'],
            'rows' => [
                ['Lorem ipsum dolor amet', 'Lorem ipsum dolor amet'],
                ['Lorem ipsum dolor amet', 'Lorem ipsum dolor amet'],
                ['Lorem ipsum dolor amet', 'Lorem ipsum dolor amet'],
            ]
        ],*/ 
    ],
    [
        'id' => 'section2',
        'title' => 'Section 2',
        'content' => [
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit odit tempore cum inventore accusamus minima ipsam in praesentium possimus autem!',
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit odit tempore cum inventore accusamus minima ipsam in praesentium possimus autem!',
            // Add more paragraphs as needed
        ],
          // Course images
          'cursos-de-ingles' => true, 
          'b2-cambridge-first' => false, 
          'c1-cambridge-advanced' => false, 
          'c2-cambridge-proficiency' => false, 
          'gramatica-esencial' => false, 
          'verbos-en-ingles' => false,
          'pronunciacion-en-ingles' => false,
    ],
    [
        'id' => 'section3',
        'title' => 'Section 3',
        'content' => [
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit odit tempore cum inventore accusamus minima ipsam in praesentium possimus autem!',
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit odit tempore cum inventore accusamus minima ipsam in praesentium possimus autem!',
            // Add more paragraphs as needed
        ],
        // YouTube clip 'youtube' => '<iframe></iframe>'
    ],
    [
        'id' => 'section4',
        'title' => 'Section 4',
        'content' => [
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit odit tempore cum inventore accusamus minima ipsam in praesentium possimus autem!',
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit odit tempore cum inventore accusamus minima ipsam in praesentium possimus autem!',
            // Add more paragraphs as needed
        ],
        // Add bullets if needed
        /*'bullets' => [
            [
                'First bullet point set',
                'Second bullet point set',
            ],
            [
                'First bullet point of second set',
                'Second bullet point of second set',
            ]
        ],*/
    ],
    [
        'id' => 'section5',
        'title' => 'Section 5',
        'content' => [
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit odit tempore cum inventore accusamus minima ipsam in praesentium possimus autem!',
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit odit tempore cum inventore accusamus minima ipsam in praesentium possimus autem!',
            // Add more paragraphs as needed
        ],
    ],
];

/*
$see_also_links = [
    ['url' => BASE_URL . 'page1.php', 'title' => 'Page 1'],
    ['url' => BASE_URL . 'page2.php', 'title' => 'Page 2'],
    ['url' => BASE_URL . 'page3.php', 'title' => 'Page 3'],
    ['url' => BASE_URL . 'page4.php', 'title' => 'Page 4'],
    ['url' => BASE_URL . 'page5.php', 'title' => 'Page 5']
];
*/

// Include the master template
include __DIR__ . '/../master-template.php';
?>
