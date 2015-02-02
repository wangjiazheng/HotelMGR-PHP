/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50536
Source Host           : localhost:3306
Source Database       : ideajl

Target Server Type    : MYSQL
Target Server Version : 50536
File Encoding         : 65001

Date: 2014-09-17 16:13:46
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `jl_article`
-- ----------------------------
DROP TABLE IF EXISTS `jl_article`;
CREATE TABLE `jl_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增序号',
  `leibie` int(11) NOT NULL COMMENT '文章类别（1新闻，2通知，3信息）',
  `author` varchar(100) DEFAULT NULL COMMENT '文章作者',
  `department` varchar(100) DEFAULT NULL COMMENT '作者单位',
  `ptime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '发布日期',
  `ilevel` int(11) DEFAULT '0' COMMENT '重要等级0-5颗星',
  `ctitle` varchar(1000) DEFAULT NULL COMMENT '文章标题',
  `cguide` varchar(1000) DEFAULT NULL COMMENT '文章引言',
  `cpguide` varchar(1000) DEFAULT NULL COMMENT '文章引导图URL',
  `cfrom` varchar(100) DEFAULT NULL COMMENT '文章来源',
  `cread` int(11) DEFAULT '0' COMMENT '文章阅读数',
  `ccontent` mediumtext COMMENT '文章内容',
  `cattachurl` varchar(10000) DEFAULT NULL COMMENT '文章附件URL（以|分割）',
  `cattachname` varchar(1000) DEFAULT NULL COMMENT '文章附件名称（以|分割）',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jl_article
-- ----------------------------
INSERT INTO `jl_article` VALUES ('1', '1', '王家峥', '一个单位', '2014-09-09 02:15:15', '4', '大广赛简介', '全国大学生广告艺术大赛（大广赛），由教育部高等教育司主办、教育部高等学校新闻学学科教学指导委员会组织实施，中国传媒大学与中国高等教育学会广告教育专业委员会等单位共同承办，是面向全国在校大学生的一项群众性的广告策划创意实践活动。目的在于活跃大学生的课外文化生活，激发大学生的创意灵感，加强大学生实践能力、创新能力和合作精神的培养，推动大学新闻传播教育的人才培养模式和实践教学的改革，为优秀人才脱颖而出创造良好的竞赛平台，不断提高人才培养质量。', '', '百度百科', '10', '内容1', null, null);
INSERT INTO `jl_article` VALUES ('2', '1', '王家峥', '一个单位', '2014-09-05 14:26:25', '5', '新闻测试标题2', '引言2引言2引言2引言2引言2引言2引言2', '', '网易博客', '10', '内容2', null, null);
INSERT INTO `jl_article` VALUES ('3', '1', '王家峥', '一个单位', '2014-09-09 01:45:15', '3', '新闻测试标题3新闻测试标题3', '引言3引言3引言3引言3引言3引言3引言3', '', '网易博客', '10', '内容3', null, null);
INSERT INTO `jl_article` VALUES ('4', '1', '王家峥', '一个单位', '2014-09-09 01:02:05', '2', '新闻测试标题4', '引言4引言4引言4引言4引言4引言4引言4', '', '网易博客', '10', '内容4', '212', 'AAA');
INSERT INTO `jl_article` VALUES ('5', '1', '王家峥', '一个单位', '2014-09-09 01:02:20', '1', '新闻测试标题5', '引言5引言5引言5引言5引言5引言5引言5', '', '网易博客', '10', '内容5', 'bbb|ccc', 'BBB|CCC');
INSERT INTO `jl_article` VALUES ('6', '1', '王家峥', '一个单位', '2014-09-09 02:32:43', '0', '亚青会吉祥物来自压哨灵感 作者盼两岸同胞团圆', '昨晚，南京亚青会吉祥物揭开了神秘面纱，以中华曙猿为原型设计的“亚青圆圆”以生动、可爱的形象闪亮登场。昨天，记者采访了“亚青圆圆”的创意提供者——22岁的台湾女孩王嘉伶，她向记者讲述了“亚青圆圆”的诞生记。', '', '网易博客', '10', '昨晚，南京亚青会吉祥物揭开了神秘面纱，以中华曙猿为原型设计的“亚青圆圆”以生动、可爱的形象闪亮登场。昨天，记者采访了“亚青圆圆”的创意提供者——22岁的台湾女孩王嘉伶，她向记者讲述了“亚青圆圆”的诞生记。<br /> <strong> 查资料时发现中华曙猿</strong><br /> <strong> 征集截止日当天才完成作品</strong><br /> 此次亚青会吉祥物是依托教育部高教司主办的全国大学生广告艺术大赛，面向全国900所高校征集，“亚青圆圆”最终从数千件作品中脱颖而出，让作品的创意提供者王嘉伶感到既荣幸又欣喜。<img src=\"http://www.sun-ada.net/htm/08-review/0502/../../../img/08-review/5th/0502/20121107-jixiangwu/01.jpg\" width=\"200\" height=\"198\" />今年22岁的王嘉伶是北京服装学院视觉传达系的大四学生。她告诉记者，大赛征集期间她还在上大三，由于当时课业很紧张，一开始自己并没有打算参加。当时，很多王嘉伶的学长学姐都把参加大广赛作品作为毕业设计来做，大家都很用心，她一度觉得自己没什么机会。<br /> “我很喜欢南京，很小的时候就跟父母来过这里，思来想去，还是觉得如果错过了（亚青吉祥物征集活动）很可惜。”犹豫数日后，王嘉伶还是决定参加比赛，而这个时候，她身边的同学还有学长学姐们的参赛作品已经成型了，而她却还没什么明确的思路。<br /> 王嘉伶告诉记者，她看到同学的设计主题里有貔貅、有辟邪、有梅花，还有设计龙与马的组合（寓意龙马精神）。虽然这些素材都能体现南京特色，但王嘉伶总觉得它们还不够可爱。在查资料过程中，王嘉伶发现了中华曙猿，图片上那个大眼睛、大耳朵的可爱小家伙立刻把她吸引住了。“后来我又了解到，中华曙猿发现于江苏地区，是已知的高级灵长类动物中最早的一种，因此心里就更确定，就是它了！”在大赛征集的截止日当天，王嘉伶才完成并提交了自己的作品。<br /> <strong> 用圈圈画“圆圆”</strong><br />尾巴装饰源自雨花石经典花纹</strong><br /> 在台湾出生的王嘉伶8岁随父母到上海生活，2009年，她参加教育部举行的港澳台考生联合高考，并考入北京服装学院视觉传达系。虽然酷爱设计，但王嘉伶却坦言自己没有绘画基础，以前没学过画画，高考前选择学校时才发现，只有北京服装学院的这个专业不用参加艺考，她才得以继续自己的设计梦想。<br /> “其实‘圆圆’的雏形很简单，全部是用大大小小的圆形或者切割过的圆形组合起来的。”王嘉伶说，“没想到把这些圆圈放在一起，样子反而挺可爱的。”在色彩方面，王嘉伶听取了导师的意见，采用了亚青会徽和奥运五环的颜色，使“圆圆”的面部表情和色彩更加丰满，更加可爱。在作品入围后，王嘉伶又根据亚青组委会的要求进行了一些调整和修改，比如在“圆圆”尾巴上的小装饰，展示了南京雨花石的经典花纹，也凸显出“圆圆”的南京味儿。<br /> 参与吉祥物征集工作的南京亚青组委会工作人员告诉记者，自己第一眼看到“圆圆”就有眼前一亮的感觉，因为它将城市底蕴、赛会理念和青春特色融为一体，“我们希望圆圆生动、可爱的形象，把友好、欢乐、智慧和活力带往世界各地。”<br />王嘉伶告诉记者，“圆圆”的名字也是她起的，这个名字有三层意思，除了自己提交作品理念时提到“寓意亚洲青年在南京团圆”，还因为设计雏形全部是用圆形组成的，以及她心中的希望：两岸同胞的大团圆。', null, null);
INSERT INTO `jl_article` VALUES ('7', '2', '王家峥', '一个单位', '2014-09-05 14:26:28', '2', '通知测试标题7', '引言4引言4引言4引言4引言4引言4引言4', '', '网易博客', '10', '内容7', null, null);
INSERT INTO `jl_article` VALUES ('8', '2', '王家峥', '一个单位', '2014-09-05 14:26:29', '1', '通知测试标题8', '引言5引言5引言5引言5引言5引言5引言5', '', '网易博客', '10', '内容8', null, null);
INSERT INTO `jl_article` VALUES ('9', '2', '王家峥', '一个单位', '2014-09-05 14:26:30', '0', '通知测试标题9', '引言6引言6引言6引言6引言6引言6引言6', '', '网易博客', '10', '内容9', null, null);
INSERT INTO `jl_article` VALUES ('10', '2', '王家峥', '王家峥', '2014-09-06 12:55:15', '2', '王家峥', '王家峥', null, '王家峥', '0', '王家峥', null, null);
INSERT INTO `jl_article` VALUES ('11', '2', '王家峥王家峥', '王家峥王家峥', '2014-09-06 12:55:28', '0', '王家峥王家峥', '王家峥王家峥', null, '王家峥', '0', '王家峥王家峥', null, null);
INSERT INTO `jl_article` VALUES ('12', '3', '王家峥', '王家峥', '2014-09-06 13:07:05', '0', '信息1', '信息1信息1信息1信息1信息1信息1信息1', null, '信息1', '0', '信息1', null, null);
INSERT INTO `jl_article` VALUES ('13', '3', '信息2', '信息2', '2014-09-06 13:07:17', '0', '信息2', '信息2信息2信息2信息2信息2信息2信息2', null, '信息2', '0', '信息2', null, null);

-- ----------------------------
-- Table structure for `jl_class`
-- ----------------------------
DROP TABLE IF EXISTS `jl_class`;
CREATE TABLE `jl_class` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增序号',
  `class_id` varchar(2) DEFAULT NULL COMMENT '类别编号',
  `class_name` varchar(20) DEFAULT NULL COMMENT '类别名称',
  `show_order` int(11) DEFAULT NULL COMMENT '类别显示顺序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jl_class
-- ----------------------------
INSERT INTO `jl_class` VALUES ('1', 'A', '平面广告', '1');
INSERT INTO `jl_class` VALUES ('2', 'B', '影视广告', '2');
INSERT INTO `jl_class` VALUES ('3', 'C', '微电影类', '3');
INSERT INTO `jl_class` VALUES ('4', 'D', '动画广告', '4');
INSERT INTO `jl_class` VALUES ('5', 'E', '广播广告', '5');

-- ----------------------------
-- Table structure for `jl_config`
-- ----------------------------
DROP TABLE IF EXISTS `jl_config`;
CREATE TABLE `jl_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `welcomeon` int(11) DEFAULT '1' COMMENT '首页打开状态（0关闭，1打开）',
  `loginon` int(11) DEFAULT '1' COMMENT '登陆打开状态（0关闭，1打开）',
  `userregon` int(11) DEFAULT '1' COMMENT '注册打开状态（0关闭，1打开）',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jl_config
-- ----------------------------
INSERT INTO `jl_config` VALUES ('1', '1', '1', '0');

-- ----------------------------
-- Table structure for `jl_login`
-- ----------------------------
DROP TABLE IF EXISTS `jl_login`;
CREATE TABLE `jl_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增序号',
  `user_name` varchar(30) DEFAULT NULL COMMENT '登陆用户名',
  `user_pwd` varchar(30) DEFAULT NULL COMMENT '登陆密码',
  `last_login_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '最后登陆时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jl_login
-- ----------------------------
INSERT INTO `jl_login` VALUES ('1', 'admin', 'fef6171469e80d32c0559f88b37724', '2014-09-07 19:28:35');
INSERT INTO `jl_login` VALUES ('2', '11', '512bd43d9caa6e02c990b0a82652dc', '2014-09-07 16:54:04');

-- ----------------------------
-- Table structure for `jl_notice`
-- ----------------------------
DROP TABLE IF EXISTS `jl_notice`;
CREATE TABLE `jl_notice` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增序号',
  `idf` int(11) DEFAULT '1' COMMENT '通知类型（0管理员，1学生用户）',
  `kind` int(11) DEFAULT '0' COMMENT '消息类型（0提示，1通知）',
  `aboutSite` mediumtext COMMENT '关于大赛',
  `aboutMe` mediumtext COMMENT '关于自己',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jl_notice
-- ----------------------------
INSERT INTO `jl_notice` VALUES ('1', '0', '1', '管理员的大赛通知', '管理员的自己通知');
INSERT INTO `jl_notice` VALUES ('2', '1', '1', '学生的大赛通知', '学生的自己通知');
INSERT INTO `jl_notice` VALUES ('3', '0', '0', 'attention', '管理员的注意');
INSERT INTO `jl_notice` VALUES ('4', '1', '0', 'attention', '学生的注意1');
INSERT INTO `jl_notice` VALUES ('5', '0', '0', 'information', '管理员的提示');
INSERT INTO `jl_notice` VALUES ('6', '1', '0', 'information', '学生的提示1');
INSERT INTO `jl_notice` VALUES ('7', '1', '0', 'attention', '学生的注意2');
INSERT INTO `jl_notice` VALUES ('8', '1', '0', 'information', '学生的提示2');

-- ----------------------------
-- Table structure for `jl_school`
-- ----------------------------
DROP TABLE IF EXISTS `jl_school`;
CREATE TABLE `jl_school` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增序号',
  `school_id` varchar(2) DEFAULT NULL COMMENT '学校编号',
  `school_name` varchar(50) DEFAULT NULL COMMENT '学校名称',
  `show_order` int(11) DEFAULT NULL COMMENT '学校显示顺序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jl_school
-- ----------------------------
INSERT INTO `jl_school` VALUES ('1', '1', '北华大学', '1');
INSERT INTO `jl_school` VALUES ('2', '2', '东北电力大学', '2');
INSERT INTO `jl_school` VALUES ('3', '3', '东北师范大学', '3');
INSERT INTO `jl_school` VALUES ('4', '4', '东北师范大学人文学院', '4');
INSERT INTO `jl_school` VALUES ('5', '5', '长春大学', '5');
INSERT INTO `jl_school` VALUES ('6', '6', '长春大学旅游学院', '6');
INSERT INTO `jl_school` VALUES ('7', '7', '长春工程学院', '7');
INSERT INTO `jl_school` VALUES ('8', '8', '长春光华学院', '8');
INSERT INTO `jl_school` VALUES ('9', '9', '长春工业大学', '9');
INSERT INTO `jl_school` VALUES ('10', '10', '长春工业大学人文信息学院', '10');
INSERT INTO `jl_school` VALUES ('11', '11', '长春理工大学', '11');
INSERT INTO `jl_school` VALUES ('12', '12', '长春理工大学光电信息学院', '12');
INSERT INTO `jl_school` VALUES ('13', '13', '长春师范大学', '13');
INSERT INTO `jl_school` VALUES ('14', '14', '长春职业技术学院', '14');
INSERT INTO `jl_school` VALUES ('15', '15', '吉林财经大学', '15');
INSERT INTO `jl_school` VALUES ('16', '16', '吉林动画学院', '16');
INSERT INTO `jl_school` VALUES ('17', '17', '吉林大学', '17');
INSERT INTO `jl_school` VALUES ('18', '18', '吉林大学应用技术学院', '18');
INSERT INTO `jl_school` VALUES ('19', '19', '吉林大学珠海学院', '19');
INSERT INTO `jl_school` VALUES ('20', '20', '吉林电子信息职业技术学院', '20');
INSERT INTO `jl_school` VALUES ('21', '21', '吉林工商学院', '21');
INSERT INTO `jl_school` VALUES ('22', '22', '吉林工业职业技术学院', '22');
INSERT INTO `jl_school` VALUES ('23', '23', '吉林建筑大学', '23');
INSERT INTO `jl_school` VALUES ('24', '24', '吉林农业大学', '24');
INSERT INTO `jl_school` VALUES ('25', '25', '吉林农业科技学院', '25');
INSERT INTO `jl_school` VALUES ('26', '26', '吉林师范大学', '26');
INSERT INTO `jl_school` VALUES ('27', '27', '吉林省经济管理干部学院', '27');
INSERT INTO `jl_school` VALUES ('28', '28', '吉林铁道职业技术学院', '28');
INSERT INTO `jl_school` VALUES ('29', '29', '松原职业技术学院', '29');
INSERT INTO `jl_school` VALUES ('30', '30', '通化师范学院', '30');

-- ----------------------------
-- Table structure for `jl_subject`
-- ----------------------------
DROP TABLE IF EXISTS `jl_subject`;
CREATE TABLE `jl_subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增序号',
  `subject_id` varchar(2) DEFAULT NULL COMMENT '主题编号',
  `subject_name` varchar(20) DEFAULT NULL COMMENT '主题名称',
  `show_order` int(11) DEFAULT NULL COMMENT '主题显示顺序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jl_subject
-- ----------------------------
INSERT INTO `jl_subject` VALUES ('1', '01', 'OPPO品牌', '1');
INSERT INTO `jl_subject` VALUES ('2', '02', 'OPPO公益', '2');
INSERT INTO `jl_subject` VALUES ('3', '03', '冰力克', '3');
INSERT INTO `jl_subject` VALUES ('4', '04', '人祖山', '4');
INSERT INTO `jl_subject` VALUES ('5', '05', '安琪儿', '5');
INSERT INTO `jl_subject` VALUES ('6', '06', '感冒灵', '6');
INSERT INTO `jl_subject` VALUES ('7', '07', '王老吉', '7');
INSERT INTO `jl_subject` VALUES ('8', '08', '海天', '8');
INSERT INTO `jl_subject` VALUES ('9', '09', '东南汽车', '9');
INSERT INTO `jl_subject` VALUES ('10', '10', '桃花姬', '10');
INSERT INTO `jl_subject` VALUES ('11', '11', '中传MBA', '11');
INSERT INTO `jl_subject` VALUES ('12', '12', '通用珠海', '12');
INSERT INTO `jl_subject` VALUES ('13', '13', '易信', '13');
INSERT INTO `jl_subject` VALUES ('14', '14', '网易云音乐', '14');

-- ----------------------------
-- Table structure for `jl_user`
-- ----------------------------
DROP TABLE IF EXISTS `jl_user`;
CREATE TABLE `jl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增序号',
  `user_name` varchar(50) NOT NULL COMMENT '登陆用户名',
  `tschool` int(11) NOT NULL COMMENT '学校编号',
  `name` varchar(50) DEFAULT NULL COMMENT '作者姓名',
  `sfzid` varchar(20) DEFAULT NULL COMMENT '身份证号码',
  `tel` varchar(20) DEFAULT NULL COMMENT '联系电话',
  `email` varchar(50) DEFAULT NULL COMMENT '邮箱',
  `qq` varchar(20) DEFAULT NULL COMMENT 'QQ号',
  `addr` varchar(500) DEFAULT NULL COMMENT '地址',
  `rtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '注册时间',
  PRIMARY KEY (`id`,`user_name`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jl_user
-- ----------------------------
INSERT INTO `jl_user` VALUES ('1', 'admin', '1', '管理员', '321283199111110639', '13381126220', 'wangjz2010@qq.com', '262662004', '天通苑西三区21幢四单元1002室', '2014-09-07 18:36:14');
INSERT INTO `jl_user` VALUES ('2', '11', '15', '小王', '321283199111110639', '13381126220', 'wangjz2010@qq.com', '262662004', '天通苑西三区21幢四单元1002室', '2014-09-07 18:22:39');

-- ----------------------------
-- Table structure for `jl_zuolaoinfo`
-- ----------------------------
DROP TABLE IF EXISTS `jl_zuolaoinfo`;
CREATE TABLE `jl_zuolaoinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增序号',
  `tsid` varchar(16) DEFAULT NULL COMMENT '作品编号',
  `zlname` varchar(20) DEFAULT NULL COMMENT '作者老师姓名',
  `zltel` varchar(13) DEFAULT NULL COMMENT '作者老师电话',
  `zlkind` int(11) DEFAULT NULL COMMENT '作者老师类型',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jl_zuolaoinfo
-- ----------------------------

-- ----------------------------
-- Table structure for `jl_zuopininfo`
-- ----------------------------
DROP TABLE IF EXISTS `jl_zuopininfo`;
CREATE TABLE `jl_zuopininfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增序号',
  `opass` int(11) DEFAULT '0' COMMENT '是否审核通过',
  `tsid` varchar(16) DEFAULT NULL COMMENT '作品编号',
  `tkind` varchar(5) DEFAULT NULL COMMENT '类别编号',
  `tsub` varchar(5) DEFAULT NULL COMMENT '主题编号',
  `tschool` int(11) DEFAULT NULL COMMENT '学校编号',
  `user_name` varchar(50) DEFAULT NULL COMMENT '登陆用户名',
  `t1` varchar(100) DEFAULT NULL COMMENT '报名编号',
  `t2` varchar(100) DEFAULT NULL COMMENT '作者姓名',
  `t3` varchar(100) DEFAULT NULL COMMENT '联系电话',
  `t4` varchar(100) DEFAULT NULL COMMENT '电子邮箱',
  `t5` varchar(100) DEFAULT NULL COMMENT '指导老师',
  `t6` varchar(100) DEFAULT NULL COMMENT '老师电话',
  `t7` varchar(100) DEFAULT NULL COMMENT '作品名称',
  `t8` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '提交时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jl_zuopininfo
-- ----------------------------
INSERT INTO `jl_zuopininfo` VALUES ('1', '1', '0123456789123456', 'A', '02', '22', '11', 'A02-11-110-1124', '王家峥', 't3', 't4', '王欣然', 't6', '青春无极限，我的王老吉', '2014-09-13 19:46:36');
INSERT INTO `jl_zuopininfo` VALUES ('2', '0', '11', null, null, null, '11', null, null, null, null, null, null, null, '2014-09-14 12:14:52');
INSERT INTO `jl_zuopininfo` VALUES ('3', '0', null, null, null, null, '11', null, null, null, null, null, null, null, '2014-09-14 12:15:15');

-- ----------------------------
-- Table structure for `jl_zuoweiinfo`
-- ----------------------------
DROP TABLE IF EXISTS `jl_zuoweiinfo`;
CREATE TABLE `jl_zuoweiinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增序号',
  `tsid` varchar(16) DEFAULT NULL COMMENT '作品编号',
  `zlpos` varchar(25) DEFAULT NULL COMMENT '作品位置名称',
  `zlmd5` varchar(32) DEFAULT NULL COMMENT '作品MD5校验码',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jl_zuoweiinfo
-- ----------------------------
