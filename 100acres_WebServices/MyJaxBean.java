package com.acres.acresProject;


import javax.xml.bind.annotation.XmlElement;
import javax.xml.bind.annotation.XmlRootElement;

@XmlRootElement
public class MyJaxBean {
	
		@XmlElement public String name;
	    @XmlElement public String email;
	    @XmlElement public String pass;
	    @XmlElement public String mob;
	    @XmlElement public String sec;
	    @XmlElement public String ans;


	    public MyJaxBean() {}
	    public MyJaxBean(String name,String email,String pass,String mob,String sec,String ans)
	    {
	    	name=this.name;
	    	email=this.email;
	    	pass=this.pass;
	    	mob=this.mob;
	    	sec=this.sec;
	    	ans=this.ans;
	    }
	
	
     
  
     
    public String getname() {
        return name;
    }
    public void setname(String name) {
        this.name = name;
    }
     
    public String getemail() {
        return email;
    }
    public void setemail(String email) {
        this.email = email;
    }
    
    public String getpass() {
        return pass;
    }
    public void setpass(String pass) {
        this.pass = pass;
    }
    public String getmob() {
        return mob;
    }
    public void setmob(String mob) {
        this.mob = mob;
    }
    public String getsec() {
        return sec;
    }
    public void setsec(String sec) {
        this.sec = sec;
    }
    public String getans() {
        return ans;
    }
    public void setans(String ans) {
        this.ans = ans;
    }
}