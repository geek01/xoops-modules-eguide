<?php
# user/admin common use resources
#

define('_MD_ORDER_DATE', '日期');
define('_MD_CSV_OUT', '匯出CSV格式');
define('_MD_EXTENT_DATE', '報名開始受理日期');
define('_MD_RESERV_PERSONS', '活動名額');
define('_MD_INFO_REQUEST', '提醒活動通知註冊會員');
define('_MD_INFO_COUNT', '報名人員，共%d人');
define('_MD_EXPORT_CHARSET', 'UTF-8');

global $expire_set, $edit_style, $ev_stats, $ev_extents, $rv_stats;

$expire_set = [
    ''        => '-- 使用文字 --',
    '+3600'   => '一個鐘頭',
    '+10800'  => '三個鐘頭',
    '+21600'  => '半天',
    '+0'      => '當天',
    '+172800' => '兩天',
    '+259200' => '三天',
    '+604800' => '一星期'
];

$edit_style = [
    0 => '只使用 XOOPS 標籤',
    1 => '分行使用 &lt;br&gt; 標籤',
    2 => '停用 HTML 標籤'
];

$ev_stats = [
    0 => '顯示',
    1 => '等待',
    4 => '刪除'
];

$rv_stats = [
    0 => '等待',
    1 => '保留',
    2 => '拒絕'
];

$ev_extents = [
    'none'    => '一次',
    'daily'   => '每天',
    'weekly'  => '每週',
    'monthly' => '每月'
];


$moduleDirName      = basename(dirname(dirname(__DIR__)));
$moduleDirNameUpper = strtoupper($moduleDirName);

define('CO_' . $moduleDirNameUpper . '_GDLIBSTATUS', 'GD library support: ');
define('CO_' . $moduleDirNameUpper . '_GDLIBVERSION', 'GD Library version: ');
define('CO_' . $moduleDirNameUpper . '_GDOFF', "<span style='font-weight: bold;'>Disabled</span> (No thumbnails available)");
define('CO_' . $moduleDirNameUpper . '_GDON', "<span style='font-weight: bold;'>Enabled</span> (Thumbsnails available)");
define('CO_' . $moduleDirNameUpper . '_IMAGEINFO', 'Server status');
define('CO_' . $moduleDirNameUpper . '_MAXPOSTSIZE', 'Max post size permitted (post_max_size directive in php.ini): ');
define('CO_' . $moduleDirNameUpper . '_MAXUPLOADSIZE', 'Max upload size permitted (upload_max_filesize directive in php.ini): ');
define('CO_' . $moduleDirNameUpper . '_MEMORYLIMIT', 'Memory limit (memory_limit directive in php.ini): ');
define('CO_' . $moduleDirNameUpper . '_METAVERSION', "<span style='font-weight: bold;'>Downloads meta version:</span> ");
define('CO_' . $moduleDirNameUpper . '_OFF', "<span style='font-weight: bold;'>OFF</span>");
define('CO_' . $moduleDirNameUpper . '_ON', "<span style='font-weight: bold;'>ON</span>");
define('CO_' . $moduleDirNameUpper . '_SERVERPATH', 'Server path to XOOPS root: ');
define('CO_' . $moduleDirNameUpper . '_SERVERUPLOADSTATUS', 'Server uploads status: ');
define('CO_' . $moduleDirNameUpper . '_SPHPINI', "<span style='font-weight: bold;'>Information taken from PHP ini file:</span>");
define('CO_' . $moduleDirNameUpper . '_UPLOADPATHDSC', 'Note. Upload path *MUST* contain the full server path of your upload folder.');

define('CO_' . $moduleDirNameUpper . '_PRINT', "<span style='font-weight: bold;'>Print</span>");
define('CO_' . $moduleDirNameUpper . '_PDF', "<span style='font-weight: bold;'>Create PDF</span>");


define('CO_' . $moduleDirNameUpper . '_UPGRADEFAILED0', "Update failed - couldn't rename field '%s'");
define('CO_' . $moduleDirNameUpper . '_UPGRADEFAILED1', "Update failed - couldn't add new fields");
define('CO_' . $moduleDirNameUpper . '_UPGRADEFAILED2', "Update failed - couldn't rename table '%s'");
define('CO_' . $moduleDirNameUpper . '_ERROR_COLUMN', 'Could not create column in database : %s');
define('CO_' . $moduleDirNameUpper . '_ERROR_BAD_XOOPS', 'This module requires XOOPS %s+ (%s installed)');
define('CO_' . $moduleDirNameUpper . '_ERROR_BAD_PHP', 'This module requires PHP version %s+ (%s installed)');
define('CO_' . $moduleDirNameUpper . '_ERROR_TAG_REMOVAL', 'Could not remove tags from Tag Module');

define('CO_' . $moduleDirNameUpper . '_FOLDERS_DELETED_OK', 'Upload Folders have been deleted');

// Error Msgs
define('CO_' . $moduleDirNameUpper . '_ERROR_BAD_DEL_PATH', 'Could not delete %s directory');
define('CO_' . $moduleDirNameUpper . '_ERROR_BAD_REMOVE', 'Could not delete %s');
define('CO_' . $moduleDirNameUpper . '_ERROR_NO_PLUGIN', 'Could not load plugin');


//Help
define('CO_' . $moduleDirNameUpper . '_DIRNAME', basename(dirname(dirname(__DIR__))));
define('CO_' . $moduleDirNameUpper . '_HELP_HEADER', __DIR__.'/help/helpheader.tpl');
define('CO_' . $moduleDirNameUpper . '_BACK_2_ADMIN', 'Back to Administration of ');
define('CO_' . $moduleDirNameUpper . '_OVERVIEW', 'Overview');
define('CO_' . $moduleDirNameUpper . '_NAME', _MI_EGUIDE_NAME);

//define('CO_' . $moduleDirNameUpper . '_HELP_DIR', __DIR__);

//help multi-page
define('CO_' . $moduleDirNameUpper . '_DISCLAIMER', 'Disclaimer');
define('CO_' . $moduleDirNameUpper . '_LICENSE', 'License');
define('CO_' . $moduleDirNameUpper . '_SUPPORT', 'Support');

define('CO_' . $moduleDirNameUpper . '_SUMMARY', 'Summary');
define('CO_' . $moduleDirNameUpper . '_USING_STEPS', 'Using Step by Step');
define('CO_' . $moduleDirNameUpper . '_FUNCTIONS', 'Functions');
define('CO_' . $moduleDirNameUpper . '_CONFIGURATION', 'Event Configuration');
define('CO_' . $moduleDirNameUpper . '_FIELD_FORMATS', 'Custom Field Formats');
define('CO_' . $moduleDirNameUpper . '_RESERVATION_PLUGIN', 'Reservation limit plugins');
define('CO_' . $moduleDirNameUpper . '_CHANGES', 'Changes');
