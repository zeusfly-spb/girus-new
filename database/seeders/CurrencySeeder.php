<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currencies = [
            ['currency_id' => 'AMD', 'code' => 'R01060', 'name' => 'Армянских драмов'],
            ['currency_id' => 'AUD', 'code' => 'R01010', 'name' => 'Австралийский доллар'],
            ['currency_id' => 'AZN', 'code' => 'R01020A', 'name' => 'Азербайджанский манат'],
            ['currency_id' => 'BGN', 'code' => 'R01100', 'name' => 'Болгарский лев'],
            ['currency_id' => 'BRL', 'code' => 'R01115', 'name' => 'Бразильский реал'],
            ['currency_id' => 'BYN', 'code' => 'R01090B', 'name' => 'Белорусский рубль'],
            ['currency_id' => 'CAD', 'code' => 'R01350', 'name' => 'Канадский доллар'],
            ['currency_id' => 'CHF', 'code' => 'R01775', 'name' => 'Швейцарский франк'],
            ['currency_id' => 'CNY', 'code' => 'R01375', 'name' => 'Китайский юань'],
            ['currency_id' => 'CZK', 'code' => 'R01760', 'name' => 'Чешских крон'],
            ['currency_id' => 'DKK', 'code' => 'R01215', 'name' => 'Датских крон'],
            ['currency_id' => 'EUR', 'code' => 'R01239', 'name' => 'Евро'],
            ['currency_id' => 'GBP', 'code' => 'R01035', 'name' => 'Фунт стерлингов Соединенного королевства'],
            ['currency_id' => 'HKD', 'code' => 'R01200', 'name' => 'Гонконгских долларов'],
            ['currency_id' => 'HUF', 'code' => 'R01135', 'name' => 'Венгерских форинтов'],
            ['currency_id' => 'INR', 'code' => 'R01270', 'name' => 'Индийских рупий'],
            ['currency_id' => 'KGS', 'code' => 'R01370', 'name' => 'Кыргызских сомов'],
            ['currency_id' => 'KRW', 'code' => 'R01815', 'name' => 'Вон Республики Корея'],
            ['currency_id' => 'KZT', 'code' => 'R01335', 'name' => 'Казахстанских тенге'],
            ['currency_id' => 'MDL', 'code' => 'R01500', 'name' => 'Молдавских леев'],
            ['currency_id' => 'NOK', 'code' => 'R01535', 'name' => 'Норвежских крон'],
            ['currency_id' => 'PLN', 'code' => 'R01565', 'name' => 'Польский злотый'],
            ['currency_id' => 'RON', 'code' => 'R01585F', 'name' => 'Румынский лей'],
            ['currency_id' => 'SEK', 'code' => 'R01770', 'name' => 'Шведских крон'],
            ['currency_id' => 'SGD', 'code' => 'R01625', 'name' => 'Сингапурский доллар'],
            ['currency_id' => 'TJS', 'code' => 'R01710', 'name' => 'Таджикских сомони'],
            ['currency_id' => 'TMT', 'code' => 'R01710A', 'name' => 'Новый туркменский манат'],
            ['currency_id' => 'TRY', 'code' => 'R01700J', 'name' => 'Турецкая лира'],
            ['currency_id' => 'UAH', 'code' => 'R01720', 'name' => 'Украинских гривен'],
            ['currency_id' => 'USD', 'code' => 'R01235', 'name' => 'Доллар США'],
            ['currency_id' => 'UZS', 'code' => 'R01717', 'name' => 'Узбекских сумов'],
            ['currency_id' => 'XDR', 'code' => 'R01589', 'name' => 'СДР (специальные права заимствования)'],
            ['currency_id' => 'ZAR', 'code' => 'R01810', 'name' => 'Южноафриканских рэндов'],
        ];
        foreach ($currencies as $currency) {
            Currency::updateOrCreate(
                ['currency_id' => $currency['currency_id']],
                $currency
            );
        }
    }
}
