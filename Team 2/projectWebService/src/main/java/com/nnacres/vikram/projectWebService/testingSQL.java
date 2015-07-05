package com.nnacres.vikram.projectWebService;

import java.sql.*;
import java.util.Random;

public class testingSQL
{
	static private Connection conn;
	static private  String url; 
	static private  String dbName;
	static private  String driver;
	static private  String userName; 
	static private  String password;
	static private  java.util.Date date;
	static private  Random randomGenerator;
	
	testingSQL()
	{
		  url = "jdbc:mysql://localhost:3306/";
		  dbName = "100acresT2";
		  driver = "com.mysql.jdbc.Driver";
		  userName = "root"; 
		  password = "root123";
		  date= new java.util.Date();
		  randomGenerator = new Random();
		  try {
			  Class.forName(driver).newInstance();
			  conn = DriverManager.getConnection(url+dbName,userName,password);
		  }
		  catch (Exception e) {
			  e.printStackTrace();
		  }
	}
	
	public UserWrapper getInfo(String email,String password)
	{
		String selectString = "select * from " + dbName + ".users " + "where email = ? AND where pwrd = ?";
		  
		  try {
			PreparedStatement getDetails=null;
			getDetails = conn.prepareStatement(selectString);
			getDetails.setString(1, email);
			getDetails.setString(2, password);
			UserWrapper information=new UserWrapper();
			ResultSet rs;
			rs = getDetails.executeQuery();
			if(rs.next())
			{
				int userID=rs.getInt(1);
				String type=rs.getString("type");
				String contact = rs.getString("contact");
				String name = rs.getString("name");
				information.setParam(email,password,name,type,contact,userID);
				return information;
			}
	
		  }
		  catch (SQLException e) {
				e.printStackTrace();
		  }
		  return null;
	}
	
	public UserWrapper verifyUser(UserWrapper uHandler)
	{
		int userID=uHandler.getuserID();
		String hash=uHandler.gethash();
		UserWrapper uInformation=new UserWrapper();
		String selectString="Select name from "+ dbName + ".Users where Users.userID = ? AND Users.hash = ? AND IS_ACTIVE = 'Active' AND isHashValid='valid'";
		try {
			PreparedStatement getDetails=null;
			PreparedStatement setVerification=null;
			getDetails = conn.prepareStatement(selectString);
			getDetails.setInt(1, userID);
			getDetails.setString(2, hash);
			ResultSet rs;
			rs = getDetails.executeQuery();
			if(rs.next())
			{
				String updateString="Update " + dbName + ".Users set Users.IS_VERIFIED = 'VERIFIED', Users.isHashValid='invalid' where Users.userID = ?";
				setVerification = conn.prepareStatement(updateString);
				setVerification.setInt(1,userID);
				int res = setVerification.executeUpdate();
				if(res>0)
				{
					String name = rs.getString("name");
					uInformation.setuserID(userID);
					uInformation.setname(name);
					return uInformation;
				}
				setVerification.close();
			}
			getDetails.close();
		  }
		  catch (SQLException e) {
				e.printStackTrace();
		  } 
		uInformation.seterror("Oops. There seems to be a problem. Come back again later");
		return uInformation;
	}
	
	
	public UserWrapper updateInfo(UserWrapper uHandler)
	{
		String newName = uHandler.getname();
		String newEmail = uHandler.getemail();
		String newContact = uHandler.getcontact();
		int userID=uHandler.getuserID();
		UserWrapper uInformation = new UserWrapper();
		String updateString="Update " + dbName + ".Users set Users.name = ?, Users.contact=?, Users.email=? where Users.userID = ?";
		try {
			PreparedStatement setUpdation=null;
			setUpdation = conn.prepareStatement(updateString);
			setUpdation.setString(1,newName);
			setUpdation.setString(2,newContact);
			setUpdation.setString(3,newEmail);
			setUpdation.setInt(4,userID);
			
			int res = setUpdation.executeUpdate();
			if(res>0)
			{
				return uInformation;
			}
			setUpdation.close();
			
		  }
		  catch (SQLException e) 
			{
				e.printStackTrace();
			} 
		uInformation.seterror("Oops. There seems to be a problem. Come back again later");
		return uInformation;
	}


	public UserWrapper checkLogin(UserWrapper uHandler)
	{
		String email=uHandler.getemail();
		String selectString = "select name,userID,IS_VERIFIED from " + dbName + ".Users where Users.email = ? AND Users.pwrd = ? AND IS_ACTIVE='ACTIVE'";  
		String password=uHandler.getpassword();
		try {
			PreparedStatement getDetails=null;
			getDetails = conn.prepareStatement(selectString);
			getDetails.setString(1, email);
			getDetails.setString(2, password);
			UserWrapper uInformation=new UserWrapper();
			ResultSet rs;
			rs = getDetails.executeQuery();
			if(rs.next())
			{
				String isVerified=rs.getString("IS_VERIFIED");
				if(isVerified.equals("UNVERIFIED")){
					uInformation.seterror("Please check your inbox for verification link");
					return uInformation;
				}
				String name = rs.getString("name");
				int userID=rs.getInt("userID");
				uInformation.setuserID(userID);
				uInformation.setname(name);
				uInformation.setemail(email);
				return uInformation;
			}
			else
			{
				uInformation.seterror("Invalid Email/Password Combination.");
				return uInformation;
			}
		  }
		  catch (SQLException e) {
				e.printStackTrace();
				UserWrapper uInformation = new UserWrapper(); 
				uInformation.seterror("Oops. There seems to be a problem. Come back again later");
				return uInformation;
		  }
	}	 	
	
	public UserWrapper registerUser(UserWrapper uHandler)
	{
		String email=uHandler.getemail();
		String passHash=uHandler.getpassword();
		String contact=uHandler.getcontact();
		String name=uHandler.getname();
		String type=uHandler.gettype();
		Long randomLong = randomGenerator.nextLong();
		String hash=md5Hash.getHash(randomLong+"");
		UserWrapper uInformation=new UserWrapper();
		String insertString = "insert into " + dbName + ".Users(name,email,pwrd,contact,type,CREATED_ON,hash) " + "values(?,?,?,?,?,?,?) ";
		PreparedStatement setDetails=null;
		try {
			  setDetails = conn.prepareStatement(insertString,Statement.RETURN_GENERATED_KEYS);
			  setDetails.setString(1, name);
			  setDetails.setString(2, email);
			  setDetails.setString(3, passHash);
			  setDetails.setString(4, contact);
			  setDetails.setString(5, type);
			  setDetails.setTimestamp(6, new Timestamp(date.getTime()));
			  setDetails.setString(7, hash);
			  int res=setDetails.executeUpdate();
			  if(res>0)
			  {
				  
				  try (ResultSet generatedKeys = setDetails.getGeneratedKeys()) {
			            if (generatedKeys.next()) {
			                uInformation.setuserID(generatedKeys.getInt(1));
			                uInformation.sethash(hash);
			                return uInformation;
			            }
			            else {
			                throw new SQLException("Creating user failed, no ID obtained.");
			            }
				  }
				  catch(Exception e)
				  {
					  e.printStackTrace();
					  uInformation.seterror("Oops, there seems to be an error. Please try again later.");
					  return uInformation;
					  
				  }
			  }
		}
		  catch(SQLIntegrityConstraintViolationException e){
			  e.printStackTrace();
			  uInformation.seterror("Email Id already taken");
			  return uInformation;
			  
		  }
		  catch(SQLException e)
		  {
			  e.printStackTrace();
		  }
		  uInformation.seterror("Oops, there seems to be an error. Please try again later.");
		  return uInformation;
	}
	
	public UserWrapper forgotPassword(UserWrapper uHandler)
	{ 
		System.out.println("Entered function with email: " +uHandler.getemail());
		String email=uHandler.getemail();
		Long randomLong = randomGenerator.nextLong();
		String hash=md5Hash.getHash(randomLong+"");
		UserWrapper uInformation=new UserWrapper();
		String selectString = "select name,userID,IS_VERIFIED from " + dbName + ".Users where Users.email = ? AND IS_ACTIVE='ACTIVE'";
		PreparedStatement getDetails=null;
		PreparedStatement setHash=null;
		try
		{
			getDetails = conn.prepareStatement(selectString);
			getDetails.setString(1,email);
			ResultSet rs = getDetails.executeQuery();
			if(rs.next())
			{
				String isVerified=rs.getString("IS_VERIFIED");
				if(isVerified.equals("VERIFIED"))
				{
					int userID=rs.getInt("userID");
					System.out.println("Found a record for a verified email : "+email);
					String updateString="Update " + dbName + ".Users set hash = ? , isHashValid='valid' where Users.userID = ? AND IS_ACTIVE='ACTIVE'";
					setHash = conn.prepareStatement(updateString);
					setHash.setString(1,hash);
					setHash.setInt(2,userID);
					int res = setHash.executeUpdate();
					if(res>0)
					{
						uInformation.setemail(email);
						uInformation.sethash(hash);
						uInformation.setuserID(userID);
						System.out.println("Hash updated for email id : "+email+" new hash is : "+hash);
						return uInformation;
					}
					else
					{
						uInformation.seterror("Oops. There seems to be a problem. Try again later");
						System.out.println("Could not update hash for email " +email);
						return uInformation;
					}
				}
				else
				{
					System.out.println("Email not verified " +email);
					uInformation.seterror("Please verify your account first by following the verification link sent to your email");
					return uInformation;
				}
			}
			else
			{
				System.out.println("no account with email : " +email);
				uInformation.seterror("Sorry, there is no account with this email id");
				return uInformation;
			}
		}
		catch(Exception e)
		{
			e.printStackTrace();
		}
		System.out.println("Exception occured : " +email);
		uInformation.seterror("Oops, there seems to be an error. Please try again later.");
		return uInformation;
	}

	public UserWrapper fbLogin(UserWrapper uHandler)
	{
		UserWrapper uInformation=new UserWrapper();
		String email=uHandler.getemail();
		Long randomLong = randomGenerator.nextLong();
		String password=md5Hash.getHash(randomLong+"");
		String name=uHandler.getname();
		System.out.println("name of user is :"+name);
		String insertString = "insert into " + dbName + ".Users(name,email,pwrd,CREATED_ON,source,IS_VERIFIED) " + "values(?,?,?,?,?,?) ";
		PreparedStatement setDetails=null;
		try {
			  setDetails = conn.prepareStatement(insertString,Statement.RETURN_GENERATED_KEYS);
			  setDetails.setString(1, name);
			  setDetails.setString(2, email);
			  setDetails.setString(3, password);
			  setDetails.setTimestamp(4, new Timestamp(date.getTime()));
			  setDetails.setString(5, "fb");
			  setDetails.setString(6, "VERIFIED");
			  int res=setDetails.executeUpdate();
			  if(res>0)
			  {
				  try (ResultSet generatedKeys = setDetails.getGeneratedKeys()) {
			            if (generatedKeys.next()) {
			                uInformation.setuserID(generatedKeys.getInt(1));
			                uInformation.setname(name);
			                uInformation.setemail(email);
			                return uInformation;
			            }
			            else {
			                throw new SQLException("Creating user failed, no ID obtained.");
			            }
				  }
				  catch(Exception e)
				  {
					  e.printStackTrace();
					  uInformation.seterror("Oops, there seems to be an error. Please try again later.");
					  return uInformation;
					  
				  }
			  }
		}
		catch(SQLIntegrityConstraintViolationException e){
			String selectString = "select userID from " + dbName + ".Users where Users.email = ? ";  
			try {
				PreparedStatement getDetails=null;
				getDetails = conn.prepareStatement(selectString);
				getDetails.setString(1, email);
				ResultSet rs;
				rs = getDetails.executeQuery();
				if(rs.next())
				{
					int userID=rs.getInt("userID");
					uInformation.setuserID(userID);
					uInformation.setemail(email);
					uInformation.setname(name);
					return uInformation;
				}
				else
				{
					uInformation.seterror("Oops, there seems to be an error. Please try again later.");
					return uInformation;
				}
		  
			}
			catch(SQLException ex)
			{
				e.printStackTrace();
			}
			uInformation.seterror("Oops, there seems to be an error. Please try again later.");
			return uInformation;
		}
		catch(Exception e)
		{
			e.printStackTrace();
		}
		uInformation.seterror("Oops, there seems to be an error. Please try again later.");
		return uInformation;
	}
	
	public UserWrapper registerTempUser(UserWrapper uHandler)
	{
		String email=uHandler.getemail();
		Long randomLong = randomGenerator.nextLong();
		String password=md5Hash.getHash(randomLong+"");
		String contact=uHandler.getcontact();
		String name=uHandler.getname();
		UserWrapper uInformation=new UserWrapper();
		String insertString = "insert into " + dbName + ".Users(name,email,pwrd,contact,CREATED_ON,can_login) " + "values(?,?,?,?,?,?) ";
		PreparedStatement setDetails=null;
		try {
			  setDetails = conn.prepareStatement(insertString,Statement.RETURN_GENERATED_KEYS);
			  setDetails.setString(1, name);
			  setDetails.setString(2, email);
			  setDetails.setString(3, password);
			  setDetails.setString(4, contact);
			  setDetails.setTimestamp(5, new Timestamp(date.getTime()));
			  setDetails.setString(6, "no");
			  int res=setDetails.executeUpdate();
			  if(res>0)
			  {
				  
				  try (ResultSet generatedKeys = setDetails.getGeneratedKeys()) {
			            if (generatedKeys.next()) {
			                uInformation.setuserID(generatedKeys.getInt(1));
			                return uInformation;
			            }
			            else {
			                throw new SQLException("Creating user failed, no ID obtained.");
			            }
				  }
				  catch(Exception e)
				  {
					  e.printStackTrace();
					  uInformation.seterror("Oops, there seems to be an error. Please try again later.");
					  return uInformation;
				  }
			  }
		 }
		 catch(SQLIntegrityConstraintViolationException e){
			  e.printStackTrace();
			  String selectString = "select userID from " + dbName + ".Users where Users.email = ? ";  
				try {
					PreparedStatement getDetails=null;
					getDetails = conn.prepareStatement(selectString);
					getDetails.setString(1, email);
					ResultSet rs;
					rs = getDetails.executeQuery();
					if(rs.next())
					{
						int userID=rs.getInt("userID");
						uInformation.setuserID(userID);
						return uInformation;
					}
					else
					{
						uInformation.seterror("Oops, there seems to be an error. Please try again later.");
						return uInformation;
					}
			  
				}
				catch(SQLException ex)
				{
					e.printStackTrace();
				}
				uInformation.seterror("Oops, there seems to be an error. Please try again later.");
				return uInformation;
		  }
		catch(Exception e)
		{
			e.printStackTrace();
		}
		uInformation.seterror("Oops, there seems to be an error. Please try again later.");
		return uInformation;
	}
	
	public UserWrapper forgotValidate(UserWrapper uHandler)
	{
		int userID=uHandler.getuserID();
		String hash=uHandler.gethash();
		UserWrapper uInformation=new UserWrapper();
		String selectString="Select name from "+ dbName + ".Users where Users.userID = ? AND Users.hash = ? AND IS_ACTIVE = 'Active' AND Users.isHashValid='valid'";
		try {
			PreparedStatement getDetails=null;
			getDetails = conn.prepareStatement(selectString);
			getDetails.setInt(1, userID);
			getDetails.setString(2, hash);
			ResultSet rs;
			rs = getDetails.executeQuery();
			if(rs.next())
			{
				String name = rs.getString("name");
				uInformation.setuserID(userID);
				uInformation.setname(name);
				return uInformation;
			}
			else
			{
				uInformation.seterror("Invalid Link.");
				return uInformation;
			}
		  }
		  catch (SQLException e) {
				e.printStackTrace(); 
				uInformation.seterror("Oops. There seems to be a problem. Come back again later");
				return uInformation;
		  }
	}
	
	public UserWrapper resetPassword(UserWrapper uHandler)
	{
		int userID=uHandler.getuserID();
		String password=uHandler.getpassword();
		UserWrapper uInformation=new UserWrapper();
		System.out.println("Password is :"+password+" UserID is : "+userID);
		String updateString="Update " + dbName + ".Users set Users.pwrd = ?,isHashValid='invalid' where Users.userID = ? AND Users.IS_ACTIVE='ACTIVE'";
		try {
			PreparedStatement getDetails=null;
			getDetails = conn.prepareStatement(updateString);
			getDetails.setString(1,password);
			getDetails.setInt(2, userID);
			int res = getDetails.executeUpdate();
			if(res>0)
			{
				uInformation.setuserID(userID);
				return uInformation;
			}
			else
			{
				uInformation.seterror("No active account found");
				return uInformation;
			}
		  }
		  catch (SQLException e) {
				e.printStackTrace(); 
				uInformation.seterror("Oops. There seems to be a problem. Come back again later");
				return uInformation;
		  }
	}
	
	public UserWrapper verifyPassword(UserWrapper uHandler)
	{
		int userID=uHandler.getuserID();
		String password=uHandler.getpassword();
		UserWrapper uInformation=new UserWrapper();
		System.out.println("Reached the service "+uHandler.getpassword());
		String selectString="Select  * from "+ dbName + ".Users where Users.userID = ? AND Users.pwrd = ? ";
		try {
			PreparedStatement getDetails=null;
			getDetails = conn.prepareStatement(selectString);
			getDetails.setInt(1, userID);
			getDetails.setString(2, password);
			ResultSet rs;
			rs = getDetails.executeQuery();
			
			if(rs.next())
			{
				String name = rs.getString("name");
				String hash1=rs.getString("hash");
				uInformation.setuserID(userID);
				uInformation.sethash(hash1);
				uInformation.setname(name);
				System.out.print(uInformation);
				return uInformation;
			}
			else
			{
				uInformation.seterror("Invalid Password");
				return uInformation;
			}
		  }
		  catch (SQLException e) {
				e.printStackTrace();
		  } 
		uInformation.seterror("Oops. There seems to be a problem. Come back again later");
		return uInformation;
	}
	

}