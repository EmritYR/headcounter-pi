import os, sys

while true:
    if os.path.isfile('/var/www/html/headcounter/scripts/stop_scanning'):
        break

os.system('sudo -u root -S rm /var/www/html/headcounter/scripts/stop_scanning')
