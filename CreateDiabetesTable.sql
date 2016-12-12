USE 35001fa16_dacostay;

CREATE TABLE Diabetes (
	ID INT UNSIGNED NOT NULL AUTO_INCREMENT,
    Name VARCHAR(15) NOT NULL,
    ServingSize VARCHAR(10),
    Carbs INT UNSIGNED,
    Protein INT UNSIGNED,
    Vitamins SET('YES', 'NO')
		DEFAULT 'NO',
	PRIMARY KEY(ID)
);