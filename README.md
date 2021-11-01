# Road Runner v2 + gRPC

### Introduction
This is the repo that gives you worked example on Road Runner v2 + gRPC.
It's an experiment. I just wanted to leave my example with all dependencies.

### Installation
```shell
docker-compose up -d --build # build ~ 10 min
docker-compose exec php composer install
```

### Usage
```shell
docker-compose exec php ./bin/rr serve

# in another console window run
docker-compose exec php php ./bin/client.php KEEEK
# KEEEK
```
Wow! Now you saw the `KEEEK` data which you got from `Road Runner gRPC Server`.
The client script sends data from the first argument to `gRPC server` and it'll resend you as the response. 

You can see the proto-model in the `./proto` directory.
I've already generated PHP models from the proto-model but you can change the model and regenerate it by yourself.
```shell
protoc \
    -I ./proto/ \
    --php_out=./resources/ \
    --php-grpc_out=./resources/ \
    --plugin=protoc-gen-php-grpc=/usr/bin/grpc_php_plugin \
    proto/echo.proto

```

License
-------

[![license](https://img.shields.io/badge/License-MIT-green.svg?style=flat-square)](./LICENSE)
