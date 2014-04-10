<?php

OCP\User::checkLoggedIn();

OCP\App::checkAppEnabled('gpstracking');

$tpl = new OCP\Template('gpstracking', 'main', 'user');
$tpl->assign('msg', 'Hello World');
$tpl->printPage();
