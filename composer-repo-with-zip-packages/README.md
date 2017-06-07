Note: Artifacts require a »version« property in the `composer.json` of 
the required packages! Make sure that these exist.

    cd package-foo && composer config version 1.0.5 && zip -r ../acme-package-foo_1.0.5.zip *

Add a relative path to the folder containing ZIP-files

    composer config repositories.foo '{"type": "artifact", "url": "../packages-as-zip-files/"}'

Require the package with a specific version

    composer require acme/package-foo:1.0.5 acme/package-bar:1.0.0

Fetch packages

    composer update

Test the autoloaded code

    php index.php