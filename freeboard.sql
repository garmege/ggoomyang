-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- 생성 시간: 21-11-17 08:47
-- 서버 버전: 10.4.21-MariaDB
-- PHP 버전: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `test`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `freeboard`
--

CREATE TABLE `freeboard` (
  `num` int(5) NOT NULL,
  `title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `context` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 테이블의 덤프 데이터 `freeboard`
--

INSERT INTO `freeboard` (`num`, `title`, `author`, `date`, `context`) VALUES
(2, '굿즈가 너무 귀여워요', '번뱀이', '11월 20일', '번뱀이는 번개를 밥으로 먹어요!'),
(3, '제목입니다', '김첨지', '11월 20일', '선거운동은 각급 선거관리위원회의 관리하에 법률이 정하는 범위안에서 하되, 균등한 기회가 보장되어야 한다. 타인의 범죄행위로 인하여 생명·신체에 대한 피해를 받은 국민은 법률이 정하는 바에 의하여 국가로부터 구조를 받을 수 있다. 국회의 회의는 공개한다. 다만, 출석의원 과반수의 찬성이 있거나 의장이 국가의 안전보장을 위하여 필요하다고 인정할 때에는 공개하지 아니할 수 있다.\r\n                       '),
(4, '제목입니다', '로스트끼룩', '2월 10일', '국채를 모집하거나 예산외에 국가의 부담이 될 계약을 체결하려 할 때에는 정부는 미리 국회의 의결을 얻어야 한다. 국가는 지역간의 균형있는 발전을 위하여 지역경제를 육성할 의무를 진다. 국무회의는 대통령·국무총리와 15인 이상 30인 이하의 국무위원으로 구성한다. 대통령은 국가의 원수이며, 외국에 대하여 국가를 대표한다. 중앙선거관리위원회는 법령의 범위안에서 선거관리·국민투표관리 또는 정당사무에 관한 규칙을 제정할 수 있으며, 법률에 저촉되지 아니하는 범위안에서 내부규율에 관한 규칙을 제정할 수 있다.                      '),
(5, '상품 문의', '까악까악', '3월 21일', '국회는 국가의 예산안을 심의·확정한다. 정당의 설립은 자유이며, 복수정당제는 보장된다. 국가안전보장에 관련되는 대외정책·군사정책과 국내정책의 수립에 관하여 국무회의의 심의에 앞서 대통령의 자문에 응하기 위하여 국가안전보장회의를 둔다. 선거에 있어서 최고득표자가 2인 이상인 때에는 국회의 재적의원 과반수가 출석한 공개회의에서 다수표를 얻은 자를 당선자로 한다. 한 회계연도를 넘어 계속하여 지출할 필요가 있을 때에는 정부는 연한을 정하여 계속비로서 국회의 의결을 얻어야 한다.              '),
(6, '배송 문의', '쥐돌이', '5월 25일', '국가는 재해를 예방하고 그 위험으로부터 국민을 보호하기 위하여 노력하여야 한다. 국채를 모집하거나 예산외에 국가의 부담이 될 계약을 체결하려 할 때에는 정부는 미리 국회의 의결을 얻어야 한다. 국가는 농수산물의 수급균형과 유통구조의 개선에 노력하여 가격안정을 도모함으로써 농·어민의 이익을 보호한다. 국무총리는 국무위원의 해임을 대통령에게 건의할 수 있다.      '),
(7, '상품 문의', '쿠크루삥뽕', '5월 25일', '재의의 요구가 있을 때에는 국회는 재의에 붙이고, 재적의원과반수의 출석과 출석의원 3분의 2 이상의 찬성으로 전과 같은 의결을 하면 그 법률안은 법률로서 확정된다. 재의의 요구가 있을 때에는 국회는 재의에 붙이고, 재적의원과반수의 출석과 출석의원 3분의 2 이상의 찬성으로 전과 같은 의결을 하면 그 법률안은 법률로서 확정된다.                            '),
(8, '다른 종류의 굿즈도 만들어주세요', '호랑나비', '3월 3일', '선거운동은 각급 선거관리위원회의 관리하에 법률이 정하는 범위안에서 하되, 균등한 기회가 보장되어야 한다. 모든 국민은 보건에 관하여 국가의 보호를 받는다.'),
(9, '카카오랑 콜라보 해주세요', '김칫국', '4월 10일', '대통령의 임기는 5년으로 하며, 중임할 수 없다. 대법관은 대법원장의 제청으로 국회의 동의를 얻어 대통령이 임명한다. 대통령은 조국의 평화적 통일을 위한 성실한 의무를 진다.'),
(10, '현기증나요', '앵무새', '3월 17일', '헌법재판소의 장은 국회의 동의를 얻어 재판관중에서 대통령이 임명한다. 누구든지 병역의무의 이행으로 인하여 불이익한 처우를 받지 아니한다. 대통령은 국가의 독립·영토의 보전·국가의 계속성과 헌법을 수호할 책무를 진다. 법관은 헌법과 법률에 의하여 그 양심에 따라 독립하여 심판한다. 모든 국민은 소급입법에 의하여 참정권의 제한을 받거나 재산권을 박탈당하지 아니한다.           '),
(11, '상품 문의', '쥐돌이', '10월 20일', '국회의 회의는 공개한다. 다만, 출석의원 과반수의 찬성이 있거나 의장이 국가의 안전보장을 위하여 필요하다고 인정할 때에는 공개하지 아니할 수 있다.\r\n국가는 농수산물의 수급균형과 유통구조의 개선에 노력하여 가격안정을 도모함으로써 농·어민의 이익을 보호한다. 국무총리는 국무위원의 해임을 대통령에게 건의할 수 있다.');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `freeboard`
--
ALTER TABLE `freeboard`
  ADD PRIMARY KEY (`num`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `freeboard`
--
ALTER TABLE `freeboard`
  MODIFY `num` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
