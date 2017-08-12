<html>
 <head>
  <meta charset="utf-8">
  <title>Repository Clone</title>
 </head>
 <body>
    <p>CVE-2017-1000117 Demo</p>
    <form method="post">
        <label for="repourl">Repository’s clone URL</label><br>
        <input id="repourl" type="input" name="repourl" placeholder="https://github.com/VulApps/CVE-2017-1000117.git" style="width: 400px;height: 30px;margin-bottom: 10px;margin-top: 10px;"><br/>
        <input type="submit" value="Submit" />
    </form>
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
