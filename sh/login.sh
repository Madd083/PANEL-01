#!/bin/sh
user=$username
rp=$password
spd="123456"
mysql -hlocalhost -uroot -p$spd -e "use ov;SELECT pass FROM openvpn WHERE iuser='$user';">>log.txt
mysql -hlocalhost -uroot -p$spd -e "use ov;SELECT irecv FROM openvpn WHERE iuser='$user';">>log.txt
mysql -hlocalhost -uroot -p$spd -e "use ov;SELECT isent FROM openvpn WHERE iuser='$user';">>log.txt
mysql -hlocalhost -uroot -p$spd -e "use ov;SELECT maxll FROM openvpn WHERE iuser='$user';">>log.txt
mysql -hlocalhost -uroot -p$spd -e "use ov;SELECT i FROM openvpn WHERE iuser='$user';">>log.txt
pass=$(sed -n 2p log.txt)
recv=$(sed -n 4p log.txt)
sent=$(sed -n 6p log.txt)
all=$(sed -n 8p log.txt)
i=$(sed -n 10p log.txt)
rm -rf log.txt
if [ "$rp" == "$pass" ] && [ "$i" == "1" ] && [ "$[$recv+$sent]" -lt "$all" ];
then
echo $(date +%Y��%m��%d��%kʱ%M��) "�û���¼�ɹ�" "�˺�:"${username} "����:"${password}>>/home/wwwroot/default/res/login.log
exit 0
else
echo $(date +%Y��%m��%d��%kʱ%M��) "�û���¼ʧ��" "�˺�:"${username} "����:"${password}>>/home/wwwroot/default/res/login.log
exit 1
fi