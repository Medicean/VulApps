#!/bin/bash
br="br0"
tap="tap0"
eth="eth0"

if ! [ "$ETH_IP" ]; then
    ETH_IP="$(ifconfig eth0|sed -n '2p'|awk -F ':' '{print $2}'|awk '{print $1}')"
fi

if ! [ "$CISCO_IP" ]; then
    let CHNUM=1+${ETH_IP##*.}
    CISCO_IP="${ETH_IP%.*}.${CHNUM}"
fi

if ! [ "$GATEWAY" ]; then
    GATEWAY="${ETH_IP%.*}.1"
fi

if ! [ "$MEMORY" ]; then
    MEMORY="1024"
fi

ifconfig eth0 down
if [[ $? -ne 0 ]]; then
    echo "Add '--privileged=true' option when running container."
    exit -1
fi

brctl addbr $br
brctl addif $br $eth
brctl stp $br off
brctl setfd $br 1              
brctl sethello $br 1
ifconfig $br 0.0.0.0 promisc up
ifconfig $eth 0.0.0.0 promisc up
ifconfig $br $CISCO_IP netmask 255.255.255.0

route add -net 0.0.0.0 netmask 0.0.0.0 gw $GATEWAY

ifconfig $eth $ETH_IP netmask 255.255.255.0

tunctl -t $tap -u root
brctl addif $br $tap

ifconfig $tap 0.0.0.0 promisc up

qemu-system-i386 -name ASA -m $MEMORY -serial telnet:0.0.0.0:2001,server,nowait -monitor tcp:0.0.0.0:11667,server,nowait -vga none -vnc none -icount auto -hdachs 980,16,32 -hda /opt/asa842/FLASH -initrd /opt/asa842/asa842-initrd.gz -kernel /opt/asa842/asa842-vmlinuz -append "ide_generic.probe_mask=0x01 ide_core.chs=0.0:980,16,32 auto nousb console=ttyS0,9600 bigphysarea=65536 ide1=noprobe no-hlt" -net "nic,model=pcnet" -net "tap,script=no,downscript=no,ifname=tap0" &

python /configure.py $CISCO_IP $GATEWAY

/usr/bin/tail -f /dev/null
