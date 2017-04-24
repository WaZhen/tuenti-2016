package ej2;

import java.util.Arrays;
import java.util.Scanner;

public class Ej2 {
	// Wang Zhen Ou
	
	private static int palabrasTotales = 0; // variable para ver el indice por el que vamos del array escaneados
	private static int casos = 0; // variable para los casos a calcular 
	private static int[] inicio; // matriz palabra de inicio de cada caso
	private static int[] ultimo; // matriz palabra final de cada caso
	
	public static void main(String[] args) {

		input();
		algorithm();

	}
	
	public static void input() {
		// input /////////////////////////////////////////////////////////////
		Scanner entrada = new Scanner(System.in);
		System.out.println("Introduce el número de casos");
		casos = entrada.nextInt();
		
		inicio = new int[casos]; // palabra de inicio para el caso i
		ultimo = new int[casos]; // palabra de fin para el caso i
		
		for(int i = 0; i < casos; i++) {
			
			System.out.println("Caso: "+(i+1)+". Introduce dos enteros, inicio y final a escanear.");
			inicio[i] = entrada.nextInt();
			ultimo[i] = entrada.nextInt();
			
		}
		
		entrada.close();
		// input /////////////////////////////////////////////////////////////
	}
	
	public static void algorithm() {
		// algoritmo ////////////////////////////////////////////////////////

		for(int i = 0; i < casos; i++) {
			
			palabrasTotales = 0; // hay que reinicializarlo para cada caso
			
			System.out.print("Case #" +(i+1)+ ": ");
			TextToScan escaneo = new TextToScan();
			int longitud = ultimo[i] - inicio[i]; // variable que contiene la cantidad de palabras a escanear
			Word[] escaneados = new Word[longitud]; // array que contendra instancias de la clase word
			String palabra = null;
			for(int p = 0; p < longitud; p++) {
				escaneados[p] = null;
			}
			
			for(int j = 0; j < inicio[i]; j++){
				
				palabra = escaneo.archivo.next(); // ves pasando de palabra hasta llegar a la de inicio
				
			}
			checkExist(palabrasTotales, palabra, escaneados);
			
			for(int j = 0; j < longitud; j++) {
				
				palabra = escaneo.archivo.next(); // guarda la palabra
				checkExist(palabrasTotales, palabra, escaneados);
				
				
			}
			
			for(int t = palabrasTotales; t < longitud; t ++) {
				escaneados[t] = new Word ("nada" + t);
			}
			
			// a estas alturas ya tenemos escaneados completado
			// ahora hay que hacer un sort en funcion de la propiedad cantidad de cada Word
			Arrays.sort(escaneados);
			System.out.println(escaneados[0].getNombre() + " " + escaneados[0].getCantidad() + ", " + escaneados[1].getNombre() + " " + escaneados[1].getCantidad() + ", " + escaneados[2].getNombre() + " " + escaneados[2].getCantidad());
			
		}
		// algoritmo ////////////////////////////////////////////////////////
	}
	
	public static void checkExist(int palabrasTotales, String palabra, Word [] escaneados) {
		boolean existe = false; // bool para ver si la instancia word ya existia (linea 50)
		
		for(int n = 0; n < palabrasTotales; n++) {

			if(escaneados[n] != null && escaneados[n].getNombre().equals(palabra)) {
				escaneados[n].sumaCantidad(); // aumenta la cantidad de veces que se repite
				existe = true; // ya existia
			}
			
		}
		
		if(!existe) {
			
			escaneados[palabrasTotales] = new Word(palabra);
			Ej2.palabrasTotales++;
			
		}
	}
}
