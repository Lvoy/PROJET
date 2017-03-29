#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
DROP DATABASE IF EXISTS db_formation;
CREATE DATABASE IF NOT EXISTS db_formation;
USE db_formation;

#------------------------------------------------------------
# Table: t_eleve
#------------------------------------------------------------

CREATE TABLE t_eleve(
        id_eleve      int (11) Auto_increment  NOT NULL ,
        ele_nom       Varchar (30) NOT NULL ,
        ele_prenom    Varchar (30) ,
        ele_avs       Int ,
        ele_telephone Varchar (20) ,
        ele_rue       Varchar (60) ,
        ele_cp        Smallint ,
        ele_localite  Varchar (60) ,
        ele_email     Varchar (70) ,
        id_status     Int NOT NULL ,
        PRIMARY KEY (id_eleve )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: t_formateur
#------------------------------------------------------------

CREATE TABLE t_formateur(
        id_formateur   int (11) Auto_increment  NOT NULL ,
        for_nom        Varchar (30) ,
        for_prenom     Varchar (30) NOT NULL ,
        for_avs        Varchar (20) ,
        for_competence Varchar (30) ,
        for_telephone  Varchar (20) ,
        for_email      Varchar (70) ,
        for_rue        Varchar (60) ,
        for_cp         Smallint ,
        for_localite   Varchar (60) ,
        PRIMARY KEY (id_formateur )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: t_formation
#------------------------------------------------------------

CREATE TABLE t_formation(
        id_formation int (11) Auto_increment  NOT NULL ,
        for_nom      Varchar (10) ,
        PRIMARY KEY (id_formation )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: t_status
#------------------------------------------------------------

CREATE TABLE t_status(
        id_status int (11) Auto_increment  NOT NULL ,
        sta_nom   Varchar (20) ,
        PRIMARY KEY (id_status )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: t_lieuFormation
#------------------------------------------------------------

CREATE TABLE t_lieuFormation(
        id_lieu           int (11) Auto_increment  NOT NULL ,
        lie_etablissement Varchar (40) ,
        lie_adresse       Varchar (40) ,
        lie_cp            Smallint ,
        lie_localite      Varchar (40) ,
        PRIMARY KEY (id_lieu )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: t_cours
#------------------------------------------------------------

CREATE TABLE t_cours(
        id_cours                  int (11) Auto_increment  NOT NULL ,
        cou_dateDebut             Date ,
        cou_partie                TinyINT ,
        cou_participantsMax       Smallint ,
        cou_horaire               Time ,
        cou_duree                 TinyINT ,
        cou_prixConcerne          Varchar (100) ,
        cou_prixAutre             Varchar (100) ,
        cou_presenceRemplie       Varchar (2) ,
        cou_attestationTransmise  Varchar (2) ,
        cou_remarque              Text ,
        cou_fraisRepasHebergement Double ,
        id_lieu                   Int NOT NULL ,
        id_formation              Int NOT NULL ,
        PRIMARY KEY (id_cours )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: donné par
#------------------------------------------------------------

CREATE TABLE donne_par(
        id_cours     Int NOT NULL ,
        id_formateur Int NOT NULL ,
        PRIMARY KEY (id_cours ,id_formateur )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: t_inscriptionCours
#------------------------------------------------------------

CREATE TABLE t_inscriptionCours(
        ins_dateEnvoiFacture Date ,
        ins_datePaiement     Date ,
        ins_fraisTransport   Double ,
        id_eleve             Int NOT NULL ,
        id_cours             Int NOT NULL ,
        PRIMARY KEY (id_eleve ,id_cours )
)ENGINE=InnoDB;

ALTER TABLE t_eleve ADD CONSTRAINT FK_t_eleve_id_status FOREIGN KEY (id_status) REFERENCES t_status(id_status);
ALTER TABLE t_cours ADD CONSTRAINT FK_t_cours_id_lieu FOREIGN KEY (id_lieu) REFERENCES t_lieuFormation(id_lieu);
ALTER TABLE t_cours ADD CONSTRAINT FK_t_cours_id_formation FOREIGN KEY (id_formation) REFERENCES t_formation(id_formation);
ALTER TABLE donne_par ADD CONSTRAINT FK_donne_par_id_cours FOREIGN KEY (id_cours) REFERENCES t_cours(id_cours);
ALTER TABLE donne_par ADD CONSTRAINT FK_donne_par_id_formateur FOREIGN KEY (id_formateur) REFERENCES t_formateur(id_formateur);
ALTER TABLE t_inscriptionCours ADD CONSTRAINT FK_t_inscriptionCours_id_eleve FOREIGN KEY (id_eleve) REFERENCES t_eleve(id_eleve);
ALTER TABLE t_inscriptionCours ADD CONSTRAINT FK_t_inscriptionCours_id_cours FOREIGN KEY (id_cours) REFERENCES t_cours(id_cours);
