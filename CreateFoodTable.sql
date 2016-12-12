USE xxxxxxx;

CREATE TABLE Food (
	FoodID INT UNSIGNED NOT NULL,
    FoodName VARCHAR(15),
    ServingSize VARCHAR(10),
    Carbs INT UNSIGNED,
    Protein INT UNSIGNED,
    Vitamins SET('YES','NO')
		DEFAULT 'NO',
    FOREIGN KEY(FoodID)
		REFERENCES TypeEntry(ItemID)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
	PRIMARY KEY(tYPEID)
);
