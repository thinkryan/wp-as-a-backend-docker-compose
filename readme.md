# WordPress as a backend dockerized

> Dockerized WordPress as a backend stack: Nginx, MySql, PHP-FPM, Redis
 
WordPress as a backend dockerized give you a project structure for creating APIs and completely decoupling it from the front.

## What's inside

* [Nginx](http://nginx.org/)
* [MySQL](http://www.mysql.com/)
* [PHP-FPM](http://php-fpm.org/)
* [Redis](http://redis.io/)
* [WordPress](http://wordpress.org)

## Requirements

* [Docker Engine](https://docs.docker.com/installation/)
* [Docker Compose](https://docs.docker.com/compose/)
* [Docker Machine](https://docs.docker.com/machine/) (Mac and Windows only)

## Running

Set up a Docker Machine and then run:

```sh
$ git clone git@github.com:sunnyluthra/wp-as-a-backend-docker-compose.git .
$ git submodule update --init 
$ docker-compose up
```

That's it! You can now access your configured sites via the IP address of the Docker Machine or locally if you're running a Linux flavour and using Docker natively.

##API

Checkout server/public/api folder.

Creating routes is pretty straight forward, For an example please open server/public/api/v1/routes/posts.routes.php file.

Using [slimframework](http://www.slimframework.com/) for creating APIs.

Visit http://localhost/api/v1/posts

```json
[
    {
    "ID": 1,
    "post_author": "1",
    "post_date": "2015-11-23 15:51:08",
    "post_date_gmt": "2015-11-23 15:51:08",
    "post_content": "Welcome to WordPress. This is your first post. Edit or delete it, then start writing!",
    "post_title": "Hello world!",
    "post_excerpt": "",
    "post_status": "publish",
    "comment_status": "open",
    "ping_status": "open",
    "post_password": "",
    "post_name": "hello-world",
    "to_ping": "",
    "pinged": "",
    "post_modified": "2015-11-23 15:51:08",
    "post_modified_gmt": "2015-11-23 15:51:08",
    "post_content_filtered": "",
    "post_parent": 0,
    "guid": "http://localhost/?p=1",
    "menu_order": 0,
    "post_type": "post",
    "post_mime_type": "",
    "comment_count": "1",
    "filter": "raw"
    }
]
```

## License

Copyright &copy; 2014-2015 [Sunny Luthra](http://github.com/sunnyluthra). Licensed under the terms of the [MIT license](LICENSE.md).
