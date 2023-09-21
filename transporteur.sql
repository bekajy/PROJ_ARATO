/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  21/07/2023 19:41:56                      */
/*==============================================================*/


drop table if exists ASSOCIE;

drop table if exists ATTACHEMENT;

drop table if exists AUTRE_CONSOMATION;

drop table if exists CAMION;

drop table if exists CARTE_GASOIL;

drop table if exists DEPENSE;

drop table if exists ENTREPRISE2;

drop table if exists FACTURE;

drop table if exists MODEL;

drop table if exists MODE_PAYMENT;

drop table if exists NORME;

drop table if exists PAYER;

drop table if exists PAYMENT_BON;

drop table if exists PAYMENT_CHEQUE;

drop table if exists PAYMENT_TRAITE;

drop table if exists TARIF;

drop table if exists TRANCHE;

drop table if exists TRANSIT;

drop table if exists VOYAGE;

drop table if exists VOYAGER;

/*==============================================================*/
/* Table : ASSOCIE                                              */
/*==============================================================*/
create table ASSOCIE
(
   ID_FACTURE           int not null,
   ID_VOYAGE            int not null,
   primary key (ID_FACTURE, ID_VOYAGE)
);

/*==============================================================*/
/* Table : ATTACHEMENT                                          */
/*==============================================================*/
create table ATTACHEMENT
(
   ID_ATTACHEMENT       int not null,
   ID_BON               int,
   ID_TRAITE            int,
   ID_PAYMENT           int not null,
   ID_CHEQUE            int,
   MARQUE               varchar(50),
   TYPE                 varchar(50),
   REF                  varchar(50),
   PU                   int,
   DATE_ACHAT           datetime,
   STATUS               varchar(100),
   primary key (ID_ATTACHEMENT)
);

/*==============================================================*/
/* Table : AUTRE_CONSOMATION                                    */
/*==============================================================*/
create table AUTRE_CONSOMATION
(
   ID_AUTRE             int not null,
   ID_CARTE             int not null,
   ID_VOYAGE            int,
   DESCRIPTION          varchar(50),
   DATE_ACHAT           datetime,
   GO_LITRE             int,
   MONTANT              int,
   primary key (ID_AUTRE)
);

/*==============================================================*/
/* Table : CAMION                                               */
/*==============================================================*/
create table CAMION
(
   ID_CAMION            int not null,
   ID_MODEL             int not null,
   MATRICULE            varchar(10),
   MARQUE               varchar(50),
   TYPE                 varchar(50),
   GENRE                varchar(50),
   BENEFICE             int,
   primary key (ID_CAMION)
);

/*==============================================================*/
/* Table : CARTE_GASOIL                                         */
/*==============================================================*/
create table CARTE_GASOIL
(
   ID_CARTE             int not null,
   LIBELLE              varchar(50),
   PLAFOND              int,
   RESTE                int,
   primary key (ID_CARTE)
);

/*==============================================================*/
/* Table : DEPENSE                                              */
/*==============================================================*/
create table DEPENSE
(
   ID_DEPENSE           int not null,
   ID_ATTACHEMENT       int not null,
   ID_VOYAGE            int not null,
   MONTANT_GASOIL       int,
   GASOIL_LITRE         int,
   primary key (ID_DEPENSE)
);

/*==============================================================*/
/* Table : ENTREPRISE2                                          */
/*==============================================================*/
create table ENTREPRISE2
(
   ID_ENTREPRISE        int not null,
   NOM_ENTREPRISE       varchar(50),
   CIF                  varchar(10),
   NIF                  varchar(10),
   STATE                int,
   TEL1                 int,
   TEL2                 int,
   EMAIL                varchar(50),
   primary key (ID_ENTREPRISE)
);

/*==============================================================*/
/* Table : FACTURE                                              */
/*==============================================================*/
create table FACTURE
(
   ID_FACTURE           int not null,
   ID_ENTREPRISE        int not null,
   NUM_FACTURE          int,
   DATE_FACTURE         datetime,
   DATE_ECHEANCE        date,
   primary key (ID_FACTURE)
);

/*==============================================================*/
/* Table : MODEL                                                */
/*==============================================================*/
create table MODEL
(
   ID_MODEL             int not null,
   MODEL                varchar(50),
   primary key (ID_MODEL)
);

/*==============================================================*/
/* Table : MODE_PAYMENT                                         */
/*==============================================================*/
create table MODE_PAYMENT
(
   ID_PAYMENT           int not null,
   LIBELLE              varchar(50),
   primary key (ID_PAYMENT)
);

/*==============================================================*/
/* Table : NORME                                                */
/*==============================================================*/
create table NORME
(
   ID_NORME             int not null,
   ID_MODEL             int not null,
   ALLER                varchar(50),
   RETOUR               varchar(50),
   DESTINATION          varchar(50),
   NORME                varchar(50),
   primary key (ID_NORME)
);

/*==============================================================*/
/* Table : PAYER                                                */
/*==============================================================*/
create table PAYER
(
   ID_VOYAGE            int not null,
   ID_CHEQUE            int not null,
   primary key (ID_VOYAGE, ID_CHEQUE)
);

/*==============================================================*/
/* Table : PAYMENT_BON                                          */
/*==============================================================*/
create table PAYMENT_BON
(
   ID_BON               int not null,
   ID_ATTACHEMENT       int not null,
   MONTANT              int,
   DESIGNATION          varchar(50),
   DATE_PAYMENT         datetime,
   primary key (ID_BON)
);

/*==============================================================*/
/* Table : PAYMENT_CHEQUE                                       */
/*==============================================================*/
create table PAYMENT_CHEQUE
(
   ID_CHEQUE            int not null,
   NUM_CHEQUE           varchar(50),
   DESIGNATION          varchar(50),
   DATE_CHEQUE          datetime,
   primary key (ID_CHEQUE)
);

/*==============================================================*/
/* Table : PAYMENT_TRAITE                                       */
/*==============================================================*/
create table PAYMENT_TRAITE
(
   ID_TRAITE            int not null,
   ID_ATTACHEMENT       int not null,
   ID_TRANCHE           int not null,
   DATE                 date,
   primary key (ID_TRAITE)
);

/*==============================================================*/
/* Table : TARIF                                                */
/*==============================================================*/
create table TARIF
(
   ID_TARIF             int not null,
   IID_TRANSIT          int not null,
   POIDS                varchar(50),
   TAILLE               varchar(50),
   DESTINATION          varchar(50),
   PRIX                 varchar(50),
   primary key (ID_TARIF)
);

/*==============================================================*/
/* Table : TRANCHE                                              */
/*==============================================================*/
create table TRANCHE
(
   ID_TRANCHE           int not null,
   DATE                 date,
   MONTANT_TOTAL        int,
   DEJA_PAYER           int,
   RESTE                int,
   primary key (ID_TRANCHE)
);

/*==============================================================*/
/* Table : TRANSIT                                              */
/*==============================================================*/
create table TRANSIT
(
   IID_TRANSIT          int not null,
   NOM_TRANSIT          varchar(50),
   NIF                  varchar(10),
   STAT                 int,
   RC                   varchar(50),
   ADRESSE              varchar(50),
   CIF                  varchar(10),
   ORDRE                varchar(20),
   primary key (IID_TRANSIT)
);

/*==============================================================*/
/* Table : VOYAGE                                               */
/*==============================================================*/
create table VOYAGE
(
   ID_VOYAGE            int not null,
   ID_CARTE             int,
   IID_TRANSIT          int not null,
   CLIENT               varchar(20),
   DATE_VOYAGE          date,
   COMMUTION            int,
   MONTANT              int,
   VATSY                varchar(50),
   TONNAGE              int,
   TYPE                 varchar(50),
   DIRECTION            varchar(50),
   primary key (ID_VOYAGE)
);

/*==============================================================*/
/* Table : VOYAGER                                              */
/*==============================================================*/
create table VOYAGER
(
   ID_VOYAGE            int not null,
   ID_CAMION            int not null,
   primary key (ID_VOYAGE, ID_CAMION)
);

alter table ASSOCIE add constraint FK_ASSOCIE foreign key (ID_FACTURE)
      references FACTURE (ID_FACTURE) on delete restrict on update restrict;

alter table ASSOCIE add constraint FK_ASSOCIE2 foreign key (ID_VOYAGE)
      references VOYAGE (ID_VOYAGE) on delete restrict on update restrict;

alter table ATTACHEMENT add constraint FK_UTILISER_2 foreign key (ID_PAYMENT)
      references MODE_PAYMENT (ID_PAYMENT) on delete restrict on update restrict;

alter table ATTACHEMENT add constraint FK_UTILISER_4 foreign key (ID_BON)
      references PAYMENT_BON (ID_BON) on delete restrict on update restrict;

alter table ATTACHEMENT add constraint FK_UTLISER_5 foreign key (ID_TRAITE)
      references PAYMENT_TRAITE (ID_TRAITE) on delete restrict on update restrict;

alter table ATTACHEMENT add constraint FK_UTULISER_3 foreign key (ID_CHEQUE)
      references PAYMENT_CHEQUE (ID_CHEQUE) on delete restrict on update restrict;

alter table AUTRE_CONSOMATION add constraint FK_AVOIR_3 foreign key (ID_CARTE)
      references CARTE_GASOIL (ID_CARTE) on delete restrict on update restrict;

alter table AUTRE_CONSOMATION add constraint FK_POSSEDER_3 foreign key (ID_VOYAGE)
      references VOYAGE (ID_VOYAGE) on delete restrict on update restrict;

alter table CAMION add constraint FK_POSSEDER_2 foreign key (ID_MODEL)
      references MODEL (ID_MODEL) on delete restrict on update restrict;

alter table DEPENSE add constraint FK_AVOIR_2 foreign key (ID_VOYAGE)
      references VOYAGE (ID_VOYAGE) on delete restrict on update restrict;

alter table DEPENSE add constraint FK_AVOIR_4 foreign key (ID_ATTACHEMENT)
      references ATTACHEMENT (ID_ATTACHEMENT) on delete restrict on update restrict;

alter table FACTURE add constraint FK_AVOIR foreign key (ID_ENTREPRISE)
      references ENTREPRISE2 (ID_ENTREPRISE) on delete restrict on update restrict;

alter table NORME add constraint FK_AVOIR_5 foreign key (ID_MODEL)
      references MODEL (ID_MODEL) on delete restrict on update restrict;

alter table PAYER add constraint FK_PAYER foreign key (ID_VOYAGE)
      references VOYAGE (ID_VOYAGE) on delete restrict on update restrict;

alter table PAYER add constraint FK_PAYER2 foreign key (ID_CHEQUE)
      references PAYMENT_CHEQUE (ID_CHEQUE) on delete restrict on update restrict;

alter table PAYMENT_BON add constraint FK_UTILISER_3 foreign key (ID_ATTACHEMENT)
      references ATTACHEMENT (ID_ATTACHEMENT) on delete restrict on update restrict;

alter table PAYMENT_TRAITE add constraint FK_PAYER_2 foreign key (ID_TRANCHE)
      references TRANCHE (ID_TRANCHE) on delete restrict on update restrict;

alter table PAYMENT_TRAITE add constraint FK_UTLISER_4 foreign key (ID_ATTACHEMENT)
      references ATTACHEMENT (ID_ATTACHEMENT) on delete restrict on update restrict;

alter table TARIF add constraint FK_POSSEDER foreign key (IID_TRANSIT)
      references TRANSIT (IID_TRANSIT) on delete restrict on update restrict;

alter table VOYAGE add constraint FK_FAIRE foreign key (IID_TRANSIT)
      references TRANSIT (IID_TRANSIT) on delete restrict on update restrict;

alter table VOYAGE add constraint FK_UTILISER foreign key (ID_CARTE)
      references CARTE_GASOIL (ID_CARTE) on delete restrict on update restrict;

alter table VOYAGER add constraint FK_VOYAGER foreign key (ID_VOYAGE)
      references VOYAGE (ID_VOYAGE) on delete restrict on update restrict;

alter table VOYAGER add constraint FK_VOYAGER2 foreign key (ID_CAMION)
      references CAMION (ID_CAMION) on delete restrict on update restrict;

