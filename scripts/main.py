from rfid import *
from lcd import *
from connection import *
import os

if __name__ == '__main__':
    while True:
        if os.path.isfile('/var/www/html/headcounter/scripts/stop_scanning'):
            break

    os.system('sudo -u root -S rm /var/www/html/headcounter/scripts/stop_scanning')
