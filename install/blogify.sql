-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2016 at 04:04 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `newdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `cat_tbl`
--

CREATE TABLE IF NOT EXISTS `cat_tbl` (
`id` int(11) NOT NULL,
  `post_cat` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat_tbl`
--

INSERT INTO `cat_tbl` (`id`, `post_cat`) VALUES
(1, 'Business'),
(2, 'Lifehack'),
(3, 'Entreprenourship');

-- --------------------------------------------------------

--
-- Table structure for table `posts_tbl`
--

CREATE TABLE IF NOT EXISTS `posts_tbl` (
`id` int(112) NOT NULL,
  `post_title` varchar(300) NOT NULL,
  `post_cat` varchar(150) NOT NULL,
  `post_tag` varchar(100) NOT NULL,
  `post_body` varchar(2000) NOT NULL,
  `date` date NOT NULL,
  `file` varchar(700) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts_tbl`
--

INSERT INTO `posts_tbl` (`id`, `post_title`, `post_cat`, `post_tag`, `post_body`, `date`, `file`) VALUES
(1, 'Technology Expands Parental Leave Ahead of the Birth of Mark Zuckerberg''s Baby', '1', 'Business', '<p>Facebook Expands Parental Leave Ahead of the Birth of Mark Zuckerberg&#39;s Baby Facebook Expands Parental Leave Ahead of the Birth of Mark Zuckerberg&#39;s Baby Facebook Expands Parental Leave Ahead of the Birth of Mark Zuckerberg&#39;s Baby Facebook Expands Parental Leave Ahead of the Birth of Mark Zuckerberg&#39;s Baby Facebook Expands Parental Leave Ahead of the Birth of Mark Zuckerberg&#39;s Baby Facebook Expands Parental Leave Ahead of the Birth of Mark Zuckerberg&#39;s Baby Facebook Expands Parental Leave Ahead of the Birth of Mark Zuckerberg&#39;s Baby Facebook Expands Parental Leave Ahead of the Birth of Mark Zuckerberg&#39;s Baby Facebook Expands Parental Leave Ahead of the Birth of Mark Zuckerberg&#39;s Baby Facebook Expands Parental Leave Ahead of the Birth of Mark Zuckerberg&#39;s Baby Facebook Expands Parental Leave Ahead of the Birth of Mark Zuckerberg&#39;s Baby Facebook Expands Parental Leave Ahead of the Birth of Mark Zuckerberg&#39;s Baby Facebook Expands Parental Leave Ahead of the Birth of Mark Zuckerberg&#39;s Baby Facebook Expands Parental Leave Ahead of the Birth of Mark Zuckerberg&#39;s Baby Facebook Expands Parental Leave Ahead of the Birth of Mark Zuckerberg&#39;s Baby Facebook Expands Parental Leave Ahead of the Birth of Mark Zuckerberg&#39;s Baby Facebook Expands Parental Leave Ahead of the Birth of Mark Zuckerberg&#39;s Baby Facebook Expands Parental Leave Ahead of the Birth of Mark Zuckerberg&#39;s Baby</p>\r\n', '2016-04-14', 'your_site_name_be6517324de70cc627e399b9e600cc20.jpg'),
(2, 'This is just beyond measure', '1', 'Success', '<p>This is just beyond measureThis is just beyond measurevvThis is just beyond measureThis is just beyond measureThis is just beyond measureThis is just beyond measureThis is just beyond measureThis is just beyond measureThis is just beyond measureThis is just beyond measureThis is just beyond measureThis is just beyond measureThis is just beyond measureThis is just beyond measureThis is just beyond measureThis is just beyond measureThis is just beyond measureThis is just beyond measureThis is just beyond measureThis is just beyond measureThis is just beyond measureThis is just beyond measureThis is just beyond measureThis is just beyond measureThis is just beyond measureThis is just beyond measureThis is just beyond measure</p>\r\n', '2016-04-15', 'eblog_1ed668c97d594391edc7297ca55f38a0.jpg'),
(3, 'Please fill details to save a new post here', '3', 'Youtube', '<p>Please fill details to save a new post here Please fill details to save a new post here Please fill details to save a new post here Please fill details to save a new post herePlease fill details to save a new post here Please fill details to save a new post here Please fill details to save a new post here Please fill details to save a new post here Please fill details to save a new post here Please fill details to save a new post here Please fill details to save a new post here Please fill details to save a new post here Please fill details to save a new post here Please fill details to save a new post here Please fill details to save a new post here Please fill details to save a new post here Please fill details to save a new post here bPlease fill details to save a new post here Please fill details to save a new post here Please fill details to save a new post here Please fill details to save a new post here</p>\r\n', '2016-04-15', 'eblog_333e9c3cc66767ea5e1c8e1971dec68d.jpg'),
(5, 'This is just beyond measure', '2', 'Things', '<p>This is just beyond measure This is just beyond measure This is just beyond measureThis is just beyond measureThis is just beyond measure This is just beyond measure This is just beyond measure This is just beyond measure This is just beyond measure This is just beyond measure This is just beyond measure This is just beyond measure This is just beyond measure This is just beyond measure This is just beyond measure This is just beyond measure This is just beyond measure This is just beyond measure This is just beyond measure This is just beyond measure This is just beyond measure This is just beyond measure This is just beyond measure This is just beyond measure This is just beyond measure This is just beyond measure This is just beyond measure This is just beyond measure This is just beyond measure This is just beyond measure</p>\r\n', '2016-04-16', 'eblog_820db32bbc7db00ad7af7cef6e894227.jpg'),
(6, 'Know and Behold, I shall do something New', '2', 'DO something', '<p>Know and Behold, I shall do something New Know and Behold, I shall do something New Know and Behold, I shall do something New Know and Behold, I shall do something New Know and Behold, I shall do something New Know and Behold, I shall do something New Know and Behold, I shall do something New Know and Behold, I shall do something New Know and Behold, I shall do something New Know and Behold, I shall do something New Know and Behold, I shall do something New Know and Behold, I shall do something New Know and Behold, I shall do something New Know and Behold, I shall do something New Know and Behold, I shall do something New Know and Behold, I shall do something New Know and Behold, I shall do something New Know and Behold, I shall do something New Know and Behold, I shall do something New Know and Behold, I shall do something New Know and Behold, I shall do something New Know and Behold, I shall do something New Know and Behold, I shall do something New Know and Behold, I shall do something New Know and Behold, I shall do something New Know and Behold, I shall do something New Know and Behold, I shall do something New Know and Behold, I shall do something New</p>\r\n', '2016-04-16', 'eblog_16276cd4a76880131ef8d10631594c19.jpg'),
(7, 'Please fill details to save a new post ', '3', 'Me', '<p>&nbsp;Please fill details to save a new post Please fill details to save a new post&nbsp; Please fill details to save a new post&nbsp; Please fill details to save a new post &nbsp;Please fill details to save a new post &nbsp;Please fill details to save a new post &nbsp;Please fill details to save a new post &nbsp;Please fill details to save a new post &nbsp;Please fill details to save a new post &nbsp;Please fill details to save a new post &nbsp;Please fill details to save a new post &nbsp;Please fill details to save a new post &nbsp;Please fill details to save a new post &nbsp;Please fill details to save a new post &nbsp; &nbsp;Please fill details to save a new post Please fill details to save a new post Please fill details to save a new post</p>\r\n', '2016-04-16', 'eblog_d6ac2c0924e4d1b557ed21cefba50950.jpg'),
(8, 'Please fill details to save a new post Please fill details to save a new post', '1', 'Success', '<p>Please fill details to save a new post Please fill details to save a new post Please fill details to save a new post Please fill details to save a new post Please fill details to save a new post Please fill details to save a new post Please fill details to save a new post Please fill details to save a new post Please fill details to save a new post Please fill details to save a new post Please fill details to save a new post</p>\r\n', '2016-04-20', 'eblog_7a7671ac9949f0a5609ce6f66817c699.jpg'),
(9, 'My Young Players Are Making Us Proud â€“ Diego Simeone  ', '1', 'Sports', '<p>Atletico Madrid coach Diego Simeone hailed his side&rsquo;s character and fighting spirit after they lost Tuesday evening&rsquo;s Champions League semifinal 2-1 at Bayern Munich but qualified for the final on away goals.</p>\r\n\r\n<p>Atletico went to Munich with a 1-0 lead from last week&rsquo;s first leg, but Bayern soon evened things up when Xabi Alonso&rsquo;s free kick was deflected past visiting Jan Oblak as reward for a super-fast start from Pep Guardiola&rsquo;s side.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Just after half-time, a lightning counter-attack brought a vital away goal for Atletico from Antoine Griezmann, and even though Robert Lewandowski headed the teams level on aggregate late on, Simeone&rsquo;s side held on to progress to the decider against either Real Madrid or Manchester City in Milan on May 28.</p>\r\n\r\n<p>Speaking to Spanish TV channel Antena 3 after the final whistle, the Colchoneros coach admitted that Bayern had played a &ldquo;fantastic&rdquo; first half to come back into the game, but his team had been able to respond after the break.</p>\r\n\r\n<p>&ldquo;The first time we saw a tremendous team, pressure, play, positioning, pace, aerial power, speed &mdash; they were fantastic in the first half,&rdquo; Simeone said. &ldquo;We had not much of a response. In the second half it was a different game, more balanced, we countered well and scored. That allowed us to get closer to the end, with the advantage of the goal at the Calderon.&rdquo;</p>\r\n\r\n<p>A dramatic game also saw each side miss a penalty as Oblak saved from Thomas Muller when Bayern were well on top during the first half, while Manuel Neuer stopped a Fernando Torres spot kick which might have made it more comfortable for Atletico at the end.</p>\r\n\r\n<p><br />\r\nRead more: <a href="http://www.theinfostride.com/2016/05/my-young-players-are-making-us-proud-diego-simeone/#ixzz47hKeJBcE">http://www.theinfostride.com/2016/05/my-young-players-are-making-us-proud-diego-simeone/#ixzz47hKeJBcE</a></p>\r\n', '2016-05-04', 'eblog_c126a61cab3b19705cc5d39da8545530.jpg'),
(10, 'My Young Players Are Making Us Proud â€“ Diego Simeone', '1', 'Sports', '<p>My Young Players Are Making Us Proud &ndash; Diego Simeone My Young Players Are Making Us Proud &ndash; Diego Simeone My Young Players Are Making Us Proud &ndash; Diego Simeone</p>\r\n\r\n<p>My Young Players Are Making Us Proud &ndash; Diego Simeone</p>\r\n\r\n<p>My Young Players Are Making Us Proud &ndash; Diego SimeoneMy Young Players Are Making Us Proud &ndash; Diego SimeoneMy Young Players Are Making Us Proud &ndash; Diego Simeone</p>\r\n\r\n<p>My Young Players Are Making Us Proud &ndash; Diego Simeone My Young Players Are Making Us Proud &ndash; Diego Simeone</p>\r\n', '2016-05-04', 'eblog_5abbbd5eee64a4bed8f2a55fc535b36d.png'),
(11, 'Winning EPL Title Was Down To Work Rate â€“ Vardy  ', '1', 'Sports', '<p>Jamie Vardy believes the work ethic of his Leicester City team-mates this season has fired them to Premier League glory.</p>\r\n\r\n<p>The Foxes have shocked the footballing world this season by winning the English top flight only eight years after being relegated to League One, having begun the campaign favourites for the drop and 5000/1 outsiders for the title.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Vardy has also fought against the odds. He was playing non-league football only four years ago for Fleetwood Town, is now a Premier League champion and vying for a place in Roy Hodgson&rsquo;s starting line-up for Euro 2016.</p>\r\n\r\n<p>The striker, who played host to the entire squad on Monday night as they watched Tottenham hand them the title with a dramatic 2-2 draw at Chelsea, says the team&rsquo;s spirit has laid the foundations for their success.</p>\r\n\r\n<p>&ldquo;It&rsquo;s an unbelievable feeling, I&rsquo;ve never known anything like it. We were scrapping to stay in the league last season and on Saturday we&rsquo;ll be lifting the trophy,&rdquo; Vardy told the club&rsquo;s website.</p>\r\n\r\n<p>&ldquo;That gives you an idea of how much hard work has gone into this season from every single player and member of staff.</p>\r\n\r\n<p>&ldquo;It&rsquo;s the biggest achievement in the history of a great club and we all feel privileged to be part of it. It&rsquo;s even more special to have done it with these lads.</p>\r\n\r\n<p>&ldquo;Every minute of hard work we&rsquo;ve put in on the training pitch has been worth it for this moment.&rdquo;</p>\r\n\r\n<p>Celebrations in Leicester have hardly stopped since Monday night and they will continue this weekend when the Foxes lift the Premier League trophy after their game against Everton.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2016-05-05', 'eblog_899fa6e7c9592dbfd824e9fe85f1d93b.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE IF NOT EXISTS `quote` (
`id` int(11) NOT NULL,
  `quote` varchar(300) NOT NULL,
  `quote_by` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quote`
--

INSERT INTO `quote` (`id`, `quote`, `quote_by`) VALUES
(1, 'A maxim is the exact and noble expression of an important and indisputable truth. Good maxims are the germs of all excellence; when firmly fixed on the memory, they nourish the will.', 'Joseph Joubert');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
`id` int(11) NOT NULL,
  `site_name` varchar(45) NOT NULL,
  `site_title` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `site_desc` varchar(350) NOT NULL,
  `site_keyword` varchar(250) NOT NULL,
  `google_code` varchar(1000) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(60) NOT NULL,
  `country` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `facebook` varchar(45) NOT NULL,
  `twitter` varchar(34) NOT NULL,
  `linkedin` varchar(45) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `site_title`, `email`, `site_desc`, `site_keyword`, `google_code`, `street`, `city`, `country`, `phone`, `facebook`, `twitter`, `linkedin`, `status`) VALUES
(1, 'Blogify', 'eBlog', 'awolu_faith@live.com', 'This is a new Blog and it is cool!', 'Search Engine Ready, Business and others', '', 'Aule', 'Akure', 'Nigeria', '+234-8138652645', 'hillsoftsnetwork', 'awolufaith', 'torrahclef', 'mob_clef');

-- --------------------------------------------------------

--
-- Table structure for table `table_admin`
--

CREATE TABLE IF NOT EXISTS `table_admin` (
`id` int(20) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `file` varchar(567) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table_ads`
--

CREATE TABLE IF NOT EXISTS `table_ads` (
`id` int(20) NOT NULL,
  `header_ads` varchar(500) NOT NULL,
  `side_ads` varchar(500) NOT NULL,
  `footer_ads` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_ads`
--

INSERT INTO `table_ads` (`id`, `header_ads`, `side_ads`, `footer_ads`) VALUES
(1, '<!-- Adtall - Ad Display Code -->\r\n<script type="text/javascript" src="//www.adtall.com/display/js/ads.js?822&522&728&90&0"></script>\r\n<!-- Adtall - Ad Display Code -->', '<!-- Adtall - Ad Display Code -->\r\n<script type="text/javascript" src="//www.adtall.com/display/js/ads.js?821&522&300&250&0"></script>\r\n<!-- Adtall - Ad Display Code -->', 'Footer ads code here');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE IF NOT EXISTS `tbl_about` (
`id` int(11) NOT NULL,
  `body` varchar(2500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`id`, `body`) VALUES
(4, '<p>All <em>Idiorm</em> queries start <em>with</em> a call to the for_table static method on the <em>ORM</em> class. ... Method calls which <em>add</em> filters and constraints to your query are then strung together ... either a single instance of the <em>ORM</em> class representing the <em>database</em> row you ...... The <em>ORM</em> class instance(s) returned will contain <em>data</em> for all the columns&nbsp;...</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_resources`
--

CREATE TABLE IF NOT EXISTS `tbl_resources` (
`id` int(11) NOT NULL,
  `body` varchar(2000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_resources`
--

INSERT INTO `tbl_resources` (`id`, `body`) VALUES
(1, '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. <a href="http://localhost/konblog/index.php">Sed tortor.</a> Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user_online`
--

CREATE TABLE IF NOT EXISTS `user_online` (
  `session` varchar(100) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_online`
--

INSERT INTO `user_online` (`session`, `time`) VALUES
('9008ghdokf6e8vr1a33gj436s7', 1462367230);

-- --------------------------------------------------------

--
-- Table structure for table `youtube`
--

CREATE TABLE IF NOT EXISTS `youtube` (
`id` int(11) NOT NULL,
  `youtube_url` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `youtube`
--

INSERT INTO `youtube` (`id`, `youtube_url`, `date`) VALUES
(1, 'https://youtu.be/V6y0hS5gylw', '2016-04-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cat_tbl`
--
ALTER TABLE `cat_tbl`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts_tbl`
--
ALTER TABLE `posts_tbl`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quote`
--
ALTER TABLE `quote`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_admin`
--
ALTER TABLE `table_admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_ads`
--
ALTER TABLE `table_ads`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_resources`
--
ALTER TABLE `tbl_resources`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `youtube`
--
ALTER TABLE `youtube`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cat_tbl`
--
ALTER TABLE `cat_tbl`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `posts_tbl`
--
ALTER TABLE `posts_tbl`
MODIFY `id` int(112) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `quote`
--
ALTER TABLE `quote`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `table_admin`
--
ALTER TABLE `table_admin`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_ads`
--
ALTER TABLE `table_ads`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_resources`
--
ALTER TABLE `tbl_resources`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `youtube`
--
ALTER TABLE `youtube`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
