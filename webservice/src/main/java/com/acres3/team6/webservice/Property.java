package com.acres3.team6.webservice;
import javax.xml.bind.annotation.XmlElement;
import javax.xml.bind.annotation.XmlRootElement;
@XmlRootElement
public class Property {
@XmlElement private int id;
@XmlElement	private String owner_type ;
@XmlElement	private String intention;
@XmlElement	private String city;
@XmlElement	private String address;
@XmlElement	private String bedroom;
@XmlElement	private long expected_price;
@XmlElement private String imagepath;
@XmlElement private int User_id;

	public Property() {

	}
	public int getUser_id() {
		return User_id;
	}

	public void setUser_id() {
		this.User_id = User_id;
	}
	public int getid() {
		return id;
	}

	public void setid() {
		this.id = id;
	}

	public long getexpected_price() {
		return expected_price;
	}

	public void setexpected_price(long expected_price) {
		this.expected_price = expected_price;
	}

	public void setimagepath(String imagepath) {
		this.imagepath = imagepath;
	}
	public String getimagepath() {
		return imagepath;
	}
	public void setcity(String city) {
		this.city = city;
	}
	public String getcity() {
		return city;
	}
	public String getaddress() {
		return address;
	}

	public void setaddress(String address) {
		this.address = address;
	}
	public String getintention() {
		return intention;
	}

	public void setintention() {
		this.intention = intention;
	}
	public String getbedroom() {
		return bedroom;
	}

	public void setbedroom() {
		this.bedroom = bedroom;
	}
	public String getowner_type() {
		return owner_type;
	}

	public void setowner_type() {
		this.owner_type = owner_type;
	}
}




