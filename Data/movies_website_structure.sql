drop database if exists movieswebsite;
create database movieswebsite;
use movieswebsite;

drop table if exists user;
create table user(
userID int NOT NULL primary key AUTO_INCREMENT,
username varchar(20) NOT NULL UNIQUE,
password varchar(10) NOT NULL,
f_name varchar(15) NOT NULL,
l_name varchar(15),
age int,
bio text(100),
gender varchar(10),
email varchar(20),
pic_url varchar(150)
);

drop table if exists genre;
create table genre(
genreID int NOT NULL PRIMARY KEY,
genre_name varchar(15) NOT NULL
);

drop table if exists movie;
create table movie(
movieID int NOT NULL PRIMARY KEY,
title text(100) NOT NULL,
rating double,
seasons int,
image_url text(500)
);

drop table if exists review;
create table review(
reviewID int NOT NULL PRIMARY KEY,
user int NOT NULL,
movie int NOT NULL,
title varchar(50) NOT NULL,
review_text text(250) NOT NULL,
review_rating int
);

drop table if exists followers;
create table followers(
user int NOT NULL,
followerID int not null
);

drop table if exists wishlist;
create table wishlist(
user int NOT NULL,
movie int NOT NULL
);

drop table if exists watched_movies;
create table watched_movies(
user int NOT NULL,
movie int NOT NULL,
favourite boolean NOT NULL
);

drop table if exists movie_genre;
create table movie_genre(
movieID int NOT NULL,
genreID int NOT NULL,
primary key (movieID, genreID)
);


alter table review add foreign key (user) references user(userID);
alter table review add foreign key (movie) references movie(movieID);
alter table followers add foreign key (user) references user(userID);
alter table followers add foreign key (followerID) references user(userID);
alter table wishlist add foreign key (user) references user(userID);
alter table wishlist add foreign key (movie) references movie(movieID);
alter table watched_movies add foreign key (user) references user(userID);
alter table watched_movies add foreign key (movie) references movie(movieID);
alter table movie_genre add foreign key (movieID) references movie(movieID);
alter table movie_genre add foreign key (genreID) references genre(genreID);