import RPi.GPIO as GPIO
from mfrc522 import SimpleMFRC522
from RPLCD.gpio import CharLCD

GPIO.setmode(GPIO.BOARD)
pins = {'red': 11, 'green': 12, 'buzzer': 13}

reader = SimpleMFRC522()
lcd = CharLCD(cols=16, rows=2, pin_rs=37, pin_e=35, pins_data=[33, 31, 29, 32], numbering_mode=GPIO.BOARD)

for i in pins:
    GPIO.setup(pins[i], GPIO.OUT)
    GPIO.output(pins[i], GPIO.LOW)

lcd.clear()
