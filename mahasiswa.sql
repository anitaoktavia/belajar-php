CREATE DATABASE fakultas ;

CREATE TABLE jurusan (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    kode CHAR(4) NOT NULL, 
    nama VARCHAR(50) NOT NULL
);

 insert into jurusan (kode, nama) values ("APBL", "Teknologi Informasi");

CREATE TABLE mahasiswa (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    id_jurusan INTEGER NOT NULL,
    nim CHAR(8) NOT NULL,
    nama VARCHAR(50) NOT NULL,
    jenis_kelamin enum('Laki-laki', 'Perempuan') NOT NULL,
    tempat_lahir VARCHAR(50) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    alamat VARCHAR(255) NOT NULL,
    FOREIGN KEY (id_jurusan) REFERENCES jurusan (id)
);

<--masukkan data jurusan-->
insert into jurusan (kode, nama) values ("APBL", "Teknologi Informasi");

<--Masukkan data mahasiswa-->
insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tanggal_lahir, alamat) 
values (1, "2022001", "Anita", "perempuan", "2001-10-18", "Jl. Soekarno Hatta 9");

<--update mahasiswa-->
update mahasiswa set nama = "ayu" where id =2;

<--delete mahasiswa-->
delete from mahasiswa;
