<?php
//connect to MySQL
include_once 'config.php';

$query = 'DROP TABLE IF EXISTS rnmembers';
mysql_query($query, $con) or die (mysql_error($con));
//create the table
$query = '
        CREATE TABLE rnmembers (
        id            INTEGER UNSIGNED  NOT NULL AUTO_INCREMENT, 
        user          VARCHAR(255)       NOT NULL,
        pass          VARCHAR(255)       NOT NULL,
        name          VARCHAR(255)       NOT NULL,
        email         VARCHAR(255)       NOT NULL,
        tel           VARCHAR(255)       NOT NULL,
        thumbnail     VARCHAR(255)       NOT NULL,
        university    VARCHAR(255)       NOT NULL,
        job           VARCHAR(255)       NOT NULL,
        gender        VARCHAR(255)       NOT NULL,

        PRIMARY KEY (id)
    ) 
	CHARACTER SET = utf8
    ENGINE=MyISAM';
mysql_query($query, $con) or die (mysql_error($con));

$query = 'DROP TABLE IF EXISTS groups';
mysql_query($query, $con) or die (mysql_error($con));
//create the table
$query = '
        CREATE TABLE groups (
        id               INTEGER UNSIGNED  NOT NULL AUTO_INCREMENT, 
        name             VARCHAR(255)      NOT NULL,
        thumbnail        VARCHAR(255)      NOT NULL,
        intro            VARCHAR(255)      NOT NULL,
        location         VARCHAR(255)      NOT NULL,
        tagString        VARCHAR(255)      NOT NULL,
        hashtag          VARCHAR(255)      NOT NULL,
        membersCount     INT               NOT NULL,

        PRIMARY KEY (id)
    ) 
	CHARACTER SET = utf8
    ENGINE=MyISAM';
mysql_query($query, $con) or die (mysql_error($con));

$query = 'DROP TABLE IF EXISTS contacts';
mysql_query($query, $con) or die (mysql_error($con));
//create the table
$query = '
        CREATE TABLE contacts (
        id                INTEGER UNSIGNED  NOT NULL AUTO_INCREMENT, 
        name              VARCHAR(255)      NOT NULL,
        groupId           INT               NOT NULL,
        sectionNumber     INT               NOT NULL,
        email             VARCHAR(255)      NOT NULL,
        tel               VARCHAR(255)      NOT NULL,
        thumbnail         VARCHAR(255)      NOT NULL,
        university        VARCHAR(255)      NOT NULL,
        job               VARCHAR(255)      NOT NULL,
        gender            VARCHAR(255)      NOT NULL,
        tagString         VARCHAR(255)      NOT NULL,
        hashtag           VARCHAR(255)      NOT NULL,
        memberName        VARCHAR(255)      NOT NULL,
 
        PRIMARY KEY (id)
    ) 
	CHARACTER SET = utf8
    ENGINE=MyISAM';
mysql_query($query, $con) or die (mysql_error($con));

$query = 'DROP TABLE IF EXISTS tbl_images';
mysql_query($query, $con) or die (mysql_error($con));
//create the table
$query = '
        CREATE TABLE tbl_images (
        id           INTEGER UNSIGNED  NOT NULL AUTO_INCREMENT, 
        groupId      INT               NOT NULL,
        url          VARCHAR(255)      NOT NULL,

        PRIMARY KEY (id)
    ) 
    ENGINE=MyISAM';
mysql_query($query, $con) or die (mysql_error($con));

$query = 'DROP TABLE IF EXISTS admin';
mysql_query($query, $con) or die (mysql_error($con));
//create the table
$query = '
        CREATE TABLE admin (
        id           INTEGER UNSIGNED  NOT NULL AUTO_INCREMENT, 
        groupId      INT               NOT NULL,
        userId       VARCHAR(255)      NOT NULL,

        PRIMARY KEY (id)
    ) 
    ENGINE=MyISAM';
mysql_query($query, $con) or die (mysql_error($con));

$query = 'DROP TABLE IF EXISTS favorites';
mysql_query($query, $con) or die (mysql_error($con));
//create the table
$query = '
        CREATE TABLE favorites (
        id           INTEGER UNSIGNED  NOT NULL AUTO_INCREMENT, 
        contactId    INT               NOT NULL,
        groupId      INT               NOT NULL,
        user         VARCHAR(255)      NOT NULL,
        favorites    INT               NOT NULL,

        PRIMARY KEY (id)
    ) 
    ENGINE=MyISAM';
mysql_query($query, $con) or die (mysql_error($con));

echo 'Database successfully created!';
?>