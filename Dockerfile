FROM php:8.3-cli-alpine@sha256:2e6b46e0c087cc1c17cfd91172112d8d9db5cbf9503b20e3418c10bd198748b5

RUN apk add --no-cache $PHPIZE_DEPS \
	libxml2-dev \
	php-soap linux-headers bash \
	git \
        && docker-php-ext-install soap \
     	&& pecl install xdebug \
	&& docker-php-ext-enable xdebug

COPY --from=composer:2.5.1@sha256:013450bb533a9049757addd96c41972ad7b0f8f20387223e38c5d413331191c1 /usr/bin/composer /usr/bin/composer

RUN addgroup -g 1000 appuser && \
    adduser -D -u 1000 -G appuser appuser

USER appuser

RUN composer global require phpunit/phpunit  ~9

RUN echo 'alias phpunit="./vendor/bin/phpunit"' >> ~/.bashrc
