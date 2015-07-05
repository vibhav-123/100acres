package com.nnacres.nithish.FireProject;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

public class EmailAPI {
	static final String JDBC_DRIVER = "com.mysql.jdbc.Driver";
	static final String DB_URL = "jdbc:mysql://localhost:3306/100acres";
	static final String USER = "root";
	static final String PASS = "reddy";

	public static Email checkEmail(Email em) {

		try {

			Connection conn = null;
			Statement stmt = null;

			Class.forName("com.mysql.jdbc.Driver");
			conn = DriverManager.getConnection(DB_URL, USER, PASS);
			stmt = conn.createStatement();

			String sql = "select email from UserTable where email='"+em.getemail()+"'";
			ResultSet rs = stmt.executeQuery(sql);
			while (rs.next()) {
				String uid = em.getemail();
				String uname = rs.getString("email");
				if (uid.equals(uname))
					em.setid(1);
				conn.close();
				return em;
			}
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		} catch (ClassNotFoundException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}  catch(Exception e){
			em.setid(2);;
			return em;
		}
		em.setid(2);
		return em;
	}

}