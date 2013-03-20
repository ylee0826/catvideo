DROP DATABASE IF EXISTS catvideos;

CREATE DATABASE IF NOT EXISTS catvideos;
GRANT ALL PRIVILEGES ON catvideos.* to 'ylee'@'localhost' identified by 'hello123';
USE catvideos;

DROP TABLE IF EXISTS videos;

CREATE TABLE IF NOT EXISTS videos (a
  id INT NOT NULL AUTO_INCREMENT,
  title VARCHAR(50) NOT NULL,
  url BLOB NOT NULL,
  vidlength TIME,
  rating DEC(3,1),
  PRIMARY KEY (id)
) ;


DROP TABLE IF EXISTS breeds;

CREATE TABLE IF NOT EXISTS breeds (
	breed_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	breed_name VARCHAR(30)
);


DROP TABLE IF EXISTS tags;

CREATE TABLE IF NOT EXISTS tags (
	tag_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	tag_name VARCHAR(30)
);


DROP TABLE IF EXISTS vid_breeds;

CREATE TABLE IF NOT EXISTS vid_breeds (
	id INT NOT NULL,
	breed_id INT NOT NULL,
	FOREIGN KEY (id) REFERENCES videos(id),
	FOREIGN KEY (breed_id) REFERENCES breeds(breed_id),
	PRIMARY KEY (id, breed_id)
);


DROP TABLE IF EXISTS vid_tags;

CREATE TABLE IF NOT EXISTS vid_tags (
	id INT NOT NULL,
	tag_id INT NOT NULL,
	FOREIGN KEY (id) REFERENCES videos(id),
	FOREIGN KEY (tag_id) REFERENCES tags(tag_id),
	PRIMARY KEY (id, tag_id)
);


INSERT INTO videos(title, url, vidlength, rating) VALUES
('Many too small boxes and Maru', 'http://www.youtube.com/embed/2XID_W4neJo', '00:02:58', 8.2),
('Cat wants to be petted like this', 'http://www.youtube.com/embed/V6JCaT69v1M', '00:00:10', 5.0),
('ROOMBA Cat uses iRobot Roomba 560 Robotic Vacuum Cleaner', 'http://www.youtube.com/embed/ewdbilSWjaM', '00:00:59', 4.0),
('Surprised Kitty', 'http://www.youtube.com/embed/0Bmhjf0rKe8', '00:00:17', 9.0),
('Cute cat thinks it\'s a dog', 'http://www.youtube.com/embed/8ZuCT4PmurY', '00:01:09', 6.0),
('Epic Cat Tower Battle', 'http://www.youtube.com/embed/33uTpyH_OFY', '00:01:59', 7.9),
('Cat barks like a dog at bubbles', 'http://www.youtube.com/embed/IRxX6LZmr2U', '00:00:55', 8.5);

INSERT INTO tags(tag_name) VALUES
('funny'),
('cute'),
('heartwarming'),
('amazing'),
('playing'),
('sleeping'),
('cuddling'),
('fighting'),
('biting'),
('vocalizing'),
('chasing'),
('jumping'),
('eating'),
('hissing'),
('climbing'),
('acting like a dog'),
('being pet'),
('kitten'),
('doing tricks');

INSERT INTO breeds(breed_name) VALUES
('Unspecified'),
('Persian'),
('Exotic shorthair'),
('British shorthair'),
('Siamese'),
('Ragdoll'),
('Bengal'),
('Tabby'),
('Scottish fold'),
('Hairless');

INSERT INTO vid_tags(id, tag_id) VALUES
(1, 1),
(1, 5),
(2, 1),
(2, 2),
(2, 17),
(2, 19),
(3, 1),
(4, 1),
(4, 2),
(4, 5),
(4, 18),
(5, 1),
(5, 11),
(5, 16),
(6, 1),
(6, 5),
(6, 8),
(6, 9),
(6, 12),
(6, 15),
(7, 1),
(7, 2),
(7, 5),
(7, 10),
(7, 15);

INSERT INTO vid_breeds(id, breed_id) VALUES
(1, 9),
(2, 8),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(6, 8),
(7, 1),
(7, 8);






