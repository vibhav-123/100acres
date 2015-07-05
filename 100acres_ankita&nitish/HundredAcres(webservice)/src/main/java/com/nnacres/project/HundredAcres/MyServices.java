package com.nnacres.project.HundredAcres;

import java.sql.Connection;
import java.sql.*;
import java.util.Calendar;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
public class MyServices {
	
	Connection connection=null;
	Statement statement=null,st1=null,st2=null;
	ResultSet rs=null,rs1=null,rs2=null;
	public String set_details(String name,String email,String password,long contact_no)
	{
		String query="Select user_id from users where email='"+email+"'";
		String msg="";
		try{
			connection=JDBCConnection.getConnection();
			statement=connection.createStatement();
			rs=statement.executeQuery(query);
			if (!rs.next() ) {
				Calendar calendar = Calendar.getInstance();
			    java.sql.Timestamp register_time = new java.sql.Timestamp(calendar.getTime().getTime());
                 query="Insert into users values('"+name+"','"+email+"','"+password+"','"+contact_no+"','"+register_time+"',NULL,NULL)";
				 connection=JDBCConnection.getConnection();
				statement=connection.createStatement();
				statement.executeUpdate(query);
				msg="Success";
			}
			else{
				msg="Email id already exists";
			}
		}catch(SQLException ex){
			ex.printStackTrace();
		}finally{
			if(connection!=null){
				try{
					connection.close();
				}catch(SQLException ex){
					ex.printStackTrace();
				}
			}
		}
		return msg;
	}
	
	
	public int get_details(String email,String password)
	{
		String query="Select user_id from users where email='"+email+"' and password='"+password+"'";
		int result=0;
		try{
			connection=JDBCConnection.getConnection();
			statement=connection.createStatement();
			rs=statement.executeQuery(query);
			if (!rs.next() ) {
			     result=0;
			    
			}
			else
			{
			     result=rs.getInt("user_id");	
			   
			}

		}catch(SQLException ex){
			ex.printStackTrace();
		}finally{
			if(connection!=null){
				try{
					connection.close();
				}catch(SQLException ex){
					ex.printStackTrace();
				}
			}
		}
		return result;
	}
	public int check_email(String email)
    {
        int val=0;
        String query="Select user_id from users where email='"+email+"'";
        try{
            connection=JDBCConnection.getConnection();
            statement=connection.createStatement();
            rs=statement.executeQuery(query);
            if (!rs.next() ) {
                val=1;
            }
            else{
                val=0;
            }
        }catch(SQLException ex){
            ex.printStackTrace();
        }finally{
            if(connection!=null){
                try{
                    connection.close();
                }catch(SQLException ex){
                    ex.printStackTrace();
                }
            }
        }
        return val;
    }
}