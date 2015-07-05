package com.nnacres.pankhuri.FireProject;

import javax.ws.rs.Consumes;
import javax.ws.rs.FormParam;
import javax.ws.rs.GET;
import javax.ws.rs.POST;
import javax.ws.rs.Path;
import javax.ws.rs.PathParam;
import javax.ws.rs.Produces;
import javax.ws.rs.core.MediaType;

/**
 * Root resource (exposed at "myresource" path)
 */
@Path("Login")
public class MyResource {
	LoginAPI login=new LoginAPI();
    /**
     * Method handling HTTP GET requests. The returned object will be sent
     * to the client as "text/plain" media type.
     *
     * @return String that will be returned as a text/plain response.
     */
    @GET
    @Produces(MediaType.APPLICATION_JSON)
    @Path("/{email}")
    public Message getIt(@PathParam("email") String email) {
        Message a=new Message("11","test");
        System.out.println(a.getpwd());
        return a;
    }
    @POST
    @Produces(MediaType.APPLICATION_JSON)
    @Path("email")
    public Email get(Email e) {
    	//Email e=new Email();
    //	e.setemail(email);
        Email em=EmailAPI.checkEmail(e);
        return em;
    }
    @POST
    @Produces(MediaType.APPLICATION_JSON)
    @Consumes(MediaType.APPLICATION_JSON)
    @Path("login")
    public Message check(Message msg)
    {
		Message d=login.LoginCheck(msg);
    
		return d;
    	
    }
}
