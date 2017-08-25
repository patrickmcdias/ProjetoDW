usb=$(lsusb | grep "802.11"| awk '{print $3}')
id=$(lsusb | grep "802.11"| awk '{print $4}')
adaptador=$(lsusb | grep "802.11"| awk '{print $7}')
tecnologia=$(lsusb | grep "802.11"| awk '{print $11}')

echo "{
"\"$usb\"": "\"$id\"",
"\"Adaptador\"": "\"$adaptador\"",
"\"Tecnologia\"": "\"$tecnologia\""
}"


