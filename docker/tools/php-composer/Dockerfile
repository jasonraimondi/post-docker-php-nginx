FROM php:7.2-rc-cli

LABEL maintainer="Jason Raimondi <jason@raimondi.us>"

WORKDIR /usr/local/src

ENV BUILD_DEPENDENCIES="\
		\
        autoconf \
		\
		ca-certificates \
        curl \
        git \
        unzip"

USER root

RUN apt-get update \
    && apt-get install -y --no-install-recommends $BUILD_DEPENDENCIES \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin/ --filename=composer

USER www-data
