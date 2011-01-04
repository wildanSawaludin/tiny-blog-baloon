use baloonku;

-- ----------------------------
-- Table structure for `tdpost`
-- ----------------------------
DROP TABLE IF EXISTS `tdpost`;
CREATE TABLE `tdpost` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idPost` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `komentar` text,
  `inputDt` datetime DEFAULT NULL,
  `updateDt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tdpost
-- ----------------------------

-- ----------------------------
-- Table structure for `thpost`
-- ----------------------------
DROP TABLE IF EXISTS `thpost`;
CREATE TABLE `thpost` (
  `id` int(19) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(32) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text,
  `tgl` varchar(2) NOT NULL,
  `bln` varchar(2) NOT NULL,
  `thn` varchar(2) NOT NULL,
  `inputBy` varchar(50) DEFAULT NULL,
  `inputDt` datetime DEFAULT NULL,
  `updateBy` varchar(50) DEFAULT NULL,
  `updateDt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of thpost
-- ----------------------------

-- ----------------------------
-- Table structure for `tmgeneral`
-- ----------------------------
DROP TABLE IF EXISTS `tmgeneral`;
CREATE TABLE `tmgeneral` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `tagline` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `updateBy` varchar(50) DEFAULT NULL,
  `updateDt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tmgeneral
-- ----------------------------

-- ----------------------------
-- Table structure for `tmkategori`
-- ----------------------------
DROP TABLE IF EXISTS `tmkategori`;
CREATE TABLE `tmkategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `inputBy` varchar(50) DEFAULT NULL,
  `inputDt` datetime DEFAULT NULL,
  `updateBy` varchar(50) DEFAULT NULL,
  `updateDt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tmkategori
-- ----------------------------

-- ----------------------------
-- Table structure for `tmuser`
-- ----------------------------
DROP TABLE IF EXISTS `tmuser`;
CREATE TABLE `tmuser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `role` varchar(2) NOT NULL,
  `aktifasi` varchar(1) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `inputBy` varchar(50) DEFAULT NULL,
  `inputDt` datetime DEFAULT NULL,
  `updateBy` varchar(50) DEFAULT NULL,
  `updateDt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tmuser
-- ----------------------------
