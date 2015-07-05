package com.acres3.team6.webservice;
import java.util.List;
import javax.ws.rs.Consumes;
import javax.ws.rs.DELETE;
import javax.ws.rs.GET;
import javax.ws.rs.POST;
import javax.ws.rs.PUT;
import javax.ws.rs.Path;
import javax.ws.rs.PathParam;
import javax.ws.rs.Produces;
import javax.ws.rs.core.MediaType;


@Path("User")
public class MyResource {

	Userservice test = new Userservice();

	/*@GET
	@Produces(MediaType.APPLICATION_JSON)
	@Path("/{checkId}")
	public Data getUser(@PathParam("checkId") int checkId) {
		return test.getUser(checkId);
	}*/

	@POST
	@Produces(MediaType.APPLICATION_JSON)
	@Consumes(MediaType.APPLICATION_JSON)
	public Data addUser(Data user) {
		
		return test.addUser(user);
	}

	

	
}
