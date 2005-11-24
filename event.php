<?php
// display events
// $Id: event.php,v 1.12 2005/11/24 08:15:48 nobu Exp $

include 'header.php';

$eid = param('eid');
$exid = param('sub');
$op = param('op', 'view');

$myts =& MyTextSanitizer::getInstance();

$isadmin = false;
$uid = 0;
if (is_object($xoopsUser)) {
    $isadmin = $xoopsUser->isAdmin($xoopsModule->getVar('mid'));
    $uid = $xoopsUser->getVar('uid');
}

set_next_event();
$stc=$isadmin?"":"AND status=".STAT_NORMAL;

$result = $xoopsDB->query('SELECT * FROM '.EGTBL.' e LEFT JOIN '.OPTBL.' o ON e.eid=o.eid LEFT JOIN '.CATBL.' ON topicid=catid LEFT JOIN '.EXTBL." ON e.eid=eidref AND exid=$exid WHERE e.eid=$eid $stc");

if (!$result || !$xoopsDB->getRowsNum($result)) {
	redirect_header("index.php",2,_MD_NOEVENT);
	exit();
}
$data = $xoopsDB->fetchArray($result);
$now=time();

$data['exid']=$exid;
// sub
$extents = get_extents($eid);
if (count($extents) && $exid==0) {
    if (count($extents)==1) {    // only one extent, chose that.
	header('Location: '.XOOPS_URL.'/modules/eguide/event.php?eid='.$eid.'&sub='.$extents[0]['exid']);
	exit;
    }
    $data['extents'] = $extents;
    $data['lang_extents'] = _MD_EXTENT_DATE;
    $data['exdate']=$extents[0]['exdate'];
}

$data['isadmin'] = ($isadmin || $data['uid']==$uid);

if ($op != "print") {
    if (!$xoopsUser || $data['uid']!=$xoopsUser->uid()) {
	$xoopsDB->queryF("UPDATE ".EGTBL." SET counter=counter+1 WHERE eid=$eid");
	$data['counter']++;
    }
}

include XOOPS_ROOT_PATH.'/header.php';
$xoopsOption['template_main'] = 'eguide_event.html';
$xoopsTpl->assign(assign_const());
edit_eventdata($data);
$xoopsTpl->assign('event', $data);
// check pical exists
$module_handler =& xoops_gethandler('module');
$module =& $module_handler->getByDirname('piCal');
if (is_object($module) && $module->getVar('isactive')==1) {
    $xoopsTpl->assign('caldate', formatTimestamp($data['ldate'], 'Y-m-d'));
}
// page title
$xoopsTpl->assign('xoops_pagetitle', $xoopsModule->getVar('name')." | ".
		  $data['date']." ".$data['title']);
if ($data['ldate'] < $now) {
    if ($data['reservation']) $xoopsTpl->assign('message', _MD_RESERV_CLOSE);
} elseif ($data['reservation']) {
    $reserved = false;
    if (is_object($xoopsUser)) {
	$result = $xoopsDB->query("SELECT * FROM ".RVTBL." WHERE eid=$eid AND exid=$exid AND uid=".$xoopsUser->getVar('uid'));
	$reserved = ($xoopsDB->getRowsNum($result)>0);
    }
    if ($reserved) {
	$xoopsTpl->assign('message', _MD_RESERVED);
    } elseif ($data['strict'] && $data['persons']<=$data['reserved']) {
	$xoopsTpl->assign('message', _MD_RESERV_FULL);
    } elseif (!is_object($xoopsUser) && $xoopsModuleConfig['member_only']) {
	$xoopsTpl->assign('message', _MD_RESERV_NEEDLOGIN);
    } else {
	$ok = true;
	if ($xoopsModuleConfig['use_plugins']) {
	    include_once 'plugins.php';
	    foreach ($hooked_function['check'] as $func) {
		$ok = $func($eid, $exid, $data['uid']);
		if (!$ok) break;
	    }
	}
	if ($ok) $xoopsTpl->assign('form', eventform($data));
	else $xoopsTpl->assign('message', _MD_RESERV_PLUGIN_FAIL);
    }
}

$xoopsTpl->assign(make_lists($data));

if ($op == "print") {
    $xoopsTpl->display('db:eguide_event_print.html');
    exit;
}

include XOOPS_ROOT_PATH.'/footer.php';

function make_lists($data) {
    global $xoopsDB;
    $eid = $data['eid'];
    $myts =& MyTextSanitizer::getInstance();
    if ($data['reservation'] && !empty($data['reserved'])) {
	$show = array();
	$item = array();
	foreach (explode("\n", trim($data['optfield'])) as $n) {
	    $a = explode(",", preg_replace('/[\n\r]/',"", $n));
	    $lab = preg_replace('/[\*#]$/', "",array_shift($a));
	    if (preg_match('/^!/', $lab)) {
		$lab = preg_replace('/^!\s*/', '', $lab);
		$show[] = $lab;
	    }
	    $item[] = $lab;
	}
	$list = array();
	if (count($show)) {
	    $result = $xoopsDB->query('SELECT * FROM '.RVTBL." WHERE eid=$eid AND status="._RVSTAT_RESERVED.' ORDER BY rdate');
	    $nc = 0;
	    while($rdata = $xoopsDB->fetchArray($result)) {
		$a = explodeinfo($rdata['info'], $item);
		if (!empty($rdata['uid'])) {
		    $uid = $rdata['uid'];
		    $uinfo = " (<a href='".XOOPS_URL."/userinfo.php?uid=$uid'>".XoopsUser::getUnameFromId($uid)."</a>)";
		} else {
		    $uinfo = "";
		}
		$order = array();
		foreach ($show as $v) {
		    $order[] = $myts->sanitizeForDisplay($a[$v]).$uinfo;
		    $uinfo = "";
		}
		$list[++$nc] = $order;
	    }
	}
	return array('labels'=>$show, 'list'=>$list,
		     'lang_reserv_list'=>_MD_RESERV_LIST);
    }
    return array();
}
?>