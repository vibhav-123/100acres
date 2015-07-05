package com.nnacres.vikram.projectWebService;

import javax.ws.rs.Consumes;
import javax.ws.rs.GET;
import javax.ws.rs.POST;
import javax.ws.rs.Path;
import javax.ws.rs.PathParam;
import javax.ws.rs.Produces;
import javax.ws.rs.core.MediaType;


@Path("site")
public class site {

	private TestingService TestingService=new TestingService();
	
    @POST
    @Path("/login/")
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public UserWrapper checkLogin(UserWrapper uHandler)
    {
    	System.out.println("Password entered is "+uHandler.getpassword());
    	return TestingService.checkLogin(uHandler);
    }
    
    @POST
    @Path("/register/")
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public UserWrapper registerUser(UserWrapper uHandler)
    {
    	return TestingService.registerUser(uHandler);
    }
    
    @POST
    @Path("/register/temp")
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public UserWrapper registerTempUser(UserWrapper uHandler)
    {
    	System.out.println("Reached temp register function with email : "+uHandler.getemail());
    	return TestingService.registerTempUser(uHandler);
    }
    
    @POST
    @Path("/verify/")
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public UserWrapper verifyUser(UserWrapper uHandler)
    {
    	return TestingService.verifyUser(uHandler);
    }
    
    @POST
    @Path("/forgotInit/")
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public UserWrapper forgetUser(UserWrapper uHandler)
    {
    	return TestingService.forgotPassword(uHandler);
    }
    
    @POST
    @Path("/forgotValidate")
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public UserWrapper forgotValidate(UserWrapper uHandler)
    {
    	return TestingService.forgotValidate(uHandler);
    }
    
    @POST
    @Path("/fb/")
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public UserWrapper fbLogin(UserWrapper uHandler)
    {
    	return TestingService.fbLogin(uHandler);
    }
    
    
    
    @POST
    @Path("/reset/")
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public UserWrapper resetPassword(UserWrapper uHandler)
    {
    	return TestingService.resetPassword(uHandler);
    }
    
    @POST
    @Path("/updateinfo/")
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public UserWrapper updateInfo(UserWrapper uHandler)
    {
    	return TestingService.updateInfo(uHandler);
    }

    @POST
    @Path("/verifyPassword/")
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public UserWrapper verifyPassword(UserWrapper uHandler)
    {
  
    	return TestingService.verifyPassword(uHandler);
    }

    
}	