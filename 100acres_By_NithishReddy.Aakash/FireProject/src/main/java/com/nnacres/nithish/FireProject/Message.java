package com.nnacres.nithish.FireProject;

import javax.xml.bind.annotation.XmlRootElement;

@XmlRootElement
public class Message {
	private String email;
	private String pwd;
	private boolean msg;
	public Message()
	{
	}
	public Message(String uid,String pwd){
		this.email=uid;
		this.pwd=pwd;
	}
	public String getemail()
	{
		return email;
	}
	public String getpwd()
	{
		return pwd;
	}
	public void setmsg(boolean msg)
	{
		this.msg=msg;
	}
	public boolean getmsg(){
		return msg;
	}
	public void setemail(String uid)
	{
		this.email=uid;
	}
	public void setpwd(String pwd)
	{
		this.pwd=pwd;
	}
	}
