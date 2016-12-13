<?php if (!defined('ROOT')) exit('Can\'t Access !'); return array (

'database'=>array(
'hostname'=>'localhost',//MySQL服务器
'user'=>'root',//用户名
'password'=>'root',//密码
'database'=>'cmseasy',//数据库名
'prefix'=>'cmseasy_',//表前缀
'encoding'=>'utf8',//编码
),

'install_admin'=>'admin',

//site-网站信息{
'site_url'=>'http://127.0.0.1/',

//网站地址[<span class="hotspot" onmouseover="tooltip.show('http://起始并以 / 结束！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'sitename'=>'CmsEasy 企业营销型管理系统', 

//站点名称[<span class="hotspot" onmouseover="tooltip.show('请填写网站简称，主要用于页底说明！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'fullname'=>'cmseasy免费企业网站程序是国内首款免费营销型的企业网站系统', 

//网站名称[<span class="hotspot" onmouseover="tooltip.show('网页标题处显示，可结合关键词使用！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'site_mobile'=>'18888888888', 

//手机号码[<span class="hotspot" onmouseover="tooltip.show('管理员手机号码,可以开通用户动作短信提醒！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'k'=>array ('G','H','I','J','K','L','M','N','O','G','H','I','J','K','L'),
'h'=>array (104,116,116,112,58,47,47,108,105,99,101,110,115,101,46,99,109,115,101,97,115,121,46,99,110,47,112,104,112,114,112,99,46,112,104,112),

'site_icp'=>'京ICP备88888888号',

//ICP备案号[<span class="hotspot" onmouseover="tooltip.show('前台显示ICP备案号码！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'site_keyword'=>'企业网站程序,企业网站源码,cmseasy',

//网站关键字[<span class="hotspot" onmouseover="tooltip.show('网站关键词，用于优化网站排名，多个关键词请用","间隔！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'site_description'=>'cmseasy是一款基于 PHP+Mysql 架构的网站内容管理系统，也是一个 PHP 开发平台。 采用模块化方式开发，功能易用便于扩展，可面向大中型站点提供重量级网站建设解决方案。',

//网站描述[<span class="hotspot" onmouseover="tooltip.show('网站网页描述内容，可简写与网站相关的简介！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]


'site_logo'=>'/images/logo.png',

//网站logo[<span class="hotspot" onmouseover="tooltip.show('点击绿色加号，上传网站logo！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>image


'logo_width'=>'260',

//logo宽度[<span class="hotspot" onmouseover="tooltip.show('设置logo宽度，单位(px)！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'logo_height'=>'45',

//logo高度[<span class="hotspot" onmouseover="tooltip.show('设置logo高度，单位(px)！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]


'weixin_pic'=>'/images/w.gif',

//微信公共号图片[<span class="hotspot" onmouseover="tooltip.show('当图片列表页无缩略图时用于替换显示！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>image


'flash_url'=>'http://player.youku.com/player.php/Type/Folder/Fid/19033149/Ob/1/sid/XNTI1NTk4OTAw/v.swf',

//Flash视频地址[<span class="hotspot" onmouseover="tooltip.show('复制优酷视频中的flash地址！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>image

'site_right'=>'Copyright ©', 

//网站版权[<span class="hotspot" onmouseover="tooltip.show('前台显示网站版权说明内容！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]



'address'=>'某某股份有限公司',

//联系地址[<span class="hotspot" onmouseover="tooltip.show('填写联系地址！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'tel'=>'888-88888888',

//联系电话[<span class="hotspot" onmouseover="tooltip.show('填写联系电话！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'mobile'=>'88888888888',

//移动电话[<span class="hotspot" onmouseover="tooltip.show('填写移动电话号码！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'fax'=>'888-88888888',

//传真[<span class="hotspot" onmouseover="tooltip.show('填写传真号码！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'email'=>'admin@admin.com',

//邮箱[<span class="hotspot" onmouseover="tooltip.show('填写联系邮箱！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'complaint_email'=>'admin@admin.com',

//投诉邮箱[<span class="hotspot" onmouseover="tooltip.show('填写投诉邮箱！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]


'postcode'=>'136000',

//邮政编码[<span class="hotspot" onmouseover="tooltip.show('填写邮政编码！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]


//}

//site-站点设置{

'lang_type'=>'cn', 

//语言设置[<span class="hotspot" onmouseover="tooltip.show('网站模板语言选项，需结合网站后台输入内容显示！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>cn/中文/en/英文/jp/日文/de/德文/sk/韩文/user/自定义

'pc_style_color'=>'6', 

//网站整体颜色[<span class="hotspot" onmouseover="tooltip.show('只在PC模板支持换色时有效！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/无/1/红/2/橙/3/黄/4/绿/5/青/6/蓝/7/紫/8/黑/9/白

'admin_dir'=>'admin', 

//后台地址[<span class="hotspot" onmouseover="tooltip.show('强烈推荐安装后第一时间修改登录地址，加强网站后台安全性！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'cookie_password'=>'02dfee44ab6a3385b2dd7342f1079edf27e54d62',

//Cookie安全码[<span class="hotspot" onmouseover="tooltip.show('多站点设置时，此项必须一致！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'version'=>'V5.5_20160825',//版本[<span class="hotspot" onmouseover="tooltip.show('软件当前版本！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]


'onerror_pic'=>'/images/nopic.gif',

//列表默认图片[<span class="hotspot" onmouseover="tooltip.show('当图片列表页无缩略图时用于替换显示！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>image

'thumb_width'=>'150',

//列表中缩略图宽度[<span class="hotspot" onmouseover="tooltip.show('设置网站缩略图宽度，单位（PX）！注：只在模板中调用宽度值后才有效！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'thumb_height'=>'120',

//列表中缩略图高度[<span class="hotspot" onmouseover="tooltip.show('设置网站缩略图高度，单位（PX）！注：只在模板中调用高度值后才有效');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]


'isecoding'=>'0',

//防伪码开关[<span class="hotspot" onmouseover="tooltip.show('设置网站是否启用防伪码！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/关/1/开

'ecoding'=>'CMSEASY',

//防伪码前缀[<span class="hotspot" onmouseover="tooltip.show('设置防伪码的前缀');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]



'manage_pagesize'=>'12',

//后台分页数量[<span class="hotspot" onmouseover="tooltip.show('设置后台内容列表分页数量！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'list_pagesize'=>'12',

//前台分页数量[<span class="hotspot" onmouseover="tooltip.show('设置前台全站内容列表分页数量，如栏目单独设置分页，优先按栏目设置显示！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'search_time'=>'10',
		
//搜索时间限制[<span class="hotspot" onmouseover="tooltip.show('同一关键字在限制时间内不能重复搜索！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]
		


'maxhotkeywordnum'=>'50',

//搜索基数[<span class="hotspot" onmouseover="tooltip.show('热门关键词获取条件，大于基数的为热门关键词！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]


'archive_introducelen'=>'50',

//内容系统简介自动截取长度[<span class="hotspot" onmouseover="tooltip.show('自动获取内容中前200字符为内容简介！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'loginfalsetime'=>'3600',

//登录失败时间[<span class="hotspot" onmouseover="tooltip.show('登录失败时间！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>3600/1小时/18000/5小时/86400/24小时


'gee_id'=>'08ec7f91e55890d35e8e2d5aceee8291',

//极验验证后台ID[<span class="hotspot" onmouseover="tooltip.show('极验验证后台ID！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:25px;" /></span><span><a href="http://user.geetest.com/reg" style="background:#8bb9dc; line-height:28px;padding:8px 10px;border-radius: 3px 3px 3px 3px;color:white;text-align:center; border: 1px solid #6aa7d2;" target="_blank">注册极验</a></span>]

'gee_key'=>'a70cbb24908448dbc6609e44ae50d16f',

//极验验证后台KEY[<span class="hotspot" onmouseover="tooltip.show('极验验证后台KEY！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]


//}


//site-手机版{
'mobile_open'=>'0',
		
//手机版开关[<span class="hotspot" onmouseover="tooltip.show('设置网站是否启用手机版功能，如使用自适应模板请选择关闭独立手机版！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/关/1/开/2/始终

'wap_logo'=>'/images/logo_wap.png',

//手机版logo[<span class="hotspot" onmouseover="tooltip.show('点击绿色加号，上传网站logo！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>image

'wlogo_width'=>'240',

//logo宽度[<span class="hotspot" onmouseover="tooltip.show('设置logo宽度，单位(px)！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'wlogo_height'=>'30',

//logo高度[<span class="hotspot" onmouseover="tooltip.show('设置logo高度，单位(px)！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'wap_style_color'=>'6', 

//手机版整体颜色[<span class="hotspot" onmouseover="tooltip.show('只在手机模板支持换色时有效！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/无/1/红/2/橙/3/黄/4/绿/5/青/6/蓝/7/紫/8/黑/9/白


'wap_foot_nav'=>'1', 

//手机版底部菜单样式[<span class="hotspot" onmouseover="tooltip.show('设置手机底部菜单样式！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/上弹/1/圆形/2/平铺

'wap_foot_nav_position'=>'right', 

//手机版底部菜单位置[<span class="hotspot" onmouseover="tooltip.show('设置手机底部菜单位置！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>left/左/right/右

//}


//site-动静态{


'urlrewrite_on'=>'0', 

//伪静态[<span class="hotspot" onmouseover="tooltip.show('如对伪静态不了解，请关闭！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/关闭/1/开启

'list_cache'=>'1',

//列表缓存[<span class="hotspot" onmouseover="tooltip.show('是否启用php缓存，强烈推荐开启此项！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/关/1/开

'list_cache_time'=>'3600',

//缓存时间[<span class="hotspot" onmouseover="tooltip.show('设置缓存更新的时间，单位（秒）！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'list_page_php'=>'2', 

//栏目页[<span class="hotspot" onmouseover="tooltip.show('设置栏目页动静态显示！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/按指定/1/静态/2/动态

'wap_list_page_php'=>'2',
		
//手机栏目页[<span class="hotspot" onmouseover="tooltip.show('设置手机栏目页动静态显示！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/按指定/1/静态/2/动态
		
'show_page_php'=>'2',

//内容页[<span class="hotspot" onmouseover="tooltip.show('设置内容页动静态显示！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/按指定/1/静态/2/动态

'wap_show_page_php'=>'2',
		
//手机内容页[<span class="hotspot" onmouseover="tooltip.show('设置手机内容页动静态显示！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/按指定/1/静态/2/动态
		
'html_prefix'=>'',

//html存放路径[<span class="hotspot" onmouseover="tooltip.show('设置html生成后存放目录，为空或比如/html');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'wap_html_prefix'=>'/waphtml',
		
//手机html存放路径[<span class="hotspot" onmouseover="tooltip.show('设置手机html生成后存放目录，为空或以/开头！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]
		
'group_on'=>'1', 

//生成分组[<span class="hotspot" onmouseover="tooltip.show('设置是否分组生成，减小生成静态对服务器或空间的压力，避免生成过程中因网速影响中断！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/关/1/开

'group_count'=>'100',

//每组生成个数[<span class="hotspot" onmouseover="tooltip.show('视网速和主机配置而定，推荐设置为"20"！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'tag_html'=>'0',

//生成TAG[<span class="hotspot" onmouseover="tooltip.show('设置是否生成TAG！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/不生成/1/生成

		
'wap_tag_html'=>'0',
		
//生成手机TAG[<span class="hotspot" onmouseover="tooltip.show('设置是否生成手机TAG！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/不生成/1/生成
		
'area_html'=>'0',
		
//生成地区[<span class="hotspot" onmouseover="tooltip.show('设置是否生成地区！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/不生成/1/生成

		
'wap_area_html'=>'0',
		
//生成手机地区[<span class="hotspot" onmouseover="tooltip.show('设置是否生成手机地区！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/不生成/1/生成

'wap_type_html'=>'0',
		
//生成手机分类[<span class="hotspot" onmouseover="tooltip.show('设置是否生成手机分类！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/不生成/1/生成
			
//}









//security-字符过滤{
'filter_word'=>'陈水扁', 

//过滤字符[<span class="hotspot" onmouseover="tooltip.show('网站内容中被过滤替换掉的字符，多个请用“,”隔开！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'filter_x'=>'(*该人已被收押*)', 

//替代字符[<span class="hotspot" onmouseover="tooltip.show('网站内容中被过滤替换掉的字符，多个请用“,”隔开！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]
//}



//site-开关设置{

'safe360_enable'=>'1',

//360安全开关[<span class="hotspot" onmouseover="tooltip.show('打开或者关闭360安全功能');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/关/1/开

'session_ip'=>'0',
		
//SESSION验证IP[<span class="hotspot" onmouseover="tooltip.show('设置网站是否启用固定ip登录验证！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/关/1/开

'ipcheck_enable'=>'1',
		
//后台登录IP验证开关[<span class="hotspot" onmouseover="tooltip.show('打开或者关闭IP验证功能');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/关/1/开


'verifycode'=>'1', 

//验证码开关[<span class="hotspot" onmouseover="tooltip.show('设置网站是否启用验证码！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/关/1/字符/2/拼图


'hotsearch'=>'1', 

//热门关键词开关[<span class="hotspot" onmouseover="tooltip.show('设置网站是否启用二维码！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/关/1/开

'qrcodes'=>'1', 

//二维码开关[<span class="hotspot" onmouseover="tooltip.show('设置网站是否启用二维码！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/关/1/开

'shield_right_key'=>'0',

//屏蔽右键开关[<span class="hotspot" onmouseover="tooltip.show('打开或者关闭屏蔽鼠标右键功能');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/关/1/开

'reg_on'=>'1', 

//注册开关[<span class="hotspot" onmouseover="tooltip.show('设置网站是否启用会员系统！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/关/1/开

'site_login'=>'1',

//是否显示用户登录[<span class="hotspot" onmouseover="tooltip.show('设置是否在网站显示用户登录');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/关/1/开


'invitation_registration'=>'0', 

//邀请注册[<span class="hotspot" onmouseover="tooltip.show('设置是否必须邀请注册用户才能注册！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/关/1/开

'isdebug'=>'0', 

//调试开关[<span class="hotspot" onmouseover="tooltip.show('设置网站是否显示PHP运行错误代码！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/关/1/开

'share'=>'1', 

//分享开关[<span class="hotspot" onmouseover="tooltip.show('设置网站是否显示分享功能！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/关/1/开


'comment'=>'1', 

//评论开关[<span class="hotspot" onmouseover="tooltip.show('设置网站是否显示评论功能！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/关/1/开
		
'comment_list'=>'1',
		
//评论列表[<span class="hotspot" onmouseover="tooltip.show('打开或者关闭评论列表！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/关/1/开


'comment_user'=>'1',
		
//查看评论[<span class="hotspot" onmouseover="tooltip.show('是否允许查看评论列表！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/关/1/开

'reply_comment'=>'0',
		
//盖楼点赞[<span class="hotspot" onmouseover="tooltip.show('是否评论盖楼与点赞！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/关/1/开

'opguestadd'=>'0', 

//游客投稿开关[<span class="hotspot" onmouseover="tooltip.show('设置网站是否启用匿名发布内容，游客发布地址：http://域名/?g=1！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/关/1/开

'shoppingcart'=>'1',

//购物车开关[<span class="hotspot" onmouseover="tooltip.show('打开或者关闭购物车链接');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/关/1/开

'guestbook_enable'=>'1',
		
//留言本开关[<span class="hotspot" onmouseover="tooltip.show('打开或者关闭留言本功能');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/关/1/开


'guestbook_list'=>'1',
		
//留言本列表[<span class="hotspot" onmouseover="tooltip.show('打开或者关闭留言列表！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/关/1/开


'guestbook_user'=>'1',
		
//查看留言列表[<span class="hotspot" onmouseover="tooltip.show('是否允许非会员查看留言列表！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/关/1/开

'stats_enable'=>'1',
		
//蜘蛛统计开关[<span class="hotspot" onmouseover="tooltip.show('打开或者关闭蜘蛛统计功能');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/关/1/开

'order_time'=>'10',
		
//订单时间间隔[<span class="hotspot" onmouseover="tooltip.show('订单时间间隔');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>10/10秒/30/30秒/60/1分钟
	

'bbs_enable'=>'1',
		
//论坛开关[<span class="hotspot" onmouseover="tooltip.show('打开或者关闭论坛功能');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/关/1/开


'nav_blank'=>'0', 

//栏目打开方式[<span class="hotspot" onmouseover="tooltip.show('设置网站导航链接是否在新窗口打开！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/关/1/开

'isautobak'=>'0', 

//数据库自动备份[<span class="hotspot" onmouseover="tooltip.show('数据库可以按日周月自动备份！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/关/1/每日/2/每周/3/每月

'isautocthmtl'=>'0',
		
//每日0点自动生成静态页[<span class="hotspot" onmouseover="tooltip.show('每日0点自动生成首页和栏目页！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/关/1/开


'iscleanstats'=>'0',
		
//自动清除蜘蛛记录[<span class="hotspot" onmouseover="tooltip.show('自动清除蜘蛛记录');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/关/1/每日/2/每周


'site_push'=>'1',

//百度推送[<span class="hotspot" onmouseover="tooltip.show('设置是否在网站开启百度自动内容推送');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/关/1/开
		
//}

//site-手机验证码{

'mobilechk_enable'=>'0',

//手机验证码开关[<span class="hotspot" onmouseover="tooltip.show('打开或者关闭手机验证码功能');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/关/1/开

'mobilechk_admin'=>'0',

//后台登录短信验证开关[<span class="hotspot" onmouseover="tooltip.show('打开或者关闭短信验证功能');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/关/1/开

'mobilechk_reg'=>'1',

//注册[<span class="hotspot" onmouseover="tooltip.show('打开或者关闭注册手机验证码功能');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/关/1/开

'mobilechk_login'=>'1',

//登录[<span class="hotspot" onmouseover="tooltip.show('打开或者关闭登录手机验证码功能');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/关/1/开

'mobilechk_buy'=>'1',

//购买[<span class="hotspot" onmouseover="tooltip.show('打开或者关闭购买手机验证码功能');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/关/1/开

'mobilechk_form'=>'1',

//自定义表单[<span class="hotspot" onmouseover="tooltip.show('打开或者关闭自定义表单手机验证码功能');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/关/1/开

'mobilechk_comment'=>'1',

//评论[<span class="hotspot" onmouseover="tooltip.show('打开或者关闭评论手机验证码功能');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/关/1/开

'mobilechk_guestbook'=>'1',

//留言[<span class="hotspot" onmouseover="tooltip.show('打开或者关闭留言手机验证码功能');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/关/1/开

//}

//缩略图
'smallimage_open' => 1,
'smallimage_width' => 200,
'smallimage_height' => 200,
'smallimage_path' => '/smallimages', 

//相对于upload文件夹而言

//image-图片水印{
'watermark_open'=>'0', 

//水印开关=>0/关/1/开

'watermark_min_width'=>'300',

//最小宽度[<span class="hotspot" onmouseover="tooltip.show('当上传的图片宽度小于设置宽度，不添加水印！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'watermark_min_height'=>'300',

//最小高度[<span class="hotspot" onmouseover="tooltip.show('当上传的图片高度小于设置高度，不添加水印！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'watermark_path'=>'/images/logo.png',

//水印路径[<span class="hotspot" onmouseover="tooltip.show('水印图片支持jpg、gif、png格式！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>image

'watermark_ts'=>'80',

//透明度[<span class="hotspot" onmouseover="tooltip.show('范围为 （1~100 ）的整数，数值越小水印图片越透明！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'watermark_qs'=>'90',

//JPEG图片质量[<span class="hotspot" onmouseover="tooltip.show('范围为（ 0~100 ）的整数，数值越大结果图片效果越好！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'watermark_pos'=>'5',

//添加位置[<span class="hotspot" onmouseover="tooltip.show('请在此选择水印添加的位置（3x3 共9个位置可选）');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>1/1/2/2/3/3/4/4/5/5/6/6/7/7/8/8/9/9
//}

//upload-附件设置{
'upload_filetype'=>'jpg,gif,bmp,jpeg,png,doc,docx,xls,xlsx,zip,rar,7z,txt,pdf,JPG,GIF,BMP,JPEG,PNG,ZIP,RAR,7Z,TXT,PDF,DOC,DOCX,XLS,XLSX', 

//附件类型[<span class="hotspot" onmouseover="tooltip.show('设置添加上传附件的类型，多个后缀用","隔开！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'upload_max_filesize'=>'2', 

//附件大小[<span class="hotspot" onmouseover="tooltip.show('设置上传附件小小上限，单位(MB)！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]
'mods'=>'celive',
//}

//template-模板设置{
'template_dir'=>'default_bootstrap',

//前台模板[默认default]

'template_mobile_dir'=>'wap',

//手机模板[默认mobile]

'user_template_dir'=>'user',

//会员模板[<span class="hotspot" onmouseover="tooltip.show('默认user！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'admin_template_dir'=>'admin',

//后台模板[<span class="hotspot" onmouseover="tooltip.show('默认admin！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]
//}

//ballot-投票设置{
'checkip'=>'1',

//验证IP[<span class="hotspot" onmouseover="tooltip.show('设置投票是否开启IP限制，开启后，同一IP只需投票一次！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/关/1/开

'timer'=>'60',

//时间间隔[<span class="hotspot" onmouseover="tooltip.show('设置同一IP投票的限制时间，单位:分钟！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]
//}

//enlarge-网站客服信息{
'ifonserver'=>'1', 

//开启前台客服[<span class="hotspot" onmouseover="tooltip.show('设置是否在网站中显示悬浮客服侧栏！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>1/开启/0/关闭

'webserver'=>'close', 

//开启WEB客服[<span class="hotspot" onmouseover="tooltip.show('设置是否启用网站WEB客服系统！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>open/开启/close/关闭

'server_template'=>'1',

//选择网站客服样式[<span class="hotspot" onmouseover="tooltip.show('选择网站悬浮客服样式！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>1/扁平彩色/2/扁平灰色/3/经典/4/旧时光


'boxopen'=>'open',

//默认展开客服列表[<span class="hotspot" onmouseover="tooltip.show('设置网站悬浮客服侧栏默认展开状态！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>open/开启/close/关闭


'serverlistp'=>'left',

//客服浮动框位置[<span class="hotspot" onmouseover="tooltip.show('设置网站悬浮客服侧栏显示位置！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>left/左边/right/右边

'liveboxtip'=>'0', 

//弹出邀请对话框[<span class="hotspot" onmouseover="tooltip.show('设置是否弹出主动要请对话框！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>1/开启/0/关闭

'worktime'=>'咨询时间 8:30 - 18:00 周一至周五', 

//工作时间[<span class="hotspot" onmouseover="tooltip.show('填写工作时间！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'qq1name'=>'客服一', 

//客服职务[<span class="hotspot" onmouseover="tooltip.show('填写联系人职务！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]


'qq1'=>'888888', 

//QQ号码[<span class="hotspot" onmouseover="tooltip.show('填写联系QQ号码！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'qq2name'=>'客服二', 

//客服职务[<span class="hotspot" onmouseover="tooltip.show('填写联系人职务！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]


'qq2'=>'888888', 

//QQ号码[<span class="hotspot" onmouseover="tooltip.show('填写联系QQ号码！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'qq3name'=>'客服三', 

//客服职务[<span class="hotspot" onmouseover="tooltip.show('填写联系人职务！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'qq3'=>'', 

//QQ号码[<span class="hotspot" onmouseover="tooltip.show('填写联系QQ号码！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'qq4name'=>'客服四', 

//客服职务[<span class="hotspot" onmouseover="tooltip.show('填写联系人职务！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'qq4'=>'',

//QQ号码[<span class="hotspot" onmouseover="tooltip.show('填写联系QQ号码！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'qq5name'=>'客服五', 

//客服职务[<span class="hotspot" onmouseover="tooltip.show('填写联系人职务！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'qq5'=>'',

//QQ号码[<span class="hotspot" onmouseover="tooltip.show('填写联系QQ号码！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'wangwangname'=>'淘宝客服', 

//客服职务[<span class="hotspot" onmouseover="tooltip.show('填写联系人职务！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'wangwang'=>'cmseasy', 

//淘宝旺旺号码[<span class="hotspot" onmouseover="tooltip.show('填写联系淘宝旺旺号码！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'aliname'=>'阿里巴巴', 

//客服职务[<span class="hotspot" onmouseover="tooltip.show('填写联系人职务！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'ali'=>'cmseasy', 

//阿里旺旺号码[<span class="hotspot" onmouseover="tooltip.show('填写联系阿里旺旺号码！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'skypename'=>'Skype客服', 

//客服职务[<span class="hotspot" onmouseover="tooltip.show('填写联系人职务！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'skype'=>'admin@admin.com', 

//Skype号码[<span class="hotspot" onmouseover="tooltip.show('填写联系Skype号码！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]




//}

//ditu-地图设置{
'ditu_width'=>'640', 

//地图宽度[<span class="hotspot" onmouseover="tooltip.show('填写地图的宽度，例如：360！，单位（PX）！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'ditu_height'=>'460', 

//地图高度[<span class="hotspot" onmouseover="tooltip.show('填写地图的高度，例如：300！，单位（PX）！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'ditu_center_left'=>'116.47033', 

//地图-经度[<span class="hotspot" onmouseover="tooltip.show('填写地图的经度！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'ditu_center_right'=>'39.919009', 

//地图-纬度[<span class="hotspot" onmouseover="tooltip.show('填写地图的纬度！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'ditu_level'=>'12',

//显示级别[<span class="hotspot" onmouseover="tooltip.show('填写地图的显示级别！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'ditu_google_key'=>'谷歌地图API-KEY',

//信息窗标题[<span class="hotspot" onmouseover="tooltip.show('如使用谷歌地图，需填写谷歌地图API KEY！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'ditu_title'=>'某某科技公司',

//信息窗标题[<span class="hotspot" onmouseover="tooltip.show('填写地图坐标点提示信息标题！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'ditu_content'=>'地址：某某省某某市某某街某某号<br>电话：888-88888888',

//信息窗内容[<span class="hotspot" onmouseover="tooltip.show('填写地图坐标点提示信息内容！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'ditu_maker_left'=>'116.47033',

//标记点经度[<span class="hotspot" onmouseover="tooltip.show('填写地图坐标点经度！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'ditu_maker_right'=>'39.919009',

//标记点纬度[<span class="hotspot" onmouseover="tooltip.show('填写地图坐标点提示纬度！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'ditu_explain'=>'',

//使用说明

//}

//mail-邮件设置{
	
'send_type'=>'2', 

//邮件发送方式[<span class="hotspot" onmouseover="tooltip.show('设置邮件发送模式！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/请选择/1/Sendmail/2/SOCKET/3/PHP函数

'header_var'=>'1', 

//邮件头的分隔符=>99/请选择/1/CRLF分隔符(Windows)/0/LF分隔符(Unix|Linux)/2/CR分隔符(Mac)

'kill_error'=>'1', 

//屏蔽错误提示=>0/否/1/是

//}


//mail-SOCKET{
	
'smtp_mail_host'=>'smtp.qq.com', 

//SMTP服务器

'smtp_mail_port'=>'25', 

//SMTP端口

'smtp_mail_auth'=>'1',

//要求身份验证=>0/否/1/是

'smtp_user_add'=>'admin@admin.com', 

//发信人地址[<span class="hotspot" onmouseover="tooltip.show('填写发信人邮箱！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'smtp_mail_username'=>'admin@admin.com', 

//用户名[<span class="hotspot" onmouseover="tooltip.show('填写发信人用户名，一般为邮箱名称！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'smtp_mail_password'=>'admin', 

//密码[<span class="hotspot" onmouseover="tooltip.show('填写发信邮箱密码！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

//}

//mail-PHP函数{
	
'smtp_host'=>'smtp.qq.com',

//SMTP服务器

'smtp_port'=>'25', 

//SMTP端口

//}

//mail-开关设置{
'email_gust_send_cust'=>'0',

//留言发送客户邮箱[<span class="hotspot" onmouseover="tooltip.show('填写留言后，是否发送到填写邮箱通知！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/否/1/是

'email_guest_send_admin'=>'0',

//留言发送管理员邮箱[<span class="hotspot" onmouseover="tooltip.show('填写留言后，是否发送到管理员邮箱通知！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/否/1/是

'email_order_send_cust'=>'0',

//订单发送客户邮箱[<span class="hotspot" onmouseover="tooltip.show('填写订单后，是否发送到填写邮箱通知！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/否/1/是

'email_order_send_admin'=>'0',
		
//订单发送管理员邮箱[<span class="hotspot" onmouseover="tooltip.show('填写订单后，是否发送到管理员邮箱通知！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/否/1/是
	
'email_form_on'=>'0',
		
//自定义表单发送邮件[<span class="hotspot" onmouseover="tooltip.show('填写表单后，是否发送到填写邮箱通知！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/否/1/是

'email_form_send_admin'=>'0',

//自定义表单发送管理员邮箱[<span class="hotspot" onmouseover="tooltip.show('填写表单后，是否发送到管理员邮箱通知！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/否/1/是

'email_reg_on'=>'0',
		
//注册用户发送邮件[<span class="hotspot" onmouseover="tooltip.show('注册用户后，是否发送到填写邮箱通知！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>0/否/1/是
		
//}


//slide-幻灯片设置{
'slide_width'=>'990',

//幻灯宽度[<span class="hotspot" onmouseover="tooltip.show('设置幻灯片的显示宽度！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'slide_height'=>'750',

//幻灯高度[<span class="hotspot" onmouseover="tooltip.show('设置幻灯片的显示高度！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'slide_number'=>'3', 

//幻灯片数量[<span class="hotspot" onmouseover="tooltip.show('设置幻灯片的数量，小于或等于5！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'slide_time'=>'5', 

//自动播放时间[<span class="hotspot" onmouseover="tooltip.show('上传幻灯中的图片！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'slide_text_color'=>'ffffff', 

//文字颜色[<span class="hotspot" onmouseover="tooltip.show('上传幻灯中的图片！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'slide_text_bg'=>'0099ff', 

//文字背景颜色[<span class="hotspot" onmouseover="tooltip.show('上传幻灯中的图片！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'slide_btn_transparent'=>'20', 

//文字背景透明度[<span class="hotspot" onmouseover="tooltip.show('上传幻灯中的图片！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'slide_btn_text_color'=>'ffffff', 

//按键数字颜色[<span class="hotspot" onmouseover="tooltip.show('上传幻灯中的图片！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'slide_btn_hover_color'=>'0099ff', 

//当前按键颜色[<span class="hotspot" onmouseover="tooltip.show('上传幻灯中的图片！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'slide_btn_color'=>'000000', 

//普通按键色[<span class="hotspot" onmouseover="tooltip.show('上传幻灯中的图片！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]



'slide_pic1'=>'/images/slide/banner01.jpg',

//图片1地址[<span class="hotspot" onmouseover="tooltip.show('上传幻灯中的图片！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>image

'slide_pic1_title'=>'响应式网站模板，不同终端，同样精彩 ',

//图片1标题[<span class="hotspot" onmouseover="tooltip.show('填写幻灯中的标题！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'slide_pic1_info'=>'全新推出「响应式网站模板」，移动端访客能够得到与电脑网站一样的体验，轻松找到在电脑网站上看到的内容，无论是在电脑、平板、手机上都可以访问到排版合适的网站，即便是微信等应用内置浏览器也是如此。',

//图片1副标题[<span class="hotspot" onmouseover="tooltip.show('填写幻灯中的副标题！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'slide_pic1_url'=>'http://www.cmseasy.cn',

//图片1链接地址[<span class="hotspot" onmouseover="tooltip.show('注意链接中的&要用%26替换！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'slide_pic2'=>'/images/slide/banner02.jpg', 

//图片2地址[<span class="hotspot" onmouseover="tooltip.show('上传幻灯中的图片！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>image

'slide_pic2_title'=>'海量精美CmsEasy模板免费下载', 

//图片2标题[<span class="hotspot" onmouseover="tooltip.show('填写幻灯中的标题！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'slide_pic2_info'=>'cmseasy是一款基于 PHP+Mysql 架构的网站内容管理系统，也是一个 PHP 开发平台。 采用模块化方式开发，功能易用便于扩展，可面向大中型站点提供重量级网站建设解决方案。',

//图片2副标题[<span class="hotspot" onmouseover="tooltip.show('填写幻灯中的副标题！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'slide_pic2_url'=>'http://www.cmseasy.cn/free_templates/', 

//图片2链接地址[<span class="hotspot" onmouseover="tooltip.show('注意链接中的&要用%26替换！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'slide_pic3'=>'/images/slide/banner03.jpg', 

//图片3地址[<span class="hotspot" onmouseover="tooltip.show('上传幻灯中的图片！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>image

'slide_pic3_title'=>'唯一内置推广模块的企业网站管理系统！',

//图片3标题[<span class="hotspot" onmouseover="tooltip.show('填写幻灯中的标题！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'slide_pic3_info'=>'全国首家内置推广联盟模块的企业网站系统，为企业在营销推广方面，提供了非常便捷的方法和功能。通过推广联盟，企业可针对联盟会员进行统计外链发布数量，通过外链访问的流量统计，并可计算出通过外链而注册的企业用户数量。',

//图片3副标题[<span class="hotspot" onmouseover="tooltip.show('填写幻灯中的副标题！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'slide_pic3_url'=>'http://www.cmseasy.cn/chm/yong-hu/show_114.html',

//图片3链接地址[<span class="hotspot" onmouseover="tooltip.show('注意链接中的&要用%26替换！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'slide_pic4'=>'/images/slide/banner04.jpg',

//图片4地址[<span class="hotspot" onmouseover="tooltip.show('上传幻灯中的图片！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>image

'slide_pic4_title'=>'欢迎网建公司及工作室参与CmsEasy官方分享计划', //图片4标题[<span class="hotspot" onmouseover="tooltip.show('填写幻灯中的标题！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'slide_pic4_info'=>'cmseasy是一款基于 PHP+Mysql 架构的网站内容管理系统，也是一个 PHP 开发平台。 采用模块化方式开发，功能易用便于扩展，可面向大中型站点提供重量级网站建设解决方案。',

//图片4副标题[<span class="hotspot" onmouseover="tooltip.show('填写幻灯中的副标题！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'slide_pic4_url'=>'http://www.cmseasy.cn',

//图片4链接地址[<span class="hotspot" onmouseover="tooltip.show('注意链接中的&要用%26替换！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'slide_pic5'=>'/images/slide/banner05.jpg',

//图片5地址[<span class="hotspot" onmouseover="tooltip.show('上传幻灯中的图片！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>image

'slide_pic5_title'=>'CmsEasy服务/售后/程序多重升级', 

//图片5标题[<span class="hotspot" onmouseover="tooltip.show('填写幻灯中的标题！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'slide_pic5_info'=>'cmseasy是一款基于 PHP+Mysql 架构的网站内容管理系统，也是一个 PHP 开发平台。 采用模块化方式开发，功能易用便于扩展，可面向大中型站点提供重量级网站建设解决方案。',

//图片5副标题[<span class="hotspot" onmouseover="tooltip.show('填写幻灯中的副标题！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'slide_pic5_url'=>'http://www.cmseasy.cn',

//图片5链接地址[<span class="hotspot" onmouseover="tooltip.show('注意链接中的&要用%26替换！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

//}


//wslide-手机幻灯设置{

'wslide_width'=>'300',

//幻灯宽度[<span class="hotspot" onmouseover="tooltip.show('设置幻灯片的显示宽度！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'wslide_height'=>'440',

//幻灯高度[<span class="hotspot" onmouseover="tooltip.show('设置幻灯片的显示高度！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'wslide_number'=>'3', 

//幻灯片数量[<span class="hotspot" onmouseover="tooltip.show('设置幻灯片的数量，小于或等于5！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'wslide_pic1'=>'/images/slide/banner06.jpg',

//图片1地址[<span class="hotspot" onmouseover="tooltip.show('上传幻灯中的图片！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>image

'wslide_pic1_title'=>'CmsEasy3.0助力企业网络营销',

//图片1标题[<span class="hotspot" onmouseover="tooltip.show('填写幻灯中的标题！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'wslide_pic1_url'=>'http://www.cmseasy.cn',

//图片1链接地址[<span class="hotspot" onmouseover="tooltip.show('注意链接中的&要用%26替换！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'wslide_pic2'=>'/images/slide/banner07.jpg', 

//图片2地址[<span class="hotspot" onmouseover="tooltip.show('上传幻灯中的图片！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>image

'wslide_pic2_title'=>'海量精美CmsEasy模板免费下载', 

//图片2标题[<span class="hotspot" onmouseover="tooltip.show('填写幻灯中的标题！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'wslide_pic2_url'=>'http://www.cmseasy.cn', 

//图片2链接地址[<span class="hotspot" onmouseover="tooltip.show('注意链接中的&要用%26替换！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'wslide_pic3'=>'/images/slide/banner08.jpg', 

//图片3地址[<span class="hotspot" onmouseover="tooltip.show('上传幻灯中的图片！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>image

'wslide_pic3_title'=>'免费下载CmsEasy,还有机会获取商业授权',

//图片3标题[<span class="hotspot" onmouseover="tooltip.show('填写幻灯中的标题！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'wslide_pic3_url'=>'http://www.cmseasy.cn',

//图片3链接地址[<span class="hotspot" onmouseover="tooltip.show('注意链接中的&要用%26替换！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'wslide_pic4'=>'/images/slide/banner09.jpg',

//图片4地址[<span class="hotspot" onmouseover="tooltip.show('上传幻灯中的图片！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>image

'wslide_pic4_title'=>'欢迎网建公司及工作室参与CmsEasy官方分享计划', 

//图片4标题[<span class="hotspot" onmouseover="tooltip.show('填写幻灯中的标题！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'wslide_pic4_url'=>'http://www.cmseasy.cn',

//图片4链接地址[<span class="hotspot" onmouseover="tooltip.show('注意链接中的&要用%26替换！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'wslide_pic5'=>'/images/slide/banner10.jpg',

//图片5地址[<span class="hotspot" onmouseover="tooltip.show('上传幻灯中的图片！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>image

'wslide_pic5_title'=>'CmsEasy服务/售后/程序多重升级', 

//图片5标题[<span class="hotspot" onmouseover="tooltip.show('填写幻灯中的标题！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'wslide_pic5_url'=>'http://www.cmseasy.cn',

//图片5链接地址[<span class="hotspot" onmouseover="tooltip.show('注意链接中的&要用%26替换！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

//}

//cslide-内页切换图片{

'cslide_width'=>'990',

//幻灯宽度[<span class="hotspot" onmouseover="tooltip.show('设置幻灯片的显示宽度！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'cslide_height'=>'160',

//幻灯高度[<span class="hotspot" onmouseover="tooltip.show('设置幻灯片的显示高度！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'cslide_pic1'=>'/images/banner/s1.jpg',

//图片1地址[<span class="hotspot" onmouseover="tooltip.show('上传幻灯中的图片！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>image

'cslide_pic1_title'=>'CmsEasy3.0助力企业网络营销',

//图片1标题[<span class="hotspot" onmouseover="tooltip.show('填写幻灯中的标题！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'cslide_pic1_url'=>'http://www.cmseasy.cn',

//图片1链接地址[<span class="hotspot" onmouseover="tooltip.show('注意链接中的&要用%26替换！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'cslide_pic2'=>'/images/banner/s2.jpg', 

//图片2地址[<span class="hotspot" onmouseover="tooltip.show('上传幻灯中的图片！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>image

'cslide_pic2_title'=>'CmsEasy服务/售后/程序多重升级', 

//图片2标题[<span class="hotspot" onmouseover="tooltip.show('填写幻灯中的标题！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'cslide_pic2_url'=>'http://www.cmseasy.cn', 

//图片2链接地址[<span class="hotspot" onmouseover="tooltip.show('注意链接中的&要用%26替换！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'cslide_pic3'=>'/images/banner/s3.jpg', 

//图片3地址[<span class="hotspot" onmouseover="tooltip.show('上传幻灯中的图片！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>image

'cslide_pic3_title'=>'欢迎网建公司及工作室参与CmsEasy官方分享计划',

//图片3标题[<span class="hotspot" onmouseover="tooltip.show('填写幻灯中的标题！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'cslide_pic3_url'=>'http://www.cmseasy.cn',

//图片3链接地址[<span class="hotspot" onmouseover="tooltip.show('注意链接中的&要用%26替换！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'cslide_pic4'=>'/images/banner/s4.jpg',

//图片4地址[<span class="hotspot" onmouseover="tooltip.show('上传幻灯中的图片！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>image

'cslide_pic4_title'=>'免费下载CmsEasy,还有机会获取商业授权！', //图片4标题[<span class="hotspot" onmouseover="tooltip.show('填写幻灯中的标题！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'cslide_pic4_url'=>'http://www.cmseasy.cn',

//图片4链接地址[<span class="hotspot" onmouseover="tooltip.show('注意链接中的&要用%26替换！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'cslide_pic5'=>'/images/banner/s5.jpg',

//图片5地址[<span class="hotspot" onmouseover="tooltip.show('上传幻灯中的图片！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>image

'cslide_pic5_title'=>'CmsEasy3.0助力企业网络营销', 

//图片5标题[<span class="hotspot" onmouseover="tooltip.show('填写幻灯中的标题！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'cslide_pic5_url'=>'http://www.cmseasy.cn',

//图片5链接地址[<span class="hotspot" onmouseover="tooltip.show('注意链接中的&要用%26替换！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

//}


//wapcslide-手机内页切换图片{

'wapcslide_width'=>'990',

//幻灯宽度[<span class="hotspot" onmouseover="tooltip.show('设置幻灯片的显示宽度！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'wapcslide_height'=>'120',

//幻灯高度[<span class="hotspot" onmouseover="tooltip.show('设置幻灯片的显示高度！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'wapcslide_pic1'=>'/images/banner/s1.jpg',

//图片1地址[<span class="hotspot" onmouseover="tooltip.show('上传幻灯中的图片！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>image

'wapcslide_pic1_title'=>'CmsEasy3.0助力企业网络营销',

//图片1标题[<span class="hotspot" onmouseover="tooltip.show('填写幻灯中的标题！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'wapcslide_pic1_url'=>'http://www.cmseasy.cn',

//图片1链接地址[<span class="hotspot" onmouseover="tooltip.show('注意链接中的&要用%26替换！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'wapcslide_pic2'=>'/images/banner/s2.jpg', 

//图片2地址[<span class="hotspot" onmouseover="tooltip.show('上传幻灯中的图片！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>image

'wapcslide_pic2_title'=>'CmsEasy服务/售后/程序多重升级', 

//图片2标题[<span class="hotspot" onmouseover="tooltip.show('填写幻灯中的标题！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'wapcslide_pic2_url'=>'http://www.cmseasy.cn', 

//图片2链接地址[<span class="hotspot" onmouseover="tooltip.show('注意链接中的&要用%26替换！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'wapcslide_pic3'=>'/images/banner/s3.jpg', 

//图片3地址[<span class="hotspot" onmouseover="tooltip.show('上传幻灯中的图片！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>image

'wapcslide_pic3_title'=>'欢迎网建公司及工作室参与CmsEasy官方分享计划',

//图片3标题[<span class="hotspot" onmouseover="tooltip.show('填写幻灯中的标题！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'cslide_pic3_url'=>'http://www.cmseasy.cn',

//图片3链接地址[<span class="hotspot" onmouseover="tooltip.show('注意链接中的&要用%26替换！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'wapcslide_pic4'=>'/images/banner/s4.jpg',

//图片4地址[<span class="hotspot" onmouseover="tooltip.show('上传幻灯中的图片！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>image

'wapcslide_pic4_title'=>'免费下载CmsEasy,还有机会获取商业授权！', //图片4标题[<span class="hotspot" onmouseover="tooltip.show('填写幻灯中的标题！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'wapcslide_pic4_url'=>'http://www.cmseasy.cn',

//图片4链接地址[<span class="hotspot" onmouseover="tooltip.show('注意链接中的&要用%26替换！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'wapcslide_pic5'=>'/images/banner/s5.jpg',

//图片5地址[<span class="hotspot" onmouseover="tooltip.show('上传幻灯中的图片！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>image

'wapcslide_pic5_title'=>'CmsEasy3.0助力企业网络营销', 

//图片5标题[<span class="hotspot" onmouseover="tooltip.show('填写幻灯中的标题！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'wapcslide_pic5_url'=>'http://www.cmseasy.cn',

//图片5链接地址[<span class="hotspot" onmouseover="tooltip.show('注意链接中的&要用%26替换！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

//}



'$mF'=>array(

"mF_fscreen_tb","mF_YSlider","mF_luluJQ","mF_51xflash","mF_expo2010","mF_games_tb",
"mF_ladyQ","mF_liquid","mF_liuzg","mF_pithy_tb","mF_qiyi","mF_quwan","mF_rapoo",
"mF_sohusports","mF_taobao2010","mF_taobaomall","mF_tbhuabao","mF_pconline","mF_peijianmall",
"mF_classicHC","mF_classicHB","mF_slide3D","mF_kiki",

),

//ifocus-焦点图设置{
'ifocus_width'=>'450', 

//焦点图幻灯宽度[<span class="hotspot" onmouseover="tooltip.show('设置焦点图幻灯的显示宽度！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'ifocus_height'=>'280', 

//焦点图幻灯高度[<span class="hotspot" onmouseover="tooltip.show('设置焦点图幻灯的显示高度！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'ifocus_number'=>'5', 

//幻灯片数量[<span class="hotspot" onmouseover="tooltip.show('设置焦点图幻灯的数量，小于或等于5！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'ifocus_time'=>'3', 

//切换时间间隔[<span class="hotspot" onmouseover="tooltip.show('设置焦点图幻灯的切换时间间隔，单位秒！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'ifocus_pattern'=>'mF_pithy_tb', 

//风格应用选择=>$mF

'ifocus_pic1'=>'images/ifocus/1.jpg',

//图片1地址[<span class="hotspot" onmouseover="tooltip.show('上传焦点图幻灯中的图片！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>image

'ifocus_pic1_title'=>'CmsEasy3.0助力企业网络营销',

//图片1标题[<span class="hotspot" onmouseover="tooltip.show('填写焦点图幻灯中的标题！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'ifocus_pic1_url'=>'http://www.cmseasy.cn', 

//图片1链接地址[<span class="hotspot" onmouseover="tooltip.show('注意链接中的&要用%26替换！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'ifocus_pic2'=>'images/ifocus/2.jpg',

//图片2地址[<span class="hotspot" onmouseover="tooltip.show('上传焦点图幻灯中的图片！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>image

'ifocus_pic2_title'=>'海量精美CmsEasy模板免费下载', 

//图片2标题[<span class="hotspot" onmouseover="tooltip.show('填写焦点图幻灯中的标题！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'ifocus_pic2_url'=>'http://www.cmseasy.cn',

//图片2链接地址[<span class="hotspot" onmouseover="tooltip.show('注意链接中的&要用%26替换！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'ifocus_pic3'=>'images/ifocus/3.jpg',

//图片3地址[<span class="hotspot" onmouseover="tooltip.show('上传焦点图幻灯中的图片！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>image

'ifocus_pic3_title'=>'免费下载CmsEasy,还有机会获取商业授权',

//图片3标题[<span class="hotspot" onmouseover="tooltip.show('填写焦点图幻灯中的标题！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'ifocus_pic3_url'=>'http://www.cmseasy.cn',

//图片3链接地址[<span class="hotspot" onmouseover="tooltip.show('注意链接中的&要用%26替换！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'ifocus_pic4'=>'images/ifocus/4.jpg', 

//图片4地址[<span class="hotspot" onmouseover="tooltip.show('上传焦点图幻灯中的图片！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>image

'ifocus_pic4_title'=>'欢迎网建公司及工作室参',

//图片4标题[<span class="hotspot" onmouseover="tooltip.show('填写焦点图幻灯中的标题！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'ifocus_pic4_url'=>'http://www.cmseasy.cn',

//图片4链接地址[<span class="hotspot" onmouseover="tooltip.show('注意链接中的&要用%26替换！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'ifocus_pic5'=>'images/ifocus/5.jpg',

//图片5地址[<span class="hotspot" onmouseover="tooltip.show('上传焦点图幻灯中的图片！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>image

'ifocus_pic5_title'=>'CmsEasy服务/售后/程序多重升级', 

//图片5标题[<span class="hotspot" onmouseover="tooltip.show('填写焦点图幻灯中的标题！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'ifocus_pic5_url'=>'http://www.cmseasy.cn',

//图片5链接地址[<span class="hotspot" onmouseover="tooltip.show('注意链接中的&要用%26替换！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

//}

//sms-短信设置{
'sms_username'=>'', 

//用户名[<span class="hotspot" onmouseover="tooltip.show('请输入短信平台注册时填写的用户名！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>&nbsp&nbsp;<a href=http://pay.cmseasy.cn/reg.php target=_blank  class=btn_a>注册用户</a>]

'sms_password'=>'', 

//密码[<span class="hotspot" onmouseover="tooltip.show('请输入短信平台注册时填写的密码！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'sms_on'=>'0', 

//短信开关[<span class="hotspot" onmouseover="tooltip.show('设置是否开启短信通知功能！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>1/开启/0/关闭

'sms_keyword'=>'共产党,江泽民', 

//替换非法字符[<span class="hotspot" onmouseover="tooltip.show('设置屏蔽短信中的非法字符，多个字符用英文逗号分隔！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'sms_maxnum'=>'100',  

//最多发送[<span class="hotspot" onmouseover="tooltip.show('每天发送的最大条数！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'sms_reg_on'=>'1',

//注册发送[<span class="hotspot" onmouseover="tooltip.show('设置用户注册后，是否发送欢迎短信！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>1/是/0/否

'sms_guestbook_on'=>'1', 

//留言发送[<span class="hotspot" onmouseover="tooltip.show('设置客户确认留言后，是否向客户发送确认收到留言通知！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>1/是/0/否

'sms_order_on'=>'1', 

//订单发送=>1/是/0/否

'sms_form_on'=>'1', 

//表单发送[<span class="hotspot" onmouseover="tooltip.show('设置客户确认留言后，是否向客户发送确认表单内容！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>1/是/0/否

'sms_guestbook_admin_on'=>'1',

//确认留言[<span class="hotspot" onmouseover="tooltip.show('客户确认留言后，是否向管理员发送通知！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>1/是/0/否

'sms_form_admin_on'=>'1',

//确认表单[<span class="hotspot" onmouseover="tooltip.show('客户确认表单后，是否向管理员发送通知！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>1/是/0/否

'sms_order_admin_on'=>'1', 

//确认订单[<span class="hotspot" onmouseover="tooltip.show('客户确认订单后，是否向管理员发送通知！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>1/是/0/否

'sms_consult_admin_on'=>'1',  

//开启咨询[<span class="hotspot" onmouseover="tooltip.show('是否开启页底右侧悬浮短信咨询！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]=>1/是/0/否

//}

//cnzz-cnzz统计配置{
'cnzz_user'=>'80862620', 

//不要修改！[<span class="hotspot" onmouseover="tooltip.show('自动生成,请牢记,每域名只赠送一个全景帐号！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]

'cnzz_pass'=>'1997573842',

//不要修改！[<span class="hotspot" onmouseover="tooltip.show('自动生成,请牢记,每域名只赠送一个全景帐号！');" onmouseout="tooltip.hide();"><img src="./images/admin/remind.gif" alt="" width="14" height="20" style="margin-left:10px; margin-right:5px;" /></span>]
//}
);