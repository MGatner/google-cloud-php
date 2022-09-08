#!/bin/bash

if [ "$#" -ne 1 ] && [ "$#" -ne 0 ]; then
     echo "usage: build-docs.sh [STAGING_BUCKET]"
     exit 1;
fi

STAGING_BUCKET=$1

find * -name 'composer.json' -not -path '*vendor/*' -depth 1 -exec dirname {} \; | while read DIR
do
    VERSION=$(cat $DIR/VERSION)
    if [ "$STAGING_BUCKET" != "" ]; then
        dev/google-cloud docfx \
            --component $DIR \
            --metadata-version $VERSION \
            --staging-bucket $STAGING_BUCKET
    else
        dev/google-cloud docfx \
            --component $DIR \
            --metadata-version $VERSION
    fi
done