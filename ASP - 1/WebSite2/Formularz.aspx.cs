using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class Default2 : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        if(IsPostBack)
        {
            Validate();
            if (IsValid)
            {
                string imie = ImieTextBox.Text;
                string email = EmailTextBox.Text;
                string telefon = TelefonTextBox.Text;
                string wiek = WiekTextBox.Text;

                outputLabel.Text = "Dziękuję za podanie danych! <br/>";
                outputLabel.Text += String.Format(" Imie: {0}{1}E-mail:{2}{1}Telefon:{3}{1}Wiek:{4} ", imie,"<br/>", email, telefon, wiek);
                outputLabel.Visible = true;
            }
        }
    }
}