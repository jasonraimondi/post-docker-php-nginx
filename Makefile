default: dev-start

composer-install:
	cd docker/tools; docker-compose run php-composer bash -c "composer install -d /var/www"

dev-stop:
	cd docker/dev; make stop;

dev-start:
	cd docker/dev; make build start;

.PHONY: composer-install dev-start dev-stop
