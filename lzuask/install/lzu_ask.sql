-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- 主机: localhost
-- 生成日期: 2012 年 08 月 28 日 11:47
-- 服务器版本: 5.0.45
-- PHP 版本: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 数据库: `lzuask`
-- 

-- --------------------------------------------------------

-- 
-- 表的结构 `ask_activity`
-- 

CREATE TABLE `ask_activity` (
  `in` mediumint(8) unsigned NOT NULL auto_increment,
  `author` varchar(20) NOT NULL,
  `authorid` mediumint(8) unsigned NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `time` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`in`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- 导出表中的数据 `ask_activity`
-- 


-- --------------------------------------------------------

-- 
-- 表的结构 `ask_answer`
-- 

CREATE TABLE `ask_answer` (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `qid` mediumint(8) unsigned NOT NULL,
  `title` varchar(50) NOT NULL,
  `author` varchar(20) NOT NULL,
  `authorid` mediumint(8) NOT NULL,
  `questionid` mediumint(8) NOT NULL,
  `time` int(10) unsigned NOT NULL,
  `adopttime` int(10) unsigned NOT NULL,
  `content` mediumtext NOT NULL,
  `comment` tinytext NOT NULL,
  `status` tinyint(3) unsigned NOT NULL,
  `tag` text NOT NULL,
  `support` int(5) unsigned NOT NULL,
  `against` int(5) unsigned NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- 导出表中的数据 `ask_answer`
-- 


-- --------------------------------------------------------

-- 
-- 表的结构 `ask_an_message`
-- 

CREATE TABLE `ask_an_message` (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `from_id` mediumint(8) unsigned NOT NULL,
  `from_name` varchar(20) NOT NULL,
  `to_id` mediumint(8) unsigned NOT NULL,
  `title` varchar(50) NOT NULL,
  `q_id` mediumint(8) NOT NULL,
  `q_title` varchar(50) NOT NULL,
  `time` int(10) unsigned NOT NULL,
  `status` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- 导出表中的数据 `ask_an_message`
-- 


-- --------------------------------------------------------

-- 
-- 表的结构 `ask_category`
-- 

CREATE TABLE `ask_category` (
  `id` mediumint(3) unsigned NOT NULL auto_increment,
  `ncategory` varchar(20) NOT NULL,
  `num` mediumint(5) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- 导出表中的数据 `ask_category`
-- 


-- --------------------------------------------------------

-- 
-- 表的结构 `ask_friend`
-- 

CREATE TABLE `ask_friend` (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `authorid` mediumint(8) unsigned NOT NULL,
  `friendid` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- 导出表中的数据 `ask_friend`
-- 


-- --------------------------------------------------------

-- 
-- 表的结构 `ask_message`
-- 

CREATE TABLE `ask_message` (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `from_id` mediumint(8) unsigned NOT NULL,
  `from_name` varchar(20) NOT NULL,
  `to_uid` mediumint(8) unsigned NOT NULL,
  `to_name` varchar(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `status` tinyint(1) unsigned NOT NULL default '0',
  `time` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- 导出表中的数据 `ask_message`
-- 


-- --------------------------------------------------------

-- 
-- 表的结构 `ask_question`
-- 

CREATE TABLE `ask_question` (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `cid` varchar(20) NOT NULL,
  `cid1` varchar(20) NOT NULL,
  `cid2` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `price` int(5) unsigned NOT NULL default '0',
  `author` varchar(20) NOT NULL,
  `authorid` mediumint(8) unsigned NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` mediumtext NOT NULL,
  `supply` mediumtext NOT NULL,
  `time` int(10) unsigned NOT NULL,
  `endtime` int(10) unsigned NOT NULL,
  `hidden` tinyint(1) unsigned NOT NULL,
  `answers` smallint(5) unsigned NOT NULL,
  `views` smallint(5) unsigned NOT NULL,
  `goods` smallint(5) unsigned NOT NULL,
  `status` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- 导出表中的数据 `ask_question`
-- 


-- --------------------------------------------------------

-- 
-- 表的结构 `ask_share`
-- 

CREATE TABLE `ask_share` (
  `id` mediumint(8) NOT NULL auto_increment,
  `author` varchar(20) NOT NULL,
  `authorid` mediumint(8) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `time` int(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- 导出表中的数据 `ask_share`
-- 


-- --------------------------------------------------------

-- 
-- 表的结构 `ask_user`
-- 

CREATE TABLE `ask_user` (
  `uid` mediumint(8) unsigned NOT NULL auto_increment,
  `active` varchar(42) NOT NULL,
  `username` char(20) NOT NULL,
  `realname` varchar(32) NOT NULL,
  `place1` varchar(32) NOT NULL,
  `place2` varchar(32) NOT NULL,
  `academy` varchar(32) NOT NULL,
  `password` char(42) NOT NULL,
  `email` varchar(40) NOT NULL,
  `avatar` varchar(40) NOT NULL default 'images/face/big/lzuask.gif',
  `mid_avatar` varchar(40) NOT NULL default 'images/face/middle/lzuask.gif',
  `groupid` tinyint(3) unsigned NOT NULL default '7',
  `credits` int(5) unsigned NOT NULL default '20',
  `credit1` int(5) unsigned NOT NULL default '20',
  `credit2` int(5) unsigned NOT NULL default '0',
  `credit3` int(5) unsigned NOT NULL default '0',
  `wealth` int(5) unsigned NOT NULL default '50',
  `wealth1` int(5) unsigned NOT NULL default '0',
  `wealth2` int(5) unsigned NOT NULL default '0',
  `regip` char(15) NOT NULL,
  `lastlogin` int(10) NOT NULL,
  `gender` tinyint(1) unsigned NOT NULL default '0',
  `bday` date NOT NULL,
  `phone` varchar(15) NOT NULL,
  `qq` varchar(15) NOT NULL,
  `msn` varchar(40) NOT NULL,
  `signature` mediumtext NOT NULL,
  `questions` int(5) unsigned NOT NULL default '0',
  `answers` int(5) unsigned NOT NULL default '0',
  `adopts` int(5) unsigned NOT NULL default '0',
  `is_login` tinyint(1) unsigned NOT NULL default '0',
  `isnotify` tinyint(1) unsigned NOT NULL default '7',
  `expert` tinyint(2) unsigned NOT NULL default '0',
  `notestatus` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- 导出表中的数据 `ask_user`
-- 


-- --------------------------------------------------------

-- 
-- 表的结构 `quiz_question`
-- 

CREATE TABLE `quiz_question` (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `author` varchar(20) NOT NULL,
  `authorid` mediumint(8) unsigned NOT NULL,
  `answerid` mediumint(8) unsigned NOT NULL,
  `answeror` varchar(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `contents` mediumtext NOT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- 导出表中的数据 `quiz_question`
-- 


-- --------------------------------------------------------

-- 
-- 表的结构 `say_answer`
-- 

CREATE TABLE `say_answer` (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `qid` mediumint(8) unsigned NOT NULL,
  `author` varchar(20) NOT NULL,
  `authorid` mediumint(8) unsigned NOT NULL,
  `time` date NOT NULL,
  `contents` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- 导出表中的数据 `say_answer`
-- 


-- --------------------------------------------------------

-- 
-- 表的结构 `say_put`
-- 

CREATE TABLE `say_put` (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `author` varchar(20) NOT NULL,
  `authorid` mediumint(8) unsigned NOT NULL,
  `title` mediumtext NOT NULL,
  `time` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- 导出表中的数据 `say_put`
-- 


-- --------------------------------------------------------

-- 
-- 表的结构 `wash_wall`
-- 

CREATE TABLE `wash_wall` (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `author` varchar(20) NOT NULL,
  `authorid` mediumint(8) unsigned NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `time` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- 导出表中的数据 `wash_wall`
-- 

