-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-02-12 10:05:28
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `manage`
--

-- --------------------------------------------------------

--
-- 表的结构 `rs_access`
--

CREATE TABLE IF NOT EXISTS `rs_access` (
  `role_id` smallint(6) unsigned NOT NULL,
  `node_id` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) NOT NULL,
  `module` varchar(50) DEFAULT NULL,
  KEY `groupId` (`role_id`),
  KEY `nodeId` (`node_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `rs_access`
--

INSERT INTO `rs_access` (`role_id`, `node_id`, `level`, `module`) VALUES
(9, 19, 3, NULL),
(9, 17, 3, NULL),
(9, 16, 3, NULL),
(9, 15, 3, NULL),
(9, 14, 3, NULL),
(9, 12, 3, NULL),
(9, 3, 3, NULL),
(9, 7, 3, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `rs_bbs`
--

CREATE TABLE IF NOT EXISTS `rs_bbs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL COMMENT '标题',
  `content` text NOT NULL COMMENT '内容',
  `time` varchar(45) NOT NULL COMMENT '时间',
  `from_user` varchar(45) NOT NULL COMMENT '发送人',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='发帖表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `rs_check`
--

CREATE TABLE IF NOT EXISTS `rs_check` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` int(11) NOT NULL COMMENT '处理状态',
  `truetime` varchar(125) NOT NULL COMMENT '考勤登记时间',
  `pid` int(11) NOT NULL COMMENT '所属部门',
  `money` int(11) NOT NULL COMMENT '扣款金额',
  `mid` bigint(11) NOT NULL COMMENT '被考勤人',
  `from_username` varchar(45) NOT NULL COMMENT '考勤人',
  `type` int(11) NOT NULL COMMENT '考勤类型',
  `date` varchar(45) NOT NULL COMMENT '考勤日期',
  `remark` varchar(255) NOT NULL COMMENT '备注',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='考勤表' AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `rs_check`
--

INSERT INTO `rs_check` (`id`, `status`, `truetime`, `pid`, `money`, `mid`, `from_username`, `type`, `date`, `remark`) VALUES
(1, 0, '2015-02-12 09:02:16', 4, 20, 13, '田松1', 1, '2014.12.25', ''),
(2, 0, '2015-02-12 09:02:18', 4, 20, 13, '田松1', 1, '2014.12.25', ''),
(3, 0, '2015-02-12 09:02:22', 5, 15, 14, '田松1', 2, '2015.2.12', ''),
(4, 0, '2015-02-12 09:02:22', 5, 15, 14, '田松1', 2, '2015.2.12', ''),
(5, 0, '2015-02-12 11:02:31', 4, 50, 13, '田松1', 3, '2015.12.31', '');

-- --------------------------------------------------------

--
-- 表的结构 `rs_dangan`
--

CREATE TABLE IF NOT EXISTS `rs_dangan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL COMMENT '所属部门',
  `mid` int(11) NOT NULL COMMENT '所属员工',
  `name` varchar(45) NOT NULL COMMENT '姓名',
  `sex` int(11) NOT NULL COMMENT '性别',
  `age` int(11) NOT NULL COMMENT '出生日期',
  `idcard` int(45) NOT NULL COMMENT '身份证',
  `education` text NOT NULL COMMENT '学历',
  `experience` text NOT NULL COMMENT '工作经历',
  `image` varchar(255) NOT NULL COMMENT '图片',
  `status` int(1) NOT NULL COMMENT '状态',
  `income` varchar(45) NOT NULL COMMENT '入职日期',
  `site` varchar(255) NOT NULL COMMENT '家庭住址',
  `school` varchar(255) NOT NULL COMMENT '毕业学校',
  `tid` int(11) NOT NULL COMMENT '职称编号',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='员工档案' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `rs_member`
--

CREATE TABLE IF NOT EXISTS `rs_member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` int(11) NOT NULL COMMENT '状态',
  `type` int(11) NOT NULL DEFAULT '0' COMMENT '级别',
  `tid` int(11) NOT NULL COMMENT '职称',
  `pid` int(11) NOT NULL COMMENT '部门',
  `login_time` varchar(125) NOT NULL,
  `ip` varchar(125) NOT NULL,
  `truename` varchar(45) NOT NULL COMMENT '真实姓名',
  `number` varchar(125) NOT NULL COMMENT '职工编号',
  `password` char(32) NOT NULL COMMENT '密码',
  `tel` varchar(45) NOT NULL COMMENT '电话',
  `address` varchar(255) NOT NULL COMMENT '住址',
  `remark` varchar(255) NOT NULL COMMENT '备注',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='员工基本信息' AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `rs_member`
--

INSERT INTO `rs_member` (`id`, `status`, `type`, `tid`, `pid`, `login_time`, `ip`, `truename`, `number`, `password`, `tel`, `address`, `remark`) VALUES
(1, 0, 1, 0, 0, '2015-02-12 09:02:25', '127.0.0.1', '田松1', '1106010039', 'e10adc3949ba59abbe56e057f20f883e', '18267720352', '贵州德江1', '贵州德江'),
(13, 0, 0, 2, 4, '', '', '奥巴马', '1106010031', 'e10adc3949ba59abbe56e057f20f883e', '18267720358', '温州医科大学', ''),
(14, 0, 0, 3, 5, '', '', '普京', '1106010032', 'e10adc3949ba59abbe56e057f20f883e', '18267720358', '温州医科大学', '');

-- --------------------------------------------------------

--
-- 表的结构 `rs_node`
--

CREATE TABLE IF NOT EXISTS `rs_node` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `remark` varchar(255) DEFAULT NULL,
  `sort` smallint(6) unsigned DEFAULT NULL,
  `pid` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `level` (`level`),
  KEY `pid` (`pid`),
  KEY `status` (`status`),
  KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- 转存表中的数据 `rs_node`
--

INSERT INTO `rs_node` (`id`, `name`, `title`, `status`, `remark`, `sort`, `pid`, `level`) VALUES
(1, 'Home', '后台管理', 1, NULL, NULL, 0, 1),
(2, 'Partment', '部门管理', 1, NULL, NULL, 0, 2),
(3, 'index', '部门列表', 1, NULL, NULL, 2, 3),
(4, 'part_add', '部门添加', 1, NULL, NULL, 2, 3),
(5, 'del_part', '部门删除', 1, NULL, NULL, 2, 3),
(6, 'Title', '职称管理', 1, NULL, NULL, 0, 2),
(7, 'index', '职称列表', 1, NULL, NULL, 6, 3),
(8, 'title_add', '职称添加', 1, NULL, NULL, 6, 3),
(9, 'del_title', '职称删除', 1, NULL, NULL, 6, 3),
(10, 'Role', '角色管理', 1, NULL, NULL, 0, 2),
(11, 'index', '角色列表', 1, NULL, NULL, 10, 2),
(12, 'role_add', '角色添加', 1, NULL, NULL, 10, 3),
(13, 'Member', '员工管理', 1, NULL, NULL, 0, 2),
(14, 'index', '员工列表', 1, NULL, NULL, 13, 3),
(15, 'member_add', '员工添加', 1, NULL, NULL, 13, 3),
(16, 'change_title', '选择职称', 1, NULL, NULL, 13, 3),
(17, 'del_member', '删除员工', 1, NULL, NULL, 13, 3),
(18, 'Check', '考勤管理', 1, NULL, NULL, 0, 2),
(19, 'index', '考勤列表', 1, NULL, NULL, 18, 3),
(20, 'check_add', '考勤添加', 1, NULL, NULL, 18, 3),
(21, 'change_title', '选择部门员工', 1, NULL, NULL, 18, 3);

-- --------------------------------------------------------

--
-- 表的结构 `rs_partment`
--

CREATE TABLE IF NOT EXISTS `rs_partment` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '部门编号',
  `salary` int(11) NOT NULL COMMENT '基本工资',
  `name` varchar(45) NOT NULL COMMENT '部门名称',
  `remark` varchar(255) NOT NULL COMMENT '备注',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='部门表' AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `rs_partment`
--

INSERT INTO `rs_partment` (`id`, `salary`, `name`, `remark`) VALUES
(3, 0, '财务部', '财务部'),
(4, 0, '人事部', '人事部'),
(5, 0, '行政部', '行政部'),
(6, 0, '后勤部', '后勤部'),
(7, 0, '业务部', '业务部1');

-- --------------------------------------------------------

--
-- 表的结构 `rs_reply`
--

CREATE TABLE IF NOT EXISTS `rs_reply` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reply_id` int(11) NOT NULL COMMENT '所属帖子',
  `content` text NOT NULL COMMENT '回复内容',
  `reply_user` varchar(45) NOT NULL COMMENT '回复人',
  `time` varchar(45) NOT NULL COMMENT '回复时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='回帖表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `rs_role`
--

CREATE TABLE IF NOT EXISTS `rs_role` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `pid` smallint(6) DEFAULT NULL,
  `status` tinyint(1) unsigned DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`),
  KEY `status` (`status`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `rs_role`
--

INSERT INTO `rs_role` (`id`, `name`, `pid`, `status`, `remark`) VALUES
(1, '管理员', NULL, 1, '管理员'),
(2, '人事部主管', NULL, 1, '人事部主管'),
(9, '客户', NULL, 1, '123456'),
(10, '员工', NULL, 1, '员工');

-- --------------------------------------------------------

--
-- 表的结构 `rs_role_user`
--

CREATE TABLE IF NOT EXISTS `rs_role_user` (
  `role_id` mediumint(9) unsigned DEFAULT NULL,
  `user_id` char(32) DEFAULT NULL,
  KEY `group_id` (`role_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `rs_role_user`
--

INSERT INTO `rs_role_user` (`role_id`, `user_id`) VALUES
(2, '13'),
(1, '13'),
(1, '14'),
(9, '14');

-- --------------------------------------------------------

--
-- 表的结构 `rs_salary`
--

CREATE TABLE IF NOT EXISTS `rs_salary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mid` int(11) NOT NULL COMMENT '所属员工',
  `base_salary` int(11) NOT NULL COMMENT '工资',
  `time` varchar(45) NOT NULL COMMENT '更新时间',
  `remark` varchar(255) NOT NULL COMMENT '备注',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='工资表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `rs_title`
--

CREATE TABLE IF NOT EXISTS `rs_title` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '职称id',
  `name` varchar(45) NOT NULL COMMENT '职称名',
  `apid` int(11) NOT NULL COMMENT '所属部门',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='职称表' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `rs_title`
--

INSERT INTO `rs_title` (`id`, `name`, `apid`) VALUES
(2, '人事部主管', 4),
(3, '行政部经理', 5),
(4, '后勤部长', 6);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
