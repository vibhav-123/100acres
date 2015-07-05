package com.acres3.team6.webservice;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.List;
 
public class MySQLconnection2{
    public static void main(String[] args) {
 
    }   // creates three different Connection objects
        
  public static String insert(int id, String owner_type, String intention,String city,String address,String bedroom,long expected_price, String imagepath ,int User_id) {

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
			String sql = "insert into property" + "(owner_type,intention,city,address,bedroom,expected_price,imagepath,User_id)"
 					+ "values('" + owner_type + "','" + intention + "','"
 					+ city + "','" + address + "','" + bedroom + "','" + expected_price + "','" + imagepath + "','" + User_id + "')";

			myst.executeUpdate(sql);
			return "Property posted successfully";

		} catch (SQLException e) {
			System.out.println("fail insert 2");
			System.out.println(e.getMessage());
			return "Sorry!! Try again";
		}
	
  }
}
	

    	

    	

    	

  
 
    
