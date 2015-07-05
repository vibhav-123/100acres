package com.nnacres.dheeraj.register;


import java.sql.*;
import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.Random;


public class testingSQL
{
	static private Connection conn;
	testingSQL()
	{
		  String url = "jdbc:mysql://localhost:3306/";
		  String dbName = "100acres";
		  String driver = "com.mysql.jdbc.Driver";
		  String userName = "root"; 
		  String password = "jaju89dh";
		  try {
			  Class.forName(driver).newInstance();
			  conn = DriverManager.getConnection(url+dbName,userName,password);
		  }
		  catch (Exception e) {
			  e.printStackTrace();
		  }
	}
	
	//
	public String checkReg(User uHandler)
	{
		 
		  Statement stmt;
		  String result="";
		  try {
			  stmt = conn.createStatement();
			  String email=uHandler.getEmail();
			  String username=uHandler.getUsername();
			  ResultSet rse,rsu;
			  rse = stmt.executeQuery("Select * from USER where email='"+email+"'");
			  if(rse.next())
			  {	
				  result="e";
			  }
			  rsu=stmt.executeQuery("Select * from USER where username='"+username+"'");
			  if(rsu.next())
			  {	
				result=result+"u";
			  }
		  	}
		  	catch (SQLException e) {
				e.printStackTrace();
		  	}
		  	return result;
	}
	
	//To register new user
	public String registerUser(User information)
	{
		Statement stmt;
		
		  try {
			stmt = conn.createStatement();
			String stamp="";
			DateFormat dateFormat = new SimpleDateFormat("yyyy-MM-dd HH:mm:ss");
			Date date = new Date();
			stamp=dateFormat.format(date);
			int res=stmt.executeUpdate("Insert into USER (username,name,email,password,status,created_on) values('"+information.getUsername()+"','"+information.getName()+"','"+information.getEmail()+"','"+information.getPassword()+"','nv','"+stamp+"')");
			if(res>0)
				return "Account created!!";
			
		}
		  catch(SQLException e){
			  e.printStackTrace();
		  }
		  return "OOPS:  Error:unable to create account";
	}

	//To Login User
	public User loginUser(User uHandler) {
		// TODO Auto-generated method stub
		  Statement stmt;
		  User result=new User();
		  result.setEmail("0");
		  result.setError("nothing");
		  try {
			  stmt = conn.createStatement();
			  String paswd=uHandler.getPassword();
			  String username=uHandler.getUsername();
			  ResultSet rsu;
			  rsu = stmt.executeQuery("Select * from USER where (username='"+username+"' or email='"+username+"') and password='"+paswd+"'");
			  if(rsu.next())
			  { 	
				  if(rsu.getString("status").equals("v")){
					  result.setUid(rsu.getInt("uid"));
					  result.setName(rsu.getString("name"));
					  result.setUsername(rsu.getString("username"));
					  result.setEmail(rsu.getString("email"));
					  result.setError("verified");
				  }else if(rsu.getString("status").equals("nv")){
					  result.setUid(rsu.getInt("uid"));
					  result.setName(rsu.getString("name"));
					  result.setUsername(rsu.getString("username"));
					  result.setEmail(rsu.getString("email"));
					  result.setError("not verified");
				  }else{
					  result.setError("status error");  
				  }
			  }else{
				  result.setError("not found");
			  }
		  }
			
		  catch(SQLException e){
			  e.printStackTrace();
			  result.setError("exception");
		  }
		  return result;
	}

	//To verify registere user
	public String verifyUser(User user) {
		// TODO Auto-generated method stub
		  Statement stmt;
		  String result="nothing";
		  try {
			  stmt = conn.createStatement();
			  String email=user.getEmail();
			  ResultSet rse;
			  rse = stmt.executeQuery("Select * from USER where email='"+email+"'");
			  if(rse.next())
			  {		
				  	result="exist";
				  	int rsi=stmt.executeUpdate("update USER set status='v' where email='"+email+"'");
				  	if(rsi>0){
				  		result="Your email has been confirmed succesfully .... Kindly login to http://www.100acres.com";
				  	}else{
				  		result="updation error please verify again";
				  	}
			  }else{
				  result="email not exists";
			  }
			 
		  	}
		  	catch (SQLException e) {
				e.printStackTrace();
				result="exception in email verification kindly verify again";
		  	}
		  	return result;
	}

	//To set new password if user clicks forgot password
	public User getPassword(User user) {
		// TODO Auto-generated method stub
		Statement stmt;
		  User result=new User();
		  result.setError("not found");
		  try {
			  stmt = conn.createStatement();
			  String username=user.getUsername();
			  ResultSet rse;
			  Random ran=new Random();
			  int newPass=89898989+ran.nextInt(89898989);
			  String newPassString=String.valueOf(newPass);
			  rse = stmt.executeQuery("Select * from USER where username='"+username+"'");
			  if(rse.next())
			  {	
				  result.setEmail(rse.getString("email"));
				  result.setPassword(newPassString);
				  result.setError("found");
				  int rsu=stmt.executeUpdate("update USER set password='"+newPassString+"' where username='"+username+"'");
				  
			  }
		  	}
		  	catch (SQLException e) {
				e.printStackTrace();
		  	}
		  	return result;
		
		
	}

	//To register User on logging from Facebook
	public User registerFbUser(User information) {
		// TODO Auto-generated method stub
			Statement stmt;
			String stamp="";
			DateFormat dateFormat = new SimpleDateFormat("yyyy-MM-dd HH:mm:ss");
			Date date = new Date();
			stamp=dateFormat.format(date);
			User result=new User();
			result.setError("OOPS:  Error:unable to create account");
		  try {
			stmt = conn.createStatement();
			Random ran=new Random();
			int pass=89898989+ran.nextInt(89898989);
			String passString=String.valueOf(pass);
			try{
			int res=stmt.executeUpdate("Insert into USER (username,name,email,password,status,created_on) values('"+information.getUsername()+"','"+information.getName()+"','"+information.getEmail()+"','"+passString+"','v','"+stamp+"')");
			if(res>0){
				result.setError("Account created!");
				result.setPassword(passString);
			}
			}catch(Exception e){
				
			}
			System.out.println("select uid,name from USER where email='"+information.getUsername()+"'");
			ResultSet rsid=stmt.executeQuery("select uid,name from USER where email='"+information.getUsername()+"'");
			if(rsid.next()){
				result.setUid(rsid.getInt("uid"));
				System.out.println("\n\n\nyo yo yo yo yo yo yoy oy yo yoy yo yoy y");
				System.out.println(rsid.getInt("uid"));
				result.setName(rsid.getString("name"));
			}else{
				result.setError("fatal .... no entry exists");
			}
			return result;
			
		  }
		  catch(SQLException e){
			  e.printStackTrace();
		  }
		  return result;
	}
}