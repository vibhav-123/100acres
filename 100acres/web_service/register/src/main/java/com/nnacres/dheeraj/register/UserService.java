package com.nnacres.dheeraj.register;

import java.util.ArrayList;

public class UserService {
	testingSQL sql;
	public UserService() {
		// TODO Auto-generat
		sql=new testingSQL();
	}

	public String addUser(User user) {
		String error;
		String flag=sql.checkReg(user);
		System.out.println();
		if(flag.equals("e"))
		{
			error="Email already exist";
		}
		else if(flag.equals("u"))
		{
			error="Username already exist";
		}
		else if(flag.equals("eu"))
		{
			error="Email and Username already exist";
		}
		else
		{
			error="Correct";
			error=sql.registerUser(user);
			error="1";
		}
		return error;
	}

	public User loginUser(User user) {
		// TODO Auto-generated method stub
		return sql.loginUser(user);
		
	}

	public String VerifyUser(User user) {
		// TODO Auto-generated method stub
		
		return sql.verifyUser(user);
	}
	public User addfbUser(User user) {

			User error=sql.registerFbUser(user);
			return error;
	}

	public User getPassword(User user) {
		// TODO Auto-generated method stub
		return sql.getPassword(user);
	}
	

}
