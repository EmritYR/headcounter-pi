#!/usr/bin/env python
import RPi.GPIO as GPIO
import os
import sys
import datetime
import time
from threading import Thread
from mfrc522 import SimpleMFRC522
from connection import *


if __name__ == '__main__':
    logs = open('logs.txt', 'w')
    GPIO.setmode(GPIO.BOARD)
    reader = SimpleMFRC522()

    GPIO.setup(3, GPIO.OUT)
    GPIO.output(3, GPIO.LOW)

    connection, cursor = databaseConnect("qqolorykjuhkzg",
                                                 "aaf3efea7997f8b655d1b34dcffd6c3c5664eafdc4fb58591adef8df6b780a15",
                                                 "ec2-54-221-195-148.compute-1.amazonaws.com", "5432", "d3bfq4clh09b21")

    while not os.path.isfile('/var/www/html/headcounter/scripts/stop_scanning'):
        try:
            GPIO.output(3, GPIO.LOW)
            print('Reading: ')
            id, text = reader.read()
            logs.write('Read: ' + str(text))
            insertAttendanceLog(connection, cursor, text, sys.argv[1], datetime.datetime.now())
            GPIO.output(3, GPIO.HIGH)
            time.sleep(3)
        finally:
            GPIO.cleanup()
