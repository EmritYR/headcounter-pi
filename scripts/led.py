#!/usr/bin/env python
LedPin = 3

def initLED(GPIO):
    GPIO.setup(LedPin, GPIO.OUT)  # Set LedPin's mode is output
    GPIO.output(LedPin, GPIO.HIGH)  # Set LedPin high(+3.3V) to off led

def turnOnLED(GPIO):
    GPIO.output(LedPin, GPIO.LOW)

def turnOffLED(GPIO):
    GPIO.output(LedPin, GPIO.HIGH)
