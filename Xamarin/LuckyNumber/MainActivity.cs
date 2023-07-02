using System;
using Android.App;
using Android.OS;
using Android.Runtime;
using Android.Views;
using AndroidX.AppCompat.Widget;
using AndroidX.AppCompat.App;
using Google.Android.Material.FloatingActionButton;
using Google.Android.Material.Snackbar;
using Android.Widget;

namespace LuckyNumber
{
    [Activity(Label = "@string/app_name", Theme = "@style/AppTheme.NoActionBar", MainLauncher = true)]
    public class MainActivity : AppCompatActivity
    {
        protected override void OnCreate(Bundle savedInstanceState)
        {
            base.OnCreate(savedInstanceState);
            Xamarin.Essentials.Platform.Init(this, savedInstanceState);
            SetContentView(Resource.Layout.activity_main);

            SeekBar rangeSeekBar = FindViewById<SeekBar>(Resource.Id.rangeSeekBar);
            Button rollButton = FindViewById<Button>(Resource.Id.rollButton);
            TextView resultTextView = FindViewById<TextView>(Resource.Id.resultTextView);

            rollButton.Click += (sender, e) =>
            {
                Random rand = new Random();
                int range = rangeSeekBar.Progress;
                int result = rand.Next(range + 1);
                resultTextView.Text = result.ToString();
            };

        }



    }
}
