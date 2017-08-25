interface=$(iwconfig mon0 | sed "1! d" | awk '{print $1}')
tecnologia=$(iwconfig mon0 | sed "1! d" | awk '{print $3}')
modop=$(iwconfig mon0 | sed "1! d" | awk '{print $4}')
potencia=$(iwconfig mon0 | sed "1! d" | awk '{print $5}')

echo "{
"\"Interface\"": "\"$interface\"",
"\"Tecnologia\"": "\"$tecnologia\"",
"\"Modo de Operação\"": "\"$modop\""
"\"Potência dB\"": "\"$potencia\""
}"
