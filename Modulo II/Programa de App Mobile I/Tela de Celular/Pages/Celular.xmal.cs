using TelaCelular.Models;
using Xamarin.Forms;

namespace TelaCelular
{
public partial class Celular : ContentPage
{
    public Celular(Celular celular)
    {
        InitializeComponent();
        BindingContext = celular;
    }
}
}