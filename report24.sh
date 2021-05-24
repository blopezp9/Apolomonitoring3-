#!/bin/bash

ssh apolo './reporte24h.sh'
scp -r blopezp@apolo.eafit.edu.co:/home/blopezp/report24h .
/opt/lampp/bin/mysql -u root -D ApoloMonitoring --prompt="DESCRIBE historieslatest" --init-command="DELETE FROM historieslatest;" -e exit
y=$(awk '{x++}END{print x}' report24h)
for ((i = 1 ; i < $y ; i=i+2)); do
        let a=$i+1
        per=$(awk -v i=$i 'NR == i {print $2}' report24h)
        date=$(awk -v a=$a 'NR == a {print $1}' report24h)
        /opt/lampp/bin/mysql -u root -D ApoloMonitoring --prompt="DESCRIBE historieslatest" --init-command="INSERT INTO historieslatest VALUES ('$per','$date');" -e exit
done

