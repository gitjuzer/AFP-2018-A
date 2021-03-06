package com.example.joshua.tanuljunk_jatekosan;

import android.content.Context;
import android.os.AsyncTask;
import android.widget.Button;
import android.widget.ListView;
import android.widget.TextView;

import java.sql.Connection;
import java.sql.DatabaseMetaData;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.LinkedHashMap;
import java.util.Map;

public class GetData extends AsyncTask<String, String, String> {
    static final String DB_URL = "jdbc:mysql://10.0.2.2:3306/jatekosprogramozas";
    static String sql;
    static final String GetSql(){
        return sql;
    }
    Map<Integer,Integer> eredmenyek = new LinkedHashMap<Integer, Integer>();
    ItemAdapter item_Adapter;
    Context thisContext;
    ListView eredmenytabla;


    Button kerdessorszam;

    @Override
    protected String doInBackground(String... strings) {
        Connection conn = null;
        Statement stmt = null;
        kerdessorszam.findViewById(R.id.btn_eredmeny);

        //region try-catch csatlakozás
        /*try{
            Class.forName("com.mysql.jdbc.Driver");
            conn = DriverManager.getConnection("jdbc:mysql://10.0.2.2:3306/android_database", "Joshua", "password");

            stmt = conn.createStatement();
            String sql = "SELECT * FROM Feladatok";

            ResultSet rs = stmt.executeQuery(sql);

            while (rs.next()){
                String name = rs.getString("name");
                double price = rs.getDouble("price");

                eredmenyek.put(name, price);
            }

            msg = "Process complete";

            rs.close();
            stmt.close();
            conn.close();

        } catch (SQLException connError){
            msg = connError.toString(); //"An exception was thrown for JDBC.";
            connError.printStackTrace();
        } catch (ClassNotFoundException e) {
            msg = "A class not found exception was thrown.";
            e.printStackTrace();
        } catch (Exception e){
            msg = e.toString();
        } finally{
            try {
                if (stmt != null) {
                    stmt.close();
                }
            } catch (SQLException e) {
                e.printStackTrace();
            }

            try {
                if (conn != null) {
                    conn.close();
                }
            } catch (SQLException e) {
                e.printStackTrace();
            }
        }*/
        //endregion

        return null;
    }

    @Override
    protected void onPostExecute(String msg){

        //String dbName = dbmd.getDatabaseProductName();
        //String driverName = dbmd.getDriverName();
        //String dbUrl = dbmd.getURL();
        //String userName = dbmd.getUserName();

        //databasename.setText(dbName);
        //databaseDriver.setText(driverName);
        //databaseUsername.setText(userName);
        //databaseURL.setText(dbUrl);

        if (eredmenyek.size()>0){
            item_Adapter = new ItemAdapter(thisContext, eredmenyek);
            eredmenytabla.setAdapter(item_Adapter);
        }
    }

}

