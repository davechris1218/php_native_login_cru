SELECT name AS country, code, region, basic_unit
FROM countries
FULL JOIN currencies
USING (code)
WHERE region = 'North America' OR region IS NULL
ORDER BY region;

SELECT name AS country, code, region, basic_unit
FROM countries
LEFT JOIN currencies
USING (code)
WHERE region = 'North America' OR region IS NULL
ORDER BY region;

SELECT name AS country, code, region, basic_unit
FROM countries
INNER JOIN currencies
USING (code)
WHERE region = 'North America' OR region IS NULL
ORDER BY region;

SELECT c.code AS country_code, c.name, e.year, inflation_rate
FROM countries AS c
INNER JOIN economies AS e
ON c.code = e.code;

SELECT c.code, c.name, c.region, p.year, p.fertility_rate
FROM countries AS c
INNER JOIN populations AS p
ON c.code = p.country_code;

SELECT c.code, name, region, e.year, fertility_rate, e.unemployment_rate
FROM countries AS c
INNER JOIN populations AS p
ON c.code = p.country_code
INNER JOIN economies AS e
ON c.code = e.code;

SELECT c.code, name, region, e.year, fertility_rate, unemployment_rate
FROM countries AS c
INNER JOIN populations AS p
ON c.code = p.country_code
INNER JOIN economies AS e
ON c.code = e.code AND p.year = e.year;

SELECT p1.country_code, 
       p1.size AS size2010,
       p2.size AS size2015
FROM populations AS p1
INNER JOIN populations AS p2
ON  p1.country_code = p2.country_code;

SELECT p1.country_code, 
       p1.size AS size2010,
       p2.size AS size2015
FROM populations AS p1
INNER JOIN populations AS p2
ON p1.country_code = p2.country_code
    AND p1.year = p2.year - 5;

SELECT p1.country_code, 
       p1.size AS size2010,
       p2.size AS size2015,
       ((p2.size - p1.size)/p1.size * 100.0) AS growth_perc
FROM populations AS p1
INNER JOIN populations AS p2
ON p1.country_code = p2.country_code
    AND p1.year = p2.year - 5;

SELECT cities.name AS city, urbanarea_pop, countries.name AS country,
       indep_year, languages.name AS language, percent
FROM languages
RIGHT JOIN countries
ON countries.code = languages.code
RIGHT JOIN cities
ON cities.country_code = countries.code
ORDER BY city, language;

SELECT c.name AS city, l.name AS language
FROM cities AS c        
CROSS JOIN languages AS 1
WHERE c.name LIKE 'Hyder%';

SELECT c.name AS city, l.name AS language
FROM cities AS c        
INNER JOIN languages AS l
ON c.country_code = l.code
WHERE c.name LIKE 'Hyder%';

SELECT c.name as country, region, p.life_expectancy as life_exp
FROM countries as c
LEFT JOIN populations as p
ON c.code = p.country_code
WHERE p.year = 2010
ORDER BY life_exp
LIMIT 5

