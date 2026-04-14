<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Setting extends Model
{
    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'key',
        'value',
    ];

    /**
     * Get a setting value by key.
     */
    public static function get(string $key, mixed $default = null): mixed
    {
        return Cache::remember("setting.{$key}", 3600, function () use ($key, $default) {
            $setting = static::where('key', $key)->first();
            return $setting ? $setting->value : $default;
        });
    }

    /**
     * Set a setting value by key.
     */
    public static function set(string $key, mixed $value): void
    {
        static::updateOrCreate(
            ['key' => $key],
            ['value' => $value]
        );

        Cache::forget("setting.{$key}");
    }

    /**
     * Get the WhatsApp number.
     */
    public static function whatsappNumber(): ?string
    {
        return static::get('whatsapp_number', '6281234567890');
    }

    /**
     * Get the WhatsApp CTA message.
     */
    public static function whatsappMessage(): string
    {
        return static::get('whatsapp_message', 'Halo, saya tertarik dengan produk Anda');
    }

    /**
     * Get the WhatsApp URL.
     */
    public static function whatsappUrl(?string $customMessage = null): string
    {
        $number = static::whatsappNumber();
        $message = urlencode($customMessage ?? static::whatsappMessage());

        return "https://wa.me/{$number}?text={$message}";
    }
}
