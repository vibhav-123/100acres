package com.nnacres.vikram.projectWebService;

public class TestingService {
	
	static private testingSQL sqlHandler=new testingSQL();
	
	
	
	public String setInfo(String email,String password,String name,String type,String contact,int userID)
	{
		UserWrapper information=new UserWrapper();
		information.setParam(email,password,name,type,contact,userID);
		//return sqlHandler.setInfo(information);
		return "Im setinfo";
	}

	
	public String getInfo(String email, String password)
	{
		UserWrapper information=sqlHandler.getInfo(email,password);
		if(information!=null)
		{
			String inf=information.getemail()+"\r\n"+information.getuserID()+"\r\n"+information.getname()+"\r\n"+information.getcontact()+"\r\n"+information.gettype();
			return inf;
		}
		else return null;
			
	}
	
	
	public UserWrapper verifyPassword(UserWrapper uHandler)
	{
	
		return sqlHandler.verifyPassword(uHandler);
	}

	
	public UserWrapper updateInfo(UserWrapper uHandler)
	{
		return sqlHandler.updateInfo(uHandler);
	}
	
	public UserWrapper verifyUser(UserWrapper uHandler)
	{
		return sqlHandler.verifyUser(uHandler);
	}
	
	public UserWrapper forgotPassword(UserWrapper uHandler)
	{
		return sqlHandler.forgotPassword(uHandler);
	}
	
	
	public UserWrapper checkLogin(UserWrapper uHandler)
	{
		return sqlHandler.checkLogin(uHandler);
	}
	
	public UserWrapper registerUser(UserWrapper uHandler)
	{
		return sqlHandler.registerUser(uHandler);		
	}
	
	public UserWrapper registerTempUser(UserWrapper uHandler)
	{
		return sqlHandler.registerTempUser(uHandler);		
	}
	
	public UserWrapper fbLogin(UserWrapper uHandler)
	{
		return sqlHandler.fbLogin(uHandler);		
	}
	
	public UserWrapper forgotValidate(UserWrapper uHandler)
	{
		return sqlHandler.forgotValidate(uHandler);
	}
	
	public UserWrapper resetPassword(UserWrapper uHandler)
	{
		return sqlHandler.resetPassword(uHandler);
	}
}