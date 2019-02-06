<?php
echo "i'm here";
include_once "Manager.php";
$cancel = new Manager();
$cancel->Maintain_room(1);
echo "done";