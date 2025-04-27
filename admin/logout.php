<?php
  session_start();
  unset($_SESSION['email']);
  session_destroy();
?> 
<script type="text/javascript">
     window.location="index.php?email=";
</script>