<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{use Illuminate\Database\Eloquent\Builder;use Illuminate\Support\Carbon;
/**
 * @property int $id
 * @property int $acmd_id
 * @property int $activity_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Acmd|null $acmd
 * @property-read \App\Models\Activity|null $activity
 * @method static Builder<static>|A2ct newModelQuery()
 * @method static Builder<static>|A2ct newQuery()
 * @method static Builder<static>|A2ct query()
 * @method static Builder<static>|A2ct whereAcmdId($value)
 * @method static Builder<static>|A2ct whereActivityId($value)
 * @method static Builder<static>|A2ct whereCreatedAt($value)
 * @method static Builder<static>|A2ct whereId($value)
 * @method static Builder<static>|A2ct whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class A2ct extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name_ru
 * @property array<array-key, mixed> $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Service> $services
 * @property-read int|null $services_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Star> $stars
 * @property-read int|null $stars_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Acmd newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Acmd newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Acmd query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Acmd whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Acmd whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Acmd whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Acmd whereNameRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Acmd whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Acmd extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name_ru
 * @property array<array-key, mixed> $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity whereNameRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Activity whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Activity extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $tour_id
 * @property int $activity_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Activity|null $activity
 * @property-read \App\Models\Tour|null $tour
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ActivityTour newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ActivityTour newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ActivityTour query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ActivityTour whereActivityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ActivityTour whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ActivityTour whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ActivityTour whereTourId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ActivityTour whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class ActivityTour extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Admin whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Admin extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name_ru
 * @property array<array-key, mixed> $name
 * @property int $service_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Service|null $service
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Tematics> $tematics
 * @property-read int|null $tematics_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereNameRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $category_id
 * @property int $tematics_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Category|null $category
 * @property-read \App\Models\Tematics|null $tematics
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CategoryTematics newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CategoryTematics newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CategoryTematics query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CategoryTematics whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CategoryTematics whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CategoryTematics whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CategoryTematics whereTematicsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CategoryTematics whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class CategoryTematics extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name_ru
 * @property array<array-key, mixed> $name
 * @property bool $top
 * @property string|null $img
 * @property string|null $link
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Collection newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Collection newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Collection query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Collection whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Collection whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Collection whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Collection whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Collection whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Collection whereNameRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Collection whereTop($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Collection whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Collection extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name_ru
 * @property array<array-key, mixed> $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Country newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Country newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Country query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Country whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Country whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Country whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Country whereNameRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Country whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Country extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $currency_id
 * @property string $code
 * @property string $name
 * @property int $site
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Currency newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Currency newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Currency query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Currency whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Currency whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Currency whereCurrencyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Currency whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Currency whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Currency whereSite($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Currency whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Currency extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name_ru
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Difficulty newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Difficulty newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Difficulty query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Difficulty whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Difficulty whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Difficulty whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Difficulty whereNameRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Difficulty whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Difficulty extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $code
 * @property string $name_ru
 * @property array<array-key, mixed> $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Food newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Food newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Food query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Food whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Food whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Food whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Food whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Food whereNameRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Food whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Food extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name_ru
 * @property array<array-key, mixed> $name
 * @property int|null $region_id
 * @property string|null $address
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Region|null $region
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hotel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hotel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hotel query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hotel whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hotel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hotel whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hotel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hotel whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hotel whereNameRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hotel whereRegionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hotel whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Hotel extends \Eloquent {}
}

namespace App\Models{
/**
 * @property string $name
 * @property int $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\IdFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Id newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Id newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Id query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Id whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Id whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Id whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Id whereValue($value)
 * @mixin \Eloquent
 */
	class Id extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $service_id
 * @property int|null $hotel_id
 * @property string $type
 * @property \Illuminate\Support\Carbon $ctime
 * @property \Illuminate\Support\Carbon $mtime
 * @property int $quota
 * @property int $quota1
 * @property int $quota2
 * @property array<array-key, mixed>|null $prices
 * @property array<array-key, mixed>|null $prices_partner
 * @property int $price
 * @property int|null $price_partner
 * @property \Illuminate\Support\Carbon|null $stop_date
 * @property int $off
 * @property int $lang
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\OfferDate> $dates
 * @property-read int|null $dates_count
 * @property-read \App\Models\Hotel|null $hotel
 * @property-read \App\Models\Service|null $service
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereCtime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereHotelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereMtime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereOff($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer wherePricePartner($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer wherePrices($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer wherePricesPartner($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereQuota($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereQuota1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereQuota2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereStopDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Offer whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Offer extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $offer_id
 * @property \Illuminate\Support\Carbon $start_date
 * @property \Illuminate\Support\Carbon|null $end_date
 * @property int $quota
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Offer|null $offer
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfferDate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfferDate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfferDate query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfferDate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfferDate whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfferDate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfferDate whereOfferId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfferDate whereQuota($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfferDate whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OfferDate whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class OfferDate extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int|null $user_id
 * @property int|null $tour_id
 * @property int|null $offer_id
 * @property string|null $status
 * @property numeric|null $total_price
 * @property \Illuminate\Support\Carbon|null $order_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Offer|null $offer
 * @property-read \App\Models\Tour|null $tour
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ord newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ord newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ord query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ord whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ord whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ord whereOfferId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ord whereOrderDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ord whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ord whereTotalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ord whereTourId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ord whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ord whereUserId($value)
 * @mixin \Eloquent
 */
	class Ord extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $ord_id
 * @property int|null $user_id
 * @property string $message
 * @property bool $is_admin
 * @property \Illuminate\Support\Carbon|null $sent_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Ord|null $ord
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrdMsg newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrdMsg newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrdMsg query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrdMsg whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrdMsg whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrdMsg whereIsAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrdMsg whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrdMsg whereOrdId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrdMsg whereSentAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrdMsg whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrdMsg whereUserId($value)
 * @mixin \Eloquent
 */
	class OrdMsg extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id Идентификатор записи
 * @property string $name_ru Название на русском
 * @property array<array-key, mixed> $name JSON с переводами
 * @property array<array-key, mixed> $service_type Тип услуги
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Tour> $tours
 * @property-read int|null $tours_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Partcount newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Partcount newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Partcount query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Partcount whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Partcount whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Partcount whereNameRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Partcount whereServiceType($value)
 * @mixin \Eloquent
 */
	class Partcount extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name_ru
 * @property array<array-key, mixed> $name
 * @property int|null $region_id
 * @property string|null $contact_info
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Region|null $region
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Partner newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Partner newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Partner query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Partner whereContactInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Partner whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Partner whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Partner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Partner whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Partner whereNameRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Partner whereRegionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Partner whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Partner extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $link
 * @property string $name_ru
 * @property array<array-key, mixed> $name
 * @property string|null $img
 * @property string|null $info
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Hotel> $hotels
 * @property-read int|null $hotels_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Partner> $partners
 * @property-read int|null $partners_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Target> $targets
 * @property-read int|null $targets_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Region newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Region newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Region query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Region whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Region whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Region whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Region whereInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Region whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Region whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Region whereNameRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Region whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Region extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $inn
 * @property string $orgname
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Seller newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Seller newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Seller query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Seller whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Seller whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Seller whereInn($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Seller whereOrgname($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Seller whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Seller whereUserId($value)
 * @mixin \Eloquent
 */
	class Seller extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $type
 * @property array<array-key, mixed>|null $name
 * @property int|null $acmd_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Acmd|null $acmd
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereAcmdId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Service whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Service extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $service_id
 * @property int|null $ord_id
 * @property \Illuminate\Support\Carbon|null $start_date
 * @property \Illuminate\Support\Carbon|null $end_date
 * @property bool $is_available
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Ord|null $ord
 * @property-read \App\Models\Service|null $service
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServiceDate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServiceDate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServiceDate query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServiceDate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServiceDate whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServiceDate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServiceDate whereIsAvailable($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServiceDate whereOrdId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServiceDate whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServiceDate whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServiceDate whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class ServiceDate extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string|null $name_ru
 * @property array<array-key, mixed>|null $name
 * @property int|null $acmd_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Acmd|null $acmd
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Star newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Star newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Star query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Star whereAcmdId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Star whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Star whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Star whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Star whereNameRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Star whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Star extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $link
 * @property string $name_ru
 * @property array<array-key, mixed> $name
 * @property int|null $region_id
 * @property string|null $info
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property-read \App\Models\Region|null $region
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Target newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Target newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Target query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Target whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Target whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Target whereInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Target whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Target whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Target whereNameRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Target whereRegionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Target whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Target extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name_ru
 * @property array<array-key, mixed> $name
 * @property int $service_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Category> $categories
 * @property-read int|null $categories_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tematics newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tematics newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tematics query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tematics whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tematics whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tematics whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tematics whereNameRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tematics whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tematics whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Tematics extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name_ru
 * @property array<array-key, mixed> $name
 * @property int|null $offer_id
 * @property int|null $region_id
 * @property int|null $partner_id
 * @property int|null $category_tematics_id
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $start_date
 * @property \Illuminate\Support\Carbon|null $end_date
 * @property numeric|null $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Activity> $activities
 * @property-read int|null $activities_count
 * @property-read \App\Models\Offer|null $offer
 * @property-read \App\Models\Partcount|null $partcount
 * @property-read \App\Models\Partner|null $partner
 * @property-read \App\Models\Region|null $region
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tour newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tour newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tour query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tour whereCategoryTematicsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tour whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tour whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tour whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tour whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tour whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tour whereNameRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tour whereOfferId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tour wherePartnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tour wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tour whereRegionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tour whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Tour whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Tour extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $link
 * @property string $name_ru
 * @property array<array-key, mixed> $name
 * @property int $muser
 * @property int|null $acmd_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Acmd|null $acmd
 * @property-read \App\Models\Admin|null $admin
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Txt newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Txt newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Txt query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Txt whereAcmdId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Txt whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Txt whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Txt whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Txt whereMuser($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Txt whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Txt whereNameRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Txt whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Txt extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property string|null $type
 * @property string|null $salt
 * @property Carbon|null $ctime
 * @property Carbon|null $ltime
 * @property Carbon|null $mtime
 * @property int $ecount
 * @property bool $status
 * @property string|null $phone
 * @property int $msg_user
 * @property int $msg_admin
 * @property int $msg_total
 * @property int $ord_count
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read DatabaseNotificationCollection<int, DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read Partner|null $partner
 * @property-read Collection<int, Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read Collection<int, Role> $roles
 * @property-read int|null $roles_count
 * @property-read Seller|null $seller
 * @property-read Collection<int, PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static UserFactory factory($count = null, $state = [])
 * @method static Builder<static>|User newModelQuery()
 * @method static Builder<static>|User newQuery()
 * @method static Builder<static>|User permission($permissions, $without = false)
 * @method static Builder<static>|User query()
 * @method static Builder<static>|User role($roles, $guard = null, $without = false)
 * @method static Builder<static>|User whereCreatedAt($value)
 * @method static Builder<static>|User whereCtime($value)
 * @method static Builder<static>|User whereEcount($value)
 * @method static Builder<static>|User whereEmail($value)
 * @method static Builder<static>|User whereEmailVerifiedAt($value)
 * @method static Builder<static>|User whereId($value)
 * @method static Builder<static>|User whereLtime($value)
 * @method static Builder<static>|User whereMsgAdmin($value)
 * @method static Builder<static>|User whereMsgTotal($value)
 * @method static Builder<static>|User whereMsgUser($value)
 * @method static Builder<static>|User whereMtime($value)
 * @method static Builder<static>|User whereName($value)
 * @method static Builder<static>|User whereOrdCount($value)
 * @method static Builder<static>|User wherePassword($value)
 * @method static Builder<static>|User wherePhone($value)
 * @method static Builder<static>|User whereRememberToken($value)
 * @method static Builder<static>|User whereSalt($value)
 * @method static Builder<static>|User whereStatus($value)
 * @method static Builder<static>|User whereType($value)
 * @method static Builder<static>|User whereUpdatedAt($value)
 * @method static Builder<static>|User withoutPermission($permissions)
 * @method static Builder<static>|User withoutRole($roles, $guard = null)
 * @mixin Eloquent
 */
	class User extends \Eloquent {}
}

