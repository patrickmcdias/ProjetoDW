essid=$(grep "essid" /root/shell-script/captura-01.kismet.netxml | tr "<" ">" | tr ">" "\t" | awk '{print $3}'
)
encryption=$(grep "encryption" /root/shell-script/captura-01.kismet.netxml | tr "<" ">" | tr ">" "\t" | awk '{print $2}'
)
bssid=$(grep "BSSID" /root/shell-script/captura-01.kismet.netxml | tr "<" ">" | tr ">" "\t" | awk '{print $2}'
)
channel=$(grep "channel" /root/shell-script/captura-01.kismet.netxml | sed "1! d" | tr "<" ">" | tr ">" "\t" | awk '{print $2}')

clientmac=$(grep "client-mac" /root/shell-script/captura-01.kismet.netxml | sed "1! d" | tr "<" ">" | tr ">" "\t" | awk '{print $2}')

echo "{
"\"essid\"": "\"$essid\"",
"\"encryption\"": "\"$encryption\"",
"\"bssid\"": "\"$bssid\"",
"\"channel\"": "\"$channel\"",
"\"client-mac\"": "\"$clientmac\""
}"

