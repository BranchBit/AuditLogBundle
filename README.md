AuditLogBundle
==============


[![SensioLabsInsight](https://insight.sensiolabs.com/projects/ac7bf46c-aa2a-4100-bcf0-c3bad08cc713/small.png)](https://insight.sensiolabs.com/projects/ac7bf46c-aa2a-4100-bcf0-c3bad08cc713)



AuditLogBundle is a simple bundle which provides you with a service which you can use to log stuff to the database.

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
$logger->log("type", "channel", "logmessage to be inserted");
```


todo: write tests and check code coverage
