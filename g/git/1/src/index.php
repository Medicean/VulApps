<html>
 <head>
  <meta charset="utf-8">
  <title>Repository Clone</title>
 </head>
 <body>
    <p>CVE-2018-11235 Vuln Demo</p>
    <form method="post">
        <label for="repourl">Repository’s clone URL</label><br>
        <input id="repourl" type="input" name="repourl" placeholder="https://github.com/VulApps/CVE-2018-11235.git" style="width: 400px;height: 30px;margin-bottom: 10px;margin-top: 10px;"><br/>
        <input type="submit" value="Submit" />
    </form>
    <p>注意:GitHub 和微软（通过 Visual Studio Team Services）的 Git 托管服务已经部署了这些补丁，clone 的 URL 可以使用自己的服务器。</p>
<?php 
    if (isset($_REQUEST['repourl']) && !empty($_REQUEST['repourl'])) {
        $repourl = escapeshellarg($_REQUEST['repourl']);
        @chdir("/var/www/html/repos/");
        shell_exec("git clone --recursive $repourl");
        echo 'See your project at: <a href="/repos">Repos</a>';
    }
?>
 </body>
</html>
