<?php
echo <<<EOF
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="ja">
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Language" content="ja">
<title></title>


<script type='text/javascript'>
  function listener(event){
  if (event.origin !== 'http://parenthost') return
  document.getElementById('userid').value = event.data;
  document.cf.submit();
  }


if(window.addEventListener){
  addEventListener('message', listener, false);
}
else{
  attachEvent('onmessage', listener);
}

function check_submit() {
	 document.cf.submit();

}


</script>

</head>
<body>
    
 child page

  <div>
    <form id="cf" name="cf" action="/postresult.php" method="post" >
      userid：<input type='text' width='50' name='post' id='userid' ><br/>
      <input type="button" name="submit_buton" value="送信" onClick="check_submit()">
    </form>
<a href="javascript:check_submit();">submit</a>
  </div>
</body>
</html>

EOF
?>
