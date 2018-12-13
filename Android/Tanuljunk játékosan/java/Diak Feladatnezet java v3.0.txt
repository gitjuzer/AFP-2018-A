package com.example.joshua.tanuljunk_jatekosan;

import android.graphics.Color;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class FeladatNezet extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_feladat_nezet);

        final Button elsovalaszdiak = findViewById(R.id.btn_1valasz);
        final Button masodikvalaszdiak = findViewById(R.id.btn_2valasz);
        final Button harmadikvalaszdiak = findViewById(R.id.btn_3valasz);
        final Button negyedikvalaszdiak = findViewById(R.id.btn_4valasz);

        elsovalaszdiak.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                elsovalaszdiak.setBackgroundResource(android.R.drawable.btn_default);
                masodikvalaszdiak.setBackgroundResource(android.R.drawable.btn_default);
                harmadikvalaszdiak.setBackgroundResource(android.R.drawable.btn_default);
                negyedikvalaszdiak.setBackgroundResource(android.R.drawable.btn_default);
                elsovalaszdiak.setBackgroundColor(Color.GREEN);
            }
        });

        masodikvalaszdiak.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                elsovalaszdiak.setBackgroundResource(android.R.drawable.btn_default);
                masodikvalaszdiak.setBackgroundResource(android.R.drawable.btn_default);
                harmadikvalaszdiak.setBackgroundResource(android.R.drawable.btn_default);
                negyedikvalaszdiak.setBackgroundResource(android.R.drawable.btn_default);
                masodikvalaszdiak.setBackgroundColor(Color.GREEN);
            }
        });

        harmadikvalaszdiak.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                elsovalaszdiak.setBackgroundResource(android.R.drawable.btn_default);
                masodikvalaszdiak.setBackgroundResource(android.R.drawable.btn_default);
                harmadikvalaszdiak.setBackgroundResource(android.R.drawable.btn_default);
                negyedikvalaszdiak.setBackgroundResource(android.R.drawable.btn_default);
                harmadikvalaszdiak.setBackgroundColor(Color.GREEN);
            }
        });

        negyedikvalaszdiak.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                elsovalaszdiak.setBackgroundResource(android.R.drawable.btn_default);
                masodikvalaszdiak.setBackgroundResource(android.R.drawable.btn_default);
                harmadikvalaszdiak.setBackgroundResource(android.R.drawable.btn_default);
                negyedikvalaszdiak.setBackgroundResource(android.R.drawable.btn_default);
                negyedikvalaszdiak.setBackgroundColor(Color.GREEN);
            }
        });
    }
}
