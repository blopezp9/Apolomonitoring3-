#!/bin/bash
##awk 'NR == 2 {print $3 "M"}' resultados00.txt  (Para imprimir memoria ram)
##awk 'NR == 3 {print $3 "M"}' resultados00.txt  (Para imprimir swp)
##awk 'NR == 4 {print $2}' resultados00.txt (Para imprimir porcentaje de CPUs utilizados en el nodo)
rm -rf resultadoscomputes
ssh apolo './EjecutableTrabajosEnEjecucion.sh'
scp -r blopezp@apolo.eafit.edu.co:/home/blopezp/resultadoscomputes .

/opt/lampp/bin/mysql -u root -D ApoloMonitoring --prompt="DESCRIBE dasboards" --init-command="DELETE FROM dasboards;" -e exit
/opt/lampp/bin/mysql -u root -D ApoloMonitoring --prompt="DESCRIBE capacitys" --init-command="DELETE FROM capacitys;" -e exit
x=1
y=$(grep -c compute resultadoscomputes/TrabajosEnEejecucion)

for ((i = 2 ; i < $y+2 ; i++)); do
	jobid=$(awk -v i=$i 'NR == i {print $1}' resultadoscomputes/TrabajosEnEejecucion)	
	user=$(awk -v i=$i 'NR == i {print $2}' resultadoscomputes/TrabajosEnEejecucion)
	name=$(awk -v i=$i 'NR == i {print $3}' resultadoscomputes/TrabajosEnEejecucion)
	state=$(awk -v i=$i 'NR == i {print $4}' resultadoscomputes/TrabajosEnEejecucion)
	n_node=$(awk -v i=$i 'NR == i {print $5}' resultadoscomputes/TrabajosEnEejecucion)
	nodelist=$(awk -v i=$i 'NR == i {print $6}' resultadoscomputes/TrabajosEnEejecucion)
	cpus=$(awk -v i=$i 'NR == i {print $7}' resultadoscomputes/TrabajosEnEejecucion)
	/opt/lampp/bin/mysql -u root -D ApoloMonitoring --prompt="DESCRIBE dasboards" --init-command="INSERT INTO dasboards VALUES ('$i','$jobid','$user','$name','$state','$n_node','$nodelist','$cpus');" -e exit


	echo $i
done

if (($(find . -iname "resultados00.txt" | wc -l)>'0'));
then
    per_cpu=$(awk 'NR == 4 {print $8}' resultadoscomputes/resultados00.txt)
    ram=$(awk 'NR == 2 {print $3}' resultadoscomputes/resultados00.txt)
    swp=$(awk 'NR == 3 {print $3}' resultadoscomputes/resultados00.txt)
    /opt/lampp/bin/mysql -u root -D ApoloMonitoring --prompt="DESCRIBE capacitys" --init-command="INSERT INTO capacitys VALUES ('compute-0-0','$per_cpu','$ram','$swp');" -e exit
fi

if (($(find . -iname "resultados01.txt" | wc -l)>'0'));
then
    per_cpu=$(awk 'NR == 4 {print $8}' resultadoscomputes/resultados01.txt)
    ram=$(awk 'NR == 2 {print $3}' resultadoscomputes/resultados01.txt)
    swp=$(awk 'NR == 3 {print $3}' resultadoscomputes/resultados01.txt)
    /opt/lampp/bin/mysql -u root -D ApoloMonitoring --prompt="DESCRIBE capacitys" --init-command="INSERT INTO capacitys VALUES ('compute-0-1','$per_cpu','$ram','$swp');" -e exit
fi

if (($(find . -iname "resultados02.txt" | wc -l)>'0'));
then
    per_cpu=$(awk 'NR == 4 {print $8}' resultadoscomputes/resultados02.txt)
    ram=$(awk 'NR == 2 {print $3}' resultadoscomputes/resultados02.txt)
    swp=$(awk 'NR == 3 {print $3}' resultadoscomputes/resultados02.txt)
    /opt/lampp/bin/mysql -u root -D ApoloMonitoring --prompt="DESCRIBE capacitys" --init-command="INSERT INTO capacitys VALUES ('compute-0-2','$per_cpu','$ram','$swp');" -e exit
fi

if (($(find . -iname "resultados03.txt" | wc -l)>'0'));
then
    per_cpu=$(awk 'NR == 4 {print $8}' resultadoscomputes/resultados03.txt)
    ram=$(awk 'NR == 2 {print $3}' resultadoscomputes/resultados03.txt)
    swp=$(awk 'NR == 3 {print $3}' resultadoscomputes/resultados03.txt)
    /opt/lampp/bin/mysql -u root -D ApoloMonitoring --prompt="DESCRIBE capacitys" --init-command="INSERT INTO capacitys VALUES ('compute-0-3','$per_cpu','$ram','$swp');" -e exit
fi

if (($(find . -iname "resultados04.txt" | wc -l)>'0'));
then
    per_cpu=$(awk 'NR == 4 {print $8}' resultadoscomputes/resultados04.txt)
    ram=$(awk 'NR == 2 {print $3}' resultadoscomputes/resultados04.txt)
    swp=$(awk 'NR == 3 {print $3}' resultadoscomputes/resultados04.txt)
    /opt/lampp/bin/mysql -u root -D ApoloMonitoring --prompt="DESCRIBE capacitys" --init-command="INSERT INTO capacitys VALUES ('compute-0-4','$per_cpu','$ram','$swp');" -e exit
fi

if (($(find . -iname "resultados05.txt" | wc -l)>'0'));
then
    per_cpu=$(awk 'NR == 4 {print $8}' resultadoscomputes/resultados05.txt)
    ram=$(awk 'NR == 2 {print $3}' resultadoscomputes/resultados05.txt)
    swp=$(awk 'NR == 3 {print $3}' resultadoscomputes/resultados05.txt)
    /opt/lampp/bin/mysql -u root -D ApoloMonitoring --prompt="DESCRIBE capacitys" --init-command="INSERT INTO capacitys VALUES ('compute-0-5','$per_cpu','$ram','$swp');" -e exit
fi

if (($(find . -iname "resultados06.txt" | wc -l)>'0'));
then
    per_cpu=$(awk 'NR == 4 {print $8}' resultadoscomputes/resultados06.txt)
    ram=$(awk 'NR == 2 {print $3}' resultadoscomputes/resultados06.txt)
    swp=$(awk 'NR == 3 {print $3}' resultadoscomputes/resultados06.txt)
    /opt/lampp/bin/mysql -u root -D ApoloMonitoring --prompt="DESCRIBE capacitys" --init-command="INSERT INTO capacitys VALUES ('compute-0-6','$per_cpu','$ram','$swp');" -e exit
fi

if (($(find . -iname "resultados07.txt" | wc -l)>'0'));
then
    per_cpu=$(awk 'NR == 4 {print $8}' resultadoscomputes/resultados07.txt)
    ram=$(awk 'NR == 2 {print $3}' resultadoscomputes/resultados07.txt)
    swp=$(awk 'NR == 3 {print $3}' resultadoscomputes/resultados07.txt)
    /opt/lampp/bin/mysql -u root -D ApoloMonitoring --prompt="DESCRIBE capacitys" --init-command="INSERT INTO capacitys VALUES ('compute-0-7','$per_cpu','$ram','$swp');" -e exit
fi

if (($(find . -iname "resultados08.txt" | wc -l)>'0'));
then
    per_cpu=$(awk 'NR == 4 {print $8}' resultadoscomputes/resultados08.txt)
    ram=$(awk 'NR == 2 {print $3}' resultadoscomputes/resultados08.txt)
    swp=$(awk 'NR == 3 {print $3}' resultadoscomputes/resultados08.txt)
    /opt/lampp/bin/mysql -u root -D ApoloMonitoring --prompt="DESCRIBE capacitys" --init-command="INSERT INTO capacitys VALUES ('compute-0-8','$per_cpu','$ram','$swp');" -e exit
fi

if (($(find . -iname "resultados09.txt" | wc -l)>'0'));
then
    per_cpu=$(awk 'NR == 4 {print $8}' resultadoscomputes/resultados09.txt)
    ram=$(awk 'NR == 2 {print $3}' resultadoscomputes/resultados09.txt)
    swp=$(awk 'NR == 3 {print $3}' resultadoscomputes/resultados09.txt)
    /opt/lampp/bin/mysql -u root -D ApoloMonitoring --prompt="DESCRIBE capacitys" --init-command="INSERT INTO capacitys VALUES ('compute-0-9','$per_cpu','$ram','$swp');" -e exit
fi

if (($(find . -iname "resultados10.txt" | wc -l)>'0'));
then
    per_cpu=$(awk 'NR == 4 {print $8}' resultadoscomputes/resultados10.txt)
    ram=$(awk 'NR == 2 {print $3}' resultadoscomputes/resultados10.txt)
    swp=$(awk 'NR == 3 {print $3}' resultadoscomputes/resultados10.txt)
    /opt/lampp/bin/mysql -u root -D ApoloMonitoring --prompt="DESCRIBE capacitys" --init-command="INSERT INTO capacitys VALUES ('compute-0-10','$per_cpu','$ram','$swp');" -e exit
fi

if (($(find . -iname "resultados11.txt" | wc -l)>'0'));
then
    per_cpu=$(awk 'NR == 4 {print $8}' resultadoscomputes/resultados11.txt)
    ram=$(awk 'NR == 2 {print $3}' resultadoscomputes/resultados11.txt)
    swp=$(awk 'NR == 3 {print $3}' resultadoscomputes/resultados11.txt)
    /opt/lampp/bin/mysql -u root -D ApoloMonitoring --prompt="DESCRIBE capacitys" --init-command="INSERT INTO capacitys VALUES ('compute-0-11','$per_cpu','$ram','$swp');" -e exit
fi

if (($(find . -iname "resultados12.txt" | wc -l)>'0'));
then
    per_cpu=$(awk 'NR == 4 {print $8}' resultadoscomputes/resultados12.txt)
    ram=$(awk 'NR == 2 {print $3}' resultadoscomputes/resultados12.txt)
    swp=$(awk 'NR == 3 {print $3}' resultadoscomputes/resultados12.txt)
    /opt/lampp/bin/mysql -u root -D ApoloMonitoring --prompt="DESCRIBE capacitys" --init-command="INSERT INTO capacitys VALUES ('compute-0-12','$per_cpu','$ram','$swp');" -e exit
fi

if (($(find . -iname "resultados13.txt" | wc -l)>'0'));
then
    per_cpu=$(awk 'NR == 4 {print $8}' resultadoscomputes/resultados13.txt)
    ram=$(awk 'NR == 2 {print $3}' resultadoscomputes/resultados13.txt)
    swp=$(awk 'NR == 3 {print $3}' resultadoscomputes/resultados13.txt)
    /opt/lampp/bin/mysql -u root -D ApoloMonitoring --prompt="DESCRIBE capacitys" --init-command="INSERT INTO capacitys VALUES ('compute-0-13','$per_cpu','$ram','$swp');" -e exit
fi

if (($(find . -iname "resultados14.txt" | wc -l)>'0'));
then
    per_cpu=$(awk 'NR == 4 {print $8}' resultadoscomputes/resultados14.txt)
    ram=$(awk 'NR == 2 {print $3}' resultadoscomputes/resultados14.txt)
    swp=$(awk 'NR == 3 {print $3}' resultadoscomputes/resultados14.txt)
    /opt/lampp/bin/mysql -u root -D ApoloMonitoring --prompt="DESCRIBE capacitys" --init-command="INSERT INTO capacitys VALUES ('compute-0-14','$per_cpu','$ram','$swp');" -e exit
fi

