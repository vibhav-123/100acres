package com.acres.acresProject;

import java.sql.Statement;
import java.sql.Connection;
import java.sql.SQLException;

import javax.ws.rs.Consumes;
import javax.ws.rs.POST;
import javax.ws.rs.Path;
import javax.ws.rs.Produces;
import javax.ws.rs.core.MediaType;

@Path("myresource1")
public class Register {

	@POST
	  //@Path ("/{user}/{email}/{pass}/{mobile}/{secuity}/{answer}")
	  
	  @Consumes(MediaType.APPLICATION_JSON)
	  @Produces(MediaType.TEXT_PLAIN)
	  public String postIt(/*@PathParam("user") String user*/MyJaxBean input)
	  //public String postIt(@PathParam("user") String user,@PathParam("email") String email,@PathParam("pass") String pass,@PathParam("mobile") int mobile,@PathParam("secuity") String security,@PathParam("answer") String answer)
	  {
		  
	       String result="Unsuccessful";
	       Connection connection=null;
	          Statement statement=null;
	          //ResultSet rs=null;
	          
	      String query="insert into registration(name,email,pass,mobile,security,ans) values('"+input.getname()+"','"+input.getemail()+"','"+input.getpass()+"',"+input.getmob()+",'"+input.getsec()+"','"+input.getans()+"')";
	      
	          //String query="insert into ll values(1,'"+input.getname()+"')";

	          try{
	          connection=JDBCConnection.getConnection();
	          statement=connection.createStatement();
	          int r=statement.executeUpdate(query);
	          if(r>0)
	          {
	            result="Success";
	          }
	          
	          
	      }
	      catch(SQLException ex)
	      {
	          ex.printStackTrace();
	      }
	      finally
	      {
	          if(connection!=null)
	          {
	              try
	              {
	                  connection.close();
	              }
	              catch(SQLException ex)
	              {
	                  ex.printStackTrace();
	              }
	          }
	      }
	      return (""+result);
	  }
}