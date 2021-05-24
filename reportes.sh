#!/bin/bash

##ssh apolo './activatereport.sh'
/opt/lampp/bin/mysql -u root -D ApoloMonitoring --prompt="DESCRIBE histories" --init-command="DELETE FROM histories;" -e exit
scp -r blopezp@apolo.eafit.edu.co:/home/blopezp/slurmreport .
y=$(awk '{x++}END{print x}' slurmreport)
for ((i = 1 ; i < $y ; i=i+2)); do
        let a=$i+1
        per=$(awk -v i=$i 'NR == i {print $2}' slurmreport)
        date=$(awk -v a=$a 'NR == a {print $1}' slurmreport)
        /opt/lampp/bin/mysql -u root -D ApoloMonitoring --prompt="DESCRIBE histories" --init-command="INSERT INTO histories VALUES ('$per','$date');" -e exit
done
