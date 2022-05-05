FROM php:7.4
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp
CMD [ "php" ] 