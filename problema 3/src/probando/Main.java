package probando;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.JTextArea;
import javax.swing.JScrollPane;

public class Main {

	public static void main(String[] args) {

		JFrame miFrame = new JFrame();
		JPanel miPanel = new JPanel();
		JTextArea miTexto = new JTextArea("Edit to insert input", 10, 40);
		miFrame.add(miPanel);
		miPanel.add(miTexto);
		miFrame.setVisible(true);
		miFrame.setSize(512, 512);
		miFrame.setLocationRelativeTo(null);
		miFrame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);

	}

}



