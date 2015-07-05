
package com.acres3.team6.webservice;
import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.List;
public class Propertyservice {

	
	public String addProperty(Property property) {
	return MySQLconnection2.insert(property.getid(), property.getowner_type(), property.getintention(),property.getcity(),property.getaddress(),property.getbedroom(),property.getexpected_price(),property.getimagepath(),property.getUser_id());
		//return ;
	}

	
}