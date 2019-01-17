<%@ Page Title="Home Page" Language="C#" MasterPageFile="~/Site.Master" AutoEventWireup="true" CodeFile="Default.aspx.cs" Inherits="_Default" %>

<asp:Content ID="BodyContent" ContentPlaceHolderID="MainContent" runat="server">

   <div _designerregion="0">
    <h2>Najwyżej oceniony film wg FILMWEB</h2>
    <h3>Skazani na Shawshank</h3>
    <h4><em>The Shawshank Redemption</em></h4>		
		<figure>
			<img src ="img/skazani.jpg" alt="Skazani"/>
			<figcaption><em>Skazani na Shawshank </em>Plakat filmu.</figcaption>
		</figure>
    <article>
		<header>
			<h5>Źródło
			<em><a href="https://www.filmweb.pl/Skazani.Na.Shawshank"> Skazani na Shawshank </a></em>
			</h5>
		</header>
		<p1><b>Streszczenie:</b>
		Adaptacja opowiadania <mark>Stephena Kinga.</mark> Niesłusznie skazany na dożywocie bankier, stara się przetrwać w brutalnym, więziennym świecie.
		</p1>
		<details>
			<summary>Ocena użytkowników: <meter min="0" max ="10" value="9"></meter>8,8/10</summary>
		</details>
	</article>
	<aside>
		Film oceniło ponad 800 tys. widzów
	</aside>
    </div>

    
</asp:Content>
