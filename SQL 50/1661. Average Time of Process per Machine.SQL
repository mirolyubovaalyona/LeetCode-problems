select A.machine_id, Round(AVG(B.timestamp-A.timestamp),3) as processing_time
from Activity A 
join Activity B
    on A.machine_id=B.machine_id
    and A.process_id=B.process_id
    and A.activity_type='start'
    and B.activity_type='end'
group by A.machine_id;