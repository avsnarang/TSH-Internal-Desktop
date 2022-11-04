import mysql.connector
import webbrowser

from mysql.connector import Error 
try: 
     connection = mysql.connector.connect(host='localhost', database='u950483018_auth_verify', user='u950483018_scholars', password='Scholars123')

     if connection.is_connected():
          db_Info = connection.get_server_info()
          print("Connected to MySQL Server version ", db_Info)
          cursor = connection.cursor()
          cursor.execute("select database();")
          record = cursor.fetchone()
          print("You're connected to database: ", record)

except Error as e:
     print("Error while connecting to MySQL", e)
finally:
     if connection.is_connected():
          cursor.close()
          connection.close()
          print("MySQL connection is closed")
          
webbrowser.open('https://tsh.edu.in/adminOffice/head/excel-output/output.php')
