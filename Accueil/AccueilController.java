package Accueil;

import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Label;


public class AccueilController implements Initializable 
{
    
    @FXML
    private Label label;
    
    @FXML
    private void next(ActionEvent event) 
    {
        System.out.println("You clicked me!");
        
    }
    
    
    @FXML
    private void tableButton(ActionEvent event)
    {
        //int idTable = ;
    }
    
    
    @Override
    public void initialize(URL url, ResourceBundle rb) 
    {
        // TODO
    }    
    
}
