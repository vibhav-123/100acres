package com.nnacres.pankhuri.FireProject;

public class Register {
	private String name;
	private String email;
	private String pwd;
	private String mobile;
	private int msg;
	public Register()
	{
	}
	public Register(String name,String email,String pwd,String mobile){
		this.name=name;
		this.email=email;
		this.pwd=pwd;
		this.mobile=mobile;
	}
	public String getname()
	{
		return name;
	}
	public String getemail()
	{
		return email;
	}
	public String getpwd()
	{
		return pwd;
	}
	public String getmobile()
	{
		return mobile;
	}
	public void setmsg(int msg)
	{
		this.msg=msg;
	}
	public int getmsg(){
		return msg;
	}
	public void setname(String name)
	{
		this.name=name;
	}
	public void setemail(String email)
	{
		this.email=email;
	}
	public void setpwd(String pwd)
	{
		this.pwd=pwd;
	}
	public void setmobile(String mobile)
	{
		this.mobile=mobile;
	}
	
}
