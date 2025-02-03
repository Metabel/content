package com.example.animal;

public class hen extends Bird{
    public hen(String name) {
        super(name);
    }
    //Implementing abstract method
    public void layseggs(){
        System.out.println(name +" hen layEggs");
    }
}
