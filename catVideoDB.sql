

CREATE DATABASE IF NOT EXISTS 'catvideos';
GRANT ALL PRIVILEGES ON catVideoDB.* to 'ylee'@'localhost' identified by 'hello123';
USE catvideos;

CREATE TABLE IF NOT EXISTS `videos` (
  'id' int(11) NOT NULL AUTO_INCREMENT,
  'title' varchar(50) NOT NULL,
  'url' blob NOT NULL,
  'breed' varchar(25) NOT NULL,
  'tags' blob NOT NULL,
  'cuteness' int(1) NOT NULL,
  'funniness' int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

INSERT INTO 'videos' ('id', 'title', 'url', 'breed', 'tags', 'cuteness', 'funniness') VALUES
(1, 'Many too small boxes and Maru', 'https://www.youtube.com/watch?v=2XID_W4neJo', 'Scottish fold', 'box, playing', 5, 8);