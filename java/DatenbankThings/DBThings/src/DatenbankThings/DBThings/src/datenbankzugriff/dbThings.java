package DatenbankThings.DBThings.src.datenbankzugriff;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class dbThings {
public static void main(String[] args) {
    try {
        Connection con = DriverManager.getConnection("jdbc:mysql://localhost:3306", "root", null);
        System.err.println(con.isClosed());
        con.close();
    } catch (SQLException e) {
        e.printStackTrace();
    }
}
}
