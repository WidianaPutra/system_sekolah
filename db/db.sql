CREATE TABLE siswa (
   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   nis INT(6) NOT NULL,
   nama VARCHAR(200) NOT NULL,
   alamat VARCHAR(200) NOT NULL,
   JK BOOLEAN DEFAULT NULL,
   email VARCHAR(100) NOT NULL,
   telepon VARCHAR(15) NOT NULL,
   kelas VARCHAR(15) NOT NULL

);


CREATE TABLE kelas (
   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   kelas VARCHAR(10) NOT NULL

);

CREATE TABLE kejuruan (
   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   kode VARCHAR(10) NOT NULL,
   nama VARCHAR(50) NOT NULL
);

CREATE TABLE guru (
   id INT(5) AUTO_INCREMENT PRIMARY KEY,
   username VARCHAR(100) NOT NULL,
   email VARCHAR(100) NOT NULL,
   pass VARCHAR(100) NOT NULL,
   mapel VARCHAR(100) NOT NULL,
   img VARCHAR(255) NOT NULL
);

CREATE TABLE data_kelas (
   id INT(5) AUTO_INCREMENT PRIMARY KEY,
   nama VARCHAR(100) NOT NULL,
   kelas VARCHAR(10) NOT NULL,
   jk VARCHAR(10) NOT NULL,
   email VARCHAR(100) NOT NULL
);
