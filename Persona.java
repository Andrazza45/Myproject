/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 *
 * @author icts22-24.230
 */
public abstract class Persona {
protected String codfisc;
protected String nome;
protected String cognome;
protected int età;
public Persona(String codfisc, String nome, String cognome)
{
    this.codfisc = codfisc;
    this.nome = nome;
    this.cognome = cognome;
}
public int Geteta()
{
return età;}
public int Seteta(int e)
{
return this.età = e;}
public String codfisc()
{return codfisc;}
public String Get_nome()
{return nome;}
public String Get_cognome()
{return cognome;}


public abstract void StampaP();

public  static class Studente extends Persona{
    
public Studente(String codfisc, String nome, String cognome)
{
    super(codfisc, nome, cognome);
}
//public int Geteta()
//{
//return età;}
//public String codfisc()
//{return codfisc;}
//public String Get_nome()
//{return nome;}
//public String Get_cognome()
//{return cognome;}
  @Override
  public void StampaP() {
         System.out.println(codfisc+nome+cognome);
        }
    }
    /**
     * @param args the command line arguments
     */
    public static void main(String args[]) {
    Studente studente1 = new Studente("wdefe43s33re46y", "Giorgio","Den");
    Studente studente2 = new Studente("wdefe43s33re46y", "Giorgio","Den");
    Studente studente3 = new Studente("wdefe43s33re46y", "Giorgio","Den");
    Studente studente4 = new Studente("wdefe43s33re46y", "Giorgio","Den");
    Studente studente5 = new Studente("wdefe43s33re46y", "Giorgio","Den");
    Studente studente6 = new Studente("wdefe43s33re46y", "Giorgio","Den");
    Studente studente7 = new Studente("wdefe43s33re46y", "Giorgio","Den");
    studente1.StampaP();
    
    
    }
}
