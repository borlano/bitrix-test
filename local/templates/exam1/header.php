<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <title><? $APPLICATION->ShowTitle() ?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8"/>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/reset.css"/>
  <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/style.css"/>
  <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/owl.carousel.css"/>
  <script src="<?= SITE_TEMPLATE_PATH ?>/js/jquery.min.js"></script>
  <script src="<?= SITE_TEMPLATE_PATH ?>/js/owl.carousel.min.js"></script>
  <script src="<?= SITE_TEMPLATE_PATH ?>/js/scripts.js"></script>
  <link rel="icon" type="image/vnd.microsoft.icon" href="<?= SITE_TEMPLATE_PATH ?>/img/favicon.ico">
  <link rel="shortcut icon" href="<?= SITE_TEMPLATE_PATH ?>/img/favicon.ico">
  <?$APPLICATION->ShowHead()?>
</head>
<body>
<? $APPLICATION->ShowPanel(); ?>
<!-- wrap -->
<div class="wrap">
  <!-- header -->
  <header class="header">
    <div class="inner-wrap">
      <div class="logo-block"><a href="<?= SITE_DIR ?>" class="logo" title="<?= GetMessage('CFT_MAIN') ?>"><?
              $APPLICATION->IncludeFile(
                  SITE_DIR . "include/company_name.php",
                  Array(),
                  Array("MODE" => "html")
              );
              ?></a>
      </div>
      <div class="main-phone-block">
      <?
      $start_date = strtotime("09:00");
      $end_date = strtotime("18:00");
      $current_time = time();

      ?>
      <?if($current_time > $start_date && $current_time < $end_date):?>
        <a href="tel:84952128506" class="phone">8 (495) 212-85-06</a>
        <?else:?>
        <a href="mailto:store@store.ru" class="phone">store@store.ru</a>
        <?endif;?>
        <div class="shedule">время работы с 9-00 до 18-00</div>
      </div>
       <div class="actions-block">
        <form action="/" class="main-frm-search">
          <input type="text" placeholder="Поиск">
          <button type="submit"></button>
        </form>
        <nav class="menu-block">
          <ul>
            <li class="att popup-wrap">
              <a id="hd_singin_but_open" href="" class="btn-toggle">Войти на сайт</a>
              <form action="/" class="frm-login popup-block">
                <div class="frm-title">Войти на сайт</div>
                <a href="" class="btn-close">Закрыть</a>
                <div class="frm-row"><input type="text" placeholder="Логин"></div>
                <div class="frm-row"><input type="password" placeholder="Пароль"></div>
                <div class="frm-row"><a href="" class="btn-forgot">Забыли пароль</a></div>
                <div class="frm-row">
                  <div class="frm-chk">
                    <input type="checkbox" id="login">
                    <label for="login">Запомнить меня</label>
                  </div>
                </div>
                <div class="frm-row"><input type="submit" value="Войти"></div>
              </form>
            </li>
            <li><a href="">Зарегистрироваться</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <!-- /header -->
        <?$APPLICATION->IncludeComponent(
        "bitrix:menu",
        "top",
        Array(
            "ALLOW_MULTI_SELECT" => "N",
            "CHILD_MENU_TYPE" => "left",
            "DELAY" => "N",
            "MAX_LEVEL" => "3",
            "MENU_CACHE_GET_VARS" => array(""),
            "MENU_CACHE_TIME" => "3600",
            "MENU_CACHE_TYPE" => "N",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "ROOT_MENU_TYPE" => "top",
            "USE_EXT" => "Y"
        )
    );?>

  <? if ($APPLICATION->GetCurPage() !== "/"): ?>
      <!-- breadcrumbs -->
      <div class="breadcrumbs-box">
        <div class="inner-wrap">
          <a href="">Главная</a>
          <a href="">Мебель</a>
          <span>Выставки и события</span>
        </div>
      </div>
      <!-- /breadcrumbs -->
    <? endif; ?>
  <!-- page -->
  <div class="page">
    <!-- content box -->
    <div class="content-box">
      <!-- content -->
      <div class="content">
        <div class="cnt">
            <? if ($APPLICATION->GetCurPage() !== "/"): ?>
          <header>
            <h1><?= $APPLICATION->ShowTitle()?></h1>
          </header>
          <?else:?>
              <?$APPLICATION->IncludeFile("/local/includes/main.php",Array(),Array("MODE"=>"html"));?>
          <? endif; ?>