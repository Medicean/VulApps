<?php

// PHP 测试脚本来自：
//
// https://github.com/phith0n/vulhub/blob/master/ffmpeg/phdays/www/index.php

if(!empty($_FILES)) {
  $filename = @escapeshellarg($_FILES['file']['tmp_name']);
  $newname = './' . uniqid() . '.mp4';
  @shell_exec("ffmpeg -i $filename $newname");
}
?>

<html>
<head>
<meta charset="utf-8">
  <title>CVE-2017-9993 视频播放器</title>
</head>
<body>
<h1>CVE-2017-9993 Demo</h1>

<?php if(!empty($_FILES)): ?>
<div>
  <video src="<?=$newname?>" controls="controls" width="640" height="480"></video>
</div>
<?php endif; ?>
  <form method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="提交">
  </form>

</body>
</html>