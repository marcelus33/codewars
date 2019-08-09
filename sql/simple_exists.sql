/*
    For this challenge you need to create a SELECT statement, this SELECT statement will use an EXISTS to check whether a department has had a sale with a price over 98.00 dollars.

	departments table schema
		id
		name
		sales table schema
		id
	department_id (department foreign key)
		name
		price
		card_name
		card_number
		transaction_date
		resultant table schema
		id
		name

	https://www.codewars.com/kata/58113a64e10b53ec36000293
*/

SELECT departments.id, departments.name
FROM departments
WHERE EXISTS 
  (SELECT * 
    FROM sales 
    WHERE sales.department_id = departments.id AND price > 98.00 )