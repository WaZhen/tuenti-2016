package ej2;

import java.io.File;
import java.io.FileNotFoundException;
import java.util.Scanner;

public class TextToScan{
	// Wang Zhen Ou
	Scanner archivo = null; // inicializo archivo
	public TextToScan() {
		File miArchivo = new File("corpus.txt"); // tomo el archivo corpus.txt
		try{
			archivo = new Scanner(miArchivo); // lo guardo en un buffer scanner
		} catch(FileNotFoundException e) {
			e.printStackTrace();
		}
	}
}
