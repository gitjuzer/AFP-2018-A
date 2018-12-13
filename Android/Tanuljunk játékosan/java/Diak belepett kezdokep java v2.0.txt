package com.example.joshua.tanuljunk_jatekosan;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class DiakBelepettKezdokep extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_diak_belepett_kezdokep);

        Button diakTemakorMatek = findViewById(R.id.btn_DiakTemakorMatematika);
        Button diakTemakorAngol = findViewById(R.id.btn_DiakTemakorAngol);
        Button diakTemakorProg = findViewById(R.id.btn_DiakTemakorProgramozas);

        diakTemakorMatek.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent matekfeladatintent = new Intent(getApplicationContext(), FeladatNezet.class);
                startActivity(matekfeladatintent);
            }
        });

        diakTemakorAngol.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent angolfeladatintent = new Intent(getApplicationContext(), FeladatNezet.class);
                startActivity(angolfeladatintent);
            }
        });

        diakTemakorProg.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent progfeladatintent = new Intent(getApplicationContext(), FeladatNezet.class);
                startActivity(progfeladatintent);
            }
        });

    }
}
