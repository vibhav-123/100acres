package com.nnacres.jyoti.api;

import javax.ws.rs.Consumes;					
import javax.ws.rs.GET;					
import javax.ws.rs.POST;					
import javax.ws.rs.Path;					
import javax.ws.rs.PathParam;					
import javax.ws.rs.Produces;					
import javax.ws.rs.core.MediaType;					

/**					
 * Root resource (exposed at "myresource" path)					
 */					
@Path("register")					
public class MyResource {					
					
    /**					
     * Method handling HTTP GET requests. The returned object will be sent					
     * to the client as "text/plain" media type.					
     *					
     * @return String that will be returned as a text/plain response.					
     */					
					
					
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)					
    @Path("email")					
    public Message getIt1(Message temp) {					
    	Message s=service1.show(temp);	
    	return s;				
    }					
    					
    @POST					
    @Consumes(MediaType.APPLICATION_JSON)					
    @Produces(MediaType.APPLICATION_JSON)					
    @Path("price")					
    //public String sendIt(@PathParam("getID") int temp1,@PathParam("price") int temp2){
    public Message sendIt(Message messages){
    	//return service1.postData(temp1, temp2);				
    	Message s= service1.postData(messages);
    	return s;
    					
    }		
    /*
    @GET
    @Produces(MediaType.TEXT_PLAIN)
    @Path("getdescription/{getID}")
    public String getIt2(@PathParam("getID") int temp) {
    	String s=service2.get(temp);
        return (s);
    }
    
    /*@POST
    @Consumes(MediaType.TEXT_PLAIN)
    @Produces(MediaType.TEXT_PLAIN)
    @Path("addtocart/{cid}/{pid}")
    public String post1(@PathParam("cid") int cid,@PathParam("pid") int pid) {
        String s=service3.post1(cid, pid);
    	return s;
    }*/
    
    /*@POST
    @Produces(MediaType.TEXT_PLAIN)
    @Consumes(MediaType.TEXT_PLAIN)
    @Path("addtocart/{pid}")
    public String post2(@PathParam("pid") int pid) {
        String s=service3.post2(pid);
    	return s;
    }*/
    
    
    					
    					
}					
