package com.hundredacres.vibhav.User_Registration;
import java.util.ArrayList;
import java.util.List;

import javax.ws.rs.Consumes;
import javax.ws.rs.GET;
import javax.ws.rs.POST;
import javax.ws.rs.PUT;
import javax.ws.rs.Path;
import javax.ws.rs.Produces;
import javax.ws.rs.core.MediaType;

/**
 * Root resource (exposed at "myresource" path)
 */
@Path("myresource")
public class MyResource {

    /**
     * Method handling HTTP GET requests. The returned object will be sent
     * to the client as "text/plain" media type.
     *
     * @return String that will be returned as a text/plain response.
     */
	User_wrapper newuser= new User_wrapper();
	@Path("/reg")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public String add_user(User user) {
    	System.out.println("Name : "+user.getName()+" Email: "+user.getEmail());
    	return newuser.add_user(user);
    	    
    }
    
    @Path("/auth")
	@POST
    @Produces(MediaType.APPLICATION_JSON)
    @Consumes(MediaType.APPLICATION_JSON)
    public String login(User user){
    	System.out.println("Email : "+user.getEmail()+" Password: "+user.getPassword());
    	return newuser.login(user);
    }
    @Path("/ID")
  	@POST
      @Produces(MediaType.APPLICATION_JSON)
      @Consumes(MediaType.APPLICATION_JSON)
      public String loginuser(User user){
      	System.out.println("Email : "+user.getEmail()+" Password: "+user.getPassword());
      	return newuser.loginuser(user);
      }
     
    
    
}
