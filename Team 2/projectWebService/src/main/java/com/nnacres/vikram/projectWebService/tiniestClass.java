package com.nnacres.vikram.projectWebService;

import javax.xml.bind.annotation.XmlRootElement;

@XmlRootElement
public class tiniestClass {
	
	String email;
	String passHash;
	
	public tiniestClass()
	{}
	
	public tiniestClass(String emailValue,String passValue)
	{
		this.email=emailValue;
		this.passHash=passValue;
	}
	
	public void setemail(String emailValue)
	{
		this.email=emailValue;
	}
	
	public void setpassHash(String passValue)
	{
		this.passHash=passValue;
	}
	
	public String getemail()
	{
		return this.email;
	}
	
	public String getpassHash()
	{
		return passHash;
	}

}
