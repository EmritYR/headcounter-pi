from connection import *

connection, cursor = databaseConnect()

try:
    # insertStudent(connection, cursor, 816010709, "Bhavesh Digamber")
    students = getStudentList(connection, cursor)
    print(students)
except KeyboardInterrupt or Exception:
    pass
finally:
    shutdownConnection(connection, cursor)