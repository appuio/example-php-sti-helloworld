# PHP source to image Helloworld Example

This is an example php application, which can be deployed to APPUiO using the following commands

## How to deploy

### Create New OpenShift Project
```
$ oc new-project example-php-sti-helloworld
```

### Create Application and expose Service
```
$ oc new-app https://github.com/appuio/example-php-sti-helloworld.git --name=appuio-php-sti-example

$ oc expose service appuio-php-sti-example
```

## Add Webhook to trigger rebuilds

Take the Webhook GitHub URL from

```
$ oc describe bc appuio-php-sti-example

oc describe bc appuio-php-sti-example
Name:			appuio-php-sti-example
Created:		20 seconds ago
Labels:			app=appuio-php-sti-example
Annotations:		openshift.io/generated-by=OpenShiftNewApp
Latest Version:		1
Strategy:		Source
Source Type:		Git
URL:			https://github.com/appuio/example-php-sti-helloworld.git
From Image:		ImageStreamTag openshift/php:latest
Output to:		ImageStreamTag appuio-php-sti-example:latest
Triggered by:		Config, ImageChange
Webhook GitHub:		https://[Server]/oapi/v1/namespaces/example-php-sti-helloworld/buildconfigs/appuio-php-sti-example/webhooks/[GitHubsecret]/github
Webhook Generic:	https://[Server]/oapi/v1/namespaces/example-php-sti-helloworld/buildconfigs/appuio-php-sti-example/webhooks/[genericsecret]/generic
```

and add the URL as a Webhook in your github Repository, read https://developer.github.com/webhooks/ for more details about github Webhooks
