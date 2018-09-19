Web Services de AFIP

Installation
============

Applications that use Symfony Flex (Developing)
-----------------------------------------------

Open a command console, enter your project directory and execute:

```console
$ composer require gonzakpo/afip-bundle
```

Applications that don't use Symfony Flex
----------------------------------------

### Step 1: Download the Bundle

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```console
$ composer require gonzakpo/afip-bundle
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

### Step 2: Enable the Bundle

Then, enable the bundle by adding it to the list of registered bundles
in the `config/bundles.php` file of your project:

```php
<?php

return [
    // ...
    Gonzakpo\AfipBundle\AfipBundle::class => ['all' => true],
];

```

### Step 3: Add file config

In the `config/packages/afip_parameters.yaml` file of your project:

```yaml
afip:
    parameters:
        CUIT: 20111111112
        production: false
        res_folder: 'src/afip_res/'
        ta_folder: 'src/afip_res/'
        cert: 'cert'
        key: 'key'
        passphrase: ''


```

### Step 4: Create res_folder

Add files cert and key

### Example use Afip in Controller
```php
<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use Gonzakpo\AfipBundle\Controller\AfipController;

class AppController extends AbstractController
{
    /**
     * @Route("/app", name="app")
     */
    public function index(AfipController $afip)
    {
        dump($afip->getWS());

        return $this->render('app/index.html.twig', [
            'controller_name' => 'AppController',
        ]);
    }
}

```

## Dependencias
- El bundle implementa [afipsdk-afip.php](https://github.com/afipsdk/afip.php) .

## Author
Gonzalo Alonso - gonkpo@gmail.com
