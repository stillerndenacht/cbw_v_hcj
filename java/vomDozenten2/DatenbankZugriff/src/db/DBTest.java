package db;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.Scanner;

public class DBTest {

	public static void main(String[] args) {
		try {
			Connection con = DriverManager.getConnection("jdbc:mysql://localhost:3306", "root", "");
			Statement stmt = con.createStatement();
			String sql = "create database if not exists test;";
			stmt.executeUpdate(sql);
			stmt.executeUpdate("use test;");
//			stmt.executeUpdate("drop table person;");
			sql = "create table if not exists person ("
					+ "id integer primary key auto_increment ,"
					+ "vorname varchar(20),"
					+ "nachname varchar(20),"
					+ "ort varchar(20)"
					+ ");";
			stmt.executeUpdate(sql);	
			
			sql = "insert into person (vorname, nachname, ort) values('Willi', 'Wuff', 'Entenhausen'), ('Donald', 'Duck', 'Entenhausen');";
			int ergebnis = stmt.executeUpdate(sql);
			System.out.println(ergebnis);
			// Vorsicht SQL-Injection möglich !!!!
			Scanner scanner = new Scanner(System.in);
			System.out.println("Bitte Nachnamen eingeben:");
			String name = scanner.nextLine();
			sql = "select * from person where Nachname = '" + name + "' and id = 1;";
//			"select * from person where Nachname = 'Wuff' and id = 1;"
//			"select * from person where Nachname = 'Wuff' or 1 = 1; --  and id=1;"
//			ResultSet rs = stmt.executeQuery(sql);
			
			// Besser so!!!!
			sql = "select * from person where Nachname = ? and id = 1;";
			PreparedStatement pstmt = con.prepareStatement(sql, ResultSet.TYPE_SCROLL_SENSITIVE, ResultSet.CONCUR_UPDATABLE);
			pstmt.setString(1, name);
			ResultSet rs = pstmt.executeQuery();
			final int ID = 1;
			if(!rs.next()) System.out.println("keine Datensaetze");
			rs.beforeFirst();
			while(rs.next()) {
				System.out.println(rs.getInt(ID) + "\t" + rs.getString("vorname" ) + "\t" + rs.getString(3) + "\t" + rs.getString(4));
			}
					
			stmt.close();
			con.close();
		} catch (SQLException e) {
			e.printStackTrace();
		}

	}

}
