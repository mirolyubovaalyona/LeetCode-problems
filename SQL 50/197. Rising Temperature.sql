SELECT id
FROM ( SELECT id, recordDate, temperature,
    LAG (temperature, 1) OVER (ORDER BY recordDate) AS prev_temperature ,
    LAG(recordDate, 1) OVER (ORDER BY recordDate) AS prev_recordDate
    FROM Weather 
)   
WHERE temperature > prev_temperature 
AND prev_temperature IS NOT NULL
AND prev_recordDate = recordDate - INTERVAL '1' DAY;