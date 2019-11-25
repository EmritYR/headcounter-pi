import os, sys

while True:
    print("Hello")
    if os.path.isfile('stop_scanning'):
        break

os.system('sudo -u root -S rm stop_scanning')
