package com.example.joshua.tanuljunk_jatekosan;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class DiakRegisztracio extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_diakregisztracio);

        Button TanarRegLink = (Button) findViewById(R.id.btn_TanarRegisztracioLink);
        TanarRegLink.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent tanarRegIntent = new Intent(getApplicationContext(), TanarRegisztracio.class);
                startActivity(tanarRegIntent);
            }
        });


        Button diakRegMegse = findViewById(R.id.btn_DiakRegMegse);
        diakRegMegse.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent diakMegseIntent = new Intent(getApplicationContext(), Login.class);
                startActivity(diakMegseIntent);
            }
        });
    }
}
