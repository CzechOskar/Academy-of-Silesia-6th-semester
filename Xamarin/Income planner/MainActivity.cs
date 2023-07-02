using Android.App;
using Android.OS;
using Android.Runtime;
using Android.Widget;
using AndroidX.AppCompat.App;
using Org.W3c.Dom;
using System;

namespace Income_planner
{
    [Activity(Label = "@string/app_name", Theme = "@style/AppTheme", MainLauncher = true)]
    public class MainActivity : AppCompatActivity
    {

        EditText incomePerHourEditText, workHourPerDayEditText, taxRateEditText, savingRateEditText;
        TextView workSummaryTextView, grossIncomeTextView, taxPayableTextView, annualSavingsTextView, spendableIncomeTextView;
        Button calculateButton;
        protected override void OnCreate(Bundle savedInstanceState)
        {
            base.OnCreate(savedInstanceState);
            Xamarin.Essentials.Platform.Init(this, savedInstanceState);
            // Set our view from the "main" layout resource
            SetContentView(Resource.Layout.activity_main);


            incomePerHourEditText = FindViewById<EditText>(Resource.Id.incomePerHourEditText);
            workHourPerDayEditText = FindViewById<EditText>(Resource.Id.workHourPerDayEditText);
            taxRateEditText = FindViewById<EditText>(Resource.Id.taxRateEditText);
            savingRateEditText = FindViewById<EditText>(Resource.Id.savingRateEditText);
            workSummaryTextView = FindViewById<TextView>(Resource.Id.workSummaryTextView);
            grossIncomeTextView = FindViewById<TextView>(Resource.Id.grossIncomeTextView);
            taxPayableTextView = FindViewById<TextView>(Resource.Id.taxPayableTextView);
            annualSavingsTextView = FindViewById<TextView>(Resource.Id.annualSavingsTextView);
            spendableIncomeTextView = FindViewById<TextView>(Resource.Id.spendableIncomeTextView);
            calculateButton = FindViewById<Button>(Resource.Id.calculateButton);

            calculateButton.Click += CalculateButton_Click;


        }

        private void CalculateButton_Click(object sender, System.EventArgs e)
        {
            try
            {
                // Konwertujemy wprowadzone wartości na liczby zmiennoprzecinkowe
                double incomePerHour = Double.Parse(incomePerHourEditText.Text);
                double workHourPerDay = Double.Parse(workHourPerDayEditText.Text);
                double taxRate = Double.Parse(taxRateEditText.Text) / 100;
                double savingRate = Double.Parse(savingRateEditText.Text) / 100;

                // Obliczamy roczny dochód brutto
                double annualGrossIncome = incomePerHour * workHourPerDay * 5 * 52;

                // Obliczamy roczną kwotę podatku
                double annualTax = annualGrossIncome * taxRate;

                // Obliczamy roczne oszczędności
                double annualSavings = annualGrossIncome * savingRate;

                // Obliczamy roczny dochód do wydania
                double spendableIncome = annualGrossIncome - annualTax - annualSavings;

                // Wypisujemy wyniki
                workSummaryTextView.Text = $"Całkowita liczba godzin w roku {workHourPerDay * 5 * 52}";
                grossIncomeTextView.Text = $"Kwota przychodu: {annualGrossIncome}";
                taxPayableTextView.Text = $"Kwota opodatkowania: {annualTax}";
                annualSavingsTextView.Text = $"Oszczędności: {annualSavings}";
                spendableIncomeTextView.Text = $"Kwota dochodu: {spendableIncome}";
            }
            catch (FormatException)
            {
                // Wypisz komunikat o błędzie, jeśli którykolwiek z wprowadzonych tekstów nie mógł zostać przekształcony na liczbę
                Toast.MakeText(this, "Invalid input. Please enter valid numbers.", ToastLength.Short).Show();
            }
        }

    }



}