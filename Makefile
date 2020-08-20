.PHONY: help install clean

help:
	@cat $(firstword $(MAKEFILE_LIST))

install: \
	dependencies \
	vendor

vendor:
	composer install

clean:
	rm -rf vendor
