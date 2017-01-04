#heroku-demo-zf-apigility-phinx [![Build Status](https://status.continuousphp.com/git-hub/continuousdemo/heroku-demo-zf-apigility-phinx?token=190b9ca4-c0e4-4cd2-aa6c-94fb020c005c)](https://continuousphp.com/git-hub/continuousdemo/heroku-demo-zf-apigility-phinx)

This demo use ZF Apiligity with Phinx Database migration and deploy it on Heroku.

#Tutorial

Visit our Tutorial [Deploy on Heroku](https://continuousphp.com/tutorial/deploy-on-heroku/) to configure continuousphp to create your development pipeline and deploy on Heroku.

Configure for local development:

create a build.local.properties file with:

```bash
dir.vendor=./vendor
phinx.bin=${dir.vendor}/bin/phinx

db.host=127.0.0.1
db.port=3306
db.name=skeleton
db.username=root
db.password=
```
