
CREATE VIEW MealsIngredientsV AS 
SELECT mi.MealIngId,
mi.MealId,
m.Name,
mi.IngId,
i.IngName,
mi.Status
FROM mealsingredients mi
inner join ingredients i on mi.IngId = i.IngId
inner join meals m on mi.MealId = m.MealId
