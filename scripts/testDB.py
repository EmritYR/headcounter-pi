from psycopg2 import sql
from connection import *

connection, cursor = databaseConnect("qqolorykjuhkzg",
                                     "aaf3efea7997f8b655d1b34dcffd6c3c5664eafdc4fb58591adef8df6b780a15",
                                     "ec2-54-221-195-148.compute-1.amazonaws.com", "5432", "d3bfq4clh09b21")

try:
    # insertStudent(connection, cursor, 816010709, "Bhavesh Digamber")
    # insertStudent(connection, cursor, 815117456, "Emrit Ramharracksingh")
    students = getTableList(connection, cursor, 'student')
    print(students)

    # insertCourse(connection, cursor, 'COMP3613', 'Software Eng 2', None, None)
    courses = getTableList(connection, cursor, 'course')
    print(courses)

    # insertRegistrationList(connection, cursor, 'COMP3613', 815117456)
    registrationList = getTableList(connection, cursor, 'registration_list')
    print(registrationList)

except KeyboardInterrupt or Exception:
    pass
finally:
    shutdownConnection(connection, cursor)
