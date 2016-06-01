###CREA BASE DE DATOS
DROP DATABASE IF EXISTS DARSIA;
CREATE DATABASE IF NOT EXISTS DARSIA;

###ABRE BASE DE DATOS
USE DARSIA;

###ELIMINAANDO TABLAS
DROP TABLE IF EXISTS Account;
DROP TABLE IF EXISTS Pj;
DROP TABLE IF EXISTS Race;
DROP TABLE IF EXISTS Stat;
DROP TABLE IF EXISTS Ability;
DROP TABLE IF EXISTS Speciality;
DROP TABLE IF EXISTS Class;
DROP TABLE IF EXISTS ClassEqItemType;
DROP TABLE IF EXISTS City;
DROP TABLE IF EXISTS Map;
DROP TABLE IF EXISTS Spot;
DROP TABLE IF EXISTS Item;
DROP TABLE IF EXISTS NPC;
DROP TABLE IF EXISTS NPCDialogue;

DROP TABLE IF EXISTS rAccountPj;
DROP TABLE IF EXISTS rPjCity;
DROP TABLE IF EXISTS rCityMap;
DROP TABLE IF EXISTS rPjSpot;
DROP TABLE IF EXISTS rMapSpot;
DROP TABLE IF EXISTS rSpotMap;
DROP TABLE IF EXISTS rSpotItem;
DROP TABLE IF EXISTS rInv;
DROP TABLE IF EXISTS rPjClass;
DROP TABLE IF EXISTS rPjRace;
DROP TABLE IF EXISTS rPjStat;
DROP TABLE IF EXISTS rPjAb;
DROP TABLE IF EXISTS rRaceStat;
DROP TABLE IF EXISTS rRaceSpec;
DROP TABLE IF EXISTS rClassSpec;
DROP TABLE IF EXISTS rSpecAb;
DROP TABLE IF EXISTS rRaceStat;
DROP TABLE IF EXISTS rAbStat;
DROP TABLE IF EXISTS rItemStat;
DROP TABLE IF EXISTS rSpotStat;
DROP TABLE IF EXISTS rNPCItem;
DROP TABLE IF EXISTS rNPCStat;
DROP TABLE IF EXISTS rNPCSpot;

###CREANDO TABLAS

#ENTIDADES
CREATE TABLE IF NOT EXISTS Account (
idAccount INT UNSIGNED AUTO_INCREMENT NOT NULL,
user VARCHAR (25) NOT NULL,
pass VARCHAR (25) NOT NULL,
email VARCHAR (64) NOT NULL,
CONSTRAINT PK_Account PRIMARY KEY (idAccount)
);

CREATE TABLE IF NOT EXISTS Pj (
idPj INT UNSIGNED AUTO_INCREMENT NOT NULL,
name VARCHAR (25) NOT NULL,
sex BOOLEAN NOT NULL,
lvl INT UNSIGNED NOT NULL,
XP INT UNSIGNED NOT NULL,
honor INT NOT NULL,
title VARCHAR (250) NOT NULL,
intel INT UNSIGNED NOT NULL,
stren INT UNSIGNED NOT NULL,
destr INT UNSIGNED NOT NULL,
abPoint INT UNSIGNED NOT NULL,
CONSTRAINT PK_Pj PRIMARY KEY (idPj)
);

CREATE TABLE IF NOT EXISTS Race (
idRace INT UNSIGNED AUTO_INCREMENT NOT NULL,
name VARCHAR (25) NOT NULL,
img VARCHAR (25) NOT NULL,
description TEXT NOT NULL,
CONSTRAINT PK_Race PRIMARY KEY (idRace)
);

CREATE TABLE IF NOT EXISTS Stat (
idStat INT UNSIGNED AUTO_INCREMENT NOT NULL,
AD INT NOT NULL,
AP INT NOT NULL,
Dge FLOAT (4,2) NOT NULL,
HP INT NOT NULL,
MP INT NOT NULL,
MR INT NOT NULL,
DR INT NOT NULL,
AtS FLOAT (4,2) NOT NULL,
weight INT NOT NULL,
crit FLOAT (4,2) NOT NULL,
critical FLOAT (4,2) NOT NULL,
MPReg FLOAT (4,2) NOT NULL,
HPReg FLOAT (4,2) NOT NULL,
charm INT NOT NULL,
reflect FLOAT (4,2) NOT NULL,
stun FLOAT (4,2) NOT NULL,
sky FLOAT (4,2) NOT NULL,
ocean FLOAT (4,2) NOT NULL,
continent FLOAT (4,2) NOT NULL,
MS FLOAT (4,2) NOT NULL,
LS FLOAT (4,2) NOT NULL,
poison FLOAT (4,2) NOT NULL,
resSky FLOAT (4,2) NOT NULL,
resOcean FLOAT (4,2) NOT NULL,
resContinent FLOAT (4,2) NOT NULL,
resStun FLOAT (4,2) NOT NULL,
resPoison FLOAT (4,2) NOT NULL,
CONSTRAINT PK_Stat PRIMARY KEY (idStat)
);

CREATE TABLE IF NOT EXISTS Ability (
idAbility INT UNSIGNED AUTO_INCREMENT NOT NULL,
lvl INT UNSIGNED NOT NULL,
name VARCHAR (25) NOT NULL,
isAvtive BOOLEAN NOT NULL,
lvlReq INT UNSIGNED NOT NULL,
img VARCHAR (25) NOT NULL,
descrip TEXT NOT NULL,
intReq INT UNSIGNED NOT NULL,
lvlMax INT UNSIGNED NOT NULL,
CONSTRAINT PK_Ability PRIMARY KEY (idAbility)
);

CREATE TABLE IF NOT EXISTS Speciality (
idSpeciality INT UNSIGNED AUTO_INCREMENT NOT NULL,
name VARCHAR (25) NOT NULL,
CONSTRAINT PK_Ability PRIMARY KEY (idSpeciality)
);

CREATE TABLE IF NOT EXISTS Class (
idClass INT UNSIGNED AUTO_INCREMENT NOT NULL,
name VARCHAR (25) NOT NULL,
description TEXT NOT NULL,
CONSTRAINT PK_Ability PRIMARY KEY (idClass)
);

CREATE TABLE IF NOT EXISTS ClassEqItemType (
idEqItemType INT UNSIGNED AUTO_INCREMENT NOT NULL,
eqItemType INT UNSIGNED NOT NULL,
CONSTRAINT PK_ClassEqItemType PRIMARY KEY (idEqItemType),
CONSTRAINT FK_ClassEqItemType_Class FOREIGN KEY (idEqItemType) REFERENCES Class (idClass)
);

CREATE TABLE IF NOT EXISTS City (
idCity INT UNSIGNED AUTO_INCREMENT NOT NULL,
name VARCHAR (25) NOT NULL,
img VARCHAR (25) NOT NULL,
history TEXT NOT NULL,
CONSTRAINT PK_City PRIMARY KEY (idCity)
);

CREATE TABLE IF NOT EXISTS Map (
idMap INT UNSIGNED AUTO_INCREMENT NOT NULL,
description TEXT NOT NULL,
img VARCHAR (25) NOT NULL,
CONSTRAINT PK_Map PRIMARY KEY (idMap)
);

CREATE TABLE IF NOT EXISTS Spot (
idSpot INT UNSIGNED AUTO_INCREMENT NOT NULL,
X INT UNSIGNED NOT NULL,
Y INT UNSIGNED NOT NULL,
N BOOLEAN DEFAULT FALSE,
S BOOLEAN DEFAULT FALSE,
E BOOLEAN DEFAULT FALSE,
W BOOLEAN DEFAULT FALSE,
NW BOOLEAN DEFAULT FALSE,
NE BOOLEAN DEFAULT FALSE,
SW BOOLEAN DEFAULT FALSE,
SE BOOLEAN DEFAULT FALSE,
CONSTRAINT PK_Spot PRIMARY KEY (idSpot)
);

CREATE TABLE IF NOT EXISTS Item (
idItem INT UNSIGNED AUTO_INCREMENT NOT NULL,
lvlReq INT UNSIGNED NOT NULL,
isCountable BOOLEAN NOT NULL,
img VARCHAR (25) NOT NULL,
name VARCHAR (25) NOT NULL,
bodyPart VARCHAR (25) NOT NULL,
type INT UNSIGNED NOT NULL,
CONSTRAINT PK_Item PRIMARY KEY (idItem)
);

CREATE TABLE IF NOT EXISTS NPC (
idNPC INT UNSIGNED AUTO_INCREMENT NOT NULL,
sex CHAR (1) NOT NULL,
type INT UNSIGNED NOT NULL,
name VARCHAR (25) NOT NULL,
title VARCHAR (25) NOT NULL,
img VARCHAR (25) NOT NULL,
isTrader BOOLEAN NOT NULL,
CONSTRAINT PK_NPC PRIMARY KEY (idNPC)
);

CREATE TABLE IF NOT EXISTS NPCDialogue (
idNPCDialogue INT UNSIGNED AUTO_INCREMENT NOT NULL,
dialogue TEXT NOT NULL,
CONSTRAINT PK_NPCDialogue PRIMARY KEY (idNPCDialogue),
CONSTRAINT FK_NPCDialogue_NPC FOREIGN KEY (idNPCDialogue) REFERENCES NPC (idNPC)
);

#RELACIONES
CREATE TABLE IF NOT EXISTS rAccountPj (
idRAccountPj INT UNSIGNED AUTO_INCREMENT NOT NULL,
idAccount INT UNSIGNED NOT NULL,
idPj INT UNSIGNED NOT NULL,
CONSTRAINT PK_rAccountPj PRIMARY KEY (idRAccountPj),
CONSTRAINT FK_rAccountPj_Account FOREIGN KEY (idAccount) REFERENCES Account (idAccount),
CONSTRAINT FK_rAccountPj_Pj FOREIGN KEY (idPj) REFERENCES Pj (idPj)
);

CREATE TABLE IF NOT EXISTS rPjCity (
idRPjCity INT UNSIGNED AUTO_INCREMENT NOT NULL,
idPj INT UNSIGNED NOT NULL,
idCity INT UNSIGNED NOT NULL,
CONSTRAINT PK_rPjCity PRIMARY KEY (idRPjCity),
CONSTRAINT FK_rPjCity_Pj FOREIGN KEY (idPj) REFERENCES Pj (idPj),
CONSTRAINT FK_rPjCity_City FOREIGN KEY (idCity) REFERENCES City (idCity)
);

CREATE TABLE IF NOT EXISTS rCityMap (
idRCityMap INT UNSIGNED AUTO_INCREMENT NOT NULL,
idCity INT UNSIGNED NOT NULL,
idMap INT UNSIGNED NOT NULL,
CONSTRAINT PK_rCityMap PRIMARY KEY (idRCityMap),
CONSTRAINT FK_rCityMap_Map FOREIGN KEY (idMap) REFERENCES Map (idMap),
CONSTRAINT FK_rCityMap_City FOREIGN KEY (idCity) REFERENCES City (idCity)
);

CREATE TABLE IF NOT EXISTS rPjSpot (
idRPjSpot INT UNSIGNED AUTO_INCREMENT NOT NULL,
idPj INT UNSIGNED NOT NULL,
idSpot INT UNSIGNED NOT NULL,
CONSTRAINT PK_rPjSpot PRIMARY KEY (idRPjSpot),
CONSTRAINT FK_rPjSpot_Pj FOREIGN KEY (idPj) REFERENCES Pj (idPj),
CONSTRAINT FK_rPjSpot_Spot FOREIGN KEY (idSpot) REFERENCES Spot (idSpot)
);

CREATE TABLE IF NOT EXISTS rMapSpot (
idRMapSpot INT UNSIGNED AUTO_INCREMENT NOT NULL,
idSpot INT UNSIGNED NOT NULL,
idMap INT UNSIGNED NOT NULL,
CONSTRAINT PK_rMapSpot PRIMARY KEY (idRMapSpot),
CONSTRAINT FK_rMapSpot_Map FOREIGN KEY (idMap) REFERENCES Map (idMap),
CONSTRAINT FK_rMapSpot_Spot FOREIGN KEY (idSpot) REFERENCES Spot (idSpot)
);

CREATE TABLE IF NOT EXISTS rSpotMap (
idRSpotMap INT UNSIGNED AUTO_INCREMENT NOT NULL,
idSpot INT UNSIGNED NOT NULL,
idMap INT UNSIGNED NOT NULL,
lvlReq INT UNSIGNED NOT NULL,
doorName VARCHAR (25) NOT NULL,
titleReq VARCHAR (25) NOT NULL,
cityReq INT UNSIGNED NOT NULL,
CONSTRAINT PK_rSpotMap PRIMARY KEY (idRSpotMap),
CONSTRAINT FK_rSpotMap_Map FOREIGN KEY (idMap) REFERENCES Map (idMap),
CONSTRAINT FK_rSpotMap_Spot FOREIGN KEY (idSpot) REFERENCES Spot (idSpot),
CONSTRAINT FK_rSpotMap_City FOREIGN KEY (cityReq) REFERENCES City (idCity)
);

CREATE TABLE IF NOT EXISTS rSpotItem (
idRSpotItem INT UNSIGNED AUTO_INCREMENT NOT NULL,
idSpot INT UNSIGNED NOT NULL,
idItem INT UNSIGNED NOT NULL,
quantity INT UNSIGNED NOT NULL,
CONSTRAINT PK_rSpotItem PRIMARY KEY (idRSpotItem),
CONSTRAINT FK_rSpotItem_Item FOREIGN KEY (idItem) REFERENCES Item (idItem),
CONSTRAINT FK_rSpotItem_Spot FOREIGN KEY (idSpot) REFERENCES Spot (idSpot)
);

CREATE TABLE IF NOT EXISTS rInv (
idRInv INT UNSIGNED AUTO_INCREMENT NOT NULL,
idPj INT UNSIGNED NOT NULL,
idItem INT UNSIGNED NOT NULL,
isEquip BOOLEAN NOT NULL,
quantity INT UNSIGNED NOT NULL,
CONSTRAINT PK_rInv PRIMARY KEY (idRInv),
CONSTRAINT FK_rInv_Pj FOREIGN KEY (idPj) REFERENCES Pj (idPj),
CONSTRAINT FK_rInv_Item FOREIGN KEY (idItem) REFERENCES Item (idItem)
);

CREATE TABLE IF NOT EXISTS rPjClass (
idRPjClass INT UNSIGNED AUTO_INCREMENT NOT NULL,
idPj INT UNSIGNED NOT NULL,
idClass INT UNSIGNED NOT NULL,
CONSTRAINT PK_rPjClass PRIMARY KEY (idRPjClass),
CONSTRAINT FK_rPjClass_Pj FOREIGN KEY (idPj) REFERENCES Pj (idPj),
CONSTRAINT FK_rPjClass_Class FOREIGN KEY (idClass) REFERENCES Class (idClass)
);

CREATE TABLE IF NOT EXISTS rPjRace (
idRPjRace INT UNSIGNED AUTO_INCREMENT NOT NULL,
idPj INT UNSIGNED NOT NULL,
idRace INT UNSIGNED NOT NULL,
CONSTRAINT PK_rPjRace PRIMARY KEY (idRPjRace),
CONSTRAINT FK_rPjRace_Pj FOREIGN KEY (idPj) REFERENCES Pj (idPj),
CONSTRAINT FK_rPjRace_Race FOREIGN KEY (idRace) REFERENCES Race (idRace)
);

CREATE TABLE IF NOT EXISTS rPjStat (
idRPjStat INT UNSIGNED AUTO_INCREMENT NOT NULL,
idPj INT UNSIGNED NOT NULL,
idStat INT UNSIGNED NOT NULL,
CONSTRAINT PK_rPjStat PRIMARY KEY (idRPjStat),
CONSTRAINT FK_rPjStat_Pj FOREIGN KEY (idPj) REFERENCES Pj (idPj),
CONSTRAINT FK_rPjStat_Stat FOREIGN KEY (idStat) REFERENCES Stat (idStat)
);

CREATE TABLE IF NOT EXISTS rPjAb (
idRPjAb INT UNSIGNED AUTO_INCREMENT NOT NULL,
idPj INT UNSIGNED NOT NULL,
idAbility INT UNSIGNED NOT NULL,
isAvailable BOOLEAN NOT NULL,
CONSTRAINT PK_rPjAb PRIMARY KEY (idRPjAb),
CONSTRAINT FK_rPjAb_Pj FOREIGN KEY (idPj) REFERENCES Pj (idPj),
CONSTRAINT FK_rPjAb_Ability FOREIGN KEY (idAbility) REFERENCES Ability (idAbility)
);

CREATE TABLE IF NOT EXISTS rRaceStat (
idRRaceStat INT UNSIGNED AUTO_INCREMENT NOT NULL,
idStat INT UNSIGNED NOT NULL,
idRace INT UNSIGNED NOT NULL,
CONSTRAINT PK_rRaceStat PRIMARY KEY (idRRaceStat),
CONSTRAINT FK_rRaceStat_Stat FOREIGN KEY (idStat) REFERENCES Stat (idStat),
CONSTRAINT FK_rRaceStat_Race FOREIGN KEY (idRace) REFERENCES Race (idRace)
);

CREATE TABLE IF NOT EXISTS rRaceSpec (
idRRaceSpec INT UNSIGNED AUTO_INCREMENT NOT NULL,
idSpeciality INT UNSIGNED NOT NULL,
idRace INT UNSIGNED NOT NULL,
fitness FLOAT (4,2) NOT NULL,
CONSTRAINT PK_rRaceSpec PRIMARY KEY (idRRaceSpec),
CONSTRAINT FK_rRaceSpec_Spec FOREIGN KEY (idSpeciality) REFERENCES Speciality (idSpeciality),
CONSTRAINT FK_rRaceSpec_Race FOREIGN KEY (idRace) REFERENCES Race (idRace)
);

CREATE TABLE IF NOT EXISTS rClassSpec (
idRClassSpec INT UNSIGNED AUTO_INCREMENT NOT NULL,
idClass INT UNSIGNED NOT NULL,
idSpeciality INT UNSIGNED NOT NULL,
CONSTRAINT PK_rClassSpec PRIMARY KEY (idRClassSpec),
CONSTRAINT FK_rClassSpec_Class FOREIGN KEY (idClass) REFERENCES Class (idClass),
CONSTRAINT FK_rClassSpec_Speciality FOREIGN KEY (idSpeciality) REFERENCES Speciality (idSpeciality)
);

CREATE TABLE IF NOT EXISTS rSpecAb (
idRSpecAb INT UNSIGNED AUTO_INCREMENT NOT NULL,
idSpeciality INT UNSIGNED NOT NULL,
idAbility INT UNSIGNED NOT NULL,
branch VARCHAR (25) NOT NULL,
CONSTRAINT PK_rSpecAb PRIMARY KEY (idRSpecAb),
CONSTRAINT FK_rSpecAb_Speciality FOREIGN KEY (idSpeciality) REFERENCES Speciality (idSpeciality),
CONSTRAINT FK_rSpecAb_Ability FOREIGN KEY (idAbility) REFERENCES Ability (idAbility)
);

CREATE TABLE IF NOT EXISTS rAbStat (
idRAbStat INT UNSIGNED AUTO_INCREMENT NOT NULL,
idAbility INT UNSIGNED NOT NULL,
idStat INT UNSIGNED NOT NULL,
CONSTRAINT PK_rAbStat PRIMARY KEY (idRAbStat),
CONSTRAINT FK_rAbStat_Ability FOREIGN KEY (idAbility) REFERENCES Ability (idAbility),
CONSTRAINT FK_rAbStat_Stat FOREIGN KEY (idStat) REFERENCES Stat (idStat)
);

CREATE TABLE IF NOT EXISTS rItemStat (
idRItemStat INT UNSIGNED AUTO_INCREMENT NOT NULL,
idItem INT UNSIGNED NOT NULL,
idStat INT UNSIGNED NOT NULL,
CONSTRAINT PK_rItemStat PRIMARY KEY (idRItemStat),
CONSTRAINT FK_rItemStat_Item FOREIGN KEY (idItem) REFERENCES Item (idItem),
CONSTRAINT FK_rItemStat_Stat FOREIGN KEY (idStat) REFERENCES Stat (idStat)
);

CREATE TABLE IF NOT EXISTS rSpotStat (
idRSpotStat INT UNSIGNED AUTO_INCREMENT NOT NULL,
idSpot INT UNSIGNED NOT NULL,
idStat INT UNSIGNED NOT NULL,
CONSTRAINT PK_rSpotStat PRIMARY KEY (idRSpotStat),
CONSTRAINT FK_rSpotStat_Spot FOREIGN KEY (idSpot) REFERENCES Spot (idSpot),
CONSTRAINT FK_rSpotStat_Stat FOREIGN KEY (idStat) REFERENCES Stat (idStat)
);

CREATE TABLE IF NOT EXISTS rNPCItem (
idRNPCItem INT UNSIGNED AUTO_INCREMENT NOT NULL,
idNPC INT UNSIGNED NOT NULL,
idItem INT UNSIGNED NOT NULL,
CONSTRAINT PK_rNPCItem PRIMARY KEY (idRNPCItem),
CONSTRAINT FK_rNPCItem_NPC FOREIGN KEY (idNPC) REFERENCES NPC (idNPC),
CONSTRAINT FK_rNPCItem_Item FOREIGN KEY (idItem) REFERENCES Item (idItem)
);

CREATE TABLE IF NOT EXISTS rNPCStat (
idRNPCStat INT UNSIGNED AUTO_INCREMENT NOT NULL,
idNPC INT UNSIGNED NOT NULL,
idStat INT UNSIGNED NOT NULL,
CONSTRAINT PK_rNPCStat PRIMARY KEY (idRNPCStat),
CONSTRAINT FK_rNPCStat_NPC FOREIGN KEY (idNPC) REFERENCES NPC (idNPC),
CONSTRAINT FK_rNPCStat_Stat FOREIGN KEY (idStat) REFERENCES Stat (idStat)
);

CREATE TABLE IF NOT EXISTS rNPCSpot (
idRNPCSpot INT UNSIGNED AUTO_INCREMENT NOT NULL,
idNPC INT UNSIGNED NOT NULL,
idSpot INT UNSIGNED NOT NULL,
CONSTRAINT PK_rNPCSpot PRIMARY KEY (idRNPCSpot),
CONSTRAINT FK_rNPCSpot_NPC FOREIGN KEY (idNPC) REFERENCES NPC (idNPC),
CONSTRAINT FK_rNPCSpot_Spot FOREIGN KEY (idSpot) REFERENCES Spot (idSpot)
);
