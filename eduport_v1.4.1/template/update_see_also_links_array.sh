#!/bin/bash

# List of directories to process
directories=(
    "conjunctions"
    "english-punctuation"
    "prepositions"
    "adjectives"
    "english-confusions"
    "english-verbs"
    "adverbs"
    "english-grammar"
    "nouns"
    "english-pronunciation"
    "active-voice"
    "modal-auxiliary-verbs"
    "passive-voice"
    "verbal-order"
    "main-auxiliary-verbs"
)

# New $see_also_links array to be inserted after the $sections array (commented out)
NEW_SEE_ALSO_LINKS="
/*
\$see_also_links = [
    ['url' => BASE_URL . 'page1.php', 'title' => 'Page 1'],
    ['url' => BASE_URL . 'page2.php', 'title' => 'Page 2'],
    ['url' => BASE_URL . 'page3.php', 'title' => 'Page 3'],
    ['url' => BASE_URL . 'page4.php', 'title' => 'Page 4'],
    ['url' => BASE_URL . 'page5.php', 'title' => 'Page 5']
];
*/"

# Function to update files
update_files() {
    local directory=$1
    for file in $(find "$directory" -type f -name '*.php'); do
        if grep -q "\$sections = \[" "$file"; then
            # Use awk to handle multi-line insertion
            awk -v new_see_also_links="$NEW_SEE_ALSO_LINKS" '
            BEGIN { found_sections = 0 }
            {
                if ($0 ~ /^\$sections = \[/) {
                    found_sections = 1
                }
                if (found_sections && $0 ~ /^\];/) {
                    print
                    print new_see_also_links
                    found_sections = 0
                } else {
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
        update_files "$dir"
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
