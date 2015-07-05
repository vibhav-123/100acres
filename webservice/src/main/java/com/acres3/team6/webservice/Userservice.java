package com.acres3.team6.webservice;
import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.List;
public class Userservice {

	
	/*public User getUser(int Email) {
		return SQL.getOne(Email);

	}*/

	public Data addUser(Data user) {
		MySQLconnection.insert(user.getName(), user.getEmail(), user.getMobile(),user.getPassword());
		return user;
	}

	
}