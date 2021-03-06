[![Latest Stable Version](https://poser.pugx.org/phalcana/email/v/stable)](https://packagist.org/packages/phalcana/email)
[![Build Status](https://travis-ci.org/braf/phalcana-email.svg?branch=master)](https://travis-ci.org/braf/phalcana-email)
[![Total Downloads](https://poser.pugx.org/phalcana/email/downloads)](https://packagist.org/packages/phalcana/email)
[![License](https://poser.pugx.org/phalcana/email/license)](https://packagist.org/packages/phalcana/email)

# Phalcana Email Module

Swift mailer wrapper for the [Phalcana project](http://github.com/braf/phalcana-project).

## Installation

This module can be installed via composer using the below command.

```bash
composer require phalcana/email
```

In order for the module to be loaded into Phalcana the module needs to be added into the modules config.
This can be found in the `app/config/static.php` or in the local version `app/config/setup.php`. For example.

```php
'modules' => array(
  'email' => MODPATH.'email/',
  'userguide' => MODPATH.'userguide/',
),
```


## Basic Usage

You can get a fresh instance of the email module by getting it from the dependency injector.

```php
$email = $this->getDi()->get('email', array('My email subject'))
  ->to('email@example.com', 'My name')
  ->from('info@example.com', 'Website name')
  ->message('Message text here')
  ->send();
```
