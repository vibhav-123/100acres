package com.hundredacres.vibhav.User_Registration;



import javax.xml.bind.annotation.XmlElement;
import javax.xml.bind.annotation.XmlRootElement;


@XmlRootElement
public class User {
	@XmlElement private String Name;
	@XmlElement private String Email;
	@XmlElement private long Mobile;
	@XmlElement private String Password;

	public User(String Email, String Password){
		this.Email=Email;
		this.Password=Password;
	}
	
	public User()
	{
		/*this.Mobile=987654321;
		this.Name="";
		this.Password="";
		this.Email="";*/
	}
	
	public User(String Name,String Email_id,long Mobile,String Password){
		this.Name=Name;
		this.Email=Email_id;
		this.Mobile=Mobile;
		this.Password=Password;	
	}
	public void setName(String name){
		this.Name=name;
	}
	
	public void setEmail(String email){
		this.Email=email;
	}
	
	public void setMobile(long mobile){
		this.Mobile=mobile;
	}
	
	public void setPassword(String password){
		this.Password=password;
	}
	
	public String getName(){
		return this.Name;
	}
	
	public String getEmail(){
		return this.Email;
	}
	
	public long getMobile(){
		return this.Mobile;
	}
	
	public String getPassword(){
		return this.Password;
	}
	
}
