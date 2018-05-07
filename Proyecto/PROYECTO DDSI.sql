create table Rutero(
    NRPRutero varchar2(5) PRIMARY KEY,
    DNI varchar2(9) NOT NULL,
    Nombre varchar2(20) NOT NULL,
    Apellido varchar2(20) NOT NULL
);

CREATE TABLE Ruta(
    Codruta varchar(5) PRIMARY KEY
);

CREATE TABLE Maneja(
    Codruta varchar(5) PRIMARY KEY REFERENCES Ruta (Codruta),
    NRPRutero REFERENCES Rutero (NRPRutero)
);     
      
CREATE TABLE Enruta(
    Codpaquete varchar2(5) primary key REFERENCES Paquete (Codpaquete),
    Codruta varchar(5) REFERENCES Ruta (Codruta)
);    
      
CREATE TABLE Paquete(
    Codpaquete varchar2(5) primary key,
    Peso number(2),
    DirEnvio varchar2(30),
    DirEmisor varchar2(30),
    Bultos number(2),
);

ALTER TABLE Paquete DROP COLUMN Codalbaran;

drop table paquete;

CREATE TABLE AlbaranGenera(
    CodAlbaran varchar(8) primary key,
    CodPaquete varchar2(5) REFERENCES Enruta (CodPaquete),
    Precio number(2)    
);

CREATE TABLE Aceptado(
    CodAlbaran varchar(8) primary key REFERENCES AlbaranGenera (CodAlbaran)
);

CREATE TABLE Rechazado(
CodAlbaran varchar(8) primary key REFERENCES AlbaranGenera (CodAlbaran)
);

CREATE TABLE Pagado(
CodAlbaran varchar(8) primary key REFERENCES AlbaranGenera (CodAlbaran)
);

CREATE TABLE ProduceFactura(
    CodFactura number(5),
    CodAlbaran varchar(8) REFERENCES Pagado (CodAlbaran)
);


drop table Ruta;

ALTER TABLE Rutero ADD CONSTRAINT nrp_rutero_pk
      PRIMARY KEY (NRPRutero);
   
      
ALTER TABLE Ruta ADD CONSTRAINT nrp_rutero_fk
      FOREIGN KEY (NRPRutero) REFERENCES Rutero (NRPRutero);
      




