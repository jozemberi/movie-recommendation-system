<?php

require_once './helpers/smarty.php';

$smarty = new Smarty();

$smarty->assign('page_title', 'Dokumentacija');

$smarty->display('doc.tpl');

