<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<?$APPLICATION->ShowHead();?>
<link href="<?=SITE_TEMPLATE_PATH?>/css/bootstrap.css" type="text/css" rel="stylesheet" />
<link href="<?=SITE_TEMPLATE_PATH?>/css/font-awesome.css" type="text/css" rel="stylesheet" />
	<title><?$APPLICATION->ShowTitle()?></title>
</head>
<body>
	<div id="panel"><?$APPLICATION->ShowPanel();?></div>
	<h1 id="pagetitle"><?$APPLICATION->ShowTitle(false);?></h1>
