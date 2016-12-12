USE 35001fa16_dacostay;

INSERT INTO TypeEntry (ItemID, ItemName)
	SELECT DISTINCT Diabetes.ID, Diabetes.Name
	FROM Diabetes;