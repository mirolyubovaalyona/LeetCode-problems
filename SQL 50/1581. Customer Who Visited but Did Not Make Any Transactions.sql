SELECT Visits.customer_id , COUNT(Visits.customer_id) as count_no_trans 
FROM Visits 
WHERE NOT EXISTS (SELECT * FROM Transactions 
                  WHERE Visits.visit_id  = Transactions.visit_id
                 )
GROUP BY Visits.customer_id;