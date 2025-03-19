public partial class Celular : ContentPage
{
    public Celular(Celular celular)
    {
        InitializeComponent();
        BindingContext = celular;
    }
}
