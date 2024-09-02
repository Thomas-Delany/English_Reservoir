#!/bin/bash

# List of directories to process
directories=(
    "conjunctions"
    "english-punctuation"
    "prepositions"
    "adjectives"
    "english-confusions"
    "adverbs"
    "english-grammar"
    "nouns"
    "english-pronunciation"
    "english-verbs"
)

# New $sections array
NEW_SECTIONS="\$sections = [
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
];"

# Function to update files
update_files() {
    local directory=$1
    for file in $(find "$directory" -type f -name '*.php'); do
        if grep -q "\$sections = \[" "$file"; then
            # Use awk to handle multi-line replacement
            awk -v new_sections="$NEW_SECTIONS" '
            BEGIN { found = 0 }
            {
                if ($0 ~ /^\$sections = \[/) {
                    found = 1
                    print new_sections
                    while (getline > 0) {
                        if ($0 ~ /^\];/) {
                            found = 0
                            break
                        }
                    }
                } else if (!found) {
                    print
                }
            }' "$file" > tmp && mv tmp "$file"
            echo "Updated $file"
        else
            echo "\$sections array not found in $file"
        fi
    done
}

# Update directories
for dir in "${directories[@]}"; do
    if [ -d "$dir" ]; then
        update_files $dir
    elif [ "$dir" = "english-verbs" ]; then
        # Special handling for subdirectories within english-verbs
        for subdir in $(find "$dir" -type d); do
            if [ -d "$subdir" ]; then
                update_files "$subdir"
            fi
        done
    else
        echo "Directory $dir does not exist."
    fi
done
