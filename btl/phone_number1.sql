-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for phonenumber
CREATE DATABASE IF NOT EXISTS `phonenumber` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `phonenumber`;

-- Dumping structure for table phonenumber.departments
CREATE TABLE IF NOT EXISTS `departments` (
  `DepartmentID` int NOT NULL AUTO_INCREMENT,
  `DepartmentName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Website` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ParentDepartmentID` int DEFAULT NULL,
  `Description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`DepartmentID`) USING BTREE,
  KEY `ParentDepartmentID` (`ParentDepartmentID`) USING BTREE,
  CONSTRAINT `FK_departments_departments` FOREIGN KEY (`ParentDepartmentID`) REFERENCES `departments` (`DepartmentID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table phonenumber.departments: ~20 rows (approximately)
INSERT INTO `departments` (`DepartmentID`, `DepartmentName`, `Address`, `Email`, `Phone`, `Logo`, `Website`, `ParentDepartmentID`, `Description`) VALUES
	(1, 'Khoa Công nghệ thông tin', '123 Tây Sơn, Hà Nội', 'info@cs.edu.vn', '0123456789', 'cs_logo.png', 'http://www.cs.edu.vn', NULL, NULL),
	(2, 'Khoa Kinh tế', '456 Lê Thanh Nghị, Hà Nội', 'info@economics.edu.vn', '0987654321', 'economics_logo.png', 'http://www.economics.edu.vn', NULL, NULL),
	(3, 'Phòng Quản lý học vụ', '789 Nguyễn Trãi, Hà Nội', 'info@registrar.edu.vn', '0369852147', '', 'http://www.registrar.edu.vn', NULL, NULL),
	(4, 'Phòng Khoa học và Nghiên cứu', '101 Hoàng Quốc Việt, Hà Nội', 'research@university.edu.vn', '0246897531', 'research_logo.png', 'http://www.research.edu.vn', NULL, NULL),
	(5, 'Khoa Ngoại ngữ', '202 Đống Đa, Hà Nội', 'info@languages.edu.vn', '0123456789', 'languages_logo.png', 'http://www.languages.edu.vn', NULL, NULL),
	(6, 'Văn phòng Đại học', '303 Ba Đình, Hà Nội', 'info@university.edu.vn', '0987654321', 'university_logo.png', 'http://www.university.edu.vn', NULL, NULL),
	(7, 'Ngành Hệ thống thông tin', '123 Tây Sơn, Hà Nội', 'info@cs.edu.vn', '0123456789', '', '', 1, NULL),
	(8, 'Ngành Trí tuệ nhân tạo', '123 Tây Sơn, Hà Nội', 'info@cs.edu.vn', '0123456789', '', '', 1, NULL),
	(9, 'Ngành Kinh doanh quốc tế', '456 Lê Thanh Nghị, Hà Nội', 'info@economics.edu.vn', '0987654321', '', '', 2, NULL),
	(10, 'Ngành Tài chính ngân hàng', '456 Lê Thanh Nghị, Hà Nội', 'info@economics.edu.vn', '0987654321', '', '', 2, NULL),
	(11, 'Phòng Học vụ', '789 Nguyễn Trãi, Hà Nội', 'info@registrar.edu.vn', '0369852147', '', '', 3, NULL),
	(12, 'Phòng Đào tạo đại học', '789 Nguyễn Trãi, Hà Nội', 'info@registrar.edu.vn', '0369852147', '', '', 3, NULL),
	(13, 'Phòng Đào tạo sau đại học', '789 Nguyễn Trãi, Hà Nội', 'info@registrar.edu.vn', '0369852147', '', '', 3, NULL),
	(14, 'Phòng Nghiên cứu khoa học', '101 Hoàng Quốc Việt, Hà Nội', 'research@university.edu.vn', '0246897531', '', '', 4, NULL),
	(15, 'Phòng Hợp tác quốc tế', '101 Hoàng Quốc Việt, Hà Nội', 'research@university.edu.vn', '0246897531', '', '', 4, NULL),
	(16, 'Ngành Tiếng Anh', '202 Đống Đa, Hà Nội', 'info@languages.edu.vn', '0123456789', '', '', 5, NULL),
	(17, 'Ngành Tiếng Pháp', '202 Đống Đa, Hà Nội', 'info@languages.edu.vn', '0123456789', '', '', 5, NULL),
	(18, 'Văn phòng Tuyển sinh', '303 Ba Đình, Hà Nội', 'info@university.edu.vn', '0987654321', '', '', 6, NULL),
	(19, 'Văn phòng Hợp tác quốc tế', '303 Ba Đình, Hà Nội', 'info@university.edu.vn', '0987654321', '', '', 6, NULL),
	(20, 'Văn phòng Hợp đồng và Thanh toán', '303 Ba Đình, Hà Nội', 'info@university.edu.vn', '0987654321', '', '', 6, NULL);

-- Dumping structure for table phonenumber.employees
CREATE TABLE IF NOT EXISTS `employees` (
  `EmployeeID` int NOT NULL AUTO_INCREMENT,
  `FullName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `MobilePhone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Position` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DepartmentID` int DEFAULT NULL,
  PRIMARY KEY (`EmployeeID`) USING BTREE,
  UNIQUE KEY `email` (`Email`) USING BTREE,
  UNIQUE KEY `mobilePhone` (`MobilePhone`) USING BTREE,
  KEY `DepartmentID` (`DepartmentID`) USING BTREE,
  CONSTRAINT `FK_employees_departments` FOREIGN KEY (`DepartmentID`) REFERENCES `departments` (`DepartmentID`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table phonenumber.employees: ~42 rows (approximately)
INSERT INTO `employees` (`EmployeeID`, `FullName`, `Address`, `Email`, `MobilePhone`, `Position`, `Avatar`, `DepartmentID`) VALUES
	(1, 'Nguyên abcdm', '123 Tây Sơn', 'abc@gmail.com', '0453647584', 'Giảng viên', '', 9),
	(2, 'Trần Thị Bích', '456 Lê Thanh Nghị, Hà Nội', 'tranthib@example.com', '0987654352', 'Nhân viên văn phòng', 'avatar2.png', 6),
	(3, 'Lê Văn Cường', '789 Nguyễn Trãi, Hà Nội', 'levanc@example.com', '0369852143', 'Trợ lý nghiên cứu', 'avatar3.png', 3),
	(4, 'Hoàng Thị Dương', '101 Hoàng Quốc Việt, Hà Nội', 'hoangthid@example.com', '0246897534', 'Kỹ sư phần mềm', 'avatar4.png', 1),
	(5, 'Phạm Văn Eo', '202 Đống Đa, Hà Nội', 'phamvane@example.com', '0123456785', 'Nhân viên kinh doanh', 'avatar5.png', 2),
	(6, 'Nguyễn Thị Thơ', '303 Ba Đình, Hà Nội', 'nguyenthif@example.com', '0987654326', 'Giáo sư', 'avatar6.png', 1),
	(7, 'Trần Văn Gia', '123 Tây Sơn, Hà Nội', 'tranvang@example.com', '0223456787', 'Giảng viên', 'avatar7.png', 1),
	(8, 'Lê Thị Huyền', '456 Lê Thanh Nghị, Hà Nội', 'lethih@example.com', '0987654328', 'Nhân viên văn phòng', 'avatar8.png', 4),
	(9, 'Hoàng Văn An', '789 Nguyễn Trãi, Hà Nội', 'hoangvani@example.com', '0369852149', 'Trợ lý nghiên cứu', 'avatar9.png', 3),
	(10, 'Nguyễn Thị Kiều', '101 Hoàng Quốc Việt, Hà Nội', 'nguyenthik@example.com', '0246897530', 'Kỹ sư phần mềm', 'avatar10.png', 7),
	(11, 'Trần Văn Lực', '202 Đống Đa, Hà Nội', 'tranvanl@example.com', '0123456781', 'Nhân viên kinh doanh', 'avatar11.png', 2),
	(12, 'Lê Thị Mai', '303 Ba Đình, Hà Nội', 'lethim@example.com', '0987654322', 'Giáo sư', 'avatar12.png', 1),
	(13, 'Hoàng Văn Nam', '123 Tây Sơn, Hà Nội', 'hoangvann@example.com', '0123456783', 'Giảng viên', 'avatar13.png', 1),
	(14, 'Trần Thị Phương', '456 Lê Thanh Nghị, Hà Nội', 'tranthip@example.com', '0987654324', 'Nhân viên văn phòng', 'avatar14.png', 2),
	(15, 'Lê Văn Quân', '789 Nguyễn Trãi, Hà Nội', 'levanq@example.com', '0369852145', 'Trợ lý nghiên cứu', 'avatar15.png', 3),
	(16, 'Nguyễn Thị Ngọc', '101 Hoàng Quốc Việt, Hà Nội', 'nguyenthir@example.com', '0246897536', 'Kỹ sư phần mềm', 'avatar16.png', 1),
	(17, 'Trần Văn Sáng', '202 Đống Đa, Hà Nội', 'tranvans@example.com', '0123456787', 'Nhân viên kinh doanh', 'avatar17.png', 2),
	(18, 'Lê Thị Thanh', '303 Ba Đình, Hà Nội', 'lethit@example.com', '0987664328', 'Giáo sư', 'avatar18.png', 1),
	(19, 'Hoàng Văn Uy', '123 Tây Sơn, Hà Nội', 'hoangvanu@example.com', '0123456789', 'Giảng viên', 'avatar19.png', 1),
	(20, 'Trần Thị Vy', '456 Lê Thanh Nghị, Hà Nội', 'tranthiv@example.com', '0987654320', 'Nhân viên văn phòng', 'avatar20.png', 2),
	(21, 'Nguyễn Văn Khoa', '101 Lê Lợi, Hà Nội', 'nguyenvankhoa@example.com', '0123456700', 'Giảng viên', 'avatar21.png', 1),
	(22, 'Trần Thị Lan', '202 Phạm Ngũ Lão, Hà Nội', 'tranl@example.com', '0987654399', 'Nhân viên văn phòng', 'avatar22.png', 2),
	(23, 'Lê Văn Đức', '303 Kim Mã, Hà Nội', 'levanduc@example.com', '0369852177', 'Trợ lý nghiên cứu', 'avatar23.png', 3),
	(24, 'Hoàng Thị Mai', '404 Bà Triệu, Hà Nội', 'hoangthimai@example.com', '0246897532', 'Kỹ sư phần mềm', 'avatar24.png', 1),
	(25, 'Phạm Văn Hải', '505 Hồ Gươm, Hà Nội', 'phamvanhai@example.com', '0123456790', 'Nhân viên kinh doanh', 'avatar25.png', 2),
	(26, 'Nguyễn Thị Hạnh', '606 Phan Đình Phùng, Hà Nội', 'nguyenhanh@example.com', '0987654311', 'Giáo sư', 'avatar26.png', 8),
	(27, 'Trần Văn Dũng', '707 Hàng Bài, Hà Nội', 'trandung@example.com', '0123456788', 'Giảng viên', 'avatar27.png', 1),
	(28, 'Lê Thị Ngọc', '808 Lý Thường Kiệt, Hà Nội', 'lengoc@example.com', '0987654312', 'Nhân viên văn phòng', 'avatar28.png', 2),
	(29, 'Hoàng Văn Tú', '909 Đinh Tiên Hoàng, Hà Nội', 'hoangvantu@example.com', '0369852155', 'Trợ lý nghiên cứu', 'avatar29.png', 9),
	(30, 'Nguyễn Thị Anh', '1010 Trần Hưng Đạo, Hà Nội', 'nguyenanh@example.com', '0246897533', 'Giảng viên', 'avatar30.png', 5),
	(31, 'Nguyễn Văn Anh', '123 Tây Sơn, Hà Nội', 'nguyenvanabc@example.com', '0126456701', 'Giảng viên', NULL, 12),
	(32, 'Trần Thị Bích', '456 Lê Thanh Nghị, Hà Nội', 'tranthibichh@example.com', '0947654322', 'Nhân viên văn phòng', NULL, 13),
	(33, 'Lê Văn Cường', '789 Nguyễn Trãi, Hà Nội', 'levancuog@example.com', '0365852143', 'Trợ lý nghiên cứu', NULL, 14),
	(34, 'Hoàng Thị Dương', '101 Hoàng Quốc Việt, Hà Nội', 'hoangthiduog@example.com', '0246867534', 'Kỹ sư phần mềm', NULL, 15),
	(35, 'Phạm Văn Eo', '202 Đống Đa, Hà Nội', 'phamvaneooo@example.com', '0123456745', 'Nhân viên kinh doanh', NULL, 16),
	(36, 'Nguyễn Thị Thơ', '303 Ba Đình, Hà Nội', 'nguyenthithoo@example.com', '0988654326', 'Giáo sư', NULL, 17),
	(37, 'Trần Văn Gia', '123 Tây Sơn, Hà Nội', 'tranvangia@example.com', '0123456757', 'Giảng viên', NULL, 18),
	(38, 'Lê Thị Huyền', '456 Lê Thanh Nghị, Hà Nội', 'lethihuynnn@example.com', '0937654328', 'Nhân viên văn phòng', NULL, 19),
	(39, 'Hoàng Văn An', '789 Nguyễn Trãi, Hà Nội', 'hoangvaninnn@example.com', '0369832149', 'Trợ lý nghiên cứu', NULL, 20),
	(40, 'Nguyễn Thị Kiều', '101 Hoàng Quốc Việt, Hà Nội', 'nguyenthikiii@example.com', '0243897530', 'Kỹ sư phần mềm', NULL, 12),
	(41, 'abcd', '', 'abcd@gmail.com', '0293728392', 'Giảng viên', 'https://bootdey.com/img/Content/avatar/avatar4.png', NULL),
	(42, 'Trần văn toàn', '123 Chùa Bộc', 'toantv@gmail.com', '0235335364', 'Giảng viên', 'https://bootdey.com/img/Content/avatar/avatar4.png', NULL);

-- Dumping structure for table phonenumber.users
CREATE TABLE IF NOT EXISTS `users` (
  `Username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `Password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Role` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EmployeeID` int DEFAULT NULL,
  PRIMARY KEY (`Username`) USING BTREE,
  KEY `EmployeeID` (`EmployeeID`) USING BTREE,
  CONSTRAINT `FK_users_employees` FOREIGN KEY (`EmployeeID`) REFERENCES `employees` (`EmployeeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table phonenumber.users: ~40 rows (approximately)
INSERT INTO `users` (`Username`, `Password`, `Role`, `EmployeeID`) VALUES
	('user1', 'password1', 'regular', 1),
	('user10', 'password10', 'regular', 10),
	('user11', 'password11', 'regular', 11),
	('user12', 'password12', 'regular', 12),
	('user13', 'password13', 'regular', 13),
	('user14', 'password14', 'regular', 14),
	('user15', 'password15', 'regular', 15),
	('user16', 'password16', 'regular', 16),
	('user17', 'password17', 'regular', 17),
	('user18', 'password18', 'regular', 18),
	('user19', 'password19', 'regular', 19),
	('user2', 'password2', 'regular', 2),
	('user20', 'password20', 'regular', 20),
	('user21', 'password21', 'regular', 21),
	('user22', 'password22', 'regular', 22),
	('user23', 'password23', 'regular', 23),
	('user24', 'password24', 'regular', 24),
	('user25', 'password25', 'regular', 25),
	('user26', 'password26', 'regular', 26),
	('user27', 'password27', 'regular', 27),
	('user28', 'password28', 'regular', 28),
	('user29', 'password29', 'regular', 29),
	('user3', 'password3', 'admin', 3),
	('user30', 'password30', 'regular', 30),
	('user31', 'password31', 'regular', 31),
	('user32', 'password32', 'regular', 32),
	('user33', 'password33', 'regular', 33),
	('user34', 'password34', 'regular', 34),
	('user35', 'password35', 'regular', 35),
	('user36', 'password36', 'regular', 36),
	('user37', 'password37', 'regular', 37),
	('user38', 'password38', 'regular', 38),
	('user39', 'password39', 'regular', 39),
	('user4', 'password4', 'regular', 4),
	('user40', 'password40', 'regular', 40),
	('user5', 'password5', 'regular', 5),
	('user6', 'password6', 'admin', 6),
	('user7', 'password7', 'regular', 7),
	('user8', 'password8', 'regular', 8),
	('user9', 'password9', 'admin', 9);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
