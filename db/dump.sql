CREATE DATABASE `mybookmanager` /*!40100 DEFAULT CHARACTER SET latin1 */;

use mybookmanager;

CREATE TABLE `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `year` int(11) DEFAULT NULL,
  `genre` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

insert into books (title, author, year) values ('Gardens Of The Moon', 'Steven Erikson', 1999);
insert into books (title, author, year) values ('11/22/63', 'Stephen King', 2011);
insert into books (title, author, year) values ('The Dragon Reborn', 'Robert Jordan', 1991);
insert into books (title, author, year) values ('Mirage', 'Clive Cussler', 2013);
insert into books (title, author, year) values ('Before They Are Hanged', 'Joe Abercrombie', 2007);