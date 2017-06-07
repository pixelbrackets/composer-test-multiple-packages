Add a relative path to each folder containing packages

    composer config repositories.baz '{"type": "path", "url": "../packages/*"}'

…or to a single package

    composer config repositories.foo '{"type": "path", "url": "../packages/package-foo"}'
    composer config repositories.bar '{"type": "path", "url": "../packages/package-bar"}'

Require the package

    composer require acme/package-foo acme/package-bar

Fetch packages

    composer update

Test the autoloaded code

    php index.php