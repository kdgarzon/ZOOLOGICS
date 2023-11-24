CREATE DATABASE zooDB;
USE zooDB;

CREATE TABLE Rol(
    ID int(3) NOT NULL AUTO_INCREMENT,
    Rol varchar(30) NOT NULL,
    PRIMARY KEY (ID)
);

INSERT INTO Rol (Rol) VALUES ('Zoológico de San Diego');/*1*/
INSERT INTO Rol (Rol) VALUES ('Zoológico de Singapur');/*2*/
INSERT INTO Rol (Rol) VALUES ('Zoológico de Toronto');/*3*/
INSERT INTO Rol (Rol) VALUES ('Zoológico Loro Parque');/*4*/
INSERT INTO Rol (Rol) VALUES ('Zoológico de Schonbrunn');/*5*/
INSERT INTO Rol (Rol) VALUES ('Zoológico de Londres');/*6*/
INSERT INTO Rol (Rol) VALUES ('Zoológico de Berlín');/*7*/
INSERT INTO Rol (Rol) VALUES ('Zoológico del Bronx');/*8*/
INSERT INTO Rol (Rol) VALUES ('Zoológico de Chapultepec');/*9*/
INSERT INTO Rol (Rol) VALUES ('Acuario Two Oceans');/*10*/
INSERT INTO Rol (Rol) VALUES ('Administrador');/*11*/
INSERT INTO Rol (Rol) VALUES ('Usuario');/*12*/

CREATE TABLE Usuario(
    ID int(4) NOT NULL AUTO_INCREMENT,
    Identificacion int(10) NOT NULL,
    Nombre varchar(40) NOT NULL,
    Apellido varchar(40) NOT NULL,
    Correo varchar(40) NOT NULL,
    User varchar(20) NOT NULL,
    Pass  varchar(50) NOT NULL,
    ID_Rol int(3),
    PRIMARY KEY (ID),
    FOREIGN KEY (ID_Rol) REFERENCES Rol(ID) ON UPDATE CASCADE ON DELETE SET NULL
) AUTO_INCREMENT = 1001;

INSERT INTO Usuario (Identificacion, Nombre, Apellido, Correo, User, Pass, ID_Rol) VALUES (1010526347, 'Sofia', 'Goméz', 'sogomez@gmail.com','sogomez', 'sg123', 1);/*1001*/
INSERT INTO Usuario (Identificacion, Nombre, Apellido, Correo, User, Pass, ID_Rol) VALUES (1191764758, 'Mateo', 'Rodríguez', 'marodriguez@gmail.com', 'marodriguez', 'mr123', 2);/*1002*/
INSERT INTO Usuario (Identificacion, Nombre, Apellido, Correo, User, Pass, ID_Rol) VALUES (1064076947, 'Valentina', 'García', 'vagarcia@gmail.com','vagarcia', 'vg123', 3);/*1003*/
INSERT INTO Usuario (Identificacion, Nombre, Apellido, Correo, User, Pass, ID_Rol) VALUES (1019107524, 'Lucas', 'González', 'lugonzalez@gmail.com', 'lugonzalez', 'lg123', 4);/*1004*/
INSERT INTO Usuario (Identificacion, Nombre, Apellido, Correo, User, Pass, ID_Rol) VALUES (1064238223, 'Isabella', 'Torres', 'istorres@gmail.com', 'istorres', 'it123', 5);/*1005*/
INSERT INTO Usuario (Identificacion, Nombre, Apellido, Correo, User, Pass, ID_Rol) VALUES (5958329, 'Santiago', 'Ramírez', 'saramirez@gmail.com', 'saramirez', 'sr123', 6);/*1006*/
INSERT INTO Usuario (Identificacion, Nombre, Apellido, Correo, User, Pass, ID_Rol) VALUES (65792946, 'Camila', 'Sánchez', 'casanchez@gmail.com', 'casanchez', 'cs123', 7);/*1007*/
INSERT INTO Usuario (Identificacion, Nombre, Apellido, Correo, User, Pass, ID_Rol) VALUES (87596324, 'Leonardo', 'Mendoza', 'lemendoza@gmail.com', 'lemendoza', 'lm123', 8);/*1008*/
INSERT INTO Usuario (Identificacion, Nombre, Apellido, Correo, User, Pass, ID_Rol) VALUES (985632147, 'Emilia', 'Castro', 'emcastro@gmail.com', 'emcastro', 'ec123', 9);/*1009*/
INSERT INTO Usuario (Identificacion, Nombre, Apellido, Correo, User, Pass, ID_Rol) VALUES (1001478523, 'Samuel', 'Valencia', 'savalencia@gmail.com', 'savalencia', 'sv123', 10);/*1010*/
INSERT INTO Usuario (Identificacion, Nombre, Apellido, Correo, User, Pass, ID_Rol) VALUES (1000472996, 'Karen', 'Garzon', 'kdgarzong@gmail.com', 'kagarzon', 'kg123', 11);/*1011*/
INSERT INTO Usuario (Identificacion, Nombre, Apellido, Correo, User, Pass, ID_Rol) VALUES (1012473698, 'Raul', 'Hernandez', 'rahernan@gmail.com', 'rahernan', 'rh123', 12);/*1012*/

CREATE TABLE Preguntas(
    ID int(3) NOT NULL AUTO_INCREMENT,
    Pregunta varchar(60) NOT NULL,
    PRIMARY KEY (ID)
)AUTO_INCREMENT = 901;

INSERT INTO Preguntas (Pregunta) VALUES ('¿Cuál es el segundo apellido de su madre?');/*901*/
INSERT INTO Preguntas (Pregunta) VALUES ('¿Cuál fue su primer trabajo?');/*902*/
INSERT INTO Preguntas (Pregunta) VALUES ('¿Cuál es el nombre de la persona más famosa que ha conocido?');/*903*/
INSERT INTO Preguntas (Pregunta) VALUES ('¿Cuál era su apodo en la infancia?');/*904*/
INSERT INTO Preguntas (Pregunta) VALUES ('¿Cuál es el nombre de la primera pareja que tuvo?');/*905*/
INSERT INTO Preguntas (Pregunta) VALUES ('¿Cuál era su materia favorita en el colegio?');/*906*/
INSERT INTO Preguntas (Pregunta) VALUES ('¿En qué ciudad nació su madre?');/*907*/
INSERT INTO Preguntas (Pregunta) VALUES ('¿Cuál es su comida favorita?');/*908*/
INSERT INTO Preguntas (Pregunta) VALUES ('¿En qué ciudad vive su hermano más próximo?');/*909*/

CREATE TABLE Respuestas(
    ID int(4) NOT NULL AUTO_INCREMENT,
    ID_Usuario int(4) NOT NULL,
    ID_primeraPregunta int(3),
    Respuesta_uno varchar(30) NOT NULL,
    ID_segundaPregunta int(3),
    Respuesta_dos varchar(30) NOT NULL,
    ID_terceraPregunta int(3),
    Respuesta_tres varchar(30) NOT NULL,
    PRIMARY KEY (ID),
    FOREIGN KEY (ID_Usuario) REFERENCES Usuario (ID) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (ID_primeraPregunta) REFERENCES Preguntas (ID) ON UPDATE CASCADE ON DELETE SET NULL,
    FOREIGN KEY (ID_segundaPregunta) REFERENCES Preguntas (ID) ON UPDATE CASCADE ON DELETE SET NULL,
    FOREIGN KEY (ID_terceraPregunta) REFERENCES Preguntas (ID) ON UPDATE CASCADE ON DELETE SET NULL
)AUTO_INCREMENT = 5001;

INSERT INTO Respuestas (ID_Usuario, ID_primeraPregunta, Respuesta_uno, ID_segundaPregunta, Respuesta_dos, ID_terceraPregunta, Respuesta_tres)
    VALUES (1001, 901, 'RODRIGUEZ', 904, 'PASTELITO', 907, 'TUNJA');
INSERT INTO Respuestas (ID_Usuario, ID_primeraPregunta, Respuesta_uno, ID_segundaPregunta, Respuesta_dos, ID_terceraPregunta, Respuesta_tres)
    VALUES (1002, 902, 'MESERO', 905, 'CATALINA', 908, 'PASTA');
INSERT INTO Respuestas (ID_Usuario, ID_primeraPregunta, Respuesta_uno, ID_segundaPregunta, Respuesta_dos, ID_terceraPregunta, Respuesta_tres)
    VALUES (1003, 902, 'CONDUCTOR', 906, 'ARTES', 909, 'MADRID');
INSERT INTO Respuestas (ID_Usuario, ID_primeraPregunta, Respuesta_uno, ID_segundaPregunta, Respuesta_dos, ID_terceraPregunta, Respuesta_tres)
    VALUES (1004, 903, 'SHAKIRA', 905, 'RAMIRO', 909, 'MEDELLIN');
INSERT INTO Respuestas (ID_Usuario, ID_primeraPregunta, Respuesta_uno, ID_segundaPregunta, Respuesta_dos, ID_terceraPregunta, Respuesta_tres)
    VALUES (1005, 902, 'VENDEDOR', 905, 'ANDRES', 907, 'CARTAGENA');
INSERT INTO Respuestas (ID_Usuario, ID_primeraPregunta, Respuesta_uno, ID_segundaPregunta, Respuesta_dos, ID_terceraPregunta, Respuesta_tres)
    VALUES (1006, 903, 'MALUMA', 906, 'DEPORTES', 909, 'BARRANQUILLA');
INSERT INTO Respuestas (ID_Usuario, ID_primeraPregunta, Respuesta_uno, ID_segundaPregunta, Respuesta_dos, ID_terceraPregunta, Respuesta_tres)
    VALUES (1007, 901, 'GARZON', 906, 'MATEMATICAS', 908, 'CARNE ASADA');
INSERT INTO Respuestas (ID_Usuario, ID_primeraPregunta, Respuesta_uno, ID_segundaPregunta, Respuesta_dos, ID_terceraPregunta, Respuesta_tres)
    VALUES (1008, 901, 'PEREZ', 904, 'RICITOS', 908, 'HAMBURGUESA');
INSERT INTO Respuestas (ID_Usuario, ID_primeraPregunta, Respuesta_uno, ID_segundaPregunta, Respuesta_dos, ID_terceraPregunta, Respuesta_tres)
    VALUES (1009, 903, 'JBALVIN', 905, 'DIEGO', 909, 'CALI');
INSERT INTO Respuestas (ID_Usuario, ID_primeraPregunta, Respuesta_uno, ID_segundaPregunta, Respuesta_dos, ID_terceraPregunta, Respuesta_tres)
    VALUES (1010, 902, 'COCINERO', 904, 'MUSCULITOS', 907, 'BOGOTA');
INSERT INTO Respuestas (ID_Usuario, ID_primeraPregunta, Respuesta_uno, ID_segundaPregunta, Respuesta_dos, ID_terceraPregunta, Respuesta_tres)
    VALUES (1011, 902, 'DIGITADOR', 906, 'CALCULO', 907, 'VILLAVICENCIO');
INSERT INTO Respuestas (ID_Usuario, ID_primeraPregunta, Respuesta_uno, ID_segundaPregunta, Respuesta_dos, ID_terceraPregunta, Respuesta_tres)
    VALUES (1012, 901, 'CUERVO', 906, 'FISICA', 909, 'MARIQUITA');

CREATE TABLE Ciudad(
    ID int(3) NOT NULL AUTO_INCREMENT,
    Ciudad varchar(30) NOT NULL,
    PRIMARY KEY (ID)
) AUTO_INCREMENT=201;

INSERT INTO Ciudad (Ciudad) VALUES ('Barranquilla'); /*201*/
INSERT INTO Ciudad (Ciudad) VALUES ('Berlín'); /*202*/
INSERT INTO Ciudad (Ciudad) VALUES ('Bogotá'); /*203*/
INSERT INTO Ciudad (Ciudad) VALUES ('Boston'); /*204*/
INSERT INTO Ciudad (Ciudad) VALUES ('Brasilia'); /*205*/
INSERT INTO Ciudad (Ciudad) VALUES ('Brisbane'); /*206*/
INSERT INTO Ciudad (Ciudad) VALUES ('Bucaramanga'); /*207*/
INSERT INTO Ciudad (Ciudad) VALUES ('Buenos Aires'); /*208*/
INSERT INTO Ciudad (Ciudad) VALUES ('Calí'); /*209*/
INSERT INTO Ciudad (Ciudad) VALUES ('Caracas'); /*210*/
INSERT INTO Ciudad (Ciudad) VALUES ('Cartagena'); /*211*/
INSERT INTO Ciudad (Ciudad) VALUES ('Chester'); /*212*/
INSERT INTO Ciudad (Ciudad) VALUES ('Ciudad de México'); /*213*/
INSERT INTO Ciudad (Ciudad) VALUES ('Ciudad del Cabo'); /*214*/
INSERT INTO Ciudad (Ciudad) VALUES ('Cúcuta'); /*215*/
INSERT INTO Ciudad (Ciudad) VALUES ('Cuenca'); /*216*/
INSERT INTO Ciudad (Ciudad) VALUES ('Estocolmo'); /*217*/
INSERT INTO Ciudad (Ciudad) VALUES ('Edimburgo'); /*218*/
INSERT INTO Ciudad (Ciudad) VALUES ('Guadalajara'); /*219*/
INSERT INTO Ciudad (Ciudad) VALUES ('Helsinki'); /*220*/
INSERT INTO Ciudad (Ciudad) VALUES ('Hong Kong'); /*221*/
INSERT INTO Ciudad (Ciudad) VALUES ('Lima'); /*222*/
INSERT INTO Ciudad (Ciudad) VALUES ('Londres'); /*223*/
INSERT INTO Ciudad (Ciudad) VALUES ('Los Ángeles'); /*224*/
INSERT INTO Ciudad (Ciudad) VALUES ('Madrid'); /*225*/
INSERT INTO Ciudad (Ciudad) VALUES ('Maracaibo'); /*226*/
INSERT INTO Ciudad (Ciudad) VALUES ('Medellín'); /*227*/
INSERT INTO Ciudad (Ciudad) VALUES ('Múnich'); /*228*/
INSERT INTO Ciudad (Ciudad) VALUES ('New York'); /*229*/
INSERT INTO Ciudad (Ciudad) VALUES ('Omaha'); /*230*/
INSERT INTO Ciudad (Ciudad) VALUES ('París'); /*231*/
INSERT INTO Ciudad (Ciudad) VALUES ('Praga'); /*232*/
INSERT INTO Ciudad (Ciudad) VALUES ('Puerto de la Cruz'); /*233*/
INSERT INTO Ciudad (Ciudad) VALUES ('Quito'); /*234*/
INSERT INTO Ciudad (Ciudad) VALUES ('Río de Janeiro'); /*235*/
INSERT INTO Ciudad (Ciudad) VALUES ('San Diego'); /*236*/
INSERT INTO Ciudad (Ciudad) VALUES ('San Francisco'); /*237*/
INSERT INTO Ciudad (Ciudad) VALUES ('San Luis'); /*238*/
INSERT INTO Ciudad (Ciudad) VALUES ('Santiago de Chile'); /*239*/
INSERT INTO Ciudad (Ciudad) VALUES ('Santo Domingo'); /*240*/
INSERT INTO Ciudad (Ciudad) VALUES ('Seúl'); /*241*/
INSERT INTO Ciudad (Ciudad) VALUES ('Sidney'); /*242*/
INSERT INTO Ciudad (Ciudad) VALUES ('Singapur'); /*243*/
INSERT INTO Ciudad (Ciudad) VALUES ('Tokio'); /*244*/
INSERT INTO Ciudad (Ciudad) VALUES ('Toronto'); /*245*/
INSERT INTO Ciudad (Ciudad) VALUES ('Trujillo'); /*246*/
INSERT INTO Ciudad (Ciudad) VALUES ('Valencia'); /*247*/
INSERT INTO Ciudad (Ciudad) VALUES ('Vancouver'); /*248*/
INSERT INTO Ciudad (Ciudad) VALUES ('Viena'); /*249*/
INSERT INTO Ciudad (Ciudad) VALUES ('Villahermosa'); /*250*/

CREATE TABLE Pais(
    ID int(3) NOT NULL AUTO_INCREMENT,
    Pais varchar(30) NOT NULL,
    PRIMARY KEY (ID)
) AUTO_INCREMENT=301;

INSERT INTO Pais (Pais) VALUES ('Angola'); /*301*/
INSERT INTO Pais (Pais) VALUES ('Alemania'); /*302*/
INSERT INTO Pais (Pais) VALUES ('Antártida'); /*303*/
INSERT INTO Pais (Pais) VALUES ('Arabia'); /*304*/
INSERT INTO Pais (Pais) VALUES ('Argentina'); /*305*/
INSERT INTO Pais (Pais) VALUES ('Armenia'); /*306*/
INSERT INTO Pais (Pais) VALUES ('Australia'); /*307*/
INSERT INTO Pais (Pais) VALUES ('Austria'); /*308*/
INSERT INTO Pais (Pais) VALUES ('Bélgica'); /*309*/
INSERT INTO Pais (Pais) VALUES ('Bolivia'); /*310*/
INSERT INTO Pais (Pais) VALUES ('Brasil'); /*311*/
INSERT INTO Pais (Pais) VALUES ('Camboya'); /*312*/
INSERT INTO Pais (Pais) VALUES ('Camerún'); /*313*/
INSERT INTO Pais (Pais) VALUES ('Cánada'); /*314*/
INSERT INTO Pais (Pais) VALUES ('Chile'); /*315*/
INSERT INTO Pais (Pais) VALUES ('China'); /*316*/
INSERT INTO Pais (Pais) VALUES ('Colombia'); /*317*/
INSERT INTO Pais (Pais) VALUES ('Corea del Sur'); /*318*/
INSERT INTO Pais (Pais) VALUES ('Cosmopolita'); /*319*/
INSERT INTO Pais (Pais) VALUES ('Costa Rica'); /*320*/
INSERT INTO Pais (Pais) VALUES ('Cuba'); /*321*/
INSERT INTO Pais (Pais) VALUES ('Ecuador'); /*322*/
INSERT INTO Pais (Pais) VALUES ('Egipto'); /*323*/
INSERT INTO Pais (Pais) VALUES ('España'); /*324*/
INSERT INTO Pais (Pais) VALUES ('Estados Unidos'); /*325*/
INSERT INTO Pais (Pais) VALUES ('Filipinas'); /*326*/
INSERT INTO Pais (Pais) VALUES ('Finlandia'); /*327*/
INSERT INTO Pais (Pais) VALUES ('Francia'); /*328*/
INSERT INTO Pais (Pais) VALUES ('Guatemala'); /*329*/
INSERT INTO Pais (Pais) VALUES ('India'); /*330*/
INSERT INTO Pais (Pais) VALUES ('Indonesia'); /*331*/
INSERT INTO Pais (Pais) VALUES ('Inglaterra'); /*332*/
INSERT INTO Pais (Pais) VALUES ('Irán'); /*333*/
INSERT INTO Pais (Pais) VALUES ('Irlanda'); /*334*/
INSERT INTO Pais (Pais) VALUES ('Italia'); /*335*/
INSERT INTO Pais (Pais) VALUES ('Japón'); /*336*/
INSERT INTO Pais (Pais) VALUES ('Kalahari'); /*337*/
INSERT INTO Pais (Pais) VALUES ('Kenia'); /*338*/
INSERT INTO Pais (Pais) VALUES ('Madagascar'); /*339*/
INSERT INTO Pais (Pais) VALUES ('Malasia'); /*340*/
INSERT INTO Pais (Pais) VALUES ('Marruecos'); /*341*/
INSERT INTO Pais (Pais) VALUES ('Mauricio'); /*342*/
INSERT INTO Pais (Pais) VALUES ('México'); /*343*/
INSERT INTO Pais (Pais) VALUES ('Namibia'); /*344*/
INSERT INTO Pais (Pais) VALUES ('Nicaragua'); /*345*/
INSERT INTO Pais (Pais) VALUES ('Nigeria'); /*346*/
INSERT INTO Pais (Pais) VALUES ('Noruega'); /*347*/
INSERT INTO Pais (Pais) VALUES ('Nueva Guinea'); /*348*/
INSERT INTO Pais (Pais) VALUES ('Nueva Zelanda'); /*349*/
INSERT INTO Pais (Pais) VALUES ('Pánama'); /*350*/
INSERT INTO Pais (Pais) VALUES ('Paraguay'); /*351*/
INSERT INTO Pais (Pais) VALUES ('Perú'); /*352*/
INSERT INTO Pais (Pais) VALUES ('Reino Unido');/*353*/ 
INSERT INTO Pais (Pais) VALUES ('República Dominicana'); /*354*/
INSERT INTO Pais (Pais) VALUES ('Rusia'); /*355*/
INSERT INTO Pais (Pais) VALUES ('Senegal'); /*356*/
INSERT INTO Pais (Pais) VALUES ('Singapur'); /*357*/
INSERT INTO Pais (Pais) VALUES ('Somalia'); /*358*/
INSERT INTO Pais (Pais) VALUES ('Sudáfrica'); /*359*/
INSERT INTO Pais (Pais) VALUES ('Suecia'); /*360*/
INSERT INTO Pais (Pais) VALUES ('Suiza'); /*361*/
INSERT INTO Pais (Pais) VALUES ('Sulawesi'); /*362*/
INSERT INTO Pais (Pais) VALUES ('Tailandia'); /*363*/
INSERT INTO Pais (Pais) VALUES ('Tanzania'); /*364*/
INSERT INTO Pais (Pais) VALUES ('Tokio'); /*365*/
INSERT INTO Pais (Pais) VALUES ('Turquía'); /*366*/
INSERT INTO Pais (Pais) VALUES ('Uruguay'); /*367*/
INSERT INTO Pais (Pais) VALUES ('Uzbekistán'); /*368*/
INSERT INTO Pais (Pais) VALUES ('Venezuela'); /*369*/
INSERT INTO Pais (Pais) VALUES ('Vietnam'); /*370*/

CREATE TABLE Zoologico(
    ID int(3) NOT NULL AUTO_INCREMENT,
    Nombre varchar(60) NOT NULL,
    ID_Ciudad int(3),
    ID_Pais int(3),
    Tamanio int(10) NOT NULL,
    Presupuesto_anual float(10) NOT NULL,
    PRIMARY KEY (ID),
    FOREIGN KEY (ID_Ciudad) REFERENCES Ciudad(ID) ON UPDATE CASCADE ON DELETE SET NULL,
    FOREIGN KEY (ID_Pais) REFERENCES Pais(ID) ON UPDATE CASCADE ON DELETE SET NULL
);

INSERT INTO Zoologico (Nombre, ID_Ciudad, ID_Pais, Tamanio, Presupuesto_anual) VALUES ('Zoologico de San Diego', 236, 325, 7284342, 407000000);/*1*/
INSERT INTO Zoologico (Nombre, ID_Ciudad, ID_Pais, Tamanio, Presupuesto_anual) VALUES ('Zoologico de Singapur', 243, 357, 280000, 100000000); /*2*/
INSERT INTO Zoologico (Nombre, ID_Ciudad, ID_Pais, Tamanio, Presupuesto_anual) VALUES ('Zoologico de Toronto', 245, 314, 2870000, 778250);/*3*/
INSERT INTO Zoologico (Nombre, ID_Ciudad, ID_Pais, Tamanio, Presupuesto_anual) VALUES ('Zoologico Loro Parque', 233, 324, 130000, 25750000); /*4*/
INSERT INTO Zoologico (Nombre, ID_Ciudad, ID_Pais, Tamanio, Presupuesto_anual) VALUES ('Zoologico de Schonbrunn', 249, 308, 170000, 52000000); /*5*/
INSERT INTO Zoologico (Nombre, ID_Ciudad, ID_Pais, Tamanio, Presupuesto_anual) VALUES ('Zoologico de Londres', 223, 353, 140000, 61500000); /*6*/
INSERT INTO Zoologico (Nombre, ID_Ciudad, ID_Pais, Tamanio, Presupuesto_anual) VALUES ('Zoologico de Berlín', 202, 302, 350000, 78850230); /*7*/
INSERT INTO Zoologico (Nombre, ID_Ciudad, ID_Pais, Tamanio, Presupuesto_anual) VALUES ('Zoologico del Bronx', 229, 325, 1070000, 250000000);/*8*/
INSERT INTO Zoologico (Nombre, ID_Ciudad, ID_Pais, Tamanio, Presupuesto_anual) VALUES ('Zoologico de Chapultepec', 213, 343, 170000, 958300);/*9*/
INSERT INTO Zoologico (Nombre, ID_Ciudad, ID_Pais, Tamanio, Presupuesto_anual) VALUES ('Acuario Two Oceans', 214, 359, 10000, 1200000);/*10*/

CREATE TABLE Familia(
    ID int(5) NOT NULL AUTO_INCREMENT,
    Familia varchar(25) NOT NULL,
    PRIMARY KEY (ID)
);

INSERT INTO Familia (Familia) VALUES ('Ambystomatidae');/*1*/
INSERT INTO Familia (Familia) VALUES ('Accipitridae');/*2*/
INSERT INTO Familia (Familia) VALUES ('Agamidae');/*3*/
INSERT INTO Familia (Familia) VALUES ('Ailuridae');/*4*/
INSERT INTO Familia (Familia) VALUES ('Alcedinidae');/*5*/
INSERT INTO Familia (Familia) VALUES ('Alligatoridae');/*6*/
INSERT INTO Familia (Familia) VALUES ('Anatidae');/*7*/
INSERT INTO Familia (Familia) VALUES ('Boidae');/*8*/
INSERT INTO Familia (Familia) VALUES ('Bovidae');/*9*/
INSERT INTO Familia (Familia) VALUES ('Bradypodidae');/*10*/
INSERT INTO Familia (Familia) VALUES ('Bucerotidae');/*11*/
INSERT INTO Familia (Familia) VALUES ('Cacatuidae');/*12*/
INSERT INTO Familia (Familia) VALUES ('Callitrichidae');/*13*/
INSERT INTO Familia (Familia) VALUES ('Camelidae');/*14*/
INSERT INTO Familia (Familia) VALUES ('Canidae');/*15*/
INSERT INTO Familia (Familia) VALUES ('Cathartidae');/*16*/
INSERT INTO Familia (Familia) VALUES ('Caviidae');/*17*/
INSERT INTO Familia (Familia) VALUES ('Cercopithecidae');/*18*/
INSERT INTO Familia (Familia) VALUES ('Cervidae');/*19*/
INSERT INTO Familia (Familia) VALUES ('Chinchillidae');/*20*/
INSERT INTO Familia (Familia) VALUES ('Chondrichthyes');/*21*/
INSERT INTO Familia (Familia) VALUES ('Columbidae');/*22*/
INSERT INTO Familia (Familia) VALUES ('Corvidae');/*23*/
INSERT INTO Familia (Familia) VALUES ('Cricetidae');/*24*/
INSERT INTO Familia (Familia) VALUES ('Cyprinidae');/*25*/
INSERT INTO Familia (Familia) VALUES ('Daubentoniidae');/*26*/
INSERT INTO Familia (Familia) VALUES ('Delphinidae');/*27*/
INSERT INTO Familia (Familia) VALUES ('Dendrobatidae');/*28*/
INSERT INTO Familia (Familia) VALUES ('Elephantidae');/*29*/
INSERT INTO Familia (Familia) VALUES ('Equidae');/*30*/
INSERT INTO Familia (Familia) VALUES ('Felidae');/*31*/
INSERT INTO Familia (Familia) VALUES ('Gekkonidae');/*32*/
INSERT INTO Familia (Familia) VALUES ('Geoemydidae');/*33*/
INSERT INTO Familia (Familia) VALUES ('Giraffidae');/*34*/
INSERT INTO Familia (Familia) VALUES ('Gliridae');/*35*/
INSERT INTO Familia (Familia) VALUES ('Gruidae');/*36*/
INSERT INTO Familia (Familia) VALUES ('Herpestidae');/*37*/
INSERT INTO Familia (Familia) VALUES ('Heterocephalidae');/*38*/
INSERT INTO Familia (Familia) VALUES ('Hippopotamidae');/*39*/
INSERT INTO Familia (Familia) VALUES ('Hominidae');/*40*/
INSERT INTO Familia (Familia) VALUES ('Iguanidae');/*41*/
INSERT INTO Familia (Familia) VALUES ('Lemuridae');/*42*/
INSERT INTO Familia (Familia) VALUES ('Leporidae');/*43*/
INSERT INTO Familia (Familia) VALUES ('Macropodinae');/*44*/
INSERT INTO Familia (Familia) VALUES ('Manidae');/*45*/
INSERT INTO Familia (Familia) VALUES ('Megapodiidae');/*46*/
INSERT INTO Familia (Familia) VALUES ('Muraenidae');/*47*/
INSERT INTO Familia (Familia) VALUES ('Mustelidae');/*48*/
INSERT INTO Familia (Familia) VALUES ('Nestoridae');/*49*/
INSERT INTO Familia (Familia) VALUES ('Octopodidae');/*50*/
INSERT INTO Familia (Familia) VALUES ('Ornithorhynchidae');/*51*/
INSERT INTO Familia (Familia) VALUES ('Otariidae');/*52*/
INSERT INTO Familia (Familia) VALUES ('Partulidae');/*53*/
INSERT INTO Familia (Familia) VALUES ('Phascolarctidae');/*54*/
INSERT INTO Familia (Familia) VALUES ('Phasianidae');/*55*/
INSERT INTO Familia (Familia) VALUES ('Phoenicopteridae');/*56*/
INSERT INTO Familia (Familia) VALUES ('Pitheciidae');/*57*/
INSERT INTO Familia (Familia) VALUES ('Procyonidae');/*58*/
INSERT INTO Familia (Familia) VALUES ('Psittacidae');/*59*/
INSERT INTO Familia (Familia) VALUES ('Pyxicephalidae');/*60*/
INSERT INTO Familia (Familia) VALUES ('Rhinocerotidae');/*61*/
INSERT INTO Familia (Familia) VALUES ('Salamandridae');/*62*/
INSERT INTO Familia (Familia) VALUES ('Scorpaenidae');/*63*/
INSERT INTO Familia (Familia) VALUES ('Spheniscidae');/*64*/
INSERT INTO Familia (Familia) VALUES ('Sphenodontidae');/*65*/
INSERT INTO Familia (Familia) VALUES ('Tapiridae');/*66*/
INSERT INTO Familia (Familia) VALUES ('Testudinidae');/*67*/
INSERT INTO Familia (Familia) VALUES ('Threskiornithidae');/*68*/
INSERT INTO Familia (Familia) VALUES ('Ulmaridae');/*69*/
INSERT INTO Familia (Familia) VALUES ('Ursidae');/*70*/

CREATE TABLE Extincion(
    ID int(3) NOT NULL AUTO_INCREMENT,
    Nivel_peligro varchar(30) NOT NULL,
    PRIMARY KEY (ID)
) AUTO_INCREMENT=401;

INSERT INTO Extincion (Nivel_peligro) VALUES ('Preocupación menor');/*401*/
INSERT INTO Extincion (Nivel_peligro) VALUES ('Casi amenazada');/*402*/
INSERT INTO Extincion (Nivel_peligro) VALUES ('Vulnerable');/*403*/
INSERT INTO Extincion (Nivel_peligro) VALUES ('Peligro de extinción'); /*404*/
INSERT INTO Extincion (Nivel_peligro) VALUES ('Peligro Crítico'); /*405*/
INSERT INTO Extincion (Nivel_peligro) VALUES ('Extinta en estado silvestre');/*406*/
INSERT INTO Extincion (Nivel_peligro) VALUES ('Extinta');/*407*/

CREATE TABLE Nombre_Especie(
    ID int(5) NOT NULL AUTO_INCREMENT,
    Especie varchar(35) NOT NULL, 
    PRIMARY KEY (ID)
);

INSERT INTO Nombre_Especie (Especie) VALUES ('Ambystoma');/*1*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Acinonys Jubatus');/*2*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Ailuropoda');/*3*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Ailurus fulgens');/*4*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Aix galericulata');/*5*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Alligator');/*6*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Anas arcuata');/*7*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Anodorhynchus');/*8*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Anser caerulescens');/*9*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Aurelia aurita');/*10*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Balearica regulorum');/*11*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Batagur');/*12*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Bison');/*13*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Bradypus');/*14*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Buceros');/*15*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Buteo platypterus');/*16*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Cacatua');/*17*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Caloenas');/*18*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Camelus');/*19*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Canis lupus');/*20*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Capra');/*21*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Carcharodon carcharias');/*22*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Ceratotherium simum');/*23*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Chinchilla');/*24*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Coturnix');/*25*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Cuon');/*26*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Cyclura');/*27*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Cygnus atratus');/*28*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Cyprinus');/*29*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Dacelo');/*30*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Daubentonia');/*31*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Delphinus');/*32*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Dendrobates tinctorius');/*33*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Dendrolagus ursinus');/*34*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Equus');/*35*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Eudocimus ruber');/*36*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Eunectes murinus');/*37*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Geronticus');/*38*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Giraffa camelopardalis');/*39*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Gopherus agassizii');/*40*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Gypaetus');/*41*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Hapalemur');/*42*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Heterocephalus glaber');/*43*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Hexaprotodon');/*44*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Hydrochoerus');/*45*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Leontopithecus');/*46*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Leopardus');/*47*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Lontra');/*48*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Lycaon');/*49*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Lygodactylus');/*50*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Macrocephalon');/*51*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Manis');/*52*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Meleagris');/*53*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Monotemata');/*54*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Muraenidae');/*55*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Muscardinus');/*56*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Mustela putorius furo');/*57*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Neophron');/*58*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Nephelomys');/*59*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Nesoenas');/*60*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Nestor');/*61*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Octopus');/*62*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Orcinus');/*63*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Ovis aries');/*64*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Pan troglodytes');/*65*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Panthera onca');/*66*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Panthera tigris sumatrae');/*67*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Parabuteo unicinctus');/*68*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Partula');/*69*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Passeriformes');/*70*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Phascolarctos cinereus');/*71*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Phoenicopteridae');/*72*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Pithecia');/*73*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Pogona vitticeps');/*74*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Pongo abelii');/*75*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Proboscideos');/*76*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Procyon lotor');/*77*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Pterois');/*78*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Pyxicephalus');/*79*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Rangifer tarandus');/*80*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Romerolagus');/*81*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Salamandra');/*82*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Spheniscus demersus');/*83*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Sphenodon');/*84*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Suricata suricatta');/*85*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Tapirus');/*86*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Trachypithecus');/*87*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Troglodytes gorilla');/*88*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Ursus arctos');/*89*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Ursus maritimus');/*90*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Vicugna');/*91*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Vulpes');/*92*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Vultur');/*93*/
INSERT INTO Nombre_Especie (Especie) VALUES ('Zalophus');/*94*/

CREATE TABLE Especie(
    ID int(5) NOT NULL AUTO_INCREMENT,
    Nombre_vulgar varchar(35) NOT NULL,
    Nombre_cientifico varchar(35) NOT NULL,
    ID_NomEspecie int(5),
    ID_Familia int(5),
    ID_Extincion int(3),
    ID_Zoo int(3),
    PRIMARY KEY (ID),
    FOREIGN KEY (ID_NomEspecie) REFERENCES Nombre_Especie(ID) ON UPDATE CASCADE ON DELETE SET NULL,
    FOREIGN KEY (ID_Familia) REFERENCES Familia(ID) ON UPDATE CASCADE ON DELETE SET NULL,
    FOREIGN KEY (ID_Extincion) REFERENCES Extincion(ID) ON UPDATE CASCADE ON DELETE SET NULL,
    FOREIGN KEY (ID_Zoo) REFERENCES Zoologico(ID) ON UPDATE CASCADE ON DELETE SET NULL
);

INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Ajolote', 'Ambystoma mexicanum', 1, 1, 405, 6);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Cuervo hawaiano', 'Corvus hawaiiensis', 70, 23, 406, 1);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Alimoche', 'Neophron percnopterus', 58, 2, 404, 5);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Alpaca', 'Vicugna pacos', 91, 14, 401, 6);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Anaconda', 'Eunectes', 37, 8, 401, 8);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('AyeAyes', 'Daubentonia madagascariensis', 31, 26, 404, 6);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Batagur', 'Batagur spp', 12, 33, 405, 5);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Bisonte', 'Bison bison', 13, 9, 401, 8);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Cabra', 'Capra aegagrus hircus', 21, 9, 401, 7);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Cálaos de cola rufa', 'Buceros hydrocorax', 15, 11, 401, 7);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Camello salvaje', 'Camelus ferus', 19, 14, 405, 6);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Canguro de árbol', 'Dendrolagus', 34, 44, 404, 2);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Capibara', 'Hydrochoerus hydrochaeris', 45, 17, 401, 4);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Caracol partula', 'Partula spp', 69, 53, 405, 6);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Caribú', 'Rangifer tarandus', 80, 19, 401, 3);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Carpas Koi', 'Cyprinus rubrofuscus', 29, 25, 401, 4);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Cebra de Grevy', 'Equus grevyi', 35, 30, 404, 9);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Chimpancé', 'Pan', 65, 40, 403, 7);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Chinchilla', 'Chinchilla brevicaudata', 24, 20, 405, 8);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Cisne', 'Cygnus spp', 28, 7, 404, 4);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Cocodrilo americano', 'Alligator mississippiensis', 6, 6, 401, 8);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Codorniz', 'Coturnix spp', 25, 55, 401, 5);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Cóndor andino', 'Vultur gryphus', 93, 16, 402, 8);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Cucaburra', 'Dacelo', 30, 5, 401, 3);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Danta', 'Tapirus bairdii', 86, 66, 405, 5);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Delfín', 'Delphinus delphis', 32, 27, 401, 4);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Dholes', 'Cuon alpinus', 26, 15, 404, 8);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Lagarto', 'Pogona vitticeps', 74, 3, 401, 2);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Elefante africano de Sabana', 'Loxodonta africana', 76, 29, 404, 1);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Flamenco', 'Phoenicopteridae', 72, 56, 405, 4);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Ganso de nieve menor', 'Anser caerulescens', 9, 7, 401, 3);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Gecko', 'Lygodactylus williamsi', 50, 32, 404, 2);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Gorila', 'Gorilla', 88, 40, 404, 1);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Grulla coronada de cuello gris', 'Balearica regulorum', 11, 36, 401, 3);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Guacamayo jacinto', 'Anodorhynchus hyacinthinus', 8, 59, 401, 4);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Chita', 'Acinonys Jubatus', 2, 31, 403, 2);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Halcón de Harris', 'Parabuteo unicinctus', 68, 2, 401, 3);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Hipopotamo pigmeo', 'Hexaprotodon liberiensis', 44, 39, 403, 4);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Hurón doméstico', 'Mustela putorius furo', 57, 48, 401, 3);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Ibis calvo', 'Geronticus eremita', 38, 68, 405, 5);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Ibis escarlata', 'Eudocimus ruber', 36, 68, 401, 3);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Iguana Azul', 'Cyclura lewisi', 27, 41, 405, 8);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Jaguar', 'Panthera onca', 66, 31, 402, 1);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Jirafa', 'Giraffa camelopardalis', 39, 34, 403, 2);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Kea', 'Nestor notabilis', 61, 49, 403, 4);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Koala', 'Phascolarctos cinereus', 71, 54, 405, 1);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Langur de Ébano dorado', 'Trachypithecus auratus', 87, 18, 404, 8);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Lemúr gentil alaotrano', 'Hapalemur alaotrensis', 42, 42, 405, 6);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Leon marino', 'Zalophus californianus', 94, 52, 401, 7);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Lirón avellana', 'Muscardinus avellanarius', 56, 35, 401, 6);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Lobo mexicano', 'Canis lupus baileyi', 20, 15, 405, 9);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Maleo', 'Macrocephalon maleo', 51, 46, 403, 8);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Mapache', 'Procyon lotor', 77, 58, 401, 3);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Medusa Luna', 'Aurelia aurita', 10, 69, 401, 3);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Morenas', 'Muraenidae', 55, 47, 401, 10);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Muflón', 'Ovis aries orientalis', 64, 9, 401, 3);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Nutria', 'Lontra canadensis', 48, 48, 401, 4);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Ocelote', 'Leopardus pardalis', 47, 31, 401, 9);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Orangutan', 'Pongo', 75, 40, 405, 7);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Orca', 'Orcinus orca', 63, 27, 405, 4);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Ornitorrinco', 'Ornithorhynchus anatinus', 54, 51, 402, 1);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Oso Grizzly', 'Ursus arctos horribilis', 89, 70, 401, 8);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Oso blanco', 'Ursus maritimus', 90, 70, 403, 1);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Paloma Nicobar', 'Caloenas nicobarica', 18, 22, 402, 8);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Paloma Rosada', 'Nesoenas mayeri', 60, 22, 406, 6);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Panda Gigante', 'Ailuropoda melanoleuca', 3, 70, 404, 5);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Panda Rojo', 'Ailurus fulgens', 4, 4, 403, 3);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Pangolin', 'Manis spp', 52, 45, 405, 6);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Pato Mandarin', 'Aix galericulata', 5, 7, 401, 3);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Yaguasas', 'Dendrocygninae', 7, 7, 404, 2);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Pavo ocelado', 'Meleagris ocellata', 53, 55, 405, 8);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Perezosos', 'Bradypus', 14, 10, 401, 4);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Perro salvaje africano', 'Lycaon pictus', 49, 15, 404, 6);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Pez León', 'Pterois volitans', 78, 63, 401, 3);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Pingüino', 'Spheniscus demersus', 83, 64, 404, 1);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Pulpos', 'Octopus', 62, 50, 401, 10);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Quebrantahuesos', 'Gypaetus barbatus', 41, 2, 404, 5);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Rana teñir venenosa azul', 'Dendrobates tinctorius', 33, 28, 401, 2);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Rana toro africana', 'Pyxicephalus adspersus', 79, 60, 401, 6);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Rata Nube', 'Nephelomys albigularis', 59, 24, 401, 8);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Rata topo desnuda', 'Heterocephalus glaber', 43, 38, 401, 3);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Ratonero moteado', 'Buteo platypterus', 16, 2, 401, 3);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Rinoceronte blanco del norte', 'Ceratotherium simum', 23, 61, 405, 1);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Sakí de cara blanca', 'Pithecia pithecia', 73, 57, 404, 4);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Salamandra', 'Salamandra spp', 82, 62, 404, 5);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Sihek', 'Cacatua galerita', 17, 12, 401, 6);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Suricata', 'Suricata suricatta', 85, 37, 401, 2);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Teporingo', 'Romerolagus diazi', 81, 43, 405, 9);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Tiburon', 'Carcharodon carcharias', 22, 21, 403, 4);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Tigre de Sumatra', 'Panthera tigris', 67, 31, 404, 1);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Tamarino león dorado', 'Leontopithecus rosalia', 46, 13, 404, 2);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Tortuga del desierto de Mojave', 'Gopherus agassizii', 40, 67, 403, 1);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Tuátara', 'Sphenodon punctatus', 84, 65, 401, 7);
INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo)
    VALUES ('Zorro Fenec', 'Vulpes zerd', 92, 15, 401, 8);

CREATE TABLE Sexo(
    ID int(3) NOT NULL AUTO_INCREMENT,
    Sexo varchar(13) NOT NULL,
    PRIMARY KEY (ID)
) AUTO_INCREMENT=501;

INSERT INTO Sexo (Sexo) VALUES ('Asexual');
INSERT INTO Sexo (Sexo) VALUES ('Hembra');
INSERT INTO Sexo (Sexo) VALUES ('Hermafrodita');
INSERT INTO Sexo (Sexo) VALUES ('Macho');

CREATE TABLE Continente(
    ID int(3) NOT NULL AUTO_INCREMENT,
    Continente varchar(25) NOT NULL,
    PRIMARY KEY (ID)
) AUTO_INCREMENT=601;

INSERT INTO Continente (Continente) VALUES ('África');
INSERT INTO Continente (Continente) VALUES ('América');
INSERT INTO Continente (Continente) VALUES ('Antártida');
INSERT INTO Continente (Continente) VALUES ('Asia');
INSERT INTO Continente (Continente) VALUES ('Europa');
INSERT INTO Continente (Continente) VALUES ('Oceanía');
INSERT INTO Continente (Continente) VALUES ('Oceanos');

CREATE TABLE Animal(
    ID int(5) NOT NULL AUTO_INCREMENT,
    ID_Especie int(5),
    ID_Sexo int(3),
    Anio_Nacimiento int(4) NOT NULL,
    ID_Pais int(3),
    ID_Continente int(3),
    ID_Zoo int(3),
    PRIMARY KEY (ID),
    FOREIGN KEY (ID_Especie) REFERENCES Nombre_Especie(ID) ON UPDATE CASCADE ON DELETE SET NULL,
    FOREIGN KEY (ID_Sexo) REFERENCES Sexo(ID) ON UPDATE CASCADE ON DELETE SET NULL,
    FOREIGN KEY (ID_Pais) REFERENCES Pais(ID) ON UPDATE CASCADE ON DELETE SET NULL,
    FOREIGN KEY (ID_Continente) REFERENCES Continente(ID) ON UPDATE CASCADE ON DELETE SET NULL,
    FOREIGN KEY (ID_Zoo) REFERENCES Zoologico(ID) ON UPDATE CASCADE ON DELETE SET NULL
);

INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (1, 502, 2015, 343, 602, 6);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (2, 502, 2021, 325, 602, 1);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (3, 502, 1999, 359, 601, 5);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (4, 504, 2013, 317, 602, 8);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (5, 502, 2021, 339, 601, 6);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (6, 504, 2007, 343, 602, 6);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (7, 502, 2021, 316, 604, 5);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (8, 504, 2011, 325, 602, 8);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (9, 502, 2015, 333, 604, 7);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (10, 504, 1995, 356, 601, 7);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (11, 502, 1998, 369, 604, 6);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (12, 502, 2002, 307, 606, 2);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (13, 502, 2017, 317, 602, 4);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (14, 503, 2022, 307, 606, 6);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (15, 504, 2015, 347, 605, 3);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (16, 502, 2011, 336, 604, 4);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (17, 504, 2011, 338, 601, 9);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (18, 502, 2000, 344, 601, 7);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (19, 502, 2014, 315, 602, 8);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (20, 504, 2012, 325, 602, 4);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (21, 502, 2001, 343, 602, 8);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (22, 502, 2023, 352, 602, 5);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (23, 504, 1980, 317, 602, 8);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (24, 502, 2014, 348, 606, 3);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (25, 502, 2003, 305, 602, 5);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (26, 504, 2001, 319, 607, 4);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (27, 504, 2017, 316, 604, 8);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (28, 504, 2012, 307, 606, 2);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (29, 504, 1980, 359, 601, 1);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (30, 504, 1997, 325, 602, 4);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (31, 502, 2012, 303, 603, 3);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (32, 504, 2018, 364, 601, 2);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (33, 504, 2000, 313, 601, 1);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (34, 502, 2010, 359, 601, 3);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (35, 504, 1994, 310, 602, 4);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (36, 504, 2015, 344, 601, 2);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (37, 504, 2016, 350, 602, 3);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (38, 504, 2001, 346, 601, 4);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (39, 504, 2019, 335, 605, 3);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (40, 504, 2002, 366, 605, 5);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (41, 502, 2008, 317, 602, 3);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (42, 502, 2019, 321, 602, 8);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (43, 504, 2012, 317, 602, 1);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (44, 502, 2000, 359, 601, 2);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (45, 502, 1995, 349, 606, 4);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (46, 504, 2021, 307, 606, 1);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (47, 504, 2003, 363, 604, 8);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (48, 502, 2016, 339, 601, 6);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (49, 504, 2018, 325, 602, 7);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (50, 502, 2021, 324, 605, 6);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (51, 504, 2017, 343, 602, 9);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (52, 504, 2015, 362, 604, 8);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (53, 504, 2017, 314, 602, 3);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (54, 501, 2023, 317, 602, 3);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (55, 502, 2005, 350, 602, 10);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (56, 504, 2020, 306, 604, 3);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (57, 502, 2011, 325, 602, 4);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (58, 502, 2014, 305, 602, 9);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (59, 504, 1990, 331, 604, 7);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (60, 502, 1990, 319, 607, 4);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (61, 502, 2013, 307, 606, 1);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (62, 502, 2012, 314, 602, 8);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (63, 504, 1999, 303, 603, 1);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (64, 502, 2015, 330, 604, 8);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (65, 504, 2009, 342, 601, 6);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (66, 502, 2015, 316, 604, 5);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (67, 504, 2022, 316, 604, 3);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (68, 502, 2015, 359, 601, 6);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (69, 502, 2017, 336, 604, 3);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (70, 502, 2019, 350, 602, 2);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (71, 504, 2016, 329, 602, 8);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (72, 502, 2006, 322, 602, 4);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (73, 504, 2014, 359, 601, 6);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (74, 504, 2018, 307, 606, 3);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (75, 502, 2009, 359, 601, 1);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (76, 504, 2023, 315, 602, 10);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (77, 504, 1992, 324, 605, 5);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (78, 502, 2015, 369, 602, 2);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (79, 502, 2019, 301, 601, 6);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (80, 502, 2022, 369, 602, 8);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (81, 504, 2017, 358, 601, 3);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (82, 502, 2011, 314, 602, 3);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (83, 502, 1985, 359, 601, 1);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (84, 504, 2007, 317, 602, 4);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (85, 504, 2017, 347, 605, 5);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (86, 502, 1989, 307, 606, 6);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (87, 502, 2017, 337, 601, 2);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (88, 504, 2020, 343, 602, 9);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (89, 504, 2015, 319, 607, 4);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (90, 502, 2019, 331, 604, 1);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (91, 504, 2014, 311, 602, 2);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (92, 504, 1998, 325, 602, 1);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (93, 502, 1991, 349, 606, 7);
INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) VALUES (94, 504, 2019, 304, 601, 8);
