package com.example.joshua.tanuljunk_jatekosan;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

public class Login extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);

        Button regbutton = (Button) findViewById(R.id.btn_Regisztracio);
        regbutton.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent regintent = new Intent(getApplicationContext(), DiakRegisztracio.class);
                startActivity(regintent);
            }
        });

        Button bejelentkezesbutton = (Button) findViewById(R.id.btn_Belepes);
        bejelentkezesbutton.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                EditText felhNev = findViewById(R.id.et_FelhNev);
                String input = felhNev.getText().toString();
                if (input.equals("Diák")) {
                    Intent bejelintent = new Intent(getApplicationContext(), DiakBelepettKezdokep.class);
                    startActivity(bejelintent);
                }
                else if (input.equals("Tanár")){
                    Intent bejelintent = new Intent(getApplicationContext(), TanarBelepettKezdokep.class);
                    startActivity(bejelintent);
                }
                else{
                    TextView hibaUzenet = findViewById(R.id.tv_LoginHibasAdat);
                    hibaUzenet.setText("Hibás adatok ");
                }
            }
         });


    }
}
