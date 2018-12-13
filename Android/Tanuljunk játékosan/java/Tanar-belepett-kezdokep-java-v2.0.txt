package com.example.joshua.tanuljunk_jatekosan;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class TanarBelepettKezdokep extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_tanar_belepett_kezdokep);


        Button tanarTemakorMatek = findViewById(R.id.btn_TanarTemakorMatematika);
        Button tanarTemakorAngol = findViewById(R.id.btn_TanarTemakorAngol);
        Button tanarTemakorProg = findViewById(R.id.btn_TanarTemakorProgramozas);

        tanarTemakorMatek.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent matekIntent = new Intent(getApplicationContext(), TanarFeladatHozzaadas.class);
                startActivity(matekIntent);
            }
        });

        tanarTemakorAngol.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent angolIntent = new Intent(getApplicationContext(), TanarFeladatHozzaadas.class);
                startActivity(angolIntent);
            }
        });

        tanarTemakorProg.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent progIntent = new Intent(getApplicationContext(), TanarFeladatHozzaadas.class);
                startActivity(progIntent);
            }
        });
    }
}
