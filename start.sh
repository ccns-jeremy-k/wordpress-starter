#!/usr/bin/env bash

npm install
docker-compose up -d --build
docker-compose logs -f wordpress