import pymysql
import pandas as pd
import pickle


connection=pymysql.connect(host="localhost", user="root", passwd="", database="hdps")
cursor=connection.cursor()

te="SELECT *from addtdata where target=2;"

df=pd.read_sql(te, connection)

idd=df['id']

df=df.drop(['target','id','username'], axis=1)

model = pickle.load(open("model.pkl","rb"))
temp=model.predict(df)


for i in range(len(temp)):
    updatesql="UPDATE addtdata SET target= '" +str(temp[i])+"' WHERE id= '"+str(idd[i]) +"'"
    cursor.execute(updatesql)

connection.commit()
connection.close()
  
