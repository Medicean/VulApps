FROM medicean/vulapps:base_joomla_3.5

RUN /etc/init.d/mysql restart \
    && mysql -e "use joomla;update kmxhf_extensions set params=replace(params, 0x227573657261637469766174696f6e223a223222, 0x227573657261637469766174696f6e223a223022);update kmxhf_extensions set params=replace(params, 0x227573657261637469766174696f6e223a223122, 0x227573657261637469766174696f6e223a223022);" -uroot -proot

EXPOSE 80
CMD ["/start.sh"]
