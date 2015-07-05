package com.nnacres.vikram.projectWebService;

import java.io.UnsupportedEncodingException;
import java.security.MessageDigest;
import java.security.NoSuchAlgorithmException;

public class md5Hash {
	
	public static String getHash(String message)
	{
		String digest=null;
		MessageDigest md;
		try {
			md = MessageDigest.getInstance("MD5");
			byte hash[]= md.digest(message.getBytes("UTF-8"));
			StringBuilder sb = new StringBuilder(2*hash.length); 
			for(byte b : hash)
			{ 
				sb.append(String.format("%02x", b&0xff)); 
			}
			digest = sb.toString();
		} catch (UnsupportedEncodingException e) { 
			e.printStackTrace();
		} catch (NoSuchAlgorithmException e) { 
				e.printStackTrace();
		} 
		return digest;
	}
}
