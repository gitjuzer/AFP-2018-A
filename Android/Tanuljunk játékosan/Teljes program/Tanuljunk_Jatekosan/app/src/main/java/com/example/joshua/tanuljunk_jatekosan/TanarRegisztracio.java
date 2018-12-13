package com.example.joshua.tanuljunk_jatekosan;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class TanarRegisztracio extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_tanar_regisztracio);

        Button DiakRegLink = (Button) findViewById(R.id.btn_TanarRegisztracioLink);
        DiakRegLink.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent diakRegIntent = new Intent(getApplicationContext(), DiakRegisztracio.class);
                startActivity(diakRegIntent);
            }
        });

        Button tanarRegMegse = findViewById(R.id.btn_TanarRegMegse);
        tanarRegMegse.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent tanarMegseIntent = new Intent(getApplicationContext(), Login.class);
                startActivity(tanarMegseIntent);
            }
        });
    }
}
