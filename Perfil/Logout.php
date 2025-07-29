<?php
session_start();

$cierre=session_destroy();
if ($cierre){
echo'<script>
alert("Se Cerro la Sesion")
self.location="../index.php"
</script>';
};
exit;
?>