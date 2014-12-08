Osd
========================
Scans directory and returns the list of files in the right order


Example
-----------

Code:

```php
<?php

use Osd\Osd;

$asIsfiles = Osd::scandir(__DIR__.'/Resources/case1/');
```

For more look tests.

Installation via [Composer](http://getcomposer.org/)
------------

 * Install Composer to your project root:
    ```bash
    curl -sS https://getcomposer.org/installer | php
    ```

 * Add a `composer.json` file to your project:
    ```json
    {
      "require" {
        "knyga/osd": "dev-master"
      }
    }
    ```

 * Run the Composer installer:
    ```bash
    php composer.phar install
    ```

License
-------

WebExtractor is licensed under the MIT license.

Oleksandr Knyga <oleksandrknyga@gmail.com>
