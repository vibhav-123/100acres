package com.nnacres.vikram.projectWebService;

import javax.xml.bind.annotation.XmlRootElement;

@XmlRootElement
public class UserWrapper {
	
	private String email;
	private String password;
	private String type;
	private String contact;
	private String name;
	private int userID;
	private String hash;
	private String IS_VERIFIED;
	private String error;
	
	
	public UserWrapper()
	{
		email="";
		password="";
		type="";
		name="";
		contact="";
		userID=0;
		hash="";
		error="";
		IS_VERIFIED="";
	}
	
	
	public void setParam(String email,String password,String name,String type,String contact,int userID)
	{
		this.email=email;
		this.password=password;
		this.name=name;
		this.contact=contact;
		this.type=type;
		this.userID=userID;
	}
	
	public String geterror()
	{
		return this.error;
	}
	
	public String getemail()
	{
		return this.email;
	}
	public String getname()
	{
		return this.name;
	}
	public String getpassword()
	{
		return this.password;
	}
	public String getcontact()
	{
		return this.contact;
	}
	public int getuserID()
	{
		return this.userID;
	}
	public String gettype()
	{
		return this.type;
	}
	
	public String gethash()
	{
		return this.hash;
	}
	
	public String getIS_VERIFIED()
	{
		return this.IS_VERIFIED;
	}
	
	public void setemail(String emailValue)
	{
		this.email=emailValue;
	}
	public void setname(String nValue)
	{
		this.name=nValue;
	}
	
	public void seterror(String eValue)
	{
		this.error=eValue;
	}
	
	
	public void setIS_VERIFIED(String verifyValue)
	{
		this.IS_VERIFIED=verifyValue;
	}
	
	public void setpassword(String passValue)
	{
		this.password=passValue;
	}
	public void setcontact(String conValue)
	{
		this.contact=conValue;
	}
	public void setuserID(int idValue)
	{
		this.userID=idValue;
	}
	public void settype(String tValue)
	{
		this.type=tValue;
	}
	
	public void sethash(String hValue)
	{
		this.hash=hValue;
	}
}
