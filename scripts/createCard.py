from rfid import *

if __name__ == '__main__':
    writeData(input("Enter Data: "))
    id, text = readData()
    print(id)
    print(text)
