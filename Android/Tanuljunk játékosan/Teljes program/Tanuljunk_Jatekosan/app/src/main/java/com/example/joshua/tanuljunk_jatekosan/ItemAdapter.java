package com.example.joshua.tanuljunk_jatekosan;

import android.content.Context;
import android.graphics.Color;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.BaseAdapter;
import android.widget.Button;
import android.widget.TextView;

import java.util.ArrayList;
import java.util.List;
import java.util.Map;

public class ItemAdapter extends BaseAdapter {
    LayoutInflater mInflater;
    Map<Integer, Integer> map;
    List<Integer> kerdessorszam;
    List<Integer> helyese;
    String x = GetData.GetSql();

    public ItemAdapter(Context c, Map m){
        mInflater = (LayoutInflater) c.getSystemService(Context.LAYOUT_INFLATER_SERVICE);
        map = m;
        kerdessorszam = new ArrayList<Integer>(map.keySet());
        helyese = new ArrayList<Integer>(map.values());
    }

    @Override
    public int getCount() {
        return map.size();
    }

    @Override
    public Object getItem(int position) {
        return kerdessorszam.get(position);
    }

    @Override
    public long getItemId(int position) {
        return position;
    }

    @Override
    public View getView(int position, View convertView, ViewGroup parent) {
        View v = mInflater.inflate(R.layout.item_layout, null);
        Button ertekeles = v.findViewById(R.id.btn_eredmeny);
        ertekeles.setText(kerdessorszam.get(position));
        ertekeles.setBackgroundColor((helyese.equals(0)) ? Color.GREEN : Color.RED);
        return v;
    }
}
