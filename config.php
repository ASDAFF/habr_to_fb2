<?
header('Content-Type: text/html; charset=utf-8');
include_once("habrahabr_parser/holy_habr_api.php");
include_once("holy_steps/holy_stepbystep.php");
include_once("holy_fb2/holy_fb2.php");

$login = "newbilius";

$favorites_url = "http://habrahabr.ru/users/{$login}/favorites/";
$file_list = '/tmp/list.txt';
$file_img_list = '/tmp/pictures.txt';
$folder_tmp_articles = "/tmp/articles";
$folder_tmp_pics = "/tmp/pics";
$folder_tmp = "/tmp";

$img_max_size = 300;    //максимальный размер картинок по обеим сторонам
$skip_img = false;      //true - НЕ сохранять картинки
$convert_br_to_p = true;  //true - превращать тэги <br> в </p><p>. При false совместимость выше, чиатемость - ниже.
$out_file = "/habr_{$login}.fb2";

include_once("_work_file.php");
?>