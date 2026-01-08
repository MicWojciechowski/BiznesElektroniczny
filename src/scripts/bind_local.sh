#!/bin/bash

# use --vpn flag it there is no VPN connection
if [ "$1" = "--vpn" ]; then
    # provide credentials in /etc/openvpn/vpnWETI.user like:
    # LOGIN
    # PASSWORD (not recommended)
    cd /etc/openvpn/
    sudo openvpn --config vpnWETI.ovpn --auth-user-pass vpnWETI.user --daemon
fi

ssh -L 19779:student-swarm01.maas:19779 rsww@172.20.83.101
