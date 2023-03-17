/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Esempio;

import java.text.ParseException;
import java.util.Date;
//import java.time; 
        
/**
 *
 * @author icts22-24.230
 */
public class Esempio2 {
    
    public void Divzero()
    {
    int a,b;
    a = 10;
    b = 0;
    int ris; 
    try
    {
        ris = a/b; 
    }
    catch(ArithmeticException exc){System.out.println("Divisione per 0!");}
    finally { 

    System.out.println("Tentativo di divisione"); 
    } 
    }
    
    
    public float ValidaFloat()
    {
    String a;
    a = "1.4";
    float b;
    //while
    try
    {
     Float.parseFloat(a);
    }
    catch(Exception exc){System.out.println("Tipo non float!");}
    finally { 
    
    System.out.println("Tentativo di validazione!"); 
    } 
    b = Float.parseFloat(a);
    return b;
    }
    
    /**
     * @param args the command line arguments
     */
    public enum sett
    {LUNEDI,MARTEDI,MERCOLEDI,GIOVEDI,VENERDI,SABATO,DOMENICA;}
    public enum rosadeiventi
    {NORD,SUD,EST,OVEST,NORDEST,NORDOVEST,SUDOVEST,SUDEST;}
     public enum mesi
    {GENNAIO,FEBBRAIO,MARZO,APRILE,MAGGIO,GIUGNO,LUGLIO,AGOSTO,SETTEMBRE,OTTOBRE,NOVEMBRE,DICEMBRE;}
    private char abbreviazione;
    public char getabbreviazione()
    {
        return abbreviazione;
    }
    public static void main(String args[]) {
           System.out.print("Hello!"+"\n");
           System.out.print(sett.MARTEDI+"\n");
           for(sett s: sett.values())
           {
               System.out.println(s);
           }
           System.out.print("Verifico la presenza di un elemento all'interno di un enum --");
           sett.valueOf( "MARTEDI");
           
           System.out.println("ORDINA:"+sett.MARTEDI.ordinal());
           
           for(rosadeiventi rv: rosadeiventi.values())
           {
               System.out.println(rv);
           }
           
           
           for(mesi ms: mesi.values())
           {
                   
               System.out.println(ms);
           }
    }
}
