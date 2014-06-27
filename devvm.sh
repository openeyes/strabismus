#!/bin/sh

# Project specific settings
export PHPDEVVM_NAME=strabismus \
       PHPDEVVM_HOST_IP=172.16.0.24 \
       PHPDEVVM_SRV_DIR=../ \
       PHPDEVVM_WWW_DIR=../htdocs \
       PHPDEVVM_CPUS=1 \
       PHPDEVVM_MEMORY=512 \
       PHPDEVVM_HTTP_PORT=9024 \
       PHPDEVVM_MYSQL_PORT=9124 \
       PHPDEVVM_MANIFEST=strabismus.pp

pushd deployment > /dev/null
# Takes all the arguments and passes them to vagrant
# e.g. ./devvm.sh up -> vagrant up
vagrant $@
RET=$?
popd > /dev/null
exit $?
