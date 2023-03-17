
import java.util.ArrayList;
import java.util.HashMap;
import java.util.HashSet;
import java.util.Iterator;
import java.util.List;
import java.util.ListIterator;
import java.util.Map;
import java.util.Set;
import java.util.TreeSet;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 *
 * @author icts22-24.230
 */
public class Automobile {
    private String marca, modello;
    private int cc; 
    public Automobile(String marca,String modello, int cc)
      {
        this.marca = marca;
        this.modello = modello;
        this.cc = cc;
      }
      public int Getcc()
      {
        return this.cc;
      }
      
      public String Getmarca()
      {
        return this.marca;
      }
      public String Getmodello()
      {
        return this.modello;
      }

//....

    @Override
    public boolean equals(Object a)
    {
        boolean eq = false;
        if(this == a) 
        {
        Automobile that = (Automobile)a;
        if(cc != that.Getcc())
           eq = true;
        }
        return eq;


    }



    public String stampa()
    {
        String st = this.marca + Integer.toString(this.cc)+this.modello;
        return  st;
    }
    /**
     * @param args the command line arguments
     */
    public static void main(String args[]) {
        
    Set <Automobile> cars = new HashSet<Automobile>();
    cars.add(new Automobile("Fiat","500",1200));
    cars.add(new Automobile("Toyota","Rov4",1800));
    cars.add(new Automobile("Alfa","Tonale",2200));
    System.out.println(cars);
    Automobile a = new Automobile("Subaru","Sub",2200);
    System.out.println("Set contiene:"+cars.contains(a));
    for(Automobile o : cars)
    {
        System.out.println(o.stampa());
    }
    Set <Object> numeriOrdinati = new TreeSet<Object>();
    numeriOrdinati.add(1);
    numeriOrdinati.add(-6);
    numeriOrdinati.add(51);
    numeriOrdinati.add(23);
    System.out.println("TreeSet ordinato:"+ numeriOrdinati);
    
    
    
    
    Iterator<Automobile> it = cars.iterator();
    while (it.hasNext()){
     
    Automobile automobile = it.next();
    System.out.println(automobile.Getmarca());
     }
    
    
     List<String> citta = new ArrayList<>();
     citta.add("Belluno");
     citta.add(null);
     citta.add("Cremona");
     citta.add("Siracusa");
     citta.add("Torino");
     System.out.println("citta:"+citta);
     citta.add(2,"Trieste");
     System.out.println("citta:"+ citta);
     System.out.println("La prima occorrenza di Torino si trova in:"+ citta.lastIndexOf("Torino"));
     System.out.println("La prima occorrenza di Aosta si trova in:"+ citta.lastIndexOf("Aosta"));
     System.out.println("Le ultime tre occorrenze della lista sono:"+ citta.subList(citta.size()-3, citta.size()));
     
     Iterator<String> iter = citta.iterator();
     while(iter.hasNext())
     {
      System.out.println(iter.next());
     }   
        
    
     
//     System.out.println("ITERATORE_Bidirezionale");
//     
//     ListIterator<String> list = ListIterator(citta.size());
//     while(list.hasPrevious())
//     {
//      System.out.println(list.previous());
//     }
     Map<String, String> map = new HashMap<>();
     map.put("Piemonte","Novara");
     map.put("Lombardia","Milano");
     map.put("Friuli Venezia Giulia","TRIESTE");
     map.put("Basilicata","Potenza");
     map.put("Umbria","Perugia");
     map.put("Molise","Campobasso");
     map.remove("Lombardia");
     System.out.println("Elementi all'interno della mappa:"+ map.size());
     System.out.println(map);
     //Recupero un elemento specifico della mappa per chiave
     System.out.println(map.get("Molise"));

//     Map<String, String> entryset = map.entryset();
//     for(map.Entry<String, String> entry : entrySet)
//     {
//      System.out.println(entry.getKey() + "-->"+ entry.getValue());
//     }
//     System.out.println("Mappa 2");
//     Iterator<Map.Entry<String, String> it = entrySet.iterator();
//     while(list.hasPrevious())
//     {
//      Map.Entry<String, String> x = it.next();
//      System.out.println(x.getKey() + "-->"+ x.getValue());
//        
//     }
    }





}
