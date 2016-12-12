USE xxxxxxx;

INSERT INTO TypeEntry (ItemID, ItemName)
	SELECT DISTINCT Diabetes.ID, Diabetes.Name
	FROM Diabetes;
