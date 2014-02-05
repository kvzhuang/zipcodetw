<?php
setlocale(LC_CTYPE, "en_US.UTF-8");
$address = $_GET["a"];
if (trim($address) != "")
{
    $zipcode = exec("python ./find.py ". escapeshellcmd(escapeshellarg($address)));
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Taiwan Address Zipcode 查詢器</title>
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<style>
body {
 font-family: "Microsoft YaHei","微軟雅黑","Microsoft JhengHei","华文黑体",STHeiti;
}
</style>
</head>
<body>
    <div class="container">
        <h1>台灣郵遞區號查詢器</h1>
<?php if (isset($zipcode)) : ?>
        <h2><?php echo $address; ?> 的郵遞區號是:<?php echo $zipcode; ?></h2>
<?php endif ?>
        <form action="findzip.php" METHOD="GET" class="form-horizontal" >
            <div class="control-group">
                 <label for="access_token" class="control-label">地址 *</label>
                 <div class="controls">
                     <input type="text" id="a" name="a" placeholder="Address">
                     <span class="help-block">請輸入地址</span>
                </div>
            </div>
            <div class="control-group">
                 <div class="controls">
                    <input type="submit" class="btn btn-default">
                 </div>
            </div>
        </form>
        <span>Inspired by Mosky Liu , <a href="https://github.com/moskytw/zipcodetw">zipcodetw</a>.</span>
    </div>
<script>
$(function() {
  });
</script>
</body>
</html>

