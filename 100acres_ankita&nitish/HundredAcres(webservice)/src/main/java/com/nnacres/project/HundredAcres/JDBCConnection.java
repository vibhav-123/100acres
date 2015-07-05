package com.nnacres.project.HundredAcres;


import java.sql.*;
public class JDBCConnection {
	private static JDBCConnection con=new JDBCConnection();
	public static final String URL="jdbc:mysql://localhost/hunacres";
	public static final String USER="root";
	public static final String PASSWORD="ankita1994";
	public static final String DRIVER_CLASS="com.mysql.jdbc.Driver";
	
	private JDBCConnection(){
		try{
			Class.forName("com.mysql.jdbc.Driver");
		}catch(ClassNotFoundException e){
		e.printStackTrace();
		}
	}
	private Connection createConnection(){
		Connection con=null;
		try{
			con=DriverManager.getConnection(URL, USER, PASSWORD);
		}catch(SQLException e){
			e.printStackTrace();
		}
		return con;
	}
	
	public static Connection getConnection(){
		return con.createConnection();
	}
}
