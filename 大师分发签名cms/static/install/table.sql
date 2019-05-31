
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

/*{shu}{ju}{biao} `prefix_admin` {de}{jie}{gou}*/
DROP TABLE IF EXISTS `codepay_order`;
--

CREATE TABLE `codepay_order` (
  `id` int(11) NOT NULL,
  `pay_id` int(11) NOT NULL COMMENT '用户ID或订单ID',
  `money` decimal(6,2) NOT NULL COMMENT '实际金额',
  `price` decimal(6,2) NOT NULL COMMENT '原价',
  `type` int(1) NOT NULL DEFAULT '1' COMMENT '支付方式',
  `pay_no` varchar(100) NOT NULL COMMENT '流水号',
  `param` int(2) DEFAULT NULL COMMENT '自定义参数',
  `pay_time` int(11) NOT NULL DEFAULT '0' COMMENT '付款时间',
  `pay_tag` varchar(100) NOT NULL DEFAULT '0' COMMENT '金额的备注',
  `status` int(1) NOT NULL DEFAULT '0' COMMENT '订单状态',
  `creat_time` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用于区分是否已经处理';

-- --------------------------------------------------------

--
DROP TABLE IF EXISTS `codepay_user`;
--

CREATE TABLE `codepay_user` (
  `id` int(10) NOT NULL COMMENT '用户ID',
  `user` varchar(100) NOT NULL DEFAULT '' COMMENT '用户名',
  `money` decimal(6,2) NOT NULL DEFAULT '0.00' COMMENT '金额',
  `vip` int(1) NOT NULL DEFAULT '0' COMMENT '会员开通',
  `status` int(1) NOT NULL DEFAULT '0' COMMENT '会员状态'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------
DROP TABLE IF EXISTS `prefix_admin`;

CREATE TABLE `prefix_admin` (
  `in_adminid` int(11) NOT NULL AUTO_INCREMENT,
  `in_adminname` varchar(255) NOT NULL,
  `in_adminpassword` varchar(255) NOT NULL,
  `in_loginip` varchar(255) DEFAULT NULL,
  `in_loginnum` int(11) NOT NULL,
  `in_logintime` datetime DEFAULT NULL,
  `in_islock` int(11) NOT NULL,
  `in_permission` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`in_adminid`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET={charset};
-- --------------------------------------------------------

--
DROP TABLE IF EXISTS `prefix_app`;
--

CREATE TABLE `prefix_app` (
  `in_id` int(11) NOT NULL,
  `in_uid` int(11) NOT NULL,
  `in_uname` varchar(255) NOT NULL,
  `in_name` varchar(255) NOT NULL,
  `in_bid` varchar(255) DEFAULT NULL,
  `in_mnvs` varchar(255) DEFAULT NULL,
  `in_bsvs` varchar(255) DEFAULT NULL,
  `in_bvs` varchar(255) DEFAULT NULL,
  `in_type` int(11) NOT NULL,
  `in_nick` varchar(255) DEFAULT NULL,
  `in_team` varchar(255) DEFAULT NULL,
  `in_form` varchar(255) DEFAULT NULL,
  `in_icon` varchar(255) DEFAULT NULL,
  `in_plist` varchar(255) NOT NULL,
  `in_random` varchar(50) DEFAULT NULL,
  `in_hits` int(11) NOT NULL,
  `in_size` varchar(255) DEFAULT NULL,
  `in_kid` int(11) NOT NULL,
  `in_sign` int(11) NOT NULL,
  `in_resign` int(11) NOT NULL,
  `in_link` varchar(255) DEFAULT NULL,
  `in_addtime` datetime DEFAULT NULL,
  `tiany_url` varchar(255) DEFAULT NULL,
  `tiany_plist` varchar(255) NOT NULL,
  `in_plist_1` varchar(255) NOT NULL,
  `in_plist_2` varchar(255) NOT NULL,
  `in_plist_3` varchar(255) NOT NULL,
  `in_pwd` int(6) DEFAULT NULL COMMENT '应用密码',
  `in_removead` int(11) NOT NULL,
  `in_code` varchar(255) NOT NULL COMMENT '签名密钥'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
DROP TABLE IF EXISTS `prefix_buylog`;
--

CREATE TABLE `prefix_buylog` (
  `in_id` int(11) NOT NULL,
  `in_uid` int(11) NOT NULL,
  `in_uname` varchar(255) NOT NULL,
  `in_title` varchar(255) NOT NULL,
  `in_tid` int(11) NOT NULL,
  `in_money` int(11) NOT NULL,
  `in_lock` int(11) NOT NULL,
  `in_addtime` datetime DEFAULT NULL,
  `in_status` int(2) NOT NULL COMMENT '发送状态'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
DROP TABLE IF EXISTS `prefix_certlog`;
--

CREATE TABLE `prefix_certlog` (
  `id` int(11) NOT NULL,
  `in_iden` varchar(100) NOT NULL,
  `in_name` varchar(100) NOT NULL,
  `in_dir` varchar(100) NOT NULL,
  `in_company` int(100) NOT NULL,
  `in_dylib` int(2) NOT NULL DEFAULT '0',
  `in_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
DROP TABLE IF EXISTS `prefix_hits`;
--

CREATE TABLE `prefix_hits` (
  `id` int(10) NOT NULL,
  `in_id` int(10) NOT NULL,
  `in_uname` varchar(50) NOT NULL,
  `in_hits` int(20) NOT NULL COMMENT '下载总量',
  `today_hits` int(20) NOT NULL COMMENT '今日下载量',
  `yest_hits` int(20) NOT NULL COMMENT '昨日下载量',
  `in_updatetime` int(100) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
DROP TABLE IF EXISTS `prefix_key`;
--

CREATE TABLE `prefix_key` (
  `in_id` int(11) NOT NULL,
  `in_tid` int(11) NOT NULL,
  `in_code` varchar(255) NOT NULL,
  `in_state` int(11) NOT NULL COMMENT '0:待售 1：已售 3：已使用',
  `in_time` int(11) NOT NULL,
  `in_username` varchar(255) NOT NULL,
  `out_time` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
DROP TABLE IF EXISTS `prefix_mail`;
--

CREATE TABLE `prefix_mail` (
  `in_id` int(11) NOT NULL,
  `in_uid` int(11) NOT NULL,
  `in_ucode` varchar(255) NOT NULL,
  `in_addtime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
DROP TABLE IF EXISTS `prefix_order`;
--

CREATE TABLE `prefix_order` (
  `id` int(11) UNSIGNED NOT NULL,
  `pay_id` varchar(50) NOT NULL COMMENT '用户ID或订单ID',
  `money` decimal(6,2) UNSIGNED NOT NULL COMMENT '实际金额',
  `price` decimal(6,2) UNSIGNED NOT NULL COMMENT '原价',
  `type` int(1) NOT NULL DEFAULT '1' COMMENT '支付方式',
  `pay_no` varchar(100) NOT NULL COMMENT '流水号',
  `param` varchar(200) DEFAULT NULL COMMENT '自定义参数',
  `pay_time` bigint(11) NOT NULL DEFAULT '0' COMMENT '付款时间',
  `pay_tag` varchar(100) NOT NULL DEFAULT '0' COMMENT '金额的备注',
  `status` int(1) NOT NULL DEFAULT '0' COMMENT '订单状态',
  `creat_time` bigint(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `up_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '更新时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用于区分是否已经处理';

-- --------------------------------------------------------

--
DROP TABLE IF EXISTS `prefix_paylog`;
--

CREATE TABLE `prefix_paylog` (
  `in_id` int(11) NOT NULL,
  `in_uid` int(11) NOT NULL,
  `in_uname` varchar(255) NOT NULL,
  `in_title` varchar(255) NOT NULL,
  `in_points` int(11) NOT NULL,
  `in_money` int(11) NOT NULL,
  `in_lock` int(11) NOT NULL,
  `in_addtime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
DROP TABLE IF EXISTS `prefix_produceUrl`;
--

CREATE TABLE `prefix_produceUrl` (
  `id` int(11) NOT NULL,
  `old_url` varchar(255) NOT NULL,
  `new_url` varchar(255) NOT NULL,
  `newTitle` varchar(255) DEFAULT NULL,
  `newIcon` varchar(255) DEFAULT NULL,
  `Newcontext` varchar(255) DEFAULT NULL,
  `hj_username` varchar(255) NOT NULL,
  `hj_uid` int(11) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0',
  `c1` varchar(100) DEFAULT NULL,
  `c2` varchar(100) DEFAULT NULL,
  `n1` varchar(20) DEFAULT NULL,
  `n2` varchar(20) DEFAULT NULL,
  `botPic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
DROP TABLE IF EXISTS `prefix_signlog`;
--

CREATE TABLE `prefix_signlog` (
  `in_id` int(11) NOT NULL,
  `in_aid` int(11) NOT NULL,
  `in_aname` varchar(255) NOT NULL,
  `in_uid` int(11) NOT NULL,
  `in_uname` varchar(255) NOT NULL,
  `in_status` int(11) NOT NULL,
  `in_step` varchar(255) NOT NULL,
  `in_percent` int(11) NOT NULL,
  `in_addtime` datetime DEFAULT NULL,
  `in_bid` varchar(255) NOT NULL,
  `in_sign` int(11) NOT NULL COMMENT '签名到期时间',
  `in_dtime` int(4) NOT NULL COMMENT '签名倒计时',
  `in_tip` varchar(50) DEFAULT NULL COMMENT '提示语',
  `in_contro` int(2) DEFAULT NULL COMMENT '控制状态',
  `in_content` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
DROP TABLE IF EXISTS `prefix_tianyurl`;
--

CREATE TABLE `prefix_tianyurl` (
  `id` int(11) NOT NULL,
  `tiany_name` varchar(255) NOT NULL,
  `tiany_url` varchar(255) NOT NULL,
  `in_addtime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
DROP TABLE IF EXISTS `prefix_user`;
--

CREATE TABLE `prefix_user` (
  `in_userid` int(11) NOT NULL,
  `in_username` varchar(255) NOT NULL,
  `in_userpassword` varchar(255) NOT NULL,
  `in_mobile` varchar(255) DEFAULT NULL,
  `in_qq` varchar(255) DEFAULT NULL,
  `in_firm` varchar(255) DEFAULT NULL,
  `in_job` varchar(255) DEFAULT NULL,
  `in_regdate` datetime DEFAULT NULL,
  `in_loginip` varchar(255) DEFAULT NULL,
  `in_logintime` datetime DEFAULT NULL,
  `in_islock` int(11) NOT NULL,
  `in_points` int(11) NOT NULL,
  `in_status` int(2) NOT NULL DEFAULT '0',
  `in_startTime` datetime NOT NULL,
  `in_endTime` datetime NOT NULL,
  `in_testkey` varchar(255) DEFAULT NULL COMMENT '每个账号测试密钥',
  `m_paytime` int(11) DEFAULT NULL COMMENT '包月用户支付时间',
  `in_nick` varchar(255) NOT NULL,
  `in_card` varchar(255) NOT NULL,
  `in_verify` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
DROP TABLE IF EXISTS `prefix_vip`;
--

CREATE TABLE `prefix_vip` (
  `id` int(11) NOT NULL,
  `vip_name` varchar(11) NOT NULL,
  `vip_contain` int(11) NOT NULL DEFAULT '100',
  `vip_size` int(10) NOT NULL DEFAULT '50',
  `vip_status` int(2) DEFAULT '0',
  `vip_price` varchar(100) DEFAULT '0',
  `vip_speed` varchar(10) DEFAULT '0',
  `vip_content` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `prefix_vip`
--

INSERT INTO `prefix_vip` (`id`, `vip_name`, `vip_contain`, `vip_size`, `vip_status`, `vip_price`, `vip_speed`, `vip_content`) VALUES
(0, '注册会员', 200, 100, 0, '免费', '5', '赠送10点'),
(1, '青铜会员', 500, 200, 1, '99', '10', '赠送1000点'),
(2, '白银会员', 2000, 500, 2, '199', '20', '赠送1000点'),
(3, '黄金会员', 5000, 1000, 3, '299', '50', '赠送1000点'),
(4, '定制会员', 100000, 10000, 4, '按需支付', '无限制', '按需分配');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `codepay_order`
--
ALTER TABLE `codepay_order`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pay_no` (`pay_no`,`type`);

--
-- Indexes for table `codepay_user`
--
ALTER TABLE `codepay_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prefix_admin`
--
ALTER TABLE `prefix_admin`
  ADD PRIMARY KEY (`in_adminid`);

--
-- Indexes for table `prefix_app`
--
ALTER TABLE `prefix_app`
  ADD PRIMARY KEY (`in_id`);

--
-- Indexes for table `prefix_buylog`
--
ALTER TABLE `prefix_buylog`
  ADD PRIMARY KEY (`in_id`);

--
-- Indexes for table `prefix_certlog`
--
ALTER TABLE `prefix_certlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prefix_hits`
--
ALTER TABLE `prefix_hits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prefix_key`
--
ALTER TABLE `prefix_key`
  ADD PRIMARY KEY (`in_id`);

--
-- Indexes for table `prefix_mail`
--
ALTER TABLE `prefix_mail`
  ADD PRIMARY KEY (`in_id`);

--
-- Indexes for table `prefix_order`
--
ALTER TABLE `prefix_order`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `main` (`pay_id`,`pay_time`,`money`,`type`,`pay_tag`),
  ADD UNIQUE KEY `pay_no` (`pay_no`,`type`);

--
-- Indexes for table `prefix_paylog`
--
ALTER TABLE `prefix_paylog`
  ADD PRIMARY KEY (`in_id`);

--
-- Indexes for table `prefix_produceUrl`
--
ALTER TABLE `prefix_produceUrl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `prefix_signlog`
--
ALTER TABLE `prefix_signlog`
  ADD PRIMARY KEY (`in_id`);

--
-- Indexes for table `prefix_tianyurl`
--
ALTER TABLE `prefix_tianyurl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `tiany_name` (`tiany_name`);

--
-- Indexes for table `prefix_user`
--
ALTER TABLE `prefix_user`
  ADD PRIMARY KEY (`in_userid`);

--
-- Indexes for table `prefix_vip`
--
ALTER TABLE `prefix_vip`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `codepay_order`
--
ALTER TABLE `codepay_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- 使用表AUTO_INCREMENT `codepay_user`
--
ALTER TABLE `codepay_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '用户ID';

--
-- 使用表AUTO_INCREMENT `prefix_admin`
--
ALTER TABLE `prefix_admin`
  MODIFY `in_adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `prefix_app`
--
ALTER TABLE `prefix_app`
  MODIFY `in_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=367;

--
-- 使用表AUTO_INCREMENT `prefix_buylog`
--
ALTER TABLE `prefix_buylog`
  MODIFY `in_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `prefix_certlog`
--
ALTER TABLE `prefix_certlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- 使用表AUTO_INCREMENT `prefix_hits`
--
ALTER TABLE `prefix_hits`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- 使用表AUTO_INCREMENT `prefix_key`
--
ALTER TABLE `prefix_key`
  MODIFY `in_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=740;

--
-- 使用表AUTO_INCREMENT `prefix_mail`
--
ALTER TABLE `prefix_mail`
  MODIFY `in_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `prefix_order`
--
ALTER TABLE `prefix_order`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `prefix_paylog`
--
ALTER TABLE `prefix_paylog`
  MODIFY `in_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `prefix_produceUrl`
--
ALTER TABLE `prefix_produceUrl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用表AUTO_INCREMENT `prefix_signlog`
--
ALTER TABLE `prefix_signlog`
  MODIFY `in_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- 使用表AUTO_INCREMENT `prefix_tianyurl`
--
ALTER TABLE `prefix_tianyurl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `prefix_user`
--
ALTER TABLE `prefix_user`
  MODIFY `in_userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
