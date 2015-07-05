package com.nnacres.nithish.FireProject;

import java.sql.*;

public class LoginAPI {

	static final String JDBC_DRIVER = "com.mysql.jdbc.Driver";
	static final String DB_URL = "jdbc:mysql://localhost:3306/100acres";
	static final String USER = "root";
	static final String PASS = "reddy";

	public Message LoginCheck(Message msg) {

		try {

			Connection conn = null;
			Statement stmt = null;

			Class.forName("com.mysql.jdbc.Driver");
			conn = DriverManager.getConnection(DB_URL, USER, PASS);
			stmt = conn.createStatement();

			String sql = "select email from UserTable where email='"
					+ msg.getemail()+ "' and password='"+msg.getpwd()+"'";
						
			ResultSet rs = stmt.executeQuery(sql);
			while (rs.next()) {
				String uid = msg.getemail();
				String uname = rs.getString("email");
				if (uid.equals(uname))
					msg.setmsg(true);

				conn.close();
				return msg;
			}
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		} catch (ClassNotFoundException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}  catch(Exception e){
			msg.setmsg(false);
			return msg;
		}
		msg.setemail("");
		msg.setpwd("");
		msg.setmsg(false);
		return msg;
	}

}
