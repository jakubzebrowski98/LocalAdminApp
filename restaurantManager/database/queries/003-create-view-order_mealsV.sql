
Create view order_mealsV as
SELECT o.*, m.Name
FROM order_meals o inner join meals m on o.MealId = m.MealId