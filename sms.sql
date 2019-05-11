/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50539
Source Host           : localhost:3306
Source Database       : sms

Target Server Type    : MYSQL
Target Server Version : 50539
File Encoding         : 65001

Date: 2018-06-12 14:47:33
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(9) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=900000001 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('900000000', 'admin', 'admin');

-- ----------------------------
-- Table structure for college
-- ----------------------------
DROP TABLE IF EXISTS `college`;
CREATE TABLE `college` (
  `id` int(3) NOT NULL,
  `college` varchar(25) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `college` (`college`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of college
-- ----------------------------
INSERT INTO `college` VALUES ('108', '人文社科学院');
INSERT INTO `college` VALUES ('109', '体育部');
INSERT INTO `college` VALUES ('107', '外国语学院');
INSERT INTO `college` VALUES ('112', '成人教育学院');
INSERT INTO `college` VALUES ('105', '数理学院');
INSERT INTO `college` VALUES ('102', '机械与动力工程学院');
INSERT INTO `college` VALUES ('106', '材料科学与工程学院');
INSERT INTO `college` VALUES ('110', '生物与环境工程学院');
INSERT INTO `college` VALUES ('103', '电子信息学院');
INSERT INTO `college` VALUES ('104', '经济管理学院');
INSERT INTO `college` VALUES ('101', '船舶与海洋工程学院');
INSERT INTO `college` VALUES ('111', '计算机科学与工程学院');

-- ----------------------------
-- Table structure for course
-- ----------------------------
DROP TABLE IF EXISTS `course`;
CREATE TABLE `course` (
  `id` varchar(9) NOT NULL,
  `course` varchar(25) NOT NULL,
  `hours` int(2) DEFAULT NULL,
  `credits` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of course
-- ----------------------------
INSERT INTO `course` VALUES ('01010309b', '船舶与海洋工程概论', '16', '1');
INSERT INTO `course` VALUES ('04000001b', '毕业设计', '12', '12');
INSERT INTO `course` VALUES ('04002013b', '经管视野', '1', '1');
INSERT INTO `course` VALUES ('04010011b', '工业工程导论', '32', '2');
INSERT INTO `course` VALUES ('04010021b', '管理沟通', '32', '2');
INSERT INTO `course` VALUES ('04010241b', '物流系统分析与设计', '32', '2');
INSERT INTO `course` VALUES ('04010302a', '管理学(B)', '48', '3');
INSERT INTO `course` VALUES ('04010308b', '服务管理', '32', '2');
INSERT INTO `course` VALUES ('04010311b', '经济法(C)', '32', '2');
INSERT INTO `course` VALUES ('04010315b', '生产运作管理(D)', '32', '2');
INSERT INTO `course` VALUES ('04010318b', '市场营销学(D)', '32', '2');
INSERT INTO `course` VALUES ('04020302a', '现代经济学(B)', '48', '3');
INSERT INTO `course` VALUES ('04030035b', '成本会计学', '32', '2');
INSERT INTO `course` VALUES ('04030202b', '财务管理(C)', '48', '3');
INSERT INTO `course` VALUES ('04030212b', '会计学(B)', '48', '3');
INSERT INTO `course` VALUES ('04030216a', '应用统计(A)', '48', '3');
INSERT INTO `course` VALUES ('04040020b', '电子商务概论', '32', '2');
INSERT INTO `course` VALUES ('04040022a', '电子商务应用开发技术', '64', '4');
INSERT INTO `course` VALUES ('04040064b', '认识实习', '1', '1');
INSERT INTO `course` VALUES ('04040076b', '系统工程', '32', '2');
INSERT INTO `course` VALUES ('04040083a', '运筹学', '64', '4');
INSERT INTO `course` VALUES ('04040139b', '社会调查', '1', '1');
INSERT INTO `course` VALUES ('04040140b', '影子工厂实习', '1', '1');
INSERT INTO `course` VALUES ('04040145b', '专业实习', '4', '4');
INSERT INTO `course` VALUES ('04040152b', '专业教育1', '4', '1');
INSERT INTO `course` VALUES ('04040162a', '数据结构', '56', '4');
INSERT INTO `course` VALUES ('04040163b', '专业教育2', '4', '1');
INSERT INTO `course` VALUES ('04040165a', '数据库原理与应用(SQL_server)', '64', '4');
INSERT INTO `course` VALUES ('04040166b', '电子商务应用开发技术课程设计', '2', '2');
INSERT INTO `course` VALUES ('04040167b', '专业教育3', '4', '1');
INSERT INTO `course` VALUES ('04040168a', '信息资源管理', '32', '2');
INSERT INTO `course` VALUES ('04040170b', '经管英语综合训练', '32', '2');
INSERT INTO `course` VALUES ('04040173a', 'Java程序设计', '48', '3');
INSERT INTO `course` VALUES ('04040174b', 'UML建模实训', '2', '2');
INSERT INTO `course` VALUES ('04040175b', '计算机网络技术与应用课程设计', '1', '1');
INSERT INTO `course` VALUES ('04040177b', '专业教育4', '4', '1');
INSERT INTO `course` VALUES ('04040180a', '计算机网络技术与应用', '48', '3');
INSERT INTO `course` VALUES ('04040301b', '大学计算机基础', '48', '3');
INSERT INTO `course` VALUES ('04040303a', '计算机程序设计语言(VC++)', '72', '5');
INSERT INTO `course` VALUES ('04040303b', '计算机程序设计实践(VC++)', '2', '2');
INSERT INTO `course` VALUES ('04040310b', '管理信息系统概论', '40', '3');
INSERT INTO `course` VALUES ('04040311b', '开发工具实训', '1', '1');
INSERT INTO `course` VALUES ('04040312a', '企业信息系统及应用(EIS)', '32', '2');
INSERT INTO `course` VALUES ('04040313b', '数据库原理与应用(SQL_Server)实践', '1', '1');
INSERT INTO `course` VALUES ('04040314a', '数据挖掘与商务智能技术', '48', '3');
INSERT INTO `course` VALUES ('04040316b', '信息技术前沿', '32', '2');
INSERT INTO `course` VALUES ('04040317a', '信息系统分析与设计', '48', '3');
INSERT INTO `course` VALUES ('04040317b', '信息系统分析与设计课程设计', '2', '2');
INSERT INTO `course` VALUES ('04040318b', '信息系统项目管理', '32', '2');
INSERT INTO `course` VALUES ('04040320b', '移动软件开发技术', '32', '2');
INSERT INTO `course` VALUES ('04040321b', '专业课题研究训练', '32', '2');
INSERT INTO `course` VALUES ('04060001b', '创业基础', '24', '2');
INSERT INTO `course` VALUES ('05010026a', '高等数学B1', '88', '6');
INSERT INTO `course` VALUES ('05010039a', '高等数学A1', '80', '5');
INSERT INTO `course` VALUES ('05010040a', '高等数学A2', '96', '6');
INSERT INTO `course` VALUES ('05010041a', '高等数学B2', '104', '7');
INSERT INTO `course` VALUES ('05030010b', '概率论与数理统计', '48', '3');
INSERT INTO `course` VALUES ('05030034a', '线性代数', '32', '2');
INSERT INTO `course` VALUES ('07010002a', '体育1', '32', '1');
INSERT INTO `course` VALUES ('07010003a', '体育2', '32', '1');
INSERT INTO `course` VALUES ('07010004a', '体育3', '32', '1');
INSERT INTO `course` VALUES ('07010005a', '体育4', '32', '1');
INSERT INTO `course` VALUES ('08010001a', '大学英语1', '64', '4');
INSERT INTO `course` VALUES ('08010005a', '大学英语2', '64', '4');
INSERT INTO `course` VALUES ('08010009a', '大学日语1', '64', '4');
INSERT INTO `course` VALUES ('08010010a', '大学日语2', '64', '4');
INSERT INTO `course` VALUES ('08010085b', '英语网络自主学习', '16', '1');
INSERT INTO `course` VALUES ('08020003a', '大学英语3', '64', '4');
INSERT INTO `course` VALUES ('08020008a', '大学英语4', '64', '4');
INSERT INTO `course` VALUES ('08020013a', '大学日语4', '64', '4');
INSERT INTO `course` VALUES ('08020037a', '大学日语3', '64', '4');
INSERT INTO `course` VALUES ('09020018a', '马克思主义基本原理概论', '48', '3');
INSERT INTO `course` VALUES ('09030034a', '毛泽东思想和中国特色社会主义理论体系概论1', '48', '3');
INSERT INTO `course` VALUES ('09030035a', '毛泽东思想和中国特色社会主义理论体系概论2', '48', '3');
INSERT INTO `course` VALUES ('09040024b', '思想道德修养与法律基础', '48', '3');
INSERT INTO `course` VALUES ('09050049a', '中国近现代史纲要', '32', '2');
INSERT INTO `course` VALUES ('09130094b', '职业生涯与发展规划', '16', '1');
INSERT INTO `course` VALUES ('09130095b', '就业指导', '8', '1');
INSERT INTO `course` VALUES ('10000002b', '文献检索与利用', '16', '1');
INSERT INTO `course` VALUES ('14000012b', '军事理论', '32', '1');
INSERT INTO `course` VALUES ('14000013b', '军事技能训练', '2', '2');
INSERT INTO `course` VALUES ('15000001b', '心理健康教育', '16', '1');
INSERT INTO `course` VALUES ('16000007b', '形势与政策4', '8', '1');
INSERT INTO `course` VALUES ('16000014b', '形势与政策1', '8', '1');
INSERT INTO `course` VALUES ('16000015b', '形势与政策2', '8', '1');
INSERT INTO `course` VALUES ('16000016b', '形势与政策3', '8', '1');
INSERT INTO `course` VALUES ('16000017b', '形势与政策实践', '16', '1');

-- ----------------------------
-- Table structure for dynamic
-- ----------------------------
DROP TABLE IF EXISTS `dynamic`;
CREATE TABLE `dynamic` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `type` varchar(5) NOT NULL,
  `title` varchar(25) NOT NULL,
  `content` varchar(255) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dynamic
-- ----------------------------

-- ----------------------------
-- Table structure for elective
-- ----------------------------
DROP TABLE IF EXISTS `elective`;
CREATE TABLE `elective` (
  `id` varchar(9) NOT NULL,
  `course` varchar(25) NOT NULL,
  `mark` varchar(25) NOT NULL,
  `hours` int(2) NOT NULL,
  `credits` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of elective
-- ----------------------------
INSERT INTO `elective` VALUES ('01010309b', '船舶与海洋工程概论', '2018-2019-1', '16', '1');
INSERT INTO `elective` VALUES ('04000001b', '毕业设计', '2018-2019-1', '12', '12');
INSERT INTO `elective` VALUES ('04002013b', '经管视野', '2018-2019-1', '1', '1');
INSERT INTO `elective` VALUES ('04010011b', '工业工程导论', '2018-2019-1', '32', '2');
INSERT INTO `elective` VALUES ('04010021b', '管理沟通', '2018-2019-1', '32', '2');
INSERT INTO `elective` VALUES ('04010241b', '物流系统分析与设计', '2018-2019-1', '32', '2');
INSERT INTO `elective` VALUES ('04010302a', '管理学(B)', '2018-2019-1', '48', '3');
INSERT INTO `elective` VALUES ('04010308b', '服务管理', '2018-2019-1', '32', '2');
INSERT INTO `elective` VALUES ('04010311b', '经济法(C)', '2018-2019-1', '32', '2');
INSERT INTO `elective` VALUES ('04010315b', '生产运作管理(D)', '2018-2019-1', '32', '2');
INSERT INTO `elective` VALUES ('04010318b', '市场营销学(D)', '2018-2019-1', '32', '2');
INSERT INTO `elective` VALUES ('04020302a', '现代经济学(B)', '2018-2019-1', '48', '3');
INSERT INTO `elective` VALUES ('04030035b', '成本会计学', '2018-2019-1', '32', '2');
INSERT INTO `elective` VALUES ('04030202b', '财务管理(C)', '2018-2019-1', '48', '3');
INSERT INTO `elective` VALUES ('04030212b', '会计学(B)', '2018-2019-1', '48', '3');
INSERT INTO `elective` VALUES ('04030216a', '应用统计(A)', '2018-2019-1', '48', '3');
INSERT INTO `elective` VALUES ('04040020b', '电子商务概论', '2018-2019-1', '32', '2');
INSERT INTO `elective` VALUES ('04040022a', '电子商务应用开发技术', '2018-2019-1', '64', '4');
INSERT INTO `elective` VALUES ('04040064b', '认识实习', '2018-2019-1', '1', '1');
INSERT INTO `elective` VALUES ('04040076b', '系统工程', '2018-2019-1', '32', '2');
INSERT INTO `elective` VALUES ('04040083a', '运筹学', '2018-2019-1', '64', '4');
INSERT INTO `elective` VALUES ('04040139b', '社会调查', '2018-2019-1', '1', '1');
INSERT INTO `elective` VALUES ('04040140b', '影子工厂实习', '2018-2019-1', '1', '1');
INSERT INTO `elective` VALUES ('04040145b', '专业实习', '2018-2019-1', '4', '4');
INSERT INTO `elective` VALUES ('04040152b', '专业教育1', '2018-2019-1', '4', '1');
INSERT INTO `elective` VALUES ('04040162a', '数据结构', '2018-2019-1', '56', '4');
INSERT INTO `elective` VALUES ('04040163b', '专业教育2', '2018-2019-1', '4', '1');
INSERT INTO `elective` VALUES ('04040165a', '数据库原理与应用(SQL_server)', '2018-2019-1', '64', '4');
INSERT INTO `elective` VALUES ('04040166b', '电子商务应用开发技术课程设计', '2018-2019-1', '2', '2');
INSERT INTO `elective` VALUES ('04040167b', '专业教育3', '2018-2019-1', '4', '1');
INSERT INTO `elective` VALUES ('04040168a', '信息资源管理', '2018-2019-1', '32', '2');
INSERT INTO `elective` VALUES ('04040170b', '经管英语综合训练', '2018-2019-1', '32', '2');
INSERT INTO `elective` VALUES ('04040173a', 'Java程序设计', '2018-2019-1', '48', '3');
INSERT INTO `elective` VALUES ('04040174b', 'UML建模实训', '2018-2019-1', '2', '2');
INSERT INTO `elective` VALUES ('04040175b', '计算机网络技术与应用课程设计', '2018-2019-1', '1', '1');
INSERT INTO `elective` VALUES ('04040177b', '专业教育4', '2018-2019-1', '4', '1');
INSERT INTO `elective` VALUES ('04040180a', '计算机网络技术与应用', '2018-2019-1', '48', '3');
INSERT INTO `elective` VALUES ('04040301b', '大学计算机基础', '2018-2019-1', '48', '3');
INSERT INTO `elective` VALUES ('04040303a', '计算机程序设计语言(VC++)', '2018-2019-1', '72', '5');
INSERT INTO `elective` VALUES ('04040303b', '计算机程序设计实践(VC++)', '2018-2019-1', '2', '2');
INSERT INTO `elective` VALUES ('04040310b', '管理信息系统概论', '2018-2019-1', '40', '3');
INSERT INTO `elective` VALUES ('04040311b', '开发工具实训', '2018-2019-1', '1', '1');
INSERT INTO `elective` VALUES ('04040312a', '企业信息系统及应用(EIS)', '2018-2019-1', '32', '2');
INSERT INTO `elective` VALUES ('04040313b', '数据库原理与应用(SQL_Server)实践', '2018-2019-1', '1', '1');
INSERT INTO `elective` VALUES ('04040314a', '数据挖掘与商务智能技术', '2018-2019-1', '48', '3');
INSERT INTO `elective` VALUES ('04040316b', '信息技术前沿', '2018-2019-1', '32', '2');
INSERT INTO `elective` VALUES ('04040317a', '信息系统分析与设计', '2018-2019-1', '48', '3');
INSERT INTO `elective` VALUES ('04040317b', '信息系统分析与设计课程设计', '2018-2019-1', '2', '2');
INSERT INTO `elective` VALUES ('04040318b', '信息系统项目管理', '2018-2019-1', '32', '2');
INSERT INTO `elective` VALUES ('04040320b', '移动软件开发技术', '2018-2019-1', '32', '2');
INSERT INTO `elective` VALUES ('04040321b', '专业课题研究训练', '2018-2019-1', '32', '2');
INSERT INTO `elective` VALUES ('04060001b', '创业基础', '2018-2019-1', '24', '2');
INSERT INTO `elective` VALUES ('05010026a', '高等数学B1', '2018-2019-1', '88', '6');
INSERT INTO `elective` VALUES ('05010039a', '高等数学A1', '2018-2019-1', '80', '5');
INSERT INTO `elective` VALUES ('05010040a', '高等数学A2', '2018-2019-1', '96', '6');
INSERT INTO `elective` VALUES ('05010041a', '高等数学B2', '2018-2019-1', '104', '7');
INSERT INTO `elective` VALUES ('05030010b', '概率论与数理统计', '2018-2019-1', '48', '3');
INSERT INTO `elective` VALUES ('05030034a', '线性代数', '2018-2019-1', '32', '2');
INSERT INTO `elective` VALUES ('07010002a', '体育1', '2018-2019-1', '32', '1');
INSERT INTO `elective` VALUES ('07010003a', '体育2', '2018-2019-1', '32', '1');
INSERT INTO `elective` VALUES ('07010004a', '体育3', '2018-2019-1', '32', '1');
INSERT INTO `elective` VALUES ('07010005a', '体育4', '2018-2019-1', '32', '1');
INSERT INTO `elective` VALUES ('08010001a', '大学英语1', '2018-2019-1', '64', '4');
INSERT INTO `elective` VALUES ('08010005a', '大学英语2', '2018-2019-1', '64', '4');
INSERT INTO `elective` VALUES ('08010009a', '大学日语1', '2018-2019-1', '64', '4');
INSERT INTO `elective` VALUES ('08010010a', '大学日语2', '2018-2019-1', '64', '4');
INSERT INTO `elective` VALUES ('08010085b', '英语网络自主学习', '2018-2019-1', '16', '1');
INSERT INTO `elective` VALUES ('08020003a', '大学英语3', '2018-2019-1', '64', '4');
INSERT INTO `elective` VALUES ('08020008a', '大学英语4', '2018-2019-1', '64', '4');
INSERT INTO `elective` VALUES ('08020013a', '大学日语4', '2018-2019-1', '64', '4');
INSERT INTO `elective` VALUES ('08020037a', '大学日语3', '2018-2019-1', '64', '4');
INSERT INTO `elective` VALUES ('09020018a', '马克思主义基本原理概论', '2018-2019-1', '48', '3');
INSERT INTO `elective` VALUES ('09030034a', '毛泽东思想和中国特色社会主义理论体系概论1', '2018-2019-1', '48', '3');
INSERT INTO `elective` VALUES ('09030035a', '毛泽东思想和中国特色社会主义理论体系概论2', '2018-2019-1', '48', '3');
INSERT INTO `elective` VALUES ('09040024b', '思想道德修养与法律基础', '2018-2019-1', '48', '3');
INSERT INTO `elective` VALUES ('09050049a', '中国近现代史纲要', '2018-2019-1', '32', '2');
INSERT INTO `elective` VALUES ('09130094b', '职业生涯与发展规划', '2018-2019-1', '16', '1');
INSERT INTO `elective` VALUES ('09130095b', '就业指导', '2018-2019-1', '8', '1');
INSERT INTO `elective` VALUES ('10000002b', '文献检索与利用', '2018-2019-1', '16', '1');
INSERT INTO `elective` VALUES ('14000012b', '军事理论', '2018-2019-1', '32', '1');
INSERT INTO `elective` VALUES ('14000013b', '军事技能训练', '2018-2019-1', '2', '2');
INSERT INTO `elective` VALUES ('15000001b', '心理健康教育', '2018-2019-1', '16', '1');
INSERT INTO `elective` VALUES ('16000007b', '形势与政策4', '2018-2019-1', '8', '1');
INSERT INTO `elective` VALUES ('16000014b', '形势与政策1', '2018-2019-1', '8', '1');
INSERT INTO `elective` VALUES ('16000015b', '形势与政策2', '2018-2019-1', '8', '1');
INSERT INTO `elective` VALUES ('16000016b', '形势与政策3', '2018-2019-1', '8', '1');
INSERT INTO `elective` VALUES ('16000017b', '形势与政策实践', '2018-2019-1', '16', '1');

-- ----------------------------
-- Table structure for entrance
-- ----------------------------
DROP TABLE IF EXISTS `entrance`;
CREATE TABLE `entrance` (
  `time` year(4) NOT NULL,
  PRIMARY KEY (`time`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of entrance
-- ----------------------------
INSERT INTO `entrance` VALUES ('2014');
INSERT INTO `entrance` VALUES ('2015');
INSERT INTO `entrance` VALUES ('2016');
INSERT INTO `entrance` VALUES ('2017');
INSERT INTO `entrance` VALUES ('2018');

-- ----------------------------
-- Table structure for major
-- ----------------------------
DROP TABLE IF EXISTS `major`;
CREATE TABLE `major` (
  `id` int(2) NOT NULL,
  `major` varchar(25) NOT NULL,
  `college` varchar(25) NOT NULL,
  KEY `college` (`college`),
  KEY `major` (`major`),
  CONSTRAINT `major_1` FOREIGN KEY (`college`) REFERENCES `college` (`college`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of major
-- ----------------------------
INSERT INTO `major` VALUES ('1', '船海01专业', '船舶与海洋工程学院');
INSERT INTO `major` VALUES ('2', '船海02专业', '船舶与海洋工程学院');
INSERT INTO `major` VALUES ('3', '船海03专业', '船舶与海洋工程学院');
INSERT INTO `major` VALUES ('4', '船海04专业', '船舶与海洋工程学院');
INSERT INTO `major` VALUES ('5', '船海05专业', '船舶与海洋工程学院');
INSERT INTO `major` VALUES ('1', '机动01专业', '机械与动力工程学院');
INSERT INTO `major` VALUES ('2', '机动02专业', '机械与动力工程学院');
INSERT INTO `major` VALUES ('3', '机动03专业', '机械与动力工程学院');
INSERT INTO `major` VALUES ('4', '机动04专业', '机械与动力工程学院');
INSERT INTO `major` VALUES ('5', '机动05专业', '机械与动力工程学院');
INSERT INTO `major` VALUES ('1', '电信01专业', '电子信息学院');
INSERT INTO `major` VALUES ('2', '电信02专业', '电子信息学院');
INSERT INTO `major` VALUES ('3', '电信03专业', '电子信息学院');
INSERT INTO `major` VALUES ('4', '电信04专业', '电子信息学院');
INSERT INTO `major` VALUES ('5', '电信05专业', '电子信息学院');
INSERT INTO `major` VALUES ('1', '信息管理与信息系统', '经济管理学院');
INSERT INTO `major` VALUES ('2', '经济学', '经济管理学院');
INSERT INTO `major` VALUES ('3', '财务管理', '经济管理学院');
INSERT INTO `major` VALUES ('4', '工业工程', '经济管理学院');
INSERT INTO `major` VALUES ('5', '工商管理', '经济管理学院');
INSERT INTO `major` VALUES ('1', '数理01专业', '数理学院');
INSERT INTO `major` VALUES ('2', '数理02专业', '数理学院');
INSERT INTO `major` VALUES ('3', '数理03专业', '数理学院');
INSERT INTO `major` VALUES ('4', '数理04专业', '数理学院');
INSERT INTO `major` VALUES ('5', '数理05专业', '数理学院');
INSERT INTO `major` VALUES ('1', '材料01专业', '材料科学与工程学院');
INSERT INTO `major` VALUES ('2', '材料02专业', '材料科学与工程学院');
INSERT INTO `major` VALUES ('3', '材料03专业', '材料科学与工程学院');
INSERT INTO `major` VALUES ('4', '材料04专业', '材料科学与工程学院');
INSERT INTO `major` VALUES ('5', '材料05专业', '材料科学与工程学院');
INSERT INTO `major` VALUES ('1', '外语01专业', '外国语学院');
INSERT INTO `major` VALUES ('2', '外语02专业', '外国语学院');
INSERT INTO `major` VALUES ('3', '外语03专业', '外国语学院');
INSERT INTO `major` VALUES ('4', '外语04专业', '外国语学院');
INSERT INTO `major` VALUES ('5', '外语05专业', '外国语学院');
INSERT INTO `major` VALUES ('1', '人文01专业', '人文社科学院');
INSERT INTO `major` VALUES ('2', '人文02专业', '人文社科学院');
INSERT INTO `major` VALUES ('3', '人文03专业', '人文社科学院');
INSERT INTO `major` VALUES ('4', '人文04专业', '人文社科学院');
INSERT INTO `major` VALUES ('5', '人文05专业', '人文社科学院');
INSERT INTO `major` VALUES ('1', '体育01专业', '体育部');
INSERT INTO `major` VALUES ('2', '体育02专业', '体育部');
INSERT INTO `major` VALUES ('3', '体育03专业', '体育部');
INSERT INTO `major` VALUES ('4', '体育04专业', '体育部');
INSERT INTO `major` VALUES ('5', '体育05专业', '体育部');
INSERT INTO `major` VALUES ('1', '生环01专业', '生物与环境工程学院');
INSERT INTO `major` VALUES ('2', '生环02专业', '生物与环境工程学院');
INSERT INTO `major` VALUES ('3', '生环03专业', '生物与环境工程学院');
INSERT INTO `major` VALUES ('4', '生环04专业', '生物与环境工程学院');
INSERT INTO `major` VALUES ('5', '生环05专业', '生物与环境工程学院');
INSERT INTO `major` VALUES ('1', '计工01专业', '计算机科学与工程学院');
INSERT INTO `major` VALUES ('2', '计工02专业', '计算机科学与工程学院');
INSERT INTO `major` VALUES ('3', '计工03专业', '计算机科学与工程学院');
INSERT INTO `major` VALUES ('4', '计工04专业', '计算机科学与工程学院');
INSERT INTO `major` VALUES ('5', '计工05专业', '计算机科学与工程学院');
INSERT INTO `major` VALUES ('1', '成教01专业', '成人教育学院');
INSERT INTO `major` VALUES ('2', '成教02专业', '成人教育学院');
INSERT INTO `major` VALUES ('3', '成教03专业', '成人教育学院');
INSERT INTO `major` VALUES ('4', '成教04专业', '成人教育学院');
INSERT INTO `major` VALUES ('5', '成教05专业', '成人教育学院');

-- ----------------------------
-- Table structure for notice
-- ----------------------------
DROP TABLE IF EXISTS `notice`;
CREATE TABLE `notice` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `type` varchar(5) NOT NULL,
  `id_student` int(9) NOT NULL,
  `title` varchar(25) NOT NULL,
  `content` varchar(255) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `notice_1` (`id_student`),
  CONSTRAINT `notice_1` FOREIGN KEY (`id_student`) REFERENCES `student` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of notice
-- ----------------------------

-- ----------------------------
-- Table structure for pay
-- ----------------------------
DROP TABLE IF EXISTS `pay`;
CREATE TABLE `pay` (
  `id` int(9) NOT NULL,
  `pay` varchar(5) NOT NULL,
  KEY `pay_1` (`id`),
  CONSTRAINT `pay_1` FOREIGN KEY (`id`) REFERENCES `student` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pay
-- ----------------------------
INSERT INTO `pay` VALUES ('181241001', '欠费');
INSERT INTO `pay` VALUES ('181241002', '缴清');
INSERT INTO `pay` VALUES ('181241003', '缴清');
INSERT INTO `pay` VALUES ('181241005', '缴清');
INSERT INTO `pay` VALUES ('181241006', '缴清');
INSERT INTO `pay` VALUES ('181241004', '缴清');
INSERT INTO `pay` VALUES ('181241007', '缴清');
INSERT INTO `pay` VALUES ('181241012', '欠费');
INSERT INTO `pay` VALUES ('181241008', '缴清');
INSERT INTO `pay` VALUES ('181241011', '缴清');
INSERT INTO `pay` VALUES ('181241009', '缴清');
INSERT INTO `pay` VALUES ('181241010', '缴清');
INSERT INTO `pay` VALUES ('181241013', '欠费');
INSERT INTO `pay` VALUES ('181241014', '欠费');
INSERT INTO `pay` VALUES ('181241017', '欠费');
INSERT INTO `pay` VALUES ('181241018', '欠费');
INSERT INTO `pay` VALUES ('181241016', '欠费');
INSERT INTO `pay` VALUES ('181241015', '欠费');
INSERT INTO `pay` VALUES ('181241019', '欠费');
INSERT INTO `pay` VALUES ('181241020', '欠费');

-- ----------------------------
-- Table structure for program
-- ----------------------------
DROP TABLE IF EXISTS `program`;
CREATE TABLE `program` (
  `major` varchar(25) NOT NULL,
  `type` varchar(25) NOT NULL,
  `program` varchar(255) DEFAULT NULL,
  KEY `1` (`major`) USING BTREE,
  CONSTRAINT `program_1` FOREIGN KEY (`major`) REFERENCES `major` (`major`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of program
-- ----------------------------
INSERT INTO `program` VALUES ('信息管理与信息系统', '通识教育基础课程', '05010039a,05010040a,08010001a,08010005a,08020008a,08020003a,01010309b,04040301b,04040303a,04060001b,05030010b,05030034a,07010002a,07010003a,07010004a,07010005a,09020018a,09030034a,09030035a,09040024b,09050049a,09130094b,09130095b,10000002b,14000012b');
INSERT INTO `program` VALUES ('信息管理与信息系统', '学科平台基础课程', '04030035b,04010241b,04010315b,04010311b,04030216a,04040310b,04030212b,04040162a,04030202b,04020302a,04010302a,04040165a,04040170b,04040022a,04040083a,04040020b');
INSERT INTO `program` VALUES ('信息管理与信息系统', '专业课', '04040076b,04040320b,04010308b,04040180a,04040312a,04040314a,04040317a,04040318b,04040168a,04040173a');
INSERT INTO `program` VALUES ('信息管理与信息系统', '实践性环节', '08010085b,04040317b,04040313b,04040311b,04040303b,04040177b,04040175b,04040174b,04040167b,04040166b,04040163b,04040152b,04040145b,04040140b,04040139b,04040064b,14000013b,04000001b,04002013b');

-- ----------------------------
-- Table structure for register
-- ----------------------------
DROP TABLE IF EXISTS `register`;
CREATE TABLE `register` (
  `id` int(9) NOT NULL,
  `mark` varchar(25) NOT NULL,
  `state` varchar(5) NOT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `result` varchar(5) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `id_pay` (`id`),
  CONSTRAINT `register_ibfk_1` FOREIGN KEY (`id`) REFERENCES `student` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of register
-- ----------------------------
INSERT INTO `register` VALUES ('181241001', '2018-2019', '未注册', null, null, '2018-06-11 13:00:26');
INSERT INTO `register` VALUES ('181241002', '2018-2019', '未注册', '延期', null, '2018-06-11 13:04:43');
INSERT INTO `register` VALUES ('181241003', '2018-2019', '未注册', '延期', null, '2018-06-11 13:04:44');
INSERT INTO `register` VALUES ('181241004', '2018-2019', '未注册', '延期', null, '2018-06-11 13:04:45');
INSERT INTO `register` VALUES ('181241005', '2018-2019', '未注册', '延期', null, '2018-06-11 13:04:47');
INSERT INTO `register` VALUES ('181241006', '2018-2019', '未注册', '延期', null, '2018-06-11 13:04:48');
INSERT INTO `register` VALUES ('181241007', '2018-2019', '未注册', '延期', null, '2018-06-11 13:04:49');
INSERT INTO `register` VALUES ('181241008', '2018-2019', '未注册', '延期', null, '2018-06-11 13:04:34');
INSERT INTO `register` VALUES ('181241009', '2018-2019', '未注册', '延期', null, '2018-06-11 13:04:49');
INSERT INTO `register` VALUES ('181241010', '2018-2019', '未注册', '延期', null, '2018-06-11 13:04:51');
INSERT INTO `register` VALUES ('181241011', '2018-2019', '未注册', '延期', null, '2018-06-11 13:04:52');
INSERT INTO `register` VALUES ('181241012', '2018-2019', '未注册', null, null, '2018-06-11 13:00:26');
INSERT INTO `register` VALUES ('181241013', '2018-2019', '未注册', null, null, '2018-06-11 13:00:26');
INSERT INTO `register` VALUES ('181241014', '2018-2019', '未注册', null, null, '2018-06-11 13:00:26');
INSERT INTO `register` VALUES ('181241015', '2018-2019', '未注册', null, null, '2018-06-11 13:00:26');
INSERT INTO `register` VALUES ('181241016', '2018-2019', '未注册', null, null, '2018-06-11 13:00:26');
INSERT INTO `register` VALUES ('181241017', '2018-2019', '未注册', null, null, '2018-06-11 13:00:26');
INSERT INTO `register` VALUES ('181241018', '2018-2019', '未注册', null, null, '2018-06-11 13:00:26');
INSERT INTO `register` VALUES ('181241019', '2018-2019', '未注册', null, null, '2018-06-11 13:00:26');
INSERT INTO `register` VALUES ('181241020', '2018-2019', '未注册', null, null, '2018-06-11 13:00:26');

-- ----------------------------
-- Table structure for schedule
-- ----------------------------
DROP TABLE IF EXISTS `schedule`;
CREATE TABLE `schedule` (
  `id_student` int(9) NOT NULL,
  `mark` varchar(25) NOT NULL,
  `id_course` varchar(9) NOT NULL,
  KEY `schedule_1` (`id_student`),
  KEY `schedule_2` (`id_course`),
  CONSTRAINT `schedule_1` FOREIGN KEY (`id_student`) REFERENCES `student` (`id`),
  CONSTRAINT `schedule_2` FOREIGN KEY (`id_course`) REFERENCES `elective` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of schedule
-- ----------------------------
INSERT INTO `schedule` VALUES ('181241001', '2018-2019-1', '04000001b');
INSERT INTO `schedule` VALUES ('181241001', '2018-2019-1', '05010040a');
INSERT INTO `schedule` VALUES ('181241001', '2018-2019-1', '08010001a');
INSERT INTO `schedule` VALUES ('181241001', '2018-2019-1', '04040301b');
INSERT INTO `schedule` VALUES ('181241001', '2018-2019-1', '08010005a');
INSERT INTO `schedule` VALUES ('181241001', '2018-2019-1', '05010039a');
INSERT INTO `schedule` VALUES ('181241001', '2018-2019-1', '01010309b');
INSERT INTO `schedule` VALUES ('181241001', '2018-2019-1', '04040303a');
INSERT INTO `schedule` VALUES ('181241001', '2018-2019-1', '04060001b');
INSERT INTO `schedule` VALUES ('181241002', '2018-2019-1', '05010039a');
INSERT INTO `schedule` VALUES ('181241001', '2018-2019-1', '05030034a');
INSERT INTO `schedule` VALUES ('181241002', '2018-2019-1', '05010040a');
INSERT INTO `schedule` VALUES ('181241001', '2018-2019-1', '05030010b');
INSERT INTO `schedule` VALUES ('181241002', '2018-2019-1', '08010001a');
INSERT INTO `schedule` VALUES ('181241002', '2018-2019-1', '04040301b');
INSERT INTO `schedule` VALUES ('181241002', '2018-2019-1', '04040303a');
INSERT INTO `schedule` VALUES ('181241002', '2018-2019-1', '04060001b');
INSERT INTO `schedule` VALUES ('181241002', '2018-2019-1', '01010309b');
INSERT INTO `schedule` VALUES ('181241002', '2018-2019-1', '08010005a');
INSERT INTO `schedule` VALUES ('181241002', '2018-2019-1', '05030010b');
INSERT INTO `schedule` VALUES ('181241002', '2018-2019-1', '05030034a');

-- ----------------------------
-- Table structure for score
-- ----------------------------
DROP TABLE IF EXISTS `score`;
CREATE TABLE `score` (
  `mark` varchar(25) NOT NULL,
  `id_student` int(9) NOT NULL,
  `id_course` varchar(9) NOT NULL,
  `course` varchar(25) NOT NULL,
  `hours` int(2) NOT NULL,
  `credits` int(2) NOT NULL,
  `score` varchar(5) NOT NULL,
  `acquired` int(2) NOT NULL,
  KEY `score_1` (`id_student`),
  CONSTRAINT `score_1` FOREIGN KEY (`id_student`) REFERENCES `student` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of score
-- ----------------------------
INSERT INTO `score` VALUES ('2018-2019-1', '181241001', '05010039a', '高等数学A1', '80', '5', '良', '5');
INSERT INTO `score` VALUES ('2018-2019-1', '181241001', '05010040a', '高等数学A2', '96', '6', '优', '6');
INSERT INTO `score` VALUES ('2018-2019-1', '181241001', '08010001a', '大学英语1', '64', '4', '及格', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241001', '04040303a', '计算机程序设计语言(VC++)', '72', '5', '中', '5');
INSERT INTO `score` VALUES ('2018-2019-1', '181241001', '04040301b', '大学计算机基础', '48', '3', '通过', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241001', '01010309b', '船舶与海洋工程概论', '16', '1', '不及格', '0');
INSERT INTO `score` VALUES ('2018-2019-1', '181241001', '04060001b', '创业基础', '24', '2', '不通过', '0');
INSERT INTO `score` VALUES ('2018-2019-1', '181241001', '05030010b', '概率论与数理统计', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241002', '05010040a', '高等数学A2', '96', '6', '70', '6');
INSERT INTO `score` VALUES ('2018-2019-1', '181241002', '05010039a', '高等数学A1', '80', '5', '71', '5');
INSERT INTO `score` VALUES ('2018-2019-1', '181241001', '05030034a', '线性代数', '32', '2', '70', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241001', '08010005a', '大学英语2', '64', '4', '50', '0');
INSERT INTO `score` VALUES ('2018-2019-1', '181241002', '04040303a', '计算机程序设计语言(VC++)', '72', '5', '72', '5');
INSERT INTO `score` VALUES ('2018-2019-1', '181241002', '08010001a', '大学英语1', '64', '4', '73', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241002', '01010309b', '船舶与海洋工程概论', '16', '1', '74', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241002', '04060001b', '创业基础', '24', '2', '76', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241002', '08010005a', '大学英语2', '64', '4', '77', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241002', '04040301b', '大学计算机基础', '48', '3', '75', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241002', '05030010b', '概率论与数理统计', '48', '3', '78', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241002', '05030034a', '线性代数', '32', '2', '79', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241003', '05010040a', '高等数学A2', '96', '6', '优', '6');
INSERT INTO `score` VALUES ('2018-2019-1', '181241003', '05010039a', '高等数学A1', '80', '5', '良', '5');
INSERT INTO `score` VALUES ('2018-2019-1', '181241003', '08010001a', '大学英语1', '64', '4', '及格', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241003', '04040303a', '计算机程序设计语言(VC++)', '72', '5', '中', '5');
INSERT INTO `score` VALUES ('2018-2019-1', '181241003', '01010309b', '船舶与海洋工程概论', '16', '1', '不及格', '0');
INSERT INTO `score` VALUES ('2018-2019-1', '181241003', '04040301b', '大学计算机基础', '48', '3', '通过', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241003', '04060001b', '创业基础', '24', '2', '不通过', '0');
INSERT INTO `score` VALUES ('2018-2019-1', '181241003', '08010005a', '大学英语2', '64', '4', '50', '0');
INSERT INTO `score` VALUES ('2018-2019-1', '181241003', '05030034a', '线性代数', '32', '2', '70', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241003', '05030010b', '概率论与数理统计', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241004', '05010040a', '高等数学A2', '96', '6', '70', '6');
INSERT INTO `score` VALUES ('2018-2019-1', '181241004', '05010039a', '高等数学A1', '80', '5', '71', '5');
INSERT INTO `score` VALUES ('2018-2019-1', '181241004', '04040303a', '计算机程序设计语言(VC++)', '72', '5', '72', '5');
INSERT INTO `score` VALUES ('2018-2019-1', '181241004', '08010001a', '大学英语1', '64', '4', '73', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241004', '01010309b', '船舶与海洋工程概论', '16', '1', '74', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241004', '04040301b', '大学计算机基础', '48', '3', '75', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241004', '04060001b', '创业基础', '24', '2', '76', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241004', '08010005a', '大学英语2', '64', '4', '77', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241004', '05030010b', '概率论与数理统计', '48', '3', '78', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241004', '05030034a', '线性代数', '32', '2', '79', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241007', '05010040a', '高等数学A2', '96', '6', '50', '0');
INSERT INTO `score` VALUES ('2018-2019-1', '181241007', '04040303a', '计算机程序设计语言(VC++)', '72', '5', '60', '5');
INSERT INTO `score` VALUES ('2018-2019-1', '181241007', '01010309b', '船舶与海洋工程概论', '16', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241007', '04040301b', '大学计算机基础', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241007', '08010001a', '大学英语1', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241007', '05010039a', '高等数学A1', '80', '5', '50', '0');
INSERT INTO `score` VALUES ('2018-2019-1', '181241007', '04060001b', '创业基础', '24', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241008', '05010040a', '高等数学A2', '96', '6', '50', '0');
INSERT INTO `score` VALUES ('2018-2019-1', '181241008', '08010001a', '大学英语1', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241008', '01010309b', '船舶与海洋工程概论', '16', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241008', '05010039a', '高等数学A1', '80', '5', '50', '0');
INSERT INTO `score` VALUES ('2018-2019-1', '181241008', '04040303a', '计算机程序设计语言(VC++)', '72', '5', '60', '5');
INSERT INTO `score` VALUES ('2018-2019-1', '181241008', '04040301b', '大学计算机基础', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241008', '04060001b', '创业基础', '24', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241009', '08010001a', '大学英语1', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241009', '04040303a', '计算机程序设计语言(VC++)', '72', '5', '60', '5');
INSERT INTO `score` VALUES ('2018-2019-1', '181241009', '05010039a', '高等数学A1', '80', '5', '50', '0');
INSERT INTO `score` VALUES ('2018-2019-1', '181241009', '05010040a', '高等数学A2', '96', '6', '50', '0');
INSERT INTO `score` VALUES ('2018-2019-1', '181241009', '01010309b', '船舶与海洋工程概论', '16', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241009', '04040301b', '大学计算机基础', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241010', '04040303a', '计算机程序设计语言(VC++)', '72', '5', '60', '5');
INSERT INTO `score` VALUES ('2018-2019-1', '181241010', '05010039a', '高等数学A1', '80', '5', '50', '0');
INSERT INTO `score` VALUES ('2018-2019-1', '181241010', '05010040a', '高等数学A2', '96', '6', '50', '0');
INSERT INTO `score` VALUES ('2018-2019-1', '181241009', '04060001b', '创业基础', '24', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241010', '08010001a', '大学英语1', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241010', '01010309b', '船舶与海洋工程概论', '16', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241010', '04040301b', '大学计算机基础', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241011', '05010039a', '高等数学A1', '80', '5', '50', '0');
INSERT INTO `score` VALUES ('2018-2019-1', '181241010', '04060001b', '创业基础', '24', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241011', '05010040a', '高等数学A2', '96', '6', '50', '0');
INSERT INTO `score` VALUES ('2018-2019-1', '181241011', '04040303a', '计算机程序设计语言(VC++)', '72', '5', '60', '5');
INSERT INTO `score` VALUES ('2018-2019-1', '181241011', '08010001a', '大学英语1', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241011', '01010309b', '船舶与海洋工程概论', '16', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241011', '04060001b', '创业基础', '24', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241012', '05010040a', '高等数学A2', '96', '6', '50', '0');
INSERT INTO `score` VALUES ('2018-2019-1', '181241011', '04040301b', '大学计算机基础', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241012', '05010039a', '高等数学A1', '80', '5', '50', '0');
INSERT INTO `score` VALUES ('2018-2019-1', '181241012', '04040303a', '计算机程序设计语言(VC++)', '72', '5', '60', '5');
INSERT INTO `score` VALUES ('2018-2019-1', '181241012', '01010309b', '船舶与海洋工程概论', '16', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241012', '04040301b', '大学计算机基础', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241012', '04060001b', '创业基础', '24', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241012', '08010001a', '大学英语1', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241013', '05010040a', '高等数学A2', '96', '6', '50', '0');
INSERT INTO `score` VALUES ('2018-2019-1', '181241013', '05010039a', '高等数学A1', '80', '5', '50', '0');
INSERT INTO `score` VALUES ('2018-2019-1', '181241013', '04040303a', '计算机程序设计语言(VC++)', '72', '5', '60', '5');
INSERT INTO `score` VALUES ('2018-2019-1', '181241013', '01010309b', '船舶与海洋工程概论', '16', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241013', '08010001a', '大学英语1', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241013', '04040301b', '大学计算机基础', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241013', '04060001b', '创业基础', '24', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241014', '05010040a', '高等数学A2', '96', '6', '50', '0');
INSERT INTO `score` VALUES ('2018-2019-1', '181241014', '05010039a', '高等数学A1', '80', '5', '50', '0');
INSERT INTO `score` VALUES ('2018-2019-1', '181241014', '08010001a', '大学英语1', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241014', '04040303a', '计算机程序设计语言(VC++)', '72', '5', '60', '5');
INSERT INTO `score` VALUES ('2018-2019-1', '181241014', '01010309b', '船舶与海洋工程概论', '16', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241014', '04040301b', '大学计算机基础', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241015', '04040303a', '计算机程序设计语言(VC++)', '72', '5', '60', '5');
INSERT INTO `score` VALUES ('2018-2019-1', '181241014', '04060001b', '创业基础', '24', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241015', '05010040a', '高等数学A2', '96', '6', '50', '0');
INSERT INTO `score` VALUES ('2018-2019-1', '181241015', '08010001a', '大学英语1', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241015', '05010039a', '高等数学A1', '80', '5', '50', '0');
INSERT INTO `score` VALUES ('2018-2019-1', '181241015', '01010309b', '船舶与海洋工程概论', '16', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241015', '04040301b', '大学计算机基础', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241015', '04060001b', '创业基础', '24', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241016', '05010040a', '高等数学A2', '96', '6', '50', '0');
INSERT INTO `score` VALUES ('2018-2019-1', '181241016', '05010039a', '高等数学A1', '80', '5', '50', '0');
INSERT INTO `score` VALUES ('2018-2019-1', '181241016', '04040303a', '计算机程序设计语言(VC++)', '72', '5', '60', '5');
INSERT INTO `score` VALUES ('2018-2019-1', '181241016', '08010001a', '大学英语1', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241016', '04060001b', '创业基础', '24', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241017', '05010039a', '高等数学A1', '80', '5', '50', '0');
INSERT INTO `score` VALUES ('2018-2019-1', '181241017', '05010040a', '高等数学A2', '96', '6', '50', '0');
INSERT INTO `score` VALUES ('2018-2019-1', '181241016', '04040301b', '大学计算机基础', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241016', '01010309b', '船舶与海洋工程概论', '16', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241017', '04040303a', '计算机程序设计语言(VC++)', '72', '5', '60', '5');
INSERT INTO `score` VALUES ('2018-2019-1', '181241017', '08010001a', '大学英语1', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241017', '01010309b', '船舶与海洋工程概论', '16', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241018', '05010040a', '高等数学A2', '96', '6', '50', '0');
INSERT INTO `score` VALUES ('2018-2019-1', '181241017', '04040301b', '大学计算机基础', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241017', '04060001b', '创业基础', '24', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241018', '05010039a', '高等数学A1', '80', '5', '50', '0');
INSERT INTO `score` VALUES ('2018-2019-1', '181241018', '04040303a', '计算机程序设计语言(VC++)', '72', '5', '60', '5');
INSERT INTO `score` VALUES ('2018-2019-1', '181241018', '04040301b', '大学计算机基础', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241018', '04060001b', '创业基础', '24', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241018', '01010309b', '船舶与海洋工程概论', '16', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241018', '08010001a', '大学英语1', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241019', '05010040a', '高等数学A2', '96', '6', '50', '0');
INSERT INTO `score` VALUES ('2018-2019-1', '181241019', '05010039a', '高等数学A1', '80', '5', '50', '0');
INSERT INTO `score` VALUES ('2018-2019-1', '181241019', '04040303a', '计算机程序设计语言(VC++)', '72', '5', '60', '5');
INSERT INTO `score` VALUES ('2018-2019-1', '181241019', '08010001a', '大学英语1', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241019', '04040301b', '大学计算机基础', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241019', '01010309b', '船舶与海洋工程概论', '16', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241019', '04060001b', '创业基础', '24', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241020', '05010040a', '高等数学A2', '96', '6', '50', '0');
INSERT INTO `score` VALUES ('2018-2019-1', '181241020', '05010039a', '高等数学A1', '80', '5', '50', '0');
INSERT INTO `score` VALUES ('2018-2019-1', '181241020', '04040303a', '计算机程序设计语言(VC++)', '72', '5', '60', '5');
INSERT INTO `score` VALUES ('2018-2019-1', '181241020', '01010309b', '船舶与海洋工程概论', '16', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241020', '08010001a', '大学英语1', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241020', '04040301b', '大学计算机基础', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241020', '04060001b', '创业基础', '24', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '08020008a', '大学英语4', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '08010001a', '大学英语1', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '05010040a', '高等数学A2', '96', '6', '60', '6');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '05010039a', '高等数学A1', '80', '5', '60', '5');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '08020003a', '大学英语3', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '08010005a', '大学英语2', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '01010309b', '船舶与海洋工程概论', '16', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '05030034a', '线性代数', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04060001b', '创业基础', '24', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040303a', '计算机程序设计语言(VC++)', '72', '5', '60', '5');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040301b', '大学计算机基础', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '05030010b', '概率论与数理统计', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '07010002a', '体育1', '32', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '07010005a', '体育4', '32', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '09030034a', '毛泽东思想和中国特色社会主义理论体系概论1', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '07010003a', '体育2', '32', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '07010004a', '体育3', '32', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '09020018a', '马克思主义基本原理概论', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '09030035a', '毛泽东思想和中国特色社会主义理论体系概论2', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '09040024b', '思想道德修养与法律基础', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '09050049a', '中国近现代史纲要', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '09130095b', '就业指导', '8', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '10000002b', '文献检索与利用', '16', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '09130094b', '职业生涯与发展规划', '16', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04010315b', '生产运作管理(D)', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '14000012b', '军事理论', '32', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04030035b', '成本会计学', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04030216a', '应用统计(A)', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04010241b', '物流系统分析与设计', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04010311b', '经济法(C)', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040310b', '管理信息系统概论', '40', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04030212b', '会计学(B)', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040162a', '数据结构', '56', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04030202b', '财务管理(C)', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04020302a', '现代经济学(B)', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04010302a', '管理学(B)', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040165a', '数据库原理与应用(SQL_server)', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040170b', '经管英语综合训练', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040022a', '电子商务应用开发技术', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040020b', '电子商务概论', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040076b', '系统工程', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040083a', '运筹学', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '08020008a', '大学英语4', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '08010001a', '大学英语1', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '08010005a', '大学英语2', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '08020003a', '大学英语3', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '05010039a', '高等数学A1', '80', '5', '60', '5');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '05010040a', '高等数学A2', '96', '6', '60', '6');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '01010309b', '船舶与海洋工程概论', '16', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040301b', '大学计算机基础', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040303a', '计算机程序设计语言(VC++)', '72', '5', '60', '5');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '05030034a', '线性代数', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '05030010b', '概率论与数理统计', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04060001b', '创业基础', '24', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '07010002a', '体育1', '32', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '07010005a', '体育4', '32', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '07010003a', '体育2', '32', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '07010004a', '体育3', '32', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '09030034a', '毛泽东思想和中国特色社会主义理论体系概论1', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '09020018a', '马克思主义基本原理概论', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '09030035a', '毛泽东思想和中国特色社会主义理论体系概论2', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '09040024b', '思想道德修养与法律基础', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '09050049a', '中国近现代史纲要', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '09130095b', '就业指导', '8', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '09130094b', '职业生涯与发展规划', '16', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '10000002b', '文献检索与利用', '16', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04010315b', '生产运作管理(D)', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '14000012b', '军事理论', '32', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '08020008a', '大学英语4', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '08010001a', '大学英语1', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '08010005a', '大学英语2', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '08020003a', '大学英语3', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '05010040a', '高等数学A2', '96', '6', '60', '6');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '05010039a', '高等数学A1', '80', '5', '60', '5');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '01010309b', '船舶与海洋工程概论', '16', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040301b', '大学计算机基础', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040303a', '计算机程序设计语言(VC++)', '72', '5', '60', '5');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '05030034a', '线性代数', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04060001b', '创业基础', '24', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '05030010b', '概率论与数理统计', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '07010002a', '体育1', '32', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '07010005a', '体育4', '32', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '07010003a', '体育2', '32', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '07010004a', '体育3', '32', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '09030034a', '毛泽东思想和中国特色社会主义理论体系概论1', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '09020018a', '马克思主义基本原理概论', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '09030035a', '毛泽东思想和中国特色社会主义理论体系概论2', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '09130094b', '职业生涯与发展规划', '16', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '09040024b', '思想道德修养与法律基础', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '09050049a', '中国近现代史纲要', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '09130095b', '就业指导', '8', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '10000002b', '文献检索与利用', '16', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04010315b', '生产运作管理(D)', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04030216a', '应用统计(A)', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '14000012b', '军事理论', '32', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04030035b', '成本会计学', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04010241b', '物流系统分析与设计', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04010311b', '经济法(C)', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040310b', '管理信息系统概论', '40', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04030212b', '会计学(B)', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040162a', '数据结构', '56', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04020302a', '现代经济学(B)', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04030202b', '财务管理(C)', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04010302a', '管理学(B)', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040165a', '数据库原理与应用(SQL_server)', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040170b', '经管英语综合训练', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040022a', '电子商务应用开发技术', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040020b', '电子商务概论', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040076b', '系统工程', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040083a', '运筹学', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04010308b', '服务管理', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040180a', '计算机网络技术与应用', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040320b', '移动软件开发技术', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040314a', '数据挖掘与商务智能技术', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040317a', '信息系统分析与设计', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040312a', '企业信息系统及应用(EIS)', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040168a', '信息资源管理', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040318b', '信息系统项目管理', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040173a', 'Java程序设计', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '08020008a', '大学英语4', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '08010001a', '大学英语1', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '08010005a', '大学英语2', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '08020003a', '大学英语3', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '05010039a', '高等数学A1', '80', '5', '60', '5');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '01010309b', '船舶与海洋工程概论', '16', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '05010040a', '高等数学A2', '96', '6', '60', '6');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040301b', '大学计算机基础', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040303a', '计算机程序设计语言(VC++)', '72', '5', '60', '5');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '05030034a', '线性代数', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '07010002a', '体育1', '32', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04060001b', '创业基础', '24', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '05030010b', '概率论与数理统计', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '07010005a', '体育4', '32', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '07010003a', '体育2', '32', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '07010004a', '体育3', '32', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '09030034a', '毛泽东思想和中国特色社会主义理论体系概论1', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '09030035a', '毛泽东思想和中国特色社会主义理论体系概论2', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '09020018a', '马克思主义基本原理概论', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '09040024b', '思想道德修养与法律基础', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '09050049a', '中国近现代史纲要', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '09130094b', '职业生涯与发展规划', '16', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '09130095b', '就业指导', '8', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04010315b', '生产运作管理(D)', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '10000002b', '文献检索与利用', '16', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '14000012b', '军事理论', '32', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04030035b', '成本会计学', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04030216a', '应用统计(A)', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04010241b', '物流系统分析与设计', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04010311b', '经济法(C)', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040310b', '管理信息系统概论', '40', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04030212b', '会计学(B)', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040162a', '数据结构', '56', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04020302a', '现代经济学(B)', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04030202b', '财务管理(C)', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04010302a', '管理学(B)', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040165a', '数据库原理与应用(SQL_server)', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040170b', '经管英语综合训练', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040022a', '电子商务应用开发技术', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040020b', '电子商务概论', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040076b', '系统工程', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040083a', '运筹学', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04010308b', '服务管理', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040180a', '计算机网络技术与应用', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040320b', '移动软件开发技术', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040314a', '数据挖掘与商务智能技术', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040312a', '企业信息系统及应用(EIS)', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040168a', '信息资源管理', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040317a', '信息系统分析与设计', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040318b', '信息系统项目管理', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040173a', 'Java程序设计', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040317b', '信息系统分析与设计课程设计', '2', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040311b', '开发工具实训', '1', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '08010085b', '英语网络自主学习', '16', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040313b', '数据库原理与应用(SQL_Server)实践', '1', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040303b', '计算机程序设计实践(VC++)', '2', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040175b', '计算机网络技术与应用课程设计', '1', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040177b', '专业教育4', '4', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040174b', 'UML建模实训', '2', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040167b', '专业教育3', '4', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040166b', '电子商务应用开发技术课程设计', '2', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040163b', '专业教育2', '4', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040152b', '专业教育1', '4', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040139b', '社会调查', '1', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040140b', '影子工厂实习', '1', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040145b', '专业实习', '4', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04040064b', '认识实习', '1', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '14000013b', '军事技能训练', '2', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04000001b', '毕业设计', '12', '12', '60', '12');
INSERT INTO `score` VALUES ('2018-2019-1', '181241005', '04002013b', '经管视野', '1', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '08020008a', '大学英语4', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '08010001a', '大学英语1', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '08010005a', '大学英语2', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '08020003a', '大学英语3', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '05010040a', '高等数学A2', '96', '6', '60', '6');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '05010039a', '高等数学A1', '80', '5', '60', '5');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '01010309b', '船舶与海洋工程概论', '16', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040301b', '大学计算机基础', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040303a', '计算机程序设计语言(VC++)', '72', '5', '60', '5');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '05030034a', '线性代数', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04060001b', '创业基础', '24', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '05030010b', '概率论与数理统计', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '07010002a', '体育1', '32', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '07010003a', '体育2', '32', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '07010005a', '体育4', '32', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '07010004a', '体育3', '32', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '09030034a', '毛泽东思想和中国特色社会主义理论体系概论1', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '09020018a', '马克思主义基本原理概论', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '09040024b', '思想道德修养与法律基础', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '09050049a', '中国近现代史纲要', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '09030035a', '毛泽东思想和中国特色社会主义理论体系概论2', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '09130094b', '职业生涯与发展规划', '16', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '09130095b', '就业指导', '8', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '10000002b', '文献检索与利用', '16', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '14000012b', '军事理论', '32', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04010315b', '生产运作管理(D)', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04030035b', '成本会计学', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04030216a', '应用统计(A)', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04010241b', '物流系统分析与设计', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04010311b', '经济法(C)', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040310b', '管理信息系统概论', '40', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04030212b', '会计学(B)', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040162a', '数据结构', '56', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04020302a', '现代经济学(B)', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04030202b', '财务管理(C)', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04010302a', '管理学(B)', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040165a', '数据库原理与应用(SQL_server)', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040022a', '电子商务应用开发技术', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040170b', '经管英语综合训练', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040020b', '电子商务概论', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040076b', '系统工程', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040083a', '运筹学', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '08020008a', '大学英语4', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '08010005a', '大学英语2', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '08010001a', '大学英语1', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '08020003a', '大学英语3', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '05010040a', '高等数学A2', '96', '6', '60', '6');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '05010039a', '高等数学A1', '80', '5', '60', '5');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '01010309b', '船舶与海洋工程概论', '16', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040301b', '大学计算机基础', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040303a', '计算机程序设计语言(VC++)', '72', '5', '60', '5');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '05030034a', '线性代数', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04060001b', '创业基础', '24', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '05030010b', '概率论与数理统计', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '07010002a', '体育1', '32', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '07010003a', '体育2', '32', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '07010005a', '体育4', '32', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '07010004a', '体育3', '32', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '09030034a', '毛泽东思想和中国特色社会主义理论体系概论1', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '09020018a', '马克思主义基本原理概论', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '09030035a', '毛泽东思想和中国特色社会主义理论体系概论2', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '09040024b', '思想道德修养与法律基础', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '09050049a', '中国近现代史纲要', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '09130094b', '职业生涯与发展规划', '16', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '09130095b', '就业指导', '8', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '10000002b', '文献检索与利用', '16', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04010315b', '生产运作管理(D)', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '14000012b', '军事理论', '32', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '08020008a', '大学英语4', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '08010001a', '大学英语1', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '08010005a', '大学英语2', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '08020003a', '大学英语3', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '05010040a', '高等数学A2', '96', '6', '60', '6');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '05010039a', '高等数学A1', '80', '5', '60', '5');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '01010309b', '船舶与海洋工程概论', '16', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040301b', '大学计算机基础', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040303a', '计算机程序设计语言(VC++)', '72', '5', '60', '5');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '05030034a', '线性代数', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04060001b', '创业基础', '24', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '05030010b', '概率论与数理统计', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '07010002a', '体育1', '32', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '07010005a', '体育4', '32', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '07010003a', '体育2', '32', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '07010004a', '体育3', '32', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '09030034a', '毛泽东思想和中国特色社会主义理论体系概论1', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '09020018a', '马克思主义基本原理概论', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '09030035a', '毛泽东思想和中国特色社会主义理论体系概论2', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '09040024b', '思想道德修养与法律基础', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '09050049a', '中国近现代史纲要', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '09130094b', '职业生涯与发展规划', '16', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '09130095b', '就业指导', '8', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04010315b', '生产运作管理(D)', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '10000002b', '文献检索与利用', '16', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '14000012b', '军事理论', '32', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04030035b', '成本会计学', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04030216a', '应用统计(A)', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04010241b', '物流系统分析与设计', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040310b', '管理信息系统概论', '40', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04010311b', '经济法(C)', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04030212b', '会计学(B)', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040162a', '数据结构', '56', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04020302a', '现代经济学(B)', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04030202b', '财务管理(C)', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040165a', '数据库原理与应用(SQL_server)', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04010302a', '管理学(B)', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040170b', '经管英语综合训练', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040022a', '电子商务应用开发技术', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040020b', '电子商务概论', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040076b', '系统工程', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040083a', '运筹学', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04010308b', '服务管理', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040180a', '计算机网络技术与应用', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040320b', '移动软件开发技术', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040314a', '数据挖掘与商务智能技术', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040317a', '信息系统分析与设计', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040312a', '企业信息系统及应用(EIS)', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040168a', '信息资源管理', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040318b', '信息系统项目管理', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040173a', 'Java程序设计', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '08020008a', '大学英语4', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '08010001a', '大学英语1', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '08010005a', '大学英语2', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '08020003a', '大学英语3', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '05010040a', '高等数学A2', '96', '6', '60', '6');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '05010039a', '高等数学A1', '80', '5', '60', '5');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '01010309b', '船舶与海洋工程概论', '16', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040301b', '大学计算机基础', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '05030034a', '线性代数', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040303a', '计算机程序设计语言(VC++)', '72', '5', '60', '5');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04060001b', '创业基础', '24', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '05030010b', '概率论与数理统计', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '07010002a', '体育1', '32', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '07010005a', '体育4', '32', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '07010004a', '体育3', '32', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '07010003a', '体育2', '32', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '09030034a', '毛泽东思想和中国特色社会主义理论体系概论1', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '09020018a', '马克思主义基本原理概论', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '09030035a', '毛泽东思想和中国特色社会主义理论体系概论2', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '09040024b', '思想道德修养与法律基础', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '09050049a', '中国近现代史纲要', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '09130094b', '职业生涯与发展规划', '16', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '09130095b', '就业指导', '8', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '10000002b', '文献检索与利用', '16', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04010315b', '生产运作管理(D)', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '14000012b', '军事理论', '32', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04030035b', '成本会计学', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04030216a', '应用统计(A)', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04010241b', '物流系统分析与设计', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04010311b', '经济法(C)', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040310b', '管理信息系统概论', '40', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04030212b', '会计学(B)', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040162a', '数据结构', '56', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04020302a', '现代经济学(B)', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04030202b', '财务管理(C)', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04010302a', '管理学(B)', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040165a', '数据库原理与应用(SQL_server)', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040170b', '经管英语综合训练', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040022a', '电子商务应用开发技术', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040020b', '电子商务概论', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040076b', '系统工程', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040083a', '运筹学', '64', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04010308b', '服务管理', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040180a', '计算机网络技术与应用', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040314a', '数据挖掘与商务智能技术', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040320b', '移动软件开发技术', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040317a', '信息系统分析与设计', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040312a', '企业信息系统及应用(EIS)', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040168a', '信息资源管理', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040318b', '信息系统项目管理', '32', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040173a', 'Java程序设计', '48', '3', '60', '3');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040317b', '信息系统分析与设计课程设计', '2', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040313b', '数据库原理与应用(SQL_Server)实践', '1', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '08010085b', '英语网络自主学习', '16', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040311b', '开发工具实训', '1', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040303b', '计算机程序设计实践(VC++)', '2', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040175b', '计算机网络技术与应用课程设计', '1', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040177b', '专业教育4', '4', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040167b', '专业教育3', '4', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040174b', 'UML建模实训', '2', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040166b', '电子商务应用开发技术课程设计', '2', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040163b', '专业教育2', '4', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040152b', '专业教育1', '4', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040139b', '社会调查', '1', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040145b', '专业实习', '4', '4', '60', '4');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040140b', '影子工厂实习', '1', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04040064b', '认识实习', '1', '1', '60', '1');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '14000013b', '军事技能训练', '2', '2', '60', '2');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04000001b', '毕业设计', '12', '12', '60', '12');
INSERT INTO `score` VALUES ('2018-2019-1', '181241006', '04002013b', '经管视野', '1', '1', '60', '1');

-- ----------------------------
-- Table structure for setup
-- ----------------------------
DROP TABLE IF EXISTS `setup`;
CREATE TABLE `setup` (
  `id` int(2) NOT NULL,
  `name` varchar(25) NOT NULL,
  `state` varchar(5) NOT NULL DEFAULT '关闭',
  `mark` varchar(25) NOT NULL,
  `startTime` datetime NOT NULL,
  `endTime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of setup
-- ----------------------------
INSERT INTO `setup` VALUES ('0', '学期注册', '运行', '2018-2019-1', '2018-05-09 13:00:00', '2018-05-24 13:00:00');
INSERT INTO `setup` VALUES ('1', '学籍异动', '运行', '', '2018-05-10 12:25:00', '2018-05-19 12:25:00');
INSERT INTO `setup` VALUES ('2', '学期选课', '运行', '2018-2019-1', '2018-05-16 22:48:00', '2018-05-26 22:49:00');
INSERT INTO `setup` VALUES ('3', '学业预警', '关闭', '2018-2019-1', '2018-05-10 23:59:36', '0000-00-00 00:00:00');
INSERT INTO `setup` VALUES ('4', '毕业审核', '关闭', '2018', '2018-05-01 09:11:29', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for student
-- ----------------------------
DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `id` int(9) NOT NULL,
  `name` varchar(25) NOT NULL,
  `sex` varchar(1) NOT NULL,
  `age` int(2) NOT NULL,
  `card` varchar(18) NOT NULL,
  `house` varchar(25) NOT NULL,
  `entrance` year(4) NOT NULL,
  `college` varchar(25) NOT NULL,
  `major` varchar(25) NOT NULL,
  `contact` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `entrance` (`entrance`),
  KEY `col` (`college`),
  KEY `maj` (`major`),
  CONSTRAINT `student_ibfk_1` FOREIGN KEY (`college`) REFERENCES `college` (`college`),
  CONSTRAINT `student_ibfk_2` FOREIGN KEY (`entrance`) REFERENCES `entrance` (`time`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `student_ibfk_3` FOREIGN KEY (`major`) REFERENCES `major` (`major`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of student
-- ----------------------------
INSERT INTO `student` VALUES ('181241001', '01李一', '男', '18', '010101010101010101', '江苏', '2018', '经济管理学院', '信息管理与信息系统', '2147483647');
INSERT INTO `student` VALUES ('181241002', '02王二', '女', '20', '020202020202020202', '江苏', '2018', '经济管理学院', '信息管理与信息系统', '2147483647');
INSERT INTO `student` VALUES ('181241003', '03张三', '男', '18', '030303030303030303', '江苏', '2018', '经济管理学院', '信息管理与信息系统', '2147483647');
INSERT INTO `student` VALUES ('181241004', '04刘四', '女', '18', '040404040404040404', '江苏', '2018', '经济管理学院', '信息管理与信息系统', '2147483647');
INSERT INTO `student` VALUES ('181241005', '05陈五', '男', '18', '050505050505050505', '江苏', '2018', '经济管理学院', '信息管理与信息系统', '2147483647');
INSERT INTO `student` VALUES ('181241006', '06杨六', '女', '18', '060606060606060606', '江苏', '2018', '经济管理学院', '信息管理与信息系统', '2147483647');
INSERT INTO `student` VALUES ('181241007', '07赵七', '男', '18', '070707070707070707', '江苏', '2018', '经济管理学院', '信息管理与信息系统', '2147483647');
INSERT INTO `student` VALUES ('181241008', '08黄八', '女', '18', '080808080808080808', '江苏', '2018', '经济管理学院', '信息管理与信息系统', '2147483647');
INSERT INTO `student` VALUES ('181241009', '09周九', '男', '18', '090909090909090909', '江苏', '2018', '经济管理学院', '信息管理与信息系统', '2147483647');
INSERT INTO `student` VALUES ('181241010', '10吴十', '女', '18', '101010101010101010', '江苏', '2018', '经济管理学院', '信息管理与信息系统', '2147483647');
INSERT INTO `student` VALUES ('181241011', '11徐十一', '男', '18', '111111111111111111', '江苏', '2018', '经济管理学院', '信息管理与信息系统', '2147483647');
INSERT INTO `student` VALUES ('181241012', '12孙十二', '女', '18', '121212121212121212', '江苏', '2018', '经济管理学院', '信息管理与信息系统', '2147483647');
INSERT INTO `student` VALUES ('181241013', '13胡十三', '男', '18', '131313131313131313', '江苏', '2018', '经济管理学院', '信息管理与信息系统', '2147483647');
INSERT INTO `student` VALUES ('181241014', '14朱十四', '女', '18', '141414141414141414', '江苏', '2018', '经济管理学院', '信息管理与信息系统', '2147483647');
INSERT INTO `student` VALUES ('181241015', '15高十五', '男', '18', '151515151515151515', '江苏', '2018', '经济管理学院', '信息管理与信息系统', '2147483647');
INSERT INTO `student` VALUES ('181241016', '16林十六', '女', '18', '161616161616161616', '江苏', '2018', '经济管理学院', '信息管理与信息系统', '2147483647');
INSERT INTO `student` VALUES ('181241017', '17何十七', '男', '18', '171717171717171717', '江苏', '2018', '经济管理学院', '信息管理与信息系统', '2147483647');
INSERT INTO `student` VALUES ('181241018', '18郭十八', '女', '18', '181818181818181818', '江苏', '2018', '经济管理学院', '信息管理与信息系统', '2147483647');
INSERT INTO `student` VALUES ('181241019', '19马十九', '男', '18', '191919191919191919', '江苏', '2018', '经济管理学院', '信息管理与信息系统', '2147483647');
INSERT INTO `student` VALUES ('181241020', '20罗二十', '女', '18', '202020202020202020', '江苏', '2018', '经济管理学院', '信息管理与信息系统', '2147483647');

-- ----------------------------
-- Table structure for transaction
-- ----------------------------
DROP TABLE IF EXISTS `transaction`;
CREATE TABLE `transaction` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `type` varchar(10) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `id_student` int(9) NOT NULL,
  `result` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `transaction_1` (`id_student`),
  CONSTRAINT `transaction_1` FOREIGN KEY (`id_student`) REFERENCES `student` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10000021 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of transaction
-- ----------------------------
INSERT INTO `transaction` VALUES ('10000009', '转专业', '转学', '181241001', null);
INSERT INTO `transaction` VALUES ('10000010', '转专业', '转专业', '181241001', null);
INSERT INTO `transaction` VALUES ('10000011', '转专业', '转专业', '181241002', '未通过');
INSERT INTO `transaction` VALUES ('10000012', '转专业', '转专业', '181241003', '通过');
INSERT INTO `transaction` VALUES ('10000013', '转专业', '转专业', '181241004', null);
INSERT INTO `transaction` VALUES ('10000014', '转专业', '转专业', '181241005', null);
INSERT INTO `transaction` VALUES ('10000015', '转专业', '转专业', '181241006', null);
INSERT INTO `transaction` VALUES ('10000016', '转专业', '转专业', '181241007', null);
INSERT INTO `transaction` VALUES ('10000017', '转专业', '转专业', '181241008', null);
INSERT INTO `transaction` VALUES ('10000018', '转专业', '转专业', '181241009', null);
INSERT INTO `transaction` VALUES ('10000019', '转专业', '1231', '181241001', null);
INSERT INTO `transaction` VALUES ('10000020', '转专业', '1231', '181241001', null);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(9) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id`) REFERENCES `student` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('181241001', '010101');
INSERT INTO `user` VALUES ('181241002', '020202');
INSERT INTO `user` VALUES ('181241003', '030303');
INSERT INTO `user` VALUES ('181241004', '040404');
INSERT INTO `user` VALUES ('181241005', '050505');
INSERT INTO `user` VALUES ('181241006', '060606');
INSERT INTO `user` VALUES ('181241007', '070707');
INSERT INTO `user` VALUES ('181241008', '080808');
INSERT INTO `user` VALUES ('181241009', '090909');
INSERT INTO `user` VALUES ('181241010', '101010');
INSERT INTO `user` VALUES ('181241011', '111111');
INSERT INTO `user` VALUES ('181241012', '121212');
INSERT INTO `user` VALUES ('181241013', '131313');
INSERT INTO `user` VALUES ('181241014', '141414');
INSERT INTO `user` VALUES ('181241015', '151515');
INSERT INTO `user` VALUES ('181241016', '161616');
INSERT INTO `user` VALUES ('181241017', '171717');
INSERT INTO `user` VALUES ('181241018', '181818');
INSERT INTO `user` VALUES ('181241019', '191919');
INSERT INTO `user` VALUES ('181241020', '202020');

-- ----------------------------
-- View structure for v_counttermscore
-- ----------------------------
DROP VIEW IF EXISTS `v_counttermscore`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost`  VIEW `v_counttermscore` AS SELECT id_student,mark,SUM(credits),SUM(acquired) from score GROUP BY id_student,mark ;

-- ----------------------------
-- View structure for v_graduation
-- ----------------------------
DROP VIEW IF EXISTS `v_graduation`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `v_graduation` AS SELECT score.id_student AS id, major,entrance ,GROUP_CONCAT(DISTINCT(score.id_course)) from score,student WHERE score.id_student=student.id AND score.acquired!=0 GROUP BY id ;

-- ----------------------------
-- View structure for v_program
-- ----------------------------
DROP VIEW IF EXISTS `v_program`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `v_program` AS SELECT major,GROUP_CONCAT(program)FROM program GROUP BY major ;
DROP TRIGGER IF EXISTS `TR_InsertScore`;
DELIMITER ;;
CREATE TRIGGER `TR_InsertScore` BEFORE INSERT ON `score` FOR EACH ROW BEGIN
SET new.acquired=new.credits;
-- -- IF new.score="优秀" THEN SET new.acquired=new.credits;
-- -- END
-- -- IF;
-- -- IF new.score="优" THEN SET new.acquired=new.credits;
-- -- END
-- -- IF;
IF new.score="不通过" THEN SET new.acquired=0;
END
IF;
IF new.score="不及格" THEN SET new.acquired=0;
END
IF;
IF new.score<'60' AND new.score>='0' THEN SET new.acquired=0;
END
IF;
-- -- IF new.score>=60 THEN SET new.acquired=new.score;
-- -- END
-- -- IF;


END
;;
DELIMITER ;
DROP TRIGGER IF EXISTS `TR_AfterUpdateSetUp`;
DELIMITER ;;
CREATE TRIGGER `TR_AfterUpdateSetUp` AFTER UPDATE ON `setup` FOR EACH ROW BEGIN

IF old.state = '关闭' THEN

IF new.state = '运行' THEN

IF old. NAME = '学期注册' THEN 
DELETE FROM register;
INSERT INTO register (id, mark, state) SELECT id,new.mark,'未注册' FROM student;

END IF;
IF old. NAME = '学业预警' THEN
DELETE  FROM v_countermscore;
INSERT INTO v_countermscore select id_student,mark,SUM(credits),SUM(acquired),SUM(acquired)/SUM(credits) FROM score GROUP BY id_student,mark;
END IF;

END
IF;


END
IF;


END
;;
DELIMITER ;
DROP TRIGGER IF EXISTS `TR_AfterInsertStudent`;
DELIMITER ;;
CREATE TRIGGER `TR_AfterInsertStudent` AFTER INSERT ON `student` FOR EACH ROW BEGIN

INSERT into user(id,password) VALUES(new.id,SUBSTRING(new.card, -6));

set @count_entrance = (select count(*) from entrance where entrance.time=new.entrance);

IF @count_entrance= 0  THEN
INSERT into entrance(time) VALUES(new.entrance);
end if;
END
;;
DELIMITER ;
