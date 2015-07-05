package com.nnacres.jyoti.api;

//STEP 1. Import required packages
import java.sql.*;

public class service2 {
	

//JDBC driver name and database URL
static final String JDBC_DRIVER = "com.mysql.jdbc.Driver";  
static final String DB_URL = "jdbc:mysql://localhost/web";

//Database credentials
static final String USER = "root";
static final String PASS = "jyotidgr8";

public static String get(int temp) {
Connection conn = null;
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
sql = "SELECT title,descr  FROM product where pid="+temp;
ResultSet rs = stmt.executeQuery(sql);

//STEP 5: Extract data from result set
if(rs.next()){
   //Retrieve by column name
   String title  = rs.getString("title");
   String descrip = rs.getString("descr");

   
   //Display values
  // System.out.print("ID: " + id);
   System.out.print(", title: " + title);
   
   resultr+=temp+" --> "+title+"--"+descrip;
}
else
	resultr+="No record found";
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
return resultr;

}//end main
}