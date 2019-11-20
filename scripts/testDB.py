from psycopg2 import sql
from connection import *

connection, cursor = databaseConnect()

try:
    insertStudent(connection, cursor, 816010709, "Bhavesh Digamber")
    insertStudent(connection, cursor, 815117456, "Emrit Ramharracksingh")
    students = getTableList(connection, cursor, 'student')
    print(students)

    insertCourse(connection, cursor, 'COMP3613', 'Software Eng 2', None, None)
    courses = getTableList(connection, cursor, 'course')
    print(courses)

except KeyboardInterrupt or Exception:
    pass
finally:
    shutdownConnection(connection, cursor)
