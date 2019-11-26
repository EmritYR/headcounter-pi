#!/usr/bin/env python
from mfrc522 import SimpleMFRC522


def writeData(data):
    reader = SimpleMFRC522()
    reader.write(data)


def readData():
    reader = SimpleMFRC522()
    id, text = reader.read()
    return id, text
