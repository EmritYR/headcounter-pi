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
    postgres_insert_query = """ INSERT INTO student (student_id, name) VALUES (%s,%s)"""
    record_to_insert = (student_id, name)
    cursor.execute(postgres_insert_query, record_to_insert)
    connection.commit()


def getTableList(connection, cursor, tableName):
    cursor.execute(sql.SQL("select * from {}").format(sql.Identifier(tableName)), [10, 20])
    student_record = cursor.fetchall()
    connection.commit()
    return student_record
