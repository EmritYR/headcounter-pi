import RPi.GPIO as GPIO
from RPLCD.gpio import CharLCD
import time

GPIO.setmode(GPIO.BOARD)
lcd = CharLCD(cols=16, rows=2, pin_rs=37, pin_e=35, pins_data=[33, 31, 29, 32], numbering_mode=GPIO.BOARD)
lcd.clear()

def lcdPrint(message):
    message.encode('ascii', 'utf-8')
    lcd.clear()
    lcd.write_string(message)
    time.sleep(1)
