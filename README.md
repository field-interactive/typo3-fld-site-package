Sitepackage for the project "typo3-fld-site-package"
==============================================================

## Naming convention

`customer_type`, e.g.:
 - `field-interactive_website`
 - `field-interactive_styleguide`

## Renaming the site package and all occurrences recursively

````bash
mv typo3-fld-site-package project_name
find . -type f -exec sed -i 's/typo3-fld-site-package/project_name/g' {} +
````
