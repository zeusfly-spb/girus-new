<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            ['name_ru' => 'Австралия', 'name' => json_encode(['ru' => 'Австралия'])],
            ['name_ru' => 'Австрия', 'name' => json_encode(['ru' => 'Австрия'])],
            ['name_ru' => 'Узбекистан', 'name' => json_encode(['ru' => 'Узбекистан'])],
            ['name_ru' => 'Азербайджан', 'name' => json_encode(['ru' => 'Азербайджан'])],
            ['name_ru' => 'Аргентина', 'name' => json_encode(['ru' => 'Аргентина'])],
            ['name_ru' => 'Ангуилья остров', 'name' => json_encode(['ru' => 'Ангуилья остров'])],
            ['name_ru' => 'Албания', 'name' => json_encode(['ru' => 'Албания'])],
            ['name_ru' => 'Алжир', 'name' => json_encode(['ru' => 'Алжир'])],
            ['name_ru' => 'Британские Виргинские Острова (США)', 'name' => json_encode(['ru' => 'Британские Виргинские Острова (США)'])],
            ['name_ru' => 'Американское Самоа', 'name' => json_encode(['ru' => 'Американское Самоа'])],
            ['name_ru' => 'Ангилья', 'name' => json_encode(['ru' => 'Ангилья'])],
            ['name_ru' => 'Антигуа', 'name' => json_encode(['ru' => 'Антигуа'])],
            ['name_ru' => 'Аруба', 'name' => json_encode(['ru' => 'Аруба'])],
            ['name_ru' => 'Антигуа и Барбуда', 'name' => json_encode(['ru' => 'Антигуа и Барбуда'])],
            ['name_ru' => 'Армения', 'name' => json_encode(['ru' => 'Армения'])],
            ['name_ru' => 'Гренада', 'name' => json_encode(['ru' => 'Гренада'])],
            ['name_ru' => 'Барбадос', 'name' => json_encode(['ru' => 'Барбадос'])],
            ['name_ru' => 'Багамские Острова', 'name' => json_encode(['ru' => 'Багамские Острова'])],
            ['name_ru' => 'Бахрейн', 'name' => json_encode(['ru' => 'Бахрейн'])],
            ['name_ru' => 'Беноа', 'name' => json_encode(['ru' => 'Беноа'])],
            ['name_ru' => 'Белиз', 'name' => json_encode(['ru' => 'Белиз'])],
            ['name_ru' => 'Бенин', 'name' => json_encode(['ru' => 'Бенин'])],
            ['name_ru' => 'Бермуды', 'name' => json_encode(['ru' => 'Бермуды'])],
            ['name_ru' => 'Бегумпет', 'name' => json_encode(['ru' => 'Бегумпет'])],
            ['name_ru' => 'Болгария', 'name' => json_encode(['ru' => 'Болгария'])],
            ['name_ru' => 'Боливия', 'name' => json_encode(['ru' => 'Боливия'])],
            ['name_ru' => 'Босния, Синт-Статиус и Саба', 'name' => json_encode(['ru' => 'Босния, Синт-Статиус и Саба'])],
            ['name_ru' => 'Босния и Герцеговина', 'name' => json_encode(['ru' => 'Босния и Герцеговина'])],
            ['name_ru' => 'Ботсвана', 'name' => json_encode(['ru' => 'Ботсвана'])],
            ['name_ru' => 'Бразилия', 'name' => json_encode(['ru' => 'Бразилия'])],
            ['name_ru' => 'Британская территория в Индийском океане', 'name' => json_encode(['ru' => 'Британская территория в Индийском океане'])],
            ['name_ru' => 'Британские Острова (Бермудские острова)', 'name' => json_encode(['ru' => 'Британские Острова (Бермудские острова)'])],
            ['name_ru' => 'Бруней', 'name' => json_encode(['ru' => 'Бруней'])],
            ['name_ru' => 'Бруней-Даруссалам', 'name' => json_encode(['ru' => 'Бруней-Даруссалам'])],
            ['name_ru' => 'Буркина', 'name' => json_encode(['ru' => 'Буркина'])],
            ['name_ru' => 'Бурунди', 'name' => json_encode(['ru' => 'Бурунди'])],
            ['name_ru' => 'Бутан', 'name' => json_encode(['ru' => 'Бутан'])],
            ['name_ru' => 'Вануату', 'name' => json_encode(['ru' => 'Вануату'])],
            ['name_ru' => 'Венгрия', 'name' => json_encode(['ru' => 'Венгрия'])],
            ['name_ru' => 'Венера', 'name' => json_encode(['ru' => 'Венера'])],
            ['name_ru' => 'Венесуэла', 'name' => json_encode(['ru' => 'Венесуэла'])],
            ['name_ru' => 'Британские Виргинские Острова', 'name' => json_encode(['ru' => 'Британские Виргинские Острова'])],
            ['name_ru' => 'Восточный Тимор', 'name' => json_encode(['ru' => 'Восточный Тимор'])],
            ['name_ru' => 'Фалкон', 'name' => json_encode(['ru' => 'Фалкон'])],
            ['name_ru' => 'Фиджи', 'name' => json_encode(['ru' => 'Фиджи'])],
            ['name_ru' => 'Фалкана', 'name' => json_encode(['ru' => 'Фалкана'])],
        ];

        foreach ($countries as $country) {
            Country::updateOrCreate(
                ['name_ru' => $country['name_ru']],
                $country
            );
        }
    }
}
