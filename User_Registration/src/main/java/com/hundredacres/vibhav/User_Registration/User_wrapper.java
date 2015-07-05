package com.hundredacres.vibhav.User_Registration;

import java.util.ArrayList;
import javax.xml.bind.annotation.XmlRootElement;

@XmlRootElement
public class User_wrapper {
	
	public User_wrapper(){
		
	}
	
	public String add_user(User user){		
		Database db=new Database();
		return db.insert(user);
	}
	
	public String login(User user){
		Database db=new Database();
		return db.login(user);
	}
	public String loginuser(User user){
		Database db=new Database();
		return db.loginuser(user);
	}
}
