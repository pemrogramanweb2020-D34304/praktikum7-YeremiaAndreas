<?php
CREATE TABLE `pendaftaran_siswa`.`calon_siswa` (
    `NIK` INT NOT NULL AUTO_INCREMENT ,  
    `Nama` VARCHAR() NOT NULL ,  
    `Tanggal_lahir` VARCHAR() NOT NULL ,  
    `Tempat_lahir` VARCHAR() NOT NULL ,  
    `Foto` VARCHAR() NOT NULL ,     
    PRIMARY KEY  (`id`)
) ENGINE = InnoDB;