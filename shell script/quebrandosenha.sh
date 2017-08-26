essid=$(grep "essid" /root/shell-script/captura-01.kismet.netxml | tr "<" ">" | tr ">" "\t" | awk '{print $3}'
)
arquivo="captura-01.cap"
$(aircrack-ng -z -b $essid $arquivo)
