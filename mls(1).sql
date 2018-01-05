-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 08 月 04 日 10:51
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `mls`
--
CREATE DATABASE IF NOT EXISTS `mls` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mls`;

-- --------------------------------------------------------

--
-- 表的结构 `mls_admin`
--

CREATE TABLE IF NOT EXISTS `mls_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `power` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- 转存表中的数据 `mls_admin`
--

INSERT INTO `mls_admin` (`id`, `username`, `password`, `power`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0),
(14, 'pipipi', 'e10adc3949ba59abbe56e057f20f883e', 0),
(16, 'xxxxx', 'e10adc3949ba59abbe56e057f20f883e', 1),
(17, 'jdoiow', 'e10adc3949ba59abbe56e057f20f883e', 1),
(18, 'nishihsui', 'e10adc3949ba59abbe56e057f20f883e', 1),
(19, 'qkjshkj', 'e10adc3949ba59abbe56e057f20f883e', 1);

-- --------------------------------------------------------

--
-- 表的结构 `mls_ad_pic`
--

CREATE TABLE IF NOT EXISTS `mls_ad_pic` (
  `s_id` int(11) NOT NULL,
  `pic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `mls_banners_pic`
--

CREATE TABLE IF NOT EXISTS `mls_banners_pic` (
  `s_id` int(11) NOT NULL,
  `pic` varchar(50) NOT NULL,
  `state` enum('0','1') DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `mls_banners_pic`
--

INSERT INTO `mls_banners_pic` (`s_id`, `pic`, `state`) VALUES
(1, '/Uploads/2015-08-03/55be49e8a037a.png', '1'),
(4, '/Uploads/2015-08-03/55bf5cd79a15e.jpg', '1');

-- --------------------------------------------------------

--
-- 表的结构 `mls_chat_message`
--

CREATE TABLE IF NOT EXISTS `mls_chat_message` (
  `id` char(25) NOT NULL,
  `u_id` int(11) unsigned NOT NULL,
  `g_id` int(11) unsigned DEFAULT NULL,
  `message` text NOT NULL,
  `time` int(11) unsigned NOT NULL,
  `state` enum('0','1') DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `mls_chat_message`
--

INSERT INTO `mls_chat_message` (`id`, `u_id`, `g_id`, `message`, `time`, `state`) VALUES
('5-5', 5, NULL, '你好', 1438529133, '1'),
('5-9', 9, NULL, '你好', 1438529177, '0'),
('5-9', 9, NULL, '你好', 1438529186, '1'),
('5-9', 5, NULL, '好66666&lt;br&gt;', 1438529202, '1'),
('5-9', 9, NULL, 'ds', 1438529258, '1'),
('5-9', 5, NULL, '三十万元 &lt;br&gt;', 1438529222, '1'),
('5-9', 5, NULL, '', 1438529230, '1'),
('5-9', 9, NULL, '挖槽 &amp;nbsp;太贵了', 1438529278, '1'),
('5-9', 5, NULL, '圭 地地地地&lt;br&gt;', 1438529243, '1'),
('5-9', 5, NULL, '9', 1438529258, '1'),
('5-9', 5, NULL, 'yyy', 1438529264, '1'),
('5-9', 9, NULL, 'd', 1438529325, '1'),
('5-9', 5, NULL, 'r', 1438529284, '1'),
('5-9', 5, NULL, 'ss &lt;br&gt;', 1438529336, '1'),
('5-9', 5, NULL, 'sss', 1438529344, '1'),
('5-9', 9, NULL, 'ff', 1438529393, '1'),
('5-9', 9, NULL, 'a', 1438529417, '1'),
('1-7', 7, NULL, '你好', 1438608008, '1'),
('1-7', 7, NULL, '你好', 1438608015, '1'),
('1-7', 1, NULL, 'kk&lt;br&gt;&lt;br&gt;', 1438608074, '1'),
('1-7', 7, NULL, 'dsf', 1438608078, '1'),
('1-7', 1, NULL, '&lt;br&gt;oo&lt;br&gt;&lt;br&gt;', 1438608091, '1'),
('11-7', 7, NULL, '你好', 1438608422, '1'),
('11-7', 7, NULL, 'e', 1438608451, '1'),
('11-7', 11, NULL, 'a', 1438608460, '1'),
('1-9', 9, NULL, '你好', 1438608602, '1'),
('1-7', 7, NULL, 'aaa', 1438608927, '1'),
('1-7', 1, NULL, 'cc', 1438608958, '1'),
('1-7', 7, NULL, 'pp', 1438608964, '1'),
('1-9', 1, NULL, 'uu', 1438608972, '1'),
('11-7', 11, NULL, 'oo', 1438608988, '1'),
('11-7', 7, NULL, 'oo', 1438608998, '1'),
('5-7', 7, NULL, '你好', 1438650848, '1'),
('13-9', 9, NULL, '你好', 1438661622, '1'),
('13-9', 9, NULL, 'nia', 1438661643, '1'),
('13-9', 13, NULL, '0000', 1438661655, '1'),
('13-9', 9, NULL, 'pp', 1438661662, '1'),
('1-1', 1, NULL, '你好', 1438665545, '1'),
('1-1', 1, NULL, '你好&lt;br&gt;&lt;br&gt;', 1438665552, '1'),
('1-9', 9, NULL, '你好', 1438668082, '1'),
('1-9', 1, NULL, 'ppp', 1438668092, '1'),
('1-9', 9, NULL, 'oooo', 1438668110, '1'),
('1-9', 1, NULL, 'pp', 1438668117, '1');

-- --------------------------------------------------------

--
-- 表的结构 `mls_goods`
--

CREATE TABLE IF NOT EXISTS `mls_goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `s_id` int(11) NOT NULL,
  `t_id` int(11) DEFAULT NULL,
  `p_id` int(11) DEFAULT NULL,
  `name` varchar(45) NOT NULL,
  `price` double(8,2) NOT NULL,
  `summary` text,
  `addtime` int(11) NOT NULL,
  `state` enum('0','1') NOT NULL DEFAULT '1',
  `stock` int(11) NOT NULL DEFAULT '0',
  `discount` tinyint(4) DEFAULT '100',
  `buy_num` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=114 ;

--
-- 转存表中的数据 `mls_goods`
--

INSERT INTO `mls_goods` (`id`, `s_id`, `t_id`, `p_id`, `name`, `price`, `summary`, `addtime`, `state`, `stock`, `discount`, `buy_num`) VALUES
(56, 2, 3, 31, '新款短袖破洞宽松印花T恤', 2015.00, '2015夏季韩版学生短袖破洞宽松印花体恤', 1438610388, '1', 43, 100, 0),
(57, 2, 3, 31, '韩版秋季蝙蝠衫卫衣两件套', 98.00, '2015韩版秋季宽松显瘦蝙蝠袖卫衣两件套纯棉打底衫+外套', 1438517101, '1', 324, 90, 0),
(58, 2, 3, 31, '秋季新款牛仔衣半身裙套装', 99.00, '', 1438517169, '1', 345, 90, 0),
(59, 2, 3, 31, '休闲复古短款上衣短外套', 59.50, '显瘦短外套', 1438517382, '1', 324, 90, 0),
(60, 1, 3, 42, '秋季新款挂脖针织打底背心', 313.00, '【Donuts北北】2015秋冬新款韩版百搭针织打底衫', 1438517402, '1', 343, 90, 0),
(61, 2, 3, 31, '夏新款时尚背心裙裤套装', 50.00, '', 1438517478, '1', 4320, 100, 0),
(62, 2, 3, 31, '黑色挂脖V领露肩连衣裙', 138.00, '埃菲尔铁塔挂脖V领露肩连衣裙', 1438517708, '1', 3244, 100, 0),
(63, 1, 3, 42, '韩版基本款纯色短袖T恤', 160.00, '时尚基础必备糖果色纯色T恤百搭款式', 1438517739, '1', 322, 90, 0),
(64, 1, 3, 42, '初秋新韩范中长款条纹T恤', 265.00, '杭州正版！2015新款韩版横条纹中长款圆领五分袖显瘦T恤', 1438517882, '1', 112, 90, 0),
(65, 1, 3, 42, '韩版夏装纯色无袖背心', 130.00, '穿出ME范 2015新款女装夏季纯色宽松显瘦清新百搭背心', 1438517978, '1', 221, 90, 0),
(66, 1, 3, 42, '韩版可爱卡通猫咪头T恤衫', 188.00, '韩流 春夏时尚气质欧美卡通猫咪头纯棉修身短袖T恤衫上衣打底衫', 1438518131, '1', 223, 90, 0),
(67, 1, 3, 42, '独家定制小公主蕾丝上衣', 480.00, '独家定制装纯必备一秒变小公主镂空水溶上衣双色', 1438518267, '1', 343, 80, 0),
(68, 1, 3, 42, '新款韩版修身雪纺衬衫', 51.00, '2015新款韩版修身雪纺衬衫 气质休闲清新百搭', 1438518364, '1', 100, 100, 0),
(69, 1, 35, 43, '早春新款松紧腰九分牛仔裤', 200.00, '2015春装休闲牛仔裤 潮流个性九分松紧腰牛仔裤', 1438518543, '1', 112, 90, 0),
(70, 2, 3, 31, '海军领宽松雪纺连衣裙', 89.00, '新品2015韩版学院风水手服海军领宽松雪纺连衣裙', 1438518837, '1', 435, 80, 0),
(71, 2, 3, 31, '秋季新品红色连帽收腰风衣', 45.00, '2015 纯色中长款显瘦收腰红外套 百搭韩版气质风衣', 1438518983, '1', 432, 100, 0),
(73, 2, 3, 31, '剪纸网肩纯白流苏连衣裙', 98.00, '剪纸网肩纯白层层摇摆流苏连衣裙', 1438519141, '1', 234, 100, 0),
(74, 2, 3, 31, '露肩长款修身显瘦短袖T恤', 39.90, '设计非常独特噢，喜欢的MM赶紧收下吧', 1438519245, '1', 324, 100, 0),
(75, 2, 19, 31, '春夏新品OL职业小西装', 2015.00, '2015春夏新品OL职业小西装工作服', 1438519360, '1', 0, 127, 0),
(76, 2, 3, 31, '韩版条纹针织无袖连衣裙', 89.00, '黛后2015秋装新品韩版修身显瘦针织横竖条纹搭配无袖连衣裙', 1438519480, '1', 234, 100, 0),
(78, 1, 3, 42, '修身气质西装马甲三件套', 296.00, '大牌修身气质西装马甲三件套 背心+短裤+外套套装', 1438519749, '1', 222, 90, 0),
(80, 2, 12, 44, '牛仔布厚底松糕帆布鞋', 49.00, '新店开张 全店低价引流挣信誉 特价全国包邮抢购', 1438519960, '1', 32, 100, 0),
(81, 2, 14, 44, '交叉绑带粗跟尖头单鞋', 108.90, '', 1438520070, '1', 98, 100, 0),
(82, 2, 12, 44, '森女清新系带单鞋', 87.00, '', 1438520178, '1', 234, 100, 0),
(83, 2, 14, 44, '秋季百搭高跟鞋粗跟单鞋', 108.00, '', 1438520266, '1', 8213, 100, 0),
(84, 2, 14, 44, '韩版复古光面粗跟单鞋', 98.00, '2015新款韩版尖头英伦复古粗跟中跟简约单鞋女鞋潮', 1438520701, '1', 324, 100, 0),
(85, 2, 12, 44, '日系潮流亮片一脚蹬女单鞋', 179.00, '女人花】高级定制，2015秋季新款厚底松糕女鞋，时尚系列', 1438520790, '1', 34, 100, 0),
(86, 1, 46, 48, '小麦包铺赵薇同款斜挎包', 118.00, '第一时间发货 七天无理由退货 好评返现', 1438520781, '1', 112, 90, 0),
(87, 2, 14, 44, '韩版真皮舒适低帮运动鞋', 150.00, '', 1438520894, '1', 324, 100, 0),
(88, 1, 46, 47, '日系极简PU皮斜挎单肩包', 230.00, '2015夏季新款百搭简单大方包', 1438520892, '1', 200, 90, 0),
(89, 2, 12, 44, '时尚OL尖头粗高跟单鞋', 139.00, '自信源于一双好鞋，质量第一', 1438521007, '1', 234, 100, 0),
(90, 2, 12, 44, '明星款全真皮高帮鞋运动鞋', 150.00, '包邮时尚女鞋 防滑显瘦休闲鞋 侧拉链牛皮舒适小白鞋', 1438521057, '1', 32, 100, 0),
(91, 2, 12, 44, '欧美风真皮秋季尖头马丁靴', 239.10, '【韩时尚女鞋！YUNPEIR真皮】专柜品质高端美鞋', 1438521149, '1', 32, 100, 0),
(92, 4, 49, 50, '李小璐同款V牌瘦脸太阳', 39.00, '李小璐情侣同款太阳镜墨镜时尚V牌箭头明星款男女潮人', 1438667932, '0', 234, 100, 0),
(93, 4, 49, 51, '原宿果冻手环运动电子手表', 27.90, '潮流时尚韩国原宿风果冻女学生运动男手环手镯电子手表', 1438521993, '1', 23, 100, 0),
(94, 4, 50, 53, '925银珍珠项链锁骨链', 49.00, '【艾洛维诗】长生果珍珠项链锁骨链送爱人送闺蜜', 1438522074, '1', 23, 100, 0),
(95, 4, 49, 51, '韩国潮流运动男女手环表', 29.90, '', 1438522240, '1', 324, 100, 0),
(96, 4, 50, 53, '925银小清新莲花项链', 19.90, '', 1438522402, '1', 234, 100, 0),
(97, 4, 49, 51, '大表盘简约刻度防水手表', 118.00, '', 1438522574, '1', 234, 100, 0),
(98, 4, 51, 50, '3D眼镜个性苹果手机壳', 39.70, '这款潮爆了的墨镜手机壳，拿出去很抢眼，超好搭配啊~', 1438522673, '1', 234, 100, 0),
(99, 4, 50, 53, '栀子花开同款风车锁骨链', 29.00, '电影栀子花开张慧雯同款镶钻风车流苏项链闺蜜款配饰送女友', 1438522773, '1', 43, 100, 0),
(101, 4, 50, 53, 'YTK潮品制作人同款项链', 19.90, '制作人中孔孝真佩戴的系列项链哦和戒指手镯手链一个系列的哦', 1438523463, '1', 324, 100, 0),
(102, 4, 50, 53, '花千骨赵丽颖同款锁骨链', 29.00, '花千骨赵丽颖同款银吊坠 情侣款短项链 明星同款配饰饰品', 1438523569, '1', 324, 100, 0),
(103, 4, 50, 53, 'YTK潮品许愿树项链', 33.30, '925纯银小清新许愿树锁骨链', 1438524154, '1', 23, 100, 0),
(104, 4, 50, 53, '新品复古铃铛锁骨链', 15.00, '日本原宿朋克摇滚软妹子铃铛项圈女短款锁骨链项链颈带', 1438524321, '1', 32, 100, 0),
(105, 4, 3, 77, ' 春夏新款前后V领冰丝背心', 230.00, '2015夏装新款韩国代购百搭必备前后V领舒适冰丝背心', 1438660102, '1', 333, 70, 0),
(106, 4, 3, 77, '夏季新款纯色露肩打底衫', 196.00, '【小米啦】2015夏装新款韩版显瘦修身百搭方领露肩t恤', 1438660204, '1', 222, 90, 0),
(107, 4, 3, 77, '【HN】纯色拼接长袖T恤', 70.00, '', 1438660270, '1', 333, 50, 0),
(108, 4, 3, 77, ' 爱心锯齿边上衣+短裙套装', 196.00, '2015初秋新款韩版花边领爱心提花针织衫+半身裙套装', 1438660349, '1', 444, 80, 0),
(109, 4, 3, 77, ' 海军条纹宽松大码短袖T恤', 165.00, '2015夏季新款女装宽松海军条纹时尚百搭修身显瘦短袖T恤上衣', 1438660450, '1', 222, 90, 0),
(110, 4, 3, 77, '甜美刺绣图案T恤短裤套装', 199.00, '韩国代购 甜美刺绣小清新水果图案休闲宽松短裤+T恤套装女夏季', 1438660542, '1', 111, 80, 0),
(111, 4, 3, 77, '甜美修身复古格子吊带背心', 164.00, '扣子美衣 2015夏季新款韩版小清新简约显瘦蝴蝶结背心上衣', 1438660638, '1', 77, 80, 0),
(112, 4, 3, 77, 'dsf', 3.00, 'hjiusshaf', 1438661507, '1', 32, 90, 0),
(113, 4, 32, 77, 'sdfsadf', 32.00, 'zarftrhh', 1438667888, '1', 32, 30, 0);

-- --------------------------------------------------------

--
-- 表的结构 `mls_goods_receipt`
--

CREATE TABLE IF NOT EXISTS `mls_goods_receipt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `address` varchar(60) NOT NULL,
  `street` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `defaults` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=66 ;

--
-- 转存表中的数据 `mls_goods_receipt`
--

INSERT INTO `mls_goods_receipt` (`id`, `u_id`, `address`, `street`, `name`, `phone`, `defaults`) VALUES
(1, 6, '黑龙江省 大庆市 红岗区', '13阿萨德', '爱神的箭', '1111', 0),
(34, 1, '安徽省 淮北市 市辖区', '一本道sdaf', '仓老师', '020-002', 0),
(43, 6, '北京市 市辖区 东城区', ' ', '完颜不破', '13800138000', 0),
(44, 6, '香港特别行政区 香港 香港特别行政区', ' ', '波老师', '008', 1),
(45, 6, '北京市 市辖区 东城区', ' 黄埔大道东', '完颜不破', '13800138000', 0),
(46, 6, '内蒙古自治区 呼和浩特市 回民区', ' 312', '收货人', '138888', 0),
(54, 1, '山西省 太原市 杏花岭区', '12111654', 'wangfei', '11234', 0),
(55, 1, '辽宁省 本溪市 南芬区', '123411111', 'fei', '5543', 0),
(60, 1, '辽宁省 沈阳市 东陵区', '456333333333322655', '第三方1', '2', 0),
(62, 12, '内蒙古自治区 呼和浩特市 市辖区', 'asdf', 'dasf', '21', 1),
(63, 1, '河北省 石家庄市 新华区', '    1234444', 'feiaa11gashjdk', '554311', 0),
(64, 1, '北京市 市辖区 东城区', '123411111444', 'fei1', '5543', 0),
(65, 1, '吉林省 松原市 乾安县', '街道', '11', '1122', 1);

-- --------------------------------------------------------

--
-- 表的结构 `mls_goods_type`
--

CREATE TABLE IF NOT EXISTS `mls_goods_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `p_id` int(11) NOT NULL DEFAULT '0',
  `path` varchar(45) DEFAULT '0,',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=54 ;

--
-- 转存表中的数据 `mls_goods_type`
--

INSERT INTO `mls_goods_type` (`id`, `name`, `p_id`, `path`) VALUES
(1, '衣服', 0, '0,'),
(2, '上衣', 1, '0,1,'),
(3, '夏季美衣', 2, '0,1,2,'),
(4, '背心', 2, '0,1,2,'),
(5, '薄款外套', 2, '0,1,2,'),
(6, 'T恤', 2, '0,1,2,'),
(7, '吊带衫', 2, '0,1,2,'),
(8, '娃娃衫', 2, '0,1,2,'),
(9, '雪纺衬衫', 2, '0,1,2,'),
(10, '鞋子', 0, '0,'),
(11, '夏季新品', 10, '0,10,'),
(12, '凉鞋', 11, '0,10,11,'),
(13, '拖鞋', 11, '0,10,11,'),
(14, '夏季美鞋', 11, '0,10,11,'),
(15, '穿搭必备', 10, '0,10,'),
(16, '高跟鞋', 15, '0,10,15,'),
(17, '平底鞋', 15, '0,10,15,'),
(18, '板鞋', 15, '0,10,15,'),
(19, '小西装', 2, '0,1,2,'),
(20, '防晒衫', 2, '0,1,2,'),
(21, '裙子', 1, '0,1,'),
(22, '夏季美裙', 21, '0,1,21,'),
(23, '牛仔裙', 21, '0,1,21,'),
(24, '吊带裙', 21, '0,1,21,'),
(25, '无袖群', 21, '0,1,21,'),
(26, '抹胸裙', 21, '0,1,21,'),
(27, '长裙', 21, '0,1,21,'),
(28, '半身裙', 21, '0,1,21,'),
(29, '短裙', 21, '0,1,21,'),
(30, '修身背心裙', 21, '0,1,21,'),
(31, '裤子', 1, '0,1,'),
(32, '短裤', 31, '0,1,31,'),
(33, '背带裤', 31, '0,1,31,'),
(34, '运动裤', 31, '0,1,31,'),
(35, '九分裤', 31, '0,1,31,'),
(36, '七分裤', 31, '0,1,31,'),
(37, '休闲裤', 31, '0,1,31,'),
(38, '铅笔裤', 31, '0,1,31,'),
(39, '包包', 0, '0,'),
(40, '配饰', 0, '0,'),
(41, '基本包型', 39, '0,39,'),
(42, '双肩包', 41, '0,39,41,'),
(44, '单肩包', 41, '0,39,41,'),
(45, '行李包', 41, '0,39,41,'),
(46, '手拿包', 41, '0,39,41,'),
(47, '精致首饰', 40, '0,40,'),
(49, '手表', 47, '0,40,47,'),
(50, '锁骨链', 47, '0,40,47,'),
(51, '手机壳', 47, '0,40,47,'),
(52, 'aa', 0, '0,'),
(53, 'cc', 0, '0,');

-- --------------------------------------------------------

--
-- 表的结构 `mls_good_col`
--

CREATE TABLE IF NOT EXISTS `mls_good_col` (
  `g_id` int(11) NOT NULL,
  `color` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `mls_good_pic`
--

CREATE TABLE IF NOT EXISTS `mls_good_pic` (
  `g_id` int(11) NOT NULL,
  `g_pic` varchar(100) NOT NULL,
  `state` enum('0','1') DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `mls_good_pic`
--

INSERT INTO `mls_good_pic` (`g_id`, `g_pic`, `state`) VALUES
(56, '/Uploads/2015-08-02/55be06c2a4083.jpg', '1'),
(57, '/Uploads/2015-08-02/55be07769c671.jpg', '0'),
(57, '/Uploads/2015-08-02/55be0776c28cb.jpg', '0'),
(57, '/Uploads/2015-08-02/55be0776e1113.jpg', '1'),
(58, '/Uploads/2015-08-02/55be07e9f0537.jpg', '1'),
(58, '/Uploads/2015-08-02/55be07ea2625a.jpg', '0'),
(59, '/Uploads/2015-08-02/55be08a2e8b25.jpg', '1'),
(59, '/Uploads/2015-08-02/55be08a31ab3f.jpg', '0'),
(60, '/Uploads/2015-08-02/55be08ae76417.jpg', '1'),
(60, '/Uploads/2015-08-02/55be08aea037a.jpg', '0'),
(60, '/Uploads/2015-08-02/55be08aeca2dd.jpg', '0'),
(61, '/Uploads/2015-08-02/55be08f00f424.jpg', '1'),
(62, '/Uploads/2015-08-02/55be09f8b71b0.jpg', '1'),
(62, '/Uploads/2015-08-02/55be09f8d1cef.jpg', '0'),
(62, '/Uploads/2015-08-02/55be09f940d99.jpg', '0'),
(63, '/Uploads/2015-08-02/55be0a2eca2dd.jpg', '1'),
(63, '/Uploads/2015-08-02/55be0a2eec82e.jpg', '0'),
(63, '/Uploads/2015-08-02/55be0a2f0f424.jpg', '0'),
(62, '/Uploads/2015-08-02/55be0a837de29.jpg', '0'),
(64, '/Uploads/2015-08-02/55be0a9857bcf.jpg', '1'),
(64, '/Uploads/2015-08-02/55be0a986ea05.jpg', '0'),
(65, '/Uploads/2015-08-02/55be0b0ae4e1c.jpg', '1'),
(65, '/Uploads/2015-08-02/55be0b0b0f424.jpg', '0'),
(65, '/Uploads/2015-08-02/55be0b0b2dc6c.jpg', '0'),
(66, '/Uploads/2015-08-02/55be0b8b487ab.jpg', '0'),
(66, '/Uploads/2015-08-02/55be0b8b6ea05.jpg', '0'),
(66, '/Uploads/2015-08-02/55be0b8b89544.jpg', '1'),
(67, '/Uploads/2015-08-02/55be0c0eca2dd.jpg', '1'),
(67, '/Uploads/2015-08-02/55be0c0ee8b25.jpg', '0'),
(68, '/Uploads/2015-08-02/55be0c6e2625a.jpg', '1'),
(69, '/Uploads/2015-08-02/55be0d28632ea.jpg', '1'),
(69, '/Uploads/2015-08-02/55be0d288583b.jpg', '0'),
(62, '/Uploads/2015-08-02/55be0d6731975.jpg', '0'),
(70, '/Uploads/2015-08-02/55be0e7266ff3.jpg', '1'),
(70, '/Uploads/2015-08-02/55be0e7294c5f.jpg', '0'),
(70, '/Uploads/2015-08-02/55be0e72bebc2.jpg', '0'),
(70, '/Uploads/2015-08-02/55be0e72e4e1c.jpg', '0'),
(70, '/Uploads/2015-08-02/55be0e731312d.jpg', '0'),
(71, '/Uploads/2015-08-02/55be0efd44aa2.jpg', '1'),
(71, '/Uploads/2015-08-02/55be0efd6ea05.jpg', '0'),
(71, '/Uploads/2015-08-02/55be0efd94c5f.jpg', '0'),
(71, '/Uploads/2015-08-02/55be0efdbaeb9.jpg', '0'),
(71, '/Uploads/2015-08-02/55be0efde8b25.jpg', '0'),
(73, '/Uploads/2015-08-02/55be0f6dd1cef.jpg', '1'),
(73, '/Uploads/2015-08-02/55be0f6df0537.jpg', '0'),
(73, '/Uploads/2015-08-02/55be0f6e1e848.jpg', '0'),
(73, '/Uploads/2015-08-02/55be0f6e632ea.jpg', '0'),
(73, '/Uploads/2015-08-02/55be0f6e8583b.jpg', '0'),
(74, '/Uploads/2015-08-02/55be0fe290f56.jpg', '1'),
(75, '/Uploads/2015-08-02/55be108e487ab.jpg', '1'),
(75, '/Uploads/2015-08-02/55be108e7a120.jpg', '0'),
(75, '/Uploads/2015-08-02/55be108e94c5f.jpg', '0'),
(75, '/Uploads/2015-08-02/55be108eb34a7.jpg', '0'),
(76, '/Uploads/2015-08-02/55be11459c671.jpg', '0'),
(76, '/Uploads/2015-08-02/55be1145b34a7.jpg', '1'),
(76, '/Uploads/2015-08-02/55be1145cdfe6.jpg', '0'),
(77, '/Uploads/default.jpg', '1'),
(78, '/Uploads/2015-08-02/55be11d3632ea.jpg', '1'),
(78, '/Uploads/2015-08-02/55be11d381b32.jpg', '0'),
(78, '/Uploads/2015-08-02/55be11d3a7d8c.jpg', '0'),
(79, '/Uploads/default.jpg', '1'),
(80, '/Uploads/2015-08-02/55be12d4dd40a.jpg', '1'),
(80, '/Uploads/2015-08-02/55be12d50b71b.jpg', '0'),
(80, '/Uploads/2015-08-02/55be12d52dc6c.jpg', '0'),
(81, '/Uploads/2015-08-02/55be134122551.jpg', '1'),
(81, '/Uploads/2015-08-02/55be134144aa2.jpg', '0'),
(81, '/Uploads/2015-08-02/55be1341632ea.jpg', '0'),
(82, '/Uploads/2015-08-02/55be1397baeb9.jpg', '1'),
(82, '/Uploads/2015-08-02/55be1397e1113.jpg', '0'),
(83, '/Uploads/2015-08-02/55be13ea90f56.jpg', '1'),
(84, '/Uploads/2015-08-02/55be159f3567e.jpg', '1'),
(84, '/Uploads/2015-08-02/55be159f66ff3.jpg', '0'),
(84, '/Uploads/2015-08-02/55be159f90f56.jpg', '0'),
(84, '/Uploads/2015-08-02/55be159faf79e.jpg', '0'),
(85, '/Uploads/2015-08-02/55be15f2d1cef.jpg', '1'),
(85, '/Uploads/2015-08-02/55be15f2e4e1c.jpg', '0'),
(86, '/Uploads/2015-08-02/55be15d9f0537.jpg', '1'),
(86, '/Uploads/2015-08-02/55be15da1e848.jpg', '0'),
(87, '/Uploads/2015-08-02/55be16598d24d.jpg', '1'),
(87, '/Uploads/2015-08-02/55be1659af79e.jpg', '0'),
(88, '/Uploads/2015-08-02/55be164f7a120.jpg', '1'),
(88, '/Uploads/2015-08-02/55be164fa7d8c.jpg', '0'),
(89, '/Uploads/2015-08-02/55be16b9487ab.jpg', '1'),
(89, '/Uploads/2015-08-02/55be16b9632ea.jpg', '0'),
(89, '/Uploads/2015-08-02/55be16b976417.jpg', '0'),
(89, '/Uploads/2015-08-02/55be16b990f56.jpg', '0'),
(89, '/Uploads/2015-08-02/55be16b9a7d8c.jpg', '0'),
(90, '/Uploads/2015-08-02/55be1705e8b25.jpg', '1'),
(90, '/Uploads/2015-08-02/55be17060b71b.jpg', '0'),
(90, '/Uploads/2015-08-02/55be17062dc6c.jpg', '0'),
(91, '/Uploads/2015-08-02/55be175ae8b25.jpg', '1'),
(92, '/Uploads/2015-08-02/55be1a5790f56.jpg', '1'),
(92, '/Uploads/2015-08-02/55be1a57b34a7.jpg', '0'),
(92, '/Uploads/2015-08-02/55be1a57cdfe6.jpg', '0'),
(92, '/Uploads/2015-08-02/55be1a57ec82e.jpg', '0'),
(92, '/Uploads/2015-08-02/55be1a5816e36.jpg', '0'),
(93, '/Uploads/2015-08-02/55be1af98d24d.jpg', '0'),
(93, '/Uploads/2015-08-02/55be1af9b71b0.jpg', '0'),
(93, '/Uploads/2015-08-02/55be1af9d9701.jpg', '1'),
(94, '/Uploads/2015-08-02/55be1b2a5f5e1.jpg', '0'),
(94, '/Uploads/2015-08-02/55be1b2a7de29.jpg', '0'),
(94, '/Uploads/2015-08-02/55be1b2a9c671.jpg', '1'),
(95, '/Uploads/2015-08-02/55be1b8ecdfe6.jpg', '1'),
(95, '/Uploads/2015-08-02/55be1b8f03d09.jpg', '0'),
(96, '/Uploads/2015-08-02/55be1c51dd40a.jpg', '1'),
(97, '/Uploads/2015-08-02/55be1cf09c671.jpg', '1'),
(97, '/Uploads/2015-08-02/55be1cf0b71b0.jpg', '0'),
(97, '/Uploads/2015-08-02/55be1cf0dd40a.jpg', '0'),
(98, '/Uploads/2015-08-02/55be1d4dc65d4.jpg', '1'),
(99, '/Uploads/2015-08-02/55be1f8f90f56.jpg', '1'),
(99, '/Uploads/2015-08-02/55be1f8faf79e.jpg', '0'),
(99, '/Uploads/2015-08-02/55be1f8fd9701.jpg', '0'),
(99, '/Uploads/2015-08-02/55be1f9000000.jpg', '0'),
(99, '/Uploads/2015-08-02/55be1f901ab3f.jpg', '0'),
(101, '/Uploads/2015-08-02/55be205edd40a.jpg', '1'),
(102, '/Uploads/2015-08-02/55be20bfaba95.jpg', '1'),
(102, '/Uploads/2015-08-02/55be20bfd59f8.jpg', '0'),
(102, '/Uploads/2015-08-02/55be20c003d09.jpg', '0'),
(102, '/Uploads/2015-08-02/55be20c01e848.jpg', '0'),
(102, '/Uploads/2015-08-02/55be20c040d99.jpg', '0'),
(103, '/Uploads/2015-08-02/55be231231975.jpg', '1'),
(103, '/Uploads/2015-08-02/55be23126acfc.jpg', '0'),
(104, '/Uploads/2015-08-02/55be23c2dd40a.jpg', '1'),
(104, '/Uploads/2015-08-02/55be241553ec6.jpg', '0'),
(104, '/Uploads/2015-08-02/55be2415cdfe6.jpg', '0'),
(105, '/Uploads/2015-08-04/55c0361eaf79e.jpg', '1'),
(105, '/Uploads/2015-08-04/55c0361ee1113.jpg', '0'),
(105, '/Uploads/2015-08-04/55c0361f16e36.jpg', '0'),
(105, '/Uploads/2015-08-04/55c0361f487ab.jpg', '0'),
(106, '/Uploads/2015-08-04/55c0367757bcf.jpg', '1'),
(106, '/Uploads/2015-08-04/55c036777a120.jpg', '0'),
(107, '/Uploads/2015-08-04/55c036bc0b71b.jpg', '1'),
(107, '/Uploads/2015-08-04/55c036bc39387.jpg', '0'),
(108, '/Uploads/2015-08-04/55c03707632ea.jpg', '1'),
(108, '/Uploads/2015-08-04/55c0370781b32.jpg', '0'),
(108, '/Uploads/2015-08-04/55c03711bebc2.jpg', '0'),
(109, '/Uploads/2015-08-04/55c0376b00000.jpg', '1'),
(109, '/Uploads/2015-08-04/55c0376b22551.jpg', '0'),
(110, '/Uploads/2015-08-04/55c037c707a12.jpg', '1'),
(110, '/Uploads/2015-08-04/55c037c729f63.jpg', '0'),
(110, '/Uploads/2015-08-04/55c037c781b32.jpg', '0'),
(111, '/Uploads/2015-08-04/55c03826aba95.jpg', '1'),
(111, '/Uploads/2015-08-04/55c03826ca2dd.jpg', '0'),
(112, '/Uploads/2015-08-04/55c03b99f0537.png', '1'),
(113, '/Uploads/2015-08-04/55c054885f5e1.jpg', '1'),
(113, '/Uploads/2015-08-04/55c054887a120.jpg', '0'),
(113, '/Uploads/2015-08-04/55c0548894c5f.jpg', '0'),
(113, '/Uploads/2015-08-04/55c05488c28cb.jpg', '0');

-- --------------------------------------------------------

--
-- 表的结构 `mls_good_play`
--

CREATE TABLE IF NOT EXISTS `mls_good_play` (
  `s_id` int(11) NOT NULL,
  `pic` varchar(45) NOT NULL,
  `show` enum('0','1') DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `mls_good_play`
--

INSERT INTO `mls_good_play` (`s_id`, `pic`, `show`) VALUES
(0, '/Uploads/2015-08-02/55be20a7a7d8c.jpg', '1'),
(0, '/Uploads/2015-08-02/55be20b15b8d8.jpg', '1'),
(0, '/Uploads/2015-08-02/55be20dfa7d8c.jpg', '1'),
(0, '/Uploads/2015-08-02/55be20f339387.png', '1'),
(0, '/Uploads/2015-08-02/55be21037de29.jpg', '1'),
(0, '/Uploads/2015-08-04/55c051bf89544.jpg', '1');

-- --------------------------------------------------------

--
-- 表的结构 `mls_good_size`
--

CREATE TABLE IF NOT EXISTS `mls_good_size` (
  `g_id` int(11) NOT NULL,
  `size` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `mls_good_size`
--

INSERT INTO `mls_good_size` (`g_id`, `size`) VALUES
(56, 'S'),
(56, 'M'),
(56, 'L'),
(57, 'S'),
(57, 'M'),
(57, 'L'),
(58, 'S'),
(58, 'M'),
(58, 'L'),
(59, 'S'),
(59, 'M'),
(59, 'L'),
(60, 'S'),
(60, 'M'),
(60, 'L'),
(61, 'S'),
(61, 'M'),
(61, 'L'),
(62, 'S'),
(62, 'M'),
(62, 'L'),
(63, 'S'),
(63, 'M'),
(63, 'L'),
(64, 'S'),
(64, 'M'),
(64, 'L'),
(65, 'S'),
(65, 'M'),
(65, 'L'),
(66, 'S'),
(66, 'M'),
(66, 'L'),
(67, 'S'),
(67, 'M'),
(67, 'L'),
(68, 'S'),
(68, 'M'),
(68, 'L'),
(69, 'S'),
(69, 'M'),
(69, 'L'),
(70, 'S'),
(70, 'M'),
(70, 'L'),
(71, 'S'),
(71, 'M'),
(71, 'L'),
(72, 'S'),
(72, 'M'),
(72, 'L'),
(73, 'S'),
(73, 'M'),
(73, 'L'),
(74, 'S'),
(74, 'M'),
(74, 'L'),
(75, 'S'),
(75, 'M'),
(75, 'L'),
(76, 'S'),
(76, 'M'),
(76, 'L'),
(77, 'S'),
(77, 'M'),
(77, 'L'),
(78, 'S'),
(78, 'M'),
(78, 'L'),
(79, 'S'),
(79, 'M'),
(79, 'L'),
(80, 'S'),
(80, 'M'),
(80, 'L'),
(81, 'S'),
(81, 'M'),
(81, 'L'),
(82, 'S'),
(82, 'M'),
(82, 'L'),
(83, 'S'),
(83, 'M'),
(83, 'L'),
(84, 'S'),
(84, 'M'),
(84, 'L'),
(85, 'S'),
(85, 'M'),
(85, 'L'),
(86, 'S'),
(86, 'M'),
(86, 'L'),
(87, 'S'),
(87, 'M'),
(87, 'L'),
(88, 'S'),
(88, 'M'),
(88, 'L'),
(89, 'S'),
(89, 'M'),
(89, 'L'),
(90, 'S'),
(90, 'M'),
(90, 'L'),
(91, 'S'),
(91, 'M'),
(91, 'L'),
(92, 'S'),
(92, 'M'),
(92, 'L'),
(93, 'S'),
(93, 'M'),
(93, 'L'),
(94, 'S'),
(94, 'M'),
(94, 'L'),
(95, 'S'),
(95, 'M'),
(95, 'L'),
(96, 'S'),
(96, 'M'),
(96, 'L'),
(97, 'S'),
(97, 'M'),
(97, 'L'),
(98, 'S'),
(98, 'M'),
(98, 'L'),
(99, 'S'),
(99, 'M'),
(99, 'L'),
(100, 'S'),
(100, 'M'),
(100, 'L'),
(101, 'S'),
(101, 'M'),
(101, 'L'),
(102, 'S'),
(102, 'M'),
(102, 'L'),
(103, 'S'),
(103, 'M'),
(103, 'L'),
(104, 'S'),
(104, 'M'),
(104, 'L'),
(105, 'S'),
(105, 'M'),
(105, 'L'),
(106, 'S'),
(106, 'M'),
(106, 'L'),
(107, 'S'),
(107, 'M'),
(107, 'L'),
(108, 'S'),
(108, 'M'),
(108, 'L'),
(109, 'S'),
(109, 'M'),
(109, 'L'),
(110, 'S'),
(110, 'M'),
(110, 'L'),
(111, 'S'),
(111, 'M'),
(111, 'L'),
(112, 'S'),
(112, 'M'),
(112, 'L'),
(113, 'S'),
(113, 'M'),
(113, 'L');

-- --------------------------------------------------------

--
-- 表的结构 `mls_magazine`
--

CREATE TABLE IF NOT EXISTS `mls_magazine` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `g_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `content` text,
  `pic` varchar(50) DEFAULT NULL,
  `click_num` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `mls_magazine_type`
--

CREATE TABLE IF NOT EXISTS `mls_magazine_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `p_id` int(11) NOT NULL DEFAULT '0',
  `path` varchar(45) NOT NULL DEFAULT '0,',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `mls_order`
--

CREATE TABLE IF NOT EXISTS `mls_order` (
  `u_id` int(11) NOT NULL,
  `id` varchar(45) NOT NULL,
  `time` int(11) NOT NULL,
  `o_state` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `mls_order`
--

INSERT INTO `mls_order` (`u_id`, `id`, `time`, `o_state`) VALUES
(1, '143861100511', 1438611005, 4),
(1, '143861100521', 1438611005, 3),
(1, '143861100541', 1438611005, 4),
(5, '143865035715', 1438650357, 0),
(1, '143865209711', 1438652097, 0),
(12, '1438652205112', 1438652205, 0),
(12, '1438652205412', 1438652205, 0),
(1, '143865321711', 1438653217, 0),
(1, '143865575721', 1438655757, 0),
(1, '143865750511', 1438657505, 2),
(1, '143865753611', 1438657536, 2),
(1, '143865755511', 1438657555, 4),
(1, '143865815521', 1438658155, 2),
(1, '143866119811', 1438661198, 2),
(1, '143866121641', 1438661216, 4),
(1, '143866620841', 1438666208, 4),
(1, '143866623641', 1438666236, 4),
(1, '143866628341', 1438666283, 4),
(1, '143866837841', 1438668378, 4);

-- --------------------------------------------------------

--
-- 表的结构 `mls_order_info`
--

CREATE TABLE IF NOT EXISTS `mls_order_info` (
  `o_id` char(33) NOT NULL,
  `g_id` int(11) NOT NULL,
  `state` enum('0','1') NOT NULL DEFAULT '0',
  `num` int(11) NOT NULL,
  `r_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `or_state` tinyint(4) NOT NULL DEFAULT '1',
  `message` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `mls_order_info`
--

INSERT INTO `mls_order_info` (`o_id`, `g_id`, `state`, `num`, `r_id`, `u_id`, `or_state`, `message`) VALUES
('143861100541', 92, '0', 1, 34, 1, 1, '543'),
('143861100511', 64, '0', 3, 34, 1, 1, '1234'),
('143861100511', 67, '0', 1, 34, 1, 1, '1234'),
('143861100521', 56, '0', 1, 34, 1, 1, '23'),
('143865035715', 66, '0', 2, 0, 5, 1, ''),
('143865209711', 67, '0', 1, 34, 1, 1, ''),
('1438652205112', 66, '0', 1, 62, 12, 1, ''),
('1438652205412', 94, '0', 1, 62, 12, 1, ''),
('143865321711', 67, '0', 1, 60, 1, 1, ''),
('143865575721', 58, '0', 1, 60, 1, 1, ''),
('143865575721', 57, '0', 1, 60, 1, 1, ''),
('143865750511', 67, '0', 1, 55, 1, 1, ''),
('143865753611', 67, '0', 1, 55, 1, 1, ''),
('143865755511', 67, '0', 1, 60, 1, 1, ''),
('143865815521', 70, '0', 1, 64, 1, 1, '1232'),
('143866119811', 67, '0', 1, 63, 1, 1, ''),
('143866121641', 108, '0', 1, 63, 1, 1, '222'),
('143866121641', 111, '0', 1, 63, 1, 1, '222'),
('143866620841', 95, '0', 1, 54, 1, 1, '234rt5ert'),
('143866620841', 95, '0', 1, 54, 1, 1, '234rt5ert'),
('143866623641', 92, '0', 1, 60, 1, 1, '7654'),
('143866628341', 92, '0', 1, 54, 1, 1, ''),
('143866837841', 110, '0', 1, 65, 1, 1, '');

-- --------------------------------------------------------

--
-- 表的结构 `mls_person_type`
--

CREATE TABLE IF NOT EXISTS `mls_person_type` (
  `s_id` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `p_id` char(25) NOT NULL DEFAULT '0,',
  `state` enum('false','true') DEFAULT NULL,
  `by_order` tinyint(3) unsigned DEFAULT NULL,
  `ct_time` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=85 ;

--
-- 转存表中的数据 `mls_person_type`
--

INSERT INTO `mls_person_type` (`s_id`, `id`, `name`, `p_id`, `state`, `by_order`, `ct_time`) VALUES
(2, 30, '服装', '82615212', 'true', 0, 1438516757),
(2, 31, '上衣', '82615212', NULL, 1, 1438516757),
(2, 32, '裤子', '82615212', NULL, 2, 1438516757),
(2, 33, '鞋子', '82315383', 'true', 3, 1438516757),
(2, 34, '帽子', '82266053', 'true', 5, 1438516757),
(NULL, 35, '衣服', '82412003', 'true', 0, 1438516933),
(NULL, 36, '上衣', '82412003', NULL, 1, 1438516933),
(NULL, 37, '裙子', '82412003', NULL, 2, 1438516933),
(NULL, 38, '衣服', '82873464', 'true', 0, 1438517226),
(NULL, 39, '上衣', '82873464', NULL, 1, 1438517226),
(NULL, 40, '裤子', '82873464', NULL, 2, 1438517226),
(1, 41, '衣服', '82980362', 'true', 0, 1438517357),
(1, 42, '上衣', '82980362', NULL, 1, 1438517357),
(1, 43, '裤子', '82980362', NULL, 2, 1438517357),
(2, 44, '凉鞋', '82315383', NULL, 4, 1438519895),
(2, 45, '红帽子', '82266053', NULL, 6, 1438520619),
(1, 46, '包包', '82423896', 'true', 3, 1438520666),
(1, 47, '大包', '82423896', NULL, 4, 1438520666),
(1, 48, '小包', '82423896', NULL, 5, 1438520666),
(4, 49, '饰品', '82366164', 'true', 2, 1438521862),
(4, 50, '眼镜', '82366164', NULL, 3, 1438521862),
(4, 51, '手表', '82366164', NULL, 4, 1438521862),
(4, 52, '戒指', '82366164', NULL, 5, 1438521862),
(4, 53, '锁骨链', '82366164', NULL, 6, 1438522065),
(NULL, 54, '衣服', '84645535', 'true', 0, 1438651253),
(NULL, 55, '上衣', '84645535', NULL, 1, 1438651253),
(NULL, 56, '衣服', '8441952', 'true', 0, 1438651312),
(NULL, 57, '上衣', '8441952', NULL, 1, 1438651312),
(NULL, 58, '衣服', '84519773', 'true', 0, 1438651332),
(NULL, 59, '上衣', '84519773', NULL, 1, 1438651332),
(NULL, 60, '衣服', '84727296', 'true', 0, 1438651344),
(NULL, 61, '上衣', '84727296', NULL, 1, 1438651344),
(NULL, 62, '衣服', '84308562', 'true', 0, 1438651369),
(NULL, 63, '上衣', '84308562', NULL, 1, 1438651369),
(NULL, 64, '衣服', '84518810', 'true', 0, 1438651383),
(NULL, 65, '上衣', '84518810', NULL, 1, 1438651383),
(NULL, 66, 'e', '84416540', 'true', 0, 1438651397),
(NULL, 67, 'a', '84912926', 'true', 0, 1438651412),
(NULL, 68, 'a', '84677856', 'true', 0, 1438651431),
(NULL, 69, 'k', '84512092', 'true', 0, 1438651586),
(NULL, 70, 'aa', '84322691', 'true', 0, 1438651611),
(NULL, 71, 'aa', '84963415', 'true', 0, 1438651627),
(NULL, 73, 'aa', '84510914', 'true', 0, 1438651748),
(6, 74, 'aa', '8415341', 'true', 0, 1438653221),
(4, 76, '衣服', '84657995', 'true', 7, 1438659985),
(4, 77, '上衣', '84657995', NULL, 8, 1438659985),
(4, 78, 'ee', '84798593', 'true', 9, 1438667797),
(4, 79, 'ewrew', '84798593', NULL, 10, 1438667797),
(4, 83, 'sdaf', '84406684', 'true', 0, 1438667838),
(4, 84, 'sdf', '84406684', NULL, 1, 1438667838);

-- --------------------------------------------------------

--
-- 表的结构 `mls_shop`
--

CREATE TABLE IF NOT EXISTS `mls_shop` (
  `s_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `c_time` varchar(45) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `mls_shop`
--

INSERT INTO `mls_shop` (`s_id`, `name`, `c_time`) VALUES
(1, 'AAAAA', '1438516645'),
(2, '米可小店', '1438516677'),
(3, '小可的店', '1438516909'),
(4, '倾城之恋', '1438521766'),
(6, '傻吊', '1438653187'),
(7, '测试5', '1438667613');

-- --------------------------------------------------------

--
-- 表的结构 `mls_shop_car`
--

CREATE TABLE IF NOT EXISTS `mls_shop_car` (
  `u_id` int(11) DEFAULT NULL,
  `g_id` int(11) NOT NULL,
  `g_num` int(11) NOT NULL,
  `addtime` int(11) NOT NULL,
  `clientip` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `mls_shop_good_play`
--

CREATE TABLE IF NOT EXISTS `mls_shop_good_play` (
  `s_id` int(11) NOT NULL,
  `pic` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `mls_shop_good_play`
--

INSERT INTO `mls_shop_good_play` (`s_id`, `pic`) VALUES
(23512, '/Uploads/2015-07-29/55b8f20ca037a.jpg'),
(23512, '/Uploads/2015-07-29/55b8f20cd9701.jpg'),
(1, '/Uploads/2015-08-03/55bee233af79e.jpg'),
(1, '/Uploads/2015-08-03/55bee233e4e1c.png'),
(4, '/Uploads/2015-08-04/55c054c439387.jpg'),
(4, '/Uploads/2015-08-04/55c054c47270e.jpg'),
(4, '/Uploads/2015-08-04/55c054c4b34a7.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `mls_shop_info`
--

CREATE TABLE IF NOT EXISTS `mls_shop_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `truename` varchar(45) NOT NULL,
  `card` varchar(45) NOT NULL,
  `area` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `qq` varchar(15) NOT NULL,
  `shop_name` varchar(100) NOT NULL,
  `hold_pic` varchar(100) NOT NULL,
  `power` int(10) NOT NULL DEFAULT '0',
  `phone` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `card` (`card`),
  UNIQUE KEY `shop_name` (`shop_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `mls_shop_info`
--

INSERT INTO `mls_shop_info` (`id`, `u_id`, `truename`, `card`, `area`, `email`, `qq`, `shop_name`, `hold_pic`, `power`, `phone`) VALUES
(1, 1, 'AAA', '440982199109284139', '广州', 'aa@bb.com', '56789837', 'AAAAA', '/Project/Public/Uploads/userpic/2015-08-02/55be046fcdfe6.jpg', 3, '13589748985'),
(2, 7, '米可', '440801199103303380', '广州天河区', '815740330@qq.com', '815740330', '米可小店', '/Project/Public/Uploads/userpic/2015-08-02/55be05c4487ab.jpg', 3, '13800138000'),
(3, 6, '连心', '472168716876287', '', 'ajh@qq.com', '26582188', '小可的店', '/Project/Public/Uploads/userpic/2015-08-02/55be06a6a7d8c.jpeg', 3, '13789892889'),
(4, 9, '倾城', '448461199103303380', '北京市', '815740330@qq.com', '915740030', '倾城之恋', '/project/Public/Uploads/userpic/2015-08-02/55be19a2d59f8.jpg', 3, '13900139000'),
(5, 11, '测试1', '43278929898619876', '吉林省长春市', 'aa@qq.com', '3278687326', '店小二', '/Project/Public/Uploads/userpic/1438611324_162.jpg', 0, '13627879878'),
(6, 10, 'sdf', '440801111111111111', '内蒙古自治区呼和浩特市', '888814@qq.com', '888814', '傻吊', '/Project/Public/Uploads/userpic/1438653117_162.jpg', 3, '13499999999'),
(7, 13, '测试', '41342434534', '吉林省辽源市', 'sfdf@qq.com', '43256767576', '测试5', '/Project/Public/Uploads/userpic/1438667589_162.jpg', 3, '13729912345');

-- --------------------------------------------------------

--
-- 表的结构 `mls_shop_score`
--

CREATE TABLE IF NOT EXISTS `mls_shop_score` (
  `s_id` int(11) NOT NULL,
  `des_score` tinyint(4) NOT NULL,
  `qua_score` tinyint(4) NOT NULL,
  `ser_score` tinyint(4) NOT NULL,
  `hai_score` tinyint(4) NOT NULL,
  `u_id` int(11) NOT NULL,
  `g_id` int(11) NOT NULL,
  `content` text,
  `evel` enum('1','2','3') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `mls_user`
--

CREATE TABLE IF NOT EXISTS `mls_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(45) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `pass` varchar(45) NOT NULL,
  `c_time` int(11) NOT NULL,
  `last_time` int(11) NOT NULL,
  `state` tinyint(4) NOT NULL DEFAULT '0',
  `power` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `mls_user`
--

INSERT INTO `mls_user` (`id`, `nickname`, `phone`, `pass`, `c_time`, `last_time`, `state`, `power`) VALUES
(1, '小朋友有', '13729898812', 'fcea920f7412b5da7be0cf42b8c93759', 1438516338, 1438668479, 0, 2),
(5, 'aabb', '13524267653', 'e10adc3949ba59abbe56e057f20f883e', 1438516240, 1438651739, 0, 0),
(7, '米可小小', '13800138000', 'e10adc3949ba59abbe56e057f20f883e', 1438516363, 1438610342, 0, 2),
(8, '小朋友有吗', '13728798179', 'e10adc3949ba59abbe56e057f20f883e', 1438518038, 1438518038, 0, 0),
(9, '倾城之恋', '13900139000', 'e10adc3949ba59abbe56e057f20f883e', 1438521657, 1438667783, 0, 2),
(10, '小朋友有q', '13678268723', 'e10adc3949ba59abbe56e057f20f883e', 1438523977, 1438653215, 0, 2),
(11, '小朋友去', '13728109092', 'e10adc3949ba59abbe56e057f20f883e', 1438528461, 1438611286, 0, 0),
(12, '小朋友我', '13729912345', 'e10adc3949ba59abbe56e057f20f883e', 1438614614, 1438651812, 0, 0),
(13, '小朋友也', '13729912345', 'fcea920f7412b5da7be0cf42b8c93759', 1438660800, 1438667632, 1, 2),
(14, 'ghfdhgfg', '13538812345', 'e10adc3949ba59abbe56e057f20f883e', 1438667386, 1438667386, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `mls_user_info`
--

CREATE TABLE IF NOT EXISTS `mls_user_info` (
  `u_id` int(11) NOT NULL,
  `truename` char(10) NOT NULL,
  `pic` varchar(100) NOT NULL DEFAULT '/Project/Public/Uploads/userdefault.jpg',
  `sex` enum('0','1') DEFAULT '0',
  `birth` int(11) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `school` varchar(45) DEFAULT NULL,
  `workunit` varchar(50) DEFAULT NULL,
  `tfog` varchar(45) DEFAULT NULL,
  `hobbies` varchar(255) DEFAULT NULL,
  `micro` varchar(45) DEFAULT NULL,
  `declaration` text,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `mls_user_info`
--

INSERT INTO `mls_user_info` (`u_id`, `truename`, `pic`, `sex`, `birth`, `address`, `school`, `workunit`, `tfog`, `hobbies`, `micro`, `declaration`) VALUES
(1, '', '/Project/Public/Uploads/userdefault.jpg', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, '', '/Project/Public/Uploads/userdefault.jpg', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, '', '/project/Public/Uploads/userpic/1438518096_162.jpg', '0', 802195200, '湖北荆州市', NULL, NULL, NULL, NULL, NULL, NULL),
(7, '', '/Project/Public/Uploads/userdefault.jpg', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, '', '/Project/Public/Uploads/userdefault.jpg', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, '', '/project/Public/Uploads/userpic/1438530028_162.jpg', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, '', '/Project/Public/Uploads/userdefault.jpg', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, '', '/Project/Public/Uploads/userdefault.jpg', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, '', '/Project/Public/Uploads/userdefault.jpg', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, '', '/Project/Public/Uploads/userpic/1438667482_162.jpg', '0', 206812800, '河北保定市', NULL, NULL, NULL, NULL, NULL, NULL),
(14, '', '/Project/Public/Uploads/userdefault.jpg', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `mls_user_like`
--

CREATE TABLE IF NOT EXISTS `mls_user_like` (
  `u_id` int(11) NOT NULL,
  `shareid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `mls_user_score`
--

CREATE TABLE IF NOT EXISTS `mls_user_score` (
  `u_id` int(11) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `mls_user_share`
--

CREATE TABLE IF NOT EXISTS `mls_user_share` (
  `u_id` int(11) NOT NULL,
  `g_id` int(11) NOT NULL,
  `shareid` int(11) NOT NULL,
  PRIMARY KEY (`g_id`,`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `mls_user_shop`
--

CREATE TABLE IF NOT EXISTS `mls_user_shop` (
  `u_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `mls_u_to_u`
--

CREATE TABLE IF NOT EXISTS `mls_u_to_u` (
  `u_id` int(11) NOT NULL,
  `cu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
