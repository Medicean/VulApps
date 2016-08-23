### 拉取镜像

```
docker pull kgtw/ubuntu_lamp:php5.6
```

### 通过 Dockerfile 构建

```
$ docker build --tag=kgtw/ubuntu_lamp:php5.6 .
```
### 开启docker ，docker run -d -p 80 kgtw/ubuntu_lamp:php5.6

输出一串值

### 切入命令行 docker exec -it  {一串值} /bin.bash 


### poc参考
http://ricterz.me/posts/Write%20Up%3A%20Remote%20Command%20Execute%20in%20Wordpress%204.5.1?_=1462424557950
