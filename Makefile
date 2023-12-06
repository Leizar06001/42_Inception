all: up

up:create_folders
	@docker-compose -f ./srcs/docker-compose.yml up -d
	@echo "Website is up and accessible at: https://rloussig.42.fr/"

re:
	@docker-compose -f ./srcs/docker-compose.yml up -d --build
	@echo "Website is up and accessible at: https://rloussig.42.fr/"

down:
	@docker-compose -f ./srcs/docker-compose.yml down

stop:
	@docker-compose -f ./srcs/docker-compose.yml stop

start:
	@docker-compose -f ./srcs/docker-compose.yml start

status:
	@docker ps

rmall:down
	@echo "Removing all docker datas.."
	@docker system prune -af

create_folders:
	@echo "Creating data folders if not exists"
	@mkdir -p /home/$(USER)/data/mariadb
	@mkdir -p /home/$(USER)/data/wordpress
