from collections import defaultdict 
#!/usr/bin/python
import MySQLdb
import pymysql

# disconnect from server
def cal(product,productList):
    relevant=defaultdict(int)
    f=open("grocery.csv","r")
    counti=0
    fre=0
    sup=.2
    for i in f:
        counti+=1
        if product in i:
           i=i.strip('\n')
           s=i.split(",")
           fre+=1
           for j in s:
               if j in productList :
                   continue
               relevant[j]+=1
    #print(relevant)
    rel=[]
    if fre>0:
        for i in relevant.keys():
            temp=relevant[i]/fre
            if temp>=sup:
                l=[]
                l.append(temp)
                l.append(i)
                rel.append(l)
    rel.sort(key=lambda x: x[0],reverse=True)
    s=""
    for i in rel:
        s+=i[1]+","
    #print(s)
    return s[:-1]
if __name__ == "__main__":
    #product=input()
    pymysql.install_as_MySQLdb()
    # Open database connection
    f=open("suggestion","w")
    fi=open("item","w")
    db = MySQLdb.connect("localhost","root","123456MO","amazon" )
    cursor = db.cursor()
    sql = "SELECT * FROM user_item;"
    try:
        cursor.execute(sql)
        results = cursor.fetchall()
        productList=[]
        for row in results:
            productList.append(row[0])
        for row in results:
            print(row[0])
            s=cal(row[0],productList)
            if len(s)>0:
                f.write(s+"\n")
                fi.write(row[0]+"\n")
          # Now print fetched result
    except:
        print ("Error: unable to fecth data")
    db.close()
    f.close()
    fi.close()
    '''relevant=defaultdict(int)
    f=open("grocery.csv","r")
    counti=0
    fre=0
    sup=.1
    for i in f:
        counti+=1
        if product in i:
           i=i.strip('\n')
           s=i.split(",")
           fre+=1
           for j in s:
               relevant[j]+=1
    print(relevant)
    rel=[]
    if fre>0:
        for i in relevant.keys():
            temp=relevant[i]/fre
            if temp>=sup:
                l=[]
                l.append(temp)
                l.append(i)
                rel.append(l)
    rel.sort(key=lambda x: x[0],reverse=True)
    f=open("suggestion","w")
    for i in rel:
        s=i[1]+"->"+str(i[0])+"\n"
        f.write(s)
    f.close()'''
