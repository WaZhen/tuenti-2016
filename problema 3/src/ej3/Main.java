package ej3;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.JTextArea;
import javax.swing.JScrollPane;
import javax.swing.JButton;

public class Main {

	public static void main(String[] args) {

		Ventana miVentana = new Ventana();

	}

}

class Ventana {
	public Ventana() {
		
		JFrame miFrame = new JFrame();
		JPanel miPanel = new JPanel();
		JTextArea miTexto = new JTextArea("Edit to insert input", 10, 40);
		JScrollPane miScrollPane = new JScrollPane(miTexto);
		JButton miBoton = new JButton("Enter");
		miFrame.add(miPanel);
		miPanel.add(miScrollPane);
		miPanel.add(miBoton);
		miFrame.setVisible(true);
		miFrame.setSize(512, 512);
		miFrame.setLocationRelativeTo(null);
		miFrame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		
	}
}