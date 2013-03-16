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