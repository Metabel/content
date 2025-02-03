package com.example.animal;

public class Bird implements animal{
    public String name;
    public Bird(String name){
        this.name = name;
    }
    public void eat(){
        System.out.println(name + " hen is going to eat");
    }

    public void layEggs() {

    }
}
