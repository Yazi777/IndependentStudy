USE xxxxxxx;

#Vitamins SET('YES', 'NO')
		#DEFAULT 'NO'

CREATE TABLE TypeEntry (
	TypeID INT UNSIGNED NOT NULL AUTO_INCREMENT,
	ItemID INT UNSIGNED NOT NULL,
	Food SET('YES','NO')
		DEFAULT 'NO',
    Drink SET('YES','NO')
		DEFAULT 'NO',
    ItemName VARCHAR(15) NOT NULL,
    PRIMARY KEY(TypeID),
	FOREIGN KEY(ItemID)
		REFERENCES Diabetes(ID)
		ON UPDATE CASCADE
		ON DELETE CASCADE
);
