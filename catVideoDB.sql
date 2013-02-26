

CREATE DATABASE IF NOT EXISTS catvideos;
GRANT ALL PRIVILEGES ON catvideos.* to 'ylee'@'localhost' identified by 'hello123';
USE catvideos;

DROP TABLE IF EXISTS videos;

CREATE TABLE IF NOT EXISTS videos (
  id int NOT NULL AUTO_INCREMENT,
  title VARCHAR(50) NOT NULL,
  url BLOB NOT NULL,
  vidlength TIME,
  breed VARCHAR(25),
  category VARCHAR(25),
  tags BLOB,
  rating DEC(3,1),
  PRIMARY KEY (id)
) ;

INSERT INTO videos (title, url, vidlength, breed, category, tags, rating) VALUES
('Many too small boxes and Maru', 'https://www.youtube.com/watch?v=2XID_W4neJo', '00:02:58', 'Scottish fold', 'Funny', 'box, playing', 8.2),
('Cat wants to be petted like this', 'http://www.youtube.com/watch?feature=player_embedded&v=V6JCaT69v1M', '00:00:10', 'Shorthair', 'heatwarming', 'petted', 5.0),
('ROOMBA Cat uses iRobot Roomba 560 Robotic Vacuum Cleaner', 'http://www.youtube.com/watch?feature=player_embedded&v=ewdbilSWjaM', '00:00:59', '', 'Funny', 'roomba', 4.0),
('Surprised Kitty', 'http://www.youtube.com/watch?feature=player_embedded&v=0Bmhjf0rKe8', '00:00:17', 'Shorthair', 'Cute', 'supprised', 9.0),
('Cute cat thinks it\'s a dog', 'http://www.youtube.com/watch?feature=player_embedded&v=8ZuCT4PmurY#!', '00:01:09', 'Shorthair', 'Funny', 'Dog', 6.0),
('Cat barks like a dog at bubbles', 'http://www.youtube.com/watch?v=IRxX6LZmr2U&list=FL15i_L_4S6E52-ysZ9AD76Q', '00:00:55', 'Shorthair', 'Funny', 'bubbles, playing, meowing', 8.5);