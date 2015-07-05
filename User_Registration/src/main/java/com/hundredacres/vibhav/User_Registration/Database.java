package com.hundredacres.vibhav.User_Registration;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;


public class Database {
	
	private static Connection conn=null;
	public Database(){
		try {
			Class.forName("com.mysql.jdbc.Driver").newInstance();
		} catch (Exception e) {
			System.out.println("fail insert 1");
		}
		try {
			String dbUrl = "jdbc:mysql://localhost:3306/100_acres";
			String userName = "root", password = "shivi22";
			conn = DriverManager.getConnection(
					dbUrl, userName, password);
		}catch (SQLException e) {
			System.out.println("Connection failed");
		}
	}	
		
	public String insert(User user){
		
			try{
				if(conn!=null)
					System.out.println("conn created");
				Statement myst = conn.createStatement();
				int rowcount=0;
				ResultSet rs = myst.executeQuery("select * from User where Email=" + "'"+user.getEmail()+"'");
				if(rs.last())
					rowcount=rs.getRow();
				if(rowcount>0){
					System.out.println("Email already exists\r\n");
					return "Email already exists";
				}
				//ResultSet rs = myst.executeQuery("select * from message");
				Long mobile=user.getMobile();
				String sql = "insert into User" + "(Name,Email,Mobile,Password)"
						+ "values('" + user.getName() + "', '" + user.getEmail() + "','" + mobile.toString() + "','"
						+ user.getPassword() + "')";
				System.out.println("Reached here");	
				myst.executeUpdate(sql);
				System.out.println("Reached here2");
				return "Added";
			
			}catch(SQLException e){
				System.out.println(e.getMessage());
				return "Failed";
			}
	}	
			
	public String loginuser(User user){
		try{
			if(conn!=null)
				System.out.println("conn created");
			Statement myst = conn.createStatement();
	
			String query="select User_id from User where Email=" + "'"+user.getEmail()+"'" + " and Password=" + 
			"'"+ user.getPassword()+"'";
			ResultSet rs = myst.executeQuery(query);
			int rowcount = 0;
			if (rs.last()) {
			  rowcount = rs.getRow();
			}
			//ArrayList<String> result=new ArrayList<String>();
			if(rowcount==1){
				rs.first(); 
				System.out.println("User exists");
				//result.add(rs.getString("Name"));
				//result.add(rs.getString("Email"));
				return rs.getString("User_id");
				
			}	
			else{
				System.out.println("User doesn't exists");
				//result.add("User doesn't exist");
				return "User doesn't exist";
			}
		
		}catch(SQLException e){
			//ArrayList<String> result=new ArrayList<String>();
			System.out.println(e.getMessage());
			//result.add("Query Failed");
			return "Query Failed";
		}
		
	}
	
	public String login(User user){
		try{
			if(conn!=null)
				System.out.println("conn created");
			Statement myst = conn.createStatement();
	
			String query="select Name from User where Email=" + "'"+user.getEmail()+"'" + " and Password=" + 
			"'"+ user.getPassword()+"'";
			ResultSet rs = myst.executeQuery(query);
			int rowcount = 0;
			if (rs.last()) {
			  rowcount = rs.getRow();
			}
			//ArrayList<String> result=new ArrayList<String>();
			if(rowcount==1){
				rs.first(); 
				System.out.println("User exists");
				//result.add(rs.getString("Name"));
				//result.add(rs.getString("Email"));
				return rs.getString("Name");
				
			}	
			else{
				System.out.println("User doesn't exists");
				//result.add("User doesn't exist");
				return "User doesn't exist";
			}
		
		}catch(SQLException e){
			//ArrayList<String> result=new ArrayList<String>();
			System.out.println(e.getMessage());
			//result.add("Query Failed");
			return "Query Failed";
		}
		
	}
	
}