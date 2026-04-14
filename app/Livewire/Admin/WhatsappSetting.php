<?php

namespace App\Livewire\Admin;

use App\Models\Setting;
use Livewire\Component;

class WhatsappSetting extends Component
{
    public string $whatsapp_number = '';
    public string $whatsapp_message = '';

    public function mount(): void
    {
        $this->whatsapp_number = Setting::get('whatsapp_number', '') ?? '';
        $this->whatsapp_message = Setting::get('whatsapp_message', '') ?? '';
    }

    protected function rules(): array
    {
        return [
            'whatsapp_number' => 'required|string|max:20',
            'whatsapp_message' => 'required|string|max:500',
        ];
    }

    public function save(): void
    {
        $this->validate();

        Setting::set('whatsapp_number', $this->whatsapp_number);
        Setting::set('whatsapp_message', $this->whatsapp_message);

        $this->dispatch('notify', message: 'Pengaturan WhatsApp berhasil disimpan!');
    }

    public function render()
    {
        return view('livewire.admin.whatsapp-setting')
            ->layout('layouts.admin')
            ->title('Pengaturan WhatsApp');
    }
}
