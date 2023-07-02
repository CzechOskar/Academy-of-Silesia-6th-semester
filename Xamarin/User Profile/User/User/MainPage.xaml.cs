using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using Xamarin.Forms;
using Xamarin.Forms.Xaml;

namespace User
{
    [XamlCompilation(XamlCompilationOptions.Compile)]
    public partial class MainPage : ContentPage
    {
        public MainPage()
        {
            InitializeComponent();
        }

        private void OnBoxTapped(object sender, EventArgs e)
        {
            BoxView boxView = (BoxView)sender;
            Color boxColor = boxView.Color;

            if (boxColor == Color.Gray)
            {
                boxView.Color = Color.Yellow;
            }
            else if (boxColor == Color.Yellow)
            {
                boxView.Color = Color.Gray;
            }
        }
    }
}
