/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  11/08/2016 09:34:50                      */
/*==============================================================*/


/*==============================================================*/
/* Table : Personnel                                            */
/*==============================================================*/
create table Personnel
(
   id_personnel         int not null AUTO_INCREMENT,
   nom_perso            varchar(254),
   prenom_perso         varchar(254),
   tel_perso            int,
   matricule_perso      varchar(254),
   age_perso            datetime,
   sexe_perso           national char(1),
   dat_prise_service    datetime,
   email_perso          varchar(254),
   type_perso           varchar(254),
   specialite           varchar(254),
   primary key (id_personnel)
);

/*==============================================================*/
/* Table : bloc_operatoire                                      */
/*==============================================================*/
create table bloc_operatoire
(
   id_operation         int not null AUTO_INCREMENT,
   date_entree          datetime,
   motif_operation      varchar(254),
   etat_sante_patient   varchar(254),
   date_sortie          datetime,
   primary key (id_operation)
);

/*==============================================================*/
/* Table : carnet                                               */
/*==============================================================*/
create table carnet
(
   id_carnet            int not null AUTO_INCREMENT,
   num_carnet           int,
   motif_presence       varchar(254),
   primary key (id_carnet)
);

/*==============================================================*/
/* Table : categorie_examen                                     */
/*==============================================================*/
create table categorie_examen
(
   id_categorie         int not null,
   libele_categorie     varchar(254),
   primary key (id_categorie)
);

/*==============================================================*/
/* Table : chambre_fichemedicale                                */
/*==============================================================*/
create table chambre_fichemedicale
(
   id_chambrefichemedicale int not null AUTO_INCREMENT,
   id_chambre           int not null,
   id_fiche_medical     int not null,
   primary key (id_chambrefichemedicale)
);

/*==============================================================*/
/* Table : chambre_hospitalisation                              */
/*==============================================================*/
create table chambre_hospitalisation
(
   id_chambre           int not null AUTO_INCREMENT,
   numero_chambre       int,
   type_chambre         varchar(254),
   num_tel              int,
   nbre_lit             int,
   etat_occupation      varchar(254),
   prix_chambre         numeric(8,0),
   date_entree          datetime,
   date_sortie          datetime,
   primary key (id_chambre)
);

/*==============================================================*/
/* Table : chambre_patient                                      */
/*==============================================================*/
create table chambre_patient
(
   id_chambrepatient    int not null AUTO_INCREMENT,
   id_chambre           int not null,
   id_patient           int not null,
   primary key (id_chambrepatient)
);

/*==============================================================*/
/* Table : compte_user                                          */
/*==============================================================*/
create table compte_user
(
   id_compte            int not null AUTO_INCREMENT,
   id_personnel         int not null,
   login                varchar(254),
   pass                 varchar(254),
   avatar               varchar(254),
   etat_compte          varchar(254),
   role                 varchar(254),
   primary key (id_compte)
);

/*==============================================================*/
/* Table : consultation                                         */
/*==============================================================*/
create table consultation
(
   id_consultation      int not null AUTO_INCREMENT,
   id_carnet            int not null,
   id_patient           int not null,
   numero_consultaion   int,
   diagnostic_conslut   varchar(254),
   date_consult         datetime,
   primary key (id_consultation)
);

/*==============================================================*/
/* Table : dossier_medical                                      */
/*==============================================================*/
create table dossier_medical
(
   id_medical           int not null AUTO_INCREMENT,
   id_carnet            int not null,
   libele_dossier       varchar(254),
   date_debut_consult   datetime,
   antecedants          varchar(254),
   primary key (id_medical)
);

/*==============================================================*/
/* Table : examen                                               */
/*==============================================================*/
create table examen
(
   id_examen            int not null AUTO_INCREMENT,
   id_categorie         int not null,
   id_consultation      int not null,
   montant_exam         int,
   date_exam            datetime,
   libele_exam          varchar(254),
   primary key (id_examen)
);

/*==============================================================*/
/* Table : examen_recu                                          */
/*==============================================================*/
create table examen_recu
(
   id_examenrecu        int not null AUTO_INCREMENT,
   id_recu              int not null,
   id_categorie         int not null,
   id_examen            int not null,
   primary key (id_examenrecu)
);

/*==============================================================*/
/* Table : fiche_medical                                        */
/*==============================================================*/
create table fiche_medical
(
   id_fiche_medical     int not null AUTO_INCREMENT,
   id_medical           int not null,
   num_fiche            int,
   date_debut_soins     datetime,
   description_soin     varchar(254),
   date_fin_soins       datetime,
   diagnostic_final     varchar(254),
   etat_de_sante        varchar(254),
   observattion         varchar(254),
   nom_infirmier        varchar(254),
   primary key (id_fiche_medical)
);

/*==============================================================*/
/* Table : journal                                              */
/*==============================================================*/
create table journal
(
   id_journal           int not null AUTO_INCREMENT,
   id_personnel         int not null,
   libele_journal       varchar(254),
   date_action          datetime,
   primary key (id_journal)
);

/*==============================================================*/
/* Table : lits                                                 */
/*==============================================================*/
create table lits
(
   id_lit               int not null AUTO_INCREMENT,
   id_chambre           int not null,
   caracteristique_lit  varchar(254),
   primary key (id_lit)
);

/*==============================================================*/
/* Table : ordonnace                                            */
/*==============================================================*/
create table ordonnace
(
   id_ordonnance        int not null AUTO_INCREMENT,
   id_consultation      int not null,
   titre_ordo           varchar(254),
   date_ordo            datetime,
   description_ordo     varchar(254),
   primary key (id_ordonnance)
);

/*==============================================================*/
/* Table : patient                                              */
/*==============================================================*/
create table patient
(
   id_patient           int not null AUTO_INCREMENT,
   id_vaccin            int not null,
   id_operation         int not null,
   nom_patient          varchar(254),
   prenom_patient       varchar(254),
   age_patient          int,
   sexe_patient         national char(1),
   profession_patient   varchar(254),
   situation_matrimoniale varchar(254),
   tel_patient          int,
   R_H                  varchar(254),
   G_S                  varchar(254),
   electrophorese       varchar(254),
   personne_a_prevenir  varchar(254),
   primary key (id_patient)
);

/*==============================================================*/
/* Table : patient_soin                                         */
/*==============================================================*/
create table patient_soin
(
   id_patientsoin       int not null AUTO_INCREMENT,
   id_patient           int not null,
   id_soins             int not null,
   primary key (id_patientsoin)
);

/*==============================================================*/
/* Table : personnel_consultation                               */
/*==============================================================*/
create table personnel_consultation
(
   id_personnelconsultation int not null AUTO_INCREMENT,
   id_personnel         int not null,
   id_consultation      int not null,
   primary key (id_personnelconsultation)
);

/*==============================================================*/
/* Table : personnel_patient                                    */
/*==============================================================*/
create table personnel_patient
(
   id_personnelpatient  int not null AUTO_INCREMENT,
   id_personnel         int not null,
   id_patient           int not null,
   poids                int,
   temperature          float,
   tension              int,
   primary key (id_personnelpatient)
);

/*==============================================================*/
/* Table : personnel_rdv                                        */
/*==============================================================*/
create table personnel_rdv
(
   id_personnelrdv      int not null AUTO_INCREMENT,
   id_personnel         int not null,
   id_rdv               int not null,
   primary key (id_personnelrdv)
);

/*==============================================================*/
/* Table : personnel_service                                    */
/*==============================================================*/
create table personnel_service
(
   id_personnelservice  int not null AUTO_INCREMENT,
   id_personnel         int not null,
   id_service           int not null,
   primary key (id_personnelservice)
);

/*==============================================================*/
/* Table : personnel_soins                                      */
/*==============================================================*/
create table personnel_soins
(
   id_personnelsoins    int not null AUTO_INCREMENT,
   id_personnel         int not null,
   id_soins             int not null,
   primary key (id_personnelsoins)
);

/*==============================================================*/
/* Table : plage_horaire                                        */
/*==============================================================*/
create table plage_horaire
(
   id_plage_horaire     int not null AUTO_INCREMENT,
   jour                 int,
   mois                 int,
   annee                int,
   commentaire          varchar(254),
   primary key (id_plage_horaire)
);

/*==============================================================*/
/* Table : recu                                                 */
/*==============================================================*/
create table recu
(
   id_recu              int not null AUTO_INCREMENT,
   id_vaccin            int,
   numero_recu          int,
   date_jour            datetime,
   libelle_recu         varchar(254),
   montant_prestation    int,
   primary key (id_recu)
);

/*==============================================================*/
/* Table : recu_consultation                                    */
/*==============================================================*/
create table recu_consultation
(
   id_recuconsultation  int not null AUTO_INCREMENT,
   id_consultation      int not null,
   id_ordonnance        int not null,
   id_recu              int not null,
   primary key (id_recuconsultation),
   key AK_id_recu (id_recuconsultation)
);

/*==============================================================*/
/* Table : rendez_vous                                          */
/*==============================================================*/
create table rendez_vous
(
   id_rdv               int not null AUTO_INCREMENT,
   id_plage_horaire     int not null,
   titre_rdv            varchar(254),
   date_debut           datetime,
   date_fin             datetime,
   type_consultation    varchar(254),
   primary key (id_rdv)
);

/*==============================================================*/
/* Table : resultat                                             */
/*==============================================================*/
create table resultat
(
   id_resultat          int not null AUTO_INCREMENT,
   id_examen            int not null,
   libele_resultat      varchar(254),
   date_resultat        datetime,
   primary key (id_resultat)
);

/*==============================================================*/
/* Table : service                                              */
/*==============================================================*/
create table service
(
   id_service           int not null AUTO_INCREMENT,
   nom_service          varchar(254),
   primary key (id_service)
);

/*==============================================================*/
/* Table : soins_infirmiers                                     */
/*==============================================================*/
create table soins_infirmiers
(
   id_soins             int not null AUTO_INCREMENT,
   date_soins           datetime,
   libele_soins         varchar(254),
   primary key (id_soins)
);

/*==============================================================*/
/* Table : vaccin                                               */
/*==============================================================*/
create table vaccin
(
   id_vaccin            int not null AUTO_INCREMENT,
   id_carnet            int not null,
   id_recu              int not null,
   numero_vaccin        int,
   libelle_vaccin       varchar(254),
   date_vaccin          datetime,
   maladie_a_eviter     varchar(254),
   primary key (id_vaccin)
);

alter table chambre_fichemedicale add constraint FK_chambre_fichemedicale foreign key (id_fiche_medical)
      references fiche_medical (id_fiche_medical) on delete restrict on update restrict;

alter table chambre_fichemedicale add constraint FK_dispose foreign key (id_chambre)
      references chambre_hospitalisation (id_chambre) on delete restrict on update restrict;

alter table chambre_patient add constraint FK_accepter foreign key (id_chambre)
      references chambre_hospitalisation (id_chambre) on delete restrict on update restrict;

alter table chambre_patient add constraint FK_admettre foreign key (id_patient)
      references patient (id_patient) on delete restrict on update restrict;

alter table compte_user add constraint FK_avoir foreign key (id_personnel)
      references Personnel (id_personnel) on delete restrict on update restrict;

alter table consultation add constraint FK_englober foreign key (id_carnet)
      references carnet (id_carnet) on delete restrict on update restrict;

alter table consultation add constraint FK_se_faire foreign key (id_patient)
      references patient (id_patient) on delete restrict on update restrict;

alter table dossier_medical add constraint FK_contenir foreign key (id_carnet)
      references carnet (id_carnet) on delete restrict on update restrict;

alter table examen add constraint FK_jouir_de foreign key (id_consultation)
      references consultation (id_consultation) on delete restrict on update restrict;

alter table examen add constraint FK_regrouper foreign key (id_categorie)
      references categorie_examen (id_categorie) on delete restrict on update restrict;

alter table examen_recu add constraint FK_obtenir foreign key (id_examen)
      references examen (id_examen) on delete restrict on update restrict;

alter table examen_recu add constraint FK_remporter foreign key (id_recu)
      references recu (id_recu) on delete restrict on update restrict;

alter table fiche_medical add constraint FK_comprendre foreign key (id_medical)
      references dossier_medical (id_medical) on delete restrict on update restrict;

alter table journal add constraint FK_gerer foreign key (id_personnel)
      references Personnel (id_personnel) on delete restrict on update restrict;

alter table lits add constraint FK_renfermer foreign key (id_chambre)
      references chambre_hospitalisation (id_chambre) on delete restrict on update restrict;

alter table ordonnace add constraint FK_comporter foreign key (id_consultation)
      references consultation (id_consultation) on delete restrict on update restrict;

alter table patient add constraint FK_administrer foreign key (id_vaccin)
      references vaccin (id_vaccin) on delete restrict on update restrict;

alter table patient add constraint FK_conduire foreign key (id_operation)
      references bloc_operatoire (id_operation) on delete restrict on update restrict;

alter table patient_soin add constraint FK_encaisser foreign key (id_patient)
      references patient (id_patient) on delete restrict on update restrict;

alter table patient_soin add constraint FK_recevoir foreign key (id_soins)
      references soins_infirmiers (id_soins) on delete restrict on update restrict;

alter table personnel_consultation add constraint FK_executer foreign key (id_personnel)
      references Personnel (id_personnel) on delete restrict on update restrict;

alter table personnel_consultation add constraint FK_realiser foreign key (id_consultation)
      references consultation (id_consultation) on delete restrict on update restrict;

alter table personnel_patient add constraint FK_editer foreign key (id_personnel)
      references Personnel (id_personnel) on delete restrict on update restrict;

alter table personnel_patient add constraint FK_parametrer foreign key (id_patient)
      references patient (id_patient) on delete restrict on update restrict;

alter table personnel_rdv add constraint FK_manipuler foreign key (id_personnel)
      references Personnel (id_personnel) on delete restrict on update restrict;

alter table personnel_rdv add constraint FK_presider foreign key (id_rdv)
      references rendez_vous (id_rdv) on delete restrict on update restrict;

alter table personnel_service add constraint FK_dependre foreign key (id_personnel)
      references Personnel (id_personnel) on delete restrict on update restrict;

alter table personnel_service add constraint FK_appartenir foreign key (id_service)
      references service (id_service) on delete restrict on update restrict;

alter table personnel_soins add constraint FK_effectuer foreign key (id_personnel)
      references Personnel (id_personnel) on delete restrict on update restrict;

alter table personnel_soins add constraint FK_accomplir foreign key (id_soins)
      references soins_infirmiers (id_soins) on delete restrict on update restrict;

alter table recu add constraint FK_beneficier foreign key (id_vaccin)
      references vaccin (id_vaccin) on delete restrict on update restrict;

alter table recu_consultation add constraint FK_disposer_de foreign key (id_ordonnance)
      references ordonnace (id_ordonnance) on delete restrict on update restrict;

alter table recu_consultation add constraint FK_amenager foreign key (id_recu)
      references recu (id_recu) on delete restrict on update restrict;

alter table rendez_vous add constraint FK_detenir foreign key (id_plage_horaire)
      references plage_horaire (id_plage_horaire) on delete restrict on update restrict;

alter table resultat add constraint FK_produire foreign key (id_examen)
      references examen (id_examen) on delete restrict on update restrict;

alter table vaccin add constraint FK_profiter foreign key (id_recu)
      references recu (id_recu) on delete restrict on update restrict;

alter table vaccin add constraint FK_retracer foreign key (id_carnet)
      references carnet (id_carnet) on delete restrict on update restrict;

