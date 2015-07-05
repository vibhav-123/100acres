package com.acres.acresProject;


//import java.awt.PageAttributes.MediaType;
import java.sql.Statement;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;

import javax.ws.rs.Consumes;
import javax.ws.rs.GET;
import javax.ws.rs.POST;
import javax.ws.rs.Path;
import javax.ws.rs.PathParam;
import javax.ws.rs.Produces;
import javax.ws.rs.core.MediaType;

@Path("myresource")
public class MyResource {

 
  
  @POST
  //@Path ("/{user}/{pass}")
  //public String getIt(@PathParam("user") String nn,@PathParam("pass") String pp)
  @Consumes(MediaType.APPLICATION_JSON)
  //@Produces(MediaType.TEXT_PLAIN)
  public String postIt(/*@PathParam("user") String user*/MyJaxBean input)

  {
       String result="Unsuccessful";
       Connection connection=null;
          Statement statement=null;
          ResultSet rs=null;
          
      //String query="Select * from login where email='"+input.getemail()+"' and pass='"+input.getpass()+"';";
       String query="Select * from registration where email='"+input.getemail()+"' and pass='"+input.getpass()+"'";

          try{
          connection=JDBCConnection.getConnection();
          statement=connection.createStatement();
          rs=statement.executeQuery(query);
          while(rs.next())
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