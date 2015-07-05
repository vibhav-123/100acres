package com.nnacres.jyoti.api;

//STEP 1. Import required packages
import java.sql.*;

import javax.ws.rs.core.Cookie;

public class service1 {
	

//JDBC driver name and database URL
static final String JDBC_DRIVER = "com.mysql.jdbc.Driver";  
static final String DB_URL = "jdbc:mysql://172.16.3.185/100acres";

//Database credentials
static final String USER = "localuser";
static final String PASS = "Km7Iv80l";

public static Message show(Message messages) {
Connection conn = null;
Message msg=new Message();
Statement stmt = null;
String resultr="";
try{
//STEP 2: Register JDBC driver
Class.forName("com.mysql.jdbc.Driver");

//STEP 3: Open a connection
//System.out.println("Connecting to database...");
conn = DriverManager.getConnection(DB_URL,USER,PASS);

//STEP 4: Execute a query
//System.out.println("Creating statement...");
stmt = conn.createStatement();
String sql;
sql = "SELECT *  FROM register where email='"+messages.getemail()+"'"+"AND password='"+messages.getpwd()+"';";

ResultSet rs = stmt.executeQuery(sql);
//STEP 5: Extract data from result set
if(rs.next()){
   //Retrieve by column name
    msg.setname(rs.getString("name"));
    msg.setemail(rs.getString("email"));
    msg.setmobile(rs.getString("mobileno"));
   // msg.setpwd(rs.getString("password"));
    msg.seterr("Found values");
    msg.setmsg(1);
}
else
{
	msg.seterr("Not found values");;
}
//STEP 6: Clean-up environment
rs.close();
stmt.close();
conn.close();
}catch(SQLException se){
//Handle errors for JDBC
se.printStackTrace();
}catch(Exception e){
//Handle errors for Class.forName
e.printStackTrace();
}finally{
//finally block used to close resources
try{
   if(stmt!=null)
      stmt.close();
}catch(SQLException se2){
}// nothing we can do
try{
   if(conn!=null)
      conn.close();
}catch(SQLException se){
   se.printStackTrace();
}//end finally try
}//end try
//System.out.println("Goodbye!");
	return msg;
}

public static Message postData(Message messages){//int temp1,int temp2) {
Connection conn = null;
Statement stmt = null;
try{
//STEP 2: Register JDBC driver
Class.forName("com.mysql.jdbc.Driver");

//STEP 3: Open a connection
//System.out.println("Connecting to database...");
conn = DriverManager.getConnection(DB_URL,USER,PASS);

//STEP 4: Execute a query
//System.out.println("Creating statement...");
stmt = conn.createStatement();
String sql;
sql = "INSERT into register values('"+messages.getname()+"','"+messages.getemail()+"','"+messages.getpwd()+"','"+messages.getmobile()+"');";
stmt.executeUpdate(sql);
stmt.close();
conn.close();
messages.seterr("Successfully inserted");
messages.setmsg(1);


}catch(Exception e){
//Handle errors for Class.forName
e.printStackTrace();
messages.seterr("unable to insert");
messages.setmsg(0);
}
return messages;
}
}	