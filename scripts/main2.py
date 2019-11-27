#!/usr/bin/env python
import RPi.GPIO as GPIO
import os
import sys
import datetime
import time
from threading import Thread

from rfid import *
from connection import *

def turnOnLED():
    GPIO.output(LedPin, GPIO.LOW)

def turnOffLED():
    GPIO.output(LedPin, GPIO.HIGH)

class ThreadTest():

    def scanCard(self):
        try:
            while True:
                turnOnLED()
                id, text = readData()
                turnOffLED()
                insertAttendanceLog(connection, cursor, text, str(sys.argv[1]), datetime.datetime.now())
                time.sleep(5)
        except KeyboardInterrupt or Exception:
            GPIO.cleanup()

    def checkFile(self):
        try:
            while True:
                if os.path.isfile('/var/www/html/headcounter/scripts/stop_scanning'):
                    shutdown()
                    break
        except KeyboardInterrupt or Exception:
            GPIO.cleanup()


def shutdown():
    shutdownConnection(connection, cursor)
    os.system('sudo -u root -S rm /var/www/html/headcounter/scripts/stop_scanning')
    GPIO.cleanup()


if __name__ == '__main__':
    LedPin = 3

    GPIO.setmode(GPIO.BOARD)
    GPIO.setup(LedPin, GPIO.OUT)
    GPIO.output(LedPin, GPIO.HIGH)

    try:
        connection, cursor = databaseConnect("qqolorykjuhkzg",
                                             "aaf3efea7997f8b655d1b34dcffd6c3c5664eafdc4fb58591adef8df6b780a15",
                                             "ec2-54-221-195-148.compute-1.amazonaws.com", "5432", "d3bfq4clh09b21")

        T1 = Thread(target=ThreadTest().scanCard, args=())
        T2 = Thread(target=ThreadTest().checkFile, args=())
        T1.start()
        T2.start()
        T1.join()
        T2.join()
    except KeyboardInterrupt or Exception:
        pass
    finally:
        GPIO.cleanup()
