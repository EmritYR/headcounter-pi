import os
while True:
        if os.path.isfile('stop_scanning'):
            break

os.system('sudo -u root -S sudo rm stop_scanning')