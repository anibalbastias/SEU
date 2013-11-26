CREATE TABLE carreras (
  id_carrera INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  universidades_id_univ INTEGER UNSIGNED NOT NULL,
  nom_carrera VARCHAR(100) NULL,
  PRIMARY KEY(id_carrera),
  INDEX carreras_FKIndex1(universidades_id_univ)
);

CREATE TABLE comunas (
  id_comuna INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  regiones_id_region INTEGER UNSIGNED NOT NULL,
  nom_comuna VARCHAR(100) NULL,
  PRIMARY KEY(id_comuna, regiones_id_region),
  INDEX comunas_FKIndex1(regiones_id_region)
);

CREATE TABLE faltas (
  id_falta INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  usuarios_id_usuario INTEGER UNSIGNED NOT NULL,
  desc_falta TEXT NULL,
  tipo_falta ENUM('Sancion','Falta') NULL,
  fecha_falta DATETIME NULL,
  PRIMARY KEY(id_falta, usuarios_id_usuario),
  INDEX faltas_FKIndex1(usuarios_id_usuario)
);

CREATE TABLE regiones (
  id_region INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nom_region VARCHAR(100) NULL,
  PRIMARY KEY(id_region)
);

CREATE TABLE turnos (
  id_turno INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  fecha_turno DATETIME NULL,
  cupos_turno INTEGER UNSIGNED NULL,
  PRIMARY KEY(id_turno)
);

CREATE TABLE universidades (
  id_univ INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nom_univ VARCHAR(100) NULL,
  PRIMARY KEY(id_univ)
);

CREATE TABLE usuarios (
  id_usuario INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  carreras_id_carrera INTEGER UNSIGNED NOT NULL,
  comunas_regiones_id_region INTEGER UNSIGNED NOT NULL,
  comunas_id_comuna INTEGER UNSIGNED NOT NULL,
  nom_usuario VARCHAR(100) NULL,
  apel1_usuario VARCHAR(100) NULL,
  apel2_usuario VARCHAR(100) NULL,
  rut_usuario VARCHAR(100) NULL,
  dir_usuario VARCHAR(100) NULL,
  email_usuario VARCHAR(100) NULL,
  cel_usuario VARCHAR(100) NULL,
  estudios_usuario BOOL NULL,
  fnac_usuario DATE NULL,
  genero_usuario BOOL NULL,
  hijos_usuario INTEGER UNSIGNED NULL,
  pass_usuario VARCHAR(100) NULL,
  PRIMARY KEY(id_usuario),
  INDEX usuarios_FKIndex1(comunas_id_comuna, comunas_regiones_id_region),
  INDEX usuarios_FKIndex2(carreras_id_carrera)
);

CREATE TABLE usuarios_has_turnos (
  usuarios_id_usuario INTEGER UNSIGNED NOT NULL,
  turnos_id_turno INTEGER UNSIGNED NOT NULL,
  estado ENUM('Aceptado','Rechazado','Suspendido') NULL,
  PRIMARY KEY(usuarios_id_usuario, turnos_id_turno),
  INDEX usuarios_has_turnos_FKIndex1(usuarios_id_usuario),
  INDEX usuarios_has_turnos_FKIndex2(turnos_id_turno)
);


