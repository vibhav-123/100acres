package com.acres3.team6.webservice;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.List;
 
public class MySQLconnection{
    public static void main(String[] args) {
 
    }   // creates three different Connection objects
        
  public static String insert(String Name, String Email, int Mobile,String Password) {

		try {
			Class.forName("com.mysql.jdbc.Driver").newInstance();
		} catch (Exception e) {
			System.out.println("fail insert 1");
			System.out.println(e.getMessage());
		}
		try {
			Connection conn=null;
			conn = DriverManager.getConnection(
					"jdbc:mysql://localhost/100_acres", "root", "shivi22");
			
			Statement myst = conn.createStatement();
			String sql = "insert into User" + "(Name,Email,Mobile,Password)"
 					+ "values('" + Name + "', '" + Email + "','" + Mobile + "','"
 					+ Password + "')";

			myst.executeUpdate(sql);
			return "Added";

		} catch (SQLException e) {
			System.out.println("fail insert 2");
			return "failed";
		}
	
  }
}
	

    	

    	

    	

  
 
    
