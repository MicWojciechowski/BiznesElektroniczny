#!/bin/bash

# use --vpn flag it there is no VPN connection
if [ "$1" = "--vpn" ]; then
    # provide credentials in /etc/openvpn/vpnWETI.user like:
    # LOGIN
    # PASSWORD (not recommended)
    cd /etc/openvpn/
    sudo openvpn --config vpnWETI.ovpn --auth-user-pass vpnWETI.user --daemon
fi

ssh -t -J rsww@172.20.83.101 hdoop@10.40.71.115 "cd /opt/storage/actina15-20/block-storage/students/projects/students-swarm-services/BE_197797 && exec bash"
