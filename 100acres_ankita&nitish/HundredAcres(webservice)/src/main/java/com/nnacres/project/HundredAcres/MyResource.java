package com.nnacres.project.HundredAcres;
import javax.ws.rs.Consumes;
import javax.ws.rs.core.Response;	
import javax.ws.rs.GET;	
import javax.ws.rs.POST;	
import javax.ws.rs.Path;	
import javax.ws.rs.PathParam;	
import javax.ws.rs.Produces;	
import javax.ws.rs.core.MediaType;
import javax.ws.rs.FormParam; 

@Path("resource")
public class MyResource {
	
	MyServices service_obj=new MyServices();
    @POST
    @Produces(MediaType.TEXT_PLAIN)
    @Consumes(MediaType.APPLICATION_JSON)
    @Path("/check_registered")
    public int get_user_details(MyJaxBean output) 
    {
         return service_obj.get_details(output.getemail(),output.getpassword());
        
    }
    
    @POST
    @Produces(MediaType.TEXT_PLAIN)
    @Consumes(MediaType.APPLICATION_JSON)
    @Path("/check_email_available")
    public int check_email_exists(MyJaxBean output) 
    {
         return service_obj.check_email(output.getemail()); 
    }
    
    @POST
    @Produces(MediaType.TEXT_PLAIN)
    @Consumes(MediaType.APPLICATION_JSON)
    @Path("/register")   
    public String insert_user_details(MyJaxBean input)
    {
    	return service_obj.set_details(input.getname(),input.getemail(),input.getpassword(),input.getcontact_no());
    	
    }
}    