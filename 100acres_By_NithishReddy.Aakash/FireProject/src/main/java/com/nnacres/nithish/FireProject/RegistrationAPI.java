package com.nnacres.nithish.FireProject;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

public class RegistrationAPI {
	static final String JDBC_DRIVER = "com.mysql.jdbc.Driver";
	static final String DB_URL = "jdbc:mysql://localhost:3306/100acres";
	static final String USER = "root";
	static final String PASS = "reddy";
	public Register insertData(Register r)
	{
		try
		{
		Connection conn = null;
		Statement stmt = null;
		Class.forName("com.mysql.jdbc.Driver");
		conn = DriverManager.getConnection(DB_URL, USER, PASS);
		stmt = conn.createStatement();

		String sql = "insert into UserTable(username,email,password,mobileno) values('"+r.getname()+"','"+r.getemail()+"','"+r.getpwd()+"','"+r.getmobile()+"')";
		stmt.executeUpdate(sql);
		r.setmsg(1);
		return r;
		}
		catch (SQLException e) {
		// TODO Auto-generated catch block
			r.setmsg(2);
		e.printStackTrace();
	} catch (ClassNotFoundException e) {
		// TODO Auto-generated catch block
		e.printStackTrace();
	}  catch(Exception e){
		r.setmsg(3);
		return r;
	}
	return r;
	}
}
