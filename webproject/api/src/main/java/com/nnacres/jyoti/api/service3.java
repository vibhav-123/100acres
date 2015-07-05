package com.nnacres.jyoti.api;
//STEP 1. Import required packages
import java.sql.*;

public class service3 {
	

//JDBC driver name and database URL
static final String JDBC_DRIVER = "com.mysql.jdbc.Driver";  
static final String DB_URL = "jdbc:mysql://localhost/ws";

//Database credentials
static final String USER = "root";
static final String PASS = "ashraf";

public static String post1(int temp,int temp2) {
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
// sql = "SELECT title,description  FROM pdtable where id="+temp;
sql="insert into cart(cid,pid) values("+temp+","+temp2+")";
stmt.executeUpdate(sql); 
resultr="success - " + temp;
stmt.close();
conn.close();
}catch(Exception e){
//Handle errors for Class.forName
e.printStackTrace();
resultr="Unable to add to cart";
}
//System.out.println("Goodbye!");

return resultr;

}//end main


public static String post2(int temp) {
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
sql = "SELECT max(cid)  FROM cart";
ResultSet rs = stmt.executeQuery(sql);

//STEP 5: Extract data from result set
while(rs.next()){
   //Retrieve by column name
   int cid  = rs.getInt("max(cid)");
   cid++;
   
   String sql1="insert into cart(cid,pid) values("+cid+","+temp+")";
   int rs1 = stmt.executeUpdate(sql1); 
   //Display values
  // System.out.print("ID: " + id);
  // System.out.print(", title: " + title);
   
   resultr="success cartid - "+cid;
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
resultr="Unable to add to cart";
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
}//end FirstExample
