package com.example.joshua.tanuljunk_jatekosan;

import android.content.Intent;
import android.graphics.Color;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class TanarFeladatHozzaadas extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_tanar_feladat_hozzaadas);


        Button tanarFeladatHozzaadVissza = findViewById(R.id.btn_FeladatHozzaadasKesz);
        final Button elsovalasz = findViewById(R.id.btn_1valasz);
        final Button masodikvalasz = findViewById(R.id.btn_2valasz);
        final Button harmadikvalasz = findViewById(R.id.btn_3valasz);
        final Button negyedikvalasz = findViewById(R.id.btn_4valasz);

        tanarFeladatHozzaadVissza.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent feladatkesz = new Intent(getApplicationContext(), TanarBelepettKezdokep.class);
                startActivity(feladatkesz);
            }
        });
        elsovalasz.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                elsovalasz.setBackgroundResource(android.R.drawable.btn_default);
                masodikvalasz.setBackgroundResource(android.R.drawable.btn_default);
                harmadikvalasz.setBackgroundResource(android.R.drawable.btn_default);
                negyedikvalasz.setBackgroundResource(android.R.drawable.btn_default);
                elsovalasz.setBackgroundColor(Color.GREEN);
            }
        });
        masodikvalasz.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                elsovalasz.setBackgroundResource(android.R.drawable.btn_default);
                masodikvalasz.setBackgroundResource(android.R.drawable.btn_default);
                harmadikvalasz.setBackgroundResource(android.R.drawable.btn_default);
                negyedikvalasz.setBackgroundResource(android.R.drawable.btn_default);
                masodikvalasz.setBackgroundColor(Color.GREEN);
            }
        });
        harmadikvalasz.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                elsovalasz.setBackgroundResource(android.R.drawable.btn_default);
                masodikvalasz.setBackgroundResource(android.R.drawable.btn_default);
                harmadikvalasz.setBackgroundResource(android.R.drawable.btn_default);
                negyedikvalasz.setBackgroundResource(android.R.drawable.btn_default);
                harmadikvalasz.setBackgroundColor(Color.GREEN);
            }
        });
        negyedikvalasz.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                elsovalasz.setBackgroundResource(android.R.drawable.btn_default);
                masodikvalasz.setBackgroundResource(android.R.drawable.btn_default);
                harmadikvalasz.setBackgroundResource(android.R.drawable.btn_default);
                negyedikvalasz.setBackgroundResource(android.R.drawable.btn_default);
                negyedikvalasz.setBackgroundColor(Color.GREEN);
            }
        });



    }
}
