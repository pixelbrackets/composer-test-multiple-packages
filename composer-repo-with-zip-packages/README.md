Add a relative path to the folder containing ZIP-files

    composer config repositories.foo '{"type": "artifact", "url": "../packages-as-zip-files/"}'

Note: Artifacts require a »version« property in the `composer.json` of 
the required packages!

    cd package-foo && composer config version 1.0.5 && zip -r ../acme-package-foo_1.0.5.zip *

Require the package

    composer require acme/package-foo 1.0.5

Fetch packages

    composer update

Test the autoloaded code

    php index.php