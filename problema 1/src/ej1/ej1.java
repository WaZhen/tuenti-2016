package ej1;

import java.util.Scanner;

public class ej1 {
	// Wang Zhen Ou
	// https://contest.tuenti.net/resources/2016/Question_1.html
	public static void main(String[] args) {
		
		Scanner entrada = new Scanner(System.in);
		System.out.println("introduce la cantidad de casos a calcular");
		int casos = entrada.nextInt();
		int[] comensales = new int[casos];
		int[] mesas = new int[casos];
		for(int i = 0; i < casos; i++) {
			System.out.println("Introduce comensales caso " + (i+1));
			comensales[i] = entrada.nextInt();
			if(comensales [i] <= 4) {
				mesas[i] = 1;
			}
			else if(comensales[i] <= 6) {
				mesas[i] = 2;
			}
			else{
				mesas[i] = 2;
				comensales[i] -= 6;
				mesas[i] += (int) Math.ceil((double)comensales[i] / 2);
			}
		}
		for(int i = 0; i < casos; i++) {
			System.out.println("#Case " + i + ": " + mesas[i]);
		}
		entrada.close();
	}
}

