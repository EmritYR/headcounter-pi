#!/usr/bin/env python
import RPi.GPIO as GPIO
import os
import sys
import datetime

from rfid import *
from lcd import *
from connection import *

from threading import Thread

GPIO.setmode(GPIO.BOARD)


class ThreadTest():

    def scanCard(self):
        while True:
            id, text = readData()
            insertAttendanceLog(connection, cursor, text, int(sys.argv[1]), datetime.datetime.now())

    def checkFile(self):
        while True:
            if os.path.isfile('/var/www/html/headcounter/scripts/stop_scanning'):
                shutdown()


def shutdown():
    shutdownConnection(connection, cursor)
    GPIO.cleanup()
    os.system('sudo -u root -S rm /var/www/html/headcounter/scripts/stop_scanning')
    exit()


if __name__ == '__main__':
    try:
        connection, cursor = databaseConnect("qqolorykjuhkzg",
                                             "aaf3efea7997f8b655d1b34dcffd6c3c5664eafdc4fb58591adef8df6b780a15",
                                             "ec2-54-221-195-148.compute-1.amazonaws.com", "5432", "d3bfq4clh09b21")

        T1 = Thread(target=ThreadTest().scanCard(), args=())
        T2 = Thread(target=ThreadTest().checkFile(), args=())
        T1.start()
        T2.start()
        T1.join()
        T2.join()
    finally:
        GPIO.cleanup()
