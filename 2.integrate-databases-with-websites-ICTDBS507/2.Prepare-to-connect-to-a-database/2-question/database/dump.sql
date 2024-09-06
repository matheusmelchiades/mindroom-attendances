CREATE DATABASE IF NOT EXISTS revolutionaryarmy;

USE revolutionaryarmy;

CREATE TABLE IF NOT EXISTS `members` (
	`id`	INTEGER AUTO_INCREMENT,
	`name`	TEXT,
	`epithet`	TEXT,
	PRIMARY KEY(`id`)
);

INSERT INTO `members` (`id`,`name`,`epithet`) VALUES (1,'Monkey D. Dragon','Supreme Commander');
INSERT INTO `members` (`id`,`name`,`epithet`) VALUES (2,'Sabo','Chief of Staff');
INSERT INTO `members` (`id`,`name`,`epithet`) VALUES (3,'Emporio Ivankov','G Army Commander');
INSERT INTO `members` (`id`,`name`,`epithet`) VALUES (4,'Karasu','North Army Commander');
INSERT INTO `members` (`id`,`name`,`epithet`) VALUES (5,'Belo Betty','East Army Commander');
INSERT INTO `members` (`id`,`name`,`epithet`) VALUES (6,'Morley','West Army Commander');
INSERT INTO `members` (`id`,`name`,`epithet`) VALUES (7,'Lindbergh','South Army Commander');
INSERT INTO `members` (`id`,`name`,`epithet`) VALUES (8,'Koala','Partner of Sabo');
INSERT INTO `members` (`id`,`name`,`epithet`) VALUES (9,'Inazuma','G Army Member');
INSERT INTO `members` (`id`,`name`,`epithet`) VALUES (10,'Bartholomew Kuma','World Government Plant');
INSERT INTO `members` (`id`,`name`,`epithet`) VALUES (11,'Hack','Partner of Sabo');

CREATE TABLE IF NOT EXISTS `images` (
	`id`	INTEGER AUTO_INCREMENT,
	`url`	TEXT,
	`member_id`	INTEGER,
	PRIMARY KEY(`id`),
	FOREIGN KEY(`member_id`) REFERENCES `members`(`id`)
);

INSERT INTO `images` (`id`,`url`,`member_id`) VALUES (1,'images/Monkey_D._Dragon_Portrait.webp',1);
INSERT INTO `images` (`id`,`url`,`member_id`) VALUES (2,'images/Sabo_Portrait.webp',2);
INSERT INTO `images` (`id`,`url`,`member_id`) VALUES (3, 'images/Emporio_Ivankov_Portrait.webp',3);
INSERT INTO `images` (`id`,`url`,`member_id`) VALUES (4, 'images/Karasu_Portrait.webp',4);
INSERT INTO `images` (`id`,`url`,`member_id`) VALUES (5, 'images/Belo_Betty_Portrait.webp',5);
INSERT INTO `images` (`id`,`url`,`member_id`) VALUES (6, 'images/Morley_Portrait.webp',6);
INSERT INTO `images` (`id`,`url`,`member_id`) VALUES (7, 'images/Lindbergh_Portrait.webp',7);
INSERT INTO `images` (`id`,`url`,`member_id`) VALUES (8, 'images/Koala_Portrait.webp',8);
INSERT INTO `images` (`id`,`url`,`member_id`) VALUES (9, 'images/Inazuma_Portrait.webp',9);
INSERT INTO `images` (`id`,`url`,`member_id`) VALUES (10, 'images/Bartholomew_Kuma_Portrait.webp',10);
INSERT INTO `images` (`id`,`url`,`member_id`) VALUES (11, 'images/Hack_Portrait.webp',11);

CREATE TABLE IF NOT EXISTS `members_profile` (
	`id`	INTEGER AUTO_INCREMENT,
	`member_id`	INTEGER,
	`age` INTEGER,
	`bio` TEXT,
	PRIMARY KEY(`id`),
	FOREIGN KEY(`member_id`) REFERENCES `members`(`id`)
);

INSERT INTO `members_profile` (`id`,`member_id`,`age`,`bio`) VALUES (1,1,55,'Monkey D. Dragon, commonly known as Dragon the Revolutionary, is the father of Monkey D. Luffy and the son of Monkey D. Garp. He is the infamous leader of the Revolutionary Army who has been attempting to overthrow the World Government.');
INSERT INTO `members_profile` (`id`,`member_id`,`age`,`bio`) VALUES (2,2,22,'Sabo is the Revolutionary Army''s chief of staff, recognized as the "No. 2" of the organization, and is the sworn brother of Monkey D. Luffy and Portgas D. Ace. He was formerly a noble from the Goa Kingdom until he was taken and freed by Monkey D. Dragon.');
INSERT INTO `members_profile` (`id`,`member_id`,`age`,`bio`) VALUES (3,3,44,'Emporio Ivankov, or Iva for short, is the "Queen" of the Kamabakka Kingdom, known as "Okama King" and a "Miracle Person", and is a commander of the Revolutionary Army. He is a drag queen and a master of the Horm-Horm Fruit.');
INSERT INTO `members_profile` (`id`,`member_id`,`age`,`bio`) VALUES (4,4,35,'Karasu is a former king of the Sorbet Kingdom and a commander of the Revolutionary Army. He is a crow mink and a master of the Tori Tori no Mi, Model: Crow.');
INSERT INTO `members_profile` (`id`,`member_id`,`age`,`bio`) VALUES (5,5,29,'Belo Betty is a commander of the Revolutionary Army and the leader of the East Army. She is a human who ate the Kobu Kobu no Mi, a Paramecia-type Devil Fruit that allows her to manipulate the emotions of people.');
INSERT INTO `members_profile` (`id`,`member_id`,`age`,`bio`) VALUES (6,6,38,'Morley is a giant and a commander of the Revolutionary Army. He is a giant sea king who ate the Kama Kama no Mi, a Paramecia-type Devil Fruit that allows him to create and manipulate tunnels.');
INSERT INTO `members_profile` (`id`,`member_id`,`age`,`bio`) VALUES (7,7,41,'Lindbergh is a commander of the Revolutionary Army and the leader of the South Army. He is a human who ate the Meto Meto no Mi, a Logia-type Devil Fruit that allows him to create and control metal.');
INSERT INTO `members_profile` (`id`,`member_id`,`age`,`bio`) VALUES (8,8,25,'Koala is a former slave and a member of the Revolutionary Army. She is a human who ate the Fish-Fish Fruit, Model: Mermaid, a Zoan-type Devil Fruit that allows her to transform into a mermaid.');
INSERT INTO `members_profile` (`id`,`member_id`,`age`,`bio`) VALUES (9,9,32,'Inazuma is a commander of the Revolutionary Army and a member of the G Army. He is a human who ate the Choki Choki no Mi, a Paramecia-type Devil Fruit that allows him to create and manipulate scissors.');
INSERT INTO `members_profile` (`id`,`member_id`,`age`,`bio`) VALUES (10,10,50,'Bartholomew Kuma, also known as "Tyrant", is a former Warlord of the Sea and a former officer of the Revolutionary Army. He was a human who ate the Nikyu Nikyu no Mi, a Paramecia-type Devil Fruit that allows him to repel anything he touches.');
INSERT INTO `members_profile` (`id`,`member_id`,`age`,`bio`) VALUES (11,11,35,'Hack is a fish-man with yellow skin that has brown spots on the upper part of his head, along with scales under his eyelids, sharp teeth, and gills on the sides of his neck. The fish-man has a muscular stature, with long light blue flowing hair and a thick blue mustache.');
