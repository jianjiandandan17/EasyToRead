<?php

setcookie('username','',time()-1,'/');
setcookie('userid','',time()-1,'/');

echo "<script>location='login.php'</script>";
?>