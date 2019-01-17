<%@ Page Title="Formularz" Language="C#" MasterPageFile="~/Site.Master" AutoEventWireup="true" CodeFile="Formularz.aspx.cs" Inherits="Default2" %>

<asp:Content ID="BodyContent" ContentPlaceHolderID="MainContent" runat="server">
        <div>
            <h1>Uzupełnij formularz:</h1>
        </div>
        <table class="nav-justified">
            <tr>
                <td>Imie:</td>
                <td>
                    <asp:TextBox ID="ImieTextBox" runat="server"></asp:TextBox>
                    przykład: Jan
                    <asp:RequiredFieldValidator ID="imieRequiredFieldValidator1" runat="server" ErrorMessage="Wpisz swoje imie" ControlToValidate="ImieTextBox" ForeColor="Red" Display="Dynamic"></asp:RequiredFieldValidator>
                </td>
            </tr>
            <tr>
                <td>Powtórz imie:</td>
                <td>
                    <asp:TextBox ID="Imie2TextBox" runat="server"></asp:TextBox>
                    przykład: Jan
                    <asp:RequiredFieldValidator ID="Imie2RequiredFieldValidator" runat="server" ErrorMessage="Wpisz swoje imie" ControlToValidate="Imie2TextBox" ForeColor="Red" Display="Dynamic"></asp:RequiredFieldValidator>
                    <asp:CompareValidator ID="Imie2CompareValidator" runat="server" ErrorMessage="błędne imie" ControlToCompare="ImieTextBox" ControlToValidate="Imie2TextBox" Display="Dynamic" ForeColor="Red"></asp:CompareValidator>
                </td>
            </tr>
            <tr>
                <td>Wiek:</td>
                <td>
                    <asp:TextBox ID="WiekTextBox" runat="server"></asp:TextBox>
                    przykład: 18
                    <asp:RequiredFieldValidator ID="WiekRequiredFieldValidator" runat="server" ErrorMessage="Wpisz swój wiek" ControlToValidate="WiekTextBox" ForeColor="Red" Display="Dynamic"></asp:RequiredFieldValidator>                   
                    <asp:RangeValidator ID="RangeValidator1" runat="server" ErrorMessage="Błędny wiek" ControlToValidate="WiekTextBox" Display="Dynamic" ForeColor="Red" MaximumValue="99" MinimumValue="18"></asp:RangeValidator>
                </td>
            </tr>
            <tr>
                <td>Email:</td>
                <td>
                    <asp:TextBox ID="EmailTextBox" runat="server"></asp:TextBox>
                    przykład: nazwa@domenta.pl
                    <asp:RequiredFieldValidator ID="RequiredFieldValidator1" runat="server" ErrorMessage="Wpisz email" ControlToValidate="EmailTextBox" ForeColor="Red" Display="Dynamic"></asp:RequiredFieldValidator>                   
                    <asp:RegularExpressionValidator ID="EmailRegularExpressionValidator" runat="server" ErrorMessage="Wpisz email zgodnie ze wzorcem" ControlToValidate="EmailTextBox" Display="Dynamic" ForeColor="Red" ValidationExpression="\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*"></asp:RegularExpressionValidator>
                </td>
            </tr>
            <tr>
                <td>Telefon:</td>
                <td>
                    <asp:TextBox ID="TelefonTextBox" runat="server"></asp:TextBox>   
                    przykład: (555) 555-1234
                    <asp:RequiredFieldValidator ID="RequiredFieldValidator2" runat="server" ErrorMessage="Wpisz swój numer telefonu" ControlToValidate="TelefonTextBox" ForeColor="Red" Display="Dynamic"></asp:RequiredFieldValidator>                   
                    <asp:RegularExpressionValidator ID="TelefonRegularExpressionValidator2" runat="server" ErrorMessage="Zły format telefonu" ControlToValidate="TelefonTextBox" Display="Dynamic" ForeColor="Red" ValidationExpression="((\(\d{3}\) ?)|(\d{3}-))?\d{3}-\d{4}"></asp:RegularExpressionValidator>
                </td>
            </tr>
        </table>
    <asp:Button ID="submitButton" runat="server" Text="Zapisz" />
    <br/>
    <asp:Label ID="outputLabel" runat="server" Text="Label" Visible="False">
    </asp:Label>
</asp:Content>

