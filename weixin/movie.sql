/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : movie

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2018-01-18 17:29:04
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '管理员id',
  `name` varchar(20) NOT NULL COMMENT '管理员名称',
  `pwd` varchar(32) NOT NULL COMMENT '管理员密码;Md5加密',
  `state` char(1) NOT NULL COMMENT '管理员状态;0禁用1启用',
  `rank` char(1) DEFAULT NULL COMMENT '管理员等级;0普通1高级2超级(不可删除)',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'Admin', 'e10adc3949ba59abbe56e057f20f883e', '1', '2');

-- ----------------------------
-- Table structure for buy
-- ----------------------------
DROP TABLE IF EXISTS `buy`;
CREATE TABLE `buy` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL COMMENT '用户id',
  `m_id` int(11) NOT NULL COMMENT 'money_id',
  `schedule` char(1) NOT NULL COMMENT '购票进度;1订票成功 2付款成功3出票成功4退票中5退票成功',
  `time` varchar(255) NOT NULL COMMENT '时间',
  `seat` varchar(255) DEFAULT NULL COMMENT '买的座位号',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of buy
-- ----------------------------
INSERT INTO `buy` VALUES ('1', '6', '1', '1', '2018年01月18日', '8');
INSERT INTO `buy` VALUES ('2', '6', '1', '1', '2018年01月18日', '10');
INSERT INTO `buy` VALUES ('3', '6', '1', '1', '2018年01月18日', '30');
INSERT INTO `buy` VALUES ('4', '6', '1', '1', '2018年01月18日', '14');
INSERT INTO `buy` VALUES ('5', '2', '1', '1', '2018年01月18日', '43');
INSERT INTO `buy` VALUES ('6', '2', '1', '1', '2018年01月18日', '60');
INSERT INTO `buy` VALUES ('7', '2', '1', '1', '2018年01月18日', '49');
INSERT INTO `buy` VALUES ('8', '2', '1', '1', '2018年01月18日', '47');
INSERT INTO `buy` VALUES ('9', '2', '1', '1', '2018年01月18日', '6');
INSERT INTO `buy` VALUES ('10', '2', '1', '1', '2018年01月18日', '42');
INSERT INTO `buy` VALUES ('11', '2', '1', '1', '2018年01月18日', '57');
INSERT INTO `buy` VALUES ('12', '2', '1', '1', '2018年01月18日', '56');
INSERT INTO `buy` VALUES ('13', '1', '1', '1', '2018年01月18日', '33');
INSERT INTO `buy` VALUES ('14', '1', '1', '1', '2018年01月18日', '18');
INSERT INTO `buy` VALUES ('15', '1', '1', '1', '2018年01月18日', '3');
INSERT INTO `buy` VALUES ('16', '1', '1', '1', '2018年01月18日', '64');
INSERT INTO `buy` VALUES ('17', '2', '9', '1', '2018年01月18日', '26');
INSERT INTO `buy` VALUES ('18', '2', '9', '1', '2018年01月18日', '30');
INSERT INTO `buy` VALUES ('19', '2', '9', '1', '2018年01月18日', '44');
INSERT INTO `buy` VALUES ('20', '2', '9', '1', '2018年01月18日', '39');
INSERT INTO `buy` VALUES ('21', '2', '9', '1', '2018年01月18日', '12');
INSERT INTO `buy` VALUES ('22', '2', '7', '1', '2018年01月18日', '7');
INSERT INTO `buy` VALUES ('23', '2', '7', '1', '2018年01月18日', '59');
INSERT INTO `buy` VALUES ('24', '2', '7', '1', '2018年01月18日', '47');
INSERT INTO `buy` VALUES ('25', '2', '7', '1', '2018年01月18日', '29');
INSERT INTO `buy` VALUES ('26', '2', '8', '1', '2018年01月18日', '6');
INSERT INTO `buy` VALUES ('27', '2', '8', '1', '2018年01月18日', '29');
INSERT INTO `buy` VALUES ('28', '2', '8', '1', '2018年01月18日', '57');
INSERT INTO `buy` VALUES ('29', '2', '8', '1', '2018年01月18日', '32');
INSERT INTO `buy` VALUES ('30', '2', '3', '1', '2018年01月18日', '8');
INSERT INTO `buy` VALUES ('31', '2', '3', '1', '2018年01月18日', '18');
INSERT INTO `buy` VALUES ('32', '2', '3', '1', '2018年01月18日', '36');
INSERT INTO `buy` VALUES ('33', '2', '3', '1', '2018年01月18日', '35');
INSERT INTO `buy` VALUES ('34', '2', '3', '1', '2018年01月18日', '17');
INSERT INTO `buy` VALUES ('35', '2', '9', '1', '2018年01月18日', '2');
INSERT INTO `buy` VALUES ('36', '2', '9', '1', '2018年01月18日', '33');
INSERT INTO `buy` VALUES ('37', '2', '9', '1', '2018年01月18日', '19');
INSERT INTO `buy` VALUES ('38', '2', '9', '1', '2018年01月18日', '21');
INSERT INTO `buy` VALUES ('39', '2', '6', '1', '2018年01月18日', '6');
INSERT INTO `buy` VALUES ('40', '2', '6', '1', '2018年01月18日', '12');
INSERT INTO `buy` VALUES ('41', '2', '6', '1', '2018年01月18日', '58');
INSERT INTO `buy` VALUES ('42', '2', '6', '1', '2018年01月18日', '55');

-- ----------------------------
-- Table structure for comment
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL COMMENT '用户id',
  `m_id` int(11) NOT NULL COMMENT '电影id',
  `content` varchar(11) NOT NULL COMMENT '评论内容',
  `date` varchar(50) NOT NULL COMMENT '评论时间;格式01-06 03:26',
  `good` varchar(255) NOT NULL COMMENT '评论点赞;默认为0',
  `state` char(1) NOT NULL COMMENT '评论状态;0禁止显示',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comment
-- ----------------------------
INSERT INTO `comment` VALUES ('1', '1', '1', 'ffff', '01-06 03:26', '0', '');
INSERT INTO `comment` VALUES ('2', '2', '2', '发过火', '01-06 03:26', '0', '');

-- ----------------------------
-- Table structure for hall
-- ----------------------------
DROP TABLE IF EXISTS `hall`;
CREATE TABLE `hall` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '大厅id',
  `name` varchar(20) DEFAULT NULL COMMENT '大厅名称',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hall
-- ----------------------------
INSERT INTO `hall` VALUES ('1', 'A厅');
INSERT INTO `hall` VALUES ('2', 'B厅');
INSERT INTO `hall` VALUES ('3', 'C厅');
INSERT INTO `hall` VALUES ('4', 'D厅');

-- ----------------------------
-- Table structure for hint
-- ----------------------------
DROP TABLE IF EXISTS `hint`;
CREATE TABLE `hint` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `m_id` int(11) NOT NULL COMMENT '电影id',
  `centent` varchar(11) NOT NULL COMMENT '提示内容',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hint
-- ----------------------------
INSERT INTO `hint` VALUES ('1', '1', '就要开始演了');
INSERT INTO `hint` VALUES ('2', '2', '赶快进场');
INSERT INTO `hint` VALUES ('3', '3', '不错不错');
INSERT INTO `hint` VALUES ('4', '4', '赶快');
INSERT INTO `hint` VALUES ('5', '5', '别晚点哦');
INSERT INTO `hint` VALUES ('6', '6', '快快快电影院等你');

-- ----------------------------
-- Table structure for look
-- ----------------------------
DROP TABLE IF EXISTS `look`;
CREATE TABLE `look` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '电影观看id',
  `m_id` int(11) NOT NULL COMMENT '电影id',
  `look` varchar(255) NOT NULL COMMENT '想看人数',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of look
-- ----------------------------
INSERT INTO `look` VALUES ('1', '1', '666');
INSERT INTO `look` VALUES ('2', '2', '999');
INSERT INTO `look` VALUES ('3', '3', '888');
INSERT INTO `look` VALUES ('4', '4', '777');
INSERT INTO `look` VALUES ('5', '5', '5555');
INSERT INTO `look` VALUES ('6', '6', '88899');

-- ----------------------------
-- Table structure for money
-- ----------------------------
DROP TABLE IF EXISTS `money`;
CREATE TABLE `money` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '票价id',
  `m_id` int(11) NOT NULL COMMENT '电影id',
  `t_id` int(11) NOT NULL COMMENT '影院id',
  `h_id` char(1) NOT NULL COMMENT '大厅信息',
  `seat` char(4) DEFAULT NULL COMMENT '电影大厅座位数',
  `time` varchar(255) NOT NULL COMMENT '时间段',
  `people` varchar(255) NOT NULL COMMENT '已选座位数;12345显示对应座位',
  `date` varchar(255) NOT NULL COMMENT '时间日期格式 2017-09-21',
  `money` char(5) DEFAULT NULL COMMENT '票价',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of money
-- ----------------------------
INSERT INTO `money` VALUES ('1', '2', '1', '1', '66', '12:21-13:51', ',8,10,30,14,43,60,49,47,6,42,57,56,33,18,3,64', '2018-01-12', '36.5');
INSERT INTO `money` VALUES ('2', '1', '2', '2', '56', '18:00-22:00', '', '2018-06-09', '40.5');
INSERT INTO `money` VALUES ('3', '2', '1', '3', '45', '15:20-17:00', ',8,18,36,35,17', '2018-09-21', '30.5');
INSERT INTO `money` VALUES ('4', '2', '2', '4', '30', '06:20-08:20', '', '2018-01-13', '20');
INSERT INTO `money` VALUES ('6', '1', '1', '2', '61', '08:20-09:51', ',6,12,58,55', '2018-01-21', '45.5');
INSERT INTO `money` VALUES ('7', '5', '1', '4', '67', '16:00-18:00', ',7,59,47,29', '2018-01-23', '36.5');
INSERT INTO `money` VALUES ('8', '5', '2', '3', '58', '14:00-16:00', ',6,29,57,32', '2018-01-23', '42.5');
INSERT INTO `money` VALUES ('9', '3', '1', '2', '45', '12:00-13:30', ',26,30,44,39,12,2,33,19,21', '2018-01-23', '39.5');

-- ----------------------------
-- Table structure for move_type
-- ----------------------------
DROP TABLE IF EXISTS `move_type`;
CREATE TABLE `move_type` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '影片类型选择id',
  `m_id` int(11) NOT NULL COMMENT '影片id',
  `t_id` int(11) NOT NULL COMMENT '类型id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of move_type
-- ----------------------------
INSERT INTO `move_type` VALUES ('1', '1', '1');
INSERT INTO `move_type` VALUES ('2', '2', '2');
INSERT INTO `move_type` VALUES ('3', '3', '4');
INSERT INTO `move_type` VALUES ('4', '5', '1');
INSERT INTO `move_type` VALUES ('5', '6', '1');

-- ----------------------------
-- Table structure for movie
-- ----------------------------
DROP TABLE IF EXISTS `movie`;
CREATE TABLE `movie` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '电影id',
  `name` varchar(20) NOT NULL COMMENT '电影名称',
  `director` varchar(5) NOT NULL COMMENT '主导演名称',
  `performer_id` varchar(50) NOT NULL COMMENT '主演id；用,隔开间距',
  `shows` varchar(50) NOT NULL COMMENT '上映时间(地区)；地区:大陆香港等',
  `duration` varchar(20) NOT NULL COMMENT '播放时长;(按分钟计数)',
  `photo` varchar(255) NOT NULL COMMENT '电影图标;图标的路径',
  `state` char(2) NOT NULL COMMENT '电影状态;0未上映 1已经上映',
  `abstract` varchar(255) NOT NULL COMMENT '电影简介',
  `language` varchar(255) NOT NULL COMMENT '影片语言',
  `english` varchar(255) NOT NULL COMMENT '电影英文名称',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of movie
-- ----------------------------
INSERT INTO `movie` VALUES ('1', '前任3', '田羽生', '1,4,6,7,8', '2017-11-15', '120', 'Public/img/qianren.jpg', '1', '《前任3：再见前任》是“前任”系列的第三部电影作品，由韩庚、郑恺、于文文、曾梦雪、罗米、韩文亮主演。该系列的前两部作品都取得了不错的票房，并凭借爆笑走肾的喜剧风格和颇具传播力的“金句”台词，成为了“爆款”电影。《前任3》依旧延续了前两部爆笑爱情喜剧的风格，令这一原创IP更加深入人心。本片讲述了孟云（韩庚饰）和林佳五年的爱情似乎进入了倦怠期，因为一点小事就闹着要分手。余飞（郑恺饰）和丁点是两人共同的好友，同时也是一对恋人，在劝解这对情侣复合的过程中，爱情也受到了严峻的考验。', '中文', 'The Ex-File : The Return of the Exes');
INSERT INTO `movie` VALUES ('5', '英雄本色2018', '丁晟', '11', '2018-01-18', '110', 'Uploade/20180117171953117.jpg', '0', '周凯参与走私，被身为缉毒警察的弟弟周超逮捕入狱。三年后，周凯出狱，改过自新。曾经的手下阿仓已为毒贩头目，为获取周凯的海外客户资料，设计加害周凯。周凯与警方合作，逮捕了阿仓，两兄弟重归于好。', '中文', 'A Better Tomorrow 2018');
INSERT INTO `movie` VALUES ('2', '无问西东', '李芳芳', '10', '2018-03-01', '138', 'Uploade/20180117170757138.jpg', '1', '如果提前了解了你要面对的人生，你是否还会有勇气前来？吴岭澜、沈光耀、王敏佳、陈鹏、张果果，几个年轻人满怀诸多渴望，在四个非同凡响的时空中一路前行。他们在最好的年纪迎来了最残酷的考验，并成就了永不褪色的青春传奇。', '中文', 'FORever Young');
INSERT INTO `movie` VALUES ('3', '勇敢者游戏：决战丛林', '杰克卡斯丹', '12', '2018-01-12', '119', 'Uploade/20180117171056302.jpg', '1', '影片主要讲述了性格迥异的四人，因为共同的课后留校聚在一起，又因让人“远离世界之路”的“勇敢者的游戏”而产生命运纠葛，共同打破次元壁，经历一场考验勇气智慧，接受成长磨炼的冒险的故事', '英语', 'Jumanji：Welcome to the Jungle');
INSERT INTO `movie` VALUES ('6', '公牛历险记', '卡洛斯·沙', '13', '2018-01-19', '108', 'Uploade/20180117172348276.jpg', '0', '《公牛历险记》根据曼罗·里夫1936年经典童书改编，讲述西班牙一头名为“费迪南德”的公牛的爆笑历险故事。费迪南德体型健壮，但却心地善良性格温和，它被误认为是危险的野兽，从而被捕送往他乡被逼做一只“斗牛”。为回到家人身边，他不得不踏上了一场终极冒险旅程。', '英语', 'Ferdinand');

-- ----------------------------
-- Table structure for movie_theatre
-- ----------------------------
DROP TABLE IF EXISTS `movie_theatre`;
CREATE TABLE `movie_theatre` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '影院id',
  `name` varchar(255) NOT NULL COMMENT '影院名称',
  `abstract` varchar(255) NOT NULL COMMENT '影院简介',
  `city` varchar(255) NOT NULL COMMENT '所在地址',
  `latitude` varchar(100) NOT NULL,
  `distance` int(5) NOT NULL COMMENT '距离',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of movie_theatre
-- ----------------------------
INSERT INTO `movie_theatre` VALUES ('1', '四通影院', '河北省保定市莲池区四通商场4层', '保定', '38.8743516698,115.5053598349', '4');
INSERT INTO `movie_theatre` VALUES ('2', '华隶影城', '河北省石家庄莲池区四通商场4层', '保定', '38.8656814499,115.4961697105', '5');
INSERT INTO `movie_theatre` VALUES ('20', '万达电影城', '河北省保定市新市区先锋街道园南社区东北方向', '保定', '38.8834036477,115.4761441727', '7');

-- ----------------------------
-- Table structure for performer
-- ----------------------------
DROP TABLE IF EXISTS `performer`;
CREATE TABLE `performer` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `m_id` int(11) NOT NULL COMMENT '电影id',
  `performer_id` int(11) NOT NULL COMMENT '演员id',
  `people` varchar(20) NOT NULL COMMENT '饰演名称',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of performer
-- ----------------------------
INSERT INTO `performer` VALUES ('1', '1', '1', '孟云');
INSERT INTO `performer` VALUES ('2', '1', '4', '于飞');
INSERT INTO `performer` VALUES ('3', '1', '6', '林佳');
INSERT INTO `performer` VALUES ('4', '1', '7', '丁点');
INSERT INTO `performer` VALUES ('5', '1', '8', '王梓');
INSERT INTO `performer` VALUES ('6', '2', '10', '王敏佳');
INSERT INTO `performer` VALUES ('7', '5', '11', '宋子杰');
INSERT INTO `performer` VALUES ('8', '3', '12', '威廉姆斯');
INSERT INTO `performer` VALUES ('9', '6', '13', '小公牛');

-- ----------------------------
-- Table structure for performer_info
-- ----------------------------
DROP TABLE IF EXISTS `performer_info`;
CREATE TABLE `performer_info` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '演员id',
  `name` varchar(20) NOT NULL COMMENT '演员名称',
  `english` varchar(255) NOT NULL COMMENT '演员英文名',
  `date` varchar(255) NOT NULL COMMENT '出生日期',
  `city` varchar(255) NOT NULL COMMENT '出生城市',
  `abstract` varchar(255) NOT NULL COMMENT '影人简介',
  `photo` varchar(255) NOT NULL COMMENT '头像',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of performer_info
-- ----------------------------
INSERT INTO `performer_info` VALUES ('2', '吴君如', 'wujunru', '1889', '香港', '逗比', 'Uploade/20180118114304548.jpg');
INSERT INTO `performer_info` VALUES ('1', '韩庚', 'hangeng', '1990', '北京', '他是一个练习生', 'Uploade/20180111152313450.jpg');
INSERT INTO `performer_info` VALUES ('4', '郑凯', 'zhengkai', '1995', '北京一套房', '人生赢家啦啦啦啦啦', 'Uploade/20180111103657822.jpg');
INSERT INTO `performer_info` VALUES ('6', '于文文', 'kelly yu', '1989-11-07', '中国辽宁省', '2014年6月，主演电视剧《一又二分之一的夏天》；同年11月，正式推出首张个人专辑《斗志》；', 'Uploade/20180118135343716.jpg');
INSERT INTO `performer_info` VALUES ('7', '曾梦雪', 'MengxueZeng', '1994-10-12', '四川成都', '曾梦雪，1994年10月12日出生于四川成都，中国内地女演员。', 'Uploade/20180118140550330.jpg');
INSERT INTO `performer_info` VALUES ('8', '罗米', 'Miluo', '1993-10-21', '四川省成都市', '罗米，1993年10月20日出生于四川省成都市，毕业于复旦大学上海视觉艺术学院，中国内地女演员', 'Uploade/20180118140918373.jpg');
INSERT INTO `performer_info` VALUES ('9', '田羽生', 'YushengTIan', '1983-03-16', '四川成都', '田羽生，1983年3月16日出生于四川成都，毕业于中央戏剧学院，导演、编剧。', 'Uploade/20180118143134459.jpg');
INSERT INTO `performer_info` VALUES ('10', '章子怡', 'YiziZhang', '1979-02-09', '北京市', '章子怡，1979年2月9日出生于北京市，华语影视女演员、制片人，毕业于中央戏剧学院表演系。', 'Uploade/20180118150112843.jpg');
INSERT INTO `performer_info` VALUES ('11', '马天宇', 'RayMa', '1986-07-12', '山东省德州市', '2006年，参加“加油！好男儿”获得武汉赛区冠军、全国总决赛第六名、全国网络人气冠军，正式出道。', 'Uploade/timg.jpg');
INSERT INTO `performer_info` VALUES ('12', '道恩·强森', 'Dwayne Johnson', '1972-05-02', '加州海沃德市', '美国男演员、职业摔跤手。2001年，他出演了第一部电影《木乃伊归来》', 'Uploade/qiangsen.jpg');
INSERT INTO `performer_info` VALUES ('13', '约翰·塞纳', 'John Felix Anthony Cena', '1977-04-23', '马萨诸塞州的波士顿市', '三次获得世界重量级冠军，三次获得全美冠军，十四次获得WWE冠军。', 'Uploade/saina.jpg');

-- ----------------------------
-- Table structure for position
-- ----------------------------
DROP TABLE IF EXISTS `position`;
CREATE TABLE `position` (
  `id` int(3) NOT NULL,
  `name` varchar(10) DEFAULT NULL COMMENT '影院名称',
  `longitude` varchar(10) DEFAULT NULL COMMENT '经度',
  `latitude` varchar(10) DEFAULT NULL COMMENT '纬度',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of position
-- ----------------------------

-- ----------------------------
-- Table structure for remark
-- ----------------------------
DROP TABLE IF EXISTS `remark`;
CREATE TABLE `remark` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '评分id',
  `u_id` int(11) NOT NULL COMMENT '主评用户id',
  `user_id` int(11) NOT NULL COMMENT '追评用户id',
  `content` varchar(11) NOT NULL COMMENT '追评内容',
  `date` varchar(50) NOT NULL COMMENT '追评时间;格式01-06 03:26',
  `c_id` int(11) NOT NULL COMMENT '追评内容id;对于那一条评论进行追评',
  `state` char(1) NOT NULL COMMENT '评论状态;0禁止显示',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of remark
-- ----------------------------
INSERT INTO `remark` VALUES ('1', '0', '0', '分分看', '01-06 03:26', '111', '');
INSERT INTO `remark` VALUES ('2', '0', '0', '你好', '01-06 03:26', '333', '');

-- ----------------------------
-- Table structure for score
-- ----------------------------
DROP TABLE IF EXISTS `score`;
CREATE TABLE `score` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '评分id',
  `m_id` int(11) NOT NULL COMMENT '电影id',
  `score` char(3) NOT NULL COMMENT '电影评分;如3.6',
  `u_id` int(11) NOT NULL COMMENT '用户id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of score
-- ----------------------------
INSERT INTO `score` VALUES ('1', '1', '9.9', '5');
INSERT INTO `score` VALUES ('2', '2', '6.6', '1');
INSERT INTO `score` VALUES ('3', '3', '8.2', '6');
INSERT INTO `score` VALUES ('4', '6', '9.6', '4');
INSERT INTO `score` VALUES ('5', '5', '8.6', '2');

-- ----------------------------
-- Table structure for title_type
-- ----------------------------
DROP TABLE IF EXISTS `title_type`;
CREATE TABLE `title_type` (
  `id` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `url` varchar(50) DEFAULT NULL,
  `about` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of title_type
-- ----------------------------
INSERT INTO `title_type` VALUES ('1', '前任攻略', 'https://img3.doubanio.com/view/photo/s_ratio_poster/public/p2171886373.webp', '', '孟云、夏露、罗茜将怎样收拾感情的残局，众人的感情的归宿最终何去何从？');
INSERT INTO `title_type` VALUES ('2', '前任2：备胎反击战', 'https://img3.doubanio.com/view/photo/s_ratio_poster/public/p2276855500.webp', '', '节目编导伊泽（郭采洁 饰）在工作中重遇多年前有过一次邂逅的明星余飞（郑恺 饰），两人的再度邂逅让伊泽如入梦境，原以为美梦成真时，童话破碎了，伊泽暗暗做出了一个决定……在一场“谁先认真谁就输了”的爱情游戏中，谁会是最后赢家呢？');
INSERT INTO `title_type` VALUES ('3', '前任3：再见前任', 'https://img.alicdn.com/bao/uploaded/i3/TB1Nv7abAfb_uJkSndVXXaBkpXa_.jpg_300x300.jpg', '', '一对好基友孟云（韩庚 饰）和余飞（郑恺 饰）跟女友都因为一点小事宣告分手，并且“拒绝挽回，死不认错”。两人在夜店、派对与交友软件上放飞人生第二春，大肆庆祝“黄金单身期”，从而引发了一系列好笑的故事。孟云与女友同甘共苦却难逃“五年之痒”，余飞与女友则棋逢敌手相爱相杀无绝期。然而现实的“打脸”却来得猝不及防：一对推拉纠结零往来，一对纠缠互怼全交代。两对恋人都将面对最终的选择：是再次相见？还是再也不见？');
INSERT INTO `title_type` VALUES ('4', '勇敢者游戏：决战丛林', 'https://img3.doubanio.com/view/photo/s_ratio_poster/public/p2506258944.webp', '', '讲述了四名性格迥异的高中生意外穿越到险象环生的勇敢者游戏中，变身成为与自身性格外貌截然不同的游戏角色。面对丛林猛兽的袭击和邪恶势力的追捕，四人必须在冒险家（道恩·强森 Dwayne Johnson 饰）的带领下，战胜重重危机，赢得游戏，才能获得重返现实的机会的故事。');
INSERT INTO `title_type` VALUES ('5', '无问西东', 'https://img3.doubanio.com/view/photo/s_ratio_poster/public/p2507572275.webp', '', '吴岭澜（陈楚生 饰），出发时意气风发，却很快在途中迷失了方向。沈光耀（王力宏 饰），自愿参与了最残酷的战争，他一直在努力去做那些令他害怕，但重要的事。王敏佳（章子怡 饰）最初的错误，只是为了虚荣撒了一个小谎；最初的烦恼，只是在两个优秀的男人中选择一个。');
INSERT INTO `title_type` VALUES ('6', '卧底巨星', 'https://img1.doubanio.com/view/photo/s_ratio_poster/public/p2508908269.webp', null, '动作巨星元豹（陈奕迅 饰）走红二十余载却从未得到过最佳男主角，因与泰国黑帮老大“八面佛”交好而被怀疑参与跨国贩毒犯罪，铁杆迷弟铁柱（李荣浩 饰）通过擅长“潜规则”的副导（崔志佳 饰）潜入元豹新电影的剧组，努力配合警方收集证据想为偶像洗脱嫌疑。在经历了恋上女一号童童（李一桐 饰），得罪元豹经纪人泰格（陈国坤 饰），晋升成为男二号，目睹偶像用替身、耍大牌等一系列啼笑皆非的“娱乐圈初体验”之后，铁柱也终于离案件更近了一些……');
INSERT INTO `title_type` VALUES ('8', '太空救援', 'https://img3.doubanio.com/view/photo/s_ratio_poster/public/p2508922375.webp', '', '位于外太空的“礼炮7号”空间站意外与地球失去联系，工程师维克托·阿约金和退役宇航员弗拉基米尔·费奥多罗夫临危受命，搭乘联盟号T-13寻找“礼炮7号”的踪迹，当经历宇宙空间对接、太空舱寒流、空间站失火、太阳能充电系统失灵等一系列危机准备返航之时，却被告知空间站即将被击落，一场更大的太空灾难正在袭来......\r\n位于外太空的“礼炮7号”空间站意外与地球失去联系，工程师维克托·阿约金和退役宇航员弗拉基米尔·费奥多罗夫临危受命，搭乘联盟号T-13寻找“礼炮7号”的踪迹，当经历宇宙空间对接、太空舱寒流、空间站失火、太阳能充电系统失灵等一系列危机准备返航之时，却被告知空间站即将被击落，一场更大的太空灾难正在袭来......\r\n位于外太空的“礼炮7号”空间站意外与地球失去联系，工程师维克托·阿约金和退役宇航员弗拉基米尔·费奥多罗夫临危受命，搭乘联盟号T-13寻找“礼炮7号”的踪迹，当经历宇宙空间对接、太空舱寒流、空间站失火、太阳能充电系统失灵等一系列危机准备返航之时，却被告知空间站即将被击落，一场更大的太空灾难正在袭来......\r\n位于外太空的“礼炮7号”空间站意外与地球失去联系，工程师维克托·阿约金和退役宇航员弗拉基米尔·费奥多罗夫临危受命，搭乘联盟号T-13寻找“礼炮7号”的踪迹，当经历宇宙空间对接、太空舱寒流、空间站失火、太阳能充电系统失灵等一系列危机准备返航之时，却被告知空间站即将被击落，一场更大的太空灾难正在袭来......\r\n位于外太空的“礼炮7号”空间站意外与地球失去联系，工程师维克托·阿约金和退役宇航员弗拉基米尔·费奥多罗夫临危受命，搭乘联盟号T-13寻找“礼炮7号”的踪迹，当经历宇宙空间对接、太空舱寒流、空间站失火、太阳能充电系统失灵等一系列危机准备返航之时，却被告知空间站即将被击落，一场更大的太空灾难正在袭来......\r\n位于外太空的“礼炮7号”空间站意外与地球失去联系，工程师维克托·阿约金和退役宇航员弗拉基米尔·费奥多罗夫临危受命，搭乘联盟号T-13寻找“礼炮7号”的踪迹，当经历宇宙空间对接、太空舱寒流、空间站失火、太阳能充电系统失灵等一系列危机准备返航之时，却被告知空间站即将被击落，一场更大的太空灾难正在袭来......\r\n位于外太空的“礼炮7号”空间站意外与地球失去联系，工程师维克托·阿约金和退役宇航员弗拉基米尔·费奥多罗夫临危受命，搭乘联盟号T-13寻找“礼炮7号”的踪迹，当经历宇宙空间对接、太空舱寒流、空间站失火、太阳能充电系统失灵等一系列危机准备返航之时，却被告知空间站即将被击落，一场更大的太空灾难正在袭来......\r\n');
INSERT INTO `title_type` VALUES ('9', '迷镇凶案', 'https://img1.doubanio.com/view/photo/s_ratio_poster/public/p2508546069.webp', '', '20世纪50年代僻静的家乡小镇，中年男子加德纳（马特·达蒙 饰）的妻子在家中被杀害。由此宁静的生活被打破，引发出一连串勒索、骗保、迷情事件。而对面邻居搬来了一家黑人，又因此打破了整个小镇的宁静。家庭危机和小镇危机交织在了一起……');
INSERT INTO `title_type` VALUES ('10', '芳华', 'https://img3.doubanio.com/view/photo/s_ratio_poster/public/p2507227732.webp', null, '根据严歌苓同名小说改编，讲述了上世纪七十到八十年代充满理想和激情的军队文工团，一群正值芳华的青春少年，经历着成长中的爱情萌发与充斥变数的人生命运。乐于助人、质朴善良的刘峰（黄轩 饰），和从农村来，屡遭文工团女兵歧视与排斥的何小萍（苗苗 饰），“意外”离开了浪漫安逸的文工团，卷入了残酷的战争，在战场上继续绽放着血染的芳华。他们感受着集体生活的痛与暖、故人的分别与重逢，还有时代变革之下，每个人的渺小脆弱和无力招架。而昔日的文工团战友萧穗子（钟楚曦 饰）、林丁丁（杨采钰 饰）、郝淑雯（李晓峰 饰）、陈灿（王天辰 饰）等人，在大时代的背景之下，每个人的命运大相径庭，拥有着出人意料的人生归宿……从来不需要想起，永远也不会忘记。');
INSERT INTO `title_type` VALUES ('11', '星球大战8', 'https://img1.doubanio.com/view/photo/s_ratio_poster/public/p2506694509.webp', null, '《星球大战：最后的绝地武士》承接前作《星球大战：原力觉醒》的剧情，讲述第一军团全面侵袭之下，蕾伊（黛西·雷德利 Daisy Ridley 饰）、芬恩（约翰·博耶加 John Boyega 饰）、波·达默龙（奥斯卡·伊萨克 Oscar Isaac 饰）三位年轻主角各自的抉 择和冒险故事。前作中觉醒强大原力的蕾伊独自寻访隐居的绝地大师卢克·天行者（马克·哈米尔 Mark Hamill 饰），在后者的指导下接受原力训练。芬恩接受了一项几乎不可能完成的任务，为此他不得不勇闯敌营，面对自己的过去');
INSERT INTO `title_type` VALUES ('12', '寻梦环游记', 'https://img1.doubanio.com/view/photo/s_ratio_poster/public/p2503997609.webp', null, '热爱音乐的米格尔（安东尼·冈萨雷兹 Anthony Gonzalez 配音）不幸地出生在一个视音乐为洪水猛兽的大家庭之中，一家人只盼着米格尔快快长大，好继承家里传承了数代的制鞋产业。一年一度的亡灵节即将来临，每逢这一天，去世的亲人们的魂魄便可凭借着摆在祭坛上的照片返回现世和生者团圆。 ');
INSERT INTO `title_type` VALUES ('13', '二代妖精之今生有幸', 'https://img1.doubanio.com/view/photo/s_ratio_poster/public/p2507022339.webp', null, '身负巨债的动物饲养员袁帅（冯绍峰 饰），为了还清百万巨债，他四处与富家女相亲，却误打误撞爱上来人间报恩的狐妖白纤楚（刘亦菲 饰）。妖怪管理局局长云中鹤为阻止人妖相恋，派魔都小分队洪思聪队长捉拿违规狐妖白纤楚，袁帅为了寻回爱人狐妖，勇闯妖界……');
INSERT INTO `title_type` VALUES ('14', '妖猫传', 'https://img1.doubanio.com/view/photo/s_ratio_poster/public/p2507024497.webp', null, '电影《妖猫传》讲述了盛唐时期一段奇幻的凄美史诗。癫狂诗人白乐天与仰慕大唐风采的僧人空海相遇长安，却意外触发了横跨三十年、有关王朝兴衰的惊天之秘，随着各色人物一一登场、大唐繁盛绚烂与时代隐痛一一揭开，一个被历史纷乱掩盖的真相也将浮出水面。');
INSERT INTO `title_type` VALUES ('15', '大世界', 'https://img3.doubanio.com/view/photo/s_ratio_poster/public/p2508258043.webp', null, '　南方小城，大雨将至。工地司机小张为了挽救和女友的爱情，抢劫了老板的巨款，引发连锁反应。几股势力纷纷对小张展开追逐。原本没有关系的他们，命运产生了交集。在一番阴差阳错、啼笑皆非的交手之后，他们迎来了意想不到的结局，命运和他们开了一个大大的玩笑。历时三年，导演刘健一人身兼多职，用独特的画风描绘了在一个发生在一天之内的黑色幽默故事，呈现出一幅独特的时代风景画和社会众生相。');
INSERT INTO `title_type` VALUES ('16', '妖铃铃', 'https://img3.doubanio.com/view/photo/s_ratio_poster/public/p2506825662.webp', null, '无良地产商父子徐大富（沈腾 饰）和徐天宇（岳云鹏 饰）一心想争夺豪华CBD中一幢破旧居民楼“萌贵坊”的产权，但萌贵坊内仍存四户怪咖不愿搬出—神医王保健（张译 饰）和他的儿子鸡丁（李亦航 饰）、民间发明家夫妇李菊花(papi 饰)和金三(潘斌龙 饰)、网红主播阿萍(焦俊艳 饰)、以及过气古惑仔阿仁(方中信 饰)和阿明(吴镇宇饰)。 \r\n　　某个月黑风高的夜晚，怪事接连发生，僵尸，丧尸，吸血男爵，红衣女鬼接踵而至，陷入恐慌的“留守怪咖”请来江湖上人称“万能大师”的铃姐（吴君如 饰）帮他们化解危难，没想到铃姐却带来了更大的麻烦……');
INSERT INTO `title_type` VALUES ('17', '我的影子在奔跑', 'https://img3.doubanio.com/view/photo/s_ratio_poster/public/p2508256074.webp', null, '患有艾斯伯格综合征（一种较轻的自闭症）的11个的月修直（龙品旭 饰）第一个记忆是听见田桂芳（张静初 饰）叫“修直”，然后笑了。修直第一次思想——他真是修直还是长得像修直？ \r\n　　田桂芳她阻止了很多事发生。诸如修直没有失踪、厨房胖嫂没被开水烫伤、莫菲（丽娜 饰）的裙子没有烧着……但门防大爷的伞还是散架了、园长的眼镜碎了……修直这样度过了幼儿园。 ');
INSERT INTO `title_type` VALUES ('18', '芒刺 ', 'https://img3.doubanio.com/view/photo/s_ratio_poster/public/p2507375026.webp', null, '潘仲明上班前突然接到一条女儿被绑架的微信小视频，女儿情况十分危急。救女心切的潘氏夫妇决定甩开警察私下和绑匪交易，未料出现种种意外。此时妻子埋藏多年不为人知的秘密也随之而浮出水面，使局面更加扑所迷离。事情究竟缘何而起？绑匪到底为何人？女儿能否平安归来？惊天阴谋正在上演……\r\n芒刺的影人 · · · · · · ( 全部 7 )');
INSERT INTO `title_type` VALUES ('19', '机器之血', 'https://img1.doubanio.com/view/photo/s_ratio_poster/public/p2505785547.webp', null, '2007年，Dr.James在半岛军火商的支持下研究生化人。研究过程中，生化人安德烈发生基因突变大开杀戒，将半岛军火商杀害，并控制其组织，接管生化人的研究。Dr.James侥幸逃生，只好寻求警方的保护。特工林东（成龙 饰）不得以离开生命垂危的小女儿西西，接受证人保护任务... ');
INSERT INTO `title_type` VALUES ('20', '小猫巴克里', 'https://img3.doubanio.com/view/photo/s_ratio_poster/public/p2508948724.webp', null, '　鱼都误入了一座动物城市，除了认识了小猫巴克里与其他动物伙伴，也发现这座城市竟是被一个假装拥有无边法力的人类所控制。在大师炫目奇幻的戏法之下动物们崇拜不已。鱼都与巴克里必须揭开大师的骗局并找到回家的路。 \r\n　　《小猫巴克里》是台湾动画家邱立伟创作的虚构人物及以其为主角的绘本、电视动画、动画电影等一系列作品。绘本创作于邱立伟就读大学时期，电视动画于2010年12月5日在公视HiHD首播并获得2011年金钟奖动画节目奖。 ');
INSERT INTO `title_type` VALUES ('21', '惊魂七夜', 'https://img3.doubanio.com/view/photo/s_ratio_poster/public/p2508243232.webp', null, null);
INSERT INTO `title_type` VALUES ('22', '咕噜咕噜美人鱼2', 'https://img3.doubanio.com/view/photo/s_ratio_poster/public/p2508071436.webp', null, '故事描述了勇敢善良的美人鱼咕噜，经历一系列冒险以后，帮助小侠鱼回归家园的故事。  ');
INSERT INTO `title_type` VALUES ('23', '寻梦环游记', 'https://img1.doubanio.com/view/photo/s_ratio_poster/public/p2503997609.webp', null, '热爱音乐的米格尔（安东尼·冈萨雷兹 Anthony Gonzalez 配音）不幸地出生在一个视音乐为洪水猛兽的大家庭之中，一家人只盼着米格尔快快长大，好继承家里传承了数代的制鞋产业。一年一度的亡灵节即将来临，每逢这一天，去世的亲人们的魂魄便可凭借着摆在祭坛上的照片返回现世和生者团圆。 ');
INSERT INTO `title_type` VALUES ('24', '天才枪手 ', 'https://img3.doubanio.com/view/photo/s_ratio_poster/public/p2501863104.webp', null, '　影片根据2014年轰动一时的亚洲考场作弊案改编，讲述了天才学霸利用高智商考场作弊牟取暴利的故事。出生平凡的天才少女Lynn（茱蒂蒙·琼查容苏因 饰）在进入贵族学校后，结识了富二代同学Grace（依莎亚·贺苏汪饰）与Pat（披纳若·苏潘平佑饰），从此开始了考场作弊生涯，与此同时，另一名记忆力极佳的天才学霸Bank（查侬·散顶腾古 饰）发现了Lynn不为人知的“交易”。经过多场险象环生的“作弊战争”后，Lynn接下最后一单在国际考场上为富家子弟作弊的天价委托。一场横跨两大洲的完美作弊方案横空出世，然而一切并不像他们想的那么简单……');
INSERT INTO `title_type` VALUES ('25', '摔跤吧！爸爸', 'https://img3.doubanio.com/view/photo/s_ratio_poster/public/p2457983084.webp', null, '　马哈维亚（阿米尔·汗 Aamir Khan 饰）曾经是一名前途无量的摔跤运动员，在放弃了职业生涯后，他最大的遗憾就是没有能够替国家赢得金牌。马哈维亚将这份希望寄托在了尚未出生的儿子身上，哪知道妻子接连给他生了两个女儿，取名吉塔（法缇玛·萨那·纱卡 Fatima Sana Shaikh 饰）和巴比塔（桑亚·玛荷塔 Sanya Malhotra 饰）。让马哈维亚没有想到的是，两个姑娘展现出了杰出的摔跤天赋，让他幡然醒悟，就算是女孩，也能够昂首挺胸的站在比赛场上，为了国家和她们自己赢得荣誉。 ');
INSERT INTO `title_type` VALUES ('26', '请以你的名字呼唤我 ', 'https://img3.doubanio.com/view/photo/s_ratio_poster/public/p2505525050.webp', null, '根据安德烈·艾席蒙同名小说改编的《请以你的名字呼唤我》，发生在80年代意大利的里维埃拉。突如其来的爱彷佛林中奔出的兽，攫住17岁少年Elio的身与心。他爱上的人大他7岁，是一位来意大利游历的美国大学生。 两人对彼此的着迷、犹疑、试探，让情欲在流动中迸发，成就了一段仅仅 为时六周的初恋。它给男孩留下一生的印记，因为他们在闷热仲夏夜里发现的，是此生再也无法寻找到的东西：完整的、彻底的亲密。\r\n请以你的名字呼唤我的影人 · · · · · · ( 全部 19 )');
INSERT INTO `title_type` VALUES ('27', '你的名字。君の名は', 'https://img1.doubanio.com/view/photo/s_ratio_poster/public/p2395733377.webp', null, '在远离大都会的小山村，住着巫女世家出身的高中女孩宫水三叶（上白石萌音 配音）。校园和家庭的原因本就让她充满烦恼，而近一段时间发生的奇怪事件，又让三叶摸不清头脑。不知从何时起，三叶在梦中就会变成一个住在东京的高中男孩。那里有陌生的同学和朋友，有亲切的前辈和繁华的街道，一切都是如此诱人而真实。另一方面，住在东京的高中男孩立花泷（神木隆之介 配音）则总在梦里来到陌生的小山村，以女孩子的身份过着全新的生活。许是受那颗神秘彗星的影响，立花和三叶在梦中交换了身份。他们以他者的角度体验着对方的人生，这期间有愤怒、有欢笑也有暖心。只是两人并不知道，身份交换的背后隐藏着重大而锥心的秘密…… ');
INSERT INTO `title_type` VALUES ('28', '霸王别姬', 'https://img3.doubanio.com/view/photo/s_ratio_poster/public/p1910813120.webp', null, '段小楼（张丰毅）与程蝶衣（张国荣）是一对打小一起长大的师兄弟，两人一个演生，一个饰旦，一向配合天衣无缝，尤其一出《霸王别姬》，更是誉满京城，为此，两人约定合演一辈子《霸王别姬》。但两人对戏剧与人生关系的理解有本质不同，段小楼深知戏非人生，程蝶衣则是人戏不分。 ');
INSERT INTO `title_type` VALUES ('29', '阿甘正传', 'https://img1.doubanio.com/view/photo/s_ratio_poster/public/p510876377.webp', null, '阿甘（汤姆·汉克斯 饰）于二战结束后不久出生在美国南方阿拉巴马州一个闭塞的小镇，他先天弱智，智商只有75，然而他的妈妈是一个性格坚强的女性，她常常鼓励阿甘“傻人有傻福”，要他自强不息。 \r\n　　阿甘像普通孩子一样上学，并且认识了一生的朋友和至爱珍妮（罗宾·莱特·潘 饰），在珍妮和妈妈的爱护下，阿甘凭着上帝赐予的“飞毛腿”开始了一生不停的奔跑。 ');
INSERT INTO `title_type` VALUES ('30', '千与千寻 ', 'https://img3.doubanio.com/view/photo/s_ratio_poster/public/p1910830216.webp', null, '千寻和爸爸妈妈一同驱车前往新家，在郊外的小路上不慎进入了神秘的隧道——他们去到了另外一个诡异世界—一个中世纪的小镇。远处飘来食物的香味，爸爸妈妈大快朵颐，孰料之后变成了猪！这时小镇上渐渐来了许多样子古怪、半透明的人。 \r\n　　千寻仓皇逃出，一个叫小白的人救了他，喂了她阻止身体消 失的药，并且告诉她怎样去找锅炉爷爷以及汤婆婆，而且必须获得一分工作才能不被魔法变成别的东西。 ');
INSERT INTO `title_type` VALUES ('31', '泰坦尼克号', 'https://img3.doubanio.com/view/photo/s_ratio_poster/public/p457760035.webp', null, '　1912年4月10日，号称 “世界工业史上的奇迹”的豪华客轮泰坦尼克号开始了自己的处女航，从英国的南安普顿出发驶往美国纽约。富家少女罗丝（凯特•温丝莱特）与母亲及未婚夫卡尔坐上了头等舱；另一边，放荡不羁的少年画家杰克（莱昂纳多·迪卡普里奥）也在码头的一场赌博中赢得了下等舱的船票。 ');
INSERT INTO `title_type` VALUES ('32', '爱乐之城', 'https://img3.doubanio.com/view/photo/s_ratio_poster/public/p2425658570.webp', null, '　米娅（艾玛·斯通 Emma Stone 饰）渴望成为一名演员，但至今她仍旧只是片场咖啡厅里的一名平凡的咖啡师，尽管不停的参加着大大小小的试镜，但米娅收获的只有失败。某日，在一场派对之中，米娅邂逅了名为塞巴斯汀（瑞恩·高斯林 Ryan Gosling 饰）的男子，起初两人之间产生了小小的矛盾，但很快，米娅便被塞巴斯汀身上闪耀的才华以及他对爵士乐的纯粹追求所吸引，最终两人走到了一起。 ');
INSERT INTO `title_type` VALUES ('33', '三傻大闹宝莱坞 3', 'https://img3.doubanio.com/view/photo/s_ratio_poster/public/p579729551.webp', null, null);
INSERT INTO `title_type` VALUES ('34', '盗梦空间', 'https://img3.doubanio.com/view/photo/s_ratio_poster/public/p513344864.webp', null, '道姆·柯布（莱昂纳多·迪卡普里奥 Leonardo DiCaprio 饰）与同事阿瑟（约瑟夫·戈登-莱维特 Joseph Gordon-Levitt 饰）和纳什（卢卡斯·哈斯 Lukas Haas 饰）在一次针对日本能源大亨齐藤（渡边谦 饰）的盗梦行动中失败，反被齐藤利用。齐藤威逼利诱因遭通缉而流亡海外的柯布帮他拆分他竞争对手的公司，采取极端措施在其唯一继承人罗伯特·费希尔（希里安·墨菲 Cillian Murphy 饰）的深层潜意识中种下放弃家族公司、自立门户的想法。为了重返美国，柯布偷偷求助于岳父迈尔斯（迈克尔·凯恩 Michael Caine 饰），吸收了年轻的梦境设计师艾里阿德妮（艾伦·佩吉 Ellen Page 饰）、梦境演员艾姆斯（汤姆·哈迪 Tom Hardy 饰）和药剂师约瑟夫（迪利普·劳 Dileep Rao 饰）加入行动。在一层层..');
INSERT INTO `title_type` VALUES ('35', '怦然心动', 'https://img3.doubanio.com/view/photo/s_ratio_poster/public/p663036666.webp', null, null);
INSERT INTO `title_type` VALUES ('36', '星际穿越 ', 'https://img3.doubanio.com/view/photo/s_ratio_poster/public/p2206088801.webp', null, '近未来的地球黄沙遍野，小麦、秋葵等基础农作物相继因枯萎病灭绝，人类不再像从前那样仰望星空，放纵想象力和灵感的迸发，而是每日在沙尘暴的肆虐下倒数着所剩不多的光景。在家务农的前NASA宇航员库珀（马修·麦康纳 Matthew McConaughey 饰）接连在女儿墨菲（麦肯吉·弗依 Mackenzie Foy 饰）的书房发现奇怪的重力场现象，随即得知在某个未知区域内前NASA成员仍秘密进行一个拯救人类的计划。多年以前土星附近出现神秘虫洞，NASA借机将数名宇航员派遣到遥远的星系寻找适合居住的星球。在布兰德教授（迈克尔·凯恩 Michael Caine 饰）的劝说下，库珀忍痛告别了女儿，和其他三名专家教授女儿艾米莉亚·布兰德（安妮·海瑟薇 Anne Hathaway 饰）、罗米利（大卫·吉雅西 David Gyasi 饰）、多伊尔（韦斯·本特利 Wes B...');
INSERT INTO `title_type` VALUES ('37', '伯德小姐 ', 'https://img3.doubanio.com/view/photo/s_ratio_poster/public/p2505925363.webp', null, '影片讲述生活在加州北部城市，萨克拉门托的女孩Christine高三时亲情，友情与爱情的故事。Christine为自己取名伯德小姐，一心想要离开加州去往东部读书。然而本不宽裕的家庭又逢父亲失业，更是雪上加霜。伯德小姐继承了母亲的强硬性格，和母亲在生活的各方面发生冲突，但两 人在内心深处却又紧密相连。升入高三的伯德小姐在参演学校音乐剧时对剧组的男主演暗生情愫……');
INSERT INTO `title_type` VALUES ('38', '大话西游之大圣娶亲', 'https://img3.doubanio.com/view/photo/s_ratio_poster/public/p2455050536.webp', null, '　至尊宝（周星驰 饰）被月光宝盒带回到五百年前，遇见紫霞仙子（朱茵 饰），被对方打上烙印成为对方的人，并发觉自己已变成孙悟空。 \r\n　　紫霞与青霞（朱茵 饰）本是如来佛祖座前日月神灯的灯芯（白天是紫霞，晚上是青霞），二人虽然同一肉身却仇恨颇深，因此紫霞立下誓言，谁能拔出她手中的紫青宝剑，谁就是她的意中人。紫青宝剑被至尊宝于不经意间拔出，紫霞决定以身相许，却遭一心记挂白晶晶（莫文蔚 饰）的至尊宝拒绝。后牛魔王救下迷失在沙漠中的紫霞，并逼紫霞与他成婚，关键时刻，至尊宝现身。');
INSERT INTO `title_type` VALUES ('39', '至爱梵高·星空之谜', 'https://img1.doubanio.com/view/photo/s_ratio_poster/public/p2506935748.webp', null, '影片用一封无法投递的信件串联起梵高在去世前最后六周里与他生命中最重要的三个人物之间的秘密，带观众穿越回十九世纪末的欧洲，并陪伴梵高走完他最后的人生。影片采用梵高原画作品中的人物原型还原梵高的艺术人生，让观众在享受美得令人窒息的视觉盛宴时，抽丝剥茧地发现隐藏了一个半世纪的秘密。');
INSERT INTO `title_type` VALUES ('40', '忠犬八公的故事', 'https://img3.doubanio.com/view/photo/s_ratio_poster/public/p524964016.webp', null, '八公（Forest 饰）是一条谜一样的犬，因为没有人知道它从哪里来。教授帕克（理查·基尔 Richard Gere 饰）在小镇的火车站拣到一只走失的小狗，冥冥中似乎注定小狗和帕克教授有着某种缘分，帕克一抱起这只小狗就再也放不下来，最终，帕克对小狗八公的疼爱感化了起初极力反对养狗的妻子卡特（琼·艾伦 Joan Allen 饰）。八公在帕克的呵护下慢慢长大，帕克上班时八公会一直把他送到车站，下班时八公也会早早便爬在车站等候，八公的忠诚让小镇的人家对它更加疼爱。有一天，八公在帕克要上班时表现异常，居然玩起了以往从来不会的捡球游戏，八公的表现让帕克非常满意，可是就是在那天，帕克因病去世。帕克的妻子、女儿安迪（萨拉·罗默尔 Sarah Roemer 饰）及女婿迈克尔（罗比·萨布莱特 Robbie Sublett 饰）怀着无比沉痛的心情埋葬了帕克，可是不明就里的...');
INSERT INTO `title_type` VALUES ('41', '楚门的世界', 'https://img3.doubanio.com/view/photo/s_ratio_poster/public/p479682972.webp', null, '楚门（金•凯瑞 Jim Carrey 饰）是一个平凡得不能再平凡的人，除了一些有些稀奇的经历之外——初恋女友突然失踪、溺水身亡的父亲忽然似乎又出现在眼前，他和绝大多数30多岁的美国男人绝无异样。这令他倍感失落。他也曾试过离开自己生活了多年的地方，但总因种种理由而不能成行。 ');
INSERT INTO `title_type` VALUES ('42', '嘉年华', 'https://img1.doubanio.com/view/photo/s_ratio_poster/public/p2503644828.webp', null, '深夜，小学生小文（周美君 饰）和同学被一个中年男人带至酒店，这一切被在酒店打黑工的未成年少女小米（文淇 饰）拍下。事件逐渐演化成一个全城议论的性侵女童案，权力在握的犯罪嫌疑人浮出水面，受害者家中也风暴渐起。 ');

-- ----------------------------
-- Table structure for type
-- ----------------------------
DROP TABLE IF EXISTS `type`;
CREATE TABLE `type` (
  `id` int(4) NOT NULL,
  `name` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of type
-- ----------------------------
INSERT INTO `type` VALUES ('1', '喜剧');
INSERT INTO `type` VALUES ('2', '惊悚剧');
INSERT INTO `type` VALUES ('3', '古代');
INSERT INTO `type` VALUES ('4', '动作');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `openid` text,
  `name` varchar(20) DEFAULT NULL,
  `url` text,
  `stress` varchar(10) DEFAULT NULL,
  `sex` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'oE_650aPbL2i42GHbtufEVNxFgKg', '流年', 'http://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTIKHmCmvs59cYjSf2YOaj19FUXUyNMaQEOLDytFHpcu8cetmibuRXEJTBVU9E4hEc4TTibOgOQABHpg/132', '河北沧州', '1');
INSERT INTO `user` VALUES ('2', 'oE_650dQbVDHL3ZxtZdoIdn40LCM', '胡小乐', 'http://wx.qlogo.cn/mmopen/vi_32/XyW2GWxlmUV9IvKaZPm1I7ZIAIdricBnMjHK3EMWZWesUpYVAKrnxNmrTvOYQVSoRJXap9r5y9p93T5d5jv3sKA/132', '河北沧州', '1');
INSERT INTO `user` VALUES ('3', 'oE_650Xz3t6nhtvY646747ZbivTE', '你有毒 の 我有瘾', 'http://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTIrZg3zI65LU9FkzHjkx6cB1fd3tiau0nHrS0qpiaetVTUCu8THsULnqMgqTGGibFwW9BVGKWMY1OtKg/132', '吉林长春', '1');
INSERT INTO `user` VALUES ('4', 'oE_650XNN8BOkJ3vw-9-LKnV9U5E', 'family', 'http://wx.qlogo.cn/mmopen/vi_32/1B5KkQLh0BRKcWLsUf9UoxPsGK3J9xQvXj5eMXT6Bj2IJy4kvWAibxBqvu0tZnvVgFsUhd7Bkrvl9kRZvqlhiaUA/132', '', '2');
INSERT INTO `user` VALUES ('5', 'oE_650V32sP4jnNG7tnxGLZwhx70', '哦', 'http://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTK3fB0vsm5AqL3OlwWmbBticPMjTXVLfPBibjDy8AGNKViaAAibkV2SGRqweAt6j9jdsNkXvLGUlxjHTQ/132', '维多利亚墨尔本', '2');
INSERT INTO `user` VALUES ('6', 'oE_650aCsoq0UqlanGu_c-_cHUhk', 'Mr.康先森', 'http://wx.qlogo.cn/mmopen/vi_32/ibxY8SN6ASl5ic4hUxZko72E928zCicXGo7GAIibcQjWQuVubc1SRiazyrlqxm3AwO8G8XdIrYcZEukwZU3Gc3LXBag/132', '河北邯郸', '1');
INSERT INTO `user` VALUES ('7', 'oE_650QSAa-TA2EU6upsZDZJi3eU', '承諾，像蒲公英一样', 'http://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTLeeG0p2hN4w4IUibicQpbry2rb6ZRGvgKOArsMfsicnKz8F8pKOQKkPRh7FMLmJqTibfn0jIcqH2NSCA/132', '北京昌平', '2');
INSERT INTO `user` VALUES ('8', 'oE_650QPq9NG4jO_6We_4wbgWzwI', 'A       ', 'http://wx.qlogo.cn/mmopen/vi_32/PiajxSqBRaEI610sH6ZF8z2ic9pzFxZ2uU7fkicDRIR6OxAGviaiaLrlZPVCG5KLib6Yn2e9VnoqgGQ3F3CXlzicGIUtA/132', '河北保定', '2');

-- ----------------------------
-- Table structure for wx_config
-- ----------------------------
DROP TABLE IF EXISTS `wx_config`;
CREATE TABLE `wx_config` (
  `wx_token` text,
  `wx_expires` int(5) DEFAULT NULL,
  `wx_time` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wx_config
-- ----------------------------
INSERT INTO `wx_config` VALUES ('6_rDiQCpemnKDEA7XSZblSlZNaxwS4Crx5olWRlLKb7qoub9kdoevYequzQWLPFk5ee2OpOZvFClY1IMe6gqWq0KJfdu2AOECSICnut6ZqTWYVMOZZOBScOQmCTqFC86bm5NS7B8q6SHjS9CA2VMYgADANEQ', '7200', '1516263357');
