DROP TABLE IF EXISTS `auth_config`;
CREATE TABLE IF NOT EXISTS `auth_config` (
  `id` varchar(80) NOT NULL DEFAULT '1',
  `gg` text,
  `ggs` text,
  `dl1` float DEFAULT NULL COMMENT 'vip1',
  `dl2` float DEFAULT NULL COMMENT 'vip2',
  `dl3` float DEFAULT NULL COMMENT 'vip3',
  `dl4` float DEFAULT NULL COMMENT 'vip4',
  `dl5` float DEFAULT NULL COMMENT 'vip5',
  `dl0` float DEFAULT NULL COMMENT 'vip0',
  `dls1` float NOT NULL,
  `dls2` float NOT NULL,
  `dls3` float NOT NULL,
  `dls4` float NOT NULL,
  `dls5` float NOT NULL,
  `dls0` float NOT NULL,
  `regok` int(11) DEFAULT NULL,
  `activeok` int(11) DEFAULT NULL,
  `ok` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `auth_config` (`id`, `gg`, `ggs`, `dl1`, `dl2`, `dl3`, `dl4`, `dl5`, `dl0`, `dls1`, `dls2`, `dls3`, `dls4`, `dls5`, `dls0`, `regok`, `activeok`, `ok`) VALUES
('1', '231123546', '31222222', 3, 0.01, 2.5, 2, 1.5, 7, 0.1, 0.1, 0.1, 0.1, 0.1, 0.1, 0, 0, 0);

DROP TABLE IF EXISTS `auth_daili`;
CREATE TABLE IF NOT EXISTS `auth_daili` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `tj_rmb` decimal(11,2) NOT NULL,
  `tj_user` varchar(255) DEFAULT NULL,
  `user` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `rmb` decimal(11,2) NOT NULL DEFAULT '0.00',
  `vip` int(11) DEFAULT NULL,
  `kmlist` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `regdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ;

DROP TABLE IF EXISTS `auth_kms`;
CREATE TABLE IF NOT EXISTS `auth_kms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kind` tinyint(1) NOT NULL DEFAULT '1',
  `daili` int(11) NOT NULL DEFAULT '0',
  `km` varchar(64) DEFAULT NULL,
  `value` int(11) NOT NULL DEFAULT '0',
  `values` decimal(11,2) DEFAULT NULL,
  `money` decimal(11,2) DEFAULT '0.00',
  `isuse` tinyint(1) DEFAULT '0',
  `user` varchar(50) DEFAULT NULL,
  `usetime` datetime DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `km` (`km`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ;


DROP TABLE IF EXISTS `auth_log`;
CREATE TABLE IF NOT EXISTS `auth_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `action` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ;


DROP TABLE IF EXISTS `openvpn`;
CREATE TABLE IF NOT EXISTS `openvpn` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iuser` varchar(16) NOT NULL,
  `isent` bigint(128) DEFAULT '0',
  `irecv` bigint(128) DEFAULT '0',
  `maxll` bigint(128) NOT NULL,
  `pass` varchar(18) NOT NULL,
  `i` int(1) NOT NULL,
  `starttime` varchar(30) DEFAULT NULL,
  `endtime` int(11) DEFAULT '0',
  `dlid` int(11) DEFAULT NULL,
  `tian` int(11) NOT NULL COMMENT 'µ±Ç°ÒÑ·ÏÆú',
  PRIMARY KEY (`id`),
  UNIQUE KEY `iuser` (`iuser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 