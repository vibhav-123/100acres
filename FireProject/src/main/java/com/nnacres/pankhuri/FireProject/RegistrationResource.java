package com.nnacres.pankhuri.FireProject;
import javax.ws.rs.Consumes;
import javax.ws.rs.FormParam;
import javax.ws.rs.GET;
import javax.ws.rs.POST;
import javax.ws.rs.Path;
import javax.ws.rs.PathParam;
import javax.ws.rs.Produces;
import javax.ws.rs.core.MediaType;
@Path("RegisterResource")
public class RegistrationResource {
	RegistrationAPI reg=new RegistrationAPI();
	@GET
    @Produces(MediaType.APPLICATION_JSON)
    @Path("/{uid}")
    public Register getIt() {
        Register a=new Register();
        //System.out.println(a.getpwd());
        return a;
    } 
	@POST
    @Produces(MediaType.APPLICATION_JSON)
    @Consumes(MediaType.APPLICATION_JSON)
    @Path("register")
    public Register check(Register r)
    {
		Register d=reg.insertData(r);
    
		return d;
    	
    }

}
