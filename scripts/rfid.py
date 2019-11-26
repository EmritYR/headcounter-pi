#!/usr/bin/env python
import RPi.GPIO as GPIO
from mfrc522 import SimpleMFRC522

GPIO.setmode(GPIO.BOARD)
GPIO.setwarnings(False)


def writeData(data):
    reader = SimpleMFRC522()
    try:
        reader.write(data)
    finally:
        GPIO.cleanup()


def readData():
    reader = SimpleMFRC522()
    try:
        id, text = reader.read()
        return id, text
    finally:
        GPIO.cleanup()
