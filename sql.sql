CREATE SCHEMA IF NOT EXISTS `cns_xingkong` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `cns_xingkong` ;

-- -----------------------------------------------------
-- Table `cns_ad`.`ad_user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cns_xingkong`.`cns_manger` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '主键，自增',
  `login` VARCHAR(32) NOT NULL  DEFAULT '' COMMENT '登陆名',
  `password` VARCHAR(32) NOT NULL DEFAULT '',
  `name` VARCHAR(32) NOT NULL DEFAULT '' COMMENT '真实姓名',
  `phone` VARCHAR(11) NOT NULL DEFAULT '' COMMENT '电话号码',
  `last_login_time` INT NULL COMMENT '上次登陆时间',
  `last_login_ip` INT NULL COMMENT '上次登陆ip',
  `status` TINYINT(1) NOT NULL DEFAULT 0 COMMENT '用户状态：0=锁定，1=正常',
  PRIMARY KEY (`id`),
  UNIQUE INDEX `login` (`login`) COMMENT '管理员表'
)ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- -----------------------------------------------------
-- Table `cns_xingkong`.`cns_category`
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS `cns_xingkong`.`cns_category` (
  `id` INT(11)  NOT NULL AUTO_INCREMENT COMMENT '主键，自增',
  `name` VARCHAR(32) NOT NULL DEFAULT '' COMMENT '类别名称',
  `sort` INT(11) NOT NULL DEFAULT 0 COMMENT '排序',
  `type` TINYINT(1) UNSIGNED NOT NULL DEFAULT 0 COMMENT '类型：1=新闻，2=影视',
  `status` TINYINT(1) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=正常，0=停用',
  `remark` varchar(255) NOT NULL DEFAULT '' COMMENT '备注',
  PRIMARY KEY (`id`)
)  ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- -----------------------------------------------------
-- Table `cns_xingkong`.`cns_news`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cns_xingkong`.`cns_news` (
  `id` INT(11)  NOT NULL AUTO_INCREMENT COMMENT '主键，自增',
  `title` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '标题',
  `sort` INT(11) NOT NULL DEFAULT 0 COMMENT '排序',
  `cate_id` TINYINT(1) UNSIGNED NOT NULL DEFAULT 0 COMMENT '类别id',
  `editor` VARCHAR(32) NOT NULL DEFAULT '' COMMENT '编辑',
  `from` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '来源',
  `create_time` INT(11) NOT NULL DEFAULT 0 COMMENT '发布日期',
  `face200` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '文章封面200*230px',
  `face80` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '文章封面80*90px',
  `desc` VARCHAR(500)  NOT NULL DEFAULT '' COMMENT '描述',
  `content` TEXT NOT NULL DEFAULT '' COMMENT '文章内容',
  `hot` tinyint(1) NOT NULL DEFAULT 0 COMMENT '热点新闻1=热点新闻，0=非热点新闻',
  `status` TINYINT(1) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=正常，0=停用',
  PRIMARY KEY (`id`)
)  ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- -----------------------------------------------------
-- Table `cns_xingkong`.`cns_city`
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS `cns_xingkong`.`cns_city` (
  `id` INT(11)  NOT NULL AUTO_INCREMENT COMMENT '主键，自增',
  `name` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '名称',
  `sort` INT(11) NOT NULL DEFAULT 0 COMMENT '排序',
  `remark` VARCHAR(500)  NOT NULL DEFAULT '' COMMENT '备注',
  `status` TINYINT(1) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=正常，0=停用',
  PRIMARY KEY (`id`)
)  ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- -----------------------------------------------------
-- Table `cns_xingkong`.`cns_theater`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cns_xingkong`.`cns_theater` (
  `id` INT(11)  NOT NULL AUTO_INCREMENT COMMENT '主键，自增',
  `city_id` INT(11) NOT NULL DEFAULT 0 COMMENT '城市id',
  `name` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '名称',
  `x` varchar(128) NOT NULL DEFAULT '' COMMENT '经度',
  `y` VARCHAR(128) NOT NULL DEFAULT '' COMMENT '维度',
  `address` varchar(255) NOT NULL DEFAULT '' COMMENT '地址',
  `group_line` VARCHAR(32) NOT NULl DEFAULT '' COMMENT '团购热线',
  `order_line` VARCHAR(32) NOT NULL DEFAULT '' COMMENT '订票热线',
  `sort` INT(11) NOT NULL DEFAULT 0 COMMENT '排序',
  `intro` VARCHAR(500)  NOT NULL DEFAULT '' COMMENT '简介',
  `face520` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '影城封面',
  `face40`VARCHAR(255) NOT NULL DEFAULT '' COMMENT '影城封面',
  `status` TINYINT(1) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=正常，0=关闭',
  PRIMARY KEY (`id`)
)  ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- -----------------------------------------------------
-- Table `cns_xingkong`.`cns_theater_pic`
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS `cns_xingkong`.`cns_theater_photo` (
  `id` INT(11)  NOT NULL AUTO_INCREMENT COMMENT '主键，自增',
  `theater_id` INT(11) NOT NULL DEFAULT 0 COMMENT '影城id',
  `path` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '影城图片描述',
  PRIMARY KEY (`id`)
)  ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- -----------------------------------------------------
-- Table `cns_xingkong`.`cns_movie`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cns_xingkong`.`cns_movie` (
  `id` INT(11)  NOT NULL AUTO_INCREMENT COMMENT '主键，自增',
  `cate_id` INT(11) NOT NULL DEFAULT 0 COMMENT '类别id',
  `name` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '名称',
  `add_time` INT(11) NOT NULL DEFAULT 0 COMMENT '添加时间',
  `url` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '影视路径',
  `sort` INT(11) NOT NULL DEFAULT 0 COMMENT '排序',
  `recommend` tinyint(1) not null default 0 comment '0=不推荐；1=推荐'
  `intro` VARCHAR(500)  NOT NULL DEFAULT '' COMMENT '简介',
  `face209` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '影城封面209*114',
  `face142` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '影城封面142*81',
  `face96` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '影城封面96*85',
  `face196` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '影城封面196*110',
  `face80` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '影城封面80*45',
  `face160` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '影城封面160*181',
  `face40` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '影城封面40*40',
  `status` TINYINT(1) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=正常，0=关闭',
  PRIMARY KEY (`id`)
)  ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- -----------------------------------------------------
-- Table `cns_xingkong`.`cns_comment`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cns_xingkong`.`cns_comment` (
  `id` INT(11)  NOT NULL AUTO_INCREMENT COMMENT '主键，自增',
  `type` TINYINT(1) NOT NULL DEFAULT 0 COMMENT '评论对象,1:影评，2：文章',
  `obj_id`  INT(11)  NOT NULL COMMENT '评论对象id',
  `name` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '名称',
  `comment_time` INT(11) NOT NULL DEFAULT 0 COMMENT '添加时间',
  `content`  VARCHAR(255) NOT NULL DEFAULT '' COMMENT '评论时间',
  `user_id` int NOT  NULL DEFAULT 0  COMMENT '评论人id，0则代表游客',
  `status` TINYINT(1) UNSIGNED NOT NULL DEFAULT 0 COMMENT '1=审核通过，0=审核未通过',
  PRIMARY KEY (`id`)
)  ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- -----------------------------------------------------
-- Table `cns_xingkong`.`cns_enterprise`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cns_xingkong`.`cns_enterprise` (
  `id` INT(11)  NOT NULL AUTO_INCREMENT COMMENT '主键，自增',
  `name` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '名称',
  `url` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '企业连接',
  `sort` INT(11) NOT NULL DEFAULT 0 COMMENT '排序',
  `intro` VARCHAR(500)  NOT NULL DEFAULT '' COMMENT '简介',
  `face245` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '影城封面245*115',
  `status` TINYINT(1) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=正常，0=关闭',
  PRIMARY KEY (`id`)
)  ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- -----------------------------------------------------
-- Table `cns_xingkong`.`cns_ad`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cns_xingkong`.`cns_ad` (
  `id` INT(11)  NOT NULL AUTO_INCREMENT COMMENT '主键，自增',
  `url` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '网页地址',
  `sort` INT(11) NOT NULL DEFAULT 0 COMMENT '排序',
  `desc` VARCHAR(500)  NOT NULL DEFAULT '' COMMENT '相关描述',
  `big_thumb` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '大图',
  `small_thumb` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '小图',
  `pos` tinyint(1) NOT NULL DEFAULT 0 COMMENT '广告位位置，1=首页，2=影视列表页，3=广电报',   
  `status` TINYINT(1) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=正常，0=关闭',
  PRIMARY KEY (`id`)
)  ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- -----------------------------------------------------
-- Table `cns_xingkong`.`cns_kanwu`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cns_xingkong`.`cns_kanwu` (
  `id` INT(11)  NOT NULL AUTO_INCREMENT COMMENT '主键，自增',
  `title` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '标题',
  `number` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '期数',
  `add_time` INT(11) NOT NULL DEFAULT 0 COMMENT '添加时间',
  `url` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '路径',
  `intro` VARCHAR(500)  NOT NULL DEFAULT '' COMMENT '简介',
  `face508` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '508*760',
  `face157` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '157*224',
  `face240` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '240*360',
  `status` TINYINT(1) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=正常，0=关闭',
  PRIMARY KEY (`id`)
)  ENGINE=MyISAM DEFAULT CHARSET=utf8;





