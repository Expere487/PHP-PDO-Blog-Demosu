-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2022 at 06:58 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catId` int(11) NOT NULL,
  `catName` varchar(50) NOT NULL,
  `catSummary` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catId`, `catName`, `catSummary`) VALUES
(1, 'Gündem', 'Gündem Haberleri'),
(2, 'Teknoloji', 'Teknoloji Haberleri');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `postId` int(11) NOT NULL,
  `postTitle` tinytext NOT NULL,
  `postSummary` varchar(25) NOT NULL,
  `postContent` text NOT NULL,
  `postAuthor` int(11) NOT NULL,
  `postDate` date NOT NULL DEFAULT current_timestamp(),
  `postCat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`postId`, `postTitle`, `postSummary`, `postContent`, `postAuthor`, `postDate`, `postCat`) VALUES
(35, 'Non ut doloremque inventore.', 'Est officiis officiis rem', 'Omnis quia voluptates officiis. Molestiae necessitatibus ipsum dolorem minus ut sequi qui. Enim doloribus necessitatibus autem distinctio possimus adipisci reiciendis. Quis pariatur eos vitae itaque temporibus ipsum. Voluptas officiis laboriosam iusto eaque ea suscipit occaecati quia. Alias mollitia laborum quam magnam neque. Quos adipisci mollitia repellendus corporis. Nisi libero dolores voluptates voluptate laborum. Alias omnis officia itaque perferendis dignissimos. Quam odit id molestias consequatur. Et similique minima sed amet est nobis. Consequatur doloremque omnis sed est eligendi est. Nam architecto porro iure et dolorum inventore est. Explicabo mollitia accusantium aut iusto quia laudantium. Aut aut possimus nostrum dolores sed. Praesentium porro voluptatem impedit labore et perferendis sed. Voluptatibus veritatis praesentium recusandae cum nisi quidem. Esse aut accusantium eum minus officia quo porro. Rem suscipit quibusdam maxime amet. Harum quia numquam quas est porro optio delectus. Inventore rerum repudiandae qui. Et atque molestiae et voluptas consectetur. Placeat ipsa pariatur corporis laudantium quaerat sint veritatis et. Quia quis veniam nesciunt magni.', 1, '2003-10-27', 1),
(2, 'Sit iure expedita qui sapiente.', 'Sed est occaecati perfere', 'Odio illo ut quas natus quis. Voluptas sequi modi accusamus ratione quos facilis earum. Repellat officiis non voluptatibus nihil dolorum voluptatem nostrum aut. Est numquam alias optio veritatis assumenda asperiores nemo. Omnis est molestiae eveniet necessitatibus iusto eius atque. Sint quia aliquid tempora quod in. Qui quam non qui omnis placeat itaque. Sed eveniet atque tenetur impedit magni repellat aut voluptatem. Culpa ut eos dignissimos ea sed. Et excepturi iure itaque iste. Pariatur perferendis dolorem et eaque. Non animi iure quia dicta doloremque sunt iure voluptas. Molestias iste quas eum iste animi aut dolor. Tempore laboriosam modi vel. Vero ut atque quae adipisci eum rerum rerum. Mollitia non quibusdam deleniti accusantium illo laudantium. Consequatur facere qui ea omnis sint. Officiis recusandae voluptatem expedita eum voluptatum. Voluptatem asperiores laudantium repellendus et. Corporis et ad ut perspiciatis exercitationem aut. Consequatur officia ea id quo aut quia. Dicta repellendus rem ab minus rerum in officia. Reprehenderit autem aut quisquam sed nemo officia. Id sed aut sapiente. Fuga dolorum et sed assumenda hic porro.', 3, '2007-11-27', 1),
(73, 'Dolores et fugit nesciunt.', 'Velit sed velit maxime fu', 'Et sit sint voluptas. Rerum quam adipisci voluptate distinctio repellat voluptatem possimus. Asperiores consectetur non optio in esse quia occaecati. Est aliquam et in voluptas nihil quisquam libero. Quibusdam quis nostrum itaque accusantium iste sed aut. Sed autem dignissimos mollitia reiciendis. Earum velit occaecati vel ad. Qui est et corporis ratione iure est et illum. Vel quis beatae aut eum sit. Aut aut ea et delectus atque. Accusantium necessitatibus fugiat tempora est voluptatum numquam aut saepe. Aspernatur ex sit veniam et nobis deserunt quia qui. Eos reprehenderit dolor aut saepe. Et repellat ut deserunt dolorem et. Impedit dolor commodi perspiciatis debitis repudiandae ut quis. Sit autem recusandae natus sequi a voluptatibus id. Doloribus repellendus at sapiente deleniti eveniet in ex. Ipsa dolorem aut est perferendis. Quis alias autem quo explicabo et quos est voluptates. Animi rerum praesentium nesciunt maxime dolorem. Omnis perspiciatis consequatur labore minus recusandae quo. Nesciunt doloribus non modi consequatur. Perspiciatis commodi explicabo eveniet eaque sint quia illo. Saepe autem quidem nostrum rerum qui aut animi. Dolores in eos eum temporibus tempore nihil ex. Cupiditate nesciunt sint vel perspiciatis. Cumque est cupiditate repellendus ullam tenetur velit. Odio reiciendis reiciendis tempora libero.', 3, '1985-10-30', 1),
(8, 'Cupiditate nihil molestiae eum vero.', 'Vero maxime quibusdam ear', 'Consequuntur esse sunt harum ut totam autem nostrum. In id maxime neque eveniet unde. Dignissimos sit provident et nihil. Provident recusandae dignissimos provident totam in. Iure libero commodi consequatur minima cupiditate. Magnam dolorem molestias eos quia voluptatem non maiores. Iure nisi doloribus voluptas aspernatur. Dolor sint voluptatem sequi autem. Ullam quam possimus placeat possimus. Atque ab sed consequuntur temporibus delectus aut ut. Voluptatem eveniet ad id impedit quia perferendis. Unde sit sapiente a deserunt odio similique voluptates. Id eligendi fuga voluptatibus necessitatibus laboriosam. Ea veniam dolores molestiae ea est debitis. Quos consequatur quis delectus ut libero. Provident aliquam et expedita iste temporibus iusto ea rerum. Odit mollitia ipsum aut occaecati corrupti sunt est nihil. Illum hic neque facere quas cumque. Necessitatibus qui voluptates quis aut a ex consequuntur. Id neque ut ducimus nisi ipsum corrupti. Consequatur animi nemo voluptas aut. Est quos pariatur reprehenderit fuga non. Quibusdam et excepturi possimus voluptatem facilis perspiciatis tempore. Et nemo debitis porro minus laudantium voluptas eum. Quas recusandae voluptatem tempora rerum.', 1, '1981-12-03', 2),
(30, 'Rerum quos dicta eos perspiciatis.', 'Praesentium in ad ad elig', 'Aperiam sit et esse aut aut sunt. Enim suscipit repellat illo libero. Eveniet non ipsum rerum. Sed qui facilis nihil velit animi aut cupiditate. Modi est rerum qui eligendi et repellendus eos id. Et voluptatibus ullam omnis eligendi est consequatur iure. Necessitatibus est cupiditate maiores illum quasi. Error mollitia laboriosam rem modi. Aut corrupti et accusamus inventore hic. Aut molestiae et ea et in consequuntur dolores qui. Est consequatur labore in eveniet itaque. Et at tempora quis minima. Iste iste non enim debitis quae nisi. Neque consequatur pariatur cumque nihil eveniet autem. Et expedita ad hic aut voluptate. Consequatur ut assumenda sapiente. Ad et unde eveniet asperiores distinctio. Totam nam dolore enim excepturi id dolorem. Voluptatum quas debitis ut cumque quisquam corporis aspernatur. Repellat est quis distinctio ducimus molestiae molestiae quisquam.', 1, '2012-08-16', 2),
(99, 'Labore consequatur consequatur.', 'Dolorem deserunt et tempo', 'Quam libero ut laborum eos et. Nesciunt illo ducimus ut qui sapiente inventore tenetur cupiditate. Consectetur voluptatem asperiores molestiae officia consequuntur quia qui quis. Perspiciatis et velit eveniet repudiandae architecto voluptate et. Laborum reiciendis porro illum totam. Sequi enim velit eum nihil officia. Ut est et et unde. Quidem omnis earum ratione dolor. Voluptatibus fugiat eveniet aut et molestias id. Aperiam placeat natus non cum nisi assumenda. Accusantium facere doloribus consequatur ex iusto. Soluta reiciendis aliquam aut dolor blanditiis. Sit libero autem in autem. Assumenda est perferendis nemo molestiae magnam tempore sed eum. Corporis et dolorum ullam qui. Error veniam voluptatum dolor laudantium. Non temporibus placeat libero commodi magnam repellendus. Dignissimos hic aut ut numquam ut debitis. Nam quo eum harum nemo corrupti nihil. Officiis rerum quaerat nihil fuga sed est ea. Numquam natus vel esse dicta voluptas harum quod.', 1, '1998-10-31', 1),
(42, 'Accusamus saepe laborum itaque.', 'Sit iure qui quae nihil e', 'Vel quis harum maxime sunt eligendi. Quia ullam et soluta vel quia ex voluptas. Aut alias est nihil enim cumque qui odio. Exercitationem quis recusandae laudantium et ut. Mollitia ad omnis ut quae. Aut in quod aut earum repellendus quia architecto. Quidem et consectetur corrupti autem nam et. Et veniam eveniet repellendus ipsum. Ipsa et error aut occaecati. Porro aliquid laborum similique sunt. Et voluptatem voluptatem aut similique corrupti sapiente qui. Praesentium rerum facere cum et. Blanditiis quo molestiae praesentium nobis ratione odio deleniti. Voluptatem velit aut possimus fuga totam. Fugit ea quis beatae a.', 1, '1992-09-17', 1),
(74, 'Tenetur dicta corporis rerum ex rem.', 'Odio in voluptatibus itaq', 'Itaque est dicta est sint earum eius. Facilis ducimus autem exercitationem reprehenderit id molestiae porro eos. Voluptatem eos tempora harum vero incidunt ut. Consequuntur amet sunt illum qui et. Dicta voluptas est non laudantium. Necessitatibus magnam modi aut laboriosam reiciendis et. Velit fugit iure illum magni sed. Esse rerum id cum provident. Dolores vitae molestias perferendis. Doloribus eum eos perferendis. Numquam ullam adipisci eveniet neque. Eligendi voluptates quisquam quaerat non voluptatem. Vel nisi illum amet ratione et molestiae magni. Vel error qui laborum asperiores id consequatur. Iusto maxime eveniet voluptatem et perferendis. Numquam aut minus quia eligendi sequi aut similique. Nesciunt dolorum excepturi reprehenderit. Asperiores rem qui dolorem ea et et impedit. Consequuntur et exercitationem veniam nemo non. Et voluptatem veritatis perferendis laboriosam nobis totam totam. Sed provident ut a quas laudantium numquam. Tempore veniam rerum dolores. Rerum amet ducimus molestiae nemo ducimus cum dolorem qui.', 2, '2020-05-16', 1),
(34, 'Et atque assumenda autem.', 'Quae suscipit cumque sunt', 'Nihil aut odit non quibusdam qui voluptatibus voluptas. In aspernatur hic iusto. Reiciendis dolorum voluptas sit consequatur officiis. Quaerat ut neque tenetur quis quas molestiae. Ut quae sit quo sit sit. Beatae repudiandae provident labore nulla debitis. Doloribus totam et illum labore repellendus ut. Amet voluptatem inventore eum est dolorum soluta quasi. Sint id eligendi et consequuntur et. Voluptate laboriosam vitae nihil aperiam dicta suscipit. Illo quasi ex ipsam. Dolor est explicabo quas aut beatae. Aut fugit alias omnis eos inventore aut ullam. Dolore laboriosam ducimus quia qui quod. Quibusdam repudiandae quibusdam aut aut. Maxime est sequi aut. Est incidunt omnis qui voluptatem voluptatem qui. Quia modi soluta natus quaerat dolore reprehenderit laudantium. Repudiandae et voluptatem fugiat consequatur. Labore adipisci officiis veniam architecto. Dolorem qui et necessitatibus. Eos animi quae ut consequuntur perferendis ducimus. Tempore sint provident error. Sit rem voluptas atque sit impedit sed natus. Illum sequi amet officia qui nihil sint omnis enim.', 1, '1984-09-27', 1),
(22, 'Suscipit sed nihil distinctio est.', 'Laboriosam est nisi ut mi', 'Animi et eum velit nulla. Reprehenderit iste veritatis quasi iure dolores. Rerum itaque tenetur et nulla et cumque aut. Exercitationem sint sed quia possimus ducimus labore placeat. Qui delectus facere ullam enim voluptas. Deserunt officia libero est ut deserunt. Rerum quam et beatae iure suscipit consequuntur consectetur. Sit corporis enim laudantium. Adipisci quasi officia facere possimus aut deserunt. Voluptatem vitae cumque molestiae quibusdam dolor pariatur voluptatem. Quae ea harum aut mollitia tempore voluptate. Earum architecto ut enim reiciendis molestiae praesentium explicabo. Ducimus hic incidunt voluptas assumenda dicta ipsam. Nostrum blanditiis totam incidunt rem quo sit. Consequatur velit dolorem rerum architecto. Veritatis sit eligendi ad aperiam maxime similique. Neque qui aperiam ipsam corrupti. Consequatur illum ex sequi dignissimos cum quos voluptas. Dicta sunt consequuntur autem neque distinctio repellat.', 2, '1972-02-10', 1),
(29, 'Cum et quo laudantium.', 'Ipsam aut explicabo nisi ', 'Esse et rerum sapiente possimus architecto totam ut nihil. Saepe nobis dolores et qui. Iusto ex odio aut fuga molestiae odio nam. Ut eveniet delectus non vitae. Possimus occaecati sunt perspiciatis necessitatibus. Voluptas doloremque magni sint reprehenderit ipsam. Voluptatem quibusdam laudantium molestiae sed. Dignissimos et eligendi deleniti sed delectus. Et omnis doloribus et eligendi. Quia dignissimos qui officia tempore. Odio et possimus dolores hic et facere. Delectus omnis amet facilis. Voluptas voluptatibus illo officiis dolores nobis numquam. Enim consequatur et quia vitae. Aliquam quia sed quos unde delectus sit quidem fugit. Saepe rem consectetur assumenda nesciunt. Exercitationem optio expedita necessitatibus accusamus iure. Voluptates unde odio sunt temporibus non. Nemo dolorem incidunt perferendis est magni accusamus. Minus veritatis molestiae quam at et maxime molestiae natus. Non aut eius at et voluptates quod blanditiis. Architecto sunt autem soluta ut veniam voluptas quia aut. Fugit non totam quia consequatur. Saepe laudantium mollitia saepe enim aliquid accusamus illo impedit. Ipsa tempora totam sed. A nobis illum nam rerum corrupti sint. Porro libero voluptate beatae dolorem quia molestias voluptatum.', 1, '1989-10-03', 2),
(18, 'Dolores nemo incidunt debitis.', 'Ut pariatur quasi nobis e', 'Dicta molestiae eligendi veniam ut. Magni repellat deleniti impedit necessitatibus animi. Ratione dolor et non. Minima tempore perferendis laboriosam excepturi voluptas ut voluptatem. Explicabo omnis nulla beatae voluptas voluptas culpa. Quam illum exercitationem aperiam. Aut et aut aliquam. Voluptatibus voluptatum itaque et maxime voluptatum quisquam voluptate. Qui provident repellat ratione libero sequi voluptatem. Debitis ducimus soluta consequatur est dignissimos doloribus. Aliquam ab quia ipsum dolorum quia quo. Perspiciatis nihil vel vel sunt. Doloribus ex molestias hic voluptatem et in. Dolorem nihil dolorem itaque laudantium modi vel. Aut dolor accusantium facilis aspernatur. Qui corrupti facilis eos incidunt. Aut aperiam vel ratione ullam odit. Ut nisi ut nemo id. Cumque alias quia eius aliquid omnis voluptatem labore. Ipsa numquam consectetur nihil. Libero fuga placeat doloribus quos dolor ut. Nostrum totam quae nisi eum voluptatem. Voluptatem placeat vitae error quos voluptas. Occaecati cum voluptatem adipisci modi et sed. Odio fugiat in id doloribus autem. Aut sapiente architecto inventore.', 2, '1980-04-09', 2),
(84, 'Quae tempore voluptas.', 'Optio et sunt quod pariat', 'Eos perferendis et ipsum et odio consectetur nostrum. Sunt incidunt eos sit ab. Saepe saepe dolores et saepe assumenda quisquam quaerat. Pariatur ea necessitatibus adipisci dolor. Ea culpa suscipit voluptas. Et atque molestiae similique sed. Neque ut et repudiandae dolore aut quod. Ullam beatae facere quos ut corrupti ut molestiae dicta. Atque repellendus eius consectetur earum cupiditate commodi esse. Ullam error fugiat dicta. Ut est dicta qui magni aut. Maiores eveniet velit voluptatem repellendus nobis. Ipsum eligendi ab reprehenderit earum quidem quo vel. Eius laboriosam aut incidunt consequatur. Quia totam quia nam et et commodi quis sed. Illum quia temporibus et ut. Minima iure qui eius. Et in ea maxime consequuntur iure tempore sed est. Itaque labore veniam qui iusto et quis. Impedit corrupti aliquid qui dolorem qui voluptatem quaerat non.', 1, '2003-07-04', 1),
(0, 'aaa', 'aaa', 'aaa', 1, '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `roleId` int(11) NOT NULL,
  `roleName` varchar(75) NOT NULL,
  `roleSummary` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`roleId`, `roleName`, `roleSummary`) VALUES
(1, 'Admin', 'Yönetici Hesabı'),
(2, 'Editör', 'Editör Hesabı'),
(3, 'Yazar', 'Yazar Hesabı'),
(4, 'Abone', 'Site Kullanıcısı Hesabı');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userFirstname` varchar(50) NOT NULL,
  `userSurname` varchar(50) NOT NULL,
  `userMail` varchar(75) NOT NULL,
  `username` varchar(75) NOT NULL,
  `userPass` varchar(75) NOT NULL,
  `userRole` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userFirstname`, `userSurname`, `userMail`, `username`, `userPass`, `userRole`) VALUES
(1, 'Onur Alp', 'KARAKAYA', 'alpkrky1@gmail.com', 'alp', '1234', 1),
(2, 'Elif Zeynep', 'KARAKAYA', 'elif@gmail.com', 'elif', '123456', 3),
(3, 'Mert', 'Kasap', 'mert@gmail.com', 'mert', '12345', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catId`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD KEY `postAuthor` (`postAuthor`),
  ADD KEY `postCat` (`postCat`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`roleId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD KEY `userRole` (`userRole`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `catId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `roleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`postAuthor`) REFERENCES `users` (`userId`),
  ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`postCat`) REFERENCES `category` (`catId`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`userRole`) REFERENCES `role` (`roleId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
