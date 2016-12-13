<?php
/**
* CmsEasy Live http://www.cmseasy.cn 				  			 
* by CmsEasy Live Team 							  						
**
* Software Version: CmsEasy Live v 1.2.0 					  				  
* Software by: Aiens, UTA (http://www.aiens.cn) 		      
* Copyright 2009 by: CmsEasy, (http://www.cmseasy.cn) 	  
* Support, News, Updates at: http://www.cmseasy.cn 			  			  
**
* This program is not free software; you can't may redistribute it and modify it under	  
**
* This file contains configuration settings that need to altered                  
* in order for CE Live to work, and other settings that            
**/
// 数据库配置



$config['host'] = 'localhost';
$config['database'] = 'cmseasy';
$config['username'] = 'root';
$config['password'] = 'root';
$config['prefix'] = 'cmseasy_';
$config['expire'] = 86400; //24 hours
// 如果在php.ini开启了safe_mode为'on'的话,请修改此处为true
$config['safe_mode'] = false;
// CElive的安装目录
$config['url'] = 'http://127.0.0.1:32775/celive';
// 语言控制
$config['lang'] = 'chinese';
// 公司站点名称
$config['company'] = '公司';
// 模板名称
$config['template'] = 'default';
// 文件上传目录
$config['upload_dir'] = 'uploadfiles/';
// 上传允许文件类型
$config['upload_file_type'] = 'jpg,gif,bmp,jpeg,png';
// 允许访客信息收集
$config['customer_info'] = false;
// 时间设置
// 无特殊要求,请按默认设置
$config['tracker_refresh'] = '5000'; //5秒
// 企业简介
$config['companyinfos'] = '';
@ini_set('session.use_only_cookies','1');
error_reporting(E_ALL ^ E_NOTICE);
//error_reporting(0);
define('CE_ROOT',str_replace("\\", '/', substr(dirname(__FILE__), 0, -7)));
define('IN_CELIVE',true);
?>