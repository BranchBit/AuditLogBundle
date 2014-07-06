AuditLogBundle
==============




AuditLogBundle is a simple bundle wich provides you with a service wich you can use to log stuff to the database.

Sort of like monolog, but using the db instead.


### Step 1: Download AuditLogBundle using composer

Add BBITAuditLogBundle in your composer.json: (use the latest stable, NOT dev-master)

```js
{
    "require": {
        "bbit/auditlog-bundle": "0.1",
    }
}
```

Now tell composer to download the bundle by running the command:

``` bash
$ php composer.phar update bbit/auditlog-bundle
```

Composer will install the bundle to your project's `vendor/BBIT` directory.

### Step 2: Enable the bundle

Enable the bundle in the kernel:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new BBIT\AuditLogBundle\BBITAuditLogBundle(),
    );
}
```


### Usage:

``` php
$logger = $this->get('bbit_audit_log.service'); // get logger service
$logger->log("type", "channel", "logmessaage to be inserted");
```
