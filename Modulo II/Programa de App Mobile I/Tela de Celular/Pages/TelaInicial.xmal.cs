using TelaCelular.Models;
using Xamarin.Forms;

namespace TelaCelular
{
public partial class TelaInicial : ContentPage
{
    public TelaInicial()
    {
        InitializeComponent();
    }

    async void OnCelular1Clicked(object sender, EventArgs e)
    {
        var celular1 = new Celular
        {
            Marca = "Samsung",
            Modelo = "Galaxy S24 Ultra",
            Cor = "Preto",
            Preco = 5309.10,
            SistemaOperacional = "Android"
        };
        await Navigation.PushAsync(new Celular(celular1));
    }

    async void OnCelular2Clicked(object sender, EventArgs e)
    {
        var celular2 = new Celular
        {
            Marca = "Xiaomi",
            Modelo = "Redmi Note 13 Pro",
            Cor = "Preto Grafite",
            Preco = 2106.90,
            SistemaOperacional = "Android"
        };
        await Navigation.PushAsync(new Celular(celular2));
    }

    async void OnCelular3Clicked(object sender, EventArgs e)
    {
        var celular3 = new Celular
        {
            Marca = "Motorola",
            Modelo = "Edge 50 Neo",
            Cor = "Latte",
            Preco = 1999.00,
            SistemaOperacional = "Android"
        };
        await Navigation.PushAsync(new Celular(celular3));
    }

    async void OnCelular4Clicked(object sender, EventArgs e)
    {
        var celular4 = new Celular
        {
            Marca = "Samsung",
            Modelo = "Galaxy A55",
            Cor = "Azul Claro",
            Preco = 1699.20,
            SistemaOperacional = "Android"
        };
        await Navigation.PushAsync(new Celular(celular4));
    }
}
}
