from psycopg2 import sql
from connection import *

connection, cursor = databaseConnect()

try:
    # insertStudent(connection, cursor, 816010709, "Bhavesh Digamber")
    students = getTableList(connection, cursor, 'student')
    print(students)
except KeyboardInterrupt or Exception:
    pass
finally:
    shutdownConnection(connection, cursor)