import psycopg2
from psycopg2 import sql


def databaseConnect():
    try:
        connection = psycopg2.connect(user="qqolorykjuhkzg",
                                      password="aaf3efea7997f8b655d1b34dcffd6c3c5664eafdc4fb58591adef8df6b780a15",
                                      host="ec2-54-221-195-148.compute-1.amazonaws.com",
                                      port="5432",
                                      database="d3bfq4clh09b21")

        cursor = connection.cursor()
        cursor.execute("SELECT version();")
        record = cursor.fetchone()
        print("You are connected to - ", record, "\n")

    except Exception as error:
        print("Error while connecting to PostgreSQL", error)
    finally:
        return connection, cursor


def shutdownConnection(connection, cursor):
    if connection:
        cursor.close()
        connection.close()
        print("PostgreSQL connection is closed")


def insertStudent(connection, cursor, student_id, name):
    try:
        postgres_insert_query = """ INSERT INTO student (student_id, name) VALUES (%s,%s)"""
        record_to_insert = (student_id, name)
        cursor.execute(postgres_insert_query, record_to_insert)
        connection.commit()
    except psycopg2.DatabaseError as error:
        print(error)


def insertCourse(connection, cursor, course_id, name, description, img_url):
    try:
        postgres_insert_query = """ INSERT INTO course (course_id, name, description, img_url) VALUES (%s,%s, %s,%s)"""
        record_to_insert = (course_id, name, description, img_url)
        cursor.execute(postgres_insert_query, record_to_insert)
        connection.commit()
    except psycopg2.DatabaseError as error:
        print(error)


def insertLecturer(connection, cursor, lecturer_id, name, img_url):
    try:
        postgres_insert_query = """ INSERT INTO lecturer (lecturer_id, name, img_url) VALUES (%s,%s,%s)"""
        record_to_insert = (lecturer_id, name, img_url)
        cursor.execute(postgres_insert_query, record_to_insert)
        connection.commit()
    except psycopg2.DatabaseError as error:
        print(error)


def insertRegistrationList(connection, cursor, course_id, student_id):
    try:
        postgres_insert_query = """ INSERT INTO registration_list (course_id, student_id) VALUES (%s,%s)"""
        record_to_insert = (course_id, student_id)
        cursor.execute(postgres_insert_query, record_to_insert)
        connection.commit()
    except psycopg2.DatabaseError as error:
        print(error)


def insertClass(connection, cursor, type, lecturer_id, location, start_time, end_time):
    try:
        postgres_insert_query = """INSERT INTO class (type, lecturer_id, location, start_time, end_time) VALUES (%s,%s,
        %s,%s,%s) """
        record_to_insert = (type, lecturer_id, location, start_time, end_time)
        cursor.execute(postgres_insert_query, record_to_insert)
        connection.commit()
    except psycopg2.DatabaseError as error:
        print(error)


def insertAttendanceLog(connection, cursor, student_id, course_id, lecturer_id, timestamp_date, ):
    try:
        postgres_insert_query = """INSERT INTO attendance_log (student_id, course_id, lecturer_id, timestamp_date, 
        ) VALUES (%s,%s,%s,%s) """
        record_to_insert = (student_id, course_id, lecturer_id, timestamp_date,)
        cursor.execute(postgres_insert_query, record_to_insert)
        connection.commit()
    except psycopg2.DatabaseError as error:
        print(error)


def getTableList(connection, cursor, tableName):
    try:
        cursor.execute(sql.SQL("select * from {}").format(sql.Identifier(tableName)), [10, 20])
        student_record = cursor.fetchall()
        connection.commit()
        return student_record
    except psycopg2.DatabaseError as error:
        print(error)
