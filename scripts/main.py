from rfid import *
from lcd import *
from connection import *

if __name__ == '__main__':
    writeData(input("Enter Data: "))
    id, text = readData()
    print(id)
    print(text)


