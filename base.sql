drop database if exists tablafutbol;
create database tablafutbol;
use tablafutbol;
create table posiciones(
	idequipo int,
	equipo varchar(50),
	 partidosJugados int default 0,
	 partidosGanados int default 0,
	 partidosEmpatados int default 0,
	 partidosPerdidos int default 0,
	 golesFavor int default 0,
	 golesContra int default 0,
	 diferenciaGoles int default 0, 
	 acumulapuntos int default 0
	 );
insert into posiciones values('1','Ajax','0','0','0','0','0','0','0','0');
insert into posiciones values('2','Atlanta','0','0','0','0','0','0','0','0');
insert into posiciones values('3','Atletico de Madrid','0','0','0','0','0','0','0','0');
insert into posiciones values('4','Borussia Dortmund','0','0','0','0','0','0','0','0');
insert into posiciones values('5','Barcelona','0','0','0','0','0','0','0','0');
insert into posiciones values('6','Bayern Múnich','0','0','0','0','0','0','0','0');
insert into posiciones values('7','Benfica','0','0','0','0','0','0','0','0');
insert into posiciones values('8','Brujas','0','0','0','0','0','0','0','0');
insert into posiciones values('9','Celtic','0','0','0','0','0','0','0','0');
insert into posiciones values('10','Chelsea','0','0','0','0','0','0','0','0');
insert into posiciones values('11','Galatasaray','0','0','0','0','0','0','0','0');
insert into posiciones values('12','Inter','0','0','0','0','0','0','0','0');
insert into posiciones values('13','Juventus','0','0','0','0','0','0','0','0');
insert into posiciones values('14','Liverpool','0','0','0','0','0','0','0','0');
insert into posiciones values('15','Lokomotiv','0','0','0','0','0','0','0','0');
insert into posiciones values('16','Lyon','0','0','0','0','0','0','0','0');
insert into posiciones values('17','M. City','0','0','0','0','0','0','0','0');
insert into posiciones values('18','Nápoles','0','0','0','0','0','0','0','0');
insert into posiciones values('19','Oporto','0','0','0','0','0','0','0','0');
insert into posiciones values('20','PSG','0','0','0','0','0','0','0','0');
insert into posiciones values('21','Real Madrid','0','0','0','0','0','0','0','0');
insert into posiciones values('22','Salzburgo','0','0','0','0','0','0','0','0');
insert into posiciones values('23','Tottenham','0','0','0','0','0','0','0','0');
insert into posiciones values('24','Valencia','0','0','0','0','0','0','0','0');
