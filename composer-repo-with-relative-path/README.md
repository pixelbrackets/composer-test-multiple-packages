Add a relative path to each package repsitory

    composer config repositories.foo '{"type": "path", "url": "../packages/package-foo"}'

Require the package

    composer require acme/package-foo

Fetch packages

    composer update

Test the autoloaded code

    php index.php