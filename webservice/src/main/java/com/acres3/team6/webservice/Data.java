package com.acres3.team6.webservice;
import java.util.Date;

import javax.xml.bind.annotation.XmlElement;
import javax.xml.bind.annotation.XmlRootElement;
@XmlRootElement
public class Data {
@XmlElement	private String Name;
@XmlElement	private String Email;
@XmlElement	private int Mobile;
@XmlElement	private String Password;

	public Data() {

	}

	

	public String getName() {
		return Name;
	}

	public void setName() {
		this.Name = Name;
	}

	public int getMobile() {
		return Mobile;
	}

	public void setMobile(int Mobile) {
		this.Mobile = Mobile;
	}


	public void setPassword(String Password) {
		this.Password = Password;
	}
	public String getPassword() {
		return Password;
	}
	public String getEmail() {
		return Email;
	}

	public void setEmail(String Email) {
		this.Email = Email;
	}
}




