FROM medicean/vulapps:base_drupal_8.3.0

RUN sed -i 's/mirrors.ustc.edu.cn/mirrors.aliyun.com/g' /etc/apt/sources.list

ENV YAML_VERSION 1.3.0
ENV YAML_MD5 4370b78dae20b74102c4f2b541b9dd0b

WORKDIR /tmp

RUN apt-get update \
    && apt-get install -y libyaml-dev 

RUN curl -fSL "http://vulapps.xuanbo.cc/y/yaml/yaml/yaml-${YAML_VERSION}.tgz" -o /tmp/yaml.tgz \
    && echo "${YAML_MD5} /tmp/yaml.tgz" | md5sum -c - \
    && tar -zxvf /tmp/yaml.tgz \
    && cd /tmp/yaml-${YAML_VERSION}/ \
    && phpize \
    && ./configure \
    && make \
    && make install \
    && echo "extension=yaml.so" > /etc/php5/mods-available/yaml.ini \
    && php5enmod yaml \
    && rm -rf /tmp/yaml* \
    && rm -rf /var/lib/apt/lists
