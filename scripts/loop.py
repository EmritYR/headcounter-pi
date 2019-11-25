import os
def scanID():
    while True:
        if os.path.isfile('stop_scanning'):
            break

scanID()
os.system('sudo -u root -S sudo rm stop_scanning')