USE mealsdb

GO

CREATE VIEW Menu AS 
SELECT * FROM mealsdb.meals where Status = 1

GO