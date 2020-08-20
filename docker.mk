.PHONY: help install dependencies build clean

help:
	@cat $(firstword $(MAKEFILE_LIST))

install: \
	dependencies \
	build

build:
	docker-compose build

clean:
	docker-compose down
