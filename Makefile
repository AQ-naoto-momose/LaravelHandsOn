install-local:
	cp app/.env.example app/.env
	docker-compose run --rm node install
	#docker-compose run --rm puppeteer-node install
	docker-compose up --build -d
	docker-compose run --rm node run build
	docker-compose exec app composer install
	docker-compose exec app php artisan key:generate
	docker-compose exec app php artisan migrate:fresh --seed
	docker-compose exec app php artisan ide-helper:generate
	docker-compose exec app php artisan ide-helper:meta
	docker-compose exec app php artisan ide-helper:models -n

install:
	cp app/.env.example app/.env
	docker-compose run --rm node install
	docker-compose up --build -d
	docker-compose run --rm node run build
	docker-compose exec app composer install
	docker-compose exec app php artisan key:generate
	docker-compose exec app chmod -R 777 .
	docker-compose exec nginx chmod -R 777 .

up:
	docker-compose up -d

up-bld:
	docker-compose up -d --build

down:
	docker-compose down

reboot:
	docker-compose down && docker-compose up -d --build

node-bld:
	docker-compose run --rm node run build

migrate-fresh:
	docker-compose run --rm app php artisan migrate:fresh --seed

cache-clear:
	docker-compose run --rm app php artisan cache:clear
	docker-compose run --rm app php artisan config:clear
	docker-compose run --rm app php artisan route:clear
	docker-compose run --rm app php artisan view:clear

dump-autoload:
	docker-compose run --rm app composer dump-autoload
	docker-compose run --rm app php artisan clear-compiled
	docker-compose run --rm app php artisan optimize
	docker-compose run --rm app php artisan config:cache

test-w/err:
	docker-compose exec app ./vendor/bin/phpunit

test-a:
	docker-compose exec app php artisan test