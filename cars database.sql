Create database cars;
use cars;
create table cars(
yr varchar(4),
typ varchar(10),
manufacturer varchar(20),
model varchar(20),
cost varchar(10));

INSERT INTO cars (yr, typ, manufacturer, model, cost)
VALUES ('2012', 'SUV', 'Toyota', 'Highlander', '3200'),
('1993', 'Sedan', 'Honda', 'Accord', '700'),
('2008', 'SUV', 'Land Rover', 'Range Rover', '11000'),
('2012', 'SUV', 'Kia', 'Soul', '5200'),
('2017', 'SUV', 'Nissan', 'Armada', '28888'),
('2012', 'Coupe', 'Nissan', 'GT-R', '53800'),
('2013', 'Hatchback', 'Subaru', 'WRX', '18995'),
('2016', 'Sedan', 'Toyota', 'Corolla S', '14995'),
('2010', 'Truck', 'Toyota', 'Tacoma', '17995'),
('2007', 'Sedan', 'Honda', 'Civic', '4000'),
('2004', 'Sedan', 'Honda', 'Accord', '2000'),
('1987', 'Coupe', 'Chevrolet', 'Corvette', '4999'),
('2007', 'Sedan', 'Audi', 'A4 Quattro', '5500'),
('1970', 'Truck', 'Ford', 'Bronco', '42000'),
('1992', 'Coupe', 'Pontiac', 'Firebird Formula 5.0', '3500'),

('2019','Coupe','Ferrari','488','252800'),
('2017','Coupe','Chevrolet','Camaro SS','27988'),
('','','','',''),
('','','','',''),
('','','','',''),
('','','','',''),
('','','','','')
;


