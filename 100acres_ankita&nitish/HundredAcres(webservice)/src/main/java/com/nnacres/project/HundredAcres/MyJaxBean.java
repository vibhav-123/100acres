package com.nnacres.project.HundredAcres;
import javax.xml.bind.annotation.XmlElement;
import javax.xml.bind.annotation.XmlRootElement;

@XmlRootElement
public class MyJaxBean {
	
		@XmlElement public String name;
	    @XmlElement public String email;
	    @XmlElement public String password;
	    @XmlElement public long contact_no;
	    public MyJaxBean() {}
	    public MyJaxBean(String name,String email,String password,long contact_no)
	    {
	    	name=this.name;
	    	email=this.email;
	    	password=this.password;
	    	contact_no=this.contact_no;
	    }
	
     
    public String getname() {
        return name;
    }
    public void setname(String name) {
        this.name= name;
    } 
    public String getemail() {
        return email;
    }
    public void setemail(String email) {
        this.email= email;
    } 
    public String getpassword() {
        return password;
    }
    public void setpassword(String password) {
        this.password= password;
    }
    
    public long getcontact_no() {
        return contact_no;
    }
    public void setno(long contact_no) {
        this.contact_no = contact_no;
    }
}