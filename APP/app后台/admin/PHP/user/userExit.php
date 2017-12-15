<?php
//清除cookie
setcookie("user_id","",time()-1);
//setcookie("user_name","",time()-1);
  echo "<script>window.location.href='../../login.html';</script>";
