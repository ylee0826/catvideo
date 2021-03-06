DROP DATABASE IF EXISTS catvideos;

CREATE DATABASE IF NOT EXISTS catvideos;
GRANT ALL PRIVILEGES ON catvideos.* to 'ylee'@'localhost' identified by 'hello123';
USE catvideos;

DROP TABLE IF EXISTS videos;

CREATE TABLE IF NOT EXISTS videos (
  id INT NOT NULL AUTO_INCREMENT,
  title VARCHAR(50) NOT NULL,
  url BLOB NOT NULL,
  vidlength TIME,
  rating DEC(3,1),
  PRIMARY KEY (id)
) ;

CREATE INDEX video_title
ON videos (title);


DROP TABLE IF EXISTS breeds;

CREATE TABLE IF NOT EXISTS breeds (
	breed_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	breed_name VARCHAR(30)
);


DROP TABLE IF EXISTS categories;

CREATE TABLE IF NOT EXISTS categories (
	categ_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	categ_name VARCHAR(30)
);


DROP TABLE IF EXISTS ages;

CREATE TABLE IF NOT EXISTS ages (
	age_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	age_name VARCHAR(30)
);


DROP TABLE IF EXISTS activities;

CREATE TABLE IF NOT EXISTS activities (
	activ_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	activ_name VARCHAR(30)
);



DROP TABLE IF EXISTS vid_breeds;

CREATE TABLE IF NOT EXISTS vid_breeds (
	id INT NOT NULL,
	breed_id INT NOT NULL,
	FOREIGN KEY (id) REFERENCES videos(id),
	FOREIGN KEY (breed_id) REFERENCES breeds(breed_id),
	PRIMARY KEY (id, breed_id)
);


DROP TABLE IF EXISTS vid_categories;

CREATE TABLE IF NOT EXISTS vid_categories (
	id INT NOT NULL,
	categ_id INT NOT NULL,
	FOREIGN KEY (id) REFERENCES videos(id),
	FOREIGN KEY (categ_id) REFERENCES categories(categ_id),
	PRIMARY KEY (id, categ_id)
);


DROP TABLE IF EXISTS vid_ages;

CREATE TABLE IF NOT EXISTS vid_ages (
	id INT NOT NULL,
	age_id INT NOT NULL,
	FOREIGN KEY (id) REFERENCES videos(id),
	FOREIGN KEY (age_id) REFERENCES ages(age_id),
	PRIMARY KEY (id, age_id)
);


DROP TABLE IF EXISTS vid_activities;

CREATE TABLE IF NOT EXISTS vid_activities (
	id INT NOT NULL,
	activ_id INT NOT NULL,
	FOREIGN KEY (id) REFERENCES videos(id),
	FOREIGN KEY (activ_id) REFERENCES activities(activ_id),
	PRIMARY KEY (id, activ_id)
);


INSERT INTO videos(title, url, vidlength, rating) VALUES
('Many too small boxes and Maru', 'http://www.youtube.com/embed/2XID_W4neJo', '00:02:58', 8.2),
('Cat wants to be petted like this', 'http://www.youtube.com/embed/V6JCaT69v1M', '00:00:10', 5.0),
('ROOMBA Cat uses iRobot Roomba 560 Robotic Vacuum Cleaner', 'http://www.youtube.com/embed/ewdbilSWjaM', '00:00:59', 4.0),
('Surprised Kitty', 'http://www.youtube.com/embed/0Bmhjf0rKe8', '00:00:17', 9.0),
('Cute cat thinks it\'s a dog', 'http://www.youtube.com/embed/8ZuCT4PmurY', '00:01:09', 6.0),
('Epic Cat Tower Battle', 'http://www.youtube.com/embed/33uTpyH_OFY', '00:01:59', 7.9),
('Cat barks like a dog at bubbles', 'http://www.youtube.com/embed/IRxX6LZmr2U', '00:00:55', 8.5);

INSERT INTO categories(categ_name) VALUES
('funny'),
('cute'),
('heartwarming'),
('amazing');

INSERT INTO activities(activ_name) VALUES
('playing'),
('sleeping'),
('cuddling'),
('fighting'),
('vocalizing'),
('eating'),
('doing tricks');

INSERT INTO ages(age_name) VALUES
('kitten'),
('juvenile'),
('adult');

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

INSERT INTO vid_categories(id, categ_id) VALUES
(1,1),
(2,1),
(2,2),
(3,1),
(4,1),
(4,2),
(5,1),
(5,2),
(5,3),
(6,1),
(7,1),
(7,2);

INSERT INTO vid_ages(id, age_id) VALUES
(1,3),
(2,3),
(3,3),
(4,1),
(5,2),
(6,3),
(7,3);

INSERT INTO vid_activities(id, activ_id) VALUES
(1,1),
(2,3),
(2,7),
(3,1),
(4,1),
(5,1),
(5,7),
(6,1),
(6,4),
(7,1);

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
