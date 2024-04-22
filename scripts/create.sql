Create database buf

create table ACCOUNTS (
    ID int not null AUTO_INCREMENT primary key,
    EMAIL varchar(255)not null UNIQUE,
    PASSWORD varchar(255) not null,
    VORNAME varchar(255),
    NACHNAME varchar(255),
    TELEFON varchar(16),
    ROLE int not null -- -1 = gesperrt, 0 = Gast, 1 = Mitarbeiter, 2 = Admin
)

create table BUCHUNGEN (
    ID int not null AUTO_INCREMENT primary key,
    ACCOUNT_ID int not null,
    BUCHUNGSDATUM datetime not null,
    DATUM date not null,
    STARTZEIT time not null,
    DAUER int not null,
    foreign key (ACCOUNT_ID) references ACCOUNTS(ID)
)