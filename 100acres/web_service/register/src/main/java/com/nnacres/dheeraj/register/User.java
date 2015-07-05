package com.nnacres.dheeraj.register;

import javax.xml.bind.annotation.XmlRootElement;

@XmlRootElement
public class User {
	private int uid;
	private String username;
	private String password;
	private String email;
	private String name;
	private String error;
	
	
	public User(){
		
	}
	
	public User(int uid,String username,String password,String email,String name,String error){
		this.uid=uid;
		this.email=email;
		this.username=username;
		this.password=password;
		this.name=name;
		this.error=error;
	}

	public String getUsername() {
		return username;
	}

	public void setUsername(String username) {
		this.username = username;
	}

	public String getPassword() {
		return password;
	}

	public void setPassword(String password) {
		this.password = password;
	}

	public String getEmail() {
		return email;
	}

	public void setEmail(String email) {
		this.email = email;
	}

	public String getName() {
		return name;
	}

	public void setName(String name) {
		this.name = name;
	}

	public String getError() {
		return error;
	}

	public void setError(String error) {
		this.error = error;
	}

	public int getUid() {
		return uid;
	}

	public void setUid(int uid) {
		this.uid = uid;
	}
	
	
}
