#!/bin/bash

# Define the root directory of your project
ROOT_DIR="."

# Find all PHP files in the project directory
find "$ROOT_DIR" -type f -name "*.php" | while read -r file; do
    # Use sed to update include statements
    sed -i -E \
        -e "s|include '([^/]*)|include __DIR__ . '/\1|g" \
        -e "s|include_once '([^/]*)|include_once __DIR__ . '/\1|g" \
        -e "s|require '([^/]*)|require __DIR__ . '/\1|g" \
        -e "s|require_once '([^/]*)|require_once __DIR__ . '/\1|g" \
        "$file"
done

echo "All include statements have been updated."
