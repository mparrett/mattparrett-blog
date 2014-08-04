#!/bin/bash

rm -rfv /tmp/mattphp
mkdir /tmp/mattphp

git clone git@github.com:mparrett/mattphp.git /tmp/mattphp

mkdir -p src/MP/Framework
mkdir -p resources/templates/sys
mkdir -p web

cp -Rfv /tmp/mattphp/src/MP/Framework/* src/MP/Framework/
cp -Rfv /tmp/mattphp/resources/templates/sys/* resources/templates/sys/ 
cp -Rfv /tmp/mattphp/web/index-default.php web/

