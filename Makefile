install:
	cp app/.env.example app/.env
	docker-compose run --rm node install
	docker-compose up --build -d
	docker-compose run --rm node run build
	docker-compose exec app composer install
	docker-compose exec app php artisan key:generate
	docker-compose exec app php artisan migrate:fresh --seed

up:
	docker-compose up -d

up-bld:
	docker-compose up -d --build

down:
	docker-compose down

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