

CREATE DATABASE IF NOT EXISTS catvideos;
GRANT ALL PRIVILEGES ON catvideos.* to 'ylee'@'localhost' identified by 'hello123';
USE catvideos;

DROP TABLE IF EXISTS videos;

CREATE TABLE IF NOT EXISTS videos (
  id int NOT NULL AUTO_INCREMENT,
  title varchar(50) NOT NULL,
  url blob NOT NULL,
  length TIME(0),
  breed varchar(25),
  category varchar(25),
  tags blob,
  rating dec(3,1),
  PRIMARY KEY (id)
) ;

INSERT INTO videos (title, url, length, breed, category, tags, rating) VALUES
('Many too small boxes and Maru', 'https://www.youtube.com/watch?v=2XID_W4neJo', '00:02:58', 'Scottish fold', 'Funny', 'box, playing', 8.2),
('Cat barks like a dog at bubbles', 'http://www.youtube.com/watch?v=IRxX6LZmr2U&list=FL15i_L_4S6E52-ysZ9AD76Q', '00:00:55', 'Shorthair', 'Funny', 'bubbles, playing, meowing', 8.5);