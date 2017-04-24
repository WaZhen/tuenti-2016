package ej2;

/* clase word que contiene la informacion de el nombre de la string y la 
 * cantidad de veces que se repite
*/
public class Word implements Comparable<Object>{
	// Wang Zhen Ou
	public Word(String argName) {
		nombre = argName;
		cantidad = 1;
	}
	
	private int cantidad;
	private String nombre;
	
	public void sumaCantidad() {
		cantidad ++;
	}
	
	public String getNombre() {
		return nombre;
	}
	
	public int getCantidad() {
		return cantidad;
	}
	
	@Override
	public int compareTo(Object miObjeto) {
		
		Word comparando = (Word)miObjeto; // refundicion para usar los metodos

		if(cantidad < comparando.getCantidad()) {
			return 1;
		}
		else if (cantidad > comparando.getCantidad()) {
			return -1;
		}
		else{
			return 0;
		}
		
	}

}
