USE mealsdb

GO

CREATE VIEW Menu AS 
SELECT m.*, c.Name AS 'CategoryName'
FROM meals m
INNER JOIN meals_category c ON m.Category = c.id
where Status = 1

GO