# phpMyAdmin MySQL-Dump
# version 2.2.2
# http://phpwizard.net/phpMyAdmin/
# http://phpmyadmin.sourceforge.net/ (download page)
#
# --------------------------------------------------------

#
# Table structure for table `eguide`
#

CREATE TABLE eguide (
  eid int(8) unsigned NOT NULL auto_increment,
  uid int(5) NOT NULL default '0',
  title varchar(255) default NULL,
  cdate int(10) NOT NULL default '0',
  edate int(10) NOT NULL default '0',
  ldate int(10) NOT NULL default '0',
  mdate int(10) NOT NULL default '0',
  expire int(10) NOT NULL default '0',
  style tinyint(1) NOT NULL default '0',
  status tinyint(1) NOT NULL default '0',
  summary text NOT NULL,
  body    text NOT NULL,
  counter int(8) unsigned NOT NULL default '0',
  topicid int(8) unsigned NOT NULL default '1',
  PRIMARY KEY  (eid)
) TYPE=MyISAM;
# --------------------------------------------------------

#
# Table structure for table `eguide_opt`
#

CREATE TABLE eguide_opt (
  eid int(8) NOT NULL,
  reservation tinyint(1),
  strict tinyint(1),
  autoaccept tinyint(1),
  notify  tinyint(1),
  persons int(8) unsigned NOT NULL default '0',
  reserved int(8) unsigned NOT NULL default '0',
  optfield text,
  PRIMARY KEY  (eid)
) TYPE=MyISAM;

#
# Table structure for table `eguide_reserv`
#

CREATE TABLE eguide_reserv (
  rvid int(8) unsigned NOT NULL auto_increment,
  eid int(8) NOT NULL,
  uid int(8),
  rdate integer,
  email varchar(60),
  info text,
  status tinyint(1),
  confirm varchar(8),
  PRIMARY KEY  (rvid)
) TYPE=MyISAM;
