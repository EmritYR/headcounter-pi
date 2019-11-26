#!/usr/bin/env python
import RPi.GPIO as GPIO
import os
import sys
import datetime

from rfid import *
from lcd import *
from connection import *

GPIO.setmode(GPIO.BOARD)

if __name__ == '__main__':
    try:
        connection, cursor = databaseConnect("qqolorykjuhkzg",
                                             "aaf3efea7997f8b655d1b34dcffd6c3c5664eafdc4fb58591adef8df6b780a15",
                                             "ec2-54-221-195-148.compute-1.amazonaws.com", "5432", "d3bfq4clh09b21")
        while True:
            if os.path.isfile('/var/www/html/headcounter/scripts/stop_scanning'):
                break
            id, text = readData()
            insertAttendanceLog(connection, cursor, text, int(sys.argv[1]), datetime.datetime.now())
    finally:
        shutdownConnection(connection, cursor)
        GPIO.cleanup()
        os.system('sudo -u root -S rm /var/www/html/headcounter/scripts/stop_scanning')
